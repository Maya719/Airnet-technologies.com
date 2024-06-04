
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form role="search">
                            <div class="input-group mb-3">
                                <input type="text" id="search" name="search" class="form-control" placeholder="Search" oninput="handleSearch()">
                            </div>
                        </form>
                        <ul class="chat-list-wrap" style="max-height: 700px; overflow: auto;" id="searchResults">
                            @foreach ($list as $item)
                            <li class="chat-list">
                                <div class="chat-body">
                                    <a class="" href="{{route('messages.show',['id'=>$item->id])}}">
                                        <div class="chat-data">
                                            <div class="user-data">
                                                <span class=" name capitalize-font">{{$item->name}}</span>
                                                <span class="time text-muted">({{$item->subject}})</span>
                                            </div>
                                            <div class="status away"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-3 mt-sm-0">
                <div class="card">
                    <div class="card-header mb-2 mt-2 p-3">
                        <div class="row align-items-center">
                            <div class="col-lg-8 text-center">
                                <h6 class="card-title text-muted">{{$email}}</h6>
                            </div>
                            <div class="col-lg-4 d-flex justify-content-end">
                                <button class="btn btn-link text-danger delete_conversation" id="conversation">Delete Conversation</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chat-content">
                            <ul style="max-height: 400px; overflow: auto;">
                                @foreach ($current as $message)
                                @php
                                    $dateTime = new DateTime($message->created_at);
                                    $formattedDate = $dateTime->format("M jS \a\\t g:i A");
                                @endphp
                                @if ($message->sender == 'admin')
                                <li class="self">
                                    <div class="self-msg-wrap">
                                        <div class="msg block text-right">{{$message->message}}
                                            <div class="msg-per-detail">
                                                <span class="msg-time text-muted">{{$formattedDate}}</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>	
                                </li>
                                @endif
                                @if ($message->sender == 'user')
                                <li class="friend">
                                    <div class="friend-msg-wrap">
                                        <div class="msg text-left">{{$message->message}}
                                            <div class="msg-per-detail">
                                                <span class="msg-time text-muted">{{$formattedDate}}</span>
                                            </div>
                                        </div>
                                    </div>	
                                    <div class="clearfix"></div>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{route('send_message')}}" method="post">
                            @csrf
                            <div class="row d-flex mb-4">
                                <div class="col-lg-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Message</label>
                                    </div>
                                    <input type="hidden" value="{{$email}}" name="email">
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-secondary "><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('includes.footer') 
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
  
   
    
  <?php
  $baseUrl = config('app.url');
  ?>

<script>
    function handleSearch() {
        var searchQuery = document.getElementById('search').value.toLowerCase();
        var items = document.querySelectorAll('.chat-list');
        items.forEach(function(item) {
            var name = item.querySelector('.name').innerText.toLowerCase();
            var subject = item.querySelector('.time').innerText.toLowerCase();
            var shouldShow = name.includes(searchQuery) || subject.includes(searchQuery);
            item.style.display = shouldShow ? 'block' : 'none';
        });
    }
</script>
<script>
   $('.delete_conversation').click(function() {
        var email = '{{$email}}';
        console.log(email);
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
                  $.ajax({
                      url: '{{ route('delete_conversation') }}',
                      type: 'GET',
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      data: { email: email },
                      success: function(response) {
                        window.location.href = '{{route('messages')}}'; // Replace with the actual URL or route path
                        // console.log(response);
                    },
                      error: function(xhr, status, error) {
                          console.error('AJAX error:', error);
                      }
                  });
              }
          });
    });
</script>
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
  <script src="{{asset('assets/vendor/dropify/dropify.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
  <script src="{{ asset('assets/js/dashboard-custom.js') }}"></script>
  </body>
  
  </html>