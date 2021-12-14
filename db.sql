-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 12:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventario`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
                             `id` int(11) NOT NULL,
                             `modelo` varchar(255) NOT NULL,
                             `computername` varchar(255) NOT NULL,
                             `serial` varchar(255) NOT NULL,
                             `hd` varchar(255) NOT NULL,
                             `memory` varchar(255) NOT NULL,
                             `class` varchar(255) NOT NULL,
                             `os` varchar(255) NOT NULL,
                             `location` varchar(255) NOT NULL,
                             `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `modelo`, `computername`, `serial`, `hd`, `memory`, `class`, `os`, `location`, `username`) VALUES
                                                                                                                              (1, 'modelo', 'nombre', 'seire', 'disco', 'memoria', 'clase', 'os', 'ubicacion', 'usuario'),
                                                                                                                              (2, 'modelo 2', 'nombre 2', 'seire', 'disco', 'memoria', 'clase', 'os', 'ubicacion', 'usuario');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
                           `id` int(11) NOT NULL,
                           `brand` varchar(255) NOT NULL,
                           `modelo` varchar(255) NOT NULL,
                           `serial` varchar(255) NOT NULL,
                           `port` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printer`
--

INSERT INTO `printer` (`id`, `brand`, `modelo`, `serial`, `port`) VALUES
                                                                      (1, 'HP', 'nuevo modelo', '134', '3033'),
                                                                      (2, 'HP2', 'modelo', 'seire', 'puerto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `printer`
--
ALTER TABLE `printer`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
