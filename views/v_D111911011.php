<!DOCTYPE html>
<html>
<head>
	<title>Ujian Tengah Semester</title>
</head>
<body>
	<h2>Login Aplikasi</h2>
	<form action="<?php echo base_url().'index.php/D111911011/cek_login';?>" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Hak Akses</td>
				<td>
					<select name="akses">
						<option value="user">user</option>
						<option value="admin">admin</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>