-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 11:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign-up`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `ID` int(5) NOT NULL,
  `Name` text NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Canteen` varchar(45) NOT NULL,
  `Dosa` int(2) NOT NULL,
  `Idly` int(2) NOT NULL,
  `Burger` int(2) NOT NULL,
  `Hdog` int(2) NOT NULL,
  `Rice` int(2) NOT NULL,
  `Fries` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`ID`, `Name`, `Username`, `Canteen`, `Dosa`, `Idly`, `Burger`, `Hdog`, `Rice`, `Fries`) VALUES
(1, 'Shreyansh', 'shreyanshsatvik', 'A-Block', 1, 1, 1, 1, 1, 1),
(2, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 0, 0, 0, 0, 0, 0),
(3, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 0, 0, 0, 0, 0, 0),
(4, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 2, 2, 3, 2, 2, 1),
(5, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 0, 0, 0, 0, 0, 0),
(6, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 2, 0, 0, 0, 0, 0),
(7, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 0, 0, 0, 0, 0, 0),
(8, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 0, 0, 0, 0, 0, 0),
(9, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 0, 0, 0, 0, 0, 0),
(10, 'Shreyansh', 'shreyanshsatvik', 'Select Night Canteen', 0, 0, 0, 0, 0, 0),
(11, 'Kaustav', 'kaustavdadhichi', 'Select Night Canteen', 3, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `emergencyservice`
--

CREATE TABLE `emergencyservice` (
  `ID` int(5) NOT NULL,
  `Name` text NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Block` varchar(45) NOT NULL,
  `Room` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergencyservice`
--

INSERT INTO `emergencyservice` (`ID`, `Name`, `Username`, `Block`, `Room`) VALUES
(1, 'Shreyansh', 'shreyanshsatvik', 'Q-Block', 652),
(2, 'Jaikant', 'jaikant123', 'J-Block', 111),
(3, 'Shreyansh', 'shreyanshsatvij', 'Q-Block', 652),
(4, 'Raghab', 'jindal', 'N-Block', 112),
(5, 'sa', 'nfjkn', 'A-Block', 584),
(6, 'Shreyansh', 'shreyanshsatvik', 'Q-Block', 652),
(7, 'Shreyansh', 'shreyanshsatvik', 'Q-Block', 652),
(8, 'Shreyansh', 'shreyanshsatvik', 'Q-Block', 652),
(9, 'Shreyansh', 'shreyanshsatvik', 'Q-Block', 652),
(10, 'Kaustav', 'kaustavdadhichi', 'F-Block', 203);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Name` text NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Canteen` varchar(45) NOT NULL,
  `Dosa` int(2) NOT NULL,
  `Idly` int(2) NOT NULL,
  `Burger` int(2) NOT NULL,
  `Hdog` int(2) NOT NULL,
  `Rice` int(2) NOT NULL,
  `Fries` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maintainance`
--

CREATE TABLE `maintainance` (
  `ID` int(11) NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Block` varchar(40) NOT NULL,
  `Repair` varchar(40) NOT NULL,
  `Room No` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintainance`
--

INSERT INTO `maintainance` (`ID`, `First Name`, `Last Name`, `Block`, `Repair`, `Room No`) VALUES
(1, 'Shreyansh', 'Satvik', 'Q-Block', 'Wifi Repair', 0),
(2, 'Ram', 'Raghuvanshi', 'A-Block', 'Electric Appliances Repair', 441),
(3, 'Shreyansh', 'Satvik', 'A-Block', 'Wifi Repair', 885),
(4, 'Shreyansh', 'Satvik', 'A-Block', 'Power Related', 885),
(5, 'Harish', 'Ram', 'L-Block', 'Electric Appliances Repair', 552),
(6, 'Shreyansh', 'Satvik', 'A-Block', 'Electric Appliances Repair', 552),
(7, 'Shreyansh', 'Satvik', 'A-Block', 'Electric Appliances Repair', 552),
(8, 'Shreyansh', 'Satvik', 'A-Block', 'Electric Appliances Repair', 552),
(9, 'Shreyansh', 'Satvik', 'Q-Block', 'Electric Appliances Repair', 652),
(10, 'Shreyansh', 'Satvik', 'Q-Block', 'Electric Appliances Repair', 652),
(11, 'Shreyansh', 'Satvik', 'Q-Block', 'Electric Appliances Repair', 652),
(12, 'Shreyansh', 'Satvik', 'Q-Block', 'Electric Appliances Repair', 652),
(13, 'Shreyansh', 'Satvik', 'Q-Block', 'Electric Appliances Repair', 652),
(14, 'Shreyansh', 'Satvik', 'Q-Block', 'Power Related', 652),
(15, 'Kaustav', 'Dadhichi', 'F-Block', 'Others', 203);

-- --------------------------------------------------------

--
-- Table structure for table `repair_workers`
--

CREATE TABLE `repair_workers` (
  `Employee ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Work` varchar(45) NOT NULL,
  `Mobile No` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repair_workers`
--

INSERT INTO `repair_workers` (`Employee ID`, `Name`, `Work`, `Mobile No`) VALUES
(1258, 'Rakesh Sharma', 'Wifi Repair', 1258741356),
(1289, 'Ramesh Prashad', 'Electric Appliances Repair', 789456125),
(1475, 'Praveen Agarwal', 'Power Related', 953147524),
(5203, 'Arvind Singh', 'Furniture Repair', 52369745);

-- --------------------------------------------------------

--
-- Table structure for table `roomcleaning`
--

CREATE TABLE `roomcleaning` (
  `ID` int(11) NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Block` varchar(40) NOT NULL,
  `Room No` int(5) NOT NULL,
  `Time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomcleaning`
--

INSERT INTO `roomcleaning` (`ID`, `First Name`, `Last Name`, `Block`, `Room No`, `Time`) VALUES
(1, 'Shreyansh', 'Satvik', 'Q-Block', 652, '10-12AM'),
(2, 'Shreyansh', 'Satvik', 'Q-Block', 652, '5-10am'),
(3, 'Yokesh', 'Stark', 'F-Block', 203, '5-10pm'),
(4, 'Shreyansh', 'Satvik', 'Q-Block', 652, '9-12'),
(5, 'Shreyansh', 'Satvik', 'Q-Block', 652, '10-11AM'),
(6, 'Shreyansh', 'Satvik', 'Q-Block', 652, '10-11'),
(7, 'Shreyansh', 'Satvik', 'Q-Block', 652, '09-10am'),
(8, 'Shreyansh', 'Satvik', 'Q-Block', 652, '5-12pm'),
(9, 'Shreyansh', 'Satvik', 'Q-Block', 652, '5-8PM'),
(10, 'Shreyansh', 'Satvik', 'Q-Block', 652, '10-1'),
(11, 'Shreyansh', 'Satvik', 'Q-Block', 652, '8-9'),
(12, 'Shreyansh', 'Satvik', 'Q-Block', 652, '10am-01pm'),
(13, 'Kaustav', 'Dadhichi', 'F-Block', 203, '2-4pm');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Email-Id` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Gender` text NOT NULL,
  `Block` varchar(30) NOT NULL,
  `Room-No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`First Name`, `Last Name`, `Email-Id`, `Username`, `Password`, `Gender`, `Block`, `Room-No`) VALUES
('Kaustav', 'Dadhichi', 'kaustavdadhichi@gmail.com', 'kaustavdadhichi', 'dadhichi', 'Male', 'F-Block', 203),
('Parash', 'Jindal', 'parashjindal@gmail.com', 'parashjindal', 'parashjinda', 'Male', 'A-Block', 999),
('Shreyansh', 'Satvik', 'shreyanshsatvik@gmail.com', 'shreyanshsatvik', 'shreyansh', 'Male', 'Q-Block', 652),
('Sourav', 'Baghmar', 'souravbaghmar@gmail.com', 'souravbaghmar', 'baghmar', 'Male', 'F-Block', 203),
('Yokesh', 'Stark', 'yokeshtony@gmail.com', 'Yokesh_Stark', 'password', 'Male', 'F-Block', 203);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `Employee ID` int(5) NOT NULL,
  `Name` text NOT NULL,
  `Block` varchar(45) NOT NULL,
  `Mobile No` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`Employee ID`, `Name`, `Block`, `Mobile No`) VALUES
(2011, 'James', 'J-Block', 24523787),
(5001, 'Ramesh', 'H-Block', 24524897),
(5002, 'Rahul', 'G-Block', 2452357),
(5021, 'Shyam', 'K-Block', 24523517),
(5031, 'Niranjan', 'L-Block', 24543597),
(5041, 'Messi', 'M-Block', 24523557),
(5051, 'Draxler', 'N-Block', 24526597),
(5061, 'Ronaldo', 'P-Block', 24533597),
(5071, 'Ramesh', 'Q-Block', 24523597),
(5081, 'Niresh', 'D-Annex', 24523597),
(5111, 'Hariom,', 'F-Block', 24523514),
(5211, 'Harshavardhan', 'E-Block', 32523597),
(5311, 'Ajim', 'D-Block', 245212597),
(5411, 'Hari', 'C-Block', 24523747),
(5511, 'Yash', 'B-Block', 24523587),
(5611, 'Dharmendra', 'A-Block', 24523597);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emergencyservice`
--
ALTER TABLE `emergencyservice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `maintainance`
--
ALTER TABLE `maintainance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `repair_workers`
--
ALTER TABLE `repair_workers`
  ADD PRIMARY KEY (`Employee ID`);

--
-- Indexes for table `roomcleaning`
--
ALTER TABLE `roomcleaning`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`Employee ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canteen`
--
ALTER TABLE `canteen`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `emergencyservice`
--
ALTER TABLE `emergencyservice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `maintainance`
--
ALTER TABLE `maintainance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `repair_workers`
--
ALTER TABLE `repair_workers`
  MODIFY `Employee ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5204;

--
-- AUTO_INCREMENT for table `roomcleaning`
--
ALTER TABLE `roomcleaning`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `Employee ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5612;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
