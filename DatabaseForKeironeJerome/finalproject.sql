-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2017 at 06:47 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings_cars`
--

DROP TABLE IF EXISTS `bookings_cars`;
CREATE TABLE IF NOT EXISTS `bookings_cars` (
  `Car_BK_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_FK_ID` int(11) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Car_FK_ID` int(11) NOT NULL,
  `Credit_Card` varchar(50) NOT NULL,
  `Card_Name` varchar(50) NOT NULL,
  `Card_Security_Code` int(11) NOT NULL,
  `Card_Exp_Date` varchar(50) NOT NULL,
  `Card_Shipping_Address` varchar(50) NOT NULL,
  `Card_Billing_Address` varchar(50) NOT NULL,
  `Card_PhoneNum` varchar(50) NOT NULL,
  PRIMARY KEY (`Car_BK_ID`),
  KEY `Car_FK_ID` (`Car_FK_ID`),
  KEY `User_FK_ID` (`User_FK_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_cars`
--

INSERT INTO `bookings_cars` (`Car_BK_ID`, `User_FK_ID`, `StartDate`, `EndDate`, `Car_FK_ID`, `Credit_Card`, `Card_Name`, `Card_Security_Code`, `Card_Exp_Date`, `Card_Shipping_Address`, `Card_Billing_Address`, `Card_PhoneNum`) VALUES
(1, 1, NULL, NULL, 1, '\'1112223334444\'', '\'James Gangavarapu\'', 444, '\'5/4\'', '\'My Home Address\'', '\'My Billing Address\'', '\'5554449999\'');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_flights`
--

DROP TABLE IF EXISTS `bookings_flights`;
CREATE TABLE IF NOT EXISTS `bookings_flights` (
  `Flight_Book_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_FK_ID` int(11) NOT NULL,
  `Schedule_FK_Flight` int(11) NOT NULL,
  `Credit_Card` varchar(50) NOT NULL,
  `Card_Name` varchar(45) NOT NULL,
  `Card_Security_Code` int(11) NOT NULL,
  `Card_Exp_Date` varchar(45) NOT NULL,
  `Card_Shipping_Address` varchar(50) NOT NULL,
  `Card_Billing_Address` varchar(50) NOT NULL,
  `Card_PhoneNum` varchar(50) NOT NULL,
  PRIMARY KEY (`Flight_Book_ID`),
  KEY `Schedule_FK_Flight` (`Schedule_FK_Flight`),
  KEY `User_FK_ID` (`User_FK_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_flights`
--

INSERT INTO `bookings_flights` (`Flight_Book_ID`, `User_FK_ID`, `Schedule_FK_Flight`, `Credit_Card`, `Card_Name`, `Card_Security_Code`, `Card_Exp_Date`, `Card_Shipping_Address`, `Card_Billing_Address`, `Card_PhoneNum`) VALUES
(1, 1, 1, '45554', '\'FAke TEst Name\'', 333, '\'11/22\'', '\'Fake Shipping Address\'', '\'Fake Billing Address\'', '33444'),
(2, 1, 1, '\'455555555555555556666666\'', '\'dsd\'', 444, '\'ddf\'', '\'12334\'', '\'sdfdsf\'', '\'6667779999\''),
(3, 1, 2, '\'1112223334444\'', '\'James Gangavarapu\'', 444, '\'5/4\'', '\'My Home Address\'', '\'My Billing Address\'', '\'5554449999\'');

-- --------------------------------------------------------

--
-- Table structure for table `bookings_parking`
--

DROP TABLE IF EXISTS `bookings_parking`;
CREATE TABLE IF NOT EXISTS `bookings_parking` (
  `Park_BK_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_FK_ID` int(11) NOT NULL,
  `Park_FK_ID` int(11) NOT NULL,
  `Credit_Card` varchar(50) NOT NULL,
  `Card_Name` varchar(50) NOT NULL,
  `Card_Security_Code` int(11) NOT NULL,
  `Card_Exp_Date` varchar(50) NOT NULL,
  `Card_Shipping_Address` varchar(50) NOT NULL,
  `Card_Billing_Address` varchar(50) NOT NULL,
  `Card_PhoneNum` varchar(50) NOT NULL,
  PRIMARY KEY (`Park_BK_ID`),
  KEY `User_FK_ID` (`User_FK_ID`),
  KEY `Park_FK_ID` (`Park_FK_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_parking`
--

INSERT INTO `bookings_parking` (`Park_BK_ID`, `User_FK_ID`, `Park_FK_ID`, `Credit_Card`, `Card_Name`, `Card_Security_Code`, `Card_Exp_Date`, `Card_Shipping_Address`, `Card_Billing_Address`, `Card_PhoneNum`) VALUES
(1, 1, 2, '\'wererewr\'', '\'wereewr\'', 222, '\'esdfd\'', '\'dsfdsf\'', '\'dsfdsf\'', '\'dsfsd\''),
(2, 1, 1, '\'1112223334444\'', '\'James Gangavarapu\'', 444, '\'5/4\'', '\'My Home Address\'', '\'My Billing Address\'', '\'5554449999\'');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `Car_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Car_Brand_Make` varchar(45) NOT NULL,
  `Car_Model_Name` varchar(45) NOT NULL,
  `Car_Location` varchar(45) NOT NULL,
  `Car_Year` int(4) NOT NULL,
  `Max_Car_Capacity` int(11) NOT NULL,
  `Available_Car_Capacity` int(11) NOT NULL,
  `Car_Type` varchar(45) NOT NULL,
  `Rental_Price` int(11) NOT NULL,
  PRIMARY KEY (`Car_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Car_ID`, `Car_Brand_Make`, `Car_Model_Name`, `Car_Location`, `Car_Year`, `Max_Car_Capacity`, `Available_Car_Capacity`, `Car_Type`, `Rental_Price`) VALUES
(1, 'Chevrolet', 'Tahoe', 'Atlanta', 2017, 40, 40, 'SUV', 80),
(2, 'Honda', 'CR-V', 'Atlanta', 2013, 50, 50, 'SUV', 30);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `Flight_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Flight_Name` varchar(45) NOT NULL,
  `Airline_Name` varchar(45) NOT NULL,
  `Final_Capacity` int(11) NOT NULL,
  PRIMARY KEY (`Flight_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`Flight_ID`, `Flight_Name`, `Airline_Name`, `Final_Capacity`) VALUES
