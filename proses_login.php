<?php
session_start(); // Memulai session untuk menandai admin sudah login

$user_input = $_POST['username'];
$pass_input = $_POST['password'];

// Cek sesuai instruksi soal nomor 6
if ($user_input == "admin" && $pass_input == "Dlanggu") {
    $_SESSION['status'] = "login";
    header("location:admin_dashboard.php"); // Arahkan ke halaman admin jika benar
} else {
    header("location:login.php?pesan=gagal"); // Kembalikan ke login jika salah
}
?>