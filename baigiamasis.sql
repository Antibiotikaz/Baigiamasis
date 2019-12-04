-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 m. Grd 04 d. 15:34
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baigiamasis`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `player`
--

CREATE TABLE `player` (
  `id` int(255) NOT NULL,
  `username` tinytext NOT NULL DEFAULT '',
  `password` longtext NOT NULL DEFAULT '',
  `gold` int(20) NOT NULL DEFAULT 0,
  `level` int(20) NOT NULL DEFAULT 1,
  `exp` int(20) NOT NULL DEFAULT 1,
  `class` mediumtext DEFAULT NULL,
  `health` int(5) DEFAULT NULL,
  `damage` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='SomeWork\r\n';

--
-- Sukurta duomenų kopija lentelei `player`
--

INSERT INTO `player` (`id`, `username`, `password`, `gold`, `level`, `exp`, `class`, `health`, `damage`) VALUES
(15, 'testas', '$2y$10$Q4QMwPrYkVYqIHwVk8pXiu5MbPZ8MBrsEEKD5o79a2vzFfMKY4oH2', 10, 1, 1, 'archer', 100, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
