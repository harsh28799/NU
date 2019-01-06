-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2019 at 05:03 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`sno`, `category`, `name`, `venue`, `coordinator1`, `coordinator2`, `number1`, `number2`, `description`, `rules`, `criteria`, `image`) VALUES
(5, 'proshows', 'ljkjghgfd', 'la', 'harsh mohan', 'ashish', '8895126561', '7979988589', 'thqwertyuioplkjhgfdsazxcvbnmmnbvcxzasdfghjklpoiuytrewqasdfghjmnbvcxzasdfgh', 'glitgscvqwefgbxrtyujmnbvcyuik', 'jrgrdrtfyguhijo', '_20180712_012531.jpg'),
(4, 'musical night', 'harsh mohan', 'bba', 'harsh mohan', 'harsh mohan', '8895126561', '', '', '', '', 'IMG-20180106-WA0006.jpg'),
(3, 'competition', 'harsh mohan', 'bba', 'harsh mohan', '', '8895126561', '', '', '', '', ''),
(6, 'proshows', 'harsh mohan', 'la', 'harsh mohan', 'harsh mohan', '8895126561', '', '', '', '', 'IMG-20180507-WA0019.jpg'),
(7, 'workshop', 'asd', 'sd', 'df', '', 'dfg', '', '', '', '', '_20180723_194020.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
