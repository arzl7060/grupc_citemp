<!-- Isi Content -->
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?= $subtitle ?></h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-data
        "><i class="fas fa-plus">
            Add Data</i>
        </button>
        <button type="button" class="btn btn-tool"><i class="fas fa-print">
            Print</i>
        </button>
      </div>
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

      <?php
      $errors = session()->getFlashdata('errors');
      if (!empty($errors)) { ?>
        <div class="alert alert-danger">
          <h4>Periksa lagi Entry Form !</h4>
          <ul>
            <?php foreach ($errors as $error) { ?>
              <li><?= $error ?></li>
            <?php } ?>
        </div>
      <?php } ?>

      <!-- Table Main -->
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr class="text-center">
            <th width="50px">No</th>
            <th>Kode/Barcode</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stock</th>
            <th>Satuan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($produk as $key => $value) { ?>
            <tr class="text-center">
              <td><?= $no++ ?></td>
              <td><?= $value['kode_produk'] ?></td>
              <td><?= $value['nama_produk'] ?></td>
              <td><?= $value['nama_kategori'] ?></td>
              <td class="text-right">Rp. <?= number_format($value['harga_beli'], 0) ?></td>
              <td class="text-right">Rp. <?= number_format($value['harga_jual'], 0) ?></td>
              <td><?= $value['stok'] ?></td>
              <td><?= $value['nama_satuan'] ?></td>
              <td>
                <button class="btn btn-warning" data-toggle="modal" data-target="#update-data<?= $value['id'] ?>"><i
                    class="fas fa-pencil-alt"></i></button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#delete-data<?= $value['id'] ?>"><i
                    class="fas fa-trash"></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Modal Add Data -->

<div class="modal fade" id="add-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Data <?= $subtitle ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open('Produk/insertProduk') ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Kode Produk/Barcode</label>
          <input name="kode_produk" class="form-control" value="<?= old('kode_produk') ?>" placeholder="Kode Produk"
            required>
        </div>

        <div class="form-group">
          <label for="">Nama Produk</label>
          <input name="nama_produk" class="form-control" value="<?= old('nama_produk') ?>" placeholder="Nama Produk"
            required>
        </div>

        <div class="form-group">
          <label for="">Kategori</label>
          <select name="id_kategori" class="form-control">
            <option value="">Pilih Kategori</option>
            <?php foreach ($kategori as $key => $value) { ?>
              <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="">Harga Beli</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp.</span>
            </div>
            <input type="number" name="harga_beli" id="harga_beli" class="form-control" value="<?= old('harga_beli') ?>"
              placeholder="Harga Beli" required>
          </div>
        </div>
        <div class="form-group">
          <label for="">Harga Jual</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp.</span>
            </div>
            <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="<?= old('harga_jual') ?>"
              placeholder="Harga Jual" required>
          </div>
        </div>

        <div class="form-group">
          <label for="">Stok Produk</label>
          <input type="number" name="stok" class="form-control" value="<?= old('stok') ?>" placeholder="Stok" required>
        </div>

        <div class="form-group">
          <label for="">Satuan</label>
          <select name="id_satuan" class="form-control">
            <option value="">Pilih Satuan</option>
            <?php foreach ($satuan as $key => $value) { ?>
              <option value="<?= $value['id_satuan'] ?>"><?= $value['nama_satuan'] ?></option>
            <?php } ?>
          </select>
        </div>

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <?php echo form_close() ?>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Update Data -->
<?php foreach ($produk as $key => $value) { ?>
  <div class="modal fade" id="update-data<?= $value['id'] ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Data <?= $subtitle ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php echo form_open('Produk/updateProduk/' . $value['id']) ?>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Kode Produk</label>
            <input name="kode_produk" class="form-control" value="<?= $value['kode_produk'] ?>" placeholder="Kode Produk"
              required>
          </div>

          <div class="form-group">
            <label for="">Nama Produk</label>
            <input name="nama_produk" class="form-control" value="<?= $value['nama_produk'] ?>" placeholder="Nama Produk"
              required>
          </div>

          <div class="form-group">
            <label for="">Kategori</label>
            <select name="id_kategori" class="form-control">
              <option value="">Pilih Kategori</option>
              <?php foreach ($kategori as $key => $k) { ?>
                <option value="<?= $k['id_kategori'] ?>" <?= $value['id_kategori'] == $k['id_kategori'] ? 'Selected' : '' ?>>
                  <?= $k['nama_kategori'] ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="">Harga beli</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Rp.</span>
              </div>
              <input name="harga_beli" id="harga_beli" class="form-control"
                value="<?= number_format($value['harga_beli'], 0) ?>" placeholder="Harga Beli" required>
            </div>
          </div>

          <div class="form-group">
            <label for="">Harga jual</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Rp.</span>
              </div>
              <input name="harga_jual" id="harga_jual" class="form-control"
                value="<?= number_format($value['harga_jual'], 0) ?>" placeholder="Harga Jual" required>
            </div>
          </div>

          <div class="form-group">
            <label for="">Stok Produk</label>
            <input name="stok" class="form-control" value="<?= $value['stok'] ?>" placeholder="Stok" required>
          </div>

          <div class="form-group">
            <label for="">Satuan</label>
            <select name="id_satuan" class="form-control">
              <option value="">Pilih Satuan</option>
              <?php foreach ($satuan as $key => $s) { ?>
                <option value="<?= $s['id_satuan'] ?>" <?= $value['id_satuan'] == $s['id_satuan'] ? 'Selected' : '' ?>>
                  <?= $s['nama_satuan'] ?>
                </option>
              <?php } ?>
            </select>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?php echo form_close() ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php } ?>
<!-- /.modal -->

<!-- Modal Hapus Data -->
<?php foreach ($produk as $key => $value) { ?>
  <div class="modal fade" id="delete-data<?= $value['id'] ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Hapus Data <?= $subtitle ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4 class="text-center">Apakah Anda Yakin Menghapus <b><?= $value['nama_produk'] ?></b>?</h4>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <a href="<?= base_url('Produk/deleteProduk/' . $value['id']) ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php } ?>
<!-- /.modal -->

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

  //
  //   new AutoNumeric('#harga_beli', {
  //     digitGroupSeparator: ',',
  //     decimalPlace: 0,
  //   });

  //   new AutoNumeric('#harga_jual', {
  //     digitGroupSeparator: ',',
  //     decimalPlace: 0,
  //   });
  // 

</script>