<?php
    require 'function.php';
    $connect = mysqli_connect("localhost", "root", "", "lhjateng");

        $firstName = $_POST["fname"];
        $lastName = $_POST["lname"];
        $phoneNumber = $_POST["telp"]; 
        $gender = $_POST["gender"];
        $emailAddress = $_POST["email"];
        $password = md5($_POST["password"]);      

        $query = "INSERT INTO user (fname, lname, telp, gender, email, password) VALUE('$firstName','$lastName','$phoneNumber','$gender','$emailAddress', '$password')";

        if(mysqli_query($connect, $query)){
            header("Location:login.php");
        }else{
            echo "Registration failed , please try again!<br>" . mysqli_error($connect);
        }
    
    mysqli_close($connect);
?>