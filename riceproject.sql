-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2025 at 04:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riceproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmerdetails`
--

CREATE TABLE `farmerdetails` (
  `F_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `nicno` varchar(12) NOT NULL,
  `district` varchar(10) NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `phonno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmerdetails`
--

INSERT INTO `farmerdetails` (`F_id`, `fullname`, `nicno`, `district`, `addrss`, `phonno`, `email`, `username`, `password`) VALUES
(7, '', '', 'COLOMBO', '', '', '', 'egsd', '8a370a8383fc'),
(8, '', '', 'COLOMBO', '', '', '', 'dsdggd', '784ef0059227'),
(9, '', '', 'COLOMBO', '', 'ete', '', 'drs', '3c820da3a468'),
(11, '', '', 'COLOMBO', '', '', '', 'malith', 'Darshana'),
(13, '', '', 'COLOMBO', '', '', '', 'malit', '145'),
(15, 'Tharindu Sanjaya', '200205902058', 'COLOMBO', 'hgdwkc', '0786686241', 'malithbotheju9@gmail.com', 'malitjbj', 'http'),
(16, 'cx v', 'cxb', 'COLOMBO', 'cb', 'xcb', 'cbx', 'cxb', 'cbx'),
(17, 'fb xc', 'bc', 'COLOMBO', 'cbx', 'cb', 'bc', 'bf', 'fb'),
(20, '', '', 'COLOMBO', '', '', '', 'mat', 'mat'),
(21, 'mafdnk', 'skvjh', 'COLOMBO', 'dsvkhjdvsmnb', 'dcs', 'dc', 'sanjaya', '123'),
(22, 'kfu', 're', 'COLOMBO', 'rbrtn', 'rb', 'brb', 'gb', 'gfn');

-- --------------------------------------------------------

--
-- Table structure for table `gdepartmentdetails`
--

