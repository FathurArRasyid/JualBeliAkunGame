-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Des 2020 pada 03.55
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualbeliakungame`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `AkunGame`
--

CREATE TABLE `AkunGame` (
  `id_akun` varchar(200) NOT NULL,
  `id_penjual` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `spesifikasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `AkunGame`
--

INSERT INTO `AkunGame` (`id_akun`, `id_penjual`, `nama`, `harga`, `spesifikasi`) VALUES
('A2', 'fathur', 'Mobile Legend', 'Rp.100.000', 'Lv Max, Skin 40'),
('A3', 'dafa', 'dafa', '100000', 'Lv MAx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id_order` int(4) NOT NULL,
  `id_pembeli` varchar(200) NOT NULL,
  `tgl_order` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `password`, `email`, `nohp`) VALUES
('budi', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi@gmail.com', 123456),
('raden', 'raden', 'abfcb403ed9493372a4295b70410f1c0', 'raden@gmail.com', 123456789);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama`, `password`, `email`, `nohp`) VALUES
('dafa', 'dafa', 'a1cd64bd35bd9f2ba71f4da62d3359bc', 'dafa@gmail.com', 123456),
('fathur', 'Fathur Rahman', 'c2b1a7a28ace620c96223bf66bd037cf', 'fathur@gmail.com', 22222);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `AkunGame`
--
ALTER TABLE `AkunGame`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
