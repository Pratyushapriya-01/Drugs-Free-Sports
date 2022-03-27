-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 12:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drugs`
--

-- --------------------------------------------------------

--
-- Table structure for table `anti drugs`
--

CREATE TABLE `anti drugs` (
  `Name` varchar(20) NOT NULL,
  `About` longtext NOT NULL,
  `uses_1` longtext NOT NULL,
  `side_effect _1` longtext NOT NULL,
  `side_effect_2` longtext NOT NULL,
  `Recomendation` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `Name` varchar(30) NOT NULL,
  `use_1` longtext NOT NULL,
  `use_2` longtext NOT NULL,
  `use_3` longtext NOT NULL,
  `Side_Effect _1` longtext NOT NULL,
  `Side_Effect _2` longtext NOT NULL,
  `Recomendation` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prohibited drugs`
--

CREATE TABLE `prohibited drugs` (
  `Name` varchar(20) NOT NULL,
  `About` longtext NOT NULL,
  `Use_1` longtext NOT NULL,
  `Use_2` longtext NOT NULL,
  `Use_3` longtext NOT NULL,
  `Side_effect _1` longtext NOT NULL,
  `Side_effect _2` longtext NOT NULL,
  `Side_effect _3` longtext NOT NULL,
  `Side_effect _4` longtext NOT NULL,
  `Side_effect _5` longtext NOT NULL,
  `Recomendation` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anti drugs`
--
ALTER TABLE `anti drugs`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `prohibited drugs`
--
ALTER TABLE `prohibited drugs`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
