<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=BASEURL;?>/Template_LTE/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
         <a class="nav-link" href="<?=BASEURL;?>/admin/logout">LOGOUT <i class="fas fa-power-off"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=BASEURL;?>/Template_LTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  
          <li class="nav-item">
            <a href="<?=BASEURL;?>/admin" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
               HOME
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?=BASEURL;?>/admin/skill" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                SKILL
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="<?=BASEURL;?>/admin/about" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                ABOUT
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="<?=BASEURL;?>/admin/contact" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                CONTACT
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
 <div class="container">
  <div class="row">
    <div class="col-md-3">
      <h5 style="font-style: italic;">halaman Home</h5>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 m-auto">
      <?=Flasher::flash(); ?>
    </div>
  </div>

   <div class="row mt-2">

     <div class="card text-white bg-info mb-5 ml-5" style="max-width: 18rem; min-width: 18rem;">
        <a href="#modal_foto" data-toggle="modal"><div class="card-header text-bold text-center">UBAH FOTO PROFIL</div></a>
        <div class="card-body">
        <h5 class="card-title">FOTO PROFIL</h5>
        <img  class="ml-4" style="max-width: 110px;" src="<?=BASEURL;?>/img/profil/<?=$pars['home']['foto_profil']; ?>">
        </div>
     </div>

     <div class="card text-white bg-success mb-5 ml-5" style="max-width: 18rem; min-width: 18rem;">
        <a href="#modal_logo" data-toggle="modal"><div class="card-header text-bold text-center">UBAH LOGO</div></a>
        <div class="card-body">
        <h5 class="card-title">LOGO</h5>
        <img  class="ml-4" style="max-width: 110px;" src="<?=BASEURL;?>/img/logo/<?=$pars['home']['logo']; ?>">
        </div>
     </div>

     <div class="card text-white bg-secondary mb-5 ml-5" style="max-width: 18rem; min-width: 18rem;">
        <a href="#modal_nama" data-toggle="modal"><div class="card-header text-bold text-center">UBAH NAMA</div></a>
        <div class="card-body">
        <h5 class="card-title">NAMA</h5>
        <p class="card-text text-center" style="font-size: 30px;" ><?=$pars['home']['nama']; ?></p>
        </div>
     </div>

     <div class="card text-white bg-danger mb-5 ml-5" style="max-width: 18rem; min-width: 18rem;">
        <a href="#modal_pekerjaan" data-toggle="modal"><div class="card-header text-bold text-center">UBAH PEKERJAAN</div></a>
        <div class="card-body">
        <h5 class="card-title">PEKERJAAN</h5>
        <p class="card-text" style="font-size: 30px;"><?=$pars['home']['pekerjaan']; ?></p>
        </div>
     </div>





     <!-- modal foto -->

<!-- Modal -->
<div class="modal fade" id="modal_foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="" method="post"  enctype="multipart/form-data">        
        <div class="modal-body">

         <input type="file" name="foto_profil">
         <img style="max-width: 50px;" src="<?=BASEURL;?>/img/profil/<?=$pars['home']['foto_profil']; ?>">
         <br>
         <small class="form-text text-muted">gunakan foto tanpa background</small>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>
     <!-- akhir modal foto -->

      <!-- modal logo -->
     <!-- Modal -->
<div class="modal fade" id="modal_logo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post"  enctype="multipart/form-data">        
        <div class="modal-body">

         <input type="file" name="logo">
         <img style="max-width: 50px;" src="<?=BASEURL;?>/img/logo/<?=$pars['home']['logo']; ?>">

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>
     <!-- akhir modal logo -->

     <!-- modal nama -->
     <!-- Modal -->
<div class="modal fade" id="modal_nama" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Nama</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
            <input type="text" class="form-control" name="nama" value="<?=$pars['home']['nama'];?>">
            <small class="form-text text-muted">gunakan nama pendek</small>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">UBAH</button>
        </div>
      </form>
    </div>
  </div>
</div>
     <!-- akhir modal foto -->
     <!-- akhir modal nama -->

     <!-- modal pekerjaan -->
     <!-- Modal -->
<div class="modal fade" id="modal_pekerjaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Pekerjaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
       <input type="text" class="form-control" name="pekerjaan" value="<?=$pars['home']['pekerjaan'];?>">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ubah</button>
      </div>
    </form>
    </div>
  </div>
</div>
     <!-- akhir modal pekerjaan -->

   </div>
 </div>
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=BASEURL;?>/Template_LTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/moment/moment.min.js"></script>
<script src="<?=BASEURL;?>/Template_LTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=BASEURL;?>/Template_LTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=BASEURL;?>/Template_LTE/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=BASEURL;?>/Template_LTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=BASEURL;?>/Template_LTE/dist/js/demo.js"></script>
</body>
</html>
