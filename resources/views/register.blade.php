<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD-DataOn | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  {{-- {{ asset('template/') }} --}}
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline">
    <div class="card card-header bg-danger">
		<img src="{{ asset('template/dist/laravel.png')}}" class="card-img-top mx-auto" style="width:40px" alt="">
    </div>
    <div class="card-body">
      <h4 class="login-box-msg">Form Register</h4>

      <form action="/registerakun" method="POST">
		@csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Nama">
          <div class="input-group-append">
          </div>
        </div>
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="email" placeholder="Email">
			<div class="input-group-append">
			</div>
		  </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
          </div>
        </div>
        <div class="row">
		  <div class="col-8">
			<p class="mb-0">
				<a href="/login" class="text-center text-dark">Log In</a>
			</p>
		  </div>
          <div class="col-4">
            <button type="submit" class="btn btn-danger btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
