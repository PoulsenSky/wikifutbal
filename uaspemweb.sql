-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 02:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaspemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `email`, `username`, `password`) VALUES
(12345, 'qwerty@gmail.com', 'qwerty', '$2y$10$HHsq6zW8IMIjabeEeFmMN.njPMLXR/T6uM4ESgQjlXC'),
(121212, 'test2@gmail.com', 'test2', '$2y$10$MN1Y.o7vwdO57KhFpLzfBO3Eo6rU9fNhZetUodOjrD4'),
(123421, 'test@gmail.com', 'test', '$2y$10$TTVtHcyhRMspgzqZqPXcL.f4fjcrdt6m77v96eJgEfW'),
(1111111, 'joko@yahoo.com', 'joko', 'joko'),
(2312313, 'cold@gmail.com', 'cold', '$2y$10$8l2HkLOaS/9Hlw2PeNvDHOWqA3PiMYSAe3Vs3P5GfQa'),
(11111111, 'ulang@gmial.com', 'ulang', '$2y$10$EXqgKvZTX6BWGH7AqPSEiOtp1Tr2qp1tMUfxC.6EHal'),
(11111112, 'aku@gmail.com', 'aku', '$2y$10$MqbriocGQOEF55hXkrynb.nPiHKAP2x9Ivx6iqlvo4VGoimA5cyOK'),
(11111113, 'dia@gmail.com', 'dia', '$2y$10$DRm0zX4gDDU0pAve0fZTMODlcizMT9edKbi4ZzCrUs8c/gbHUGW3K'),
(11111114, 'putera@gmail.com', 'putera', '$2y$10$DArZBnsi9r/AuitBit6a8OQU/lhRkmlJSGC3MZPTsbKBCds48t8M2');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` varchar(100) NOT NULL,
  `namec` varchar(200) NOT NULL,
  `nationalityc` varchar(75) NOT NULL,
  `birthc` date NOT NULL,
  `manage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `namec`, `nationalityc`, `birthc`, `manage`) VALUES
('82324351', 'Lokomotiv Dimitar', 'Russia', '1962-09-05', 'St. Zenit Petersburg'),
('83132013', '  Sir Alex Ferguson', 'Scotland', '1941-08-04', 'Manchester Depok');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `club` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `special` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `nationality`, `birth`, `club`, `position`, `special`) VALUES
('123', 'Luka Hazard Ganchou', 'Belgium', '1982-08-19', 'Chelsea', 'Midfielder', 'Curve Run'),
('1321321', ' Jacob Forlan Manueli', 'Ireland', '1987-08-31', 'Paris Saint Germains', 'Defender', 'Playmaker &amp; Pacer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11111115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
