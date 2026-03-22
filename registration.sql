-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2026 at 07:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Firstname`, `Lastname`, `Age`, `Email`, `Gender`) VALUES
(15, 'Tayyab', 'Tariq', 20, 'tayyabtariq@gmail.com', 'male'),
(16, 'Bilal', 'Akhter', 22, 'bilal@gamil.com', 'male'),
(18, 'Malik ', 'Shani', 21, 'tayyabtariqawan30@gmail.com', 'male'),
(19, 'Malik', 'Awan', 22, 'tayyabtariqawan30@gmail.com', 'male'),
(20, 'tayyab', 'tariq', 22, 'tariqtayyab135@gmail.com', 'male'),
(21, 'tayyab', 'tariq', 22, 'tariqtayyab135@gmail.com', 'male'),
(22, 'tayyab', 'tariq', 22, 'tariqtayyab135@gmail.com', 'male'),
(23, 'tayyab', 'tariq', 22, 'tariqtayyab135@gmail.com', 'male'),
(24, 'tayyab', 'tariq', 22, 'tariqtayyab135@gmail.com', 'male'),
(25, '', '', 0, '', ''),
(26, 'malik', 'shani', 22, 'malikshani@gmail.comm', 'male'),
(27, 'Malik', 'Awan', 22, 'tariqtayyab135@gmail.com', 'male'),
(28, 'Malik', 'Awan', 22, 'tariqtayyab135@gmail.com', 'male'),
(29, 'Malik', 'Awan', 1, 'tayyabtariqawan30@gmail.com', 'male'),
(30, 'Malik', 'Awan', 22, 'tayyabtariqawan3@gmail.com', 'male'),
(31, 'Malik', 'Awan', 23, 'tayyabtariqawan@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
