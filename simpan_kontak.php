<?php
include 'admin/koneksi.php';
$nama = $_POST['nama'];
$jkel = $_POST['jkel'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];

mysqli_query($conn,"INSERT INTO kontak VALUES ('','$nama','$jkel','$email','$alamat','$kota','$pesan')") or die("Proses simpan ke database gagal");

header("location: kontak.html");
?>