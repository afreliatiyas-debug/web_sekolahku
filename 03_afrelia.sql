-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2026 at 12:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `03_afrelia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'Dlanggu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_kegiatan` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `judul`, `deskripsi`, `gambar`, `tanggal_kegiatan`) VALUES
(3, 'Profil & Data Sekolah SMKN 1 DLANGGU, Kab. Mojokerto, Jawa Timur', 'SMKN 1 DLANGGU merupakan salah satu sekolah jenjang SMK berstatus Negeri yang berada di wilayah Kec. Dlanggu, Kab. Mojokerto, Jawa Timur. SMKN 1 DLANGGU didirikan pada tanggal 22 April 2004 dengan Nomor SK Pendirian 188.45/392/HK/416-012/2004 yang berada dalam naungan Kementerian Pendidikan dan Kebudayaan. Dalam kegiatan pembelajaran, sekolah yang memiliki 1519 siswa ini dibimbing oleh 81 guru yang profesional di bidangnya. Kepala Sekolah SMKN 1 DLANGGU saat ini adalah Prapti Widodo. Operator yang bertanggung jawab adalah Bramantyo Wahyudi Wicaksono.\r\n\r\nSMKN 1 DLANGGU merupakan salah satu sekolah jenjang SMK di wilayah Kab. Mojokerto yang menawarkan  pendidikan berkualitas dengan terakreditasi A dan sertifikasi ISO 9001:2000. Dengan adanya keberadaan SMKN 1 DLANGGU, diharapkan dapat memberikan kontribusi dalam mencerdaskan anak bangsa di wilayah Kec. Dlanggu, Kab. Mojokerto.', 'FOTO.JPG', '2026-04-14 17:00:00'),
(4, 'SMKN 1 Dlanggu, Kabupaten Mojokerto', 'SMKN 1 Dlanggu adalah sebuah sekolah Sekolah Menengah Kejuruan negeri yang alamatnya di Jl. A. Yani 1 Ds. Pohkecik Kec. Dlanggu Kab. Mojokerto, Kab. Mojokerto.MK negeri ini memulai kegiatan pendidikan belajar mengajarnya pada tahun 2004.Pada saat ini SMK Negeri 1 Dlanggu memakai panduan kurikulum belajar pemerintah yaitu SMK 2013 REV. Sistem Informatika, Jaringan dan Aplikasi. SMKN 1 Dlanggu dibawah kepemimpinan seorang kepala sekolah yang bernama Irni Istiqomahdan operator sekolah Bramantyo Wahyudi Wicaksono.', '2019-09-21.jpg', '2026-04-15 17:00:00'),
(5, 'Tujuan Kunjungan Industri: Manfaat dan Implementasi untuk Siswa SMK', ' Kunjungan industri merupakan sebuah program pembelajaran yang dirancang khusus untuk siswa Sekolah Menengah Kejuruan (SMK). Program ini memungkinkan para peserta didik untuk mengunjungi dan mengamati secara langsung operasional sebuah perusahaan atau pabrik dalam industri tertentu. Tujuan utamanya adalah memberikan pengalaman nyata dan pemahaman mendalam tentang dunia kerja yang relevan dengan bidang studi mereka.', '2Memantapkan-Pengetahuan-Melalui-Kunjungan-Industri.jpg', '2026-04-14 17:00:00'),
(6, 'Pemilihan ketua osis', 'Pemilihan ketua OSIS adalah momen penting dalam kehidupan sekolah yang membutuhkan persiapan dan pelaksanaan yang baik. Dalam artikel ini, kita akan membahas susunan acara pemilihan ketua OSIS secara detail, mulai dari tahap persiapan hingga penutupan. Dengan mengikuti panduan ini, diharapkan pemilihan ketua OSIS di sekolah Anda dapat berjalan dengan lancar dan sukses.', 'OIP (1).jpg', '2026-04-14 17:00:00'),
(7, 'Profil & Data Sekolah SMKN 1 DLANGGU, Kab. Mojokerto, Jawa Timur', 'SMKN 1 DLANGGU merupakan salah satu sekolah jenjang SMK berstatus Negeri yang berada di wilayah Kec. Dlanggu, Kab. Mojokerto, Jawa Timur. SMKN 1 DLANGGU didirikan pada tanggal 22 April 2004 dengan Nomor SK Pendirian 188.45/392/HK/416-012/2004 yang berada dalam naungan Kementerian Pendidikan dan Kebudayaan. Dalam kegiatan pembelajaran, sekolah yang memiliki 1519 siswa ini dibimbing oleh 81 guru yang profesional di bidangnya. Kepala Sekolah SMKN 1 DLANGGU saat ini adalah Prapti Widodo. Operator yang bertanggung jawab adalah Bramantyo Wahyudi Wicaksono.\r\n\r\nSMKN 1 DLANGGU merupakan salah satu sekolah jenjang SMK di wilayah Kab. Mojokerto yang menawarkan pendidikan berkualitas dengan terakreditasi A dan sertifikasi ISO 9001:2000. Dengan adanya keberadaan SMKN 1 DLANGGU, diharapkan dapat memberikan kontribusi dalam mencerdaskan anak bangsa di wilayah Kec. Dlanggu, Kab. Mojokerto.', 'FOTO.JPG', '2026-04-14 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
