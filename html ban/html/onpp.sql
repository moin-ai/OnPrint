-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 25, 2023 at 01:57 PM
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
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `userID` varchar(10) NOT NULL,
  `A_position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` varchar(5) NOT NULL,
  `CityName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `C_ID` varchar(10) NOT NULL,
  `DeliveryID` varchar(10) NOT NULL,
  `C_rate` int(11) NOT NULL,
  `C_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_ID` int(10) NOT NULL,
  `rider_ID` varchar(10) NOT NULL,
  `complaint_type` varchar(30) NOT NULL,
  `complaint_desc` varchar(100) NOT NULL,
  `complaint_status` varchar(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_ID`, `rider_ID`, `complaint_type`, `complaint_desc`, `complaint_status`, `name`) VALUES
(1, 'CB19058', 'Lost Item', 'cannot find the goods during retrieval of goods', 'Solved', ''),
(2, 'CB19079', 'Damaged Item', ' Goods totally damage       \r\n        ', 'Pending', ''),
(3, 'CB19076', 'Damaged Item', 'partially damage goods        \r\n        ', 'Solved', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `listID` varchar(10) NOT NULL,
  `olPrice` double NOT NULL,
  `orderAmount` int(11) NOT NULL,
  `orderID` varchar(10) NOT NULL,
  `ProductID` varchar(10) NOT NULL,
  `printingpkgID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `PointID` varchar(10) NOT NULL,
  `PointValue` int(11) NOT NULL,
  `PointDate` datetime NOT NULL,
  `userID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `printing`
--

CREATE TABLE `printing` (
  `PrintID` varchar(10) NOT NULL,
  `PrintStatus` varchar(15) NOT NULL,
  `PrintDate` date NOT NULL,
  `listID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `printing_packages`
--

CREATE TABLE `printing_packages` (
  `printingpkgID` varchar(10) NOT NULL,
  `printingpkgName` varchar(20) NOT NULL,
  `printingpkgPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `userID` varchar(10) NOT NULL,
  `U_name` varchar(50) NOT NULL,
  `U_address` varchar(100) NOT NULL,
  `U_telephone` varchar(15) NOT NULL,
  `U_password` varchar(20) NOT NULL,
  `City_ID` varchar(5) NOT NULL,
  `State_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `riderID` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`riderID`, `name`, `contact`, `address`, `email`, `date_created`) VALUES
('RD001', 'Muhammad Syafiie Bin Anwar', '010-0019951', 'No 19, JLN MELOR, 28660, PEKAN, PAHANG', 'syafii6060@gmail.com', '2022-02-02 18:08:35'),
('RD002', 'MUHAMMD ANWAR BIN YASSIN', '011-951 6888', 'NO 20, JLN SG 5, TAMAN TAS, 26600, GAMBANG, SELANGOR', 'anwar1@gmail.com', '2022-01-07 18:10:33'),
('RD003', 'KHAIRUL IZZAH BINTI ISMAIL', '019-688 7909', 'NO 33, JALAN 2, TAMAN MELOR, 26600, PEKAN, PAHANG', 'izzah09@gmail.com', '2022-03-04 18:17:10'),
('RD005', 'HAKIMI BIN DIN', '016-967 0954', 'NO 165, JALAN 44, TAMAN TAS, 26000, GAMBANG, PAHANG', 'hakimi4@gmail.com', '2022-09-08 18:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_ID` varchar(5) NOT NULL,
  `StateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_ID`),
  ADD UNIQUE KEY `stud_ID` (`rider_ID`),
  ADD UNIQUE KEY `rider_ID` (`rider_ID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `deliverylist`
--
ALTER TABLE `deliverylist`
  ADD PRIMARY KEY (`deliveryListID`),
  ADD KEY `goods_ID` (`rider_ID`);

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
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`listID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `printingpkgID` (`printingpkgID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `DeliveryID` (`DeliveryID`),
  ADD KEY `paymentID` (`paymentID`);

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
  ADD PRIMARY KEY (`riderID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD CONSTRAINT `orderlist_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderlist_ibfk_2` FOREIGN KEY (`printingpkgID`) REFERENCES `printing_packages` (`printingpkgID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderlist_ibfk_3` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `general_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `general_user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`DeliveryID`) REFERENCES `delivery` (`DeliveryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`paymentID`) REFERENCES `payment` (`paymentID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `printing_ibfk_1` FOREIGN KEY (`listID`) REFERENCES `orderlist` (`listID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
