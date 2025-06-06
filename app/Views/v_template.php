<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Web Kasir</title>
  <link rel="icon" type="image/png" href="<?= base_url('asset_login') ?>/images/icons/logoc-food.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css?v=3.2.0">

  <!-- jQuery -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- ChartJS -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE App -->
  <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>

  <!-- Auto Nummberic -->
  <script src="<?= base_url('autoNumeric') ?>/src/AutoNumeric.js"></script>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-info navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block" >
          <a class="nav-link" href="<?= base_url('Admin') ?>" role="button">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a  class="nav-link <?= $menu == 'Contact' ? 'active' : '' ?>" href="<?= base_url('Contact') ?>" role="button">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Home/logout') ?>" role="button">
            <i class="fas fa-sign-out-alt"></i>Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-info elevation-4">
      <!-- Brand Logo -->
      <a class="brand-link d-flex align-items-center">
        <img src="<?= base_url('AdminLTE') ?>/dist/img/logoc-food.png" alt="C-Food Logo" class="brand-image elevation-3"
          style="opacity: 1; width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
        <span class="brand-text font-weight-bold text-primary" style="font-size: 20px;">
          C-Food 14 <span style="color: #ff6600;">C-ashier</span>
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('AdminLTE') ?>/dist/img/User.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= session()->get('username') ?></a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <aside>
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?= base_url('Admin') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-solid fa-house-user"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('Order') ?>" class="nav-link <?= $menu == 'transaksi' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-solid fa-money-bill"></i>
                  <p>
                    Transaction
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('Penjualan') ?>" class="nav-link <?= $menu == 'penjualan' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-solid fa-cash-register"></i>
                  <p>
                    Penjualan
                  </p>
                </a>
              </li>
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item <?= $menu == 'masterdata' ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= $menu == 'masterdata' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Master Data
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('Produk') ?>" class="nav-link <?= ($submenu == 'produk') ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Product</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Kategori') ?>"
                      class="nav-link <?= ($submenu == 'kategori') ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kategori</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('User') ?>" class="nav-link <?= ($submenu == 'user') ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>User</p>
                    </a>
                  </li>
                </ul>

                <li class="nav-item <?= $menu == 'laporan' ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= $menu == 'laporan' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-file-alt"></i>
                  <p>
                    Laporan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('Laporan/LaporanHarian') ?>" class="nav-link <?= ($submenu == 'laporan-harian') ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Laporan Harian</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Laporan/LaporanBulanan') ?>"
                      class="nav-link <?= ($submenu == 'laporan-bulanan') ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Laporan Bulanan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('Laporan/LaporanTahunan') ?>" class="nav-link <?= ($submenu == 'laporan-tahuanan') ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Laporan Tahunan</p>
                    </a>
                  </li>
                </ul>

              <li class="nav-item">
                <a href="<?= base_url('Setting') ?>" class="nav-link <?= $menu == 'setting' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                    Setting
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
                <li class="breadcrumb-item active"><?= $subtitle ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- Isi Content -->
            <?php
            if ($page) {
              echo view($page);
            }
            ?>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer text-center">
      <strong>Copyright &copy; 2025 Kelompok C Kelas 14 Capstone Project</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->


  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"939898d9684ace1e","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.4.0-1-g37f21b1","token":"2437d112162f4ec4b63c3ca0eb38fb20"}'
    crossorigin="anonymous"></script>
</body>

</html>