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
                    <form method="post" action="<?php echo base_url('pelanggan/update') ?>">
                        <div class="form-group">
                            <input type="text" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'];?>" class="form-control" placeholder="*Generate ototmatis" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" name="nama" value="<?= $pelanggan['nama'];?>" class="form-control" placeholder="Masukkan nama pelanggan" required>
                        </div>

                        <div class="form-group">
                            <textarea name="alamat" cols="30" rows="5"  class="form-control" placeholder="Masukkan alamat pelanggan" required><?= $pelanggan['alamat'];?></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="no_telp" value="<?= $pelanggan['no_telp'];?>" class="form-control" placeholder="Masukkan no telepon pelanggan" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</buttton>
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