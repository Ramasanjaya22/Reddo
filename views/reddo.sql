-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2022 pada 16.19
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
-- Database: `reddo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `formasi`
--

CREATE TABLE `formasi` (
  `id_formasi` int(11) NOT NULL,
  `formasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formasi`
--

INSERT INTO `formasi` (`id_formasi`, `formasi`) VALUES
(1, 'programmer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamarkerja2`
--

CREATE TABLE `lamarkerja2` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `id_formasi` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lamarkerja2`
--

INSERT INTO `lamarkerja2` (`id`, `iduser`, `username`, `id_formasi`, `status`) VALUES
(1, 12, 'asep', 1, 'terdaftar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `status`) VALUES
(12, 'asep', '$2y$10$fq9geasBRpY4YzQqutHia.UtkWMO3PMf19u44cKVKiKNGsOZhiso2', 'lamar'),
(14, 'joni', '$2y$10$qB0rRP188OFwbmJ.L6A9f.wlQZ9FwFtYfqVL9XfZE0Zjg6NGWT.x.', 'lamar'),
(16, 'mangadmin', '$2y$10$QUjfiu27zLHj8wzJCc4Y1ewoUSFcsGPvHU9uujGZ.eHikI0PGWUSu', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `formasi`
--
ALTER TABLE `formasi`
  ADD PRIMARY KEY (`id_formasi`);

--
-- Indeks untuk tabel `lamarkerja2`
--
ALTER TABLE `lamarkerja2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lamar_user2` (`iduser`),
  ADD KEY `fk_lamar_formasi` (`id_formasi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `formasi`
--
ALTER TABLE `formasi`
  MODIFY `id_formasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lamarkerja2`
--
ALTER TABLE `lamarkerja2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lamarkerja2`
--
ALTER TABLE `lamarkerja2`
  ADD CONSTRAINT `fk_lamar_formasi` FOREIGN KEY (`id_formasi`) REFERENCES `formasi` (`id_formasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lamar_user2` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
