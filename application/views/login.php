<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin.css" rel="stylesheet">
</head>
<!-- halaman log in -->
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">
        <div class="text-center">
        LOGIN WEB SOSIALISASI PILKADA </div>
        </div>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>index.php/Login/login_action" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username:</label>
            <input class="form-control" type="text"  placeholder="Masukan Username" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password :</label>
            <input class="form-control" type="password" placeholder="Masukan Password" name="password">
        </div>
        <input type="submit" class="btn btn-primary" value="login"/>
        </form>
      </div>
    </div>
  </div>
  <!-- halaman log in -->

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
