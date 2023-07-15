<?php
//mendefinisikan fungsi perkalian
function perkalian($angka1, $angka2) {
  $a = $angka1;
  $b = $angka2;
  $hasil = $a*$b;
  return $hasil;
}
  
//pemanggilan fungsi
$hasil = perkalian(3,6);
echo "Perkalian 3 x 6 adalah $hasil";
echo "<br>";
echo "Perkalian 8 x 2 adalah ".perkalian(8,2);
?>