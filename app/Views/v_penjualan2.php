<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kasir App</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css?v=3.2.0">

</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="../../index3.html" class="navbar-brand">

          <span class="brand-text font-weight-light"><i class="fas fa-shopping-cart text-primary"></i><b> Transaksi
              Penjualan</b></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <div class="content">
        <div class="row">

          <!-- /.col-md-6 -->
          <div class="col-lg-7">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <div class="form-group">
                      <label>No. Faktur</label>
                      <label class="form-control form-control-lg">14243373536</label>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <label class="form-control form-control-lg"><?= date('d m y') ?> </label>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Jam</label>
                      <label class="form-control form-control-lg"><?= date('13:00:00') ?> </label>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Kasir</label>
                      <label class="form-control form-control-lg text-primary">Nama Kasir</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"></h5>
              </div>
              <div class="card-body text-right">
                <label class="display-4 text-green"> RP. 1.550.000,-</label>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-2 input-group">
                        <input name="kode_produk" class="form-control" placeholder="Barcode/Kode Produk">
                        <span class="input-group-append">
                          <button class="btn btn-primary btn-flat">
                            <i class="fas fa-search"></i>
                          </button>
                          <button class="btn btn-danger btn-flat">
                            <i class="fas fa-times"></i>
                          </button>
                        </span>
                      </div>
                      <div class="col-2">
                        <input name="nama_produk" class="form-control" placeholder="Nama Produk">
                      </div>
                      <div class="col-1">
                        <input name="kategori" class="form-control" placeholder="Kategori">
                      </div>
                      <div class="col-1">
                        <input name="satuan" class="form-control" placeholder="Satuan">
                      </div>
                      <div class="col-2">
                        <input name="harga_jual" class="form-control" placeholder="Harga">
                      </div>
                      <div class="col-1">
                        <input type="number" min="1" value="1" name="qty" class="form-control text-center"
                          placeholder="QTY">
                      </div>
                      <div class="col-3">
                        <button class="btn btn-primary"><i class="fas fa-cart-plus"></i></button>
                        <button class="btn btn-warning"><i class="fas fa-sync"></i></button>
                        <button class="btn btn-success"><i class="fas fa-cash-register"> Bayar</i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Kode Produk</th>
                          <th class="text-center">Nama Produk</th>
                          <th class="text-center">Kategori</th>
                          <th class="text-center">Harga</th>
                          <th class="text-center">Qty</th>
                          <th class="text-center">Total Harga</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td class="text-center">P001</td>
                          <td class="text-center">Produk 1</td>
                          <td class="text-center">Kategori 1</td>
                          <td class="text-right">@ Rp. 50.000,-</td>
                          <td class="text-center">2 pcs</td>
                          <td class="text-right">Rp. 100.000,-</td>
                          <td class="text-center">
                            <button class="btn btn-danger btn-xs"><i class="fas fa-times"></i></button>
                          </td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"></h5>
              </div>
              <div class="card-body text-right">
                <h1 class="text-center text-green">Satu Juta Lima Ratus Lima Puluh ribu rupiah</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>

</body>

</html>