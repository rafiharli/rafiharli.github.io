<?php
session_start();

include_once 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password'");
$count = mysqli_num_rows($sql);

if($count>0){
    $_SESSION['user'] = "HARLEY DAVIDSON";
    ?>
    <script>
        alert("Login Succeed");
        document.location = "admin.php";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Login Failed");
        document.location = "login.php";
    </script>
    <?php
} 
    ?>