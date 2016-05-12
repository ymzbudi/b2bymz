-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Mei 2016 pada 03.43
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2b`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `key_login` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `waktu_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `waktu_kadaluarsa` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(100) NOT NULL,
  `pc_dan_browser` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `key_login`, `id_user`, `waktu_login`, `waktu_kadaluarsa`, `ip`, `pc_dan_browser`, `status`) VALUES
(65, '14628430153084', 100, '2016-05-10 08:16:55', '2016-05-11 08:16:55', '::1', 'mozilla/5.0 (windows nt 10.0; wow64) applewebkit/537.36 (khtml, like gecko) chrome/50.0.2661.94 safa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL DEFAULT '1' COMMENT '1=user, 2=operator, 10=administrator',
  `waktu_add` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `waktu_modifi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `hak_akses`, `waktu_add`, `waktu_modifi`, `status`) VALUES
(100, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Abdurrahman', 10, '2015-02-22 05:41:56', '2016-05-09 10:49:57', 1),
(101, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'Sulaiman', 1, '2015-02-22 05:41:56', '2016-05-09 10:49:34', 1),
(102, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'Yusuf', 2, '2015-02-22 05:41:56', '2016-05-10 01:06:00', 1),
(103, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'Ismail', 3, '2015-02-22 05:41:56', '2016-05-10 01:06:22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_login` (`key_login`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
