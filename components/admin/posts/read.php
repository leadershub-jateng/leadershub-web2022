<!-- Content wrapper -->
<div class="content-wrapper">
            <div class="container">
                  <div class="card" style="margin-top:20px; margin-bottom:50px">
          <div class="card-body p-5">
          <h4 class="pb-3">Artikel / <strong>Postingan</strong></h4>
            <a href="addArticle.php">
              <button class="btn btn-danger mb-5"> +Tambah Data </button>
            </a>
          <table id="example" class="display" style="width:100%">
          
          <thead>
                  <tr>
                    <th style="text-align:center">Id</th>
                    <th style="text-align:center">Gambar</th>
                    <th style="text-align:center">Judul</th>
                    <th style="text-align:center">Tag</th>
                    <th style="text-align:center">Penulis</th>
                    <th style="text-align:center">Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($artikelDB as $row) : ?>
                      <tr>
                        <td scope="row"><?=  $h++ ?></td>
                        <td><img src="../img/article/<?= $row["gambar"]?>" height="50px"></td>
                        <td><?= $row["judul"]?></td>
                        <td><?= $row["deskripsi"]?></td>
                        <td><?= $row["penulis"]?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="editArticle.php?id=<?= $row["id_artikel"]?>"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="deleteArticle.php?id=<?= $row["id_artikel"]?>" onclick="return confirm('Tekan OK untuk hapus');">
                                <i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
      </table>
          </div>
                  </div>
            </div>