<!-- Content wrapper -->
<div class="content-wrapper">
  <div class="container">
    <div class="card" style="margin-top:20px; margin-bottom:50px">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between">
          <h4 class="pb-3">Artikel / Postingan / <strong>Edit Post</strong></h4>
          <a href="postingan.php">
            Close <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
          </a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data_artikel["id_artikel"] ?>">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Artikel</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="judul" value="<?= $data_artikel["judul"] ?>" required>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Penulis</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="author" name="penulis" value="<?= $data_artikel["penulis"] ?>" required>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">Isi Artikel</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="isi" placeholder="Tulis postingan.." name="editor1" rows="10" required><?= $data_artikel["isi"] ?></textarea>
            </div>
          </div>



          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">Tag</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="tag article" id="tag" name="id_tag" required>
                <?php foreach ($restagDB as $row) : ?>
                  <option selected value="<?= $row["id_tag"] ?>"><?= $row["deskripsi"] ?></option>
                <?php endforeach ?>
                <?php foreach ($tagDB as $row) : ?>
                  <option value="<?= $row["id_tag"] ?>"><?= $row["deskripsi"] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="row mb-3">

            <label class="col-sm-2 col-form-label" for="basic-default-message">Gambar</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="gambar" name="gambar">
              <div class="py-3">
                <img src="../img/article/<?= $data_artikel["gambar"] ?>" width="500px">
              </div>
            </div>

          </div>
          <div class="d-grid">
            <button class="btn btn-danger" type="submit" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>