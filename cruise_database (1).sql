-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 12:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruise_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookid` int(11) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `cruise_name` varchar(50) NOT NULL,
  `cruise_amt` int(11) NOT NULL,
  `acprice` int(11) NOT NULL,
  `famt` int(11) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `nperson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`bookid`, `cust_name`, `cruise_name`, `cruise_amt`, `acprice`, `famt`, `bdate`, `nperson`) VALUES
(0, '', 'Mumbai-Goa', 0, 0, 0, '0', 0),
(0, 'test', 'Mumbai-Goa', 15000, 135, 17859, '22/05/09', 3),
(0, '', '', 0, 0, 0, '0', 0),
(0, 'test', 'Mumbai-Goa', 15000, 135, 17859, '22/05/13', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cruise`
--

CREATE TABLE `tbl_cruise` (
  `cruise_id` int(11) NOT NULL,
  `cruisename` varchar(40) NOT NULL,
  `cruise_arrival` varchar(40) NOT NULL,
  `cruise_dest` varchar(50) NOT NULL,
  `cruise_date` varchar(20) NOT NULL,
  `cruise_duration` varchar(20) NOT NULL,
  `cruise_total` int(10) NOT NULL,
  `cruise_other` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cruise`
--

INSERT INTO `tbl_cruise` (`cruise_id`, `cruisename`, `cruise_arrival`, `cruise_dest`, `cruise_date`, `cruise_duration`, `cruise_total`, `cruise_other`) VALUES
(2, 'Mumbai-Goa', 'Mumbai', 'Goa', '12-8-2022', '2 days', 45, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `custid` int(11) NOT NULL,
  `custname` varchar(40) NOT NULL,
  `custmob` varchar(13) NOT NULL,
  `custadd` varchar(100) NOT NULL,
  `custmailid` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `custpass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`custid`, `custname`, `custmob`, `custadd`, `custmailid`, `username`, `custpass`) VALUES
(1, 'test', '8888888888', 'test', 'test@gmail.com', 'test', 'test123'),
(2, 'test', '8989888888', 'test', 'gmail.com', 'test', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `eid` int(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `enquiryfor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`eid`, `ename`, `contactno`, `address`, `emailid`, `enquiryfor`) VALUES
(1, 'kunal', '7878987898', 'test', 'kunal@gmail.com', 'andaman cruise'),
(2, 'test', '8789878987', 'test', 'itsdnyan@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `acid` int(11) NOT NULL,
  `atype` varchar(30) NOT NULL,
  `aroomno` varchar(20) NOT NULL,
  `acfeatures` varchar(40) NOT NULL,
  `acprice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`acid`, `atype`, `aroomno`, `acfeatures`, `acprice`) VALUES
(1, 'Occean View', '101', 'AC', '15000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cruise`
--
ALTER TABLE `tbl_cruise`
  ADD PRIMARY KEY (`cruise_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`acid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cruise`
--
ALTER TABLE `tbl_cruise`
  MODIFY `cruise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
