<!doctype html>
<html lang="en">

<head>
    <title>Privacy Policy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        .privacy_policy {
            margin-top: 10rem;
        }

        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-bottom: 2.5rem;
        }

        .policy-text {
            flex-grow: 1;
            text-align: center;
        }

        .dropdown {
            position: absolute;
            right: 0;
        }
    </style>


</head>

<body>

    <header id="header" class="header fixed-top ">

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


        <div class="container privacy_policy">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center h4 language_cont flex-container">
                        <span class="policy-text">Privacy Policy</span>
                        <span class="dropdown">
                            <select id="languageSelect" class="form-select" aria-label="Default select example">
                                <option value="english" selected>English</option>
                                <option value="arabic">Arabic</option>
                            </select>
                        </span>
                    </p>
                    <div id="policyContainer">
                    </div>
                </div>
            </div>

        </div>




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

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.getElementById('languageSelect').addEventListener('change', function() {
            var selectedLanguage = this.value;
            fetchPolicy(selectedLanguage);
        });

        function fetchPolicy(language) {
            fetch("/get-privacy-policy?language=" + language)
                .then(response => response.json())
                .then(data => {

                    console.log(data.policy);
                    document.getElementById('policyContainer').innerHTML =  data.policy;
                })
                .catch(error => {
                    console.error('Error fetching policy:', error);
                });
        }

        fetchPolicy(document.getElementById('languageSelect').value);
    </script>



</body>

</html>
