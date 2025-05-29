<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-info">
    <div class="inner">
      <h3><?= $jml_produk ?></h3>

      <p>Product</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-fish"></i>
    </div>
    <a href="<?= base_url('Produk') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3><?= $jml_kategori ?></sup></h3>

      <p>Category</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-list"></i>
    </div>
    <a href="<?= base_url('Kategori') ?>" class="small-box-footer">More info <i
        class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-warning">
    <div class="inner">
      <h3><?= $jml_jual ?></h3>

      <p>Penjualan</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-book-open"></i>
    </div>
    <a href="<?= base_url('Order') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-danger">
    <div class="inner">
      <h3><?= $jml_user ?></h3>

      <p>User</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-users"></i>
    </div>
    <a href="<?= base_url('User') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-md-4">
  <!-- Info Boxes Style 2 -->
  <div class="info-box mb-3 bg-info">
    <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pendapatan Hari Ini</span>
      <span class="info-box-number">Rp. <?= number_format($p_hari_ini['total_harga'] ?? 0, 0) ?></span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-4">
  <!-- Info Boxes Style 2 -->
  <div class="info-box mb-3 bg-teal">
    <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pendapatan Bulan Ini</span>
      <span class="info-box-number">Rp. <?= number_format($p_bulan_ini['total_harga'],0) ?></span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-4">
  <!-- Info Boxes Style 2 -->
  <div class="info-box mb-3 bg-purple">
    <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pendapatan Tahun Ini</span>
      <span class="info-box-number">Rp. <?= number_format($p_tahun_ini['total_harga'],0) ?></span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-12">
  <canvas id="myChart" width="100%" height="35px"></canvas>
</div>

<?php 
$tgl = [];
$total = [];

foreach ($grafik as $key => $value) {
    $tgl[] = $value['tgl_jual'];
    $total[] = $value['total_harga'];
}
?>

<script>
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?= json_encode($tgl) ?>,
      datasets: [{
        label: 'Grafik Penjualan Bulan <?= date('M Y') ?>',
        data: <?= json_encode($total)?>,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 3
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>