(1, 'UA 134', 'United Airlines', 80),
(2, 'AA 765', 'American Airlines', 45);

-- --------------------------------------------------------

--
-- Table structure for table `flight_schedule`
--

DROP TABLE IF EXISTS `flight_schedule`;
CREATE TABLE IF NOT EXISTS `flight_schedule` (
  `FSchedule_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FlightID_FK` int(11) NOT NULL,
  `Current_Capacity` int(11) NOT NULL,
  `Start` datetime NOT NULL,
  `End_d` datetime NOT NULL,
  `Depart_Location` varchar(45) NOT NULL,
  `Destination` varchar(45) NOT NULL,
  `Flight_Price` int(11) NOT NULL,
  PRIMARY KEY (`FSchedule_ID`),
  KEY `FlightID_FK` (`FlightID_FK`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_schedule`
--

INSERT INTO `flight_schedule` (`FSchedule_ID`, `FlightID_FK`, `Current_Capacity`, `Start`, `End_d`, `Depart_Location`, `Destination`, `Flight_Price`) VALUES
(1, 1, 80, '2000-11-29 01:01:30', '2000-11-30 01:01:30', 'Atlanta', 'Mexico', 250),
(2, 2, 45, '2000-11-29 01:01:30', '2000-11-30 01:01:30', 'Atlanta', 'Mexico', 200);

-- --------------------------------------------------------

--
-- Table structure for table `parking_locations`
--

DROP TABLE IF EXISTS `parking_locations`;
CREATE TABLE IF NOT EXISTS `parking_locations` (
  `Park_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Parking_Lot_Name` varchar(45) NOT NULL,
  `Location` varchar(45) NOT NULL,
  `Max_Capacity` int(11) NOT NULL,
  `Available_Capacity` int(11) NOT NULL,
  `Price` double NOT NULL,
  PRIMARY KEY (`Park_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_locations`
--

INSERT INTO `parking_locations` (`Park_ID`, `Parking_Lot_Name`, `Location`, `Max_Capacity`, `Available_Capacity`, `Price`) VALUES
(1, 'M Deck', 'Atlanta', 400, 400, 8),
(2, 'G Deck', 'Atlanta', 200, 200, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID_PK` int(11) NOT NULL AUTO_INCREMENT,
  `User_Email` varchar(45) NOT NULL,
  `User_Fname` varchar(45) NOT NULL,
  `User_Lname` varchar(45) NOT NULL,
  `User_Password` varchar(45) NOT NULL,
  PRIMARY KEY (`UserID_PK`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID_PK`, `User_Email`, `User_Fname`, `User_Lname`, `User_Password`) VALUES
(1, 'email1', 'John', 'Doe', 'mypassword'),
(2, 'test2', 'Jane', 'Doe', 'mypassword2'),
(3, 'jamesemail', 'James', 'Gangavarapu', '1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings_cars`
--
ALTER TABLE `bookings_cars`
  ADD CONSTRAINT `bookings_cars_ibfk_1` FOREIGN KEY (`Car_FK_ID`) REFERENCES `cars` (`Car_ID`) ON DELETE NO ACTION,
  ADD CONSTRAINT `bookings_cars_ibfk_2` FOREIGN KEY (`User_FK_ID`) REFERENCES `users` (`UserID_PK`);

--
-- Constraints for table `bookings_flights`
--
ALTER TABLE `bookings_flights`
  ADD CONSTRAINT `bookings_flights_ibfk_1` FOREIGN KEY (`Schedule_FK_Flight`) REFERENCES `flight_schedule` (`FSchedule_ID`) ON DELETE NO ACTION,
  ADD CONSTRAINT `bookings_flights_ibfk_2` FOREIGN KEY (`User_FK_ID`) REFERENCES `users` (`UserID_PK`);

--
-- Constraints for table `bookings_parking`
--
ALTER TABLE `bookings_parking`
  ADD CONSTRAINT `bookings_parking_ibfk_1` FOREIGN KEY (`User_FK_ID`) REFERENCES `users` (`UserID_PK`) ON DELETE NO ACTION,
  ADD CONSTRAINT `bookings_parking_ibfk_2` FOREIGN KEY (`Park_FK_ID`) REFERENCES `parking_locations` (`Park_ID`) ON DELETE NO ACTION;

--
-- Constraints for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD CONSTRAINT `flight_schedule_ibfk_1` FOREIGN KEY (`FlightID_FK`) REFERENCES `flights` (`Flight_ID`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
