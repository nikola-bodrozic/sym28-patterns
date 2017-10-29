-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2017 at 03:37 PM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sym28patt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tdk_chkbox`
--

CREATE TABLE `tdk_chkbox` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prvi` tinyint(1) NOT NULL,
  `drugi` tinyint(1) NOT NULL,
  `isAttending` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tdk_chkbox`
--

INSERT INTO `tdk_chkbox` (`id`, `ime`, `prvi`, `drugi`, `isAttending`) VALUES
(1, 'dinner at mikes\'s', 1, 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tdk_soba`
--

CREATE TABLE `tdk_soba` (
  `id` int(11) NOT NULL,
  `zgrada_id` int(11) DEFAULT NULL,
  `imesobe` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tdk_soba`
--

INSERT INTO `tdk_soba` (`id`, `zgrada_id`, `imesobe`) VALUES
(1, 1, 'royal room');

-- --------------------------------------------------------

--
-- Table structure for table `tdk_task`
--

CREATE TABLE `tdk_task` (
  `id` int(11) NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dueDate` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tdk_task`
--

INSERT INTO `tdk_task` (`id`, `task`, `dueDate`, `dateUpdated`) VALUES
(1, 'pickup food', '2012-01-01 00:00:00', '2017-10-29 15:09:25'),
(2, 'pickup food', '2012-01-01 00:00:00', '2017-10-29 15:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `tdk_zgrada`
--

CREATE TABLE `tdk_zgrada` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tdk_zgrada`
--

INSERT INTO `tdk_zgrada` (`id`, `ime`) VALUES
(1, 'petronas'),
(2, 'empire state building');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tdk_chkbox`
--
ALTER TABLE `tdk_chkbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdk_soba`
--
ALTER TABLE `tdk_soba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BDCE54F297DDB473` (`zgrada_id`);

--
-- Indexes for table `tdk_task`
--
ALTER TABLE `tdk_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdk_zgrada`
--
ALTER TABLE `tdk_zgrada`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tdk_chkbox`
--
ALTER TABLE `tdk_chkbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tdk_soba`
--
ALTER TABLE `tdk_soba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tdk_task`
--
ALTER TABLE `tdk_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tdk_zgrada`
--
ALTER TABLE `tdk_zgrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tdk_soba`
--
ALTER TABLE `tdk_soba`
  ADD CONSTRAINT `FK_BDCE54F297DDB473` FOREIGN KEY (`zgrada_id`) REFERENCES `tdk_zgrada` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
