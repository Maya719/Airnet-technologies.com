
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
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0 d-flex justify-content-end">
                <button class="btn btn-icon btn-3 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
                    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                  <span class="btn-inner--text">Create</span>
                </button>
              </div>
              <div class="card-body px-4 pt-3 pb-2">
                <div class="table-responsive py-4">
                    <table class="table table-flush " id="member_list">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Designation</th>
                            <th class="text-secondary text-uppercase text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($data as $member)
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="{{ asset($member->image) }}" class="avatar avatar-sm me-3" alt="user2">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{$member->name}}</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h6 class="mb-0 mt-1 text-sm">{{$member->designation}}</h6>
                            </td>
                            <td>
                              <a href="javascript:;" class="text-danger font-weight-bold text-s" onclick="delete_user(this)" id="delete_btn" data-id="{{$member->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete team member" data-container="body" data-animation="true">
                                <i class="fa fa-trash"></i>
                              </a>
                              <a href="javascript:;" class="text-secondary font-weight-bold text-s ms-2" id="edit_user" onclick="edit_user(this)" data-bs-toggle="modal" data-id="{{ $member->id }}" data-bs-target="#edit_model">
                                <i class="fa fa-edit"></i>                              
                              </a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
        @include('includes.footer') 
         <!-- Modal -->
        <div class="modal fade" id="exampleModalSignUp" tabindex="1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-primary text-gradient">Create Team Member</h4>
                    </div>
                    <form role="form text-left" method="POST" action="{{route('create_member')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="card-body pb-3">
                            <div class="input-group mb-3">
                              <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
                            </div>
                            <div class="input-group mb-3">
                              <input type="text" name="designation" class="form-control" placeholder="Designation" aria-label="Designation" aria-describedby="Designation-addon">
                            </div>
                            <div class="mt-5">
                              <input
                              type="file"
                              name="image"
                              id="file_area"
                              class="dropify"
                              data-default-file=""
                              data-max-file-size="2M" 
                              data-allowed-file-extensions="*" 
                              accept="image/*" 
                          />
                            </div>
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

        <div class="modal fade" id="edit_model" tabindex="1" role="dialog" aria-labelledby="edit_model_title" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h4 class="font-weight-bolder text-primary text-gradient">Edit Team Member</h4>
                    </div>
                    <form method="POST" action="{{route('update_member')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="card-body pb-3">
                          <input type="hidden" name="update_id" id="update_id" class="form-control" aria-label="member" >
                            <div class="input-group mb-3">
                              <input type="text" name="name" id="member" placeholder="Name" class="form-control" aria-label="member" aria-describedby="name-addon">
                            </div>
                            <div class="input-group mb-3">
                              <input type="text" name="designation" id="designation" placeholder="Designation" class="form-control" aria-label="Designation" aria-describedby="Designation-addon">
                            </div>
                            <div class="mt-2 mb-3">
                              <input
                                  type="file"
                                  name="image"
                                  id="file_area"
                                  class="dropify"
                                  data-default-file=""
                                  data-max-file-size="4M" 
                                  data-allowed-file-extensions="*" 
                                  accept="image/*" 
                              />
                            </div> 
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
      </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
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
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script>
    $(document).ready(function() {
        $('#member_list').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sNext": ">",  
                    "sPrevious": "<"  
                }
            },
        });
    });
</script>
<?php
$baseUrl = config('app.url');
?>
<script>
    function edit_user(LINK){
      var id = $(LINK).data("id");
      console.log(id);
      $.ajax({
            url: '{{ route('get_member_by_id') }}',
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id: id },
            success: function(response) {
                var result = JSON.parse(response);
                console.log(result);
                $('#update_id').val(result.id);
                $('#member').val(result.name);
                $('#designation').val(result.designation);
                
                var defaultFilePath = "{{ $baseUrl }}/storage/" + result.image;
                console.log(defaultFilePath);
                // document.getElementById('myImage').src = defaultFilePath;
                $('#file_area').attr('data-default-file', defaultFilePath);
                $("#status").val(result.status).trigger("change");
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', error);
            }
        });
    }
  </script>
<script>
  function delete_user(LINK){
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
                      url: '{{ route('delete_team_member') }}',
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
<script src="{{asset('assets/vendor/dropify/dropify.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
  // $('.select2').select2();
</script>
<script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
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
</body>

</html>