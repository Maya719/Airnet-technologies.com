<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
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

                                    <h5 class="text-center my-5">Orders</h5>
                                    {{-- {{ dd($get_orders) }} --}}
                                    <table class="table table-flush " id="orders_list">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9">
                                                    Service Name</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9">
                                                    Service ID</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xs font-weight-bolder opacity-9 ps-2">
                                                    Status</th>
                                                <th
                                                    class="text-secondary text-uppercase text-xs font-weight-bolder opacity-9">
                                                    Price</th>
                                                <th
                                                    class="text-secondary text-uppercase text-xs font-weight-bolder opacity-9">
                                                    Email</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($get_orders as $orders)
                                                <tr>

                                                    <td>
                                                        <div class="d-flex flex-column justify-content-center ">
                                                            @foreach ($services as $service)
                                                                @if ($service->id == $orders->product_id)
                                                                  {{ $service->title }}
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                {{ $orders->product_id }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            @php
                                                                $orderStatus = Str::lower($orders->status);
                                                            @endphp

                                                            @if ($orderStatus == 'paid')
                                                                <div
                                                                    class="d-flex flex-column justify-content-center text-success">
                                                                    {{ $orders->status }}
                                                                </div>
                                                            @else
                                                                <div
                                                                    class="d-flex flex-column justify-content-center text-danger">
                                                                    {{ $orders->status }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            {{ $orders->price }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="mailto:{{ $orders->email }}">
                                                                {{ $orders->email }}
                                                            </a>
                                                        </div>
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

        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script>
            $(document).ready(function() {
                $('#orders_list').DataTable({
                    "oLanguage": {
                        "oPaginate": {
                            "sNext": ">",
                            "sPrevious": "<"
                        }
                    },
                });
            });
        </script>

        <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.1/tinymce.min.js"></script>



    </body>


</body>

</html>
