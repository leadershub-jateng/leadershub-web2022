<?php 
session_start();
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}
require '../function.php';
    $id = $_GET["id"];
    if(delete_program($id) > 0){
      echo "
        <script>
          alert('data berhasil dihapus!');
          document.location.href = 'program.php';
        </script>
      ";
    }else{
      echo "
        <script>
          alert('data gagal dihapus!');
          document.location.href = 'program.php';
        </script>
      ";
    }
