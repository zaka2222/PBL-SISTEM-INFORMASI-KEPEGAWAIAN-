-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2022 pada 01.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_keluarga` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alamat_rmh` text NOT NULL,
  `file` varchar(225) NOT NULL,
  `notif_kel` enum('T','Sudah Mengisi Data Keluarga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_keluarga`
--

INSERT INTO `data_keluarga` (`id_keluarga`, `nip_nup`, `nik`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `status`, `alamat_rmh`, `file`, `notif_kel`) VALUES
(1, '12345678910', '08898971', 'Udin', 'Laki-laki', 'Ketapang', '2022-03-12', 'Pelajar', 'Anak', 'Jl.Merdeka', '12345678910-0889897-Udin-awd.pdf', 'T'),
(10, '15062003', '1234567', 'SITI AISYAH', 'Perempuan', 'ketapang', '1989-04-12', 'Ibu Rumah Tangga', 'Ibu', 'JL. Mayjend Sutoyo', '', 'T'),
(22, '12345678910', '1112', 'wqq', 'Perempuan', 'Ketapang', '2022-05-31', 'pegawai', 'Suami', 'dawdawfaaf', '12345678910-1112-wqq-awd.pdf', 'T'),
(26, '09909', '163222', 'Karu', 'Perempuan', 'Ketapang', '2022-07-01', 'Kariawan', 'Saudara', 'Jl. Ketapang', '09909-163222-Karu_www.pdf', 'T'),
(27, '09909', '666', 'Sanji', 'Laki-laki', 'Noersblue', '2022-07-03', 'Pelajar', 'Suami', 'Jl. ketapang', '09909-666-Sanji_koo.pdf', 'T'),
(29, '12345678910', '3334141', 'CJ', 'Laki-laki', 'San Andreas', '2022-07-03', 'Preman', 'Anak', 'Jl. SA', '12345678910-3334141-CJ_www.pdf', 'Sudah Mengisi Data Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip_nup` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pegawai` varchar(60) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(60) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `status_pernikahan` varchar(25) NOT NULL,
  `no_surat_nikah` varchar(225) NOT NULL,
  `tanggal_nikah` date NOT NULL,
  `no_surat_cerai` varchar(225) NOT NULL,
  `tanggal_cerai` date NOT NULL,
  `alamat_rmh` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status_pegawai` varchar(25) NOT NULL,
  `jmlh_anak` varchar(25) NOT NULL,
  `foto_pegawai` varchar(225) NOT NULL,
  `file_ktp` varchar(225) NOT NULL,
  `file_kk` varchar(225) NOT NULL,
  `no_bpjs_kesehatan` varchar(13) NOT NULL,
  `no_bpjs_ketenagakerjaan` varchar(13) NOT NULL,
  `no_sk_nidn` varchar(20) NOT NULL,
  `tmt_nidn` date NOT NULL,
  `tgl_sk_nidn` date NOT NULL,
  `no_sk_ntik` varchar(20) NOT NULL,
  `tmt_ntik` date NOT NULL,
  `tgl_sk_ntik` date NOT NULL,
  `ganti_sandi` enum('T','Y') NOT NULL,
  `notif` enum('T','Y') NOT NULL,
  `notif_foto` enum('T','Sudah Ganti Foto') NOT NULL,
  `notif_profil` enum('T','Sudah Mengisi Profil') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip_nup`, `password`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_ktp`, `no_kk`, `npwp`, `status_pernikahan`, `no_surat_nikah`, `tanggal_nikah`, `no_surat_cerai`, `tanggal_cerai`, `alamat_rmh`, `no_hp`, `email`, `status_pegawai`, `jmlh_anak`, `foto_pegawai`, `file_ktp`, `file_kk`, `no_bpjs_kesehatan`, `no_bpjs_ketenagakerjaan`, `no_sk_nidn`, `tmt_nidn`, `tgl_sk_nidn`, `no_sk_ntik`, `tmt_ntik`, `tgl_sk_ntik`, `ganti_sandi`, `notif`, `notif_foto`, `notif_profil`) VALUES
('010101', 'la123', 'Lani', 'ganggang', '2022-07-05', 'perempuan', 'Khonghucu', '124343432', '124124545453', '345345345353', 'Menikah', '1332', '2022-07-28', '434342', '2022-07-19', 'jliugvuyvuyguyv', '08908908', 'fwefw@FSEFSEFS', 'PNS', '1', '010101-komputer.jpg', '', '', '', '', '088', '2022-07-13', '2022-08-03', '0999', '2022-07-11', '2022-07-11', 'Y', 'Y', 'T', 'T'),
('09909', 'ash123', 'Asha', 'ketapang', '2001-09-13', 'perempuan', 'Islam', '13465768728525', '257257852387367', '123456', 'Menikah', '2334454545', '2022-03-16', '', '0000-00-00', 'jl. mayjend sutoyo', '0897589374837', 'asha12@gmail.com', 'PNS', '', 'sample admin MYDATA POLITAP.png', '09909-Asha-Screenshot (4).png', '', '', '', '2131231', '2022-07-22', '2022-07-31', '231231', '2022-07-08', '2022-07-09', 'T', 'Y', 'Sudah Ganti Foto', 'Sudah Mengisi Profil'),
('12345678910', 'dus123', 'Dustin Tifani', 'Kayong', '2011-12-12', 'laki-laki', 'Lainnya', '1234567891', '1222222222', '1233333333', 'Belum Menikah', '1011', '2022-03-12', '', '0000-00-00', 'Jl.Kemerdekaan', '0876543212', 'dustin@gmail.com', 'Non-ASN', '', '12345678910-foto.jpg', '12345678910-Dustin Tifani-Materi IAD.pdf', '12345678910-Dustin Tifani-awd.pdf', '0003123129414', '0014242814012', '121', '2022-05-01', '2022-05-03', '212', '2022-07-31', '2022-07-31', 'T', 'Y', 'Sudah Ganti Foto', 'Sudah Mengisi Profil'),
('15062003', 'zak123', 'Zakaria', 'Ketapang', '2002-08-13', 'laki-laki', 'Islam', '1122334455', '1122334455', '1122334455', 'Belum Menikah', '01', '2012-11-13', '01', '2022-05-17', 'JL. Mayjend Sutoyo', '081234567890', 'zaka123@gmail.com', 'PNS', '0', 'SYAKIR.jpg', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Y', 'Y', 'T', 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sk`
--

CREATE TABLE `data_sk` (
  `id_sk` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `jenis_sk` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tmt` date NOT NULL,
  `tgl_sk` date NOT NULL,
  `file_sk` varchar(225) NOT NULL,
  `notif_sk` enum('T','Sudah Mengisi Data') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sk`
--

INSERT INTO `data_sk` (`id_sk`, `nip_nup`, `jenis_sk`, `nomor`, `tmt`, `tgl_sk`, `file_sk`, `notif_sk`) VALUES
(1, '12345678910', 'SK Penyesuaian Ijazah', '0116', '2022-02-01', '2022-03-01', '12345678910-SK Penyesuaian Ijazah-vxvz.pdf', 'T'),
(3, '12345678910', 'SK Penyesuaian Masa', '00111', '2022-04-01', '2022-04-02', '12345678910-Dustin Tifani-SK Penyesuaian Masa-awd.pdf', 'T'),
(4, '12345678910', 'SK Inpassing', '015666', '2022-05-07', '2022-05-07', '12345678910-Dustin Tifani-SK Inpassing-vxvz.pdf', 'T'),
(5, '12345678910', 'SK Kenaikan Pangkat', '3456', '2022-02-27', '2022-02-28', '12345678910-Dustin Tifani-SK Kenaikan Pangkat-Materi IAD.pdf', 'T'),
(6, '12345678910', 'SK Mutasi', '55551', '2022-06-10', '2022-06-10', '12345678910-Dustin Tifani-SK Mutasi-awd.pdf', 'T'),
(18, '12345678910', 'SK Capeg', '7712', '2022-03-01', '2022-03-01', '12345678910-Dustin Tifani-SK Capeg-awd.pdf', 'T'),
(30, '15062003', 'SK Penyesuaian Ijazah', '673826428', '2022-04-21', '2022-04-15', '15062003-Zakaria-SK Penyesuaian Ijazah-IMG-20220403-WA0004.jpg', 'T'),
(31, '15062003', 'SK Mutasi', '123', '2012-03-12', '2020-06-06', '15062003-Zakaria-SK Mutasi-Screenshot (4).png', 'T'),
(32, '12345678910', 'SK Tetap', '001211', '2022-05-02', '2022-05-01', '12345678910-Dustin Tifani-SK Tetap-vxvz.pdf', 'T'),
(34, '12345678910', 'SK Penyesuaian Ijazah', '1214', '2022-05-11', '2022-05-19', '12345678910-Dustin Tifani-SK Penyesuaian Ijazah-vxvz.pdf', 'Sudah Mengisi Data'),
(35, '12345678910', 'SK Capeg', '333', '2022-05-20', '2022-05-04', '12345678910-Dustin Tifani-SK Capeg-awd.pdf', 'T'),
(36, '12345678910', 'SK Tetap', '4545', '2022-05-11', '2022-05-12', '12345678910-Dustin Tifani-SK Tetap-awd.pdf', 'T'),
(37, '12345678910', 'SK Penyesuaian Masa', '00122', '2022-05-19', '2022-05-19', '12345678910-Dustin Tifani-SK Penyesuaian Masa-awd.pdf', 'T'),
(38, '12345678910', 'SK Inpassing', '11112', '2022-05-18', '2022-05-31', '12345678910-Dustin Tifani-SK Inpassing-vxvz.pdf', 'T'),
(39, '12345678910', 'SK Kenaikan Pangkat', '3334', '2022-05-26', '2022-05-26', '12345678910-Dustin Tifani-SK Kenaikan Pangkat-vxvz.pdf', 'T'),
(40, '12345678910', 'SK Mutasi', '6666', '2022-05-18', '2022-05-19', '12345678910-Dustin Tifani-SK Mutasi-awd.pdf', 'T'),
(44, '09909', 'SK Penyesuaian Ijazah', '111', '2022-07-01', '2022-07-02', '09909-Asha-SK Penyesuaian Ijazah-koo.pdf', 'Sudah Mengisi Data'),
(45, '09909', 'SK Penyesuaian Ijazah', '222', '2022-07-03', '2022-07-04', '09909-Asha-SK Penyesuaian Ijazah-www.pdf', 'Sudah Mengisi Data'),
(46, '09909', 'SK Capeg', '333', '2022-07-05', '2022-07-06', '09909-Asha-SK Capeg-koo.pdf', 'Sudah Mengisi Data'),
(47, '09909', 'SK Capeg', '444', '2022-07-06', '2022-07-07', '09909-Asha-SK Capeg-www.pdf', 'Sudah Mengisi Data'),
(48, '09909', 'SK Tetap', '555', '2022-07-10', '2022-07-11', '09909-Asha-SK Tetap-www.pdf', 'Sudah Mengisi Data'),
(49, '09909', 'SK Tetap', '666', '2022-07-14', '2022-07-15', '09909-Asha-SK Tetap-koo.pdf', 'Sudah Mengisi Data'),
(50, '09909', 'SK Penyesuaian Masa', '777', '2022-07-10', '2022-07-19', '09909-Asha-SK Penyesuaian Masa-koo.pdf', 'Sudah Mengisi Data'),
(51, '09909', 'SK Inpassing', '888', '2022-07-24', '2022-07-24', '09909-Asha-SK Inpassing-www.pdf', 'Sudah Mengisi Data'),
(52, '09909', 'SK Kenaikan Pangkat', '999', '2022-07-17', '2022-07-18', '09909-Asha-SK Kenaikan Pangkat-koo.pdf', 'Sudah Mengisi Data'),
(53, '09909', 'SK Mutasi', '000', '2022-07-25', '2022-07-25', '09909-Asha-SK Mutasi-www.pdf', 'Sudah Mengisi Data'),
(54, '12345678910', 'SK Capeg', '6665', '2022-07-10', '2022-07-11', '12345678910-Dustin Tifani-SK Capeg-koo.pdf', 'Sudah Mengisi Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `riwayat_gol` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `notif_gol` enum('T','Sudah Mengisi Data Golongan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id_gol`, `nip_nup`, `riwayat_gol`, `pangkat`, `notif_gol`) VALUES
(1, '12345678910', 'iv', 'jen', 'T'),
(6, '09909', 'A12', 'FA', 'Sudah Mengisi Data Golongan'),
(7, '09909', 'QQQ', 'Q', 'Sudah Mengisi Data Golongan'),
(8, '15062003', 'SQW', 'WEW', 'Sudah Mengisi Data Golongan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_reg_serdos`
--

CREATE TABLE `no_reg_serdos` (
  `id_no_reg_serdos` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `tempat` text NOT NULL,
  `tahun_pendapatan` varchar(50) NOT NULL,
  `bidang_ilmu` varchar(50) NOT NULL,
  `notif_nrs` enum('T','Sudah Mengisi Data No. Registrasi Serdos') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `no_reg_serdos`
--

INSERT INTO `no_reg_serdos` (`id_no_reg_serdos`, `nip_nup`, `nomor`, `tgl`, `tempat`, `tahun_pendapatan`, `bidang_ilmu`, `notif_nrs`) VALUES
(2, '12345678910', '6661', '2022-03-12', 'Kayong1', '2035', 'Psikolog1', 'T'),
(7, '09909', '46', '2022-07-31', 'Dufan', '1999', 'Psikolog', 'Sudah Mengisi Data No. Registrasi Serdos'),
(8, '09909', '12', '2022-07-21', 'dawefef', '122131', 'cdawd', 'Sudah Mengisi Data No. Registrasi Serdos'),
(9, '15062003', '3546', '2022-07-19', 'fsese', '1234', '43rgrw', 'Sudah Mengisi Data No. Registrasi Serdos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_diklat`
--

CREATE TABLE `riwayat_diklat` (
  `id_riwayat_diklat` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `no_sertifikat` varchar(50) NOT NULL,
  `tgl_diklat` date NOT NULL,
  `nama_penyelenggara` varchar(50) NOT NULL,
  `jenis_diklat` varchar(50) NOT NULL,
  `notif_diklat` enum('T','Sudah Mengisi Data Riwayat Diklat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_diklat`
--

INSERT INTO `riwayat_diklat` (`id_riwayat_diklat`, `nip_nup`, `no_sertifikat`, `tgl_diklat`, `nama_penyelenggara`, `jenis_diklat`, `notif_diklat`) VALUES
(2, '12345678910', '6666', '2022-06-21', 'hahaha', 'hahah', 'T'),
(5, '09909', '121313', '2022-07-27', 'DAWD', 'DAW', 'Sudah Mengisi Data Riwayat Diklat'),
(6, '12345678910', '2111', '2022-07-04', 'AW', 'MBK', 'Sudah Mengisi Data Riwayat Diklat'),
(7, '12345678910', '2111', '2022-07-04', 'AWww', 'MBK', 'Sudah Mengisi Data Riwayat Diklat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_jabatan_aka_fung`
--

CREATE TABLE `riwayat_jabatan_aka_fung` (
  `id_riwayat_jabatan_AF` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `tgl_sk` date NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `notif_jaf` enum('T','Sudah Mengisi Data Riwayat Jabatan Akademi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_jabatan_aka_fung`
--

INSERT INTO `riwayat_jabatan_aka_fung` (`id_riwayat_jabatan_AF`, `nip_nup`, `tmt_jabatan`, `nama_jabatan`, `tgl_sk`, `no_sk`, `notif_jaf`) VALUES
(1, '12345678910', '2022-03-24', 'kura', '2022-03-24', '100', 'T'),
(5, '09909', '2022-07-13', 'SA', '2022-07-22', '123', 'Sudah Mengisi Data Riwayat Jabatan Akademi'),
(6, '12345678910', '2022-07-23', 'GTA', '2022-07-27', '1123', 'Sudah Mengisi Data Riwayat Jabatan Akademi'),
(7, '12345678910', '2022-07-23', 'GTAA', '2022-07-27', '1123', 'Sudah Mengisi Data Riwayat Jabatan Akademi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_jabatan_struktural`
--

CREATE TABLE `riwayat_jabatan_struktural` (
  `id_riwayat_jabatan_s` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `tgl_mulai` varchar(50) NOT NULL,
  `tgl_selesai` varchar(50) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `notif_js` enum('T','Sudah Mengisi Data Riwayat Jabatan Struktural') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_jabatan_struktural`
--

INSERT INTO `riwayat_jabatan_struktural` (`id_riwayat_jabatan_s`, `nip_nup`, `tgl_mulai`, `tgl_selesai`, `nama_jabatan`, `notif_js`) VALUES
(1, '12345678910', '2022-05-01', '2022-05-10', 'jen2', 'T'),
(4, '15062003', '2022-01-19', '2022-04-21', 'ahjskjdhsd', 'Sudah Mengisi Data Riwayat Jabatan Struktural'),
(6, '09909', '2022-07-12', '2022-07-23', 'ACAW', 'Sudah Mengisi Data Riwayat Jabatan Struktural'),
(7, '15062003', '2022-07-30', '2022-07-30', 'SA', 'Sudah Mengisi Data Riwayat Jabatan Struktural');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_pendidikan` int(13) NOT NULL,
  `nip_nup` varchar(25) NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `tgl_lulus` varchar(25) NOT NULL,
  `nama_universitas` varchar(50) NOT NULL,
  `tingkat_pendidikan` varchar(50) NOT NULL,
  `file_ijazah` varchar(225) NOT NULL,
  `notif_pend` enum('T','Sudah Mengisi Data Pendidikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_pendidikan`, `nip_nup`, `no_ijazah`, `tgl_lulus`, `nama_universitas`, `tingkat_pendidikan`, `file_ijazah`, `notif_pend`) VALUES
(1, '12345678910', '01011', '2022-03-01', 'UMP', 'S2', '12345678910-UMP-awd.pdf', 'T'),
(9, '12345678910', '1389', '2022-04-01', 'UNTAN', 'S3', '12345678910-UNTAN-Materi IAD.pdf', 'T'),
(12, '15062003', '566899673', '2022-04-14', 'Politeknik Negeri Ketapang', 'D3', '15062003-Politeknik Negeri Ketapang-awd.pdf', 'T'),
(13, '12345678910', '121210', '2022-05-30', 'KOLo', 'SMP', '12345678910-KOLo-vxvz.pdf', 'Sudah Mengisi Data Pendidikan'),
(14, '09909', '64366', '2022-07-06', 'Dareaf', 'SMA/SMK', '09909-Dareaf-koo.pdf', 'T'),
(15, '09909', '0000', '2022-07-01', 'Poli', 'D3', '09909-Poli-www.pdf', 'T');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip_nup`);

--
-- Indeks untuk tabel `data_sk`
--
ALTER TABLE `data_sk`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indeks untuk tabel `no_reg_serdos`
--
ALTER TABLE `no_reg_serdos`
  ADD PRIMARY KEY (`id_no_reg_serdos`);

--
-- Indeks untuk tabel `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  ADD PRIMARY KEY (`id_riwayat_diklat`);

--
-- Indeks untuk tabel `riwayat_jabatan_aka_fung`
--
ALTER TABLE `riwayat_jabatan_aka_fung`
  ADD PRIMARY KEY (`id_riwayat_jabatan_AF`);

--
-- Indeks untuk tabel `riwayat_jabatan_struktural`
--
ALTER TABLE `riwayat_jabatan_struktural`
  ADD PRIMARY KEY (`id_riwayat_jabatan_s`);

--
-- Indeks untuk tabel `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `data_sk`
--
ALTER TABLE `data_sk`
  MODIFY `id_sk` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_gol` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `no_reg_serdos`
--
ALTER TABLE `no_reg_serdos`
  MODIFY `id_no_reg_serdos` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  MODIFY `id_riwayat_diklat` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `riwayat_jabatan_aka_fung`
--
ALTER TABLE `riwayat_jabatan_aka_fung`
  MODIFY `id_riwayat_jabatan_AF` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `riwayat_jabatan_struktural`
--
ALTER TABLE `riwayat_jabatan_struktural`
  MODIFY `id_riwayat_jabatan_s` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_pendidikan` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
