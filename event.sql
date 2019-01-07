-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2019 at 01:49 PM
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
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(100) NOT NULL,
  `coordinator1` text NOT NULL,
  `coordinator2` text NOT NULL,
  `number1` varchar(10) NOT NULL,
  `number2` varchar(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rules` varchar(1000) NOT NULL,
  `criteria` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`sno`, `category`, `name`, `date`, `time`, `venue`, `coordinator1`, `coordinator2`, `number1`, `number2`, `description`, `rules`, `criteria`, `image`) VALUES
(10, 'fun', 'paint ball', '2019-02-03', '09:00:00', 'NCC ground', 'harsh mohan', 'Ashish Kumar', '8895126561', '7979988589', 'Too much fun', 'Till you die', 'Living is surviving', 'IMG-20180719-WA0015.jpg'),
(12, 'workshop', 'cloud computing', '2018-11-03', '10:00:00', 'EC Seminar Hall', 'Harsh Mohan', 'Rohith', '8895126561', '7979988589', 'AWS', 'NA', 'NA', 'IMG-20180901-WA0020.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
