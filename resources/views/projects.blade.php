<!DOCTYPE html>
<style>
    .responsive-container-block {
        min-height: 75px;
        height: fit-content;
        width: 100%;
        padding-top: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        display: flex;
        flex-wrap: wrap;
        margin-top: 0px;
        margin-right: auto;
        margin-bottom: 0px;
        margin-left: auto;
        justify-content: flex-start;
    }

    .text-blk {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        padding-top: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        line-height: 25px;
    }

    .responsive-container-block.bigContainer {
        padding-top: 10px;
        padding-right: 30px;
        padding-bottom: 10px;
        padding-left: 30px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .mainImg {
        color: black;
        width: 55%;
        height: auto;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 5px 10px 7px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .text-blk.headingText {
        font-size: 25px;
        font-weight: 700;
        line-height: 34px;
        color: rgb(51, 51, 51);
        padding-top: 0px;
        padding-right: 10px;
        padding-bottom: 0px;
        padding-left: 10px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 10px;
        margin-left: 0px;
    }

    .allText {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 40px;
        width: 40%;
        margin: 0 0 0 0;
    }

    .text-blk.subHeadingText {
        color: rgb(102, 102, 102);
        font-size: 25px;
        line-height: 34px;
        font-weight: 700;
        padding-top: 0px;
        padding-right: 10px;
        padding-bottom: 0px;
        padding-left: 10px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 15px;
        margin-left: 0px;
    }

    .text-blk.description {
        font-size: 25px;
        line-height: 34px;
        color: rgb(102, 102, 102);
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
        padding-top: 0px;
        padding-right: 10px;
        padding-bottom: 0px;
        padding-left: 10px;
    }

    .explore {
        font-size: 20px;
        line-height: 28px;
        color: rgb(255, 255, 255);
        background-color: rgb(244, 152, 146);
        padding-top: 10px;
        padding-right: 50px;
        padding-bottom: 10px;
        padding-left: 50px;
        border-top-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
        border-top-style: outset;
        border-right-style: outset;
        border-bottom-style: outset;
        border-left-style: outset;
        border-top-color: rgb(244, 152, 146);
        border-right-color: rgb(244, 152, 146);
        border-bottom-color: rgb(244, 152, 146);
        border-left-color: rgb(244, 152, 146);
        border-image-source: initial;
        border-image-slice: initial;
        border-image-width: initial;
        border-image-outset: initial;
        border-image-repeat: initial;
        cursor: pointer;
    }

    .explore:hover {
        background-image: initial;
        background-position-x: initial;
        background-position-y: initial;
        background-size: initial;
        background-repeat-x: initial;
        background-repeat-y: initial;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: rgb(255, 235, 234);
        color: rgb(244, 152, 146);
    }

    .responsive-container-block.Container {
        margin-top: 80px;
        margin-right: auto;
        margin-bottom: 50px;
        margin-left: auto;
        justify-content: center;
        align-items: center;
        max-width: 1320px;
        padding-top: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
    }

    .responsive-container-block.Container.bottomContainer {
        margin-top: 100px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
        flex-direction: row-reverse;
        margin: 100px auto 50px auto;
    }

    .allText.aboveText {
        margin: 0 0 0 40px;
    }

    .allText.bottomText {
        margin: 0 40px 0 0;
    }

    @media (max-width: 1024px) {
        .responsive-container-block.Container {
            max-width: 850px;
        }

        .mainImg {
            width: 55%;
            height: auto;
        }

        .text-blk.description {
            font-size: 20px;
        }

        .allText {
            width: 40%;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 20px;
        }

        .responsive-container-block.bigContainer {
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
        }

        .text-blk.subHeadingText {
            font-size: 22px;
        }

        .responsive-container-block.Container.bottomContainer {
            margin: 80px auto 50px auto;
        }

        .responsive-container-block.Container {
            max-width: 830px;
        }

        .allText.aboveText {
            margin: 30px 0 0 40px;
        }

        .allText.bottomText {
            margin: 30px 40px 0 0;
        }
    }

    @media (max-width: 768px) {
        .mainImg {
            width: 90%;
        }

        .allText {
            width: 100%;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .responsive-container-block.Container {
            flex-direction: column;
            height: auto;
        }

        .text-blk.headingText {
            text-align: center;
        }

        .text-blk.subHeadingText {
            text-align: center;
            font-size: 25px;
        }

        .text-blk.description {
            text-align: center;
            font-size: 25px;
        }

        .allText {
            margin-top: 40px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        .allText.aboveText {
            margin: 40px 0 0 0;
        }

        .responsive-container-block.Container {
            margin: 80px auto 50px auto;
        }

        .responsive-container-block.Container.bottomContainer {
            margin: 50px auto 50px auto;
        }

        .allText.bottomText {
            margin: 40px 0 0 0;
        }
    }

    @media (max-width: 500px) {
        .responsive-container-block.Container {
            padding-top: 10px;
            padding-right: 0px;
            padding-bottom: 10px;
            padding-left: 0px;
            width: 100%;
            max-width: 100%;
        }

        .mainImg {
            width: 100%;
        }

        .responsive-container-block.bigContainer {
            padding-top: 10px;
            padding-right: 25px;
            padding-bottom: 10px;
            padding-left: 25px;
        }

        .text-blk.subHeadingText {
            font-size: 25px;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .text-blk.description {
            font-size: 25px;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .allText {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            width: 100%;
        }
    }
</style>
<html lang="en">

<head>
    @include('includes.header')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('includes.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('includes.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 d-flex justify-content-end">
                            <button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalSignUp">
                                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                                <span class="btn-inner--text">Create</span>
                            </button>
                        </div>
                        <div class="card-body px-4 pt-3 pb-5">
                            <div class="row">
                                @php
                                    $itt = 0;
                                @endphp
                                @foreach ($data as $project)
                                    <div class="responsive-container-block bigContainer">
                                        @if ($itt % 2 == 0)
                                            <div class="responsive-container-block Container">
                                                <img class="mainImg"
                                                    src="{{ asset('storage/' . $project->thumbnail) }}">
                                                <div class="allText aboveText">
                                                    <p class="text-blk headingText">
                                                        {{ $project->category }}
                                                    </p>
                                                    <p class="text-blk subHeadingText">
                                                        {{ $project->title }}
                                                    </p>
                                                    <p class="text-blk description">
                                                      {!! $project->description !!}
                                                    </p>
                                                    @if ($project->price)
                                                        <p>$ {{ $project->price }}</p>
                                                    @endif
                                                    <button class="explore" id="project-link" onclick="edit_link(this)"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        data-id="{{ $project->id }}">
                                                        Edit
                                                    </button>
                                                </div>
                                            </div>
                                        @else
                                            <div class="responsive-container-block Container bottomContainer">
                                                <img class="mainImg"
                                                    src="{{ asset('storage/' . $project->thumbnail) }}">
                                                <div class="allText bottomText">
                                                    <p class="text-blk headingText">
                                                        {{ $project->category }}
                                                    </p>
                                                    <p class="text-blk subHeadingText">
                                                        {{ $project->title }}
                                                    </p>
                                                      {!! $project->description !!}
                                                    @if ($project->price)
                                                        <p>$ {{ $project->price }}</p>
                                                    @endif
                                                    <button class="explore" id="project-link" onclick="edit_link(this)"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        data-id="{{ $project->id }}">
                                                        Edit
                                                    </button>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                    @php
                                        $itt++;
                                    @endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-sm-12 col-md-12 d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item{{ $data->currentPage() == 1 ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $data->url(1) }}" tabindex="-1">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            @for ($i = 1; $i <= $data->lastPage(); $i++)
                                <li class="page-item{{ $i == $data->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item{{ $data->currentPage() == $data->lastPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $data->url($data->currentPage() + 1) }}">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            @include('includes.footer')
            <!-- Modal -->
            <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalSignTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h4 class="font-weight-bolder text-primary text-gradient">Create Project</h4>
                                </div>
                                <form role="form text-left" action="{{ route('create_project') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body pb-3">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input name="title" type="text" class="form-control" aria-label="title"
                                                aria-describedby="title-addon">
                                        </div>

                                        <label>Project Link</label>
                                        <div class="input-group mb-3">
                                            <input type="url" class="form-control" name="url"
                                                aria-label="description" aria-describedby="email-addon">
                                        </div>
                                        <label>Price</label>
                                        <div class="input-group mb-3">
                                            <input type="number" min="0" class="form-control" name="price"
                                                placeholder="$">
                                        </div>
                                        <label>Project Category <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <select class="form-select" name="category" aria-label="category"
                                                aria-describedby="email-addon">
                                                <option value="" selected disabled>Select an option</option>
                                                <option value="Web">Web Development</option>
                                                <option value="Ai">Artificial intelligence</option>
                                                <option value="App">Application Development</option>
                                                <option value="plan">Plan Service</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="categoryInput">
                                        <label>Thumbnail/Image <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <div class="fallback">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="thumbnail"
                                                        id="customFileUploadMultiple" multiple>
                                                </div>
                                            </div>
                                        </div>
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="description_add" name="description"></textarea>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-sm-4 px-1">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- edit Model --}}
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="font-weight-bolder text-primary text-gradient">Edit Project</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form role="form text-left" action="{{ route('update_project') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body pb-3">
                                    <input name="update_id" type="hidden" class="form-control" id="update_id"
                                        aria-label="update_id" aria-describedby="update_id-addon">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input name="title" type="text" class="form-control" id="title"
                                            aria-label="title" aria-describedby="title-addon">
                                    </div>



                                    <label>Project Link</label>
                                    <div class="input-group mb-3">
                                        <input type="url" class="form-control" name="url" id="url"
                                            aria-label="description" aria-describedby="email-addon">
                                    </div>
                                    <label>Price</label>
                                    <div class="input-group mb-3">
                                        <input type="number" min="0" id="price" class="form-control"
                                            name="price" placeholder="$">
                                    </div>
                                    <label>Project Category <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="categorySelect" name="category"
                                            aria-label="category" aria-describedby="email-addon">
                                            <option value="" selected disabled>Select an option</option>
                                            <option value="Web">Web Development</option>
                                            <option value="Ai">Artificial intelligence</option>
                                            <option value="App">Application Development</option>
                                            <option value="plan">Plan Service</option>
                                        </select>
                                    </div>

                                    <input type="hidden" id="categoryInput" name="categoryInput">
                                    <label>Thumbnail/Image <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="fallback">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="thumbnail"
                                                    name="thumbnail" id="customFileUploadMultiple" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea name="description" id="description"></textarea>
                                </div>
                                <div class="card-footer text-end pt-0 px-sm-4 px-1">
                                    <button type="button" class="btn btn-secondary btn-sm"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn bg-gradient-primary btn-sm">Update</button>
                                    <button type="button" id="deleteButton"
                                        class="btn bg-gradient-danger btn-sm">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    @if (session('success'))
        <script>
            $.toast({
                heading: 'Seccess',
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
                heading: 'Welcome to kenny',
                text: '{{ session('error') }}',
                position: 'top-right',
                loaderBg: '#3cb878',
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
        $(document).ready(function() {
            $("#deleteButton").click(function() {
                var projectId = $("#exampleModal #update_id").val();
                swal({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonClass: "btn btn-danger mx-2",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonClass: "btn btn-secondary"
                }).then(result => {
                    if (result.value) {
                        console.log(projectId);
                        $.ajax({
                            url: '{{ route('delete_project') }}',
                            type: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                id: projectId
                            },
                            success: function(response) {
                                var result = JSON.parse(response);
                                location.reload();
                                console.log(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX error:', error);
                            }
                        });
                    }
                });
            });
        });
    </script>
    <script>
        function edit_link(LINK) {
            var projectId = $(LINK).data("id");
            // Make an AJAX call
            $.ajax({
                url: '{{ route('get_project_by_id') }}',
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: projectId
                },
                success: function(response) {
                    console.log(response);
                    var project = JSON.parse(response);
                    $("#update_id").val(project.id);
                    $("#title").val(project.title);
                    tinymce.init({
                        selector: '#description',
                        plugins: 'print preview importcss searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount textpattern noneditable help charmap emoticons code',
                        menubar: 'edit view insert format tools table tc help',
                        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor permanentpen removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment code',
                        setup: function(editor) {
                            editor.on("change keyup", function(e) {
                                tinymce.triggerSave();
                            });

                            editor.on('init', function(e) {
                                editor.setContent(project.description);
                            });
                        },
                        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                    });
                    $("#url").val(project.link);
                    $("#categoryInput").val(project.category);
                    $("#price").val(project.price);
                    $("#categorySelect").val(project.category);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', error);
                }
            });
        }

        function updateInputField(select) {
            document.getElementById('categoryInput').value = select.value;
        }
    </script>
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

</body>

</html>
