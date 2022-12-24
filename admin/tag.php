<?php 
  //Hanya pengguna yang berhasil login yang bisa mengakses
  session_start();

  // Apabila belum login, maka diarahkan to login
  if (!isset($_SESSION['fname'])) {
    header("Location: login.php");
  }

  // Controller PHP
  require '../function.php';

  // Read tag table
  $tagDB = query("SELECT * FROM `lhjateng`.`tag` LIMIT 1000;");

  // Increase variable
  $h = 1;

 ?>
<!doctype html>
<html lang="en">
  <head>

  <?php require '../components/admin/style.php';?>

  <!-- ======= Title Page ======== -->
  <title> Tag Dashboard | Leadershub Jawa Tengah</title>
  <!-- ======= Title Page ======== -->

  </head>
  <body>
 
      <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- ======= Navbar ======== -->
        <?php include '../components/admin/menu.php';?>
        <!-- ======= Navbar ======== -->

        <!-- Layout container -->
        <div class="layout-page">

            <!-- ======= Navbar ======== -->
            <?php include '../components/admin/navbar.php';?>
            <!-- ======= Navbar ======== -->

            <!-- ======= Content ======== -->
            <?php include '../components/admin/tag/read.php';?>
            <!-- ======= Content ======== -->
          
        </div>

         <!-- ======= Footer ======== -->
         <?php include '../components/admin/footer.php';?>
            <!-- ======= Footer ======== -->
          <!-- Content wrapper -->
        </div>
        
        <!-- / Layout page -->
      </div>
      
    </div>
 
  <!-- ======= Script ======== -->
  <?php require '../components/admin/script.php';?>
  <!-- ======= Script ======== -->
  </body>
</html>