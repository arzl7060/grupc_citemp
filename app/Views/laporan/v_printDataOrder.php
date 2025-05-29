<div class="col-12">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="37px">No</th>
                <th>No. Invoice</th>
                <th>Tanggal Transaksi</th>
                <th>Total Transaksi</th>
                <th>Kembalian</th>
                <th>Kasir</th>
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
                    <td><?= $value['kembalian'] ?></td>
                    <td><?= $value['username'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>