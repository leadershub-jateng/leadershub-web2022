<!-- Layout container -->
<div class="layout-page">
      <!-- Navbar -->

      <!-- ======= Navbar ======== -->
      <?php include '../components/admin/navbar.php'; ?>
      <!-- ======= Navbar ======== -->

      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
            <div class="container">
                  <div class="card" style="margin-top:20px; margin-bottom:50px">
                        <div class="card-body p-5">
                              <div class="d-flex justify-content-between">
                                    <h4 class="pb-3">Artikel / Tag / <strong>Edit Tag</strong></h4>
                                    <a href="tag.php">
                                          Close <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                          </svg>
                                    </a>
                              </div>
                              <form action="" method="POST">
                                    <div class="row mb-3">
                                          <input type="hidden" name="id" value="<?= $data_tag["id_tag"] ?>">
                                          <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                                          <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name" name="deskripsi" value="<?= $data_tag["deskripsi"]  ?>" />
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