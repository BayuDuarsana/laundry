<div class="container">
    <div class="row my-5" data-aos="fade-up-right" data-aos-duration="1000">
        <div class="col-md-4">
            <img class="set-image" src="<?php echo base_url('assets/img/kios.jpg') ?>" alt="gambar tempat">
        </div>
        <div class="col-md-8">
            <h5 class="info" id="info-umum">Informasi Umum</h5>
            <p class="info" id="info-p">Kami menawarkan solusi yang bisa membantu anda mengerjakan pekerjaan laundry dimanapun berada, baik yang sedang berada di lokasi kantor maupun di rumah disebabkan oleh keterbatasan waktu yang anda miliki</P>
        </div>
    </div>

    <div class="row">
        <div id="idkinerja" class="kinerja" data-aos="fade-up" data-aos-duration="1500">
            <h5 id="kinerjakami">Kinerja Kami</h5>
            <div class="service">
                <div class="col-md-3 laundry-content">
                    <span>
                        <img class="kinerja-gambar" src="<?php echo base_url('assets/img/mesin-cuci.jpg') ?>" alt="kiloan">
                    </span>
                    <content>
                        <h6>Laundry Kiloan & Per Pieces</h6>
                        <p class="kiloan">Layanan laundry online yang bersih serta rapi di daerah Depok dan sekitarnya, 
                            dengan layanan standard perhitungan per-helai & kiloan pakaian serta perlengkapan anda.</p>
                    </content>
                </div>
                <div class="col-md-3 express-content" id="content-express">
                    <span>
                        <img class="kinerja-gambar" src="<?php echo base_url('assets/img/express.png') ?>" alt="kiloan">
                    </span>
                    <content>
                        <h6 id="title-express">Laundry Express</h6>
                        <p id="express">Jasa layanan laundry online dengan kuantitas kiloan untuk pengerjaan 8 jam wilayah Depok dan sekitarnya, 
                            jasa terkait proses cuci hingga seterika.</p>
                    </content>
                </div>
                <div id="content-delivery" class="col-md-3 delivery-content" id="content-delivery">
                    <span>
                        <img class="kinerja-gambar" src="<?php echo base_url('assets/img/pengiriman.jpg') ?>" alt="kiloan">
                    </span>
                    <content>
                        <h6>Delivery</h6>
                        <p id="delivery">Era digital saat ini membantu kita untuk lebih bijak memanfaatkan waktu. 
                            Laundry kami siap melayani permintaan jasa pengerjaan dimanapun anda berada.</p>
                    </content>
                </div>
            </div>
        </div>
    </div>

    <div class="row-paket" data-aos="zoom-in-left" data-aos-duration="1200">
        <div class="col-md-12 paket">
            <h5 id="judul-paket">Jenis Paket</h5>
            <p id="paragraf-paket">Jenis paket laundry yang kami tawarkan sangat beragam serta memiliki harga yang 
                sangat terjangkau dan ramah dikantong.</p>
                <table class="table table-bordered" id="table-paket">
                    <thead>
                        <tr class="th-warna">
                        <th class="jdl" scope="col">No</th>
                        <th class="jdl" scope="col">Kode Paket</th>
                        <th class="jdl" scope="col">Nama Paket</th>
                        <th class="jdl" scope="col">Harga</th>
                        <th class="jdl" scope="col">Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($paket as $pkt) {?> 
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $pkt->kode_paket;?></td>
                                    <td><?= $pkt->nama_paket;?></td>
                                    <td><?= "Rp. ".number_format($pkt->harga_paket,0,'.','.');?></td>
                                    <td><?= $pkt->satuan;?></td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container div-gallery-feed" data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="col-md-12">
                <h5 class="title-gallery-feed" id="gallery">Galeri Shot</h5>
            </div>
        </div>
        <div class="row gallery-feed" id="gallery-img">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="<?php echo base_url('assets/img/atqa2.jpg') ?>"></img>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="<?php echo base_url('assets/img/atqa3.jpg') ?>"></img>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="<?php echo base_url('assets/img/usaha.jpg') ?>"></img>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="<?php echo base_url('assets/img/foto2.jpg') ?>"></img>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="<?php echo base_url('assets/img/atqa foto.jpg') ?>"></img>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="<?php echo base_url('assets/img/foto3.jpg') ?>"></img>
            </div>
        </div>
    </div>

    <div id="kontaksatu" class="kontak btn-kontak" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
        <div class="kontak-content">
            <a href="https://api.whatsapp.com/send?phone=6281806790079&text=Hallo%20Agan%20Baik" class="btn-kontak" id="orderwa"><img src="<?php echo base_url('assets/img/orderwa.png') ?>"></a>
        </div>
    </div>
    <br>
    <br>
    <br>

    <div class="maps" data-aos="fade-up" data-aos-duration="1000" >
        <div class="location">
        <iframe id="maps-location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2108500237828!2d106.78061641431158!3d-6.366753264052598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef0c664b253b%3A0x489d43d37b0c05eb!2sAtqa%20Laundry!5e0!3m2!1sid!2sid!4v1654577515690!5m2!1sid!2sid" 
            width="1350" height="450" frameborder="0" style="border:20px solid #333" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>