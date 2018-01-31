-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2018 at 06:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bringdbcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerLastName` varchar(255) NOT NULL,
  `customerTelephoneNumber` varchar(50) NOT NULL,
  `customerUsreNeme` varchar(255) NOT NULL,
  `customerPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerName`, `customerLastName`, `customerTelephoneNumber`, `customerUsreNeme`, `customerPassword`) VALUES
(1, 'ซอนโฮ', 'ยู', '0801234567', 'customer1', 'qwe'),
(2, 'ควานลิน', 'ไล', '0801234568', 'customer2', 'qwe'),
(3, 'ฏอฮีเราะฮ์', 'ฮูซัยนี', '0821234567', 'customer3', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `customerhistory`
--

CREATE TABLE `customerhistory` (
  `customerHistoryNo.` int(11) NOT NULL,
  `customer_customerID` int(11) NOT NULL,
  `location_locationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverID` int(11) NOT NULL,
  `driverName` varchar(255) NOT NULL,
  `driverLastName` varchar(255) NOT NULL,
  `driverTelephoneNumber` varchar(50) NOT NULL,
  `cartype` varchar(255) NOT NULL,
  `driverUserName` varchar(255) NOT NULL,
  `driverPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverID`, `driverName`, `driverLastName`, `driverTelephoneNumber`, `cartype`, `driverUserName`, `driverPassword`) VALUES
(1, 'กิตปกรณ์', 'ทองเงิน', '0811234567', 'รถมอไซต์', 'driver1', 'qwe'),
(2, 'ณัฐวุฒิ', 'ชูบัวทอง', '0811234569', 'รถยนต์', 'driver2', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `driverhistory`
--

CREATE TABLE `driverhistory` (
  `driverHistoryNo.` int(11) NOT NULL,
  `driver_driverID` int(11) NOT NULL,
  `location_locationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationID` int(11) NOT NULL,
  `locationName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationID`, `locationName`) VALUES
(1, 'หอพักลักษณานิเวศ1'),
(2, 'หอพักลักษณานิเวศ2'),
(3, 'หอพักลักษณานิเวศ3'),
(4, 'หอพักลักษณานิเวศ4'),
(5, 'หอพักลักษณานิเวศ5'),
(6, 'หอพักลักษณานิเวศ7'),
(7, 'หอพักลักษณานิเวศ10'),
(8, 'หอพักลักษณานิเวศ11'),
(9, 'หอพักลักษณานิเวศ13'),
(10, 'หอพักลักษณานิเวศ14'),
(11, 'หอพักลักษณานิเวศ16'),
(12, 'หอพักลักษณานิเวศ17'),
(13, 'หอพักลักษณานิเวศ18'),
(14, 'อาคารเรียนรวม1'),
(15, 'อาคารเรียนรวม3'),
(16, 'อาคารเรียนรวม5'),
(17, 'อาคารเรียนรวม7'),
(18, 'อาคารไทยบุรี');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `CusName` varchar(100) NOT NULL,
  `CusSir` varchar(100) NOT NULL,
  `Here` varchar(100) NOT NULL,
  `Going` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`CusName`, `CusSir`, `Here`, `Going`) VALUES
('hh', 'hh', 'hh', 'hh'),
('hh', 'hh', 'hh', 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `ridehistory`
--

CREATE TABLE `ridehistory` (
  `rideHistoryNo.` int(11) NOT NULL,
  `customer_customerID` int(11) NOT NULL,
  `driver_driverID` int(11) NOT NULL,
  `rideHistoryDate` date NOT NULL,
  `rideHistoryTIme` time NOT NULL,
  `rideStatus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customerhistory`
--
ALTER TABLE `customerhistory`
  ADD PRIMARY KEY (`customerHistoryNo.`,`customer_customerID`,`location_locationID`),
  ADD KEY `fk_customer_has_location_location1_idx` (`location_locationID`),
  ADD KEY `fk_customer_has_location_customer_idx` (`customer_customerID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverID`);

--
-- Indexes for table `driverhistory`
--
ALTER TABLE `driverhistory`
  ADD PRIMARY KEY (`driverHistoryNo.`,`driver_driverID`,`location_locationID`),
  ADD KEY `fk_driver_has_location_location1_idx` (`location_locationID`),
  ADD KEY `fk_driver_has_location_driver1_idx` (`driver_driverID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `ridehistory`
--
ALTER TABLE `ridehistory`
  ADD PRIMARY KEY (`rideHistoryNo.`,`customer_customerID`,`driver_driverID`),
  ADD KEY `fk_customer_has_driver_driver1_idx` (`driver_driverID`),
  ADD KEY `fk_customer_has_driver_customer1_idx` (`customer_customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerhistory`
--
ALTER TABLE `customerhistory`
  MODIFY `customerHistoryNo.` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driverhistory`
--
ALTER TABLE `driverhistory`
  MODIFY `driverHistoryNo.` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ridehistory`
--
ALTER TABLE `ridehistory`
  MODIFY `rideHistoryNo.` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerhistory`
--
ALTER TABLE `customerhistory`
  ADD CONSTRAINT `fk_customer_has_location_customer` FOREIGN KEY (`customer_customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_has_location_location1` FOREIGN KEY (`location_locationID`) REFERENCES `location` (`locationID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `driverhistory`
--
ALTER TABLE `driverhistory`
  ADD CONSTRAINT `fk_driver_has_location_driver1` FOREIGN KEY (`driver_driverID`) REFERENCES `driver` (`driverID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_driver_has_location_location1` FOREIGN KEY (`location_locationID`) REFERENCES `location` (`locationID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ridehistory`
--
ALTER TABLE `ridehistory`
  ADD CONSTRAINT `fk_customer_has_driver_customer1` FOREIGN KEY (`customer_customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_has_driver_driver1` FOREIGN KEY (`driver_driverID`) REFERENCES `driver` (`driverID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
