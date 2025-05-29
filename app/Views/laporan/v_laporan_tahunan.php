<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?= $subtitle ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <!-- Row untuk filter -->
      <div class="row">
        <div class="col-sm-2">
          <div class="form-group">
            <label>Tahun :</label>
            <select name="tahun" id="tahun" class="form-control">
              <option value="">--Tahun--</option>
            </select>
          </div>
        </div>
        <div class="col-sm-5 d-flex align-items-end">  <!-- Perbaikan alignment -->
          <div class="form-group">
            <button onclick="viewTableLaporan()" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#cari-produk">
              <i class="fas fa-file mr-1"></i>View Laporan
            </button>
            <button onclick="PrintLaporan()" class="btn btn-success btn-flat ml-1">
              <i class="fas fa-print mr-1"></i>Print Laporan
            </button>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Row untuk tabel -->
      <div class="row mt-3">  <!-- Tambah margin top -->
        <div class="col-12">
          <hr>
          <div class="Table">
            <!-- Konten tabel akan muncul di sini -->
          </div>
        </div>
      </div>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<script>
    function viewTableLaporan(){
        let tahun = $('#tahun').val();
        if(tahun == ''){
            Swal.fire('Tahun Belum Dipilih!');
        }else{
        $.ajax({
            type: "post",
            url: "<?=base_url('Laporan/viewLaporanTahunan') ?>",
            data: {
                tahun: tahun,
            },
            dataType: "JSON",
            success: function (response) {
                if(response.data){
                    $('.Table').html(response.data)
                }
            }
        });
        }
    }

    function PrintLaporan(){
        let tahun = $('#tahun').val();
        if(tahun == ''){
            Swal.fire('Tahun Belum Dipilih!');
        }else{
            NewWin = window.open('<?= base_url('Laporan/PrintLaporanTahunan')?>/' + tahun,'NewWin','toolbar=no, widht=1500,height=800,scrollbars=yes');
        }
    }

function populateYearDropdown(selectId, yearsToAdd) {
    const selectElement = document.getElementById(selectId);
    const currentYear = new Date().getFullYear();
    
    for (let i = 0; i <= yearsToAdd; i++) {
        const year = currentYear + i;
        selectElement.add(new Option(year, year));
    }
}

function initDropdowns() {
    populateYearDropdown('tahun', 5); 
}

document.addEventListener('DOMContentLoaded', initDropdowns);
</script>