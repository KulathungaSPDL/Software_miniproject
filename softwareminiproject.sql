-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 05:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwareminiproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contractid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `seedcompid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `seedtype` varchar(255) NOT NULL,
  `elevatorid` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`contractid`, `id`, `seedcompid`, `qty`, `seedtype`, `elevatorid`, `date`) VALUES
(1, 1, 1, 25, 'Rubber', 2, '2022-11-19'),
(2, 1, 5, 5, 'd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elevator`
--

CREATE TABLE `elevator` (
  `elevatorid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elevator`
--

INSERT INTO `elevator` (`elevatorid`, `name`) VALUES
(1, 'Ele A'),
(2, 'Ele B'),
(3, 'Ele C');

-- --------------------------------------------------------

--
-- Table structure for table `famer`
--

CREATE TABLE `famer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `famer`
--

INSERT INTO `famer` (`id`, `username`, `firstname`, `lastname`, `password`) VALUES
(1, 'c', 'a', 'b', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(2, 's', 'a', 's', 'b0baee9d279d34fa1dfd71aadb908c3f');

-- --------------------------------------------------------

--
-- Table structure for table `seedcompany`
--

CREATE TABLE `seedcompany` (
  `seedcompid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seedcompany`
--

INSERT INTO `seedcompany` (`seedcompid`, `name`) VALUES
(1, 'A'),
(2, 'B'),
(5, 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contractid`),
  ADD KEY `id` (`id`),
  ADD KEY `seedcompid` (`seedcompid`),
  ADD KEY `elevatorid` (`elevatorid`);

--
-- Indexes for table `elevator`
--
ALTER TABLE `elevator`
  ADD PRIMARY KEY (`elevatorid`);

--
-- Indexes for table `famer`
--
ALTER TABLE `famer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seedcompany`
--
ALTER TABLE `seedcompany`
  ADD PRIMARY KEY (`seedcompid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `contractid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `elevator`
--
ALTER TABLE `elevator`
  MODIFY `elevatorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `famer`
--
ALTER TABLE `famer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seedcompany`
--
ALTER TABLE `seedcompany`
  MODIFY `seedcompid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `famer` (`id`),
  ADD CONSTRAINT `contracts_ibfk_2` FOREIGN KEY (`seedcompid`) REFERENCES `seedcompany` (`seedcompid`),
  ADD CONSTRAINT `contracts_ibfk_3` FOREIGN KEY (`elevatorid`) REFERENCES `elevator` (`elevatorid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
