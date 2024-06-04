
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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="card-header">
                            <div class="position-relative">
                                <a class="d-block blur-shadow-image">
                                  <img style="height:50vh" src="{{asset($data->image)}}" class="img-fluid shadow border-radius-lg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11 col-sm-12">
                        <div class="card-body px-4 pt-4">
                            <a href="javascript:;">
                              <h4>
                                {{$data->title}}
                              </h4>
                            </a>
                            <p>
                                {!!$data->description!!}
                            </p>
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
  <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>