<?php
require "koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $inputUsername = $_POST["username"];
    $inputEmail = $_POST["email"];
    $inputPassword = $_POST["password"];
    $hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);

    $insertQuery = "INSERT INTO siswa(username, email, password, role) VALUES ('$inputUsername', '$inputEmail', '$hashedPassword', 'user')";
    $result = mysqli_query($connection, $insertQuery);

    session_start();
    $_SESSION['message'] = 'registrasi berhasil!';
    header('location:login.php');
}


?>