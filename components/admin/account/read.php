<!-- Content wrapper -->
<div class="content-wrapper">
  <div class="container">
    <div class="card" style="margin-top:20px; margin-bottom:50px">
      <div class="card-body p-5">
        <h4 class="pb-3">Autentikasi / <strong>Setting Akun</strong></h4>
        <a href="addAkun.php">
          <button class="btn btn-danger mb-5"> +Tambah Data </button>
        </a>
        <table id="example" class="display" style="width:100%">

          <thead>
            <tr>
              <th style="text-align:center">No.</th>
              <th style="text-align:center">Email</th>
              <th style="text-align:center">Nama</th>
              <th style="text-align:center">Gender</th>
              <th style="text-align:center">Telpon</th>
              <th style="text-align:center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($akunDB as $row) : ?>
              <tr>
                <td style="text-align:center"><?= $h++ ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["fname"] . " " . $row["lname"] ?></td>
                <td style="text-align:center"><?= $row["gender"] ?></td>
                <td><?= $row["telp"] ?></td>
                <td align="center">
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="editUser.php?id=<?= $row["id_user"] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="deleteUser.php?id=<?= $row["id_user"] ?>" onclick="return confirm('Tekan OK untuk hapus');">
                        <i class="bx bx-trash me-1"></i> Delete</a>
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