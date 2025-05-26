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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- jQuery -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
  <!-- SweetAlert2 -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
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
          <li class="nav-item">
            <?php if (session()->get('role') == 'admin') { ?>
              <a class="nav-link" href="<?= base_url('Admin') ?>">
                <i class="fas fa-th-large"></i> Dashboard
              </a>
            <?php } else { ?>
              <a class="nav-link btn-danger" href="<?= base_url('Home/Logout') ?>">
                <i class="fas fa-sign-in-alt text-white"> Logout</i>
              </a>
            <?php } ?>
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
          <div class="col-lg-8">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <div class="form-group">
                      <label>No. Invoice</label>
                      <label class="form-control form-control-lg"><?= $no_faktor ?></label>
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
                      <label class="form-control form-control-lg" id="jam"></label>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label>Kasir</label>
                      <label class="form-control form-control-lg text-primary"><?= session()->get('username') ?></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
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
                    <?php echo form_open() ?>
                    <div class="row">
                      <div class="col-2 input-group">
                        <input name="kode_produk" id="kode_produk" class="form-control"
                          placeholder="Barcode/Kode Produk" autocomplete="off">
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
                        <input name="nama_produk" class="form-control text-primary" placeholder="Nama Produk" readonly>
                      </div>
                      <div class="col-1">
                        <input name="kategori" class="form-control text-primary" placeholder="Kategori" readonly>
                      </div>
                      <div class="col-1">
                        <input name="satuan" class="form-control text-primary" placeholder="Satuan" readonly>
                      </div>
                      <div class="col-2">
                        <input name="harga_jual" class="form-control text-primary" placeholder="Harga" readonly>
                      </div>
                      <div class="col-1">
                        <input type="number" min="1" value="1" name="qty" id="qty" class="form-control text-center"
                          placeholder="QTY">
                      </div>
                      <div class="col-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i></button>
                        <button type="reset" class="btn btn-warning"><i class="fas fa-sync"></i></button>
                        <button class="btn btn-success"><i class="fas fa-cash-register"> Bayar</i></button>
                      </div>
                    </div>
                    <?php echo form_close() ?>
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

  <script>
    $(document).ready(function () {
      $('#kode_produk').focus(),
        $('#kode_produk').keydown(function (e) {
          let kode_produk = $('#kode_produk').val();
          if (e.keyCode == 13) {
            e.preventDefault();
            if (kode_produk == '') {
              Swal.fire('Kode Produk belum diisi!', '', 'warning');
            } else {
              cekProduk();
            }
          }
        })
    });
    function cekProduk() {
      $.ajax({
        url: '<?= base_url('Penjualan/cekProduk') ?>',
        type: 'POST',
        data: {
          kode_produk: $('#kode_produk').val(),
        },
        dataType: 'json',
        success: function (response) {
          if (response.nama_produk) {
            $('input[name="nama_produk"]').val(response.nama_produk);
            $('input[name="harga_jual"]').val(response.harga_jual);
            $('input[name="satuan"]').val(response.nama_satuan);
            $('input[name="kategori"]').val(response.nama_kategori);
            $('#qty').focus();
          } else {
            Swal.fire('Produk tidak ditemukan!', '', 'error');
            $('input[name="nama_produk"]').val('');
            $('input[name="harga_jual"]').val('');
            $('input[name="satuan"]').val('');
            $('input[name="kategori"]').val('');
          }

        }
      });
    }
  </script>

  <script>
    window.onload = function () {
      startTime();
    }
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      document.getElementById('jam').innerHTML = h + ':' + m + ':' + s;
      var t = setTimeout(function () {
        startTime();
      }, 1000);
    }
    function checkTime(i) {
      if (i < 10) {
        i = "0" + i
      }
      return i;
    }
  </script>
</body>

</html>