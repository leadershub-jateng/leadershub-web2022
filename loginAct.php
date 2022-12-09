<?php
    session_start();
?>
<?php
    require 'function.php';
    $connect = mysqli_connect("localhost", "root", "", "lhjateng");

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM user WHERE email='$email' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $id = $row['id_user'];
    if($row['email'] == "email" && $row['password'] == "password"){
        header("Location:index.php");
        $_SESSION["id_user"] = $id;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
    }else{
        header("Location:login.php");
    }
    mysqli_close($connect);
?>