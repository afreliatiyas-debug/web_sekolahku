<?php 
// 1. Hubungkan ke database
include 'koneksi.php';

// 2. Ambil ID yang dikirim dari tombol hapus di dashboard
// Pastikan variabel ini menerima 'id' yang dikirim dari URL
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // 3. PERBAIKAN: Ganti 'kegiatan' menjadi 'tbl_kegiatan' 
    // dan ganti 'id' menjadi 'id_kegiatan'
    $query = mysqli_query($koneksi, "DELETE FROM tbl_kegiatan WHERE id_kegiatan='$id'");

    if($query){
        // 4. Jika berhasil, lempar kembali ke dashboard admin
        header("location:admin_dashboard.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    // Jika tidak ada ID yang dikirim, kembali ke dashboard
    header("location:admin_dashboard.php");
}
?>