
<?php

	$namadepan =$_GET['fname'];
	$namabelakang =$_GET['lname'];
	$alamat =$_GET['address'];
	$daerah =$_GET['daerah'];
	$gender =$_GET['gender'];
	$jumlah =$_GET['jumlah'];
	$alat =$_GET['alat'];
	$karakter =$_GET['karakter'];
	$jalur =$_GET['jalur'];
	$tombol=$_GET['tombol'];
	$tombol=$_GET['tombol'];	


	echo "<h1> Data Hasil Tangkapan Nelayan </h1>";
	echo "Nama Depan Nelayan : ".$namadepan."<br>";
	echo "Nama  Nelayan : ".$namadepan."<br>";
	echo "Alamat Nelayan : ".$alamat."<br>";
	echo "Daerah Penangkapan : ".$daerah."<br>";
	echo "Alat Penangkapan : ".$alat."<br>";
	echo "Karakteristik Kedalaman : ".$karakter."<br>";
	echo "Jalur Penangkapan : ".$jalur."<br>";

?>
