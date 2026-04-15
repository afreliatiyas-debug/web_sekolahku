<?php
session_start();
include 'koneksi.php'; 

// Cek apakah sudah login
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - SMKN 1 Dlanggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }
        body { 
            background-color: #f4f7fe; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-admin {
            background: var(--primary-gradient);
            padding: 15px 0;
        }
        .main-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .table thead th {
            background-color: #f8f9fa;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            color: #6c757d;
            border-top: none;
        }
        .btn-add {
            background: var(--primary-gradient);
            border: none;
            transition: 0.3s;
        }
        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(106, 17, 203, 0.3);
            color: white;
        }
        .img-preview {
            width: 70px;
            height: 45px;
            object-fit: cover;
            border-radius: 8px;
        }
        .status-badge {
            font-size: 0.75rem;
            padding: 5px 12px;
            border-radius: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-admin mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <i class="bi bi-shield-lock-fill me-2"></i> ADMIN PANEL
        </a>
        <div class="ms-auto d-flex align-items-center">
            <span class="text-white me-3 d-none d-md-block small">Selamat datang, <strong>Admin</strong></span>
            <a href="logout.php" class="btn btn-light btn-sm px-3 fw-bold rounded-pill text-primary" onclick="return confirm('Apakah Anda yakin ingin logout?')">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-8">
            <h3 class="fw-bold text-dark">Manajemen Konten</h3>
            <p class="text-muted small">Kelola semua informasi kegiatan sekolah SMKN 1 Dlanggu di sini.</p>
        </div>
        <div class="col-md-4 text-md-end">
            <a href="tambah_kegiatan.php" class="btn btn-primary btn-add px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-plus-circle me-2"></i>Tambah Kegiatan Baru
            </a>
        </div>
    </div>

    <div class="card main-card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ps-4">No</th>
                            <th>Gambar</th>
                            <th>Judul Kegiatan</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");
                        
                        if(!$query || mysqli_num_rows($query) == 0) {
                            echo "<tr><td colspan='5' class='text-center py-5 text-muted'><i class='bi bi-inbox fs-2 d-block mb-2'></i>Belum ada data kegiatan yang tersedia.</td></tr>";
                        } else {
                            while($d = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td class="ps-4 text-muted"><?php echo $no++; ?></td>
                            <td>
                                <?php if($d['gambar'] != "" && file_exists("assets/".$d['gambar'])): ?>
                                    <img src="assets/<?php echo $d['gambar']; ?>" class="img-preview shadow-sm border">
                                <?php else: ?>
                                    <div class="img-preview bg-light d-flex align-items-center justify-content-center border">
                                        <i class="bi bi-image text-muted"></i>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="fw-bold text-dark"><?php echo $d['judul']; ?></div>
                                <span class="badge bg-soft-primary text-primary border border-primary-subtle status-badge">Published</span>
                            </td>
                            <td>
                                <div class="small text-muted"><i class="bi bi-calendar3 me-2"></i><?php echo date('d M Y', strtotime($d['tanggal_kegiatan'])); ?></div>
                            </td>
                            <td class="text-center pe-4">
                                <div class="btn-group shadow-sm" role="group">
                                    <a href="edit.php?id=<?php echo $d['id_kegiatan']; ?>" class="btn btn-outline-warning btn-sm px-3" title="Edit Data">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="hapus.php?id=<?php echo $d['id_kegiatan']; ?>" class="btn btn-outline-danger btn-sm px-3" onclick="return confirm('Hapus data ini secara permanen?')" title="Hapus Data">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php 
                            } 
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <footer class="text-center mt-5 pb-5 text-muted">
        <hr class="w-25 mx-auto opacity-10 mb-4">
        <p class="mb-1 small">Sistem Informasi Kegiatan SMKN 1 Dlanggu &copy; 2026</p>
        <p class="small fw-bold">Developer: <span class="text-primary"><?php echo "Afrelia Ayuningtiyas"; ?></span></p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>