-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 15, 2023 at 09:40 AM
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
-- Database: `onpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliverylist`
--

CREATE TABLE `deliverylist` (
  `deliveryListID` varchar(10) NOT NULL,
  `rider_ID` varchar(10) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_status` varchar(30) NOT NULL,
  `delivery_status_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliverylist`
--

INSERT INTO `deliverylist` (`deliveryListID`, `rider_ID`, `delivery_date`, `delivery_status`, `delivery_status_date`) VALUES
('DL1', 'RD001', '2021-06-15', 'Ready For Collection', '2021-06-16'),
('DL10', 'RD002', '2021-05-02', 'Delivered', '2021-03-08'),
('DL11', 'RD004', '2021-03-07', 'Delivered', '2021-05-02'),
('DL12', 'RD001', '2020-12-14', 'Ready For Collection', '2021-01-05'),
('DL13', 'RD002', '2021-05-02', 'Ready For Collection', '2021-03-23'),
('DL14', 'RD001', '2021-02-21', 'Ready For Collection', '2020-12-21'),
('DL2', 'RD004', '2021-06-22', 'Delivered', '2021-06-30'),
('DL3', 'RD001', '2021-03-08', 'Delivered', '2021-05-04'),
('DL4', 'RD004', '2021-06-21', 'Delivered', '2021-06-24'),
('DL5', 'RD003', '2021-06-13', 'Delivered', '2021-06-22'),
('DL6', 'RD003', '2021-05-02', 'Delivered', '2021-05-02'),
('DL7', 'RD002', '2021-06-14', 'Ready For Collection', '2021-06-17'),
('DL8', 'RD002', '2021-05-03', 'Ready For Collection', '2021-02-16'),
('DL9', 'RD003', '2021-02-01', 'Delivered', '2021-04-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deliverylist`
--
ALTER TABLE `deliverylist`
  ADD PRIMARY KEY (`deliveryListID`),
  ADD KEY `goods_ID` (`rider_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
