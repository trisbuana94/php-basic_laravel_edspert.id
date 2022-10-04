<?php

// Diberikan array seperti dibawah ini
$arr = array(1,2,3,4,5);

// Buatlah program untuk menghitung
// total nilai pada semua elemen array diatas
// Expected output: 15;
$total = 0;

foreach($arr as $key => $value) {
  echo "nilai index[$key] = $value \n";
  $total += $value;
}

echo "total nilai array = $total";

?>