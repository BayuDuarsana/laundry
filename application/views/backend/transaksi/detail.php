<style>
    td{
        font-size: 12px;
    }

    .judul{
        width:300;
    }

    h3{
        font-size: 16px;
    }

    .ketpelanggan{
        width:80;
    }

    .transaksiA{
        width:150;
    }

    .kode{
        width:80;
    }

    .table{
        border: 1px solid black;
        border-collapse: collapse;
    }

    .table1{
        font-size: 11px;
    }
</style>
<table>
    <tr>
        <td class="judul"><h3>ATQA Laundry</h3></td>
        <td><h3>Invoice</h3></td>
    </tr>

    <tr>
        <td>Alamat : Jl.Pendowo No.61 Limo, Depok</td>
    </tr>

    <tr>
        <td>Telp. : 081806790079</td>
    </tr>
</table>

<hr><br>

<table>
    <tr>
        <td class="ketpelanggan">Pelanggan</td>
        <td class="transaksiA"><?= $transaksi['nama']?></td>

        <td class="kode">Kode Transaksi</td>
        <td><?= $transaksi['kode_transaksi']?></td>
    </tr>

    <tr>
        <td></td>
        <td class="transaksiA"><?= $transaksi['alamat']?></td>

        <td class="kode">Tgl Masuk</td>
        <td><?= $transaksi['tgl_masuk']?></td>
    </tr>

    <tr>
        <td></td>
        <td class="transaksiA"><?= $transaksi['no_telp']?></td>

        <?php 
            if ($transaksi['tgl_ambil'] != 0) {?>
                <td class="kode">Tgl Ambil</td>
                <td><?= $transaksi['tgl_ambil']?></td>
            <?php } else {?>
                <td class="kode">Tgl Ambil</td>
                <td>-</td>
            <?php }
        ?>  
    </tr>
</table>

<br><br>

<table width="350" class="table">
    <tr>
        <th class="table">Nama Paket</th>
        <th class="table">Harga Satuan</th>
        <th class="table">Bobot</th>
        <th class="table">Total</th>
    </tr>

    <tr>
        <th class="table1"><?= $transaksi['nama_paket'];?></th>
        <th class="table"><?= $transaksi['harga_paket'];?></th>
        <th class="table"><?= $transaksi['bobot'];?></th>
        <th class="table"><?= $transaksi['total'];?></th>
    </tr>
</table>