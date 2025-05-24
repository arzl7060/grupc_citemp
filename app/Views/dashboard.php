<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-info">
    <div class="inner">
      <h3>150</h3>

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
      <h3>53<sup style="font-size: 20px">%</sup></h3>

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
      <h3>44</h3>

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
      <h3>65</h3>

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
      <span class="info-box-number">1000000</span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-4">
  <!-- Info Boxes Style 2 -->
  <div class="info-box mb-3 bg-teal">
    <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pendapatan Minggu Ini</span>
      <span class="info-box-number">5,200</span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-4">
  <!-- Info Boxes Style 2 -->
  <div class="info-box mb-3 bg-purple">
    <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pendapatan Bulan Ini</span>
      <span class="info-box-number">5,200</span>
    </div>
    <!-- /.info-box-content -->
  </div>
</div>

<div class="col-md-12">
  <canvas id="myChart" width="100%" height="35px"></canvas>
</div>

<script>
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
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