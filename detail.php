<?php 
include 'koneksi.php'; 

// 1. Tangkap ID dari URL
if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    // Jika tidak ada ID, balikkan ke index
    header("location:index.php");
}

// 2. Ambil data spesifik berdasarkan id_kegiatan
$query = mysqli_query($koneksi, "SELECT * FROM tbl_kegiatan WHERE id_kegiatan='$id'");
$d = mysqli_fetch_array($query);

// Jika data tidak ditemukan
if(!$d){
    echo "<script>alert('Data tidak ditemukan!'); window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $d['judul']; ?> - SMKN 1 Dlanggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bi-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-purple: #6a11cb;
            --soft-purple: #f3f0ff;
        }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f8f9fa; 
        }
        .navbar {
            background: #6a11cb !important;
        }
        .detail-card {
            background: white;
            border-radius: 30px;
            border: none;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .img-detail {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 20px;
        }
        .content-area {
            line-height: 1.8;
            color: #444;
            font-size: 1.1rem;
            white-space: pre-line; /* Agar enter di database terbaca di HTML */
        }
        .badge-date {
            background: var(--soft-purple);
            color: var(--primary-purple);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            display: inline-block;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/logo_smk.jpeg" alt="Logo" width="35" class="me-2 rounded-circle">
                <span class="fw-bold">SMKN 1 DLANGGU</span>
            </a>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Kegiatan</li>
                    </ol>
                </nav>

                <div class="detail-card p-4 p-md-5">
                    <div class="mb-4">
                        <div class="badge-date mb-3">
                            📅 <?php echo date('d F Y', strtotime($d['tanggal_kegiatan'])); ?>
                        </div>
                        <h1 class="fw-bold display-5" style="color: #2d3436;"><?php echo $d['judul']; ?></h1>
                    </div>

                    <div class="mb-5 text-center">
                        <?php if($d['gambar'] != "" && file_exists("assets/".$d['gambar'])): ?>
                            <img src="assets/<?php echo $d['gambar']; ?>" class="img-detail shadow-sm" alt="Berita">
                        <?php else: ?>
                            <img src="assets/logo.jpeg" class="img-detail shadow-sm" alt="Default">
                        <?php endif; ?>
                    </div>

                    <div class="content-area">
                        <?php echo $d['deskripsi']; ?>
                    </div>

                    <hr class="my-5 opacity-10">

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="index.php" class="btn btn-outline-secondary px-4 rounded-pill">
                             Kembali ke Beranda
                        </a>
                        <div class="text-muted small">
                            Penulis: <strong>Admin Sekolah</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white py-4 border-top">
        <div class="container text-center">
            <p class="text-muted small mb-0">&copy; 2026 SMK Negeri 1 Dlanggu. Web Programmer: <strong>Afrelia Ayuningtiyas</strong></p>
        </div>
    </footer>

</body>
</html>