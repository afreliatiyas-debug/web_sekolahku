<?php
session_start();
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// PERBAIKAN: Pastikan nama tabel 'tbl_kegiatan' dan kolom 'id_kegiatan' sesuai database
$query = mysqli_query($koneksi, "SELECT * FROM tbl_kegiatan WHERE id_kegiatan='$id'");

// PERBAIKAN: Gunakan variabel yang sama ($query) di dalam mysqli_fetch_array
$d = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kegiatan - SMKN 1 Dlanggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm" style="max-width: 600px; margin: auto;">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Edit Data Kegiatan</h5>
            </div>
            <div class="card-body">
                <form action="proses_update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_kegiatan" value="<?php echo $d['id_kegiatan']; ?>">

                    <div class="mb-3">
                        <label class="form-label">Judul Kegiatan</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo $d['judul']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="isi" class="form-control" rows="5" required><?php echo $d['deskripsi']; ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $d['tanggal_kegiatan']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gambar Saat Ini</label><br>
                        <?php if($d['gambar'] != ""): ?>
                            <img src="assets/<?php echo $d['gambar']; ?>" width="100" class="mb-2 rounded shadow-sm">
                        <?php endif; ?>
                        <input type="file" name="gambar" class="form-control">
                        <small class="text-muted">*Kosongkan jika tidak ingin mengubah gambar</small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="admin_dashboard.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>