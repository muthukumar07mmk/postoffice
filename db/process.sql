-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 07:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `id` int(100) NOT NULL,
  `suid` varchar(100) NOT NULL,
  `ruid` varchar(100) NOT NULL,
  `spid` varchar(100) NOT NULL,
  `rpid` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `sdate` datetime NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`id`, `suid`, `ruid`, `spid`, `rpid`, `status`, `sdate`, `type`) VALUES
(1, '641008A0000010', '641008A0000003', '641008A', '', 1, '0000-00-00 00:00:00', ''),
(2, '641008A0000003', '641008A00000010', '641008A', '', 1, '0000-00-00 00:00:00', ''),
(3, '641008A0000003', '641008A0000010', '641008A', '', 1, '0000-00-00 00:00:00', ''),
(4, '641008A0000003', '641008A0000010', '641008A', '641008A', 1, '0000-00-00 00:00:00', ''),
(5, '641008A0000001', '641008A0000003', '641008A', '641008A', 2, '2018-03-24 11:28:09', ''),
(6, '641008A0000003', '641008A0000010', '641008A', '641008A', 2, '2018-03-24 16:00:43', ''),
(7, '641008A0000001', '641008A0000003', '641008A', '641008A', 1, '2018-03-25 22:16:52', 'Book Pack'),
(8, '641008A0000022', '641008A0000021', '641008A', '641008A', 1, '2018-03-25 23:19:19', 'Book Pack'),
(9, '641008A0000022', '641008A0000020', '641008A', '641008A', 1, '2018-03-25 23:19:29', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
