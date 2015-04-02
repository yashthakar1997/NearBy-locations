-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2015 at 12:22 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafes`
--

CREATE TABLE IF NOT EXISTS `cafes` (
  `name` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `location_lat` double NOT NULL,
  `location_lon` double NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafes`
--

INSERT INTO `cafes` (`name`, `city`, `location_lat`, `location_lon`, `created_at`, `updated_at`) VALUES
('MoMo Café - Courtyard By Marriott', 'ahmedabad', 23.027821, 72.512148, 0, 0),
('Agashiye - The House Of MG\n', 'ahmedabad', 23.027074, 72.581656, 0, 0),
('The Square - Hotel Novotel\n', 'ahmedabad', 23.024155, 72.507073, 0, 0),
('Collage - Hyatt\n', 'ahmedabad', 23.039488, 72.531197, 0, 0),
('Timpani - Radisson Blu\n', 'ahmedabad', 23.023071, 72.557077, 0, 0),
('Nonya - Hyatt\n', 'ahmedabad', 23.039651, 72.53089, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ReEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Conformpassword` varchar(30) NOT NULL,
  `Birthdate` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1127 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `Email`, `ReEmail`, `Password`, `Conformpassword`, `Birthdate`, `Location`) VALUES
(1126, 'jaimin', 'jai@abc.com', 'jai@abc.com', 'jai', 'jai', '4-6-1997', 'ahmedabad'),
(1, 'yashthakar', 'yash@gmail.com', 'yash@gmail.com', 'yas', 'yash', '7-1-1997', 'mehsana'),
(1123, 'jaimin', 'jai@abc.com', 'jai@abc.com', 'jai', 'jai', '4-6-1997', 'ahmedabad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
