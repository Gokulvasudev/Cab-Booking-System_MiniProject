-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 05:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cab_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `pickupaddress` varchar(50) NOT NULL,
  `dropdownaddress` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `cab_no` int(11) NOT NULL,
  `cartype` varchar(10) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `kilometer_consumed` int(5) NOT NULL,
  `rate` float NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `pickupaddress` varchar(30) NOT NULL,
  `dropdownaddress` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `cartype` varchar(10) NOT NULL,
  `cab_no` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `pickupaddress`, `dropdownaddress`, `date`, `time`, `cartype`, `cab_no`, `driver_id`, `customer_id`) VALUES
(8, 'Kottayam', 'Poonjar', '2016-03-23', '00:00:08', 'L', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE IF NOT EXISTS `car_details` (
  `cab_no` int(11) NOT NULL AUTO_INCREMENT,
  `owner` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `model` int(5) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `manufacturer` varchar(15) NOT NULL,
  PRIMARY KEY (`cab_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`cab_no`, `owner`, `address`, `phone`, `model`, `regno`, `manufacturer`) VALUES
(9, 'Ram Kumar', 'Achu Nivas, Eattumanoor ,Kottayam', 7356536801, 1995, 'KL-35D-8736', 'AMBASSADOR');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `admin_status` varchar(5) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `fullname`, `address`, `email`, `gender`, `phone`, `username`, `password`, `admin_status`) VALUES
(3, 'tyu', '', 'yt@g.c', 'f', 9874521033, 'uiop', '1234aS', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE IF NOT EXISTS `driver_details` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `licence_number` varchar(20) NOT NULL,
  `experiance` int(5) NOT NULL,
  `cab_no` int(11) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`driver_id`, `name`, `address`, `phone`, `licence_number`, `experiance`, `cab_no`) VALUES
(2, 'Soman', 'Raman Villa, Payyanithottam, Poonjar, Kottayam', 8281129076, '35/2511/2013', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `usermsg` text NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
