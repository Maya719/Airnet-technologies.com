<!doctype html>
<html lang="en">
<style>
    /*----------------------------------------*/
    /*  2.3 Buttons
/*----------------------------------------*/
    /* theme btn */
    .tp-btn {
        position: relative;
        font-weight: 500;
        display: inline-block;
        font-size: 15px;
        color: #0D1C37;
        ;
        background: #FFC700;
        ;
        text-align: center;
        padding: 18px 33px;
        z-index: 1;
        overflow: hidden;
    }

    .tp-btn i,
    .tp-btn svg {
        margin-right: 9px;
    }

    .tp-btn svg {
        -webkit-transform: translateY(-2px);
        -moz-transform: translateY(-2px);
        -ms-transform: translateY(-2px);
        -o-transform: translateY(-2px);
        transform: translateY(-2px);
    }

    .tp-btn::before {
        content: "";
        position: absolute;
        top: 0;
        right: -50px;
        bottom: 0;
        left: 0;
        border-right: 50px solid transparent;
        border-bottom: 80px solid #0D1C37;
        ;
        transform: translateX(-100%);
        transition: all 0.3s ease-in-out;
        z-index: -1;
    }

    .tp-btn:hover {
        color: #fff;
    }

    .tp-btn:hover::before {
        transform: translateX(0);
    }

    .tp-btn:focus {
        color: #ffffff;
    }

    .tp-btn-2 span {
        position: relative;
        display: inline-block;
        font-weight: 500;
        font-size: 15px;
        color: #0D1C37;
        ;
        background: #FFC700;
        ;
        text-align: center;
        padding: 18px 36px;
        z-index: 1;
        overflow: hidden;
        margin-right: -2px;
        transition: all 0.3s ease-in-out;
    }

    .tp-btn-2 span::before {
        content: "";
        position: absolute;
        top: 0;
        right: -50px;
        bottom: 0;
        left: 0;
        border-right: 50px solid transparent;
        border-bottom: 80px solid #0D1C37;
        ;
        transform: translateX(-100%);
        transition: all 0.3s ease-in-out;
        z-index: -1;
    }

    .tp-btn-2 span:hover {
        color: #fff;
    }

    .tp-btn-2 span:hover::before {
        transform: translateX(0);
    }

    .tp-btn-2 i,
    .tp-btn-2 svg {
        -webkit-transform: translateY(0px);
        -moz-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -o-transform: translateY(0px);
        transform: translateY(0px);
    }

    .tp-btn-2:focus {
        color: #ffffff;
    }

    .tp-btn-effect-blue a,
    .tp-btn-effect-blue button {
        display: inline-block;
        font-weight: 500;
        font-size: 15px;
        text-align: center;
        padding: 25px 25px;
        position: relative;
        z-index: 1;
        overflow: hidden;
        margin-right: -2px;
        transition: all 0.3s ease-in-out;
    }

    .tp-btn-effect-blue a::before,
    .tp-btn-effect-blue button::before {
        content: "";
        position: absolute;
        top: 0;
        right: -50px;
        bottom: 0;
        left: 0;
        border-right: 50px solid transparent;
        border-bottom: 80px solid #FFC700;
        ;
        transform: translateX(-100%);
        transition: all 0.3s ease-in-out;
        z-index: -1;
    }

    .tp-btn-effect-blue a:hover,
    .tp-btn-effect-blue button:hover {
        color: var(--tp-text-2);
    }

    .tp-btn-effect-blue a:hover::before,
    .tp-btn-effect-blue button:hover::before {
        transform: translateX(0);
    }

    .tp-btn-effect-blue i,
    .tp-btn-effect-blue svg {
        margin-right: 0px;
        display: flex;
        justify-content: center;
        line-height: 0px;
    }

    .tp-btn-effect-blue svg {
        -webkit-transform: translateY(-2px);
        -moz-transform: translateY(-2px);
        -ms-transform: translateY(-2px);
        -o-transform: translateY(-2px);
        transform: translateY(-2px);
    }

    .tp-btn-effect a,
    .tp-btn-effect button {
        display: inline-block;
        font-weight: 500;
        font-size: 15px;
        text-align: center;
        padding: 25px 25px;
        position: relative;
        z-index: 1;
        overflow: hidden;
        margin-right: -2px;
        transition: all 0.3s ease-in-out;
    }

    .tp-btn-effect a::before,
    .tp-btn-effect button::before {
        content: "";
        position: absolute;
        top: 0;
        right: -50px;
        bottom: 0;
        left: 0;
        border-right: 50px solid transparent;
        border-bottom: 80px solid #FFC700;
        ;
        transform: translateX(-100%);
        transition: all 0.3s ease-in-out;
        z-index: -1;
    }

    .tp-btn-effect a:hover,
    .tp-btn-effect button:hover {
        color: var(--tp-text-2);
    }

    .tp-btn-effect a:hover::before,
    .tp-btn-effect button:hover::before {
        transform: translateX(0);
    }

    .tp-btn-effect i,
    .tp-btn-effect svg {
        margin-right: 0px;
        display: flex;
        justify-content: center;
        line-height: 0px;
    }

    .tp-btn-effect svg {
        -webkit-transform: translateY(-2px);
        -moz-transform: translateY(-2px);
        -ms-transform: translateY(-2px);
        -o-transform: translateY(-2px);
        transform: translateY(-2px);
    }
