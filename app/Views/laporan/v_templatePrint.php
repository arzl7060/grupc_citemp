<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E Kasir | <?= $title ?></title>

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
                <div class="col-12">
                    <h3>
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <strong class="text-primary"><?= $web['nama_toko'] ?></strong>
                    </h3>
                    <strong class="text-md"><?= $web['slogan'] ?></strong><br>
                    <fonts><?= $web['alamat'] ?></fonts><br>
                    <fonts><?= $web['no_telpon'] ?></fonts><br>
                    <strong>Tentang kami</strong><br>
                    <fonts><?= $web['deskripsi'] ?></fonts>
                </div>
                <!-- /.col -->

                <div class="col-12">
                    <hr>
                    <h4 class="page-header text-center">
                        <b><?= $title ?></b>
                        <small class="float-right text-md"><b>Tanggal cetak:</b> <?= date('d-M-Y H:i:s') ?></small>
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


            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>