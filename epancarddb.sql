-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 182.50.133.92:3306
-- Generation Time: Jan 01, 2021 at 08:59 AM
-- Server version: 5.5.51-38.1-log
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epancarddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ao_code`
--

CREATE TABLE `ao_code` (
  `id` int(11) NOT NULL,
  `city` varchar(60) NOT NULL,
  `area_code` varchar(50) NOT NULL,
  `ao_type` varchar(60) NOT NULL,
  `range_code` varchar(60) NOT NULL,
  `ao_number` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ao_code`
--

INSERT INTO `ao_code` (`id`, `city`, `area_code`, `ao_type`, `range_code`, `ao_number`) VALUES
(2, 'FARIDABAD', 'NWR', 'C', '51', '1'),
(3, 'JAMMU', 'NRW', 'W', '86', '1'),
(4, 'INDORE', 'BPL', 'C', '51', '1'),
(5, 'JAIPUR', 'RJN', 'W', '101', '1'),
(6, 'GURGAON ', 'NWR', 'W', '53', '1'),
(7, 'HAPUR', 'KNP', 'W', '65', '4'),
(8, 'FATEHPUR', 'LKN', 'W', '21', '4'),
(9, 'FIROZABAD', 'KNP', 'W', '81', '1'),
(10, 'GHAZIABAD', 'KNP', 'C', '17', '1'),
(11, 'DELHI', 'DEL', 'C', '31', '1'),
(12, 'BULANDSHAHAR', 'KNP', 'W', '65', '1'),
(13, 'SONEPAT', 'NWR', 'C', '55', '1'),
(14, 'SAHARANPUR', 'KNP', 'C', '25', '1'),
(15, 'ROHTAK', 'NWR', 'C', '54', '1'),
(16, 'NOIDA', 'DLC', 'C', '560', '1'),
(17, 'MEERUT', 'KNP', 'C', '14', '1'),
(18, 'MATHURA', 'KNP', 'C', '77', '1'),
(19, 'LUCKNOW', 'LKN', 'C', '51', '1'),
(20, 'JHANSI', 'KNP', 'C', '82', '1'),
(21, 'FATHEPUR', 'LKN', 'W', '21', '4'),
(22, 'GAUTAM BUDDH NAGAR', 'KNP', 'W', '100', '1'),
(23, 'DEHRADUN', 'KNP', 'W', '26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(255) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(60) NOT NULL,
  `location` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `text`, `date`, `location`) VALUES
