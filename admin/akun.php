<?php 
 session_start();
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}

require '../function.php';
  $akunDB = query("SELECT * FROM `lhjateng`.`user` ORDER BY `id_user` DESC LIMIT 1000;");

$h = 1;
 ?>
<!doctype html>
<html lang="en">
<head>

<?php require '../components/admin/style.php';?>

<!-- ======= Title Page ======== -->
<title> Account Dashboard | Leadershub Jawa Tengah</title>
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
          <?php include '../components/admin/account/read.php';?>
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