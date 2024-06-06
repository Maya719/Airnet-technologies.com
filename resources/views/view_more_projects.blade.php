<!doctype html>
<html lang="en">


<head>
    <title>Projects</title>
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

            <div class="container" data-aos="fade-up">


                <div class="col-lg-12 my-5 text-center">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                    </div>
                </div>


                <ul class="nav nav-tabs  d-flex justify-content-around align-items-center"
                    style="background-color: #ffffff; padding:0.7rem; border-radius:15px; color:rgb(0, 0, 0); "
                    id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">Peri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Web Development</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ai_proj-tab" data-bs-toggle="tab"
                            data-bs-target="#ai_proj-tab-pane" type="button" role="tab"
                            aria-controls="ai_proj-tab-pane" aria-selected="false">Artificial Intelligence</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">App Development</button>
                    </li>

                </ul>
                <div class="tab-content my-5" id="myTabContent">
                    {{-- peri  projects --}}
                    <div class="tab-pane fade show active " id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="row gy-4  d-flex justify-content-center align-items-center">
                            <!-- Loop through projects -->
                            @foreach ($more_projects as $projects)
                                @if ($projects['category'] == 'plan')
                                    <div class="card mb-3 projects_cards_css">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    loading="lazy"
                                                    alt="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-md-8 ">
                                                <div
                                                    class="card-body h-100 d-flex flex-column justify-content-between align-item-center ">
                                                    <a
                                                        href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                        <h5 class="card-title"><span>
                                                                {{ $projects['title'] }} &nbsp;
                                                            </span>
                                                        </h5>
                                                    </a>
                                                    {{-- <a href="{{ route('single_projects', ['id' => $projects['id']]) }}"
                                                    class="description-container">
                                                    {!! $projects['description'] !!}
                                                </a> --}}

                                                    <div class="description-container">
                                                        <a
                                                            href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                            {!! $projects['description'] !!}
                                                        </a>
                                                    </div>
                                                    <button class="read-more-button">Read More</button>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <br>

                        </div>
                    </div>

                    {{-- web projects --}}
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="row gy-4 d-flex justify-content-center align-items-center">
                            <!-- Loop through projects -->
                            @foreach ($more_projects as $projects)
                                @if ($projects['category'] == 'Web')
                                    <div class="card mb-3 projects_cards_css">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    loading="lazy"
                                                    alt="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-md-8 ">
                                                <div
                                                    class="card-body h-100 d-flex flex-column justify-content-between align-item-center ">
                                                    <a
                                                        href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                        <h5 class="card-title"><span>
                                                                {{ $projects['title'] }} &nbsp;
                                                            </span>
                                                        </h5>
                                                    </a>
                                                    <div class="description-container">
                                                        <a
                                                            href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                            {!! $projects['description'] !!}
                                                        </a>
                                                    </div>
                                                    <button class="read-more-button">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <br>

                        </div>
                    </div>


                    {{-- ai projects --}}
                    <div class="tab-pane fade" id="ai_proj-tab-pane" role="tabpanel" aria-labelledby="ai_proj-tab"
                        tabindex="0">
                        <div class="row gy-4 d-flex justify-content-center align-items-center">
                            <!-- Loop through projects -->
                            @foreach ($more_projects as $projects)
                                @if ($projects['category'] == 'Ai')
                                    <div class="card mb-3 projects_cards_css">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    loading="lazy"
                                                    alt="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-md-8 ">
                                                <div
                                                    class="card-body h-100 d-flex flex-column justify-content-between align-item-center ">
                                                    <a
                                                        href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                        <h5 class="card-title"><span>
                                                                {{ $projects['title'] }} &nbsp;
                                                            </span>
                                                        </h5>
                                                    </a>
                                                    <div class="description-container">
                                                        <a
                                                            href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                            {!! $projects['description'] !!}
                                                        </a>
                                                    </div>
                                                    <button class="read-more-button">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <br>
                        </div>

                    </div>


                    {{-- app projects  --}}
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="row gy-4 d-flex justify-content-center align-items-center">
                            <!-- Loop through projects -->
                            @foreach ($more_projects as $projects)
                                @if ($projects['category'] == 'App')
                                    <div class="card mb-3 projects_cards_css">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    loading="lazy"
                                                    alt="{{ asset('storage/' . $projects['thumbnail']) }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-md-8">
                                                <div
                                                    class="card-body h-100 d-flex flex-column justify-content-between align-item-center ">
                                                    <a
                                                        href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                        <h5 class="card-title"><span>
                                                                {{ $projects['title'] }} &nbsp;
                                                            </span>
                                                        </h5>
                                                    </a>
                                                    <div class="description-container">
                                                        <a
                                                            href="{{ route('single_projects', ['id' => $projects['id']]) }}">
                                                            {!! $projects['description'] !!}
                                                        </a>
                                                    </div>
                                                    <button class="read-more-button">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <br>
                        </div>
                    </div>
                </div>


            </div>
            <br>
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

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var descriptionContainers = document.querySelectorAll('.description-container');

            descriptionContainers.forEach(function(container) {
                var contentHeight = container.scrollHeight;
                var maxHeight = parseInt(window.getComputedStyle(container).maxHeight);

                if (contentHeight > maxHeight) {
                    var readMoreButton = container.nextElementSibling;
                    readMoreButton.style.display = 'block';
                }
            });

            var readMoreButtons = document.querySelectorAll('.read-more-button');

            readMoreButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var container = this.previousElementSibling;
                    container.classList.toggle('expanded');
                    if (container.classList.contains('expanded')) {
                        this.textContent = 'Read Less';
                    } else {
                        this.textContent = 'Read More';
                    }
                });
            });
        });
    </script>


</body>

</html>
