-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2021 pada 04.57
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `gambar`) VALUES
(1, 'admin', '$2y$10$05n/mSvSM/BKbeTS42sefO3Q2GDBiGr9ZGhOaDokmasnwr8Y50uPu', ''),
(2, 'admin1', '$2y$10$ifVeZjU.f2mwe6369F56jO0m0Dtk0rteu0FHhZut1nO8IcPP8Ezre', ''),
(4, 'admin4', '$2y$10$53BQSWfgq.ZcVOBMAH2EaOeptmKtQLsNyb6IieZx3S5e7gBEQg.TW', ''),
(5, 'admin01', '$2y$10$8E70bDjAcIxxxswNNS.6Qen3fqRlvxWceFIQ.9kIa9KNBg45OP8sq', '60a512bbc3bf2.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `Nama` varchar(150) NOT NULL,
  `Jk` varchar(30) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Angkatan` int(11) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Nim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`Nama`, `Jk`, `Prodi`, `Angkatan`, `Alamat`, `Nim`) VALUES
('Glorian Purba', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Balige', '13320002'),
('Christian Tobing', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Tarutung', '13320003'),
('Bryan Batubara', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Siborongborong', '13320006'),
('Grace Siburian', 'Perempuan', 'D3 Teknologi Komputer', 2020, 'Laguboti', '13320011'),
('Jesika Manurung', 'Perempuan', 'D3 Teknologi Komputer', 2020, 'Binjai', '13320015'),
('Nurcahaya', 'Perempuan', 'D3 Teknologi Komputer', 2020, 'Binjai', '13320017'),
('Putri Sitinjak', 'Perempuan', 'D3 Teknologi Komputer', 2020, 'Medan', '13320018'),
('Putra Tampubolon', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Balige', '13320022'),
('Paul Nainggolan', 'Laki-laki', 'D3 Teknologi Komputer', 2020, 'Siantar', '13320023'),
('Kevin Harefa', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Sibolga', '13320024'),
('Yusuf Panjaitan', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Medan', '13320026'),
('Felix Simanjuntak', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Siborongborong', '13320031'),
('Christian Nainggolan', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Sibolga', '13320036'),
('Rio Putrawan Zalukhu', 'Laki-laki', 'D3 teknologi komputer', 2020, 'Siborongborong', '13320038'),
('Antonel Manurung', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Pematang siantar', '13320039'),
('Jhon Siagian', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Sei Bamban', '13320041'),
('Nicholas Pardosi', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Medan', '13320043'),
('Yemima Damanik', 'Perempuan', 'D3 Teknologi Komputer', 2020, 'Tarutung', '13320049'),
('Shopia Sibarani', 'Perempuan', 'D3 Teknologi Komputer', 2020, 'Balige', '13320050'),
('Siti Sitorus', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Balige', '13320053'),
('Steven Situmoran', 'Laki-Laki', 'D3 Teknologi Komputer', 2020, 'Medan', '13320055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user1`
--

CREATE TABLE `user1` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jk` varchar(50) NOT NULL,
  `number_id` varchar(100) NOT NULL,
  `Angkatan` int(11) NOT NULL,
  `Pekerjaan` varchar(200) NOT NULL,
  `Kontak` varchar(20) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `Prodi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user1`
--

INSERT INTO `user1` (`id_user`, `username`, `password`, `Nama`, `Jk`, `number_id`, `Angkatan`, `Pekerjaan`, `Kontak`, `Alamat`, `gambar`, `Prodi`) VALUES
(5, 'coba1', '$2y$10$nt4XSqUGVpSGs9u5qvOIA.BtAYthdFD.orN8eOA49tC2QqqJSUj7S', 'Rio', 'perempuan', '0987654321', 2020, 'Mahasiswa', '1234567890', 'balige', '60a48fb934e85.jpg', 'D3 teknologi komputer'),
(6, 'kania', '$2y$10$qMC9.XVgk8.UQavy8RdVQe5QPCb152mD3QpFBjEC.zb45qjyymT0O', 'kania', 'perempuan', '13320040', 2020, 'Mahasiswa', '088888888888', 'Balige', '60a33e6156a56.jpg', 'D3 teknologi komputer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Nim`);

--
-- Indeks untuk tabel `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user1`
--
ALTER TABLE `user1`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
