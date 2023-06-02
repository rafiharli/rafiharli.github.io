<?php
// Koneksi Web dengan database MySQL dengan PHPMyAdmin

$host = "localhost";
$user = "root";
$pass = "";
$db = "order_database";

$koneksi = mysqli_connect($host,$user,$pass,$db);

// $koneksi2 = mysqli_connect("localhost", "root", "", "database_try");
?>