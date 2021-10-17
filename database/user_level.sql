-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 30, 2021 at 01:03 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

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
(1, 'Administrator', 'Administrator', 1, '2021-08-07 11:14:08', '2021-08-07 11:14:08'),
(2, 'Direktur', 'Direktur', 1, '2021-08-07 11:14:08', '2021-08-07 11:14:08'),
(3, 'Manager Marketing', 'Manager Marketing', 1, '2021-08-07 11:15:28', '2021-08-07 11:15:28'),
(4, 'Marketing', 'Marketing', 1, '2021-08-07 11:15:28', '2021-08-07 11:15:28'),
(5, 'Pembeli', 'Pembeli', 1, '2021-08-17 06:29:38', '2021-08-17 06:29:38'),
(9, 'darth', 'darth@theempire.com', 1, '2021-08-30 12:59:36', '2021-08-30 12:59:36');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` tinyint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
