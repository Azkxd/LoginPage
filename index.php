<!DOCTYPE html>
<html>
    <head>
    <!-- <link rel="stylesheet" href="stylse.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <style type="text/tailwindcss">
            
            body{
                background-color: #360050;
                color: white;
            }
        </style>
    </head>
    <body>

        <?php 
    // session_start();
    if(isset($_SESSION['message'])){
        
        echo ($_SESSION['message']);
    }
?>
<div class="card">


        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 ">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="proses-login.php" method="POST">
      <div>
        <label for="email" class=" flex text-sm font-medium leading-6 ">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md text-black border-0 px-2 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 ">Password</label>
          
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-100">
      Not a member?
      <a href="registrasi.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-200">Register yourself!</a>
    </p>
  </div>
</div>
</div>    
    </body>
</html>

<!-- <?php
    session_start();
function proseslogin($connection){
require "koneksi.php";
   
    $inputEmail = $_POST['email'];
    $inputPassword = $_POST["password"];
    
$sql = "SELECT * FROM siswa WHERE email = '$inputEmail'";
$queryUser = mysqli_query($connection,$sql);
$dataUser = mysqli_fetch_assoc($queryUser);

$verifPass = password_verify($inputPassword, $dataUser['password']);
    

if($dataUser['email'] && $verifPass == true) {
    
    $_SESSION['email'] = $dataUser['email'];
    $_SESSION['role'] = $dataUser['role'];
    $_SESSION['username'] = $dataUser['username'];
    $_SESSION['password'] = $dataUser['password'];
    header('location:dashboard.php');
    exit;
    
} else {
    $_SESSION['message'] = 'login gagal';
    header('location:login.php');
    exit;
    
}

}

?> -->