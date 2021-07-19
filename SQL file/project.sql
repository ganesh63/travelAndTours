-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 11:45 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Id`, `Name`, `Phone`, `Email`, `Message`, `Date`, `Time`) VALUES
(1, 'Ganesh', '6394842185', 'ganesh@engineerlinkers.com', 'hiiii', '2020-03-02', '13:18:54'),
(11, 'Ganesh Gupta', '095855', 'ganesh706870@gmil.com', 'dsds', '2020-03-02', '13:18:54'),
(12, 'kashb', '86465464', 'jkyygbkh@gaml.com', 'kgbt', '2020-03-02', '13:18:54'),
(13, 'Ganesh Gupta', '09792965855', 'ganesh706870@gmail.com', 'sss', '2020-03-02', '13:25:45'),
(14, 'Ganesh Gupta', '09792965855', 'ganesh706870@gmail.com', 'dmtfcmh', '2020-03-02', '13:35:15'),
(15, 'kjhyg', '682', 'ganesh706870@gmail.com', 'jitfo', '2020-03-02', '13:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Id` int(11) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Id`, `FName`, `LName`, `Email`, `Contact`, `password`, `Time`) VALUES
(1, 'Ganesh', 'Gupta', 'ganesh@engineerlinkers.co', '6394842185', 'Ganesh97@#', '2020-02-29 00:00:00'),
(4, 'Ganesh', 'Gupta', 'ganesh706870@gmail.com', '0979296585', '1111', '2020-02-29 00:00:00'),
(14, 'alok ', 'shukla', 'alokshuklaabn555@gmail.com', '9305192866', '9305192866', '2020-03-02 13:39:05'),
(39, 'Ganesh', 'Gupta', 'ganesh7068@gmail.com', '097929655', '1234', '2020-03-03 15:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `Id` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`Id`, `Email`, `Date`, `Time`) VALUES
(1, 'ganesh706870@gmail.com', '0000-00-00', '00:00:00'),
(2, '', '2020-03-03', '15:39:54'),
(4, 'ganesh@gmal.com', '2020-03-03', '15:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Contact` (`Contact`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
