<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('paket/simpan') ?>">
                        <div class="form-group">
                            <input type="text" name="kode_paket"  value="<?= $kode_paket;?>" class="form-control" placeholder="*Generate ototmatis" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" name="nama_paket" class="form-control" placeholder="Masukkan nama paket" required>
                        </div>

                        <div class="form-group">
                            <input type="number" name="harga_paket" class="form-control" placeholder="Masukkan harga paket" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="satuan" class="form-control" placeholder="Masukkan jumlah satuan" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</buttton>
                        </div>

                        <div class="form-group">
                            <a href="<?php echo base_url('pelanggan') ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>