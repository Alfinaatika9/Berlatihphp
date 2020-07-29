<?php
function skor_terbesar($arr){
//kode di sini
  $clss = [];
  for ($i=0; $i < count($arr) ; $i++) { 
    if (!in_array($arr[$i]['kelas'], $clss)) {
      array_push($clss, $arr[$i]['kelas']);
    }
  }

  for ($i=0; $i < count($clss); $i++) { 
    $skor = 0;
    for ($j=0; $j < count($arr) ; $j++) { 
      if ($arr[$j]['kelas'] == $clss[$i]) {
        if ($arr[$j]['nilai'] > $skor) {
          $skor = $arr[$j]['nilai'];
          $out[$clss[$i]] = $arr[$j];
        }
      }
    }
  }
  echo "<pre>";
  print_r($out);
  echo "<pre>";
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>