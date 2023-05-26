-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 05:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arya_vaishya_youth`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_doner`
--

CREATE TABLE `add_doner` (
  `sr.no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(20) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_doner`
--

INSERT INTO `add_doner` (`sr.no`, `name`, `mobile`, `blood`, `address`) VALUES
(2, 'Vaishnavi Mogal', 2147483647, 'B+', 'Shikshak colony, Parbhani-431502');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `D_ID` int(10) NOT NULL,
  `D_name` varchar(33) NOT NULL,
  `D_type` varchar(33) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `AVID` int(11) NOT NULL,
  `Amount_Qty` int(11) NOT NULL,
  `donated_to` varchar(256) NOT NULL,
  `Remaining` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`D_ID`, `D_name`, `D_type`, `Description`, `phone`, `photo`, `AVID`, `Amount_Qty`, `donated_to`, `Remaining`, `status`, `date`) VALUES
(52, 'mokshada', 'Education', 'stationaries', '9890987890', 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/donation/evolution-of-data-centers-blog.png', 1, 650, 'Someone', 'Something', 'Pending', '2022-02-09 15:26:10'),
(93, 'Shifanaaz Sheikh', 'Money', 'last trial', '37594234', 'NULL', 6237, 1000, 'Arya Vaishya Youth', 'Something', 'Pending', '2022-03-25 13:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(11) NOT NULL,
  `Order_type` text NOT NULL,
  `Order_date` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `city` text NOT NULL,
  `Order_AVID` int(11) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `Order_type`, `Order_date`, `Address`, `mobile`, `city`, `Order_AVID`, `Status`) VALUES
(1, 'Photo', '2022-02-14', 'Shikshak colony,selu-431503', 2147483647, 'nanded', 0, 'Pending'),
(2, 'Logo', '2022-02-14', 'Ashok Nager,Pune-411303', 2147483647, 'Pune', 8067, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sno` int(11) NOT NULL,
  `AVID` varchar(100) DEFAULT NULL,
  `password` varchar(33) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Designation` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gotra_1` text NOT NULL,
  `Gotra_2` text NOT NULL,
  `family` int(11) NOT NULL,
  `photo` mediumtext NOT NULL,
  `Blood_grp` varchar(100) NOT NULL,
  `active_doner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sno`, `AVID`, `password`, `name`, `mobile`, `email`, `DOB`, `Designation`, `Address`, `Gotra_1`, `Gotra_2`, `family`, `photo`, `Blood_grp`, `active_doner`) VALUES
(1, '8530', '73EF68V', 'aaa', '9373092865', 'shifanaazsheikh02@gmail.com', '2022-02-04', 'aaa', '', 'One', 'Two', 3, 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/registration/WhatsApp%20Image%202022-01-12%20at%205.32.48%20PM.jpeg', '', 'Yes'),
(2, '2040', '22', 'shifanaaz', '9373092865', 'shifanaazsheikh02@gmail.com', '2022-02-05', 'qqqq', '', 'Two', 'One', 2, 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/registration/WhatsApp%20Image%202022-01-15%20at%201.50.58%20PM.jpeg', '', 'No'),
(5, '3721', 'B8sEIbd', 'Vaishnavi Mogal', '9307802207', 'vaishnavimogal95@gmail.com', '2001-02-07', 'Owner', 'vidhya nager, Selu-431503', 'B+', 'Two', 5, 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/registration/router.png', '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `Support_id` int(4) NOT NULL,
  `Support_type` text NOT NULL,
  `Description` text NOT NULL,
  `Qty` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Support_AVID` int(11) NOT NULL,
  `Response` text NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`Support_id`, `Support_type`, `Description`, `Qty`, `Date`, `Support_AVID`, `Response`) VALUES
(1, 'blood', 'this is a trial', 1400, '2022-01-07', 1, 'Completed'),
(78, 'Kirana', 'practise', 2342, '2022-04-01', 6237, 'Completed'),
(79, 'Thing', 'trewqwefc', 242, '2022-04-10', 6237, 'Pending'),
(80, 'Medicals', '34fdtrdg', 5516, '2022-04-01', 6237, 'Pending'),
(81, 'Education', 'ttvdvwg tg', 254, '2022-03-29', 6237, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `youth_activity`
--

CREATE TABLE `youth_activity` (
  `sr.no` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youth_activity`
--

INSERT INTO `youth_activity` (`sr.no`, `name`, `time`, `date`, `description`, `photo`) VALUES
(2, 'Opening of shop!!', '11:35:00', '2022-02-03', 'we are going to open a shop of All in one. visit and enjoy shopping. contact for job we are looking for young ones....', 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/youth_activity/field-6574455__340.jpg'),
(3, 'Mayu Birthday', '14:35:00', '2022-02-09', 'come and enjoy the event. have a fun cuef kuere mue iuew!!', 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/youth_activity/istockphoto.jpg'),
(4, 'Trial', '22:22:00', '0032-04-23', 'fff', 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/youth_activity/tree.tif.jpg'),
(5, 'Trial', '22:22:00', '0032-04-23', 'fff', 'https://bucket-forms-php.s3.ap-south-1.amazonaws.com/youth_activity/tree.tif.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doner`
--
ALTER TABLE `add_doner`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`Support_id`);

--
-- Indexes for table `youth_activity`
--
ALTER TABLE `youth_activity`
  ADD PRIMARY KEY (`sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doner`
--
ALTER TABLE `add_doner`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `D_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `Support_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `youth_activity`
--
ALTER TABLE `youth_activity`
  MODIFY `sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
