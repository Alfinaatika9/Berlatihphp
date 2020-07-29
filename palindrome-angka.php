<?php

function palindrome_angka($angka) {
  // tulis kode di sini
$angka++;
if ($angka == strrev($angka)) {
	return $angka;
}elseif ($angka != strrev($angka)) {
	for ($i=1; $i < $angka; $i++) { 
		$angka++;
		if ($angka == strrev($angka)) {
			return $angka;
			break;
		}
	}
}
}

// TEST CASES
echo palindrome_angka(8);echo "<br>"; // 9
echo palindrome_angka(10);echo "<br>"; // 11
echo palindrome_angka(117);echo "<br>"; // 121
echo palindrome_angka(175);echo "<br>"; // 181
echo palindrome_angka(1000); // 1001

?>