<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Airnet Technologies</title>
    <meta content="Airnet Technologies have  helped many users with our top-rated apps, websites, and custom software. "
        name="description">
    <meta
        content="Airnet Technologies, Software House, IT consultancy, App development, Website Development, Artificial Intelligence"
        name="keywords">

    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="pragma" content="no-store" />


    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="apple-touch-icon">

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


    {{-- google reCaptcha --}}

    <!-- Include script -->
    {!! htmlScriptTagJsApi() !!}

</head>

<body>

    <!-- ======= navbar ======= -->

    @include('navbar')

    <!-- ======= navbar section ends ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">

                    <h1>Airnet Technologies</h2>

                        <h2>Place of Innovating Solutions</h2>

                        <h2>We are a team of <strong style="text-decoration:underline;">skilled developers </strong>
                            creating technical solutions.</h2>
                        <div class="d-flex">

                            <div class="text-center text-lg-start">
                                <a href="#about"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>About Us</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                        </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->


    @if (session('success'))
        <script>
            $.toast({
                heading: 'Success',
                text: "Message Send Sucessfully",
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'success'
            })
        </script>
    @elseif(session('error'))
        <script>
            $.toast({
                heading: 'Error',
                text: "Fail to Send Message",
                showHideTransition: 'slide',
                position: 'top-right',
                icon: 'error'
            })
        </script>
    @endif

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h4 class="mb-5">About Us</h5>
                                <h2>
                                    We are a <strong class="about_heading_1"> well recognized software development
                                        company</strong>, specializing in
                                    creating
                                    innovative solutions.
                                </h2>
                                <p>
                                    We've helped many users with our top-rated apps, websites, and custom software. Our
                                    global mission is to deliver high-quality applications on the Play Store and provide
                                    custom app, website, API, and hybrid app services to users worldwide.
                                </p>
                                <div class="text-center text-lg-start">
                                    <a href="#contact"
                                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Get in touch</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->


        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row">

                    <h2 class="text-center my-4 ">Our Development Process</h2>

                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"> <i class="bi bi-clipboard-data"></i> </div>
                            <h4 class="title">
                                <p>Analysis and Design</p>
                            </h4>
                            <p class="description">
                                In this phase, engineers define project requirements, system architecture, design
                                interfaces, and ensure the project aligns with its requirements.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"> <i class="bi bi-laptop"></i></div>
                            <h4 class="title">
                                <p>Implementation and Testing</p>
                            </h4>
                            <p class="description">
                                In this phase, engineers convert design to develop item. They write code as per
                                the
                                specifications and perform testing to ensure software functionality.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon "><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title ">
                                <p>Deployment and Maintenance</p>
                            </h4>
                            <p class="description">
                                In this phase, the software is released to users. It involves software deployment, and
                                making necessary updates to ensure it runs smoothly.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= Why Choose Us ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 choose_us">
                        <img src="{{ asset('assets/img/why_us.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3 class="my-2">Why Partner with Our Team?</h3>
                        <p class="fst-italic">
                        <h5>Here are the reasons that make us <span
                                class="choose_us_txt"><strong>Unique</strong></span>
                        </h5>
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>
                                Client-Centric Approach
                            </li>
                            <li><i class="bi bi-check-circle"></i>
                                Innovative and Quality Solution
                            </li>
                            <li><i class="bi bi-check-circle"></i>
                                Expert Team
                            </li>

                            <li><i class="bi bi-check-circle"></i>
                                Timely Delivery Projects
                            </li>
                            <li><i class="bi bi-check-circle"></i>
                                Affordable Excellence
                            </li>

                        </ul>
                        <p>
                            These attributes represent our commitment to innovation, excellence, and client
                            satisfaction, setting us apart in a competitive industry.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">


                    <header class="mb-5 text-center">
                        <h3 class="services_heading_1_0">Our record of <span>Success</span></h3>
                    </header>


                    <div class="col-lg-3 col-6 text-center">
                        <div class="count-box">
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="250"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <div class="count-box">
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="120"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects Delivered</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <div class="count-box">
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="10"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Years of Serving</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <div class="count-box">
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="20"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Employees</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Counts Section -->
  
  
          <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <span>Offering</span>
                    <h2>Services</h2>
                    <p>Check our latest products</p>
                </div>

               @include('portfolio', ['all_projects' => $all_projects])


                <div class="text-center">
                    <a href="{{ route('view_more_projects') }}"
                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>View More</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
        </section>
        <!-- End Portfolio Section -->
  

        <!-- ======= Services Section ======= -->
        <section id="services" class="values">

            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <span>Domain</span>
                    <h2>Our Domain</h2>
                    <p>Our domain of interest</p>
                </div>



                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ asset('assets/img/services/values_1.jpg') }}" class="img-fluid"
                                alt="">
                            <h3 class="services_heading">Web Development</h3>
                            <hr class="centered-hr">
                            <p>
                            <ul class="services_text">
                                <li><span class="services_icons">+ </span>PHP Web Development</li>
                                <li><span class="services_icons">+ </span>JS Web Development</li>
                                <li><span class="services_icons">+ </span>WordPress Web Development</li>
                                <li><span class="services_icons">+ </span>API Development</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <img src="{{ asset('assets/img/services/values_2.jpg') }}" class="img-fluid"
                                alt="">
                            <h3 class="services_heading">App Development</h3>
                            <hr class="centered-hr">
                            <p>
                            <ul class="services_text">
                                <li><span class="services_icons">+ </span>Kotlin Native App </li>
                                <li><span class="services_icons">+ </span>Java Native App</li>
                                <li><span class="services_icons">+ </span>Flutter Hybrid App</li>
                                <li><span class="services_icons">+ </span>React Native Hybrid App</li>
                            </ul>
                            </p>
                        </div>
                    </div>




                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="{{ asset('assets/img/services/values_3.jpg') }}" class="img-fluid"
                                alt="">
                            <h3 class="services_heading">Graphics Designing</h3>
                            <hr class="centered-hr">
                            <p>
                            <ul class="services_text">
                                <li><span class="services_icons">+ </span>UI/UX Design</li>
                                <li><span class="services_icons">+ </span>App Layout Design</li>
                                <li><span class="services_icons">+ </span>Theme Layout Design</li>
                                <li><span class="services_icons">+ </span>Poster Design</li>
                            </ul>
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="{{ asset('assets/img/services/values_5.jpg') }}" class="img-fluid"
                                alt="">
                            <h3 class="services_heading">Artificial Intelligence</h3>
                            <hr class="centered-hr">
                            <p>
                            <ul class="services_text">
                                <li><span class="services_icons">+ </span>AI Consulting and Strategy</li>
                                <li><span class="services_icons">+ </span>Machine Learning Modal Training</li>
                                <li><span class="services_icons">+ </span>AI-Enhanced Products</li>
                                <li><span class="services_icons">+ </span>AI Software Development</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="{{ asset('assets/img/services/values_4.jpg') }}" class="img-fluid"
                                alt="">
                            <h3 class="services_heading">Software Quality Assurance</h3>
                            <hr class="centered-hr">
                            <p>
                            <ul class="services_text">
                                <li><span class="services_icons">+ </span>Software Testing</li>
                                <li><span class="services_icons">+ </span>Document Testing/Inspection</li>
                                <li><span class="services_icons">+ </span>Auditing and Reviews</li>
                                <li><span class="services_icons">+ </span>Testing and Quality Control</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="box">
                            <img src="{{ asset('assets/img/services/values_6.jpg') }}" class="img-fluid"
                                alt="">
                            <h3 class="services_heading">App Deployment</h3>

                            <hr class="centered-hr">
                            <p>
                            <ul class="services_text  services_text_6 ">
                                <li><span class="services_icons">+ </span>Cloud Deployment</li>
                                <li><span class="services_icons">+ </span>Deployment Strategy and Planning</li>
                                <li><span class="services_icons">+ </span>CI/CD Pipelines</li>
                                <li><span class="services_icons">+ </span>Migration Services</li>
                            </ul>
                            </p>
                        </div>
                    </div>


                    <div class="text-center my-5 services_btn">
                        {{-- <a href="{{ route('view_more_services') }}"
                            class="btn-read-more my-4 d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>View Our Services</span>
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
            <hr>

        </section>
        <!-- End Services Section -->





        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>Get in touch with us</h3>
                    <p> Have questions or ideas? Get in touch with us. We're here to help and collaborate</p>
                    <a class="cta-btn" href="#contact">Call To Action</a>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->


        <!-- ======= Technologies we used ======= -->
        <section id="technologies" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <span>Technologies</span>
                    <h2>Technologies</h2>
                    <p>Technologies we use</p>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('assets/img/html_img.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/css_img.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/javascript_img.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/php_img.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/my_sql_img.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/python_img.jpg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/flutter_img.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/kotlin_img.jpg" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        {{-- Technologies seection end --}}


        <!-- ======= Recent Blog Posts Section ======= -->
        {{-- <section class="recent-blog-posts">

            <div id="blogs" class="container" data-aos="fade-up">

                <div class="section-title">
                    <span>Blogs</span>
                    <h2>Blogs</h2>
                    <p>Blogs from our side</p>
                </div>


                <div class="row">

                    @foreach ($limited_blogs as $blogs)
                        <div class="col-lg-4">
                            <div class="post-box">
                                <div class="post-img">
                                    <img src="{{  asset($blogs['image']) }}" class="img-fluid" alt="">
                                </div>


                                <h3 class="post-title">
                                    {!! $blogs['title'] !!}
                                </h3>
                                <a href="{{ route('blog-description', ['blog_id' => $blogs['id']]) }}"
                                    class="readmore stretched-link mt-auto"><span>Read
                                        More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <div class="text-center mt-5">
                        <a href="{{ route('view_more_blogs') }}"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>View More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>

            </div>

        </section> --}}
        <!-- End Recent Blog Posts Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact</span>
                    <h2>Contact</h2>
                    <p>

                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                          <div class="information">
                                {{-- <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div> --}}

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>
                                        <a href="mailto:ag.rana@airnet-technologies.com">
                                          ag.rana@airnet-technologies.com
                                        </a>
                                    </p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>
                                        <a href="tel:+971561283088">+971 561 283088</a>
                                    </p>
                                </div>
                            </div>
                            <div class="form-container">
                                <form action="{{ route('contact_message') }}" id="contact-form" method="post">
                                    @csrf
                                    <div class="row ">
                                        <div class="form-group col-md-6">
                                            <label for="name">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6 mt-3 mt-md-0">
                                            <label for="name">Your Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="name">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="name">Message</label>
                                        <textarea class="form-control" name="message" rows="10" required></textarea>
                                    </div>
                                    <br>


                                    <!-- Google reCaptcha v2 -->
                                    {!! htmlFormSnippet() !!}

                                    @if ($errors->has('g-recaptcha-response'))
                                        <div>
                                            <small
                                                class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
                                        </div>
                                    @endif

                                    <br>

                                    @if (session('success'))
                                        <script>
                                            $.toast({
                                                heading: 'Success',
                                                text: "Message Send Sucessfully",
                                                showHideTransition: 'slide',
                                                position: 'top-right',
                                                icon: 'success'
                                            })
                                        </script>
                                    @elseif(session('captcha_error'))
                                        <script>
                                            $.toast({
                                                heading: 'Error',
                                                text: "Invalid Captcha",
                                                showHideTransition: 'slide',
                                                position: 'top-right',
                                                icon: 'error'
                                            })
                                        </script>
                                    @endif


                                    <div class="text-center"><button class="btn-submit" type="submit">
                                            Send
                                            Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->



    <!-- ======= Footer ======= -->

    @include('footer')

    <!-- End Footer -->

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
