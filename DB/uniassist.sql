-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 05:08 PM
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
  `fullname` varchar(100) NOT NULL,
  `sscroll` varchar(100) NOT NULL,
  `sscreg` varchar(100) NOT NULL,
  `sscboard` varchar(100) NOT NULL,
  `sscyear` varchar(100) NOT NULL,
  `hscroll` varchar(100) NOT NULL,
  `hscreg` varchar(100) NOT NULL,
  `hscboard` varchar(100) NOT NULL,
  `hscyear` varchar(100) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyinfo`
--

INSERT INTO `applyinfo` (`fullname`, `sscroll`, `sscreg`, `sscboard`, `sscyear`, `hscroll`, `hscreg`, `hscboard`, `hscyear`, `choice1`, `choice2`, `choice3`, `ID`) VALUES
('uzzal', 'fgf', 'fgd', 'Dhaka', '2014', 'dffd', 'dfgfd', 'Chittagong', '2016', 'Ahsanullah University of Science and Technology', 'Ahsanullah University of Science and Technology', 'Ahsanullah University of Science and Technology', '180001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_shortbio` text,
  `user_username` varchar(255) NOT NULL,
  `user_longbio` text,
  `user_facebook` varchar(255) DEFAULT NULL,
  `user_twitter` varchar(255) DEFAULT NULL,
  `user_linkedin` varchar(255) DEFAULT NULL,
  `user_stumbleupon` varchar(255) DEFAULT NULL,
  `user_pinterest` varchar(255) DEFAULT NULL,
  `user_googleplus` varchar(255) DEFAULT NULL,
  `user_website` varchar(255) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_profession` text,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_maritialstatus` varchar(255) DEFAULT NULL,
  `user_address` text,
  `user_backgroundpicture` varchar(255) NOT NULL,
  `user_joindate` date NOT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_skype` varchar(255) DEFAULT NULL,
  `user_github` varchar(255) DEFAULT NULL,
  `user_youtube` varchar(255) DEFAULT NULL,
  `user_vimeo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_avatar`, `user_shortbio`, `user_username`, `user_longbio`, `user_facebook`, `user_twitter`, `user_linkedin`, `user_stumbleupon`, `user_pinterest`, `user_googleplus`, `user_website`, `user_dob`, `user_profession`, `user_gender`, `user_maritialstatus`, `user_address`, `user_backgroundpicture`, `user_joindate`, `user_country`, `user_skype`, `user_github`, `user_youtube`, `user_vimeo`) VALUES
(1480, 'uzzal@gmail.com', 'razzak', 'ab', 'cd', 'default.png', '', 'uzzal', '', '', '', NULL, NULL, '', '', '', '0000-00-00', '', 'Male', NULL, '', '', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `name`, `username`, `email`, `password`) VALUES
(180001, 'UZZAL', '168', 'U@G', '123'),
(180002, 'A', 'B', 'C@G', '456'),
(180003, 'cvb', 'cv', 'cv', 'v'),
(180004, 'df', 'df', 'df', 'dfs'),
(180006, 'razzak', '102', 'Cw@G', '102');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyinfo`
--
ALTER TABLE `applyinfo`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1482;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
