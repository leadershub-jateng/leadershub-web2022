<?php
require 'function.php';
$query = "SELECT * FROM program";

$result = mysqli_query($connect, $query);

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
  <?php include 'components/preloader.php'; ?>
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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="article.php">Article</a>
            <a class="nav-link nav-active" aria-current="page" href="program.php">Program</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- END NAVBAR -->

  <!-- START 1ST PROGRAM -->

  <!-- END 1ST PROGRAM -->
  <?php
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      if ($row['id_program'] % 2 != 0) {
  ?>

        <div class="container-fluid">
          <div class="container pd-5 my-5">
            <div class="row blocks">
              <div class="box1 col-lg-7 col-md-7 my-auto slide-left">
                <h1 class="heading heading-left"><?= $row["judul"] ?></h1>
                <p class="bodytext"><?= $row["deskripsi"] ?></p>
                <a href="<?= $row["link"] ?>" target="_blank">
                  <button class="btn btn-form-custom" type="button"><?= $row["cta"] ?></button>
                </a>
              </div>
              <div class="box2 col-lg-5 col-md-5 text-center slide-right">
                <img src="./img/article/<?= $row["gambar"] ?>" class="img-fluid img-mobile" width="400px">
              </div>
            </div>
          </div>
        </div>
      <?php
      } else {
      ?>
        <div class="container-fluid">
          <div class="container pd-5 my-5" style="background-color: #C20C01; padding: 50px">
            <div class="row blocks">
              <div class="col-lg-5 col-md-5 text-center slide-right">
                <img src="./img/article/<?= $row["gambar"] ?>" class="img-fluid img-mobile" width="400px">
              </div>
              <div class="col-lg-7 col-md-7 my-auto slide-left">
                <h1 class="heading heading-left" style="color: #ffffff;"><?= $row["judul"] ?></h1>
                <p class="bodytext" style="color: #ffffff;"><?= $row["deskripsi"] ?></p>
                <a href="<?= $row["link"] ?>" target="_blank">
                  <button class="btn btn-form-custom" type="button" style="background-color: #ffffff; color:#C20C01"><?= $row["cta"] ?></button>
                </a>
              </div>

            </div>
          </div>
        </div>
  <?php
      }
    }
  }
  ?>
</body>

<!-- FOOTER -->
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
          <img class="sosmed" src="img/gmail-logo.png" alt="lh-gmail" width="25px">
        </a>
        <a href="https://www.linkedin.com/company/leadershubjawatengah/" target="_blank">
          <img class="sosmed" src="img/linkedin.png" alt="lh-linkedin" width="25px">
        </a>
        <a href="https://www.instagram.com/leadershubjateng/" target="_blank">
          <img class="sosmed" src="img/instagram.png" alt="lh-instagram" width="25px">
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
<script>
  AOS.init();
</script>
<!-- End Animation On Scroll (AOS) Library -->

</body>

</html>