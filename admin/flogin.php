<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="cek.php" method="POST">
	<table>
		<center>
			<tr>
				<td>Username : </td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Login">
					<input type="reset" name="bersih" value="Batal">
				</td>
			</tr>
		</center>
	</table>

</form>


</body>
</html>
