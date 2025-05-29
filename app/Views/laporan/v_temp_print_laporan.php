<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <link rel="icon" href="<?= base_url('AdminLTE') ?>/dist/img/logoc-food.png" type="image/png" />

  <link rel="icon" type="image/png" href="<?= base_url('asset_login') ?>/images/icons/logoc-food.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css?v=3.2.0">
</head>

<body>
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-12 text-center">
          <img src="<?= base_url('AdminLTE') ?>/dist/img/logoc-food.png" alt="C-Food Logo"
            class="brand-image elevation-3"
            style="opacity: 1; width:65px; height: 65px; border-radius: 50%; margin-right: 10px;">
          <span class="brand-text font-weight-bold text-primary" style="font-size: 30px;">
            C-Food 14 <span style="color: #ff6600;">C-ashier</span>
          </span>
          <br>
          <br>
          <address>
            <strong>Jalan Cabe Raya, Pondok Cabe, 15437, </strong><br>
            <strong>Pamulang, Tangerang Selatan</strong><br>
            <strong>Banten - Indonesia</strong>
          </address>
        </div>
        <div class="col-12 text-center">
          <hr>
          <b>
            <h4><?= $title ?></h4>
          </b> </hr>
        </div>
      </div>
      <!-- info row -->

      <!-- Table row -->
      <div class="row">
        <?php if ($page) {
          echo view($page);
        }
        ?>
      </div>
      <!-- /.row -->

      <div class="row">

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
  <!-- Page specific script -->

  <script>
    window.addEventListener("load", window.print());
  </script>

</body>

</html>