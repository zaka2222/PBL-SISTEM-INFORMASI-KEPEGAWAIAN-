-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2022 pada 23.22
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
-- Database: `1`
--

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
  `alamat_rmh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_keluarga`
--

INSERT INTO `data_keluarga` (`id_keluarga`, `nip_nup`, `nik`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `status`, `alamat_rmh`) VALUES
(1, '12345678910', '0889898', 'Udin', 'Laki-laki', 'Ketapang', '2022-03-12', 'Pelajar', 'Saudara', 'Jl.Merdeka');

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
  `file_kk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip_nup`, `password`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_ktp`, `no_kk`, `npwp`, `status_pernikahan`, `no_surat_nikah`, `tanggal_nikah`, `no_surat_cerai`, `tanggal_cerai`, `alamat_rmh`, `no_hp`, `email`, `status_pegawai`, `jmlh_anak`, `foto_pegawai`, `file_ktp`, `file_kk`) VALUES
('122222', '123', 'Darianto', 'Pagar Timun', '2013-03-03', 'laki-laki', 'Kristen', '061234', '0606', '06010', 'Menikah', '696', '2022-03-01', '666', '2022-03-03', 'Jl. Sukaharja', '08979797', 'dar@gmail.com', 'PPPK', '5', 'dar.png', '', ''),
('12345678910', 'dus123', 'Dustin Tifani', 'Kayong', '2011-12-12', 'laki-laki', 'Lainnya', '1234567891', '1222222222', '1233333333', 'Belum Menikah', '1011', '2022-03-12', '', '0000-00-00', 'Jl.Kemerdekaan', '0876543212', 'dustin@gmail.com', 'PNS', '', 'dustin.png', '12345678910-Dustin Tifani-kom.png', '12345678910-Dustin Tifani-deadlock1.jpg');

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
  `file_sk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sk`
--

INSERT INTO `data_sk` (`id_sk`, `nip_nup`, `jenis_sk`, `nomor`, `tmt`, `tgl_sk`, `file_sk`) VALUES
(1, '12345678910', 'SK Penyesuaian Ijazah', '011', '2022-03-26', '2022-03-11', '12345678910-Dustin Tifani-SK Penyesuaian Ijazah-Materi IAD.pdf'),
(3, '12345678910', 'SK Penyesuaian Masa', '0011', '2022-03-31', '2022-03-31', '12345678910-Dustin Tifani-SK Penyesuaian Masa-IAD-UTS_task-v.19-1.pdf'),
(4, '12345678910', 'SK Inpassing', '015611', '2022-04-26', '2022-04-26', '12345678910-Dustin Tifani-SK Inpassing-Materi 3 - Virus Berbahaya.pdf'),
(5, '12345678910', 'SK Kenaikan Pangkat', '345', '2022-03-31', '2022-03-31', '12345678910-Dustin Tifani-SK Kenaikan Pangkat-paint_painting_surface_stains_120156_3840x2160.jpg'),
(6, '12345678910', 'SK Mutasi', '555', '2022-04-29', '2022-04-29', '12345678910-Dustin Tifani-SK Mutasi-komputer.jpg'),
(18, '12345678910', 'SK Capeg', '777', '2022-03-02', '2022-03-02', '12345678910-Dustin Tifani-SK Capeg-Lanjutan Materi IAD.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `riwayat_gol` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id_gol`, `nip_nup`, `riwayat_gol`, `pangkat`) VALUES
(1, '12345678910', 'iv', 'jen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nidn`
--

CREATE TABLE `nidn` (
  `id_nidn` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tmt` date NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nidn`
--

INSERT INTO `nidn` (`id_nidn`, `nip_nup`, `nomor`, `tmt`, `tgl`) VALUES
(1, '12345678910', '9991', '2022-03-21', '2022-03-20');

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
  `bidang_ilmu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `no_reg_serdos`
--

INSERT INTO `no_reg_serdos` (`id_no_reg_serdos`, `nip_nup`, `nomor`, `tgl`, `tempat`, `tahun_pendapatan`, `bidang_ilmu`) VALUES
(2, '12345678910', '6661', '2022-03-12', 'Kayong1', '2035', 'Psikolog1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat_inpassing`
--

CREATE TABLE `pangkat_inpassing` (
  `id_pangkat_inpassing` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `tmt_pangkat` varchar(50) NOT NULL,
  `nama_pangkat` varchar(50) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tgl_sk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pangkat_inpassing`
--

INSERT INTO `pangkat_inpassing` (`id_pangkat_inpassing`, `nip_nup`, `tmt_pangkat`, `nama_pangkat`, `no_sk`, `tgl_sk`) VALUES
(2, '12345678910', '2022-03-30', 'QQQQQQQ', '11111111', '2022-03-31');

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
  `jenis_diklat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_diklat`
--

INSERT INTO `riwayat_diklat` (`id_riwayat_diklat`, `nip_nup`, `no_sertifikat`, `tgl_diklat`, `nama_penyelenggara`, `jenis_diklat`) VALUES
(2, '12345678910', '6666', '2022-06-21', 'hahaha', 'hahah');

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
  `no_sk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_jabatan_aka_fung`
--

INSERT INTO `riwayat_jabatan_aka_fung` (`id_riwayat_jabatan_AF`, `nip_nup`, `tmt_jabatan`, `nama_jabatan`, `tgl_sk`, `no_sk`) VALUES
(1, '12345678910', '2022-03-24', 'kura', '2022-03-24', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_jabatan_struktural`
--

CREATE TABLE `riwayat_jabatan_struktural` (
  `id_riwayat_jabatan_s` int(13) NOT NULL,
  `nip_nup` varchar(50) NOT NULL,
  `tgl_mulai` varchar(50) NOT NULL,
  `tgl_selesai` varchar(50) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_jabatan_struktural`
--

INSERT INTO `riwayat_jabatan_struktural` (`id_riwayat_jabatan_s`, `nip_nup`, `tgl_mulai`, `tgl_selesai`, `nama_jabatan`) VALUES
(1, '12345678910', '22-02-2022', '23-02-2022', 'jen');

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
  `file_ijazah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_pendidikan`, `nip_nup`, `no_ijazah`, `tgl_lulus`, `nama_universitas`, `tingkat_pendidikan`, `file_ijazah`) VALUES
(1, '12345678910', '0101', '2022-03-01', 'UMP', 'S2', '1-12345678910-Dustin Tifani-images.png'),
(9, '12345678910', '138', '2022-04-01', 'UNTAN', 'S3', '9-12345678910-Dustin Tifani-3. KUTIPAN.pdf'),
(10, '12345678910', '98989', '2022-05-30', 'Politeknik', 'D3', '10-12345678910-Dustin Tifani-server.png');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `nidn`
--
ALTER TABLE `nidn`
  ADD PRIMARY KEY (`id_nidn`);

--
-- Indeks untuk tabel `no_reg_serdos`
--
ALTER TABLE `no_reg_serdos`
  ADD PRIMARY KEY (`id_no_reg_serdos`);

--
-- Indeks untuk tabel `pangkat_inpassing`
--
ALTER TABLE `pangkat_inpassing`
  ADD PRIMARY KEY (`id_pangkat_inpassing`);

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
-- AUTO_INCREMENT untuk tabel `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_sk`
--
ALTER TABLE `data_sk`
  MODIFY `id_sk` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_gol` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nidn`
--
ALTER TABLE `nidn`
  MODIFY `id_nidn` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `no_reg_serdos`
--
ALTER TABLE `no_reg_serdos`
  MODIFY `id_no_reg_serdos` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pangkat_inpassing`
--
ALTER TABLE `pangkat_inpassing`
  MODIFY `id_pangkat_inpassing` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  MODIFY `id_riwayat_diklat` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_jabatan_aka_fung`
--
ALTER TABLE `riwayat_jabatan_aka_fung`
  MODIFY `id_riwayat_jabatan_AF` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_jabatan_struktural`
--
ALTER TABLE `riwayat_jabatan_struktural`
  MODIFY `id_riwayat_jabatan_s` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_pendidikan` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
