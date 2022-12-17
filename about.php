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
    <style>
   
    </style>

  </head>
  <body>
      <!-- START PRE-LOADER -->
   <?php include 'components/preloader.php';?>
    <!-- END PRE-LOADER -->
    
    <!-- START NAVBAR -->
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
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link nav-active" aria-current="page" href="about.php">About</a>
            <a class="nav-link" href="article.php">Article</a>
            <a class="nav-link" href="program.php">Program</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR-->

    <!-- START BODY -->
    <!-- Section 1 - About Us -->
    <section id="about">
      <div class="container">
        <div class="row my-5">
          <div class="col-lg-6 col-md-6 img-responsive-center my-auto slide-right">
            <img src="img/logo.png" alt="lhjateng-logo" class="img-fluid img-mobile" width="75%">
          </div>
          <div class="col-lg-6 col-md-6 my-auto slide-left">
            <div class="my-3">
              <h1 class="heading-left-about">About Us</h1>
            </div>
            <p class="bodytext">Merupakan platform inisiasi dan kolaborasi antara Pemimpin.id dan Impala Network. Kami mengibaratkan sebagai rumah bagi para komunitas dan organisasi kemahasiswaan yang ada di Jawa tengah untuk bisa berjejaring, belajar, dan bertumbuh</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section 1 -->

    <!-- Section 2 - Visi Misi -->
    <section id="visimisi">
      <div class="vsms-container">
        <img src="img/asset1-abt.png" alt="" class="vsms-img-featured">
        <div class="container text-box">
            <div class="text-about" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="3000">
                  <h4>Visi Misi</h4>
                  <p>Dengan berkolaborasi, saling melengkapi kekurangan dan menajamkan keunggulan masing-masing, kami berharap dapat menjadi katalis dalam membentuk para pemuda di Jawa Tengah dalam menanggulangi unemployement, leadership building, serta pengembangan talent empowerement.</p>   
            </div>
          
        </div>
      </div>
    </section>
    <!-- End Section 2 -->

    <!-- Section 3 - Core Values -->
    <div class="container-fluid container text-center pd-5 my-5">
      <div class="about-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
      <h2 class="sub-heading">Core</h2>
        <h1 class="heading">Values</h1>
      </div>
      <hr>
      <div class="row my-5">
        <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
          <img src="img/image 9.png" alt="networking" id="img-values">
          <p class="p-val">Berjejaring</p>
        </div>
        <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900">
          <img src="img/image 10.png" alt="learning" id="img-values">
          <p class="p-val">Belajar</p>
        </div>
        <div class="col-sm-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1100">
          <img src="img/image 12.png" alt="grow" id="img-values">
          <p class="p-val">Bertumbuh</p>
        </div>
      </div>
    </div>
    <!-- End Section 3 -->

    <!-- Section 4 - Program Creations -->
    <div class="container-fluid">
      <div class="container pd-5 my-5">
        <div class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <h2 class="sub-heading ">Program</h2>
          <h1 class="heading">Creations</h1>
        </div>
        <div class="row">
          <div class="col-lg-7 my-auto" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="1000">
            <p class="bodytext">Berikut beberapa poin dalam Sustainable Development Goals yang berusaha dicapai oleh 
              Jateng Leaders Hub meliputi kualitas pendidikan, penguatan talent empowerment, membantu mengentaskan tingkat pengangguran di Jawa Tengah, memperkuat komunitas di Jawa Tengah, dan berkolaborasi mencapai tujuan.</p>
          </div>
          <div class="col-lg-5 text-center" data-aos="fade-left" data-aos-delay="1200" data-aos-duration="1000">
            <img src="img/hero2nd.png" alt="program creations" class="img-fluid img-mobile" width="400px">
          </div>
        </div>
      </div>
    </div>
    <!-- End Section 4 -->

    <!-- Section 5 - Values-->
    <div class="container-fluid pd-5 my-5" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="1000">
      <p id="p-desc-values">
        “Kami percaya kemampuan anak muda dengan balutan tiga nilai Leader Hub Jateng menjadi rumah bagi anak muda dalam berjejaring, belajar, dan bertumbuh di Jawa Tengah”
      </p>
    </div>
    <!-- End Section 5 -->
    
    <!-- END BODY -->

    <!-- FOOTER -->
    <footer class="pt-5 pb-4 bg-footer">
      <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 footer-content-custom footer-position">
                <img class="logo-footer" src="img/logo-putih.png" alt="lhjateng" width="200px">
            </div >
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
  <!-- END FOOTER -->

  <!-- Start Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- End Script Bootstrap -->

  <!-- Start Animation On Scroll (AOS) Library -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <!-- End Animation On Scroll (AOS) Library -->
  
  </body>
</html>