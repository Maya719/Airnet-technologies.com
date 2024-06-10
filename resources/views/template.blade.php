<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from harnishdesign.net/demo/html/koice/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2024 12:19:04 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <title>Invoice</title>
    <meta name="author" content="harnishdesign.net">
    <!-- Web Fonts
======================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>

    <!-- Stylesheet
======================= -->
    <link rel="stylesheet" type="text/css"
        href="https://harnishdesign.net/demo/html/koice/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://harnishdesign.net/demo/html/koice/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://harnishdesign.net/demo/html/koice/css/stylesheet.css" />
    <style>
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        @media (max-width: 445px) {
            .footer {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <!-- Container -->
    <div class="container-fluid invoice-container">
        <!-- Header -->
        <header>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 text-center">
                    <h2 class="text-4">Invoice</h4>
                </div>
                <div class="col-sm-3">
                    <img id="logo" src="{{ asset('assets/images/logos/1701175007_1701156435_final-logo.png') }}"
                        height="100" title="logo" alt="logo" />
                </div>
                <div class="col-sm-7">
                    <h4 class="text-4 mb-1">AirNet Information Technologies est.</h4>
                </div>
                <div class="col-sm-2 ">
                    <strong>Invoice No:</strong> <span
                        style="font-size:0.7rem">{{ strlen($invoice->id) > 10 ? substr($invoice->id, 0, 10) . '***' : $invoice->id }}</span>
                </div>
            </div>
            <hr>
        </header>

        <!-- Main Content -->
        <main>
            <div class="row gy-3">
                <div class="col-sm-4">
                    <p class="mb-1"><strong>Order ID:</strong> OD-{{ $order->id }}</p>
                    <p class="mb-1"><strong>Order Date:</strong>
                        {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</p>
                    <p class="mb-1"><strong>Invoice Expiry:</strong> {{ ' ' . date('d/m/Y', $invoice->due_date) }}</p>
                </div>
                <div class="col-sm-4"> <strong>Bill To:</strong>
                    <address>
                        AirNet Technologies est.<br />
                        Dubai, United Arab Emirates.<br />
                    </address>
                </div>
                <div class="col-sm-4"> <strong>Invoice To:</strong>
                    <address>
                        {{ $invoice->customer_name }}<br />
                        {{ $invoice->customer_email }}<br />
                        {{ $invoice->customer_phone }}<br />
                    </address>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table border mb-0">
                    <thead>
                        <tr class="bg-light">
                            <td class="col-5"><strong>Service</strong></td>
                            <td class="col-2 text-center"><strong>Price</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-5">
                                {{ $project->title }}
                            </td>
                            <td class="col-2 text-end">{{ strtoupper(get_currency()) }} {{ $project->price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="table border border-top-0 mb-0">
                    <tr class="bg-light">
                        <td class="text-end"><strong>Sub Total:</strong></td>
                        <td class="col-sm-2 text-end">{{ strtoupper(get_currency()) }} {{ $project->price }}</td>
                    </tr>
                    <tr class="bg-light">
                        <td class="text-end"><strong>Grand Total:</strong></td>
                        <td class="col-sm-2 text-end">{{ strtoupper(get_currency()) }} {{ $project->price }}</td>
                    </tr>
                </table>
            </div>
        </main>
        <!-- Footer -->
        <footer class="mt-5 footer">
            <div class="ms-2 mb-3">
                <p class="mb-1"><strong>Account No:</strong> *****98</p>
                <p class="mb-1"><strong>Bank:</strong> Alied Bank LTD.</p>
                <p class="mb-1"><strong>Swift Code:</strong> sw*****98</p>
            </div>
            <div class="text-left mb-4 text-center">
                <div class="lh-1 text-black-50 mb-3"><a href="{{ $invoice->hosted_invoice_url }}">Scan or Click to
                        Pay</a></div>
                {!! $simple !!}
            </div>
            <div class="text-right mb-4">
                <img id="logo" src="{{ asset('assets/fonts/sign.svg') }}" height="120" title="sign"
                    alt="sign" /><br>
                <div class="lh-1 text-black-50">Abdul Ghayoor Rana</div>
                <div class="lh-1 text-black-50 text-0"><small>CEO</small></div>
            </div>
        </footer>
        <div class="text-center">
            <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
                    class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print &
                    Download</a> </div>
        </div>
    </div>
</body>

</html>
