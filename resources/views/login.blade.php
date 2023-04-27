
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIBERSAMA LOGIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css')}}">
  <link rel="shortcut icon" href="{{asset('foto/k8.png')}}">
  <style type="text/css">
    .bglogin {
      background-repeat: no-repeat; 
      background-position: center;
      background-image: url('http://127.0.0.1/8xamscbt/assets/bgsklh.png');
    }
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
  </style>
</head>
<body class="hold-transition login-page" style="">
<div class="preloader">
  <div class="loading">
    <img src="{{ asset('foto/rpl.png') }}" width="150px">
    <center><p>Harap Tunggu..</p></center>
  </div>
</div>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SI</b>BERSAMA</a>
  </div>
  <!-- /.login-logo -->
  <div class="col-md-12">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Login</h3>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body login-card-body">
        <p class="login-box-msg">Masukan <b>Username & password</b> untuk memulai sesi anda</p>
        <div class="flash-data" data-flashdata="{{ session()->get('pesan') }}"></div>
        <form action="/do_login" onSubmit="validasi()" method="post">
          <div class="input-group mb-3">
            @csrf
            <input type="email" name="email" onkeyup="usernameUp()" value="" oninvalid="this.setCustomValidity('Masukan username anda dengan benar')" id="email" oninput="setCustomValidity('')" class="form-control" required placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" onkeyup="passwordUp()" oninvalid="this.setCustomValidity('Masukan password anda dengan benar')" id="password" class="form-control" oninput="setCustomValidity('')" required placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="icheck-primary">
              <input type="checkbox" onclick="showpw()" id="remember">
              <label for="remember">
                Perlihatkan Password
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-outline-success btn-block login disabled"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br>
        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href="#" class="text-center">Login Page By &copy; ROA 2023</a>
          
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.login-box -->
<footer>
  <br>
 
  <div class="row">
    <div class="col-sm">
      <img src="{{ asset('foto/rpl.png') }}" width="100px" height="100px">
    </div>
    <div class="col-sm">
      <img src="{{asset('foto/k8.png')}}" width="100px" height="100px">
    </div>
    <div class="col-sm">
      <img src="https://kediricab.dindik.jatimprov.go.id/wp-content/uploads/2017/04/cropped-logo-jawa-timur-1-300x300.png" width="100px" height="100px">
    </div>
  </div>
  <br>
  <center><small><i>Milik SMK Negri 8 Malang 2020-2021</i></small></center>
</footer>
<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
<script src="{{asset('sweetalert2/dist/sweetalert2.min.js')}}"></script>
<!-- Message -->
<script src="{{asset('script/message.js')}}"></script>
<script>
  var username = document.getElementById("username");
  var password = document.getElementById("password");
  var show = document.getElementById("remember");
  function validasi()
  {
    if (username.value == "arif@sch.id" || password.value == "arif") {
      alert("lengkapi data anda terlebih dahulu");
    } else {
      return true;
    }
  }
  function showpw()
  {
    if (show.checked == true) {
      password.type = 'text';
    } else {
      password.type = 'password';
    }
  }
  function reset()
  {
    username.value = "asa";
    password.value = "asas";
  }
  
  //
  const flashdata = $('.flash-data').data('flashdata');
  if(flashdata){
    pesanBerhasil(flashdata, "Gagal", "error");
  }
  $(document).ready(function(){
    $(".preloader").fadeOut();
  });
  $("#email").on("keyup", function() {
    var value = $(this).val();
    if(value.length > 0){
      $(".login").removeClass("disabled");
    } else {
      $(".login").addClass("disabled");
    }
  });
  $("#password").on("keyup", function() {
    var value = $(this).val();
    if(value.length > 0){
      $(".login").removeClass("disabled");
    } else {
      $(".login").addClass("disabled");
    }
  });
  
</script>
</body>
</html>
