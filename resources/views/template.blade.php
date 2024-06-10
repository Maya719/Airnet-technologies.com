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
    <!--Invoice wrap start here -->
    <div class="invoice_wrap coffee-invoice">
        <div class="invoice-container">
            <div class="invoice-content-wrap" id="download_section">
                <!--Header start here -->
                <header class="coffee_header" id="invo_header">
                    <div class="invoice-logo-content-coffee">
                        <div class="invoice-logo-coffee ms-5">
                            <a href="#"><img
                                    src="{{ asset('assets/images/logos/1701175007_1701156435_final-logo.png') }}"
                                    alt="logo"></a>
                        </div>
                    </div>
                </header>
                <!--Header end here -->
                <!--Invoice content start here -->
                <section class="agency-service-content ecommerce-invoice-content" id="coffee_shop_invoice">
                    {{-- <div class="coffee-shop-back-img-one">
                        <img src="{{ asset('assets/img/coffee-back-img.png') }}" alt="this is a back image"
                            style="width:75%;">
                    </div> --}}
                    <div class="container">
                        <!--Invoice owner name start here -->
                        <div class="invoice-owner-conte-wrap pt-40">
                            <div class="invo-to-wrap">
                                <div class="invoice-to-content">
                                    <p class="font-md color-light-black">Invice Expire:</p>
                                    <div class="font-md-grey color-grey "> {{ ' ' . date('Y-m-d', $invoice->due_date) }}</div>
                                    <p class="font-md color-light-black">Invoice To:</p>
                                    <h2 class="font-lg color-coffe ">{{ $invoice->customer_name }}</h2>
                                    <p class="font-md-grey color-grey ">{{ $invoice->customer_phone }}</p>
                                </div>
                            </div>
                            <div class="invo-pay-to-wrap">
                                <div class="invoice-pay-content">

                                    <p class="font-md color-light-black">Pay To:</p>
                                    <h2 class="font-lg color-coffe ">AirNet Technologies est.</h2>
                                    <p class="font-md-grey color-grey">Dubai, United Arab Emirates.</p>
                                </div>
                            </div>
                        </div>
                        <!--Invoice owner name end here -->
                        <!--Coffee table data start here -->
                        <div class="table-wrapper pt-40">
                            <table class="invoice-table coffee-table">
                                <thead>
                                    <tr class="invo-tb-header">
                                        <th class="font-md color-grey">Item</th>
                                        <th class="font-md color-grey">Price</th>
                                    </tr>
                                </thead>
                                <tbody class="invo-tb-body">
                                    <tr class="invo-tb-row">
                                        <td class="font-sm">{{ $project->title }}</td>
                                        <td class="font-sm">USD {{ $project->price }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--Coffee table data end here -->
                        <!--Invoice additional info start here -->
                        <div class="invo-addition-wrap pt-20">
                            <div class=" payment-wrap-car">
                                <table class="res-pay-table" style="border: none;">
                                    <tbody>
                                        <tr class="pay-data">
                                            <td class="font-md color-light-black pay-type">Account No:</td>
                                            <td class="font-md-grey color-grey pay-type">**928</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="font-md color-light-black pay-type">Bank:</td>
                                            <td class="font-md-grey color-grey pay-type">TD23651456</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="font-md color-light-black pay-type">Swaft Code:</td>
                                            <td class="font-md-grey color-grey pay-type">TD23651456</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="font-md color-light-black pay-type">Bank ID:</td>
                                            <td class="font-md-grey color-grey pay-type">TD23651456</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="font-md color-light-black pay-type">IAT:</td>
                                            <td class="font-md-grey color-grey pay-type">TD23651456</td>
                                        </tr>
                                        <tr class="pay-data">
                                            <td class="font-md color-light-black pay-type">IAC:</td>
                                            <td class="font-md-grey color-grey pay-type">TD23651456</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="invo-add-info-content text-center d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-12">
                                        <span style="color: black; margin-end:20px;">For online payment.</span><a
                                            href="{{ $invoice->hosted_invoice_url }}"> Click Here</a>
                                    </div>
                                    <div class="col-12" style="margin-top: -100px">
                                        {!! $simple !!}
                                    </div>
                                </div>
                            </div>
                            <div class="invo-bill-total width-30">
                                <table class="invo-total-table">
                                    <tbody>
                                        <tr>
                                            <td class="font-md color-light-black ">Sub Total:</td>
                                            <td class="font-md-grey color-grey text-right">USD {{ $project->price }}</td>
                                        </tr>
                                        <tr class="invo-grand-total">
                                            <td class="font-18-700 color-coffe pt-20">Grand Total:</td>
                                            <td class="font-18-500 color-light-black text-right pt-20">USD {{ $project->price }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--Invoice additional info end here -->

                        <div class="rest-payment-bill">
							<div class="payment-wrap payment-wrap-car" style="display: none">
								<table class="res-pay-table">
									<tbody>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Payment Details:</td>
											<td class="font-md-grey color-grey pay-type">Credit Card **928</td>
										</tr>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Date:</td>
											<td class="font-md-grey color-grey pay-type">14/04/2023</td>
										</tr>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Transaction ID:</td>
											<td class="font-md-grey color-grey pay-type">TD23651456</td>
										</tr>
										<tr class="pay-data">
											<td class="font-md color-light-black pay-type">Amount:</td>
											<td class="font-md-grey color-grey pay-type">$160.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="signature-wrap mb-3">
                                <div class="sign-img">
                                    {{-- <img class="signature-image" src="{{ asset('assets/fonts/sign.svg') }}"  alt="this is signature image"> --}}
                                </div>
                                <p class="font-sm-500">Abdul Ghyoor Rana</p>
                                <h3 class="font-md-grey color-light-black">CEO</h3>
                            </div>
						</div>
                    </div>
                </section>
                <!--Invoice content end here -->
            </div>
        </footer>
        <div class="text-center">
            <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
                    class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print &
                    Download</a> </div>
        </div>
    </div>
</body>

<!-- Mirrored from harnishdesign.net/demo/html/koice/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2024 12:19:04 GMT -->

</html>
