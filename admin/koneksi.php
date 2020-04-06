<?php
$server = "localhost";
$username = "root";
$password = "";
$namadb = "sandi";

$conn = mysqli_connect($server,$username,$password)or die("Proses simpan ke database gagal");
$con = mysqli_select_db($conn,$namadb);

?>
