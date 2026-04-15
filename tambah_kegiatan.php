<?php
// Mengambil tanggal hari ini untuk default value
$tanggal_hari_ini = date('Y-m-d');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan - SMKN 1 Dlanggu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f4f7fe; 
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px 0;
        }
        .form-card {
            background: #ffffff;
            border: none;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 700px;
            margin: auto;
        }
        .header-box {
            background: var(--primary-gradient);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-label {
            font-weight: 600;
            color: #2d3436;
            margin-bottom: 8px;
        }
        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
            background-color: #f8fafc;
        }
        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(106, 17, 203, 0.1);
            border-color: #6a11cb;
            background-color: #fff;
        }
        .btn-save {
            background: var(--primary-gradient);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 12px;
            font-weight: 700;
            transition: all 0.3s;
        }
        .btn-save:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(106, 17, 203, 0.2);
            color: white;
        }
        .btn-cancel {
            background: #f1f5f9;
            color: #64748b;
            border: none;
            padding: 12px 30px;
            border-radius: 12px;
            font-weight: 600;
        }
        .input-group-text {
            background-color: #f8fafc;
            border-radius: 12px 0 0 12px;
            border-color: #e2e8f0;
            color: #6a11cb;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-card">
            <div class="header-box shadow-sm">
                <h4 class="m-0 fw-bold"><i class="bi bi-plus-circle-fill me-2"></i>Tambah Kegiatan Baru</h4>
                <p class="small m-0 opacity-75 mt-1">Publikasikan informasi terbaru untuk SMKN 1 Dlanggu</p>
            </div>
            
            <form method="post" action="proses_tambah.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 mb-4">
                        <label class="form-label">Judul Kegiatan</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-type"></i></span>
                            <input type="text" name="judul" class="form-control" maxlength="400" placeholder="Contoh: Kunjungan Industri 2026" required>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
    <label class="form-label">Tanggal Publikasi</label>
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
        <input type="date" 
               name="tanggal" 
               class="form-control" 
               value="<?php echo date('Y-m-d'); ?>" 
               min="<?php echo date('Y-m-d'); ?>" 
               required>
    </div>
    <div class="form-text text-muted small">Hanya bisa memilih tanggal hari ini atau ke depan.</div>
</div>

                    <div class="col-12 mb-4">
                        <label class="form-label">Deskripsi Lengkap</label>
                        <textarea name="isi" class="form-control" rows="6" placeholder="Tuliskan detail berita secara lengkap..." required></textarea>
                    </div>

                    <div class="col-12 mb-4">
                        <label class="form-label">Gambar Pendukung</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-image"></i></span>
                            <input type="file" name="gambar" class="form-control" accept="image/*">
                        </div>
                        <div class="form-text text-muted small">Disarankan aspek rasio 16:9 (Format: JPG, PNG, JPEG)</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="admin_dashboard.php" class="btn btn-cancel">
                        <i class="bi bi-arrow-left me-2"></i>Kembali
                    </a>
                    <button type="submit" class="btn btn-save shadow-sm">
                        <i class="bi bi-cloud-arrow-up-fill me-2"></i>Simpan & Publikasikan
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>