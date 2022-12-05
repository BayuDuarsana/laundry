<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>ATQA Laundry</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
      <a class="navbar-brand" href="#">
        <img class="logo" src="<?php echo base_url('assets/img/atqa.png') ?>" height="60" >
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('home') ?>">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('cek_laundry') ?>">Cek Transaksi</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Akhir navbar -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 slider" src="<?php echo base_url('assets/img/slider1.jpg') ?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block bg-caption">
            <h5>ATQA LAUNDRY</h5>
            <p>ATQA laundry berada di Jalan Pendowo Raya limo Depok Jawa barat kami buka setiap hari mulai pukul 8 pagi sampai pukul 5 sore. Kami melayani laundry kiloan dan satuan, kami juga melayani laundry jas, karpet, dll. Silahkan datang ke tempat, kami akan melayani anda dengan senang hati.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 slider" src="<?php echo base_url('assets/img/slider2.jpg') ?>" alt="Second slide">
          <div class="carousel-caption d-none d-md-block bg-caption">
            <h5>Jam Operasional</h5>
            <p>Senin - Minggu<br>
            Pukul 08.00 - 17.00</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 slider" src="<?php echo base_url('assets/img/slider3.jpg') ?>" alt="Third slide">
          <div class="carousel-caption d-none d-md-block bg-caption">
            <h5>Motto</h5>
            <p class="motto">"Pelayanan Cepat & Terpercaya"</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev btn-slider" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next btn-slider" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
  </body>
</html>