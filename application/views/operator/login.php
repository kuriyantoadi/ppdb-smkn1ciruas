<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Operator</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/check-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h2>SMK Negeri 1 Ciruas</h2>
      <h4><strong>Operator PPDB</strong></h4>
    </div>
    <div class="card-body">

      <?= form_open('C_login/login_operator'); ?>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="username">
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="row">
          <input align="center" type="submit" class="btn btn-primary btn-block" value="Login"></input>
        </div>
        <?= form_close(); ?>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<div class="card-footer text-muted">
  <h6>Proses Load <strong>{elapsed_time}</strong> detik</h6>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
</body>
</html>
