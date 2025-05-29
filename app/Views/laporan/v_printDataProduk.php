<div class="col-12">
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
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($produk as $key => $value) { ?>
                <tr class="text-center <?= $value['stok'] <= 0 ? 'text-danger' : '' ?>">
                    <td><?= $no++ ?></td>
                    <td><?= $value['kode_produk'] ?></td>
                    <td><?= $value['nama_produk'] ?></td>
                    <td><?= $value['nama_kategori'] ?></td>
                    <td class="text-right">Rp. <?= number_format($value['harga_beli'], 0) ?></td>
                    <td class="text-right">Rp. <?= number_format($value['harga_jual'], 0) ?></td>
                    <td><?= $value['stok'] ?></td>
                    <td><?= $value['nama_satuan'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>