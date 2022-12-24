<?php
//Hanya pengguna yang berhasil login yang bisa mengakses
  session_start();

  // Apabila belum login, maka diarahkan to login
  if (!isset($_SESSION['fname'])) {
    header("Location: login.php");
  }

  
   require '../function.php';
 
   $id = $_GET["id"];
   $data_user = query("SELECT * FROM user WHERE id_user = $id")[0];
   if(isset($_POST["submit"])){
     if(edit_user($_POST) > 0){
       echo "
         <script>
           alert('data berhasil diubah!');
           document.location.href = 'akun.php';
         </script>
       ";
     }else{
       echo "
         <script>
           alert('data gagal diubah!');
           document.location.href = 'akun.php';
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
<title> Edit Account | Leadershub Jawa Tengah</title>
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
            <?php include '../components/admin/account/update.php';?>
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