<?php
  require 'function.php';
  $artikel = query("SELECT * FROM artikel ORDER BY tglUpload DESC LIMIT 3");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Start Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- End Meta Data -->

    <!-- Start Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- End Bootstrap -->

    <!-- Start API Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- End API Google -->


    <!-- Start Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
    <!-- End Style -->

    <title>Leadershub Jawa Tengah</title>
    <link rel="icon" href="img/icon.png">

    <!-- Start Animation On Scroll Style -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- End Animation On Scroll Style -->

  </head>
  <body>
   <!-- START PRE-LOADER -->
   <?php include 'components/preloader.php';?>
    <!-- END PRE-LOADER -->

    <!-- START NAVBAR -->
    <header>
      <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid container">
          <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" alt="" width="auto" height="24" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto nav-custom">
              <a class="nav-link nav-active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="about.php">About</a>
              <a class="nav-link" href="article.php">Article</a>
              <a class="nav-link" href="program.php">Program</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- END NAVBAR -->

    <!-- START BODY -->
    
    <!-- Start Jumbotron -->
    <div class="card text-white border-0 rounded-0 jumbotron-custom-overlay ">
      <img src="assets/img/hero.jpeg" class="jumbotron-img-custom rounded-0" alt="...">
      <div class="card-img-overlay container-text">
        <div class="container col-lg-10  mx-auto text-center">
          <p class="hero-text slide-top-1 " data-aos="fade-up">"Platform inisiasi dan kolaborasi antara <span class="hero-text-bold-pid">Pemimpin.id</span> dan <span class="hero-text-bold-impala">Impala Network</span>. Kami mengibaratkan sebagai rumah bagi para komunitas dan organisasi kemahasiswaan yang ada di Jawa Tengah untuk bisa berjenjang, belajar, dan bertumbuh"</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="about.html">
            <button type="button" class="btn button slide-top-2">Tentang Kami</button>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Start 2nd Section-->
    <div class="container">
      <div class="row my-5">
        <div data-aos="fade-right" data-aos-delay="500"  data-aos-duration="1000" class="col-lg-6 text-center ">
          <img src="img/hero2nd.png" alt="Collaborative" class="img-fluid img-mobile">
        </div>
        <div class="col-lg-6 my-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
          <div class="my-3">
            <h2 class="sub-heading sub-heading-left">We also welcome</h2>
            <h1 class="heading heading-left">Collaborative Network</h1>
          </div>
          <p class="bodytext">Merancang program dengan impact lebih besar dan cakupan se-Jawa Tengah. Dengan berkolaborasi, value yang dibawa akan tersebar lebih luas. Jateng Leaders Hub akan menjadi perantara dan juga matchmaker dengan komunitas atau organisasi yang mempunyai tujuan sama.</p>
        </div>
      </div>
    </div>
    <!-- End 2nd Section-->

    <!-- Start 3rd Section -->
    <div class="container">
      <div class="text-center my-5" data-aos="fade-up"
     data-aos-duration="1000" data-aos-delay="500">
        <h2 class="sub-heading ">Read</h2>
        <h1 class="heading">Our Latest Article</h1>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="800">
        <?php foreach($artikel as $row) : ?>
          <div class="col">
            <a href="article-page.php?id=<?= $row["id_artikel"]?>" style="text-decoration: none;">
            <div class="card card-custom">
              <img src="img/article/<?= $row["gambar"]?>" class="card-img-top card-img-custom">
              <div class="card-body">
                <h5 class="card-title-custom"><?= $row["judul"]?></h5>
                <p class="card-author"><?= $row["tglUpload"]?> | <?= $row["penulis"]?></p>
                <h6 class="card-more">Baca lebih lanjut</h6>
              </div>
            </div>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <div class="container p-5 my-5"></div>
    <!-- End 3rd Section -->
    <!-- END BODY -->

    <!-- Footer -->
    <footer class="pt-5 pb-4 bg-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12 footer-content-custom footer-position">
            <img class="logo-footer" src="img/logo-putih.png" alt="lhjateng" width="200px">
          </div>
          <div class="col-lg-7 col-md-5 col-sm-12 footer-content-custom footer-position">
            <div class="col-lg-10">
              <p>
                Rumah bagi para komunitas dan organisasi kemahasiswaan yang ada di Jawa tengah untuk bisa berjejaring, belajar, dan bertumbuh
              </p>
            </div>
          </div> 
          <div class="col-lg-2 col-md-3 col-sm-12 footer-content-custom footer-position">
            <h6>Contact us:</h6>
            <a href="mailto:...">
              <img class="sosmed" src="img/gmail-logo.png" alt="lh-gmail" width="25px" > 
            </a>
            <a href="https://www.linkedin.com/company/leadershubjawatengah/" target="_blank">
              <img class="sosmed" src="img/linkedin.png" alt="lh-linkedin" width="25px">
            </a>
            <a href="https://www.instagram.com/leadershubjateng/" target="_blank">
              <img class="sosmed" src="img/instagram.png" alt="lh-instagram" width="25px" >
            </a>
          </div>         
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Start Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End Script Bootstrap -->

    <!-- Start Animation On Scroll (AOS) Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <!-- End Animation On Scroll (AOS) Library -->

  </body>
</html>