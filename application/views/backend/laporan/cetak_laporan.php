<style>
    th{
        font-size: 14px;
        font-family: sans-serif;
        color:white;
    }

    .judul_kolom{
        background: #5d5f61;
    }

    .text{
        text-align: center;
    }
</style>
<body>
    <table width="530" >
        <tr>
            <td style="text-align:center; font-size: 24px; font-weight: bold; font-family: sans-serif;">Laporan Transaksi</td>
        </tr>
    </table>

    <table width="530" >
        <tr>
            <td style="text-align:center; font-size: 16px; font-family: sans-serif;">Dari tanggal <?= mediumdate_indo($this->session->userdata('tanggal_mulai'));?> sampai tanggal <?= mediumdate_indo($this->session->userdata('tanggal_akhir'));?></td>
        </tr>
    </table>
    <br>
    <br>
    

    <table width="530" border="1">
        <tr class="judul_kolom">
            <th>Tanggal Masuk</th>
            <th>Kode Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Paket</th>
            <th>Bobot</th>
            <th>Grand Total</th>
            <th>Status</th>
        </tr>

        <?php 
            foreach ($laporan as $row) {?>
                <tr>
                    <td class="text"><?= $row->tgl_masuk;?></td>
                    <td class="text"><?= $row->kode_transaksi;?></td>
                    <td class="text"><?= $row->nama;?></td>
                    <td class="text"><?= $row->nama_paket;?></td>
                    <td class="text"><?= $row->bobot;?></td>
                    <td class="text"><?= "Rp. ". number_format($row->total,0,'.','.'). ",00";?></td>
                    <td class="text"><?= $row->status;?></td>
                </tr>
            <?php }
        ?>
    </table>
</body>