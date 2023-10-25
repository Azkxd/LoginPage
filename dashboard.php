<?php

 session_start();
 $email = $_SESSION['email'];
 $username = $_SESSION['username'];
 

 

 if(!isset($email)) {

    echo "<script>
        alert('kamu belum login');
        window.location.replace('login.php');
    </script>";
    
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <title>Login</title>
        <style type="text/tailwindcss">
            
            body{
                background-color: #360050;
                color: white;
            }
        </style>
</head>
<body>
    
        <h1 class="text-5xl my-10">Dashboard</h1>
        <h2>Selamat Datang, 
        <?php echo($username); ?>
        </h2>
        <div class="card mt-44 ">
            
            <p class="text-xl justify-evenly font-medium"></p>Email:</p>
            <?php echo($email);?> 
            <p>Username</p>
            <?php echo($username);?>
            <br>
            
            <button type="button" onclick="window.location.replace('login.php');" class="button my-3">Logout</button>
        </div>
            
        
</body>
</html>