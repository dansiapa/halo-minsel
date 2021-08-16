-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halo_minsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_hm`
--

CREATE TABLE `admin_hm` (
  `id_admin` int(5) UNSIGNED NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password_admin` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_hm`
--

INSERT INTO `admin_hm` (`id_admin`, `nama_admin`, `password_admin`) VALUES
(1, 'admin', '$2y$10$ShENssS3xWsBpEShJBXfY.KIMjyfhR2KoBldbgRjG4Q1.Sg9c3O5e');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_hm`
--

CREATE TABLE `laporan_hm` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_laporan` varchar(255) NOT NULL,
  `tgl_laporan` varchar(20) NOT NULL,
  `status_laporan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_hm`
--

INSERT INTO `laporan_hm` (`id`, `id_user`, `isi_laporan`, `tgl_laporan`, `status_laporan`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quisquam. Earum rem impedit sint enim? Illo autem eveniet assumenda nostrum, ipsa exercitationem, illum neque, perspiciatis fugit laborum omnis commodi eligendi.', '13042021', 'terima'),
(7, 10, 'asd', '07162021', 'terima');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-06-08-135803', 'App\\Database\\Migrations\\Createadmin', 'default', 'App', 1623161212, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik_user` varchar(20) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `nomor_user` varchar(20) NOT NULL,
  `address_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik_user`, `name_user`, `email_user`, `password_user`, `nomor_user`, `address_user`) VALUES
(1, '3219084751257520', 'adi', 'adi@gmail.com', 'asd12345', '082348762312', 'jl. jalan'),
(5, '0234234281348723', 'budi', 'budi@gmail.com', 'budiaja', '082384723611', 'jl. setapak'),
(8, 'asghrugh', 'narugu', 'narugheurh@mail.com', 'awifhuwh', 'awoihfwrhg', 'awiorghihg'),
(10, '3495819347518971', 'agus', 'agus@mail.com', 'zxcvasdf', '082384273412', 'jl. raya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_hm`
--
ALTER TABLE `admin_hm`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `laporan_hm`
--
ALTER TABLE `laporan_hm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_hm`
--
ALTER TABLE `admin_hm`
  MODIFY `id_admin` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan_hm`
--
ALTER TABLE `laporan_hm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_hm`
--
ALTER TABLE `laporan_hm`
  ADD CONSTRAINT `laporan_hm_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
