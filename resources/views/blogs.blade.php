
<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.header') 
</head>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('includes.sidebar') 
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('includes.navbar') 
    <!-- End Navbar -->
    
    <div class="container-fluid py-4">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 col-12 d-flex justify-content-end">
              <button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                <span class="btn-inner--text">Create</span>
              </button>
            </div>
          </div>
        <div class="row">
          @foreach ($data as $blog)
            <div class="col-xl-4 col-sm-6 mb-xl-3 mb-4">
              <div class="card">
                  <img style="height: 400px;" class="card-img-top" src="{{asset($blog->image)}}" alt="Image placeholder">
                  <div class="card-body">
                    <h6 class="card-title mb-0">{{$blog->title}}</h6>
                    @php
                        $dateTime = new DateTime($blog->created_at);
                        $formattedDate = $dateTime->format("M jS \a\\t g:i A");
                    @endphp
                    <small class="text-muted">{{$formattedDate}}</small>
                    <p class="card-text mt-4">
                      {!! Illuminate\Support\Str::limit(strip_tags($blog->description), $limit = 130, $end = '... <a href="#">Read More</a>') !!}
                  </p>
                  <a href="{{ route('blog_detail', ['id' => $blog->id]) }}" class="btn btn-link px-0">View Blog</a>
                  <a href="javascript:void(0)" onclick="deleteBlog(this)" data-id = "{{$blog->id}}" class="btn btn-link text-danger px-3">Delete</a>
                  <a href="javascript:void(0)"class="btn btn-link text-secondary px-0" data-id = "{{$blog->id}}" onclick="editblog(this)" data-bs-toggle="modal" data-bs-target="#editBlogModal" >Edit</a>
                  </div>
              </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-xl-12 mt-5 d-flex justify-content-center">
          <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item{{ ($data->currentPage() == 1) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $data->url(1) }}" tabindex="-1">
                        <i class="fa fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li class="page-item{{ ($i == $data->currentPage()) ? ' active' : '' }}">
                        <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item{{ ($data->currentPage() == $data->lastPage()) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $data->url($data->currentPage() + 1) }}">
                        <i class="fa fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalSignUp" tabindex="1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card card-plain">
                  <div class="card-header pb-0 text-left">
                      <h4 class="font-weight-bolder text-primary text-gradient">Create Blog</h4>
                  </div>
                  <form role="form text-left" method="POST" action="{{route('create_blog')}}" enctype="multipart/form-data">
                    @csrf
                      <div class="card-body pb-3">
                          <label>Title</label>
                          <div class="input-group mb-3">
                            <input type="text" name="title" class="form-control" placeholder="title" aria-label="title" aria-describedby="title-addon">
                          </div>
                          <label>Thumbnail/Image</label>
                            <div class="mt-2 mb-3">
                              <input
                                  type="file"
                                  name="thumbnail"
                                  id="file_area"
                                  class="dropify"
                                  data-default-file=""
                                  data-max-file-size="4M" 
                                  data-allowed-file-extensions="*" 
                                  accept="image/*" 
                              />
                            </div> 
                          <label>description</label>
                          <textarea name="blog_text"></textarea>
                      </div>
                      <div class="card-footer text-center pt-0 px-sm-4 px-1">
                          <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                          <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                      </div>
                  </form>
              </div>
              </div>
          </div>
        </div>
      </div>

        <div class="modal fade" id="editBlogModal" tabindex="1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card card-plain">
                  <div class="card-header pb-0 text-left">
                      <h4 class="font-weight-bolder text-primary text-gradient">Edit Blog</h4>
                  </div>
                  <form role="form text-left" method="POST" action="{{route('update_blog')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_id" id="update_id">
                      <div class="card-body pb-3">
                          <label>Title</label>
                          <div class="input-group mb-3">
                            <input type="text" name="title" id="title" class="form-control" placeholder="title" aria-label="title" aria-describedby="title-addon">
                          </div>
                          <label>Thumbnail/Image</label>
                            <div class="mt-2 mb-3">
                              <input
                                  type="file"
                                  name="thumbnail"
                                  id="file_area"
                                  class="dropify"
                                  data-default-file=""
                                  data-max-file-size="4M" 
                                  data-allowed-file-extensions="*" 
                                  accept="image/*" 
                              />
                            </div> 
                          <label>description</label>
                          <textarea name="blog_text2" id="myTinyMCEEditor"></textarea>
                      </div>
                      <div class="card-footer text-center pt-0 px-sm-4 px-1">
                          <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                          <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                      </div>
                  </form>
              </div>
              </div>
          </div>
        </div>
      </div>
      @include('includes.footer') 
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="https://cdn.tiny.cloud/1/blcy42lk98oia1p45wn86vu3s6i077cit8n4u7mgg1ykzklc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  
  <script src="{{asset('assets/vendor/dropify/dropify.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      "use strict";
    /* Basic Init*/
    $('.dropify').dropify();
    var drEvent = $('#input-file-events').dropify();
  
    drEvent.on('dropify.beforeClear', function(event, element){
      return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });
  
    drEvent.on('dropify.afterClear', function(event, element){
      alert('File deleted');
    });
  
    drEvent.on('dropify.errors', function(event, element){
      console.log('Has Errors');
    });
  
    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e){
      e.preventDefault();
      if (drDestroy.isDropified()) {
        drDestroy.destroy();
      } else {
        drDestroy.init();
      }
    });
  
  });
  </script>
    <script src="{{asset('assets/vendor/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

    @if (session('success'))
    <script>
      $.toast({
          heading: 'Success',
          text: '{{ session('success') }}',
          position: 'top-right',
          loaderBg:'#4CAF50',
          icon: 'success',
          hideAfter: 3000, 
          stack: 6
      });
    </script>
      @endif
    @if (session('error'))
    <script>
      $.toast({
          heading: 'Something went wrong.',
          text: '{{ session('error') }}',
          position: 'top-right',
          loaderBg:'#3cb878',
          icon: 'error',
          hideAfter: 3000, 
          stack: 6
      });
    </script>
      @endif
      <script>
        function deleteBlog(LINK){
          var id = $(LINK).data("id");
          swal({ 
                    title: "Are you sure?", 
                    text: "You won't be able to revert this!", 
                    type: "warning", 
                    showCancelButton: !0, 
                    buttonsStyling: !1, 
                    confirmButtonClass: "btn btn-danger mx-2", 
                    confirmButtonText: "Yes, delete it!", 
                    cancelButtonClass: "btn btn-secondary" 
                }).then(function(result) {
                    if (result.value) {
                        console.log(id);
                        $.ajax({
                            url: '{{ route('delete_blog') }}',
                            type: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: { id: id },
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
        }
      </script>
      <script>
        function editblog(LINK){
          var id = $(LINK).data("id");
          console.log(id);
          $.ajax({
              url: '{{ route('get_blog_by_id') }}',
              type: 'GET',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data: { id: id },
              success: function(response) {
                  var result = JSON.parse(response);
                  console.log(response);
                  $('#update_id').val(result.id);
                  $('#title').val(result.title);
                  tinymce.init({
                      selector: '#myTinyMCEEditor',
                      // Add other TinyMCE configuration options as needed
                  })
                  tinymce.get('myTinyMCEEditor').setContent(result.description);
                  console.log(result.description);
              },
              error: function(xhr, status, error) {
                  console.error('AJAX error:', error);
              }
          });
        }
      </script>
  <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>