</style>

<head>
    <title>Projects</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset(get_favicon()) }}" rel="icon">
    <link href="{{ asset(get_favicon()) }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- jquery toast cdn --}}
    <link href="{{ asset('assets/css/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/js/jquery.toast.min.js') }}"></script>
    <style>
        .radio-input {
            display: none;
        }

        .payment_opt {
            margin: 1.1rem 2.2rem;
            height: 10vh;
            width: 25rem;
            border: 2px solid #FFFFFF;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            text-align: center;
            top: 50%;
            border: 3px solid #e9e6e6;
            border-radius: 22px;
            position: relative;
            overflow: hidden;

        }

        .radio-input:checked+.payment_opt {
            border-color: #007BFF;
            color: #fff;
        }

        .payment_opt::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transform: skewX(-20deg);
            transition: left 0.7s ease;
        }

        .payment_opt:hover::before {
            left: 100%;
        }


        .payment_opt img:first-of-type:not(.fatoorah_img) {
            width: 30%;
            height: auto;
        }

        .fatoorah_img {
            width: 40%;
            height: auto;
        }

        .payment_checkbox {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0.5rem 0.5rem;
            width: 100%;
            height: auto;
        }



        .fade-in {
            animation: fadeIn 0.5s ease-in-out forwards;
        }

        .fade-out {
            animation: fadeOut 0.5s ease-in-out forwards;
        }

        .fatoorahFields {
            display: flex;
            justify-content: space-around;
            align-items: center
        }

        .payment_cont {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 5px;
            height: 50%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @media screen and (max-width:770px) {
            .fatoorahFields {

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
            }
        }


        @media screen and (max-width:500px) {

            .payment_opt {
                height: 15vh;
                width: 15rem;
                justify-content: space-around;

            }

            .fatoorah_img {
                width: auto;
                height: 7vh;
            }
        }
        .price_cont {

            display: flex;
            justify-content: start;
            align-items: center;
            font-size: 16px;
            color: #333;

            margin: 1.6rem 0;

        }

        .price_cont p {
            margin: 0;
        }

        .price_cont p:first-child {
            margin-right: 10px;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .price_cont p:last-child {
            font-weight: bold;
            font-size: 1.3rem;
            background: linear-gradient(to right, #007bff, #093768);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>
    <header id="header" class="header fixed-top">

        <div class="container navigation_bar_2">
            <div>
                <a href="/" class="logo_2">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo_img">
                </a>
            </div>
            <nav id="navbar" class="navbar">
                @include('navbar_2')
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>

    </header>

    <main>

        <section id="team" class="team my-5">
            <section class="tp-project-details-area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="tp-project-details-thumb-1 text-center mb-5">
                                <img src="{{ asset('storage/' . $project['thumbnail']) }}" height="500"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card my-3">
                            <div class="card-body ">
                                <div class="col-lg-12">
                                    <div class="tp-project-details-text mb-50 my-3 ">
                                        <h3 class="tp-project-details-title my-5">{{ $project['title'] }}</h3>
                                        <p>
                                            {!! $project['description'] !!}
                                        </p>
                                        <div class="price_cont">
                                            @if ($project['price'] > 0)
                                                <p>Price: &nbsp;</p>
                                                <p>
                                                    AED &nbsp;

                                                    {{ $project['price'] }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="card ">
                            <div>
                                <div class="card-body">
                                    <div id="" class="col-md-8 mx-auto paymet-box"></div>
                                    @if ($project['price'] > 0)
                                        <p>
                                        <h3 class="text-center">Payment Options </h3>
                                        <p class="text-center"> Select your payment options</p>
                                        </p>
                                    @endif
                                    @if ($project['price'] > 0)
                                        <div class="col-lg-12 col-md-12">
                                            <div class="payment-method">

                                                <div class="payment_cont">
                                                    <div>
                                                        @if (get_stripe_public_key() && get_stripe_secret_key())
                                                            <input type="radio" id="option1" name="options"
                                                                value="stripe" class="radio-input" checked>
                                                            <label for="option1" class="payment_opt">
                                                                <img src="{{ asset('assets/img/stripe.png') }}"
                                                                    alt="Stripe">
                                                            </label>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        @if (get_fatoorah_secret_key())
                                                            <input type="radio" id="option2" name="options"
                                                                value="fatoorah" class="radio-input">
                                                            <label for="option2" class="payment_opt mt-3">
                                                                <img src="{{ asset('assets/img/fatoorah.png') }}"
                                                                    class="fatoorah_img" alt="Fatoorah">
                                                            </label>
                                                        @endif
                                                    </div>

                                                    <div class="col-lg-12 mt-3 fatoorah-field" style="display: none;">
                                                        <label for="cname">Name</label>
                                                        <input type="text" class="form-control" id="cname"
                                                            name="cname">
                                                    </div>
                                                    <div class="col-lg-4 mt-3 fatoorah-field" style="display: none;">
                                                        <label for="countryCode">Country</label>
                                                        <select class="form-select mdb-select" name="countryCode"
                                                            id="countryCode" required>
                                                            <option value="" selected>Select a Country
                                                            </option>
                                                            <option value="+965">+965 - Kuwait</option>
                                                            <option value="+966">+966 - Saudi Arabia</option>
                                                            <option value="+973">+973 - Bahrain</option>
                                                            <option value="+971">+971 - United Arab Emirates
                                                            </option>
                                                            <option value="+974">+974 - Qatar</option>
                                                            <option value="+968">+968 - Oman</option>
                                                            <option value="+962">+962 - Jordan</option>
                                                            <option value="+20">+20 - Egypt</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-8 mt-3 fatoorah-field" style="display: none;">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="phone">
                                                    </div>
                                                    <div class="col-lg-12 mt-3 fatoorah-field" style="display: none;">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email">
                                                    </div>
                                                </div>

                                                <div class="container mt-4">
                                                    <div class="row">
                                                        <div class="col-md-6 offset-md-3">
                                                            <div class="order-button-payment text-center">
                                                                <button type="button" id="payment-button"
                                                                    class="tp-btn tp-color-btn w-100 banner-animation ">Buy
                                                                    it
                                                                    now
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-lg-12 col-md-12">
                                                <div class="payment-method">
                                                    <div class="order-button-payment mt-4">
                                                        <a href="{{ $project['link'] }}" id="payment-button"
                                                            class="tp-btn tp-color-btn w-100 banner-animation">Visit</a>
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </section>
            <!-- project details area end -->
        </section>
    </main>
    <footer>
        @include('footer')
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <?php if (get_stripe_public_key()) { ?>
    <script src="https://js.stripe.com/v3/"></script>
    <?php } ?>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <?php if (get_stripe_public_key()) { ?>
    <script>
        var get_stripe_publishable_key = "<?php echo get_stripe_public_key(); ?>";
    </script>
    <?php } ?>
    <script>
        var stripeButton = document.getElementById('payment-button');
        stripeButton.addEventListener('click', function() {
            processPayment();
        });

        function processPayment() {
            var selectedOption = document.querySelector('input[name="options"]:checked').value;
            if (selectedOption === "stripe") {
                stripeFunction();
            } else if (selectedOption === "fatoorah") {
                fatoorahFunction();
            }
        }

        function fatoorahFunction() {
            $('#payment-button').attr('disabled', 'disabled');
            var cname = $('#cname').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var countryCode = $('#countryCode').val();
            $.ajax({
                url: '{{ route('myfatoorah.invoice') }}',
                type: 'POST',
                data: {
                    id: {{ $project->id }},
                    cname: cname,
                    email: email,
                    phone: phone,
                    countryCode: countryCode,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#payment-button').removeAttr('disabled');
                    if (response.IsSuccess == "true") {
                        downloadPDF(response.pdf_url);
                        $.toast({
                            heading: 'Success',
                            text: response.Message,
                            position: 'top-right',
                            loaderBg: '#4CAF50',
                            icon: 'success',
                            hideAfter: 3000,
                            stack: 6
                        });
                    } else {
                        $.toast({
                            heading: 'Something went wrong.',
                            text: response.Message,
                            position: 'top-right',
                            loaderBg: '#3cb878',
                            icon: 'error',
                            hideAfter: 3000,
                            stack: 6
                        });
                        console.log(response);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', error);
                    $('#payment-button').removeAttr('disabled');
                }
            });
        }

        function downloadPDF(pdfUrl) {
            var anchor = document.createElement('a');
            anchor.style.display = 'none';
            document.body.appendChild(anchor);
            anchor.href = pdfUrl;
            anchor.download = 'invoice.pdf';
            anchor.click();
            document.body.removeChild(anchor);
        }

        function stripeFunction() {
            var stripe = Stripe(get_stripe_publishable_key);
            $('#payment-button').attr('disabled', 'disabled');
            $.ajax({
                url: '{{ route('create_session') }}',
                type: 'POST',
                data: {
                    id: {{ $project['id'] }}
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    var response = JSON.parse(response);
                    console.log(response);
                    $('#payment-button').removeAttr('disabled');
                    if (response.error != true) {
                        return stripe.redirectToCheckout({
                            sessionId: response.id
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', error);
                    $('#payment-button').removeAttr('disabled');
                }
            });
        }
    </script>
    <style>
        .visit_btn {
            color: black;
            text-align: center;
            display: inline-block;
            padding: 5px 10px;
            background: linear-gradient(to right, lightblue, white);
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .visit_btn:hover {
            background: linear-gradient(to right, #012971, #4682B4);
            color: white;
        }
    </style>

    <script src="{{ asset('assets/vendor/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    @if (session('success'))
        <script>
            $.toast({
                heading: 'Success',
                text: '{{ session('success') }}',
                position: 'top-right',
                loaderBg: '#4CAF50',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            console.log('{{ session('error') }}');
            $.toast({
                heading: 'Something went wrong.',
                text: '{{ session('error') }}',
                position: 'top-right',
                loaderBg: '#3cb878',
                icon: 'error',
                hideAfter: 3000,
                stack: 6
            });
        </script>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log("DOM loaded");

            const stripeRadio = document.getElementById('option1');
            const myFatoorahRadio = document.getElementById('option2');
            const fatoorahFields = document.querySelectorAll('.fatoorah-field');

            // Add event listener for Stripe radio button
            stripeRadio.addEventListener('change', function() {
                console.log("Stripe radio button clicked");
                // Hide additional input fields for MyFatoorah
                fatoorahFields.forEach(function(field) {
                    field.style.display = 'none';
                });
            });

            // Add event listener for MyFatoorah radio button
            myFatoorahRadio.addEventListener('change', function() {
                console.log("MyFatoorah radio button clicked");
                // Show additional input fields for MyFatoorah
                fatoorahFields.forEach(function(field) {
                    field.style.display = 'block';
                });
            });

            // Trigger change event to set the initial state
            if (stripeRadio.checked) {
                stripeRadio.dispatchEvent(new Event('change'));
            } else if (myFatoorahRadio.checked) {
                myFatoorahRadio.dispatchEvent(new Event('change'));
            }
        });
    </script>



</body>

</html>
