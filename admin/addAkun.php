<?php
//Hanya pengguna yang berhasil login yang bisa mengakses
session_start();

// Apabila belum login, maka diarahkan to login
if (!isset($_SESSION['fname'])) {
  header("Location: login.php");
}

  require '../function.php';
  $tagDB = query("SELECT * FROM `lhjateng`.`tag` LIMIT 1000;");

  if(isset($_POST["submit"])){
      $connect = mysqli_connect("localhost", "root", "", "lhjateng");

      $firstName = $_POST["fname"];
      $lastName = $_POST["lname"];
      $phoneNumber = $_POST["telp"]; 
      $gender = $_POST["gender"];
      $emailAddress = $_POST["email"];
      $password = md5($_POST["password"]);      

      $query = "INSERT INTO user (fname, lname, telp, gender, email, password) VALUE('$firstName','$lastName','$phoneNumber','$gender','$emailAddress', '$password')";

      if(mysqli_query($connect, $query)){
          header("Location:akun.php");
      }else{
          echo "Registration failed , please try again!<br>" . mysqli_error($connect);
      }
  
  mysqli_close($connect);
  }


   
?>
<!doctype html>
<html lang="en">
<head>

<?php require '../components/admin/style.php';?>

<!-- ======= Title Page ======== -->
<title> Add Account | Leadershub Jawa Tengah</title>
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
          <!-- Navbar -->

          <!-- ======= Navbar ======== -->
          <?php include '../components/admin/navbar.php';?>
            <!-- ======= Navbar ======== -->


            <!-- ======= Content ======== -->
            <?php include '../components/admin/account/add.php';?>
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