<!-- Content wrapper -->
<div class="content-wrapper">
      <div class="container">
            <div class="card" style="margin-top:20px; margin-bottom:50px">
                  <div class="card-body p-5">
                        <div class="d-flex justify-content-between">
                              <h4 class="pb-3">Acara / Program / <strong>Edit Program</strong></h4>
                              <a href="program.php">
                                    Close <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                    </svg>
                              </a>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data">
                              <div class="row mb-3">

                                    <input type="hidden" name="id" value="<?= $data_program["id_program"] ?>">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                                    <div class="col-sm-10">
                                          <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_program['judul'] ?>" required />
                                    </div>
                              </div>

                              <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi</label>
                                    <div class="col-sm-10">
                                          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" required><?php echo $data_program['deskripsi'] ?></textarea>
                                    </div>
                              </div>

                              <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Link</label>
                                    <div class="col-sm-10">
                                          <input type="text" class="form-control" id="link" name="link" value="<?php echo $data_program['link'] ?>" required />
                                    </div>
                              </div>
                              <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan Aksi</label>
                                    <div class="col-sm-10">
                                          <input type="text" class="form-control" id="cta" name="cta" value="<?php echo $data_program['cta'] ?>" required />
                                    </div>
                              </div>
                              <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Gambar</label>
                                    <div class="col-sm-10">
                                          <input class="form-control" type="file" id="formFile" name="gambar" required>
                                    </div>
                                    <div class="py-3">
                                          <img src="../img/article/<?= $data_program["gambar"] ?>" width="500px">
                                    </div>

                              </div>

                              <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>