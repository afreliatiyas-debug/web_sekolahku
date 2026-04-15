<?php 
include 'koneksi.php';

// 1. Ambil data dari form
// Pastikan di file edit.php, input ID memiliki name="id_kegiatan"
$id      = mysqli_real_escape_string($koneksi, $_POST['id_kegiatan']);
$judul   = mysqli_real_escape_string($koneksi, $_POST['judul']);
$isi     = mysqli_real_escape_string($koneksi, $_POST['isi']);
$tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);

// 2. Logika Update Gambar (Agar gambar lama tidak hilang jika tidak ganti baru)
$nama_gambar = $_POST['gambar_lama']; 
if (isset($_FILES['gambar']) && $_FILES['gambar']['name'] != "") {
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi      = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($lokasi, "assets/" . $nama_gambar);
}

// 3. Query Update
// Menyesuaikan nama tabel menjadi tbl_kegiatan dan kolom deskripsi serta tanggal_kegiatan
$query = "UPDATE tbl_kegiatan SET 
          judul = '$judul', 
          deskripsi = '$isi', 
          gambar = '$nama_gambar', 
          tanggal_kegiatan = '$tanggal' 
          WHERE id_kegiatan = '$id'";

$update = mysqli_query($koneksi, $query);

if ($update) {
    // Berhasil, pindah ke dashboard
    header("location:admin_dashboard.php");
} else {
    // Jika gagal, tampilkan error spesifik dari database
    die("Gagal update data: " . mysqli_error($koneksi));
}
?>