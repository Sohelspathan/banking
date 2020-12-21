-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 07:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sohel's bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Balance` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Name`, `Email`, `Balance`) VALUES
(101, 'Ubed', 'ubed@gmail.com', 1000),
(102, 'Vamshi', 'vamshi@gmail.com', 1000),
(103, 'Mahmood', 'mahmood@gmail.com', 1000),
(104, 'Mohsin', 'mohsin@gmail.com', 1000),
(105, 'Shakib', 'shakib@gmail.com', 1000),
(106, 'Nikhil', 'nikhil@gmail.com', 1000),
(107, 'Kalyan', 'kalyan@gmail.com', 1000),
(108, 'Pavan', 'pavan@gmail.com', 1000),
(109, 'Misba', 'misba@gmail.com', 1000),
(110, 'Najib', 'najib@gmail.com', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `ministatement`
--

CREATE TABLE `ministatement` (
  `Sender` varchar(10) NOT NULL,
  `Receiver` varchar(10) NOT NULL,
  `Amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
