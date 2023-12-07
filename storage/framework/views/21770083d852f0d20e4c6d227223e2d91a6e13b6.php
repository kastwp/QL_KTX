
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Admin | KTX | CTU</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/admin_assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="/admin_assets/dist/css/adminlte.min.css">
  <style>
        #a{
	        background-image: url("/admin_assets/dist/img/BANER1.png");
        } 

    </style>
</head>
<body class="hold-transition login-page">
<header class="">
            <div class="">
                <!-- begin nostyle content -->
                <div style="position:inline-block; text-align:center">
                
                    <p><img src="/admin_assets/dist/img/BANER1.png" alt="" top ="0" width="1000px" height="150px" /></p></div>
                <!-- end nostyle content -->
            </div>             
        </header>
<div class="login-box">
  <div class="login-logo">
   <b>Sinh Viên</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo e(route('admin.auth')); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name='email' placeholder="Mã nhân viên" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name='password' placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
            <?php echo csrf_field(); ?>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo e(session('error')); ?>

      </form>
  </div>
</div>


<!-- /.login-box -->

<!-- jQuery -->
<script src="/admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin_assets/dist/js/adminlte.min.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\NienLuan\ktx\resources\views/welcome.blade.php ENDPATH**/ ?>