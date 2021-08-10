-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2021 pada 10.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menuju_kp_playground`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_pk`
--

CREATE TABLE `mahasiswa_pk` (
  `id` int(20) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `npm` char(9) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa_pk`
--

INSERT INTO `mahasiswa_pk` (`id`, `nama`, `npm`, `jenis_kelamin`) VALUES
(1, 'Riski', 'G1A019001', 'L'),
(2, 'Nadia', 'G1A019002', 'P'),
(3, 'Novi', 'G1A019003', 'P'),
(4, 'Doni', 'G1A019004', 'L'),
(5, 'Nadia', 'G1A019005', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_tanpa_pk`
--

CREATE TABLE `mahasiswa_tanpa_pk` (
  `nama` varchar(32) NOT NULL,
  `npm` char(9) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa_tanpa_pk`
--

INSERT INTO `mahasiswa_tanpa_pk` (`nama`, `npm`, `jenis_kelamin`) VALUES
('Andi', 'G1A019066', 'L'),
('Dedy', 'G1A019078', 'L'),
('Gita', 'G1A019001', 'P'),
('Gita', 'G1A019008', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_unik`
--

CREATE TABLE `mahasiswa_unik` (
  `id` int(20) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `npm` char(9) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa_unik`
--

INSERT INTO `mahasiswa_unik` (`id`, `nama`, `npm`, `jenis_kelamin`) VALUES
(1, 'Ismi', 'G1A019001', 'P'),
(2, 'Yusuf', 'G1A019002', 'L'),
(3, 'Firsti', 'G1A019003', 'P'),
(4, 'Siapa', 'G1A019004', 'P'),
(5, 'Renti', 'G1A019005', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mm_dosen`
--

CREATE TABLE `mm_dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mm_dosen`
--

INSERT INTO `mm_dosen` (`id`, `nama`, `nip`) VALUES
(2, 'Martin MS', '234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mm_fakultas`
--

CREATE TABLE `mm_fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(32) NOT NULL,
  `kode` char(1) NOT NULL,
  `id_dekan` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mm_fakultas`
--

INSERT INTO `mm_fakultas` (`id`, `nama`, `kode`, `id_dekan`) VALUES
(1, 'Teknik', 'G', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa_pk`
--
ALTER TABLE `mahasiswa_pk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa_unik`
--
ALTER TABLE `mahasiswa_unik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indeks untuk tabel `mm_dosen`
--
ALTER TABLE `mm_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `mm_fakultas`
--
ALTER TABLE `mm_fakultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dekan` (`id_dekan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa_pk`
--
ALTER TABLE `mahasiswa_pk`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa_unik`
--
ALTER TABLE `mahasiswa_unik`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mm_dosen`
--
ALTER TABLE `mm_dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mm_fakultas`
--
ALTER TABLE `mm_fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mm_fakultas`
--
ALTER TABLE `mm_fakultas`
  ADD CONSTRAINT `mm_fakultas_ibfk_1` FOREIGN KEY (`id_dekan`) REFERENCES `mm_dosen` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
