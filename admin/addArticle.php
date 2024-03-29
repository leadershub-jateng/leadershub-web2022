<?php
session_start();
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}
require '../function.php';
$tagDB = query("SELECT * FROM `lhjateng`.`tag` LIMIT 1000;");

if (isset($_POST["submit"])) {
  if (add($_POST) > 0) {
    echo "
        <script>
          alert('data berhasil ditambahkan!');
          document.location.href = postingan.php';
        </script>
      ";
  } else {
    echo "
        <script>
          alert('data gagal ditambahkan!');
          document.location.href = postingan.php';
        </script>
      ";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <?php require '../components/admin/style.php'; ?>
  <script src="../assets/ckeditor/ckeditor.js"></script>

  <!-- ======= Title Page ======== -->
  <title> Tambah Post | Leadershub Jawa Tengah</title>
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
        <?php include '../components/admin/posts/add.php'; ?>
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
  <script>
    CKEDITOR.replace('editor1');
  </script>


</body>

</html>