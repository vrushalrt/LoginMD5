-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2016 at 05:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email_address` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `signup_date`, `first_name`, `last_name`, `email_address`) VALUES
(1, 'vrushal', '202cb962ac59075b964b07152d234b70', '2015-10-06 18:19:33', 'vrushal', 'raut', 'vrushalrt@gmail.com'),
(2, 'vrushal1', '123', '2015-10-06 18:20:17', NULL, NULL, NULL),
(3, 'vrushalrau', '202cb962ac59075b964b07152d234b70', '2015-10-07 19:53:13', 'Vrushal', 'Raut', 'vrushalraut@gmail.com'),
(4, 'vrushalrau', '202cb962ac59075b964b07152d234b70', '2015-10-07 20:01:49', 'Vrushal', 'Raut', 'vrushalraut@gmail.com'),
(5, 'vrushalrau', '202cb962ac59075b964b07152d234b70', '2015-10-07 20:02:35', 'Vrushal', 'Raut', 'vrushalraut@gmail.com'),
(6, 'vrushalrau', '202cb962ac59075b964b07152d234b70', '2015-10-07 20:03:00', 'Vrushal', 'Raut', 'vrushalraut@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
