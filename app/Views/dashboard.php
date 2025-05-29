<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-info">
    <div class="inner">
      <h3><?= $jumlahProduk ?></h3>

      <p>Produk</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-fish"></i>
    </div>
    <a href="<?= base_url('Produk') ?>" class="small-box-footer">Info lebih<i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3><?= $jumlahKategori ?><sup style="font-size: 20px"></sup></h3>

      <p>Kategori</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-list"></i>
    </div>
    <a href="<?= base_url('Kategori') ?>" class="small-box-footer">Info lebih<i
        class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-warning">
    <div class="inner">
      <h3><?= $jumlahOrder ?></h3>

      <p>Penjualan</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-book-open"></i>
    </div>
    <a href="<?= base_url('Order') ?>" class="small-box-footer">Info lebih<i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-danger">
    <div class="inner">
      <h3><?= $jumlahUser ?></h3>

      <p>Akun</p>
    </div>
    <div class="icon">
      <i class="fa-solid fas fa-users"></i>
    </div>
    <a href="<?= base_url('User') ?>" class="small-box-footer">Info lebih<i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>

<div class="col-md-4">
  <!-- Info Boxes Style 2 -->
  <div class="info-box mb-3 bg-info">
    <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pendapatan Hari Ini</span>
      <span class="info-box-number">Rp <?= number_format($pendapatanHariIni['total_harga']) ?></span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-4">
  <!-- Info Boxes Style 2 -->
  <div class="info-box mb-3 bg-teal">
    <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pendapatan bulan Ini</span>
      <span class="info-box-number">Rp <?= number_format($pendapatanBulanIni['total_harga']) ?></span>
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
      <span class="info-box-number">Rp <?= number_format($pendapatanTahunIni['total_harga']) ?></span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-12">
  <canvas id="myChart" width="100%" height="35px"></canvas>
</div>

<?php
if ($grafik == null) {
  $tanggal[] = 0;
  $total[] = 0;
} else {
  foreach ($grafik as $key => $value) {
    $tanggal[] = $value['tanggal'];
    $total[] = $value['total_harga'];
  }
}
?>
<script>
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?= json_encode($tanggal) ?>,
      datasets: [
        {
          label: 'Grafik Pendapatan Bulan <?= date('F Y') ?>',
          data: <?= json_encode($total) ?>,
          backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
            // 'rgba(255, 206, 86, 0.2)',
            // 'rgba(75, 192, 192, 0.2)',
            // 'rgba(153, 102, 255, 0.2)',
            // 'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            // 'rgba(255, 99, 132, 1)',
            // 'rgba(54, 162, 235, 1)',
            // 'rgba(255, 206, 86, 1)',
            // 'rgba(75, 192, 192, 1)',
            // 'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 3
        }
      ]
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