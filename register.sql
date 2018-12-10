-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2018 at 03:47 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nitrutsav`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `institute` varchar(36) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `contact`, `institute`, `password`, `date`, `admin`) VALUES
(4, 'ALOK', 'harshmohan467@gmail.com', '7787020263', 'MIT', 'ec5ad49cf0ac82279452a91bc70b504f', '2018-11-04 11:54:25', 0),
(2, 'Ashish Kumar', '302ashish@nitrkl.ac.in', '7979988589', 'Kendrya Vidyalaya', '7123327841c55c5279c15f94778f276a', '2018-10-27 21:02:16', 1),
(3, 'Neha Swapnil', 'neha.swapnil@gmail.com', '9437703448', 'Trident Academy of Technology', '1679eed235ba7fd2503a0ffec7873d84', '2018-10-27 21:57:14', 1),
(5, 'harsh mohan', 'jyoti@gmail.com', '1234567890', 'nitrkl', '345bec9d3dcc5eac3f48ce9720474e65', '2018-11-05 22:37:37', 0),
(6, 'harsh mohan', 'maya@gmail.com', '1234567890', 'com', '345bec9d3dcc5eac3f48ce9720474e65', '2018-11-05 22:38:39', 0),
(7, 'harsh mohan', '302hars@gmail.com', '8895126561', 'joda', '345bec9d3dcc5eac3f48ce9720474e65', '2018-12-06 00:34:48', 0),
(8, 'harsh mohan', '302har@gmail.com', '8895126561', 'joda', '345bec9d3dcc5eac3f48ce9720474e65', '2018-12-06 18:30:43', 0),
(9, 'harsh mohan', '302harsh@gmail.com', '8895126561', 'joda', '345bec9d3dcc5eac3f48ce9720474e65', '2018-12-06 18:31:54', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
