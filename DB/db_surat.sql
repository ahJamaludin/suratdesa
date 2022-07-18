-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2022 pada 01.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_adm` int(11) NOT NULL,
  `nama_adm` varchar(100) NOT NULL,
  `email_adm` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_adm`, `nama_adm`, `email_adm`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `Carik` varchar(100) NOT NULL,
  `Petinggi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_desa`
--

INSERT INTO `tbl_desa` (`id_desa`, `nama_desa`, `kecamatan`, `kabupaten`, `Carik`, `Petinggi`) VALUES
(1, 'Dongos', 'Kedung', 'Jepara', 'M. Soleh', 'Sudaim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keperluan`
--

CREATE TABLE `tbl_keperluan` (
  `id_keperluan` int(11) NOT NULL,
  `nama_keperluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keperluan`
--

INSERT INTO `tbl_keperluan` (`id_keperluan`, `nama_keperluan`) VALUES
(3, 'Surat Keterangan Usaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nama_kk` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `hubungan_keluarga` varchar(50) NOT NULL,
  `warga` varchar(50) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id`, `no_kk`, `nama_kk`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `hubungan_keluarga`, `warga`, `ayah`, `ibu`, `alamat`, `rt`, `rw`) VALUES
(14, '3320012012130000', 'MOH. SUNADI', '3320022602730000', 'LAKI-LAKI', 'SEMARANG', '1973-02-26', 'ISLAM', 'SLTA', 'KARYAWAN SWASTA', 'KAWIN', 'KEPALA KELUARGA', 'WNI', 'SUPADI', 'SUKASTI', 'DONGOS, RT.001 RW.001', '1', '1'),
(15, '3320012012130000', 'MOH. SUNADI', '3320022602730000', 'LAKI-LAKI', 'SEMARANG', '1973-02-26', 'ISLAM', 'SLTA', 'KARYAWAN SWASTA', 'KAWIN', 'KEPALA KELUARGA', 'WNI', 'SUPADI', 'SUKASTI', 'DONGOS, RT.001 RW.001', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_surat`
--

CREATE TABLE `tbl_surat` (
  `id_surat` int(11) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `nama_warga` varchar(100) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `NIK` int(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `keperluan` varchar(150) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `ttd` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_surat`
--

INSERT INTO `tbl_surat` (`id_surat`, `no_kk`, `nama_warga`, `tempat_lahir`, `tgl_lahir`, `NIK`, `jk`, `agama`, `status`, `pekerjaan`, `alamat`, `keperluan`, `keterangan`, `ttd`, `jabatan`) VALUES
(16, '3320120398239', 'Lelly Ermawati', 'Jepara', '2022-02-01', 1283718273, 'Perempuan', 'islam', 'Remaja', 'belum punya', 'pendosawalan Rt.12 Rw.3', 'Surat Keterangan Usaha', 'Sudah Dilihat', 'Sudaim', 'Carik'),
(17, '3320120398239', 'Lelly Ermawati', 'Jepara', '2022-02-01', 1283718273, 'Perempuan', 'islam', 'Remaja', 'belum punya', 'pendosawalan Rt.12 Rw.3', 'Surat Keterangan Usaha', 'Sudah Dilihat', 'M. Soleh', 'Petinggi'),
(18, '3320041234567890', 'Dindan Romadhoni', 'Jepara', '2022-02-01', 2147483647, 'Laki-Laki', 'islam', 'Remaja', 'belum punya', 'Rajekwesi Rt.12 Rw.3', '', 'Belum Dilihat', 'Belum Ada', 'Belum Ada'),
(19, '3320041234567890', 'Dindan Romadhoni', 'Jepara', '2022-02-01', 2147483647, 'Laki-Laki', 'islam', 'Remaja', 'belum punya', 'Rajekwesi Rt.12 Rw.3', 'Surat Keterangan Usaha', 'Sudah Dilihat', 'M. Soleh', 'Petinggi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `tbl_keperluan`
--
ALTER TABLE `tbl_keperluan`
  ADD PRIMARY KEY (`id_keperluan`);

--
-- Indeks untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_surat`
--
ALTER TABLE `tbl_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_desa`
--
ALTER TABLE `tbl_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_keperluan`
--
ALTER TABLE `tbl_keperluan`
  MODIFY `id_keperluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_surat`
--
ALTER TABLE `tbl_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
