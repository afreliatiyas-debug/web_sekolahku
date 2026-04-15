<?php
$host = "localhost";
$user = "root";
$pass = ""; // WAJIB pakai tanda kutip dua kali tanpa spasi di tengahnya
$db   = "03_afrelia"; // Pastikan nama ini SAMA dengan yang kamu buat di phpMyAdmin [cite: 15]

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>