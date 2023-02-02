<!-- Content wrapper -->
<div class="content-wrapper">
  <div class="container">
    <div class="card" style="margin-top:20px; margin-bottom:50px">
      <div class="card-body p-5">
        <h4 class="pb-3">Artikel / <strong>Tag</strong></h4>
        <a href="addTag.php">
          <button class="btn btn-danger mb-5"> +Tambah Data </button>
        </a>

        <table id="example" class="display" style="width:100%">

          <thead>
            <tr>
              <th style="text-align:center">No.</th>
              <th style="text-align:center">Deskripsi</th>
              <th style="text-align:center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tagDB as $row) : ?>
              <tr>
                <td style="text-align:center"><?= $h++ ?></td>
                <td style="text-align:center"><?= $row["deskripsi"] ?></td>
                <td align="center">
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="editTag.php?id=<?= $row["id_tag"] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="deleteTag.php?id=<?= $row["id_tag"] ?>" onclick="return confirm('Tekan OK untuk hapus');">
                        <i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>

          </tbody>
        </table>

        </table>
      </div>
    </div>
  </div>