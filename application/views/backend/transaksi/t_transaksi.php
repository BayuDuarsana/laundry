<?php 
    date_default_timezone_set('Asia/Jakarta');
    $tgl_masuk = date('Y-m-d');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            if (!empty($this->session->flashdata('info'))) {?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat</strong> <?= $this->session->flashdata('info')?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }
        ?>

        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('transaksi/simpan') ?>">
                        <div class="form-group">
                            <input type="text" name="kode_transaksi" value="<?= "T".date('Ymd').$kode_transaksi;?>" class="form-control" placeholder="*Generate ototmatis" readonly>
                        </div>

                        <div class="form-group">
                            <select name="id_pelanggan" class="form-control" required>
                                <option value="" selected>- Pilih Pelanggan -</option>
                                <?php 
                                    foreach ($pelanggan as $row) :?>
                                        <option value="<?= $row->id_pelanggan?>"><?= $row->nama;?></option>
                                <?php endforeach?>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="kode_paket" id="paket" class="form-control" required>
                                <option value="" selected>- Pilih Paket -</option>
                                <?php 
                                    foreach ($paket as $row) :?>
                                        <option value="<?= $row->kode_paket?>"><?= $row->nama_paket;?></option>
                                <?php endforeach?>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga paket" readonly>
                        </div>

                        <div class="form-group">
                            <input type="number" name="bobot" id="bobot" class="form-control" placeholder="Bobot" >
                        </div>

                        <div class="form-group">
                            <input type="number" name="total" id="total" class="form-control" placeholder="Total" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" name="tgl_masuk" value="<?= $tgl_masuk;?>" class="form-control" placeholder="Tanggal masuk" readonly>
                        </div>

                        <div class="form-group">
                            <select name="bayar" class="form-control">
                                        <option value="">- Pilih Status Bayar -</option>
                                        <option value="Lunas">Lunas</option>
                                        <option value="Belum Lunas">Belum Lunas</option>
                            </select>
                        </div>

                        <div class="form-group" hidden>
                            <input type="text" name="status" value="Baru" class="form-control" placeholder="Status" readonly>
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

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </body>
</html>

<script>
    $('#paket').change(function(){
        var kode_paket = $(this).val();

        $.ajax({
            url : '<?php echo base_url('transaksi/getHargaPaket') ?>',
            data : {kode_paket : kode_paket},
            method : 'post',
            dataType : 'JSON',
            success : function(hasil){
                $('#harga').val(hasil.harga_paket);
            }
        });
    });

    $('#bobot').keyup(function(){
        var bobot = $(this).val();
        var harga = document.getElementById('harga').value;
        $('#total').val(bobot * harga);
    });

    
</script>