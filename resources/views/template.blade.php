<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<!-- Mirrored from up2client.com/envato/digital-invoica/main-file/coffee_shop_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2024 05:38:35 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Invoice</title>
    <link href="assets/images/favicon/icon.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/invoice/invoice.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/invoice/media.css') }}">
    <style>
        /* Default image size */
        .signature-image {
            width: auto;
            height: auto;
        }

        /* Image size for small screens */
        @media only screen and (max-width: 600px) {
            .signature-image {
                width: 100px;
                height: auto; /* Maintain aspect ratio */
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
                                    {{-- <div class="col-12" style="margin-top: -100px">
                                        {!! $simple !!}
                                    </div> --}}
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
            <!--Bottom content start here -->
            <section class="agency-bottom-content d-print-none" id="agency_bottom">
                <!--Print-download content start here -->
                <div class="invo-buttons-wrap">
                    <div class="invo-print-btn invo-btns">
                        <a href="javascript:window.print()" class="print-btn">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_10_61)">
                                    <path
                                        d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_10_61">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg> --}}
                            <span class="inter-700 medium-font">Print</span>
                        </a>
                    </div>
                    {{-- <div class="invo-down-btn invo-btns">
                        <a class="download-btn" id="generatePDF">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5_246)">
                                    <path
                                        d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 11L12 16L17 11" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5_246">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="inter-700 medium-font">Download</span>
                        </a>
                    </div> --}}
                    <div class="invo-down-btn invo-btns">
                        <a class="download-btn" style="text-decoration: none; color:#FFFFFF"
                            href="{{ $invoice->hosted_invoice_url }}">
                            <span class="inter-700 medium-font">Pay Now</span>
                        </a>
                    </div>
                </div>
                <!--Print-download content end here -->
                <!--Note content start -->
                <div class="invo-note-wrap">
                    <div class="note-title">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_8_240)">
                                <path
                                    d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19"
                                    stroke="#12151C" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z"
                                    stroke="#12151C" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_8_240">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="font-md color-light-black">Note:</span>
                    </div>
                    <h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not
                        require physical signature.</h3>
                </div>
                <!--Note content end -->
            </section>
            <!--Bottom content end here -->
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('assets/js/invoice/jquery.min.js') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/invoice/jspdf.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/invoice/html2canvas.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/invoice/custom.js') }}">

</body>

</html>
