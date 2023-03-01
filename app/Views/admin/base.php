<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | <?= $title; ?></title>

  <!-- Bootstrap -->
  <link href="<?= base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url(); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url(); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">

  <script src="<?= base_url(''); ?>/swal/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="<?= base_url(''); ?>/swal/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url('/'); ?>/toastr/build/toastr.min.css">

  <!-- iCheck -->
  <link href="<?= base_url(); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="<?= base_url(); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
    rel="stylesheet">
  <link href="<?= base_url(); ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
    rel="stylesheet">
  <link href="<?= base_url(); ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="<?= base_url(); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <!-- sidebar -->
      <?= $this->include('admin/layout/sidebar'); ?>

      <!-- top navigation -->
      <?= $this->include('admin/layout/topbar'); ?>
      <!-- /top navigation -->

      <!-- page content -->
      <?= $this->renderSection('content'); ?>
      <!-- /page content -->

      <!-- footer content -->
      <?= $this->include('admin/layout/footer'); ?>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url(); ?>/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?= base_url(); ?>/vendors/nprogress/nprogress.js"></script>

  <script src="<?= base_url('/'); ?>/toastr/build/toastr.min.js"></script>

  <!-- iCheck -->
  <script src="<?= base_url(); ?>/vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="<?= base_url(); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="<?= base_url(); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?= base_url(); ?>/build/js/custom.min.js"></script>

  <?= $this->renderSection('script'); ?>

  <script>
  toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "showDuration": "600",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  </script>

  <?php ?>

  <?php
  if (session()->getFlashdata('dataMessage')) {
    foreach (session()->getFlashdata('dataMessage') as $item) {
      echo '<script>toastr["' .
        session()->getFlashdata('type-status') . '"]("' . $item . '")</script>';
    }
  }
  if (session()->getFlashdata('message')) {
    echo '<script>toastr["' .
      session()->getFlashdata('type-status') . '"]("' . session()->getFlashdata('message') . '")</script>';
  }
  ?>
</body>

</html>