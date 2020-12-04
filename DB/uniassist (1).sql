-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 03:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniassist`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyinfo`
--

CREATE TABLE `applyinfo` (
  `ID` int(7) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `sscroll` varchar(30) NOT NULL,
  `sscreg` varchar(30) NOT NULL,
  `sscboard` varchar(30) NOT NULL,
  `sscyear` varchar(30) NOT NULL,
  `hscroll` varchar(30) NOT NULL,
  `hscreg` varchar(30) NOT NULL,
  `hscboard` varchar(30) NOT NULL,
  `hscyear` varchar(30) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyinfo`
--

INSERT INTO `applyinfo` (`ID`, `fullname`, `sscroll`, `sscreg`, `sscboard`, `sscyear`, `hscroll`, `hscreg`, `hscboard`, `hscyear`, `choice1`, `choice2`, `choice3`) VALUES
(1, 'a', '45666', '4564', 'Dhaka', '2012', '4645', '4565', 'Dhaka', '2014', 'Ahsanullah University of Science and Technology', 'Ahsanullah University of Science and Technology', 'Ahsanullah University of Science and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(7) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `name`, `username`, `email`, `phone`, `password`, `photo`) VALUES
(1, 'a', 'uzzal3', 'a@gmail.com', NULL, 'aru5689', 'image/gt33mfyf1hb11.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyinfo`
--
ALTER TABLE `applyinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyinfo`
--
ALTER TABLE `applyinfo`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
