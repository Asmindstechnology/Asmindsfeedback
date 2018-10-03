-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 09:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asminds_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_feedback`
--

CREATE TABLE IF NOT EXISTS `as_feedback` (
`id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `passedout` int(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `as_feedback`
--

INSERT INTO `as_feedback` (`id`, `username`, `email`, `mobile`, `degree`, `passedout`, `feedback`, `rating`) VALUES
(1, 'venkat', 'venkatoffi@gmail.com', 1223, 'vdfds1', 132, 'scsd', 3),
(2, 'venkat', 'balaji@gmail.com', 12345, '12345', 1234, '12345', 3),
(3, 'jee', 'balxaaji@gmail.com', 12345, '12345', 1234, '12345', 3),
(6, 'asff', 'asdf@df.d', 32, 'fal', 0, 'ckqc', 3),
(8, 'sdffadaaf', 'af@sg.djf', 0, 'avk', 0, 'jv', 3),
(11, 'sdffadaaf', 'afashgda@sg.djf', 0, 'avk', 0, 'jv', 3),
(13, 'sdffadaaf', 'afasfdfhgda@sg.djf', 0, 'avk', 0, 'jv', 3),
(14, '', '', 0, '', 0, '', 0),
(15, 'dfj', 'kjak@ksv.jsdfJJAJS', 0, 'SV', 0, 'SK', 2),
(17, 'root', 'SD@JQDDJ.AJDHadf', 12345, '12345', 1234, 'xzcczx', 2),
(19, 'root', 'SD@JQDDJ.AJDHadfxxz', 12345, '12345', 1234, 'xzcczx', 2),
(22, 'root', 'SD@JQDDJ.AJDHadfxxzzz', 12345, '12345', 1234, 'xzcczx', 2),
(23, 'root', 'SD@JQDDJ.AJDHadfxxzzzzvxc', 12345, '12345', 1234, 'xzcczx', 2),
(24, 'sas', 'afasfdfhgda@sg.djfxz', 0, 'zxc', 0, 'cXzx', 2),
(26, 'sas', 'afasfdfhgda@sg.djfxzsaffa', 0, 'zxc', 0, 'cXzx', 2),
(28, 'sas', 'afasfdfhgda@sg.djfxzsaffaads', 0, 'zxc', 0, 'cXzx', 2),
(30, 'sas', 'afasfdfhgda@sg.djfxzsaffaadssad', 0, 'zxc', 0, 'cXzx', 2),
(31, 'root', 'asas@haf.sdfh', 76435, 'adjhf', 0, 'dv', 2),
(32, 'sdfdfa', 'dsv@cxv.dkfjfah', 0, 'isdv', 0, 'scv', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_feedback`
--
ALTER TABLE `as_feedback`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_feedback`
--
ALTER TABLE `as_feedback`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
