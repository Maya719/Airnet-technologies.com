<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset(get_favicon()) }}">
    <title>{{$main_page}} - Mobipixels</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/file-manager.css') }}" rel="stylesheet" />
    {{-- sweet Alert --}}
    <link href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    
    {{-- select2 --}}
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('assets/vendor/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
    <script src="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <link href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/dropify/dropify.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('../assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
    <style>
ul{
  list-style: none;
}
/*Chat UI*/
.chat-list-wrap .chat-body > a {
  border-bottom: 1px solid #eee;
  display: block;
}
.chat-list-wrap .chat-body .chat-data {
  padding: 15px;
  -webkit-transition: 0.3s ease;
  -moz-transition: 0.3s ease;
  transition: 0.3s ease;
}
.chat-list-wrap .chat-body .chat-data:hover {
  background: #f7f7f9;
}
.chat-list-wrap .chat-body .chat-data .user-img {
  height: 40px;
  width: 40px;
  float: left;
  margin-right: 25px;
}
.chat-list-wrap .chat-body .chat-data .user-data {
  float: left;
}
.chat-list-wrap .chat-body .chat-data .user-data .time {
  font-size: 12px;
  margin-top: 2px;
}
.chat-list-wrap .chat-body .chat-data .status {
  border-radius: 50%;
  float: right;
  height: 7px;
  position: relative;
  top: 5px;
  width: 7px;
  margin-top: 10px;
}
.chat-list-wrap .chat-body .chat-data .status.away {
  background: #fcb03b;
}
.chat-list-wrap .chat-body .chat-data .status.offline {
  background: #f15b26;
}
.chat-list-wrap .chat-body .chat-data .status.online {
  background: #3cb878;
}

.goto-chat-list {
  position: absolute !important;
}

.chat-content .user-img {
  height: 27px;
  width: 27px;
  position: absolute;
}
.chat-content ul li {
  margin-bottom: 30px;
}
.chat-content .msg {
  padding: 10px 15px 10px 15px;
  color: #2f2c2c;
}
.chat-content .msg .msg-per-detail span {
  font-size: 12px;
  text-transform: capitalize;
}
.chat-content .friend .friend-msg-wrap .msg {
  margin-left: 37px;
  background: #f7f7f9;
}
.chat-content .self .self-msg-wrap .msg {
  background: rgba(60, 184, 120, 0.2);
  margin-left: 100px;
}



.chat-history-content .chat-history-user-img img {
  height: 40px;
  width: 40px;
}
.chat-history-content .chat-history-user {
  color: #2f2c2c;
  text-transform: capitalize;
}

.chat-cmplt-wrap {
  position: relative;
}
.chat-cmplt-wrap .chat-box-wrap {
  left: 0;
  position: relative;
  -webkit-transition: left 0.4s ease 0s;
  -moz-transition: left 0.4s ease 0s;
  transition: left 0.4s ease 0s;
}
.chat-cmplt-wrap .recent-chat-box-wrap {
  position: absolute;
  right: -300px;
  top: 0;
  -webkit-transition: right 0.4s ease 0s;
  -moz-transition: right 0.4s ease 0s;
  transition: right 0.4s ease 0s;
  width: 100%;
  display: none;
}
.chat-cmplt-wrap.chat-box-slide .chat-box-wrap {
  left: -300px;
}
.chat-cmplt-wrap.chat-box-slide .recent-chat-box-wrap {
  right: 0;
}

    </style>
  </head>