
<!DOCTYPE html>
<html lang="en">
  @include('includes.header') 
<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
@include('includes.sidebar') 
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('includes.navbar') 
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('save_logo')}}" method="POST" enctype="multipart/form-data" id="save_logo">
                            @csrf
                            <h5>Logo</h5>
                            <div class="col-lg-3 col-sm-12">
                                <img height="90" class="card-img-top" src="{{asset(get_logo()) }}" alt="main_logo">
                                <label class="file mt-3">
                                    <input type="file" name="logo" id="file" aria-label="File browser example">
                                    <span class="file-custom"></span>
                                </label>
                            </div>
                            <h5 class="mt-2">Favicon</h5>
                            <img height="50" src="{{asset(get_favicon()) }}" alt="main_logo">
                            <div class="col-lg-3">
                                <label class="file mt-3">
                                    <input type="file" name="favicon" id="file2" aria-label="File browser example">
                                    <span class="file-custom"></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer') 
    </div>
</main>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{asset('assets/vendor/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
  
    @if (session('success'))
    <script>
      $.toast({
          heading: 'Seccess',
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
    
  <?php
  $baseUrl = config('app.url');
  ?>
  <script src="{{asset('assets/vendor/dropify/dropify.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
  <script>
        $('#file, #file2').on('change', function() {
        $('#save_logo').submit();
    });
  </script>
  <script src="{{ asset('assets/js/dashboard-custom.js') }}"></script>
  </body>
  
  </html>