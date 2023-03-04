<?php
require 'function.php';
$id = $_GET["id"];
$data_artikel = query("SELECT * FROM artikel WHERE id_artikel = $id")[0];
$data_komentar = "SELECT * FROM tbl_komentar WHERE artikel_id = $id";

$result_komentar = mysqli_query($connect, $data_komentar);

session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if (isset($_POST['submit'])) {
  $komentar = $_POST['komentar'];
  $nama_pengirim = $_POST['nama_pengirim'];
  $artikel_id = $_POST['artikel_id'];
  // include database connection file
  include_once("config.php");

  // Insert user data into table
  $result = mysqli_query($conn, "INSERT INTO tbl_komentar(komentar_id,komentar,date,nama_pengirim,artikel_id) VALUES(NULL,'$komentar',CURRENT_TIMESTAMP,'$nama_pengirim',$artikel_id)");

  echo "
      <script>
          document.location.href = 'article.php';
        </script>
      ";
}

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

  <!-- Start API Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&display=swap" rel="stylesheet">
  <!-- End API Google font -->

  <!-- Csrf Token -->
  <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

  <!-- Start Style -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- End Style -->

  <title>Leadershub Jawa Tengah</title>
  <link rel="icon" href="img/icon.png">

</head>

<style>
  .card-comment {
    background-color: #fff;
    border: 1px solid lightgrey;
    width: 100%;
    padding: 20px;
  }

  .sender-text {
    font-weight: 600px;
    margin-top: -10px;
  }

  .date {
    font-size: 15px;
  }
</style>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      //Mengirimkan Token Keamanan
      $.ajaxSetup({
        headers: {
          'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#form_komen').on('submit', function(event) {
        event.preventDefault();
        let nama_pengirim = $('#nama_pengirim').val();
        let komen = $('#komen').val();
        swal.fire({
          type: 'success',
          title: 'Sukses...',
          text: 'Komentar article sudah terkirim!'
        });

        if (nama_pengirim == '') {
          swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Nama pengirim harus diisi!',
            footer: '<a href="#">Why do I have this issue?</a>'
          });
        } else if (komen == '') {
          swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Komentar harus diisi!',
            footer: '<a href="#">Why do I have this issue?</a>'
          });
        } else {
          var form_data = $(this).serialize();
          $.ajax({
            url: "tambah_komentar.php",
            method: "POST",
            data: form_data,
            success: function(data) {
              $('#form_komen')[0].reset();
              $('#komentar_id').val('0');
              load_comment();
            },
            error: function(data) {
              console.log(data.responseText)
            }
          })
        }
      });

      load_comment();

      function load_comment() {
        $.ajax({
          url: "ambil_komentar.php",
          method: "POST",
          success: function(data) {
            $('#display_comment').html(data);
          },
          error: function(data) {
            console.log(data.responseText)
          }
        })
      }

      $(document).on('click', '.reply', function() {
        var komentar_id = $(this).attr("id");
        $('#komentar_id').val(komentar_id);
        $('#nama_pengirim').focus();
      });
    });
  </script>
  <!-- START NAVBAR -->
  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-fluid container">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" width="auto" height="24" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto nav-custom">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="about.html">About</a>
          <a class="nav-link nav-active" href="article.php">Article</a>
          <a class="nav-link" href="#">Program</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- END NAVBAR-->

  <!-- START BODY -->
  <div class="container">
    <div class="head-title pd-5 my-5">
      <h1><?= $data_artikel["judul"] ?></h1>
    </div>
    <div class="cover-img">
      <img src="img/article/<?= $data_artikel["gambar"] ?>" alt="coverimage" width="100%">
    </div>
    <div class="content my-3 mb-5">
      <div class="author my-4">
        <h3><?= $data_artikel["penulis"] ?></h3>
        <h6><?= $data_artikel["tglUpload"] ?> | <?= $data_artikel["deskripsi"] ?></h6>
      </div>
      <p><?= $data_artikel["isi"] ?></p>
      <div class="container mb-3">
        <h2 align="center" style="margin: 60px 10px 10px 10px;">Komentar Article</h2>
        <hr>
        <form action="" method="POST">
          <div class="form-group">
            <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
          </div>
          <div class="form-group">
            <textarea name="komentar" id="komentar" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
          </div>
          <div class="form-group">
            <input type="hidden" name="artikel_id" id="artikel_id" value="<?php echo $data_artikel["id_artikel"] ?>" />
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
          </div>
        </form>
        <hr>
        <h4 class="mb-3">Komentar :</h4>
        <?php while ($row = mysqli_fetch_array($result_komentar)) { ?>
          <div class="card-comment">
            <div class="sender">
              <h5 class="sender-textsss"><?= $row["nama_pengirim"] ?></h5>
            </div>
            <div class="date">
              <small><?= $row["date"] ?></small>
            </div>
            <div class="spacer" style="margin-top:10px"></div>
            <div class="comment">
              <p><?= $row["komentar"] ?></p>
            </div>
            <div class="spacer" style="margin-top:10px"></div>
          </div>
          <div class="spacer" style="margin-top:30px"></div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- END BODY -->


  <!-- START FOOTER -->
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
  <!-- END FOOTER -->

  <!-- Start Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- End Script Bootstrap -->

</body>

</html>