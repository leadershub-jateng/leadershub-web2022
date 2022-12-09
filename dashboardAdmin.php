<?php
  require 'function.php';
  $artikelDB = query("SELECT artikel.id_artikel, artikel.gambar, artikel.judul, tag.deskripsi, artikel.penulis FROM artikel JOIN tag ON artikel.id_tag = tag.id_tag ORDER BY artikel.id_artikel DESC");
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

    <title>Dashboard | Leadershub Jawa Tengah</title>
    <link rel="icon" href="img/icon.png">
    <script src="ovc/counter.js"></script>
    
  </head>
    <body>
    <!-- START NAVBAR -->
    <header>
      <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="" width="auto" height="24" class="d-inline-block align-text-top">
          </a>
          <a href=""><button type="button" class="btn btn-red">Logout</button></a>
        </div>
      </nav>
    </header>
    <!-- END NAVBAR -->

    <!-- START MAIN -->
    <main>
      <div class="container-fluid">
        <div class="container mt-5">
          <a href="addArticle.php">
            <button type="button" class="btn btn-red">Tambah Artikel</button>
          </a>
          <div class="card mt-5">
            <div class="card-header">
                Data Artikel
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($artikelDB as $row) : ?>
                      <tr>
                        <td scope="row"><?= $row["id_artikel"]?></td>
                        <td><img src="img/article/<?= $row["gambar"]?>" class="img-dashboard"></td>
                        <td><?= $row["judul"]?></td>
                        <td><?= $row["deskripsi"]?></td>
                        <td><?= $row["penulis"]?></td>
                        <td>
                          <a href="editArticle.php?id=<?= $row["id_artikel"]?>">
                            <button type="button" class="btn btn-warning">Edit</button>
                          </a>
                          <a href="deleteArticle.php?id=<?= $row["id_artikel"]?>" onclick="return confirm('Tekan OK untuk hapus');">
                            <button type="button" class="btn btn-danger">Delete</button>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- END MAIN -->
    

    <!-- Start Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- End Script Bootstrap -->

  </body>
</html>