<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>

<body>

    <header>
        @include('includes.header')
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    </header>


    <body class="g-sidenav-show   bg-gray-100">
        <div class="min-height-300 bg-primary position-absolute w-100"></div>
        @include('includes.sidebar')
        <main class="main-content position-relative border-radius-lg ">
            <!-- Navbar -->
            @include('includes.navbar')

            <div class="container-fluid py-4">
                <div class="row">



                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body px-4 pt-3 pb-2">
                                <div class="table-responsive py-4">

                                    <form method="POST" action="{{ route('edit_payment_keys') }}">
                                        @csrf
                                        <fieldset>
                                            <legend class="text-center">Payments Keys</legend>
                                            <br>
                                            <div class="mb-3 my-5">
                                                <label for="stripePublicKey" class="form-label h5">Stripe Public
                                                    Key</label>
                                                <input type="text" id="stripePublicKey" name="stripe_public_key"
                                                    class="form-control" placeholder="Enter Stripe Public Key"
                                                    value="{{ $payment_methods['stripe_public_key'] ?? '' }}">
                                            </div>

                                            <div class="mb-3 my-5">
                                                <label for="stripePrivateKey" class="form-label h5">Stripe Secret
                                                    Key</label>
                                                <input type="text" id="stripePrivateKey" name="stripe_secret_key"
                                                    class="form-control" placeholder="Enter Stripe Private Key"
                                                    value="{{ $payment_methods['stripe_secret_key'] ?? '' }}">
                                            </div>

                                            <div class="mb-3 my-5">
                                                <label for="fatoorahSecretKey" class="form-label h5">Fatoorah Secret
                                                    Key</label>
                                                <input type="text" id="fatoorahSecretKey" name="fatoorah_secret_key"
                                                    class="form-control" placeholder="Enter Fatoorah Secret Key"
                                                    value="{{ $payment_methods['fatoorah_secret_key'] ?? '' }}">
                                            </div>

                                            <div class="mb-3 my-5">
                                                <label for="stripePrivateKey" class="form-label h5">Select Currency</label>
                                                <select id="currency" class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="currency" required>
                                                    <option value="" selected>--</option>
                                                    <option value="sar"
                                                        {{ $payment_methods['currency']== 'sar' ? 'selected' : '' }}>Saudi Riyal
                                                    </option>
                                                    <option value="aed"
                                                        {{ $payment_methods['currency']== 'aed' ? 'selected' : '' }}>United Arab Emirates Dirham
                                                    </option>
                                                    <option value="qar"
                                                        {{ $payment_methods['currency']== 'qar' ? 'selected' : '' }}>Qatari Riyal
                                                    </option>
                                                    <option value="usd"
                                                        {{ $payment_methods['currency']== 'usd' ? 'selected' : '' }}>United States Dollar
                                                    </option>
                                                    <option value="eur"
                                                        {{ $payment_methods['currency']== 'eur' ? 'selected' : '' }}>Euro
                                                    </option>
                                                </select>
                                            </div>

                                            <!-- Hidden input for the payment key ID if you're editing -->
                                            <input type="hidden" name="payment_key_id"
                                                value="{{ $payment_key_id ?? '' }}">

                                            <button type="submit" class="btn btn-primary my-5">Submit</button>
                                        </fieldset>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <!-- End Navbar -->
            <div class="container-fluid py-4">
                @include('includes.footer')
            </div>
        </main>


        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
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
                $.toast({
                    heading: 'Error',
                    text: '{{ session('error') }}',
                    position: 'top-right',
                    loaderBg: '#CA101A',
                    icon: 'error',
                    hideAfter: 3000,
                    stack: 6
                });
            </script>
        @endif
        <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.1/tinymce.min.js"></script>



    </body>


</body>

</html>
