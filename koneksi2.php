<?php
$servername = "";
$database = "";
$username = "";
$password = "";

// buat koneksi

$koneksi = mysqli_connect($servername, $username, $password, $database);

// cek koneksi

if ($koneksi) {
    echo "koneksi berhasil";
}else{
echo "tidaak berhasil";
mysqli_close($koneksi);
}
?>