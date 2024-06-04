<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use App\Models\ProjectModel;
use App\Models\Setting;
use Barryvdh\DomPDF\Facade\Pdf as Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MyFatoorah\Library\PaymentMyfatoorahApiV2;
use Illuminate\Support\Facades\Validator;

class MyFatoorahController extends Controller
{

    public $mfObj;

    //-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * create MyFatoorah object
     */

    public function __construct()
    {
        $type = 'fatoorah_secret_key';
        $existingSettings = Setting::where('type', $type)->first();
        $api_key = $existingSettings->value;
        $test_mode = true;
        $country_iso = 'AED';

        $this->mfObj = new PaymentMyfatoorahApiV2($api_key, $test_mode, $country_iso);
    }

    //-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Create MyFatoorah invoice
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|max:255',
            'cname' => 'required',
            'email' => 'required|email',
            'countryCode' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'IsSuccess' => 'false',
                'Message' => 'All Data Needed.',
            ];
            return response()->json($response);
        }

        $data = $validator->validated();
        $id = $request->post('id');
        $cname = $request->post('cname');
        $email = $request->post('email');
        $phone = $request->post('phone');
        $countryCode = $request->post('countryCode');
        $project = ProjectModel::find($id);

        try {
            $paymentMethodId = 0;
            $totalValue = $project->price;
            $curlData = $this->getPayLoadData($project->id, $project->title, $totalValue, $email, $cname, $phone,$countryCode);
            $data = $this->mfObj->getInvoiceURL($curlData, $paymentMethodId);

            $response = [
                'IsSuccess' => 'true',
                'Message' => 'Invoice created successfully.',
                'Data' => $data,
                'product' => $project
            ];

            $pdf = Dompdf::loadView('template', $response);
            $pdf->setPaper('A4', 'landscape');
            $pdfContent = $pdf->output();
            $pdfPath = 'public/invoices/' . uniqid('invoice_') . '.pdf';
            Storage::put($pdfPath, $pdfContent);
            $response = [
                'IsSuccess' => 'true',
                'Message' => 'Invoice created successfully.',
                'Data' => $data,
                'product' => $project,
                'pdf_url' => Storage::url($pdfPath)
            ];
            return response()->json($response);
        } catch (\Exception $e) {
            $response = ['IsSuccess' => 'false', 'Message' => $e->getMessage()];
            return response()->json($response);
        }
    }


    //-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * 
     * @param int|string $orderId
     * @return array
     */
    private function getPayLoadData($orderId, $productName, $totalValue, $email, $cname, $phone,$countryCode)
    {

        $callbackURL = route('myfatoorah.callback');
        return [
            'CustomerName'       => $cname,
            'InvoiceValue'       => $totalValue,
            'DisplayCurrencyIso' => 'AED',
            'CustomerEmail'      => $email,
            'CallBackUrl'        => $callbackURL,
            'ErrorUrl'           => $callbackURL,
            'MobileCountryCode'  => $countryCode,
            'CustomerMobile'     => $phone,
            'Language'           => 'en',
            'CustomerReference'  => $orderId,
            'ProductName'        => $productName,
            'SourceInfo'         => 'Laravel ' . app()::VERSION . ' - MyFatoorah Package ' . MYFATOORAH_LARAVEL_PACKAGE_VERSION
        ];
    }

    //-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Get MyFatoorah payment information
     * 
     * @return \Illuminate\Http\Response
     */
    public function callback()
    {
        try {
            $paymentId = request('paymentId');
            $data = $this->mfObj->getPaymentStatus($paymentId, 'PaymentId');
            $product_id = $data->CustomerReference;
            $project = ProjectModel::find($product_id);
            $order = new OrderModel([
                'product_id' => $product_id,
                'price' => $project->price,
                'status' => $data->InvoiceStatus,
                'email' => $data->CustomerEmail,
            ]);
            $order->save();
            $error = 'success';
            if ($data->InvoiceStatus == 'Paid') {
                $msg = 'Invoice is paid successfull.';
            } else {
                $msg = 'Invoice is not paid due to ' . $data->InvoiceError;
                $error = 'error';
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $error = 'error';
        }
        return redirect()->route('index')
            ->with($error, $msg);
    }

    //-----------------------------------------------------------------------------------------------------------------------------------------
}
