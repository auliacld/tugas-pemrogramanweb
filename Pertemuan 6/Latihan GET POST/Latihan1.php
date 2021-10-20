<?php
//ini adalah prosedur
	function SIK($a, $b){ 
		echo "Halo SIK, nama saya ".$a."panggilan saya ".$b;

	}

	//fungsi

	function SIK2($a, $b){
		$c = $a+$b;

		return $c;
	}

	SIK("Aulia CR", "Aulia");
	echo "<br>";
	echo SIK2(3,4);
	echo "<br>";

	//Array 1 dimensi

	$buah=array("apel", "jeruk", "mangga","anggur");
	echo $buah[1];
	echo "<br>";

	$umur=array("Afrizal"=>18, "Aulia"=>19, "Yemima"=>19);
	echo $umur["Afrizal"];
	echo "<br>";

	$angka=array(1,2,3,4,5,6,7);
	foreach ($buah as $number) {
		# code...
		echo $number."<br>";
	}

	//array 2 dimensi

	$mahasiswa=array(
		array("Afrizal", 18),
		array("Aulia", 19),
		array("Yemima",19),
		array("Budi",20)
	);

	echo $mahasiswa[3][0];
?>