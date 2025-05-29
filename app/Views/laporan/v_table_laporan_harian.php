<div class="row">
  <div class="col-12 text-center">
    <img src="<?= base_url('AdminLTE') ?>/dist/img/logoc-food.png" alt="C-Food Logo" class="brand-image elevation-3"
      style="opacity: 1; width:65px; height: 65px; border-radius: 50%; margin-right: 10px;">
    <span class="brand-text font-weight-bold text-primary" style="font-size: 30px;">
      C-Food 14 <span style="color: #ff6600;">C-ashier</span>
    </span>
    <br>
    <br>
    <address>
      <strong>Jalan Cabe Raya, Pondok Cabe, 15437, </strong><br>
      <strong>Pamulang, Tangerang Selatan</strong><br>
      <strong>Banten - Indonesia</strong>
    </address>
  </div>
  <div class="col-12 text-center">
    <hr>
    <b>
      <h5><?= $title ?></h5>
    </b> </hr>
  </div>
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
          <td class="text-right">Rp. <?= number_format($value['harga_jual'], 0) ?></td>
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
</div>