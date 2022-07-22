<!DOCTYPE html>
<html>
<head>
	<title>latihan 3</title>
</head>
<body>
<?php 
	// Menampilkan session username
	echo 'Selamat datang <b>'.$this->session->userdata('username').'</b> di pemrograman web 2';
	//Logout dari aplikasi / hapus session username
	echo '<br><a href="'.base_url().'index.php/latihan3/logout">Logout</a>'; 
 ?>
</body>
</html>