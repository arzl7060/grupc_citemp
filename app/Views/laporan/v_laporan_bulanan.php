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
            <label>Bulan</label>
            <select name="bulan" id="bulan" class="form-control">
              <option value="">--Bulan--</option>
            </select>
          </div>
        </div>
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
        let bulan = $('#bulan').val();
        let tahun = $('#tahun').val();
        if(bulan ==''){
            Swal.fire('Bulan Belum Dipilih!');
        }else if(tahun == ''){
            Swal.fire('Tahun Belum Dipilih!');
        }else{
        $.ajax({
            type: "post",
            url: "<?=base_url('Laporan/viewLaporanBulanan') ?>",
            data: {
                bulan: bulan,
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
        let bulan = $('#bulan').val();
        let tahun = $('#tahun').val();
        if(bulan ==''){
            Swal.fire('Bulan Belum Dipilih!');
        }else if(tahun == ''){
            Swal.fire('Tahun Belum Dipilih!');
        }else{
            NewWin = window.open('<?= base_url('Laporan/PrintLaporanBulanan')?>/' + bulan + '/' + tahun,'NewWin','toolbar=no, widht=1500,height=800,scrollbars=yes');
        }
    }

    function populateMonths(selectId) {
    const months = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    
    const selectElement = document.getElementById(selectId);
    
    months.forEach((month, index) => {
        selectElement.add(new Option(month, index + 1));
    });
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
    populateMonths('bulan');
    populateYearDropdown('tahun', 5); 
}

document.addEventListener('DOMContentLoaded', initDropdowns);
</script>