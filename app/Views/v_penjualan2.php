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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- jQuery -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
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

  <!-- Angka terbilang -->
  <script src="<?= base_url('terbilang') ?>/terbilang.js"></script>
  <!-- Auto Numeric -->
  <script src="https://cdn.jsdelivr.net/npm/autonumeric@latest"></script>
</head>

<div class="hold-transition layout-top-nav">
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
          <?php if (session()->get('role') == 'admin') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('Admin') ?>">
                <i class="fas fa-th-large"></i> Dashboard
              </a>
            </li>
            <li>
              <a class="nav-link btn-danger" href="<?= base_url('Home/Logout') ?>">
                <i class="fas fa-sign-in-alt text-white"> Keluar</i>
              </a>
            </li>
          <?php } else { ?>
            <li>
              <a class="nav-link btn-danger" href="<?= base_url('Home/Logout') ?>">
                <i class="fas fa-sign-in-alt text-white"> Keluar</i>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper"> -->
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
                    <label class="form-control form-control-lg"><?= date('d M Y') ?></label>
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
              <label class="display-4 text-green">Rp. <?= number_format($grand_total, 0) ?>,-</label>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <?php echo form_open('Penjualan2/insertCart') ?>
                  <div class="row">
                    <div class="col-2 input-group">
                      <input name="kode_produk" id="kode_produk" class="form-control" placeholder="Barcode/Kode Produk"
                        autocomplete="off" required>
                      <span class="input-group-append">
                        <button type="reset" class="btn btn-danger btn-flat">
                          <i class="fas fa-arrow-left"></i>
                        </button>
                        <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#cari-produk">
                          <i class="fas fa-search"></i>
                        </a>
                      </span>
                    </div>
                    <div class="col-2">
                      <input name="nama_produk" class="form-control text-primary" placeholder="Nama Produk" readonly>
                    </div>
                    <div class="col-1">
                      <input name="nama_kategori" class="form-control text-primary" placeholder="Kategori" readonly>
                    </div>
                    <div class="col-1">
                      <input name="nama_satuan" class="form-control text-primary" placeholder="Satuan" readonly>
                    </div>
                    <div class="col-2">
                      <input name="harga_jual" class="form-control text-primary" placeholder="Harga" readonly>
                    </div>
                    <div class="col-1">
                      <input type="number" min="1" value="1" name="qty" id="qty" class="form-control text-center"
                        placeholder="QTY">
                    </div>
                    <input name="harga_beli" type="hidden">
                    <div class="col-3">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i></button>
                      <a href="<?= base_url('Penjualan2/resetCart') ?>" class="btn btn-warning"><i class="fas fa-sync">
                          Reset</i></a>
                      <a class="btn btn-success" data-toggle="modal" data-target="#pembayaran" onclick="pembayaran()"><i
                          class="fas fa-cash-register"> Bayar</i></a>
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
                      <?php $no = 1;
                      foreach ($cart as $key => $value) { ?>
                        <tr>
                          <td class="text-center"><?= $no++ ?></td>
                          <td class="text-center"><?= $value['id'] ?></td>
                          <td class="text-center"><?= $value['name'] ?></td>
                          <td class="text-center"><?= $value['options']['nama_kategori'] ?></td>
                          <td class="text-right">@ Rp. <?= number_format($value['price'], 0) ?>,-</td>
                          <td class="text-center"><?= $value['qty'] ?>   <?= $value['options']['nama_satuan'] ?></td>
                          <td class="text-right">Rp. <?= number_format($value['subtotal'], 0) ?>,-</td>
                          <td class="text-center">
                            <!-- id, name, price,subtotal are origin from cart -->
                            <a href="<?= base_url('Penjualan2/removeCart/' . $value['rowid']) ?>"
                              class="btn btn-danger btn-xs"><i class="fas fa-times"></i></a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
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
              <h1 class="text-center text-green" id="terbilang"></h1>
            </div>
          </div>
        </div>
        <div class="col-12">
          <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?= session()->getFlashdata('success') ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
  <!-- Control sidebar content goes here -->
  <!-- </aside> -->
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
</>


<!-- /.Modal Pencarian Produk -->
<div class="modal fade" id="cari-produk">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Cari Produk</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="example1" class="table table-bordered table-striped text-sm">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Kode Produk</th>
              <th class="text-center">Nama Produk</th>
              <th class="text-center">QTY</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($produk as $key => $value) { ?>
              <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td class="text-center"><?= $value['kode_produk'] ?></td>
                <td class="text-center"><?= $value['nama_produk'] ?></td>
                <td class="text-center"><?= $value['stok'] ?></td>
                <td class="text-center"><button onclick="pilihProduk(<?= $value['kode_produk'] ?>)"
                    class="btn btn-success">Pilih</button>
                </td>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- /.Modal Pembayaran -->
<div class="modal fade" id="pembayaran">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pembayaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open('Penjualan2/simpanTransaksi') ?>
        <div class="form-group">
          <label for="">Jumlah Total</label>
          <div class="input-group mb-3">
            <input name="grand_total" id="grand_total" class="form-control form-control-lg text-right text-danger"
              value="Rp <?= str_replace(',', '.', number_format($grand_total, 0)) ?>" readonly>
          </div>
          <div class="form-group">
            <label for="">Dibayar</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Rp.</span>
              </div>
              <input name="dibayar" id="dibayar" class="form-control form-control-lg text-right text-success" value=""
                autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label for="">Kembalian</label>
            <div class="input-group mb-3">
              <input name="kembalian" id="kembalian" class="form-control form-control-lg text-right" readonly>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
      </div>
      <?php echo form_close() ?>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal pembayaran-->


<!-- REQUIRED SCRIPTS -->
<script>
  $(document).ready(function () {
    $('#kode_produk').focus();
    var grandTotal = <?= $grand_total ?>;
    document.getElementById('terbilang').innerHTML = (grandTotal == 0) ? 'Nol Rupiah' : terbilang(<?= $grand_total ?>) + ' Rupiah'; // operator ternary

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
      url: '<?= base_url('Penjualan2/cekProduk') ?>',
      type: 'POST',
      data: {
        kode_produk: $('#kode_produk').val(),
      },
      dataType: 'json',
      success: function (response) {
        if (response.nama_produk) {
          $('input[name="nama_produk"]').val(response.nama_produk);
          $('input[name="harga_jual"]').val(response.harga_jual);
          $('input[name="harga_beli"]').val(response.harga_beli);
          $('input[name="nama_satuan"]').val(response.nama_satuan);
          $('input[name="nama_kategori"]').val(response.nama_kategori);
          $('#qty').focus();
        } else {
          Swal.fire('Produk tidak ditemukan!', '', 'error');
          $('input[name="nama_produk"]').val('');
          $('input[name="harga_jual"]').val('');
          $('input[name="harga_beli"]').val('');
          $('input[name="nama_satuan"]').val('');
          $('input[name="nama_kategori"]').val('');
        }

      }
    });
  }

  function pilihProduk(kode_produk) {
    $('#kode_produk').val(kode_produk);
    $('#cari-produk').modal('hide');
    $('#kode_produk').focus();
  }
  function pembayaran() {
    $('#pembayaran').modal('show');
  }


  new AutoNumeric('#dibayar', {
    digitGroupSeparator: ',', // Pemisah ribuan (titik)
    // decimalCharacter: ',',    // Pemisah desimal (koma)
    decimalPlaces: 0,
  });
  function hitung() {
    let grandTotal = $('#grand_total').val().replace(/[^0-9]/g, ''); // menghapus karakter selain angka
    let dibayar = $('#dibayar').val().replace(/[^0-9]/g, ''); // menghapus karakter selain angka
    let kembalian = parseFloat(dibayar) - parseFloat(grandTotal);
    if (kembalian < 0) { // jika kembalian kurang dari 0
      kembalian = 0; // set kembalian ke 0
    };
    $('input[name="kembalian"]').val(kembalian); // set nilai kembalian
    // $('input[name="kembalian"]').val(kembalian.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })); // menampilkan kembalian dalam format mata uang Indonesia
    new AutoNumeric('#kembalian', {
      digitGroupSeparator: ',', // Pemisah ribuan (titik)
      // decimalCharacter: ',',    // Pemisah desimal (koma)
      decimalPlaces: 0,         // Jumlah angka di belakang koma (misalnya .00)
    });
  }

  $('#dibayar').on('keyup', function () {
    hitung();
  });

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

    // Terapkan fungsi checkTime untuk memastikan format dua digit
    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);

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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "paging": true,
      "info": true,
      "ordering": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>

</html>