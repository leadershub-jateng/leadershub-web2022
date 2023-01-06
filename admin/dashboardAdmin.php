<?php
  //Hanya pengguna yang berhasil login yang bisa mengakses
  session_start();

  //Pop up berhasil Log In
  include '../components/success-login.php';
  
  // Apabila belum login, maka diarahkan to login
  if (!isset($_SESSION['fname'])) {
    header("Location: login.php");
  }

  // menghubungkan dengan koneksi database
  include '../config.php';
  
  // mengambil data 
  $posts_data = mysqli_query($conn,"SELECT * FROM artikel");
  $comments_data = mysqli_query($conn,"SELECT * FROM tbl_komentar");
  $views_data = mysqli_query($conn,"SELECT * FROM totalview");
  $tags_data = mysqli_query($conn,"SELECT * FROM tag");
 
  // menghitung jumlah data
  $sum_posts = mysqli_num_rows($posts_data);
  $sum_comments = mysqli_num_rows($comments_data);
  $sum_views = mysqli_num_rows($views_data);
  $sum_tags = mysqli_num_rows($tags_data); 
 ?>

<!doctype html>
<html lang="en">
  <head>

  <?php require '../components/admin/style.php';?>

  <!-- ======= Title Page ======== -->
  <title> Dashboard | Leadershub Jawa Tengah</title>
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

          <!-- Content wrapper -->
          <div class="content-wrapper">

             <!-- ======= Content ======== -->
             <?php include '../components/admin/dashboard/read.php';?>
            <!-- ======= Content ======== -->

            <!-- ======= Footer ======== -->
            <?php include '../components/admin/footer.php';?>
            <!-- ======= Footer ======== -->
            
          </div>
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