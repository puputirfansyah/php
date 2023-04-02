<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'email@gmail.com') {
  die("Email anda belum terdaftar!");
}

if ($password !== 'password123') {
  die("Password anda salah!");
}

# keterangan jika email dan password sudah benar
echo "Selamat {$email}, anda sudah berhasil login!";

