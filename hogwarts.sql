-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2021 pada 11.28
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogwarts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `fasilitas` varchar(191) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade1`
--

CREATE TABLE `grade1` (
  `id_tmhs` int(11) NOT NULL,
  `NoKK` varchar(11) NOT NULL,
  `namasis` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `walsis` varchar(11) NOT NULL,
  `tgllhr` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade2`
--

CREATE TABLE `grade2` (
  `id_grade2` int(11) NOT NULL,
  `NoKK` varchar(11) NOT NULL,
  `namasis` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `walsis` varchar(20) NOT NULL,
  `tgllhr` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade3`
--

CREATE TABLE `grade3` (
  `id_grade3` int(11) NOT NULL,
  `NoKK` varchar(11) NOT NULL,
  `namasis` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `walsis` varchar(30) NOT NULL,
  `tgllhr` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade4`
--

CREATE TABLE `grade4` (
  `id_grade4` int(11) NOT NULL,
  `NoKK` varchar(11) NOT NULL,
  `namasis` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `walsis` varchar(30) NOT NULL,
  `tgllhr` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade5`
--

CREATE TABLE `grade5` (
  `id_grade5` int(11) NOT NULL,
  `NoKK` varchar(11) NOT NULL,
  `namasis` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `walsis` varchar(30) NOT NULL,
  `tgllhr` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grade6`
--

CREATE TABLE `grade6` (
  `id_grade6` int(11) NOT NULL,
  `NoKK` varchar(11) NOT NULL,
  `namasis` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `agama` varchar(11) NOT NULL,
  `walsis` varchar(30) NOT NULL,
  `tgllhr` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `NIP` int(16) NOT NULL,
  `email` varchar(191) NOT NULL,
  `pelajaran` varchar(20) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(30) NOT NULL,
  `user_id` bigint(16) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 3385110988271201602, 'Admin1', 'admin1', '2021-09-24 09:05:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grade1`
--
ALTER TABLE `grade1`
  ADD PRIMARY KEY (`id_tmhs`);

--
-- Indeks untuk tabel `grade2`
--
ALTER TABLE `grade2`
  ADD PRIMARY KEY (`id_grade2`);

--
-- Indeks untuk tabel `grade3`
--
ALTER TABLE `grade3`
  ADD PRIMARY KEY (`id_grade3`);

--
-- Indeks untuk tabel `grade4`
--
ALTER TABLE `grade4`
  ADD PRIMARY KEY (`id_grade4`);

--
-- Indeks untuk tabel `grade5`
--
ALTER TABLE `grade5`
  ADD PRIMARY KEY (`id_grade5`);

--
-- Indeks untuk tabel `grade6`
--
ALTER TABLE `grade6`
  ADD PRIMARY KEY (`id_grade6`);

--
-- Indeks untuk tabel `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grade1`
--
ALTER TABLE `grade1`
  MODIFY `id_tmhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grade2`
--
ALTER TABLE `grade2`
  MODIFY `id_grade2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grade3`
--
ALTER TABLE `grade3`
  MODIFY `id_grade3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grade4`
--
ALTER TABLE `grade4`
  MODIFY `id_grade4` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grade5`
--
ALTER TABLE `grade5`
  MODIFY `id_grade5` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `grade6`
--
ALTER TABLE `grade6`
  MODIFY `id_grade6` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
