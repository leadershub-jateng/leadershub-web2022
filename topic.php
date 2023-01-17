<?php
    require 'function.php';
    $category = $_GET["category"];
    $topic = query("SELECT * FROM tag WHERE id_tag = $category");
    $jumlahDataTiapHalaman = 6;
    $jumlahData = count(query("SELECT * FROM artikel WHERE id_tag = $category"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataTiapHalaman);
    if(isset($_GET["halaman"])){
      $halamanAktif = $_GET["halaman"];
    }else{
      $halamanAktif = 1;
    }
    $awalData = ($jumlahDataTiapHalaman * $halamanAktif) - 5;
    $article = query("SELECT * FROM artikel WHERE id_tag = $category ORDER BY tglUpload DESC LIMIT $awalData, $jumlahDataTiapHalaman");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link nav-active" aria-current="page" href="article.php">Article</a>
            <a class="nav-link" href="program.php">Program</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- Start 2nd Section -->
    <div class="container px-4 px-lg-5 py-5">
      <h2 class="text-center mt-0 heading my-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">Topic</h2>
      <div class="row gx-4 gx-lg-5">
        <?php if($category == 1){?>
          <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
            <div class="mt-2" style="color: #C20C01;">
              <div class="mb-2"><i class="bi-1-circle fs-1"></i></div>
              <h3 class="h4 mb-2">Self Improvement</h3>
              <p class="text-muted mb-0">Pengembangan kualitas diri agar menjadi orang yang lebih baik</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
            <a href="topic.php?category=2" style="text-decoration: none;color:black;">
              <div class="mt-2">
                <div class="mb-2"><i class="bi bi-2-circle fs-1"></i></div>
                <h3 class="h4 mb-2">Leaderhip</h3>
                <p class="text-muted mb-0">Memotivasi sesama demi terwujudnya cita</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
            <a href="topic.php?category=3" style="text-decoration: none;color:black;">
              <div class="mt-2">
                <div class="mb-2"><i class="bi-3-circle fs-1"></i></div>
                <h3 class="h4 mb-2">Education</h3>
                <p class="text-muted mb-0">Dengan pendidikan kamu dapat mengubah dunia</p>
              </div>
            </a>
          </div>
        <?php }else if($category == 2){?>
            <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
            <a href="topic.php?category=1" style="text-decoration: none; color:black;">
              <div class="mt-2">
                <div class="mb-2"><i class="bi-1-circle fs-1"></i></div>
                <h3 class="h4 mb-2">Self Improvement</h3>
                <p class="text-muted mb-0">Pengembangan kualitas diri agar menjadi orang yang lebih baik</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
              <div class="mt-2" style="color: #C20C01;">
                <div class="mb-2"><i class="bi bi-2-circle fs-1"></i></div>
                <h3 class="h4 mb-2">Leaderhip</h3>
                <p class="text-muted mb-0">Memotivasi sesama demi terwujudnya cita</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
            <a href="topic.php?category=3" style="text-decoration: none;color:black;">
              <div class="mt-2">
                <div class="mb-2"><i class="bi-3-circle fs-1"></i></div>
                <h3 class="h4 mb-2">Education</h3>
                <p class="text-muted mb-0">Dengan pendidikan kamu dapat mengubah dunia</p>
              </div>
            </a>
          </div>
        <?php }else if($category == 3){?>
            <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
            <a href="topic.php?category=1" style="text-decoration: none; color:black;">
              <div class="mt-2">
                <div class="mb-2"><i class="bi-1-circle fs-1"></i></div>
                <h3 class="h4 mb-2">Self Improvement</h3>
                <p class="text-muted mb-0">Pengembangan kualitas diri agar menjadi orang yang lebih baik</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
            <a href="topic.php?category=2" style="text-decoration: none;color:black;">
              <div class="mt-2">
                <div class="mb-2"><i class="bi bi-2-circle fs-1"></i></div>
                <h3 class="h4 mb-2">Leaderhip</h3>
                <p class="text-muted mb-0">Memotivasi sesama demi terwujudnya cita</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000">
            <div class="mt-2"  style="color: #C20C01;">
              <div class="mb-2"><i class="bi-3-circle fs-1"></i></div>
              <h3 class="h4 mb-2">Education</h3>
              <p class="text-muted mb-0">Dengan pendidikan kamu dapat mengubah dunia</p>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
    <!-- End 2nd Section -->

    <!-- Start 3rd Section -->
    <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
        <?php foreach($article as $row) : ?>
          <div class="col" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
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
    <!-- End 3rd Section -->

    <!-- Start 4th Section -->
    <nav aria-label="Page navigation example" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="00">
      <ul class="pagination justify-content-center">
        <?php if($halamanAktif == 1){ ?>
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
        <?php }else{ ?> 
          <li class="page-item">
            <a class="page-link" href="?category=<?= $category ?>&halaman=<?= $halamanAktif-1; ?>">Previous</a>
          </li>
        <?php }; ?> 
        <?php for($i = 1; $i <= $jumlahHalaman; $i++){?>
          <li class="page-item"><a class="page-link" href="?category=<?= $category ?>&halaman=<?= $i; ?>"><?php echo $i ?></a></li>
        <?php }; ?>
        <?php if($halamanAktif == $jumlahHalaman){ ?>
          <li class="page-item disabled">
            <a class="page-link">Next</a>
          </li>
        <?php }else{ ?> 
          <li class="page-item">
            <a class="page-link" href="?category=<?= $category ?>&halaman=<?= $halamanAktif+1; ?>">Next</a>
          </li>
        <?php }; ?>

      </ul>
    </nav>
    <!-- End 4th Section -->

    <!-- START FOOTER -->
    <footer class="pt-5 pb-4 bg-footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12 footer-content-custom footer-position">
            <img class="logo-footer" src="img/logo-putih.png" alt="lhjateng" width="200px">
          </div >
          <div class="col-lg-7 col-md-5 col-sm-12 footer-content-custom footer-position">
            <div class="col-lg-10">
              <p>Rumah bagi para komunitas dan organisasi kemahasiswaan yang ada di Jawa tengah untuk bisa berjejaring, belajar, dan bertumbuh
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
    <!-- END FOOTER-->
  
    <!-- Start Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End Script Bootstrap -->

    <!-- Start Animation On Scroll (AOS) Library -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
    <!-- End Animation On Scroll (AOS) Library -->

  </body>
</html>