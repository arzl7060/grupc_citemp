<div class="col-12">
    <b>Tanggal : </b> <?= $tgl ?>
    <table class="table table-bordered table-striped">
        <tr class="text-center bg-info">
            <th>No.</th>
            <th>Barcode/Kode</th>
            <th>Nama Produk</th>
            <th>Harga Jual</th>
            <th>QTY</th>
            <th>Total</th>
        </tr>
        <?php $no = 1;
        foreach ($dataharian as $key => $value) {
            $grandtotal[] = $value['total_harga'];
            ?>

            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td class="text-center"><?= $value['kode_produk'] ?></td>
                <td><?= $value['nama_produk'] ?></td>
                <td class="text-right">Rp. <?= number_format($value['harga'], 0) ?></td>
                <td class="text-center"><?= $value['qty'] ?></td>
                <td class="text-right">Rp. <?= number_format($value['total_harga'], ) ?></td>
                <td></td>
            </tr>
        <?php } ?>
        <tr class="bg-info">
            <td class="text-center" colspan="5">
                <h5>Grand Total</h5>
            </td>
            <td>
                Rp. <?= $dataharian == null ? '' : number_format(array_sum($grandtotal), 0) ?>
            </td>
        </tr>
    </table>
</div>