<?php
session_start();
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}
  require '../function.php';
  if(isset($_POST['submit'])) {
      $deskripsi = $_POST['deskripsi'];
      // include database connection file
      include_once("../config.php");
              
      // Insert user data into table
      $result = mysqli_query($conn, "INSERT INTO tag(deskripsi) VALUES('$deskripsi')");
      
      // Show message when user added
      echo "
      <script>
          document.location.href = 'tag.php';
        </script>
      ";
  }
?>
<!doctype html>
<html lang="en">
<head>

<?php require '../components/admin/style.php';?>

<!-- ======= Title Page ======== -->
<title> Add Tag | Leadershub Jawa Tengah</title>
<!-- ======= Title Page ======== -->

</head>
  <body>
 
      <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       <!-- ======= Navbar ======== -->
       <?php include '../components/admin/menu.php';?>
        <!-- ======= Navbar ======== -->

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

           <!-- ======= Navbar ======== -->
           <?php include '../components/admin/navbar.php';?>
            <!-- ======= Navbar ======== -->
            <!-- ======= Content ======== -->
            <?php include '../components/admin/tag/add.php';?>
            <!-- ======= Content ======== -->
          
          </div>
          <!-- Footer -->
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