-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 11:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icf2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Pos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pmainchardesign`
--

CREATE TABLE `pmainchardesign` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pmlbb`
--

CREATE TABLE `pmlbb` (
  `id` int(11) NOT NULL,
  `namaTim` varchar(255) NOT NULL,
  `namaKetua` varchar(255) NOT NULL,
  `nama1` varchar(255) NOT NULL,
  `nama2` varchar(255) NOT NULL,
  `nama3` varchar(255) NOT NULL,
  `nama4` varchar(255) NOT NULL,
  `nama5` varchar(255) DEFAULT NULL,
  `nama6` varchar(255) DEFAULT NULL,
  `noHpKetua` varchar(15) NOT NULL,
  `noHp1` varchar(15) NOT NULL,
  `noHp2` varchar(15) NOT NULL,
  `noHp3` varchar(15) NOT NULL,
  `noHp4` varchar(15) NOT NULL,
  `noHp5` varchar(15) DEFAULT NULL,
  `noHp6` varchar(15) DEFAULT NULL,
  `idMLBBKetua` varchar(45) NOT NULL,
  `idMLBB1` varchar(45) NOT NULL,
  `idMLBB2` varchar(45) NOT NULL,
  `idMLBB3` varchar(45) NOT NULL,
  `idMLBB4` varchar(45) NOT NULL,
  `idMLBB5` varchar(45) DEFAULT NULL,
  `idMLBB6` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`id`, `nama`) VALUES
(1, 'TA 1'),
(2, 'TA 2');

-- --------------------------------------------------------

--
-- Table structure for table `pseminars`
--

CREATE TABLE `pseminars` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `asal` enum('sekolah','instansi','umum') NOT NULL,
  `namaAsal` varchar(255) DEFAULT NULL,
  `seminars_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `nama`) VALUES
(1, 'CHATGPT allies or enemies'),
(2, 'How to be the Main Character'),
(3, 'UI/UX in Digital Product'),
(4, 'Navigating the Data Jungle'),
(5, 'Behind the Production of Gamecom Team');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_logs_Pos_idx` (`Pos_id`);

--
-- Indexes for table `pmainchardesign`
--
ALTER TABLE `pmainchardesign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmlbb`
--
ALTER TABLE `pmlbb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pseminars`
--
ALTER TABLE `pseminars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pseminars_seminars1_idx` (`seminars_id`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmainchardesign`
--
ALTER TABLE `pmainchardesign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmlbb`
--
ALTER TABLE `pmlbb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pseminars`
--
ALTER TABLE `pseminars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_Pos` FOREIGN KEY (`Pos_id`) REFERENCES `pos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pseminars`
--
ALTER TABLE `pseminars`
  ADD CONSTRAINT `fk_pseminars_seminars1` FOREIGN KEY (`seminars_id`) REFERENCES `seminars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
