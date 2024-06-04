<!doctype html>
<html lang="en">

<head>
    <title>Team</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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

    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header mt-5">
                <h1 class="text-center mt-5">Our Team</h1>
                <p class="text-center my-2" style="font-size:1.15rem;">
                    "Airnet Technologies, led by a dedicated and experienced team, strives to provide the best
                    experience for
                    application users. When you aim for a superior, faster, and more efficient application, our expert
                    team ensures your vision's seamless journey from conception to product realization."
                </p>
            </header>


            <div class="row gy-4 mt-3">
                @foreach ($team_member as $member)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch " data-aos="fade-up" data-aos-delay="100">
                        <div class="more_member">
                            <div class="member-img">
                                <img src="{{ $member['image'] }}" class="img-fluid" alt="{{ $member['name'] }}">
                            </div>
                            <div class="member-info">
                                <h4>{{ $member['name'] }}</h4>
                                <span>{{ $member['designation'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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



</body>

</html>
