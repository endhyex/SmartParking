-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2019 pada 14.20
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_manpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--
-- --------------------------------------------------------

--
-- Struktur dari tabel `parkirloc`
--

CREATE TABLE `parkirloc` (
   `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `nama_parkiran` char(5) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `available` boolean NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `parkirloc`
--

INSERT INTO `parkirloc` (`nama_parkiran`, `longitude`, `latitude`) VALUES
('A1',106.82498,-6.36203),
('A2',106.82501,-6.36203),
('A3',106.82505,-6.36203),
('A4',106.82490,-6.36200),
('A5',106.82490,-6.36197),
('A6',106.82490,-6.36194),
('B1',106.82515,-6.36216),
('B2',106.82518,-6.36216),
('B3',106.82522,-6.36217),
('B4',106.82525,-6.36217),
('B5',106.82529,-6.36218),
('B6',106.82529,-6.36212),
('B7',106.82525,-6.36210),
('B8',106.82522,-6.36209),
('B9',106.82518,-6.36207),
('B10',106.82515,-6.36206),
('B11',106.82504,-6.36196),
('B12',106.82500,-6.36193),
('B13',106.82498,-6.36190),
('B14',106.82490,-6.36163),
('B15',106.82490,-6.36158),
('B16',106.82490,-6.36153),
('B17',106.82490,-6.36148),
('B18',106.82490,-6.36143),
('B19',106.82490,-6.36138),
('B20',106.82490,-6.36133),
('B21',106.82490,-6.36128),
('B22',106.82490,-6.36123),
('B23',106.82490,-6.36118),
('B24',106.82490,-6.36115),
('B25',106.82486,-6.36163),
('B26',106.82486,-6.36160),
('B27',106.82486,-6.36157),
('B28',106.82486,-6.36154),
('B29',106.82486,-6.36151),
('B30',106.82486,-6.36148),
('B31',106.82486,-6.36145),
('B32',106.82486,-6.36142),
('B33',106.82486,-6.36139),
('B34',106.82486,-6.36136),
('B35',106.82486,-6.36133),
('B36',106.82486,-6.36130),
('B37',106.82486,-6.36127),
('B38',106.82486,-6.36124),
('B39',106.82486,-6.36121),
('B40',106.82486,-6.36118),
('B41',106.82486,-6.36115),
('B42',106.82486,-6.36112),
('B43',106.82486,-6.36110),
('B44',106.82370,-6.36164),
('B45',106.82368,-6.36162),
('B46',106.82366,-6.36160),
('B47',106.82360,-6.36154),
('B48',106.82358,-6.36152),
('B49',106.82356,-6.36150),
('B50',106.82354,-6.36148),
('B51',106.82364,-6.36158),
('B52',106.82362,-6.36156),
('B53',106.82360,-6.36158),
('B54',106.82358,-6.36156);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
--
-- Indeks untuk tabel `parkirloc`
--

--
-- Table structure for table `user`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('qurratu.aini', 'quraraain16@gmail.com', '12345');

--
-- Indexes for dumped tables
--


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
