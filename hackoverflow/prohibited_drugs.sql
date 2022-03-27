-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 08:32 AM
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
-- Dumping data for table `prohibited drugs`
--

INSERT INTO `prohibited drugs` (`Name`, `About`, `Use_1`, `Use_2`, `Use_3`, `Side_effect _1`, `Side_effect _2`, `Side_effect _3`, `Side_effect _4`, `Side_effect _5`, `Recomendation`) VALUES
('Creatine', 'Creatine is a substance that is found naturally in muscle cells. It helps your muscles produce energy during heavy lifting or high-intensity exercise.', 'Creatine is involved in making energy for muscles', 'Creatine replenishes your body’s stores of adenosine triphosphate (ATP) — a molecule that stores energy and fuels your cells — to provide energy to your muscles.', 'One 10-week study showed that men aged 59–77 who supplemented with 5 mg/pound (10 mg/kg) of creatine and 14 mg/pound (30 mg/kg) of protein significantly grew upper body muscle mass and reduced bone breakdown, compared to those who took a placebo', 'Bloating', 'Stomach discomfort', 'Taking too much creatine is futile', 'Kidney damage', 'Weight gain', 'Don\'t take supplements containing creatine. Avoid smoking and Limit your alcohol intake.'),
('Stimulants', ' to stimulate the central nervous system and increase heart rate and blood pressure', ' Reduce fatigue.', 'Improve endurance', '', 'euphoria. ', 'heightened feelings of wellbeing', 'anxiety.', 'increased body temperature.', 'nausea.', 'There is no antidote to stimulant overdose. Naloxone will not work for a stimulant overdose, but it will not cause harm. If in doubt use Naloxone.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prohibited drugs`
--
ALTER TABLE `prohibited drugs`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
