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
-- Table structure for table `ca`
--

DROP TABLE IF EXISTS `ca`;
CREATE TABLE IF NOT EXISTS `ca` (
  `sno` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ca`
--

INSERT INTO `ca` (`sno`, `name`, `email`, `contact`, `college`, `link`) VALUES
(57, 'harsh mohan', '302harsh@gmail.co', '8895126561', 'nit rourkela', 'mmmm'),
(56, 'harsh mohan', '302kjhgfd@gmail.com', '8895126561', 'nit rourkela', 'harsh'),
(55, 'Alok pro', 'kajhs@jdikd.com', '8895126561', 'CET Bhubhaneswar', 'alo.orppf'),
(1, 'harsh mohan', '302mohan@gmail.com', '8895126561', 'nit rourkela', 'harsh'),
(2, 'harsh mohan', '302gupta@gmail.com', '8895126561', 'nit rourkela', 'harsh'),
(54, 'Ashish', 'ashish@gmail.com', '9437703448', 'trident', 'kjghfd'),
(3, 'harsh mohan', '302harsh@gmail.com', '8895126561', 'nit rourkela', 'harsh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
