<?php
$nilai = 86;

if (($nilai >= 85) && ($nilai <=100))
{
 $grade = "A";
 $info = "Good, pertahankan nilai kamu";
}
elseif (($nilai >= 75) && ($nilai <85))
{
 $grade = "B";
 $info ="Nilai kamu bagus, bisa ditingkatkan lagi";
}
elseif (($nilai >= 60) && ($nilai <75))
{
 $grade = "C";
 $info ="Nilai kamu cukup, harus ditingkatkan lagi";
}
elseif (($nilai >= 50) && ($nilai <60))
{
 $grade = "D";
 $info ="Nila kamu kurang, dan tidak lulus. Silahkan mengulang di semester depan";
}
else
{
 $grade = "E";
 $info ="Sangat kurang. Harus ngulang semester depan";
}
echo "Anda mendapatkan : $nilai, dikonversi menjadi '$grade' ";
echo "<br>";
echo $info;
?>