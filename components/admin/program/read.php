<!-- Content wrapper -->
<div class="content-wrapper">
      <div class="container">
            <div class="card" style="margin-top:20px; margin-bottom:50px">
                  <div class="card-body p-5">
                        <h4 class="pb-3">Acara / <strong>Program</strong></h4>
                        <a href="addProgram.php">
                              <button class="btn btn-danger mb-5"> +Tambah Data </button>
                        </a>

                        <?php
                        if (mysqli_num_rows($data_program) > 0) {
                              while ($row = mysqli_fetch_array($data_program)) {
                                    if ($row['id_program'] % 2 != 0) {
                        ?>

                                          <div class="container-fluid">
                                                <div class="container pd-5 my-5">
                                                      <div class="row blocks">
                                                            <div class="box2 col-lg-5 col-md-5 text-center slide-right">
                                                                  <img src="../img/article/<?= $row["gambar"] ?>" class="img-fluid img-mobile" width="400px">
                                                            </div>
                                                            <div class="box1 col-lg-7 col-md-7 my-auto slide-left">
                                                                  <h1 class="heading heading-left"><?= $row["judul"] ?></h1>
                                                                  <p class="bodytext"><?= $row["deskripsi"] ?></p>
                                                                  <div class="d-flex justify-content-between">
                                                                        <a href="<?= $row["link"] ?>" target="_blank">
                                                                              <button class="btn btn-danger" type="button"><?= $row["cta"] ?></button>
                                                                        </a>
                                                                        <div class="action">
                                                                              <a href="editProgram.php?id=<?= $row["id_program"] ?>">
                                                                                    <button class="btn btn-outline-secondary" type="button">

                                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                                          </svg>

                                                                                    </button>
                                                                              </a>
                                                                              <a href="deleteProgram.php?id=<?= $row["id_program"] ?>" onclick="return confirm('Tekan OK untuk hapus');">
                                                                                    <button class="btn btn-outline-secondary" type="button">

                                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                                                          </svg>

                                                                                    </button>
                                                                              </a>
                                                                        </div>

                                                                  </div>
                                                            </div>

                                                      </div>
                                                </div>
                                          </div>
                                    <?php
                                    } else {
                                    ?>
                                          <div class="container-fluid">
                                                <div class="container pd-5 my-5" style="background-color: #C20C01; padding: 50px">
                                                      <div class="row blocks">
                                                            <div class="col-lg-5 col-md-5 text-center slide-right">
                                                                  <img src="../img/article/<?= $row["gambar"] ?>" class="img-fluid img-mobile" width="400px">
                                                            </div>
                                                            <div class="col-lg-7 col-md-7 my-auto slide-left">
                                                                  <h1 class="heading heading-left" style="color: #ffffff;"><?= $row["judul"] ?></h1>
                                                                  <p class="bodytext" style="color: #ffffff;"><?= $row["deskripsi"] ?></p>
                                                                  <div class="d-flex justify-content-between">
                                                                        <a href="<?= $row["link"] ?>" target="_blank">
                                                                              <button class="btn btn-form-custom" type="button" style="background-color: #ffffff; color:#C20C01"><?= $row["cta"] ?></button>
                                                                        </a>
                                                                        <div class="action">
                                                                              <a href="editProgram.php?id=<?= $row["id_program"] ?>">
                                                                                    <button class=" btn btn-form-custom" type="button" style="background-color: #ffffff; color:#C20C01"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                                          </svg></button>
                                                                              </a>
                                                                              <a href="deleteProgram.php?id=<?= $row["id_program"] ?>" onclick="return confirm('Tekan OK untuk hapus');"">
                                                                              <button class=" btn btn-form-custom" type="button" style="background-color: #ffffff; color:#C20C01"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                                          <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                                                    </svg></button>
                                                                              </a>
                                                                        </div>

                                                                  </div>

                                                            </div>

                                                      </div>
                                                </div>
                                          </div>
                        <?php
                                    }
                              }
                        }
                        ?>

                        </table>
                        <nav aria-label="Page navigation">
                              <ul class="pagination justify-content-center">
                                    <li class="page-item prev">
                                          <a class="page-link" <?php if ($halaman > 1) {
                                                                        echo "href='?halaman=$previous'";
                                                                  } ?>>
                                                <i class="tf-icon bx bx-chevrons-left"></i>
                                          </a>


                                    </li>

                                    <?php
                                    for ($x = 1; $x <= $total_halaman; $x++) {
                                    ?>
                                          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                                          </li>
                                          <!-- <li class="page-item <?php if ($_GET['halaman'] == $x) {
                                                                              echo 'active';
                                                                        } else
                                                                              echo "" ?>"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                                          </li> -->

                                    <?php
                                    }
                                    ?>
                                    <li class="page-item next">
                                          <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                        echo "href='?halaman=$next'";
                                                                  } ?>><i class="tf-icon bx bx-chevrons-right"></i></a>
                                    </li>
                              </ul>
                        </nav>
                  </div>
            </div>
      </div>