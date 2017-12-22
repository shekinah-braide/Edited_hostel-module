-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2017 at 07:16 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Onokpegu Thompson', 'admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `allocated`
--

CREATE TABLE IF NOT EXISTS `allocated` (
  `id` int(11) NOT NULL,
  `matno` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `session` varchar(10) NOT NULL,
  `bedid` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE IF NOT EXISTS `hostels` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hostel` varchar(20) NOT NULL,
  `wing` varchar(10) NOT NULL,
  `room` varchar(10) NOT NULL,
  `bedspace` varchar(10) NOT NULL,
  `bedid` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`id`, `name`, `hostel`, `wing`, `room`, `bedspace`, `bedid`, `status`) VALUES
(20, '', 'Annex Hostel', 'Wing B', 'Room B4', 'Down', 'HS/175532', 'Available'),
(23, '', 'Liverpool Hostel', 'Wing C', 'Room C8', 'Up', 'HS/49256', 'Available'),
(24, '', 'Liverpool Hostel', 'Wing C', 'Room C8', 'Up', 'HS/276825', 'Available'),
(26, '', 'Annex Hostel', 'Wing C', 'Room C4', 'Down', 'HS/372956', 'Available'),
(27, '', 'Diamond Hostel', 'Wing D', 'Room D9', 'Up', 'HS/200745', 'Available'),
(28, '', 'Liverpool Hostel', 'Wing B', 'Room B2', 'Up', 'HS/258423', 'Available'),
(29, '', 'Liverpool Hostel', 'Wing C', 'Room C7', 'Up', 'HS/866985', 'Available'),
(30, '', 'Diamond Hostel', 'Wing D', 'Room D2', 'Down', 'HS/462250', 'Available'),
(31, '', 'Diamond Hostel', 'Wing C', 'Room C9', 'Down', 'HS/965088', 'Available'),
(32, '', 'ETF Hostel', 'Wing B', 'Room B3', 'Down', 'HS/446320', 'Available'),
(33, '', 'ETF Hostel', 'Wing B', 'Room B4', 'Up', 'HS/576600', 'Available'),
(34, '', 'ETF Hostel', 'Wing D', 'Room D11', 'Up', 'HS/24354', 'Available'),
(35, '', 'Annex Hostel', 'Wing D', 'Room D1', 'Down', 'HS/757294', 'Available'),
(36, '', 'Annex Hostel', 'Wing B', 'Room B4', 'Down', 'HS/91126', 'Taken'),
(37, '', 'ETF Hostel', 'Wing B', 'Room B9', 'Up', 'HS/680968', 'Available'),
(38, '', 'Diamond Hostel', 'Wing D', 'Room D2', 'Down', 'HS/311036', 'Taken');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `matno` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`, `matno`) VALUES
(1, 'Braide Shekinah', 'stib', '12345678', 'HA15/0556'),
(2, 'Iweriso Samuel', 'siweriso', '12345678', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allocated`
--
ALTER TABLE `allocated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `allocated`
--
ALTER TABLE `allocated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
