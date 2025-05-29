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
                        <th width = "50px">No</th>
                        <th>No.Order</th> 
                        <th>Tanggal Transaksi</th> 
                        <th>Total Transaksi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>00001</td>
                    <td>12-12-1999</td>
                    <td>Rp.500.000</td>
                    <td>
                    <button class="btn btn-warning"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-print"></i></button>
                    </td>
                  </tr>
                  <tr>
                  <td>2</td>
                    <td>00002</td>
                    <td>12-12-1999</td>
                    <td>Rp.1000.000</td>
                    <td>
                    <button class="btn btn-warning"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-print"></i></button>
                    </td>
                  </tr>
                </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                </div>
               <!-- /.card -->
              </div>
              
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