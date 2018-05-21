-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 09:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

use echallan;
--
-- Database: `SIH`
--

-- --------------------------------------------------------

--
-- Table structure for table `Aadhar`
--

CREATE TABLE `Aadhar` (
  `Aadhar_number` bigint(12) NOT NULL,
  `Name` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Age` smallint(2) NOT NULL,
  `Address` varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Contact_number` bigint(10) NOT NULL,
  `Gender` varchar(1) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Aadhar`
--

INSERT INTO `Aadhar` (`Aadhar_number`, `Name`, `Age`, `Address`, `Contact_number`, `Gender`) VALUES
(111111111111, 'SAKSHI', 23, '58 SHRI KRISHNA COLONY', 8982210056, 'F'),
(222222222222, 'SHRUTI', 23, '55 INDIRA NAGAR', 8982284101, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `Challan`
--

CREATE TABLE `Challan` (
  `Challan_ID` int(10) NOT NULL,
  `Challan_paid_date` datetime(6) NOT NULL,
  `Challan_amount` smallint(5) NOT NULL,
  `Challan_status` varchar(1) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Challan`
--

INSERT INTO `Challan` (`Challan_ID`, `Challan_paid_date`, `Challan_amount`, `Challan_status`) VALUES
(2, '2018-03-02 00:00:00.000000', 500, 'P'),
(3, '0000-00-00 00:00:00.000000', 400, 'U');

-- --------------------------------------------------------

--
-- Table structure for table `Challan_Payment`
--

CREATE TABLE `Challan_Payment` (
  `Challan_ID` int(10) NOT NULL,
  `Payment_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Offense`
--

CREATE TABLE `Offense` (
  `Offense_ID` int(10) NOT NULL,
  `Offense_Type` varchar(15) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Offense_Date` date NOT NULL,
  `Vehicle_ID` int(10) NOT NULL,
  `Offense_Status` varchar(10) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Challan_ID` int(10) NOT NULL,
  `Offense_Place` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Image_Location` varchar(100) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Offense`
--

INSERT INTO `Offense` (`Offense_ID`, `Offense_Type`, `Offense_Date`, `Vehicle_ID`, `Offense_Status`, `Challan_ID`, `Offense_Place`, `Image_Location`) VALUES
(16, 'SECTION111', '2018-03-01', 0, 'RESOLVED', 0, 'RAIPUR', ''),
(18, 'SECTION222', '2018-03-02', 0, 'UNRESOLVED', 0, 'RAIPUR', '');

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `Payment_Id` int(10) NOT NULL,
  `Payment_Date` datetime(6) NOT NULL,
  `Payment_Amount` int(5) NOT NULL,
  `Payment_status` varchar(1) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`Payment_Id`, `Payment_Date`, `Payment_Amount`, `Payment_status`) VALUES
(3, '2018-03-01 00:00:00.000000', 500, 'P'),
(4, '2018-03-02 00:00:00.000000', 400, 'U');

-- --------------------------------------------------------

--
-- Table structure for table `Userdetails`
--

CREATE TABLE `Userdetails` (
  `User_ID` int(10) NOT NULL,
  `Username` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Email` varchar(30) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Password` varchar(15) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Role` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Status` varchar(1) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Userdetails`
--

INSERT INTO `Userdetails` (`User_ID`, `Username`, `Email`, `Password`, `Role`, `Status`) VALUES
(1, 'VAIBHAV', 'VAIBHAV@GMAIL.COM', 'VAIBHAV', 'INSPECTOR', '1'),
(2, 'ANISH', 'ANISH@GMAIL.COM', 'ANISH', 'INSPECTOR', '0');

-- --------------------------------------------------------

--
-- Table structure for table `Vehicle`
--

CREATE TABLE `Vehicle` (
  `Vehicle_Id` int(10) NOT NULL,
  `Vehicle_Number` varchar(10) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Owner_Name` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Contact_Address` varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Aadhar_Number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Vehicle`
--

INSERT INTO `Vehicle` (`Vehicle_Id`, `Vehicle_Number`, `Owner_Name`, `Contact_Address`, `Aadhar_Number`) VALUES
(2, 'CG11CD1111', 'SAKSHI', '58 SHRI KRISHNA COLONY', 111111111111),
(3, 'CG22CD2222', 'SHRUTI', '23 UTSAV NAGAR', 222222222222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Aadhar`
--
ALTER TABLE `Aadhar`
  ADD PRIMARY KEY (`Aadhar_number`),
  ADD UNIQUE KEY `Aadhar_number` (`Aadhar_number`),
  ADD UNIQUE KEY `Aadhar_number_2` (`Aadhar_number`);

--
-- Indexes for table `Challan`
--
ALTER TABLE `Challan`
  ADD PRIMARY KEY (`Challan_ID`);

--
-- Indexes for table `Challan_Payment`
--
ALTER TABLE `Challan_Payment`
  ADD PRIMARY KEY (`Challan_ID`,`Payment_ID`),
  ADD KEY `Payment_ID` (`Payment_ID`);

--
-- Indexes for table `Offense`
--
ALTER TABLE `Offense`
  ADD PRIMARY KEY (`Offense_ID`),
  ADD KEY `Challan_ID` (`Challan_ID`),
  ADD KEY `Offense` (`Vehicle_ID`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`Payment_Id`);

--
-- Indexes for table `Userdetails`
--
ALTER TABLE `Userdetails`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD PRIMARY KEY (`Vehicle_Id`),
  ADD UNIQUE KEY `Vehicle_Number` (`Vehicle_Number`,`Aadhar_Number`),
  ADD KEY `Aadhar_Number` (`Aadhar_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Challan`
--
ALTER TABLE `Challan`
  MODIFY `Challan_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Offense`
--
ALTER TABLE `Offense`
  MODIFY `Offense_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `Payment_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Userdetails`
--
ALTER TABLE `Userdetails`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Vehicle`
--
ALTER TABLE `Vehicle`
  MODIFY `Vehicle_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD CONSTRAINT `Vehicle_ibfk_1` FOREIGN KEY (`Aadhar_Number`) REFERENCES `Aadhar` (`Aadhar_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
