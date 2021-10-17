-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2021 at 03:57 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int UNSIGNED NOT NULL DEFAULT '0',
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-01-19-200313', 'Auth\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1628224760, 1),
(2, '2021-08-06-041529', 'App\\Database\\Migrations\\CreateCiSessionsTable', 'default', 'App', 1628224762, 1),
(3, '2021-08-06-041805', 'App\\Database\\Migrations\\UserLevel', 'default', 'App', 1628224763, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sppr`
--

CREATE TABLE `sppr` (
  `id` int NOT NULL,
  `form_id` varchar(10) DEFAULT NULL,
  `id_pembeli` int DEFAULT NULL,
  `nama_pembeli` varchar(100) DEFAULT NULL,
  `alamat_ktp` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `alamat_domisili` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `telp_1` int DEFAULT NULL,
  `telp_2` int DEFAULT NULL,
  `status_nikah` int DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `nama_perumahan` varchar(200) DEFAULT NULL,
  `lokasi` varchar(200) DEFAULT NULL,
  `blok` varchar(100) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL,
  `luas_tanah` int DEFAULT NULL,
  `luas_bangunan` int DEFAULT NULL,
  `metode_pembelian` int DEFAULT NULL,
  `harga_jual_standar` int DEFAULT NULL,
  `uang_muka_standar` int DEFAULT NULL,
  `diskon` int DEFAULT NULL,
  `biaya_tambahan` int DEFAULT NULL,
  `kelebihan_tanah` int DEFAULT NULL,
  `total_harga_jual` int DEFAULT NULL,
  `uang_muka` int DEFAULT NULL,
  `total_cicilan` int DEFAULT NULL,
  `cicilan_per_bulan` int DEFAULT NULL,
  `sisa_hutang` int DEFAULT NULL,
  `dibayar` int DEFAULT NULL,
  `kewajiban_per_bulan` int DEFAULT NULL,
  `file_ktp` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `new_email` varchar(191) DEFAULT NULL,
  `password_hash` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `activate_hash` varchar(191) DEFAULT NULL,
  `reset_hash` varchar(191) DEFAULT NULL,
  `reset_expires` bigint DEFAULT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '5',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` bigint DEFAULT NULL,
  `updated_at` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `new_email`, `password_hash`, `name`, `activate_hash`, `reset_hash`, `reset_expires`, `level`, `active`, `created_at`, `updated_at`) VALUES
(1, 'jaya.ismiku@gmail.com', NULL, '$2y$10$aV43AhEoO0wYkaWAcBPDz.UDnD.3whUOm.doyCusEKKRBpvM8f7I2', 'jaya', 'hDNzUKbkVBtJx01vpcYuZ3FagWfXAmnG', NULL, NULL, 5, 1, 1628311494, 1628311494),
(2, 'administrator@rumahkusyurgaku.id', NULL, '$2y$10$MqUpeW/W9lku9/0iTf/bZ.ksg01LRj/xgMwVI3EjpgJ1LxHQDTN3i', 'Administrator', '4F7oH1iXjdkYVQ8ItOlZ2a3AnGvepyJP', NULL, NULL, 1, 1, 2021, 2021),
(3, 'direktur@rumahkusyurgaku.id', NULL, '$2y$10$Qf2qIOzHQM2RCfba4VpM4O9abch1jDjhZnp0Npzc4/e6vnoxa9Lae', 'Direktur', 'U2crg0xdWksP8XOHy9SJem71wL4zinKE', NULL, NULL, 2, 1, 2021, 2021),
(4, 'managermarketing@rumahkusyurgaku.id', NULL, '$2y$10$o.qobOnfa3vbVMQlnDyuJO8NjD/w/r4cnVfQoFUPyAR.4kWkE5EnK', 'Manager Marketing', '5dq1BsOiwTUnlChZPNDcV3uKoFE8RetI', NULL, NULL, 3, 1, 2021, 2021),
(5, 'marketing@rumahkusyurgaku.id', NULL, '$2y$10$EhUpEGVnyvBv/4GYpCB9nu8WbDI211ZmrBsu/ZZivwzBbKBjLx2KS', 'Marketing', 'L9QjqlrUWwCf6evDG3nbYOkmAFXHdt2c', NULL, NULL, 4, 1, 2021, 2021),
(6, 'pembeli@gmail.com', NULL, '$2y$10$Gk8mEHyXPwIv8g6krBplEeQ1aEjcd7hn6tta5d9ttzcGYuo9dTuQK', 'Pembeli', '2PONWujDwEZFTUno4Vg0AGqmlvf1XC3I', NULL, NULL, 5, 1, 2021, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` tinyint NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 1, '2021-08-30 13:04:43', '2021-08-30 13:04:43'),
(2, 'direktur', 'Direktur', 1, '2021-08-30 13:04:43', '2021-08-30 13:04:43'),
(3, 'manager marketing', 'Manager Marketing', 1, '2021-08-30 13:04:43', '2021-08-30 13:04:43'),
(4, 'marketing', 'Marketing', 1, '2021-08-30 13:04:43', '2021-08-30 13:04:43'),
(5, 'pembeli', 'Pembeli', 1, '2021-08-30 13:04:43', '2021-08-30 13:04:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timestamp` (`timestamp`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sppr`
--
ALTER TABLE `sppr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sppr`
--
ALTER TABLE `sppr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_level` FOREIGN KEY (`level`) REFERENCES `user_level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
