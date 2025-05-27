<!-- <div class="content-wrapper">  -->
<!-- Main content -->
<!-- <div class="content">
      <div class="container-fluid">
        <div class="row"> -->
<!-- Isi Content -->
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subtitle ?></h3>


            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Alert -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?php echo form_open('Admin/updateSetting') ?>
            <div class="form-group">
                <label for="">Nama Cafe</label>
                <input name="nama_toko" class="form-control" value="<?= $setting['nama_toko'] ?>">
            </div>
            <div class="form-group">
                <label for="">Slogan</label>
                <input name="slogan" class="form-control" value="<?= $setting['slogan'] ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input name="alamat" class="form-control" value="<?= $setting['alamat'] ?>">
            </div>
            <div class="form-group">
                <label for="">Nomor Telepon</label>
                <input name="no_telpon" class="form-control" value="<?= $setting['no_telpon'] ?>">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea rows="3" name="deskripsi" class="form-control "><?= $setting['deskripsi'] ?></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary " value="">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->