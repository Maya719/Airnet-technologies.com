<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use App\Models\ProjectModel;
use App\Models\Setting;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf as Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MyFatoorah\Library\PaymentMyfatoorahApiV2;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class MyFatoorahController extends Controller
{

    public $mfObj;
    public $currency;
    //-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * create MyFatoorah object
     */

    public function __construct()
    {
        $this->currency = get_currency();
        $type = 'fatoorah_secret_key';
        $existingSettings = Setting::where('type', $type)->first();
        $api_key = $existingSettings->value;

        $test_mode = 'live';
        #$country_iso = $this->currency;
        $country_iso = 'ARE';

        $this->mfObj = new PaymentMyfatoorahApiV2($api_key, $test_mode);
     
    }

    //-----------------------------------------------------------------------------------------------------------------------------------------

    /**
     * Create MyFatoorah invoice
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $input = $request->all();
        $project = ProjectModel::find($input["id"]);
        $customerData = [
            'name' => $input['firstname']. ' '. $input["lastname"],
            'email' => $input['email'],
            'company_name' => $input['company_name'],
            'phone' =>  $input['phone'],
            'countryCode' =>  $input['countryCode'],
        ];
   
        try {
            $paymentMethodId = 0;
            $totalValue = $project->price;
            
          $curlData = $this->getPayLoadData($project->id, $project->title, $totalValue, $customerData["email"], $customerData["name"], $customerData["phone"], $customerData["countryCode"]);

          $data = $this->mfObj->getInvoiceURL($curlData,$paymentMethodId);

       


             $order = new OrderModel([
                'product_id' => $project->id,
                'invoice_id' => $data["invoiceId"],
                'price' => $project->price,
                'status' => 'pending',
                'email' => $input['email'],
                'company_name' => $input['company_name'],
                'invoice_url' => $data["invoiceURL"],
            ]);
            $order->save();  
          
          return redirect()->route('myfatoorah_invoice', ['order' => $order->id]);
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
    private function getPayLoadData($orderId, $productName, $totalValue, $email, $cname, $phone, $countryCode)
    {

        $callbackURL = route('myfatoorah.callback');
        return [
            'CustomerName'       => $cname,
            'InvoiceValue'       => $totalValue,
            'DisplayCurrencyIso' => $this->currency,
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

            $error = 'success';
            if ($data->InvoiceStatus == 'Paid') {
                $msg = 'Invoice is paid successfull.';
                return redirect()->route('index')
                    ->with($error, $msg);
            } else {
                $msg = 'Invoice is not paid due to ' . $data->InvoiceError;
                $error = 'error';
                return redirect()->route('index')
                    ->with($error, $msg);
            }
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $error = 'error';
            return redirect()->route('index')
                ->with($error, $msg);
        }
    }

    public function invoice($order)
    {
        $order = OrderModel::find($order);
        $project = ProjectModel::find($order->product_id);
        $KeyType = 'InvoiceId';
        $invoiceDetails = $this->mfObj->getPaymentStatus($order->invoice_id, $KeyType);
        $ExpiryDate = $invoiceDetails->ExpiryDate;
        $CustomerMobile = $invoiceDetails->CustomerMobile;
        $CustomerName = $invoiceDetails->CustomerName;
        $invoice = $invoiceDetails;
        $invoice->id = $order->invoice_id;
        $invoice->customer_phone = $CustomerMobile;
        $invoice->due_date = strtotime($ExpiryDate);
        $invoice->customer_name = $CustomerName;
        $invoice->customer_email  = $order->email;
        $invoice->hosted_invoice_url = $order->invoice_url;
        $qrCodes = [];
        $simple = QrCode::size(150)->generate($order->invoice_url);
        $imagePath = public_path('assets/fonts/sign.svg');
        if (file_exists($imagePath)) {
            $imageData = file_get_contents($imagePath);

            $sign = base64_encode($imageData);
        } else {
            $sign = null;
        }
        return view('template', compact('order', 'invoice', 'project', 'simple', 'sign'));
    }
    //-----------------------------------------------------------------------------------------------------------------------------------------
}
