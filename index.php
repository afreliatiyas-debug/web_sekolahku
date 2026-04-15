<?php 
include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Resmi - SMK Negeri 1 Dlanggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-purple: #6a11cb;
            --secondary-purple: #2575fc;
            --soft-purple: #f3f0ff;
            --text-dark: #2d3436;
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #ffffff; 
            color: var(--text-dark);
        }

        /* Navbar Kece */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .navbar-brand span { color: var(--primary-purple); font-weight: 800; }
        .nav-link { color: #555 !important; font-weight: 600; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { color: var(--primary-purple) !important; }

        /* Hero Section dengan Background FOTO.jpg - Versi Proporsional */
.hero-section {
    background: linear-gradient(rgba(106, 17, 203, 0.7), rgba(37, 117, 252, 0.7)), 
                url('assets/FOTO.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    
    /* Menambah padding agar area foto lebih tinggi dan tidak sesak */
    padding: 180px 0; 
    color: white;

    /* Menyesuaikan ellipse menjadi 120% agar lengkungannya lebih landai 
       sehingga bagian bawah foto tidak terpotong terlalu banyak */
    clip-path: ellipse(120% 100% at 50% 0%); 
    
    margin-bottom: 50px;
    transition: all 0.3s ease;
}

/* Tambahan agar teks lebih jelas di atas foto */
.hero-section h1 {
    text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
}
        /* Card Berita Modern */
        .card-news {
            border: none;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .card-news:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(106, 17, 203, 0.1);
        }
        .img-wrapper {
            height: 220px;
            overflow: hidden;
            border-radius: 24px 24px 0 0;
            position: relative;
        }
        .img-wrapper img {
            width: 100%; height: 100%; object-fit: cover;
            transition: 0.5s;
        }
        .card-news:hover img { transform: scale(1.1); }

        .date-tag {
            position: absolute;
            top: 20px;
            left: 20px;
            background: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--primary-purple);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Button Custom */
        .btn-purple {
            background: linear-gradient(to right, var(--primary-purple), var(--secondary-purple));
            border: none;
            color: white;
            padding: 12px 25px;
            border-radius: 15px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-purple:hover {
            transform: scale(1.05);
            color: white;
            box-shadow: 0 10px 20px rgba(106, 17, 203, 0.3);
        }

        .btn-login {
            background: var(--soft-purple);
            color: var(--primary-purple) !important;
            border-radius: 12px;
            font-weight: 700;
        }

        /* Footer */
        .main-footer {
            background: #1a1a1a;
            color: #ccc;
            padding: 60px 0 30px;
        }
        .contact-box {
            background: var(--soft-purple);
            border-radius: 25px;
            padding: 40px;
            border: 1px solid rgba(106, 17, 203, 0.1);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/logo_smk.jpeg" alt="Logo" width="45" class="me-2 rounded-circle">
                <span>SMKN 1 DLANGGU</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="nav-link btn btn-login px-4 mt-2 mt-lg-0" href="login.php">
                            <i class="bi bi-person-fill me-1"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Selamat Datang di Portal Kegiatan</h1>
            <p class="lead mb-4 opacity-75">Inovatif, Mandiri, dan Berkarakter. Temukan informasi terbaru seputar aktivitas siswa SMKN 1 Dlanggu.</p>
            <a href="#berita" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold text-primary">Jelajahi Berita</a>
        </div>
    </section>

    <div class="container" id="berita">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h6 class="text-primary fw-bold text-uppercase mb-2">Informasi Terbaru</h6>
                <h2 class="fw-bold m-0">Kabar Terkini Kegiatan Sekolah</h2>
            </div>
            <div class="d-none d-md-block" style="height: 2px; flex-grow: 1; background: #eee; margin: 0 30px 10px;"></div>
        </div>

        <div class="row">
            <?php 
            $query = "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC";
            $ambil = mysqli_query($koneksi, $query);

            if(!$ambil || mysqli_num_rows($ambil) == 0) {
                echo "<div class='col-12 text-center py-5 text-muted'>Belum ada informasi yang dipublikasikan.</div>";
            } else {
                while($d = mysqli_fetch_array($ambil)){
            ?>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card card-news h-100">
                    <div class="img-wrapper">
                        <div class="date-tag"><?php echo date('d M Y', strtotime($d['tanggal_kegiatan'])); ?></div>
                        <?php if($d['gambar'] != "" && file_exists("assets/".$d['gambar'])): ?>
                            <img src="assets/<?php echo $d['gambar']; ?>" alt="Berita">
                        <?php else: ?>
                            <img src="assets/logo.jpeg" alt="Default">
                        <?php endif; ?>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-bold mb-3" style="line-height: 1.5; height: 3em; overflow: hidden;">
                            <?php echo $d['judul']; ?>
                        </h5>
                        <p class="text-muted small mb-4">
                            <?php echo substr(strip_tags($d['deskripsi']), 0, 100); ?>...
                        </p>
                        <div class="mt-auto">
                            <a href="detail.php?id=<?php echo $d['id_kegiatan']; ?>" class="btn btn-purple w-100">
                                Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                } 
            }
            ?>
        </div>
    </div>

    <div class="container my-5" id="kontak">
    <div class="contact-box shadow-lg rounded-5 p-4 p-md-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7">
                <h6 class="text-primary fw-bold text-uppercase mb-2">Hubungi Kami</h6>
                <h2 class="fw-bold mb-4">Akses Informasi & Lokasi</h2>
                
                <div class="mb-4 d-flex align-items-start">
                    <div class="contact-info-icon me-3">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Alamat Sekolah</h6>
                        <p class="text-muted mb-0">Jl. Jend. Ahmad Yani No. 1, Desa Pohkecik, Kec. Dlanggu, Kab. Mojokerto, Jawa Timur.</p>
                    </div>
                </div>

                <div class="mb-4 d-flex align-items-start">
                    <div class="contact-info-icon me-3">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Call Center Resmi</h6>
                        <p class="text-muted mb-0">(0321) 510266</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="contact-info-icon me-3">
                        <i class="bi bi-envelope-at-fill"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Email Informasi</h6>
                        <p class="text-muted mb-0">info@smkn1dlanggu.sch.id</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="developer-card p-4 rounded-4 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-soft-purple p-2 rounded-circle me-3">
                            <i class="bi bi-code-slash text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold m-0">Web Programmer</h5>
                    </div>
                    <hr class="opacity-10">
                    <div class="py-2">
                        <h4 class="fw-bold text-dark mb-1">Afrelia Ayuningtiyas</h4>
                        <p class="text-primary small fw-bold mb-3"><i class="bi bi-patch-check-fill me-1"></i> Student at SMKN 1 Dlanggu</p>
                        <div class="d-flex gap-2">
                            <span class="badge bg-light text-dark border p-2 px-3 rounded-pill">Junior Web Programmer</span>
                            <span class="badge bg-light text-dark border p-2 px-3 rounded-pill">Project 2026</span>
                        </div>
                    </div>
                </div>
                
                <p class="text-center text-muted small mt-4">
                    <i class="bi bi-info-circle me-1"></i> Dikembangkan untuk kebutuhan Sistem Informasi Kegiatan Sekolah.
                </p>
            </div>
        </div>
    </div>
</div>

    <footer class="main-footer">
        <div class="container">
            <div class="row border-bottom border-secondary pb-4 mb-4">
                <div class="col-md-6 text-center text-md-start">
                    <h5 class="text-white fw-bold">SMK Negeri 1 Dlanggu</h5>
                    <p class="small">Sistem Informasi Kegiatan Sekolah - Wadah informasi digital terpercaya.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="text-center">
                <p class="small m-0">&copy; 2026 SMK Negeri 1 Dlanggu. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>