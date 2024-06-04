<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Airnet Technologies</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="pragma" content="no-store" />


    <!-- Favicons -->
    <link href="{{asset(get_favicon()) }}" rel="icon">
    <link href="{{asset(get_favicon()) }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
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

    <!-- ======= Recent Blog Posts Section ======= -->
    <section class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h1 class="text-center mt-5">Blogs</h1>
            </header>

            <div class="row">
                @foreach ($more_blogs as $blogs)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img">
                                <img src="{{ asset($blogs['image']) }}"
                                    class="img-fluid" alt="">
                            </div>

                            <h3 class="post-title">
                                {{ $blogs['title'] }}
                            </h3>
                            <a href="{{ route('blog-description', ['blog_id' => $blogs['id']]) }}"
                                class="readmore stretched-link mt-auto"><span>Read
                                    More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- End Recent Blog Posts Section -->


    <footer>
        @include('footer')
    </footer>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>



</body>

</html>
