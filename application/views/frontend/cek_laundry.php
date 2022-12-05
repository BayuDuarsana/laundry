<form method="post" action="<?php echo base_url('cek_laundry') ?>">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10">
                <input type="text" name="kode_transaksi" class="form-control" id="cek-order" placeholder="Masukkan kode transaksi">
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-success btn-cek" id="cek-order">Cek Transaksi</button>
            </div>
        </div>
    </div>
</form>

<div class="container" id="table-cek" >
    <table class="table table-bordered table-striped mb-5" >
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Tanggal Masuk</th>
                <th>Jenis Paket</th>
                <th>Jumlah Item</th>
                <th>Total harga</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                if (!empty($data)) {
                    foreach ($data as $row) {?>
                        <tr>
                            <td><?= $row->nama;?></td>
                            <td><?= $row->tgl_masuk;?></td>
                            <td><?= $row->nama_paket;?></td>
                            <td><?= $row->bobot;?></td>
                            <td><?= $row->total;?></td>
                            <td><?= $row->status;?></td>
                        </tr>
                    <?php }
                }else{?>
                    <tr>
                        <td colspan="6" class="bg-danger text-warning">Tidak ada data</td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>