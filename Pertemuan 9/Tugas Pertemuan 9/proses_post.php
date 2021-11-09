
	<style>
.mycss{
	color: green;
    border:1px solid #000;
    background: #ccc;
    padding: 10px;
}
</style>
<?php

	$namadepan =$_POST['fname'];
	$namabelakang =$_POST['lname'];
	$alamat =$_POST['address'];
	$daerah =$_POST['daerah'];
	$gender =$_POST['gender'];
	$jumlah =$_POST['jumlah'];
	$alat =$_POST['alat'];
	$karakter =$_POST['karakter'];
	$jalur =$_POST['jalur'];
	$tombol=$_POST['tombol'];
	$tombol=$_POST['tombol'];	

		echo "<p class='mycss'>This is a text in PHP echo.</p>";

	echo "<h1> Data Hasil Tangkapan Nelayan </h1>";
	echo "Nama Depan Nelayan : ".$namadepan."<br>";
	echo "Nama  Nelayan : ".$namadepan."<br>";
	echo "Alamat Nelayan : ".$alamat."<br>";
	echo "Daerah Penangkapan : ".$daerah."<br>";
	echo "Alat Penangkapan : ".$alat."<br>";
	echo "Karakteristik Kedalaman : ".$karakter."<br>";
	echo "Jalur Penangkapan : ".$jalur."<br>";

?>
