<?php
include 'koneksi.php';

// 1. Ambil data dari form
// Pastikan name="judul", name="isi", dan name="tanggal" di file tambah_kegiatan.php sudah sesuai
$judul   = mysqli_real_escape_string($koneksi, $_POST['judul']);
$isi     = mysqli_real_escape_string($koneksi, $_POST['isi']); 
$tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);

// 2. Logika untuk upload gambar
$nama_gambar = ""; 
if (isset($_FILES['gambar']) && $_FILES['gambar']['name'] != "") {
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi      = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($lokasi, "assets/" . $nama_gambar);
}

// 3. Menjalankan query ke database
// KUNCI PERBAIKAN: Pastikan kolom di database adalah 'deskripsi' dan 'tanggal_kegiatan'
$query = "INSERT INTO tbl_kegiatan (judul, deskripsi, gambar, tanggal_kegiatan) 
          VALUES ('$judul', '$isi', '$nama_gambar', '$tanggal')";

$simpan = mysqli_query($koneksi, $query);

if ($simpan) {
    header("location:admin_dashboard.php");
} else {
    // Jika masih error, pesan ini akan memberitahu kolom mana yang salah
    die("Gagal menyimpan data: " . mysqli_error($koneksi));
}
?>