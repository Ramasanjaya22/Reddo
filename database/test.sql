-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2022 pada 03.14
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookmark`
--

CREATE TABLE `bookmark` (
  `id_bookmark` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `halaman` varchar(50) NOT NULL,
  `catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bookmark`
--

INSERT INTO `bookmark` (`id_bookmark`, `id_user`, `halaman`, `catatan`) VALUES
(1, 1, '10', 'sampai karakter utama pergi ke desa'),
(3, 1, '30', 'Karakter tidur'),
(4, 5, '20', 'ini cahyo tidur'),
(6, 5, '30', 'coba'),
(7, 5, '40', 'aku turu'),
(8, 5, '50', 'aku turu 2'),
(9, 5, '60', 'aku turu 3'),
(20, 9, '10', 'saya baru baca buku'),
(21, 9, '123', 'djsa;ldjkl;asjdkl;ajsdkl;jakls;jdlk;asjdklasjfhdsj'),
(55, 5, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `poin` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `Image`, `poin`) VALUES
(1, 'Reddo', 'reddo1', 'ihdazul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 2),
(2, 'rama', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', 2),
(4, 'rama', 'ramasanjaya', 'ramasanjaya3302@gmail.com', '36226b453eb255f672f118a1ecc1e4ec', '', 2),
(5, 'cahyo', 'cahyo', 'cahyo@mail.com', '772c2161cb7137df9da9d3ad4d57b16f', 'bib_comm_waitlist_open_on_Twitter.jpg', 25),
(6, 'thessageming', 'thessageming', 'thessa@mail.com', '271a7fc17bc12defe849a1adbeac811f', '', 2),
(7, 'example', 'example', 'example@gmail.com', '1a79a4d60de6718e8e5b326e338ae533', '', 2),
(8, 'rama', 'ramarama', 'rama1@mail.com', '36226b453eb255f672f118a1ecc1e4ec', '3293119830.jpg', 2),
(9, 'ramasanjaya', 'ramasanjaya', 'rama2@mail.com', '36226b453eb255f672f118a1ecc1e4ec', '13___.jpg', 0),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id_bookmark`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id_bookmark` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
