<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>
	<h2>Latihan MVC</h2>
	<table border='1'>
		<tr>
			<td>No</td>
			<td>NIK</td>
			<td>Nama</td>
			<td>Jabatan</td>			
		</tr>
		<?php
			$no = 1;
			foreach($list_pegawai as $rowPegawai){
		?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $rowPegawai['nik']; ?></td>
				<td><?php echo $rowPegawai['nama']; ?></td>
				<td><?php echo $rowPegawai['jabatan']; ?></td>
			</tr>
		<?php
				$no++;
			}
		?>
	</table>
</body>
</html>