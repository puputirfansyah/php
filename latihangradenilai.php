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
elseif (($nilai >= 46) && ($nilai <59))
{
 $grade = "D";
 $info ="Nila kamu kurang, kamu tidak lulus. Silahkan mengulang di semester depan";
}
else
{
 $grade = "E";
 $info ="Sangat kurang. Wajib mengulang di semester depan";
}
echo "Kamu mendapatkan : $nilai, dengan grade '$grade' ";
echo "<br>";
echo $info;
?>