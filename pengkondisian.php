
<?php

/*belajar if*/

$nilai = 100;
if ($nilai>85) {
	echo "Nilai: A";
	echo "<br>";
}

/*belajar ifelse*/
 
if($nilai<80){
    echo "Nilai: A";}
else
{
    echo "Nilai: bukan A";}
    echo "<br>";

/*bentuk khusus ?: (ternary operator)*/

echo ($nilai>=85)? "sangat baik" : "baik";
echo "<br>";

/*belajar if endif*/

if ($nilai >=60):
	echo "anda lulus";
	echo "<br>";
endif;

/*belajar Switch case
untuk menguji pernyataan yang memiliki banyak kondisi*/

$status = 2;
switch ($status) {
	case 1:
		echo "status mahasiswa";
		break;
	case 2:
		echo "status: karyawan";
		break;
	default:
		echo "status: tamu";
			
}

echo "<br>";

/*BELAJAR PERULANGAN
FOR*/

for ($i = 1; $i <= 5; $i++) { 
	echo "kami sedang belajar";
	echo "<br>";
}

/*belajar while*/
$i = 1;
while ($i <= 10) {
	echo $i;
	echo "<br>";
	$i = $i + 1;
}

/*belajar do while*/

$j = 2000;
do {
	echo $j;
	echo "Maka nilainya tampil";
	$j++;
} while ($j <= 10);
echo "<br>";

/*belajar foreach*/

$POST= array("irfan", "joko","andri");
foreach($POST as $item){
	echo "$item";
	echo "<br>";
}

/*belajar break dan continue*/

for ($k=1; $k < 10; $k++) { 
	if ($k == 5)
		continue;
	if ($k == 8)
		break;
	echo "$k";
}
?>
