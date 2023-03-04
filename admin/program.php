<?php
//Hanya pengguna yang berhasil login yang bisa mengakses
session_start();

// Apabila belum login, maka diarahkan to login
if (!isset($_SESSION['fname'])) {
      header("Location: login.php");
}

require '../function.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$query = "SELECT * FROM program";

$data = mysqli_query($connect, $query);

$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_program = mysqli_query($connect, "select * from program limit $halaman_awal, $batas");




?>
<!doctype html>
<html lang="en">

<head>

      <?php require '../components/admin/style.php'; ?>

      <!-- ======= Title Page ======== -->
      <title> Program Dashboard | Leadershub Jawa Tengah</title>
      <!-- ======= Title Page ======== -->

</head>

<body>

      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">

                  <!-- ======= Navbar ======== -->
                  <?php include '../components/admin/menu.php'; ?>
                  <!-- ======= Navbar ======== -->

                  <!-- Layout container -->
                  <div class="layout-page">

                        <!-- ======= Navbar ======== -->
                        <?php include '../components/admin/navbar.php'; ?>
                        <!-- ======= Navbar ======== -->

                        <!-- ======= Content ======== -->
                        <?php include '../components/admin/program/read.php'; ?>
                        <!-- ======= Content ======== -->

                  </div>

                  <!-- ======= Footer ======== -->
                  <?php include '../components/admin/footer.php'; ?>
                  <!-- ======= Footer ======== -->
                  <!-- Content wrapper -->
            </div>

            <!-- / Layout page -->
      </div>

      </div>

      <!-- ======= Script ======== -->
      <?php require '../components/admin/script.php'; ?>
      <!-- ======= Script ======== -->
</body>

</html>