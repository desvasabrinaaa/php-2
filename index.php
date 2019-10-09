<?php 

// looping / pengulangan

// type 1 = for
// for( $i=1; $i <= 10; $i++ ){
// 	echo $i . ". Desva Sabrina";
// 	echo "<br>";
// }

// Type 2 = WHILE
// $i = 1;
// while ($i <= 10) {
// 	echo $i . " Desva Sabrina <br>";
// 	$i++;
// }

// Type 3 = FOREACH

// Conditional / Pengkondisian
// $angka = 10;
// if ($angka > 10) {
// 	echo "Lebih dari 10";
// }elseif ($angka = $angka) {
// 	echo "sama dengan " . $angka;
// } else {
// 	echo "Kurang dari 10";
// }

// Tugasnya : buatkan sebuah array 1 dimensi dan lebih dari 1 dimensi
// Tampilkan dalam bentuk pengulangan foreach

$maNama = ['Luthfi', 'Lupi', 'Desva', 'Ndes'];

foreach ( $maNama as $Nama ) {
	echo "$Nama <br>";
}


?>
