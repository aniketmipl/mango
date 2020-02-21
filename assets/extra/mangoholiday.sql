-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2020 at 05:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangoholiday`
--

-- --------------------------------------------------------

--
-- Table structure for table `melava`
--

DROP TABLE IF EXISTS `melava`;
CREATE TABLE IF NOT EXISTS `melava` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `melava_name` varchar(255) NOT NULL,
  `counter` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `melava`
--

INSERT INTO `melava` (`id`, `melava_name`, `counter`, `date`) VALUES
(1, 'South America - Margdarshan Melava on 25th Feb 2020', '2', '2020-02-17'),
(2, 'South America - Margdarshan Melava on 25th Feb 2020', '2', '2020-02-18'),
(3, 'South America - Margdarshan Melava on 25th Feb 2020', '3', '2020-02-19'),
(4, 'Margdarshan Melava on 23th Feb 2020', '3', '2020-02-20'),
(5, 'South America - Margdarshan Melava on 25th Feb 2020', '2', '2020-02-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