(1, 'Registration', '30-09-2020 08:10 PM', ''),
(2, 'Registration', '24-11-2020 09:43 PM', ''),
(3, 'Registration', '24-11-2020 09:43 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `pancardforms`
--

CREATE TABLE `pancardforms` (
  `id` int(255) NOT NULL,
  `ret_id` varchar(200) NOT NULL,
  `date` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `area_code` varchar(60) NOT NULL,
  `ao_type` varchar(60) NOT NULL,
  `range_code` varchar(60) NOT NULL,
  `ao_number` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `f_name` varchar(60) NOT NULL,
  `m_name` varchar(60) NOT NULL,
  `l_name` varchar(60) NOT NULL,
  `aadhar_name` varchar(60) NOT NULL,
  `aadhar_no` varchar(60) NOT NULL,
  `pannum` varchar(255) NOT NULL,
  `pan_guid` varchar(60) NOT NULL,
  `father_f_name` varchar(60) NOT NULL,
  `father_m_name` varchar(60) NOT NULL,
  `father_l_name` varchar(60) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `source_income` varchar(60) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `form_49` varchar(255) NOT NULL,
  `pancard` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `slip` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pancardforms`
--

INSERT INTO `pancardforms` (`id`, `ret_id`, `date`, `city`, `area_code`, `ao_type`, `range_code`, `ao_number`, `title`, `f_name`, `m_name`, `l_name`, `aadhar_name`, `aadhar_no`, `pannum`, `pan_guid`, `father_f_name`, `father_m_name`, `father_l_name`, `dob`, `mobile`, `email`, `source_income`, `token`, `status`, `form_49`, `pancard`, `photo`, `sign`, `slip`, `purpose`) VALUES
(1, '7eb21c6fc46d', '2020/09/24 02:18:34', 'GAUTAM BUDDH NAGAR', 'KNP', 'W', '100', '1', 'Mr.', 'ankur', '', 'rana', 'ankur rana', '342990938767', '', 'Father', 'bhimkaran', '', 'Singh', '1992-07-09', '9410491114', 'ankurchrana@gmail.com', 'No Income', 'PRSN11384638', 'Pending', 'upload_docs/IMG_20200226_081143.jpg', '', 'upload_docs/IMG-20191201-WA0021.jpg', 'upload_docs/singh.jpg', '', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` longtext NOT NULL,
  `date` text NOT NULL,
  `query_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `query`, `date`, `query_type`, `status`) VALUES
(1, 'Mohit Solanki', 'mohitsolankirbr18@gmail.com', '<pre>.Help me out of registration. .</pre>', '11-02-2020 12:26:55 PM', 'Problem', ''),
(2, 'Mohit Solanki', 'mohitsolankirbr18@gmail.com', '<pre>.Help me out about login..</pre>', '0', 'Suggestion', ''),
(3, 'Mohit', 'mohitsolankirbr18@gmail.com', '<pre>.Help me out about login..</pre>', '0', 'Problem', ''),
(4, 'Mohit Solanki', 'mohitsolanki@gmail.com', '<pre>.Hello.</pre>', '0', 'Problem', ''),
(5, 'Mohit Solanki', 'mohitsolankirbr18@gmail.com', '<pre>.Help me out about login..</pre>', '0', 'Problem', ''),
(6, 'Mohit', 'mohitsolankirbr18@gmail.com', '<pre>.What does it cost for registeration in website? .</pre>', '0', 'Problem', ''),
(7, 'Amit Singh', 'amitsingh8102001@gmail.com', 'hlo good', '0', 'Problem', '');

-- --------------------------------------------------------

--
-- Table structure for table `recharge`
--

CREATE TABLE `recharge` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ret_id` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `transection_no` varchar(255) NOT NULL,
  `transection_amount` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recharge`
--

INSERT INTO `recharge` (`id`, `name`, `ret_id`, `mobile`, `transection_no`, `transection_amount`, `date`, `value`) VALUES
(1, 'prs computer hub', '7eb21c6fc46d', '7906100064', 'ankurrana4653', '', '2020/09/24 01:13:21 PM', 'Used');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `Srno` int(11) NOT NULL,
  `fulname` varchar(60) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `FatherName` varchar(60) NOT NULL,
  `MotherName` varchar(60) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `familyno` varchar(5) NOT NULL,
  `city1` varchar(60) NOT NULL,
  `State` varchar(60) NOT NULL,
  `TC` varchar(10) NOT NULL,
  `date/time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`Srno`, `fulname`, `mobile`, `email`, `FatherName`, `MotherName`, `Gender`, `familyno`, `city1`, `State`, `TC`, `date/time`) VALUES
(1, 'Mohit Solanki', '9760863644', 'mohitsolankirbr18@gmail.com', 'Chandrapal', 'Sunita', 'Male', '5', 'Gr. Noida', 'Uttar Pradesh', 'on', '2020/Dec/20-09:25:56PM'),
(2, 'Mohit Solanki', '9760863644', 'mohitsolanki@gmail.com', 'Chandrapal', 'Sunita', 'Male', '5', 'Gr. Noida', 'Uttar Pradesh', 'on', '2020/Dec/20-09:26:39PM'),
(3, '', '', '', '', '', '', '', '', '', 'on', '2020/Dec/29-02:09:29PM');

-- --------------------------------------------------------

--
-- Table structure for table `tranhis`
--

CREATE TABLE `tranhis` (
  `id` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `transection_id` varchar(255) NOT NULL,
  `transection_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `id` int(255) NOT NULL,
  `ret_id` varchar(255) NOT NULL,
  `transection_id` varchar(255) NOT NULL,
  `transection_amt` varchar(200) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`id`, `ret_id`, `transection_id`, `transection_amt`, `mobile`, `amount`, `date`, `type`, `status`) VALUES
(1, '7eb21c6fc46d', 'mohi6543', '107', '7906100064', '107', '2020/09/24 01:17:00 PM', 'Credit', 'SUCCESS'),
(2, '', '', '', '7906100064', '107', '2020/09/24 02:18:34', 'Debit', '');

-- --------------------------------------------------------

--
-- Table structure for table `updatepan`
--

CREATE TABLE `updatepan` (
  `id` int(255) NOT NULL,
  `ret_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `aadhar_name` varchar(255) NOT NULL,
  `aadhar_no` varchar(255) NOT NULL,
  `pannum` varchar(255) NOT NULL,
  `pan_guid` varchar(255) NOT NULL,
  `father_f_name` varchar(255) NOT NULL,
  `father_m_name` varchar(255) NOT NULL,
  `father_l_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `source_income` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `form_49` varchar(255) NOT NULL,
  `pancard` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `sign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `ret_id` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `renue_date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `aadhar_f` varchar(255) NOT NULL,
  `aadhar_b` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `rs` varchar(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ret_id`, `date`, `renue_date`, `name`, `email`, `mobile`, `password`, `address`, `address2`, `city`, `state`, `zip`, `aadhar_f`, `aadhar_b`, `pan_card`, `photo`, `rs`, `type`, `status`) VALUES
(1, '7d2a43272839', '2020-09-24', '2020-09-24', 'ANKUR RANA', 'ANKURCHRANA@GMAIL.COM', '9410491114', '$2y$10$jLP.NwkNP8ctXYfOvkj5qO4wILtcElhcMhC1xapmtjY8ykI3uKMBW', 'rabupura', 'rabupura', 'Greater noida', 'Uttar Pradesh', '203209', 'usersreg/ankur rana id.jpg', 'usersreg/', 'usersreg/', 'usersreg/RANA.jpg', '', 'Manager', 'Act'),
(2, '7eb21c6fc46d', '2020-09-24', '2020-09-24', 'prs computer hub', 'prscomputerhub@gmail.com', '7906100064', '$2y$10$3HX5fE5TxIS1EO2iBYoeyelH8hr/iiMoqJO9APAh8IHeOHZooFHlK', 'rabupura', 'rabupura', 'g.b.nager', 'Uttar Pradesh', '203209', 'usersreg/IMG_20200226_081143.jpg', 'usersreg/', 'usersreg/', 'usersreg/IMG-20191201-WA0021.jpg', '0', '', 'Active'),
(3, '3db6c92f7c03', '2020-09-24', '2020-09-24', 'Deepak Thakur', 'deepaksolankirbr2000@gmail.com', '08979623749', '$2y$10$1q/HkayHuh0oFOpFzKdG3O.cS2/0K2SS9p4NhZMBM/b92QHBBBYVi', 'Near Oriental Bank', '', 'Rabupura', 'Uttar Pradesh', '203209', 'usersreg/IMG-20200724-WA0006.jpg', 'usersreg/', 'usersreg/', 'usersreg/IMG_20200312_214542_595.jpg', '0', '', ''),
(4, 'a8c6b83d3af4', '2020-09-25', '2020-09-25', 'Abhay kumar shah', 'abhayshah1579@gmail.com', '8882238925', '$2y$10$AiWij0CzsnPsdh7pZybfEOTHBwOpLid22KVdJlHFxd2a2eKcSFh6q', 'Alpha1, Greater Noida, Uttar Pradesh, 201308 ', 'B38, maruti paying guest', 'Greater Noida ', 'Uttar Pradesh', '201308', 'usersreg/96520', 'usersreg/', 'usersreg/', 'usersreg/IMG_20200113_181950_157.jpg', '', '', ''),
(5, '98e380863f51', '2020-09-28', '2020-09-28', 'Sachin Gola', 'mirage2000gola@gmail.com', '9389222077', '$2y$10$FaFOD.D3K5vKbkLaywOqVuih5otP2OIZ8iUSJQq.pchsfSUFvLphe', 'Mewla Gopalgarh', 'Mewla Gopalgarh', 'Jewar', 'Uttar Pradesh', '203135', 'usersreg/Screenshot_2020-08-24-19-16-35-876_com.google.android.apps.docs.jpg', 'usersreg/Screenshot_2020-08-24-19-16-44-028_com.google.android.apps.docs.jpg', 'usersreg/', 'usersreg/BeautyPlus_20200419182725142_save.jpg', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ao_code`
--
ALTER TABLE `ao_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pancardforms`
--
ALTER TABLE `pancardforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recharge`
--
ALTER TABLE `recharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `tranhis`
--
ALTER TABLE `tranhis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updatepan`
--
ALTER TABLE `updatepan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ao_code`
--
ALTER TABLE `ao_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pancardforms`
--
ALTER TABLE `pancardforms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recharge`
--
ALTER TABLE `recharge`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `Srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tranhis`
--
ALTER TABLE `tranhis`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `updatepan`
--
ALTER TABLE `updatepan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
