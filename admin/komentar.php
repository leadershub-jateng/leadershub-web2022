<?php 
 session_start();

 require '../function.php';
 $komentarDB = query("SELECT tbl_komentar.*,artikel.judul FROM tbl_komentar JOIN artikel ON tbl_komentar.artikel_id = artikel.id_artikel ORDER BY artikel.id_artikel DESC");

 
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}

$h = 1;
 ?>
<!doctype html>
<html lang="en">
<head>

<?php require '../components/admin/style.php';?>

<!-- ======= Title Page ======== -->
<title> Comment Dashboard | Leadershub Jawa Tengah</title>
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
          <?php include '../components/admin/comment/read.php';?>
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