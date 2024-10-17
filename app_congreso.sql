-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 08:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_congreso`
--

-- --------------------------------------------------------

--
-- Table structure for table `charlas`
--

CREATE TABLE `charlas` (
  `id` int(11) NOT NULL,
  `nombrecharla` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charlas`
--

INSERT INTO `charlas` (`id`, `nombrecharla`) VALUES
(1, 'Morion Charlatan'),
(2, 'Saavedra Charlatan'),
(3, 'Cardona Charlatan');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_charla` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `fechayhora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_charla`, `usuario`, `comentario`, `fechayhora`) VALUES
(1, 0, 'root', '', ''),
(2, 0, 'root', '', ''),
(3, 0, 'root', '', ''),
(4, 0, 'root', '', ''),
(5, 0, 'root', 'aaa', 'aaa'),
(6, 0, 'aaa2', 'aaa2', 'aaa2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charlas`
--
ALTER TABLE `charlas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charlas`
--
ALTER TABLE `charlas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
