<?php
   session_start();
  
   if(!$_SESSION['role']=="admin"){
    //  echo "Anda Tidak Memiliki Access Dalam Operasi Ini";
   }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?= include('../sidebar/index.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Admin</h1>
          </div>
          <div class="col-sm-6">
            <?php include('../breadcrumbs/index.php') ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-8 mx-auto">
            <!-- general form elements disabled -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="/eoq/backend/admin/createAdmin.php" method="post">
                  <div class="form-group">
                    <label class="form-label" for="">Username</label>
                    <input class="form-control" type="text" name="username" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Nama</label>
                    <input class="form-control" type="text" name="name" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Telephone</label>
                    <input class="form-control" type="text" name="phone" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Jabatan</label>
                    <select class="form-control" id="jabatan" name="status">
                      <option value="admin">Admin</option>
                      <option value="penjualan">Penjualan</option>
                      <option value="pengadaan">Pengadaan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Email</label>
                    <input class="form-control" type="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="password" name="password" required>
                  </div>
                  <div class="form-group text-right">
                    <input class="btn btn-warning" type="cancel" value="Cancel" />
                    <input class="btn btn-success" type="submit" name="submit" value="Submit" />
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

