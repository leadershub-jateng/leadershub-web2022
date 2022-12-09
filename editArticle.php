<?php
  require 'function.php';
  $id = $_GET["id"];
  $data_artikel = query("SELECT * FROM artikel WHERE id_artikel = $id")[0];
  if(isset($_POST["submit"])){
    if(edit($_POST) > 0){
      echo "
        <script>
          alert('data berhasil diubah!');
          document.location.href = 'dashboardAdmin.php';
        </script>
      ";
    }else{
      echo "
        <script>
          alert('data gagal diubah!');
          document.location.href = 'dashboardAdmin.php';
        </script>
      ";
    }   
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

    <!-- Start API Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- End API Google -->


    <!-- Start Style -->
    <link rel="stylesheet" href="style.css">
    <!-- End Style -->

    <title>Leadershub Jawa Tengah</title>
    <link rel="icon" href="img/icon.png">
  </head>
  <body>
    <!-- START NAVBAR -->
    <header>
      <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="" width="auto" height="24" class="d-inline-block align-text-top">
          </a>
          <a href="login.html">
            <button type="button" class="btn btn-red">Logout</button>
          </a>
        </div>
      </nav>
    </header>
    <!-- END NAVBAR -->

    <!-- START MAIN -->
    <main>
      <div class="container-fluid py-5">
        <div class="container">
          <h1 class="heading">Edit Artikel</h1>
          <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data_artikel["id_artikel"] ?>">
            <input type="hidden" name="gambarLama" value="<?= $data_artikel["gambar"] ?>">
            <div class="mb-3">
              <label for="title" class="form-label">Judul Artikel</label>
              <input type="text" class="form-control" id="title" name="judul" value="<?= $data_artikel["judul"] ?>" required>
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Nama Penulis</label>
              <input type="text" class="form-control" id="author" name="penulis" value="<?= $data_artikel["penulis"] ?>" required>
            </div>
            <div class="mb-3">
              <label for="article" class="form-label">Isi Artikel</label>
              <input class="form-control" id="article" name="isi" rows="10"  value="<?= $data_artikel["isi"] ?>"  required></input>
            </div>
            <div class="mb-3">
              <label for="tag" class="form-label">Tag</label>
              <select class="form-select" aria-label="tag article" id="tag" name="id_tag" required>
                <option value="">-- Pilih Tag --</option>
                <option value="1">Self Improvement</option>
                <option value="2">Leadership</option>
                <option value="3">Education</option>
              </select>
            </div>
            <div class="mb-5">
              <label for="formFile" class="form-label">Masukkan Gambar</label>
              <div class="col-lg-5 py-3">
                <img src="img/article/<?= $data_artikel["gambar"] ?>" width="500px">
              </div>
              <input class="form-control" type="file" id="formFile" name="gambar">
            </div>
            <div class="d-grid">
              <button class="btn btn-red" type="submit" name="submit">Update</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <!-- END MAIN -->

    <!-- Start Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End Script Bootstrap -->

  </body>
</html>
