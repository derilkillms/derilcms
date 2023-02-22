-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2023 pada 09.23
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `derilcms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_posts`
--

CREATE TABLE `d_posts` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `timecreated` text NOT NULL,
  `author` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_posts`
--

INSERT INTO `d_posts` (`id`, `title`, `content`, `url`, `timecreated`, `author`) VALUES
(1, 'Judul Konten 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem.', 'judul-kontent-1', '1632406597', 1),
(2, 'Judul Kontent 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem.', 'judul-kontent-2', '1632406597', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_themes`
--

CREATE TABLE `d_themes` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `path` text NOT NULL,
  `timecreated` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_themes`
--

INSERT INTO `d_themes` (`id`, `name`, `path`, `timecreated`, `status`) VALUES
(1, 'Basic Template', 'basic', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `d_posts`
--
ALTER TABLE `d_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `d_themes`
--
ALTER TABLE `d_themes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `d_posts`
--
ALTER TABLE `d_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `d_themes`
--
ALTER TABLE `d_themes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
