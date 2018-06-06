-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 01:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodinfo`
--

CREATE TABLE `foodinfo` (
  `foodName` varchar(30) NOT NULL,
  `foodPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodinfo`
--

INSERT INTO `foodinfo` (`foodName`, `foodPrice`) VALUES
('Morog Polao', 200),
('Chicken Biriani', 220),
('Beaty Lassi', 50),
('Nurani Sorbot', 30),
('Pizza', 550),
('Pasta', 320),
('Cold Coffee', 120),
('Ice Cream', 200);

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `orderId` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderForm`
--

CREATE TABLE `orderForm` (
  `orderSerial` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userMail` varchar(20) NOT NULL,
  `order1` varchar(20) NOT NULL,
  `order2` varchar(20) NOT NULL,
  `order3` varchar(20) NOT NULL,
  `order4` varchar(20) NOT NULL,
  `timeToCreate` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderForm`
--

INSERT INTO `orderForm` (`orderSerial`, `userName`, `userMail`, `order1`, `order2`, `order3`, `order4`, `timeToCreate`) VALUES
('1', 'Admin', 'admin@fz.com', 'Morog Polao', 'Cold Coffee', 'Ice Cream', 'Nurani Sorbot', '01:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `creationTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`firstName`, `lastName`, `email`, `pass`, `creationTime`) VALUES
('Admin', 'Admin', 'admin@fz.com', 'admin', '01:49:39'),
('Hasan', 'Mahbub', 'hasan@gmail.com', 'hasan', '01:50:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
