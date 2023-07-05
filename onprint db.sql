-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Jan 25, 2023 at 11:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `userID` varchar(10) NOT NULL,
  `A_position` varchar(20) NOT NULL,
  `no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` varchar(5) NOT NULL,
  `CityName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_ID`, `CityName`) VALUES
('101', 'Pekan'),
('102', 'Gambang'),
('103', 'Balok'),
('104', 'Bandar Bera'),
('105', 'Bandar Pusat Jengka'),
('106', 'Bandar Pusat Jengka'),
('107', 'Bandar Tun Abdul Razak'),
('108', ' Padang Tengku'),
('109', ' Lurah Bilut'),
('110', 'Kuantan'),
('111', 'Kuala Rompin'),
('112', 'Kuala Krau'),
('113', 'Kemayan'),
('114', 'Jerantut'),
('115', 'Genting Highlands'),
('116', 'Bukit Goh'),
('117', 'Bukit Fraser'),
('118', 'Brinchang'),
('119', 'Bentong'),
('120', 'Benta');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `C_ID` varchar(10) NOT NULL,
  `DeliveryID` varchar(10) NOT NULL,
  `C_rate` int(11) NOT NULL,
  `C_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryID` varchar(10) NOT NULL,
  `deliveryDate` date NOT NULL,
  `deliveryStatus` varchar(15) NOT NULL,
  `deliveryAddress` varchar(100) NOT NULL,
  `userID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `userID` varchar(10) NOT NULL,
  `G_name` varchar(50) NOT NULL,
  `G_address` varchar(100) NOT NULL,
  `G_telephone` varchar(15) NOT NULL,
  `City_ID` varchar(5) NOT NULL,
  `State_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `InventoryID` varchar(10) NOT NULL,
  `DateIn` date NOT NULL,
  `DateOut` date NOT NULL,
  `InvQuantity` int(11) NOT NULL,
  `ProductID` varchar(10) NOT NULL,
  `OutletID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` varchar(10) NOT NULL,
  `orderDate` datetime NOT NULL,
  `orderQR` int(11) NOT NULL,
  `deliveryLocation` varchar(50) NOT NULL,
  `userID` varchar(10) NOT NULL,
  `paymentID` varchar(10) NOT NULL,
  `DeliveryID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `listID` varchar(10) NOT NULL,
  `olPrice` double NOT NULL,
  `orderAmount` int(11) NOT NULL,
  `orderID` varchar(10) NOT NULL,
  `ProductID` varchar(10) NOT NULL,
  `printingpkgID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` varchar(10) NOT NULL,
  `paymentMethod` varchar(10) NOT NULL,
  `paymentStatus` varchar(10) NOT NULL,
  `paymentDate` datetime NOT NULL,
  `orderID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `PointID` varchar(10) NOT NULL,
  `PointValue` int(11) NOT NULL,
  `PointDate` datetime NOT NULL,
  `userID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printing`
--

CREATE TABLE `printing` (
  `PrintID` varchar(10) NOT NULL,
  `PrintStatus` varchar(15) NOT NULL,
  `PrintDate` date NOT NULL,
  `listID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printing_outlet`
--

CREATE TABLE `printing_outlet` (
  `OutletID` varchar(10) NOT NULL,
  `O_Name` varchar(50) NOT NULL,
  `O_Phone` varchar(15) NOT NULL,
  `O_Location` varchar(100) NOT NULL,
  `pritingType` varchar(20) NOT NULL,
  `userID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printing_packages`
--

CREATE TABLE `printing_packages` (
  `printingpkgID` varchar(10) NOT NULL,
  `printingpkgName` varchar(20) NOT NULL,
  `printingpkgPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(10) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `P_Desc` varchar(100) NOT NULL,
  `P_Price` double NOT NULL,
  `P_Status` varchar(15) NOT NULL,
  `P_Image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `userID` varchar(10) NOT NULL,
  `U_name` varchar(50) NOT NULL,
  `U_address` varchar(100) NOT NULL,
  `U_telephone` varchar(15) NOT NULL,
  `City_ID` varchar(5) NOT NULL,
  `State_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`userID`, `U_name`, `U_address`, `U_telephone`, `City_ID`, `State_ID`) VALUES
('111', 'Rp', 'No 31 Lorong Ixora,', '0177621474', '102', '100'),
('CB20114', 'Arifuzzaman Moin', '110 Noadda, Nabiganj, Bandar, Narayanganj', '+8801521787709', '101', '100'),
('CB20137', 'as', 'UMP Pekan', '01566421', '101', '100');

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `userID` varchar(10) NOT NULL,
  `R_licensetype` varchar(100) NOT NULL,
  `R_available` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`userID`, `R_licensetype`, `R_available`) VALUES
('R123', 'Professional Moto', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_ID` varchar(5) NOT NULL,
  `StateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_ID`, `StateName`) VALUES
('100', 'Pahang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `date`) VALUES
(1, 'Moin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', '2023-01-22'),
(2, 'Alif', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'registered_user', '2023-01-22'),
(3, 'Azman', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'rider', '2023-01-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_ID`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `DeliveryID` (`DeliveryID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `City_ID` (`City_ID`),
  ADD KEY `general_user_ibfk_1` (`State_ID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`InventoryID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `OutletID` (`OutletID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `DeliveryID` (`DeliveryID`),
  ADD KEY `paymentID` (`paymentID`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`listID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `printingpkgID` (`printingpkgID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`PointID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `printing`
--
ALTER TABLE `printing`
  ADD PRIMARY KEY (`PrintID`),
  ADD KEY `listID` (`listID`);

--
-- Indexes for table `printing_outlet`
--
ALTER TABLE `printing_outlet`
  ADD PRIMARY KEY (`OutletID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `printing_packages`
--
ALTER TABLE `printing_packages`
  ADD PRIMARY KEY (`printingpkgID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `City_ID` (`City_ID`),
  ADD KEY `State_ID` (`State_ID`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commission`
--
ALTER TABLE `commission`
  ADD CONSTRAINT `commission_ibfk_1` FOREIGN KEY (`DeliveryID`) REFERENCES `delivery` (`DeliveryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `general_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `registered_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `general_user`
--
ALTER TABLE `general_user`
  ADD CONSTRAINT `general_user_ibfk_1` FOREIGN KEY (`State_ID`) REFERENCES `state` (`State_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`OutletID`) REFERENCES `printing_outlet` (`OutletID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `general_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `general_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`DeliveryID`) REFERENCES `delivery` (`DeliveryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`paymentID`) REFERENCES `payment` (`paymentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`printingpkgID`) REFERENCES `printing_packages` (`printingpkgID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_list_ibfk_3` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`);

--
-- Constraints for table `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `registered_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `printing`
--
ALTER TABLE `printing`
  ADD CONSTRAINT `printing_ibfk_1` FOREIGN KEY (`listID`) REFERENCES `order_list` (`listID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `printing_outlet`
--
ALTER TABLE `printing_outlet`
  ADD CONSTRAINT `printing_outlet_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `administrator` (`userID`);

--
-- Constraints for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD CONSTRAINT `registered_user_ibfk_1` FOREIGN KEY (`City_ID`) REFERENCES `city` (`City_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registered_user_ibfk_2` FOREIGN KEY (`State_ID`) REFERENCES `state` (`State_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
