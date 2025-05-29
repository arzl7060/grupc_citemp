<!-- Isi Content -->
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?= $title ?></h3>
      <div class="card-tools">
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="37px">No</th>
            <th>No. Invoice</th>
            <th>Tanggal Transaksi</th>
            <th>Total Transaksi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($order as $key => $value) { ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $value['no_faktor'] ?></td>
              <td><?= $value['tanggal'] ?></td>
              <td><?= $value['total'] ?></td>
              <td>
                <button class="btn btn-warning" data-toggle="modal" data-target="#view-order<?= $value['id'] ?>"><i
                    class="fas fa-eye"></i></button>
                <button onclick="
        var windowFeatures = 'toolbar=no, width=1000, height=800, left=100, top=100';
        window.open('<?= base_url('Order/printOrder') ?>', 'NewWin', windowFeatures);
            " type="button" class="btn btn-success"><i class="fas fa-print"></i></button>
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
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Update Data -->
<?php foreach ($order as $key => $value) { ?>
  <div class="modal fade" id="view-order<?= $value['id'] ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail order <?= $subtitle ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-4">
              <label for="">No Invoice</label>
              <input value="<?= $value['no_faktor'] ?>" class="form-control" readonly>
            </div>
            <div class="form-group col-4">
              <label for="">Tanggal Transaksi</label>
              <input value="<?= $value['tanggal'] ?>" class="form-control" readonly>
            </div>
            <div class="form-group col-4">
              <label for="">Jam Transaksi</label>
              <input value="<?= $value['jam'] ?>" class="form-control" readonly>
            </div>
            <div class="form-group col-4">
              <label for="">Jumlah Total transaksi</label>
              <input value="Rp <?= number_format($value['total']) ?>" class="form-control" readonly>
            </div>
            <div class="form-group col-4">
              <label for="">Jumlah kembalian</label>
              <input value="Rp <?= number_format($value['kembalian']) ?>" class="form-control" readonly>
            </div>
            <div class="form-group col-4">
              <label for="">Kasir</label>
              <input value="<?= $value['username'] ?>" class="form-control" readonly>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
</script>