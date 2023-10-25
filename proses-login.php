<?php
require "koneksi.php";
   
    $inputEmail = $_POST['email'];
    $inputPassword = $_POST["password"];
    
$sql = "SELECT * FROM siswa WHERE email = '$inputEmail'";
$queryUser = mysqli_query($connection,$sql);
$dataUser = mysqli_fetch_assoc($queryUser);

$verifPass = password_verify($inputPassword, $dataUser['password']);
    

    
    if($dataUser['email'] && $verifPass == true) {

        session_start();
        $_SESSION['email'] = $dataUser['email'];
        $_SESSION['role'] = $dataUser['role'];
        $_SESSION['username'] = $dataUser['username'];
        
        header('location:dashboard.php');

    } else {
        $_SESSION['message'] = 'login gagal';
        header('location:index.php');

    }


?>