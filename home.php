<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran SISWA BARU | SMK N 1 SAYUNG</title>
</head>
<style>
	body{
background-image:url('kotak-kotak.jpg') ;
	}
</style>
<body>
	<center>
	<header>
		<h2>PENDAFTARAN SISWA BARU</h2>
		<h1>SMK N 1 SAYUNG</h1>
		<img src="gambar/logosmk.png" alt="Logo SMKN 1 Sayung">
	</header>
	
	<h3>MENU</h3>
	<nav>
		<ul>
			<a href="form-daftar.php">DAFTAR</a>
			<a href="list-siswa.php">PENDAFTAR</a>
        </ul>
	</nav>
	<center>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	<a href="logout.php">LOGOUT</a>
	</body>
</html>
