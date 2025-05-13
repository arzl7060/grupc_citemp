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

                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-data"><i class="fas fa-plus"> Add Data</i>
                </button>
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

              <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                  <?= session()->getFlashdata('error') ?>
                </div>
              <?php endif; ?>

              <!-- Main Table -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th width = "50px">No</th>
                        <th>ID User</th>
                        <th>Nama User</th>
                        <th>Role</th> 
                        <th>Password</th> 
                        <th>Create at</th> 
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>0001</td>
                    <td>Kasir 1</td>
                    <td>Common</td>
                    <td>asdaffgemndsjnkasd</td>
                    <td>15-10-2020</td>
                    <td>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#update-data"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete-data"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
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
              <?php echo form_open('User/insertUser') ?>
              <div class="modal-body">
              <div class="form-group">
                <label for="">Username</label>
                <input name="username" class ="form-control" placeholder="Username" required>
              </div>

              <div class="form-group">
                <label for="">Password</label>
                <input name="password" class ="form-control" placeholder="Password" required>
              </div>

              <div class="form-group">
                <label for="">Role</label>
                <select name="role" class="form-control">
                  <option value="1">Admin</option>
                  <option value="2" selected>Kasir</option>
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
      <div class="modal fade" id="update-data">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Data <?= $subtitle ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <?php echo form_open('User/updateUser') ?>
              <div class="modal-body">
              <div class="form-group">
                <label for="">Username</label>
                <input name="username" class ="form-control" placeholder="Username" required>
              </div>

              <div class="form-group">
                <label for="">Password</label>
                <input name="password" class ="form-control" placeholder="Password" required>
              </div>

              <div class="form-group">
                <label for="">Role</label>
                <select name="role" class="form-control">
                  <option value="1">Admin</option>
                  <option value="2" selected>Kasir</option>
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

      <!-- Modal Hapus Data -->
      <div class="modal fade" id="delete-data">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">Hapus Data <?= $subtitle ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
              <h4 class="text-center">Apakah Anda Yakin Menghapus Uservalue?</h4>

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
              </div>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
            
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false , 
      "autoWidth": false,
      "paging": false,
      "info": false, 
      "ordering": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script> 