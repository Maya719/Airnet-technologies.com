<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terms & Conditions</title>

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


                                    <form id="terms_condition" method="POST"
                                        action="{{ route('save_terms_conditions') }}">
                                        @csrf
                                        <fieldset>
                                            <legend class="text-center">Terms & Conditons</legend>
                                            <br>
                                            <div class="mb-3 my-5">
                                                <label>Select Language <span class="text-danger">*</span></label>
                                                <select id="languageSelect" class="form-select form-select-lg mb-3"
                                                    aria-label=".form-select-lg example" name="language" required>
                                                    <option value="english"
                                                        {{ $selected_language == 'english' ? 'selected' : '' }}>English
                                                    </option>
                                                    <option value="arabic"
                                                        {{ $selected_language == 'arabic' ? 'selected' : '' }}>Arabic
                                                    </option>
                                                </select>



                                            </div>

                                            <div class="mb-3 my-5">
                                                <label>Privacy Policy <span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="description_add" name="terms_conditions" required>{{ $last_saved_policy }}</textarea>
                                            </div>

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


        <script>
            tinymce.init({
                selector: '#description_add',
                plugins: 'print preview importcss searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount textpattern noneditable help charmap  emoticons code',
                menubar: 'edit view insert format tools table tc help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor permanentpen removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment code',
                setup: function(editor) {
                    editor.on("change keyup", function(e) {
                        tinyMCE.triggerSave();
                    });
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });
        </script>



        <script>
            function fetchPolicy(language) {
                fetch("/get-terms-conditions?language=" + language)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Fetched policy:', data.terms_conditions);
                        tinymce.get('description_add').setContent(data.terms_conditions);
                    })
                    .catch(error => {
                        console.error('Error fetching policy:', error);
                    });
            }

            document.getElementById('languageSelect').addEventListener('change', function() {
                var selectedLanguage = this.value;
                fetchPolicy(selectedLanguage);
            });

            window.addEventListener('DOMContentLoaded', function() {
                var selectedLanguage = document.getElementById('languageSelect').value;
                fetchPolicy(selectedLanguage);
            });
        </script>





        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>


    </body>


</body>

</html>
