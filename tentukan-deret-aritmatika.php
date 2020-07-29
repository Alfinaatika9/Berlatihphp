<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	if (count($arr) < 2) {
		return "true<br>";
	}
	$minus = $arr[1]-$arr[0];
	for ($i=0; $i < count($arr)-1 ; $i++) { 
		if ($minus !== ($arr[$i+1]-$arr[$i])) {
			return "false<br>";
		}
	}
	return "true<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>