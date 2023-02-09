<?php
session_start();
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}
require '../function.php';


$id = $_GET["id"];
$data_artikel = query("SELECT * FROM artikel WHERE id_artikel = $id")[0];
$tagDB = query("SELECT `id_tag`,`deskripsi` FROM `lhjateng`.`tag` LIMIT 1000;");
$restagDB = query("SELECT tag.id_tag,tag.deskripsi FROM tag
INNER JOIN artikel
ON tag.id_tag = artikel.id_tag WHERE id_artikel = $id;");

if (isset($_POST["submit"])) {
  if (edit($_POST) > 0) {
    echo "
        <script>
          alert('data berhasil diubah!');
          document.location.href = 'postingan.php';
        </script>
      ";
  } else {
    echo "
        <script>
          alert('data gagal diubah!');
          document.location.href = 'postingan.php';
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
  <title> Edit Post | Leadershub Jawa Tengah</title>
  <!-- ======= Title Page ======== -->
  <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

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
        <?php include '../components/admin/posts/update.php'; ?>
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