<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use App\Models\ProjectModel;
use App\Models\Setting;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use MyFatoorah\Library\MyfatoorahApiV2;
use Stripe\Invoice;

class PaymentController extends Controller
{


    public $data = [];
    public function create_session(Request $request)
    {
        $project = ProjectModel::find($request->post('id'));
        if ($project) {
            $stripeSecret = get_stripe_secret_key();
            if ($stripeSecret) {
                \Stripe\Stripe::setApiKey($stripeSecret);
                $session = \Stripe\Checkout\Session::create([
                    'payment_method_types' => ['card'],
                    'line_items' => [[
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $project->title,
                            ],
                            'unit_amount' => $project->price * 100,
                        ],
                        'quantity' => 1,
                    ]],
                    'metadata' => [
                        'plan_id' => $project->id,
                    ],
                    'mode' => 'payment',
                    'success_url' => env('APP_URL') . "/success?id=" . $request->post('id') . "&sid={CHECKOUT_SESSION_ID}",
                    'cancel_url' => env('APP_URL') . "/cancel?id=" . $request->post('id') . "&sid={CHECKOUT_SESSION_ID}",
                ]);
                $data = array('id' => $session->id, 'data' => $session, 'product' => $project);
                // $data = env('APP_URL') . "/cancel?id=" . $request->post('id') . "&sid=0";
                echo json_encode($data);
            } else {
                $this->data['error'] = true;
                $this->data['message'] = "Something wrong! Try again.";
                echo json_encode($this->data);
            }
        } else {
            $this->data['error'] = true;
            $this->data['message'] = "Service Not Available.";
            echo json_encode($this->data);
        }
    }
    public function soc(Request $request)
    {
        $id = $request->query('id');
        $sessionId = $request->query('sid');
        $stripeSecret = get_stripe_secret_key();

        if ($stripeSecret) {
            $stripe = new \Stripe\StripeClient($stripeSecret);
            $payment_details = $stripe->checkout->sessions->retrieve($sessionId);
            if ($payment_details->payment_status == 'paid') {
                $project = ProjectModel::find($id);
                $order = new OrderModel();
                $order->product_id = $id;
                $order->price = $project->price;
                $order->status = $payment_details->payment_status;
                $customer_details = $payment_details->customer_details;
                $order->email = $customer_details->email;
                $order->save();
                return redirect()->route('single_projects', ['id' => $id])->with('success', 'Payment Successful.');
            } else {
                return redirect()->route('single_projects', ['id' => $id])->with('error', 'Payment Unsuccessful.');
            }
        }

        return redirect()->route('single_projects', ['id' => $id])->with('error', 'Payment Unsuccessful. Stripe secret key is not available.');
    }


    public function stripe_invoice(Request $request)
    {
        $input = $request->all();
        $project = ProjectModel::find($input["id"]);
        $customerData = [
            'name' => $input['firstname'] . ' ' . $input['lastname'],
            'email' => $input['email'],
            'phone' => $input['countryCode'] . $input['phone'],
        ];
        try {
            $stripeSecret = get_stripe_secret_key();
            \Stripe\Stripe::setApiKey($stripeSecret);
            $customer = \Stripe\Customer::create($customerData);

            $customerId = $customer->id;

            $invoice = \Stripe\Invoice::create([
                'customer' => $customerId,
                'collection_method' => 'send_invoice',
                'days_until_due' => 30,
            ]);

            \Stripe\InvoiceItem::create([
                'customer' => $customerId,
                'amount' => $project->price * 100,
                'currency' => 'usd',
                'description' => $project->title,
                'invoice' => $invoice->id,
            ]);

            $invoice->sendInvoice();
            $order = new OrderModel();
            $order->invoice_id = $invoice->id;
            $order->product_id = $input["id"];
            $order->price = $project->price;
            $order->status = 'pending';
            $order->email = $input['email'];
            $order->invoice_url = $invoice->hosted_invoice_url;
            $order->invoice_pdf = $invoice->invoice_pdf;
            $order->save();
            return redirect()->route('invoice', ['order_id' => $order->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function create_invoice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'countryCode' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'IsSuccess' => false,
                'Message' => 'All Data Needed.',
            ];
            return redirect()->back()->withErrors($validator)->withInput()->with($response);
        }

        $options = $request->post('options');
        if ($options == 'stripe') {
            return view('redirect_to_post', ['route' => route('stripe_invoice'), 'input' => $request->all()]);
        } else {
            return view('redirect_to_post', ['route' => route('myfatoorah.invoice'), 'input' => $request->all()]);
        }
    }
    public function get_payment_keys()
    {

        $type = ['stripe_public_key', 'stripe_secret_key', 'fatoorah_secret_key','currency'];
        $payment_methods = [];

        $settings = Setting::whereIn('type', $type)->get();

        if ($settings->isNotEmpty()) {
            foreach ($settings as $setting) {
                $payment_methods[$setting->type] = $setting->value;
            }

            return view('payment_view', ['payment_methods' => $payment_methods, 'main_page' => "Payments"]);
        } else {
            return view('payment_view', ['payment_failure' => "Payment Methods are Empty", 'main_page' => "Payments"]);
        }
    }

    public function edit_payment_keys(Request $request)
    {

        try {
            $paymentKeys = $request->only(['stripe_public_key', 'stripe_secret_key', 'fatoorah_secret_key','currency']);
            foreach ($paymentKeys as $type => $value) {
                $setting = Setting::updateOrCreate(['type' => $type], ['value' => $value]);

                if ($setting) {
                    $payment_methods[$setting->type] = $setting->value;
                } else {
                    return redirect()->back()->with('error', 'Failed to update payment keys');
                }
            }

            return redirect()->back()->with('success', 'Payment keys updated successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to update payment keys');
        }
    }


    public function get_orders()
    {
        $get_orders = OrderModel::all();
        $services = ProjectModel::join('order', 'projects.id', '=', 'order.product_id')
            ->select('projects.title', 'projects.id')
            ->get()
            ->unique('title');

        $main_page = 'orders';

        // dd($services);


        return view('orders', compact('get_orders', 'main_page', 'services'));
    }
    public function invoice($order_id)
    {
        $order = OrderModel::find($order_id);
        $product_id = $order->product_id;
        $invoice_id = $order->invoice_id;
        $project = ProjectModel::find($product_id);
        $stripeSecret = get_stripe_secret_key();
        \Stripe\Stripe::setApiKey($stripeSecret);
        $invoice = \Stripe\Invoice::retrieve($invoice_id);
        $qrCodes = [];
        // $simple = QrCode::size(150)->generate($order->invoice_url);
        // return view('template', compact('invoice', 'project', 'order_id','simple'));
        return view('template', compact('invoice', 'project', 'order_id'));
    }
}
