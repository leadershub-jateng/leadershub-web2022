<?php 
session_start();
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}
 require '../function.php';
 $artikelDB = query("SELECT artikel.id_artikel, artikel.gambar, artikel.judul, tag.deskripsi, artikel.penulis FROM artikel JOIN tag ON artikel.id_tag = tag.id_tag ORDER BY artikel.id_artikel DESC");

$h = 1;
 ?>
<!doctype html>
<html lang="en">
<head>

<?php require '../components/admin/style.php';?>

<!-- ======= Title Page ======== -->
<title> Posts Dashboard | Leadershub Jawa Tengah</title>
<!-- ======= Title Page ======== -->

</head>
  <body>
 
      <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
         <!-- ======= Navbar ======== -->
         <?php require '../components/admin/menu.php';?>
          <!-- ======= Navbar ======== -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

        
          <!-- ======= Navbar ======== -->
          <?php include '../components/admin/navbar.php';?>
            <!-- ======= Navbar ======== -->
          <!-- ======= Content ======== -->
          <?php include '../components/admin/posts/read.php';?>
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