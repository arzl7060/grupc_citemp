<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subtitle ?></h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal :</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="date" name="tgl" id="tgl" class="form-control">
                                <span class="input-group-append">
                                    <button onclick="viewTableLaporan()" class="btn btn-primary btn-flat"
                                        data-toggle="modal" data-target="#cari-produk">
                                        <i class="fas fa-file mr-1"></i>Lihat Laporan
                                    </button>
                                    <button onclick="PrintLaporan()" class="btn btn-success btn-flat ml-1">
                                        <i class="fas fa-print mr-1"></i>Print Laporan
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <hr>
                    <div class="Table">

                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<script>
    function viewTableLaporan() {
        let tgl = $('#tgl').val();
        if (tgl == '') {
            Swal.fire('Tanggal Belum Dipilih!');
        } else {
            $.ajax({
                type: "post",
                url: "<?= base_url('Laporan/viewLaporanHarian') ?>",
                data: {
                    tgl: tgl,
                },
                dataType: "JSON",
                success: function (response) {
                    if (response.data) {
                        $('.Table').html(response.data)
                    }
                }
            });
        }
    }

    function PrintLaporan() {
        let tgl = $('#tgl').val();
        if (tgl == "") {
            Swal.fire('Tanggal Belum Dipilih!');
        } else {
            var windowFeatures = 'toolbar=no, width=1000, height=800, left=100, top=100, scrollbars=yes, resizable=yes';
            window.open('<?= base_url('Laporan/PrintLaporanHarian') ?>/' + tgl, 'NewWin', windowFeatures);
        }
    }
</script>