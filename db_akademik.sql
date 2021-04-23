-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2021 pada 19.00
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `036_dosen`
--

CREATE TABLE `036_dosen` (
  `nip` char(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` char(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `036_dosen`
--

INSERT INTO `036_dosen` (`nip`, `nama`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`) VALUES
('1234553832', 'Daniyal Cakra', 'sukorame', 'Laki-Laki', 'Makassar', '2015-12-25'),
('12345530840', 'mika', 'jlln pagesaan timur no 54, jakarta timur', 'lakilaki', 'Makassar', '1999-02-01'),
('1234553081', 'Kylie Jenner', 'jln.Mt.haryono 11', 'Perempuan', 'Surabaya', '2002-02-12'),
('1234553085', 'Kendal Jenner', 'jln rawa-rawa no 5, jakarta barat', 'Perempuan', 'Manado', '2000-06-01'),
('1234553', 'Oh Sehun', 'jln.Mangga 11, Malang', 'Laki-Laki', 'Semarang', '2000-05-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_mk` char(10) NOT NULL,
  `nama_mk` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_mk`, `nama_mk`, `sks`) VALUES
('MK002', 'Algoritma dan Pemrograman ', 4),
('MK003', 'Desain web', 3),
('MK005', 'Basis Data', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_mk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
