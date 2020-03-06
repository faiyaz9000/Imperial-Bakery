-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2019 at 06:15 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impbakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `num` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordercake`
--

CREATE TABLE `ordercake` (
  `name` varchar(50) DEFAULT NULL,
  `number` int(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cake` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `dod` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordercake`
--

INSERT INTO `ordercake` (`name`, `number`, `email`, `address`, `cake`, `password`, `dod`) VALUES
('soaib', 7896512, 'soaib@gmail.com', 'vashi', 'Rainbow-Pie Cake - Rs 500', '7', '2019-10-19'),
('ww', 412563, 'ww@gmail.com', 'lonavala', 'Dutch Truffle Cake - Rs 800', '123', '2020-12-21'),
('Irfan', 1023654789, 'irfan@gmail.com', 'ulwe', 'Choco Creme Wonder Cake - Rs 800', 'irfan', '2019-10-21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