CREATE TABLE `gdepartmentdetails` (
  `deid` int(10) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL,
  `phonno` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `currentstock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gdepartmentdetails`
--

INSERT INTO `gdepartmentdetails` (`deid`, `dname`, `district`, `phonno`, `email`, `username`, `password`, `currentstock`) VALUES
(1, 'rge', 'COLOMBO', 0, 'rb', 'rb', 'rb', 400),
(2, 'hfuiwgev', 'COLOMBO', 0, 'fd', 'bfd', 'fbd', 0),
(3, 'fb', 'COLOMBO', 0, 'nf', 'ngf', 'gnf', 0),
(4, '', 'COLOMBO', 0, '', 'mat', 'mat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `iorganization`
--

CREATE TABLE `iorganization` (
  `oid` int(11) NOT NULL,
  `oname` varchar(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iorganization`
--

INSERT INTO `iorganization` (`oid`, `oname`, `country`, `username`, `password`) VALUES
(1, 'fgn', 'fgj', 'gfj', 'gfj'),
(2, 'vd', 'dv', 'ds', 'dsv'),
(3, 'f bfh', 'bvc', 'bv', 'nvnn'),
(4, 'xfb', 'cb', 'bcx', 'bcx'),
(5, '', '', '', ''),
(6, 'ds,ms k', 'sd', 'dsbds', 'bdbdb'),
(7, 'fbds', 'bsd', 'db', 'dsb'),
(8, 'bcxv', 'cbx', 'cxb', 'cxb'),
(9, 'cxb', 'cbxc', 'bcxb', 'cxb'),
(10, 'fd', 'fn', 'fnd', 'fnd'),
(11, 'vnc', 'vnc', 'vn', 'cvn'),
(12, '', 'gjf', ' cv vb ', 'mbm'),
(13, 'dv', 'vds', 'dvs', 'dvs'),
(14, '', '', 'mat', 'mat');

-- --------------------------------------------------------

--
-- Table structure for table `milldetails`
--

CREATE TABLE `milldetails` (
  `millid` int(10) NOT NULL,
  `millname` varchar(20) NOT NULL,
  `phonno` int(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `email` varchar(10) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(12) NOT NULL,
  `currentstock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `milldetails`
--

INSERT INTO `milldetails` (`millid`, `millname`, `phonno`, `district`, `email`, `username`, `password`, `currentstock`) VALUES
(3, 'dv', 65465, 'COLOMBO', 'dsv', 'dvfd', 'dsv', 200),
(4, 'ds', 0, 'COLOMBO', 'dsv', 'dvs', 'dvs', 0),
(9, '', 0, 'COLOMBO', '', 'gdb', 'dg', 0),
(10, '', 0, 'COLOMBO', '', 'mat', 'mat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paddystock`
--

CREATE TABLE `paddystock` (
  `stockid` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `currentstock` int(10) NOT NULL,
  `dateharvest` date NOT NULL,
  `Term` varchar(10) NOT NULL,
  `farmerid` int(11) NOT NULL,
  `millid` int(10) NOT NULL,
  `did` int(10) NOT NULL,
  `dateofsell` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paddystock`
--

INSERT INTO `paddystock` (`stockid`, `quantity`, `currentstock`, `dateharvest`, `Term`, `farmerid`, `millid`, `did`, `dateofsell`) VALUES
(7, 200, 200, '0000-00-00', '', 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ricestock`
--

CREATE TABLE `ricestock` (
  `stockid` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `currentstock` int(10) NOT NULL,
  `millid` int(10) NOT NULL,
  `did` int(10) NOT NULL,
  `vendorid` int(10) NOT NULL,
  `oid` int(10) NOT NULL,
  `dateofprocess` date NOT NULL,
  `dateofbuy` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ricestock`
--

INSERT INTO `ricestock` (`stockid`, `quantity`, `currentstock`, `millid`, `did`, `vendorid`, `oid`, `dateofprocess`, `dateofbuy`) VALUES
(3, 100, 100, 0, 1, 0, 0, '0000-00-00', '0000-00-00'),
(4, 1, 101, 1, 0, 0, 0, '0000-00-00', '0000-00-00'),
(5, 200, 301, 1, 0, 0, 0, '0000-00-00', '0000-00-00'),
(6, 200, 501, 0, 1, 0, 0, '0000-00-00', '0000-00-00'),
(7, 200, 701, 0, 3, 0, 0, '0000-00-00', '0000-00-00'),
(8, 2000, 2701, 23, 0, 0, 0, '0000-00-00', '0000-00-00'),
(9, 2000, 4701, 1, 0, 0, 0, '0000-00-00', '0000-00-00'),
(10, 1200, 5901, 3, 0, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vendorsdetails`
--

CREATE TABLE `vendorsdetails` (
  `vid` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Rno` int(10) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `phonno` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendorsdetails`
--

INSERT INTO `vendorsdetails` (`vid`, `type`, `Rno`, `vname`, `district`, `phonno`, `email`, `username`, `password`) VALUES
(1, '', 0, '', '', 0, '', '', ''),
(2, 'fewjh', 0, 'fe', 'RATNAPURA', 0, 'ewf', 'we', 'ewf'),
(3, 'fb', 0, 'fdb', 'COLOMBO', 0, 'fdb', 'fbd', 'fbd'),
(4, '', 0, '', '', 0, '', 'mat', 'mat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  ADD PRIMARY KEY (`F_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gdepartmentdetails`
--
ALTER TABLE `gdepartmentdetails`
  ADD PRIMARY KEY (`deid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `iorganization`
--
ALTER TABLE `iorganization`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `milldetails`
--
ALTER TABLE `milldetails`
  ADD PRIMARY KEY (`millid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `paddystock`
--
ALTER TABLE `paddystock`
  ADD PRIMARY KEY (`stockid`);

--
-- Indexes for table `ricestock`
--
ALTER TABLE `ricestock`
  ADD PRIMARY KEY (`stockid`);

--
-- Indexes for table `vendorsdetails`
--
ALTER TABLE `vendorsdetails`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmerdetails`
--
ALTER TABLE `farmerdetails`
  MODIFY `F_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gdepartmentdetails`
--
ALTER TABLE `gdepartmentdetails`
  MODIFY `deid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iorganization`
--
ALTER TABLE `iorganization`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `milldetails`
--
ALTER TABLE `milldetails`
  MODIFY `millid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paddystock`
--
ALTER TABLE `paddystock`
  MODIFY `stockid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ricestock`
--
ALTER TABLE `ricestock`
  MODIFY `stockid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendorsdetails`
--
ALTER TABLE `vendorsdetails`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
