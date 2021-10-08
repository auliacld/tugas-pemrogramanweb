<?php

$nilai = 80;

if($nilai > 90){
	echo "Nilai A";
}

else if ($nilai > 80 && $nilai <= 90) {
	echo "Nilai B";
	# code...
}

else if ($nilai < 70 && $nilai <=80 ) {
	echo "Nilai C";
	# code...
}

else if ($nilai < 60 && $nilai <=70 ) {
	echo "Nilai D";
	# code...
}

else {
	echo "Nilai E";
}
?>