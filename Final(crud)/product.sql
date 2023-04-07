-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 05:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `name` varchar(50) NOT NULL,
  `bPrice` varchar(50) NOT NULL,
  `sPrice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`name`, `bPrice`, `sPrice`) VALUES
('', '', ''),
('oneplus', '52000', '56000'),
('oneplus6', '52000', '56000'),
('Philips', '10000', '12000'),
('Redmi10', '10000', '12000'),
('Redmi2', '10000', '12000'),
('Redmi3', '10000', '12000'),
('Redmi4', '10000', '12000'),
('Redmi5', '10000', '12000'),
('Redmi8', '10000', '12000'),
('Redmi9', '10000', '12000'),
('Samsung', '', ''),
('Toyota', '100000', '120000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
