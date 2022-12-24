 <!-- Content wrapper -->
 <div class="content-wrapper">
            <div class="container">
                  <div class="card" style="margin-top:20px; margin-bottom:50px">
          <div class="card-body p-5">
          <h4 class="pb-3">Artikel / <strong>Komentar</strong></h4>
          <table id="example" class="display" style="width:100%">
          
          <thead>
                  <tr>
                    <th style="text-align:center">Id</th>
                    <th style="text-align:center">Judul</th>
                    <th style="text-align:center">Komentar</th>
                    <th style="text-align:center">Pengirim</th>
                    <th style="text-align:center">Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($komentarDB as $row) : ?>
                      <tr>
                        <td scope="row"><?= $h++ ?></td>
                        <td scope="row"><?= $row["judul"]?></td>
                        <td><?= $row["komentar"]?></td>
                        <td><?= $row["nama_pengirim"]?></td>
                        <td>
                        <a href="deleteKomentar.php?id=<?= $row["komentar_id"]?>" onclick="return confirm('Tekan OK untuk hapus');">
                            <button type="button" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg>
                            </button>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
      </table>
          </div>
                  </div>
            </div>