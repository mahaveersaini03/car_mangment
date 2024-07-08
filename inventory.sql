-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 05:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `VIN` varchar(17) NOT NULL,
  `YEAR` int(11) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Trim` varchar(50) NOT NULL,
  `Ext_color` varchar(50) NOT NULL,
  `Int_color` varchar(50) NOT NULL,
  `Asking_price` decimal(10,0) NOT NULL,
  `Sale_prie` decimal(10,0) NOT NULL,
  `Purchase_price` decimal(10,0) NOT NULL,
  `Mileage` int(11) NOT NULL,
  `Transmission` varchar(50) NOT NULL,
  `Purhase_date` date NOT NULL,
  `Sale_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`VIN`, `YEAR`, `Make`, `Model`, `Trim`, `Ext_color`, `Int_color`, `Asking_price`, `Sale_prie`, `Purchase_price`, `Mileage`, `Transmission`, `Purhase_date`, `Sale_date`) VALUES
('10001', 2016, 'Hyundai}', '{Grand i10}', 'Sportz', 'Sleek Silver', 'Gray', 300000, 280000, 450000, 45000, 'Manual', '0000-00-00', '0000-00-00'),
('10003', 2018, 'Maruti', 'Brezza', 'VXI', 'Red', 'white', 500000, 450000, 600000, 25000, 'manual', '0000-00-00', '0000-00-00'),
('10004', 2012, 'Volks Vagon', 'Polo', 'sportz', 'white', 'black', 200000, 150000, 500000, 70000, 'automatic', '2012-01-01', '2023-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`VIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
