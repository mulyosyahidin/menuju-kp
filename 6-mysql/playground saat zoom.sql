-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2021 pada 17.20
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
-- Struktur dari tabel `data_double`
--

CREATE TABLE `data_double` (
  `num` float(8,2) DEFAULT NULL,
  `txt` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_double`
--

INSERT INTO `data_double` (`num`, `txt`) VALUES
(1000000.00, 'MySQL permits you to create a column of type CHAR(0). This is useful primarily when you must be compliant with old applications that depend on the existence of a column but that do not actually use its value. CHAR(0) is also quite nice when you need a column that can take only two values: A column that is defined as CHAR(0) NULL occupies only one bit and can take only the values NULL and \'\' (the empty string).  MySQL permits you to create a column of type CHAR(0). This is useful primarily when y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desimal`
--

CREATE TABLE `desimal` (
  `num` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desimal`
--

INSERT INTO `desimal` (`num`) VALUES
('12.00'),
('9999.99'),
('9999.99'),
('1234.00'),
('1234.89');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_increment`
--

CREATE TABLE `test_increment` (
  `id_mahasiswa` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nama_kolom` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_increment`
--

INSERT INTO `test_increment` (`id_mahasiswa`, `nama`, `nama_kolom`) VALUES
(1, 'mms', NULL),
(2, 'Joni', NULL),
(3, 'Jono', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_signed_unsigned`
--

CREATE TABLE `test_signed_unsigned` (
  `num_signed` tinyint(2) DEFAULT NULL,
  `num_unsigned` tinyint(2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_signed_unsigned`
--

INSERT INTO `test_signed_unsigned` (`num_signed`, `num_unsigned`) VALUES
(127, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_zerofill`
--

CREATE TABLE `test_zerofill` (
  `nilai_zerofill` int(4) UNSIGNED ZEROFILL DEFAULT NULL,
  `nilai_6` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `nilai` int(4) DEFAULT NULL,
  `tdk_null` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_zerofill`
--

INSERT INTO `test_zerofill` (`nilai_zerofill`, `nilai_6`, `nilai`, `tdk_null`) VALUES
(0123, NULL, 123, 0),
(0008, NULL, NULL, 0),
(12345, 012345, NULL, 0),
(0012, 000003, NULL, 0),
(12345, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `test_increment`
--
ALTER TABLE `test_increment`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `test_increment`
--
ALTER TABLE `test_increment`
  MODIFY `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
