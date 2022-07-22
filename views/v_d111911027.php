<!DOCTYPE html>
<html>
<head>
	<title>Login Aplikasi</title>
</head>
<body>
	<h2>Login aplikasi</h2>
	<form action="<?php echo base_url().'index.php/d111911027/cek_login';?>" method="POST">
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
				<td>Hak akses</td>
				<td>
					<select name="akses">
						<option value="user">User</option>
						<option value="admin">Admin</option>
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