<?php 
 session_start();
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}

require '../function.php';
$id = $_GET["id"];
$data_tag = query("SELECT * FROM tag WHERE id_tag = $id")[0];
if(isset($_POST["submit"])){
  if(edit_tag($_POST) > 0){
    echo "
      <script>
        alert('data berhasil diubah!');
        document.location.href = 'tag.php';
      </script>
    ";
  }else{
    echo "
      <script>
        alert('data gagal diubah!');
        document.location.href = 'tag.php';
      </script>
    ";
  }
     
}
 ?>

<!doctype html>
<html lang="en">
<head>

<?php require '../components/admin/style.php';?>

<!-- ======= Title Page ======== -->
<title> Edit Tag | Leadershub Jawa Tengah</title>
<!-- ======= Title Page ======== -->

</head>
  <body>
 
      <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        
        <!-- ======= Navbar ======== -->
        <?php include '../components/admin/menu.php';?>
        <!-- ======= Navbar ======== -->

        <!-- ======= Content ======== -->
        <?php include '../components/admin/tag/update.php';?>
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
