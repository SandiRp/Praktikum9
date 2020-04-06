<?php 
include 'koneksi.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$user' && password = '$pass'");
$test = mysqli_num_rows($sql);
if ($test>0) {
	header("location:cetak.php");
}else{
	echo "Maaf Username/Password salah";
}

 ?>