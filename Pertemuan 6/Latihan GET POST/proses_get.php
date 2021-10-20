<?php

	$nama =$_GET['nama'];
	$umur =$_GET['umur'];
	$alamat=$_GET['alamat'];
	$tombol=$_GET['tombol'];
	$JK=$_GET['JK'];
	$hobi=$_GET['hobi'];


	echo "<h1> Identitas Mahasiswa </h1>";
	echo "Nama : ".$nama."<br>";
	echo "Umur : ".$umur."<br>";
	echo "Alamat : ".$alamat."<br>";
	echo "Jenis Kelamin : ".$JK."<br>";
	echo "Hobi : ";
	foreach ($hobi as $value){
		# code...
		echo "<ul>";
		echo $value."<br>"
	}
	

?>