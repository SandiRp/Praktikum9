<?php
include 'koneksi.php';
$sql = "SELECT * FROM kontak ORDER BY nama;";
$query=mysqli_query($conn,$sql)or die("proses cetak gagal");
echo "<table widht='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
	<th>No</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Email</th>
	<th>Alamat</th>
	<th>Kota</th>
	<th>Pesan</th>";
$no=1;
while ($hasil=mysqli_fetch_row($query)) {
echo "<tr>
		<td>$no</td>
		<td>$hasil[1]</td>
		<td>$hasil[2]</td>
		<td>$hasil[3]</td>
		<td>$hasil[4]</td>
		<td>$hasil[5]</td>
		<td>$hasil[6]</td>
	</tr>";
	$no++;
}
echo "</table>";
?>
<a href="../kontak.html">Kembali</a>