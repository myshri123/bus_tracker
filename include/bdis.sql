-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2015 at 05:33 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdis`
--
CREATE DATABASE IF NOT EXISTS `bdis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdis`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `branchid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `branchid`, `firstname`, `lastname`, `username`, `password`, `confirm_password`, `user_type`, `date_added`) VALUES
(1, 1, 'Rolyn Jasper', 'Demerin', 'admin', 'admin', 'admin', 'Admin', 'Aug 27 2015 11:37 AM'),
(2, 4, 'Jomar', 'Pabuaya', 'admin2', 'admin2', 'admin2', 'Admin', 'Aug 27 2015 11:37 AM'),
(3, 4, 'Rolan', 'Algara', 'rolan', 'rolan', 'rolan', 'Dispatcher', 'Aug 27 2015 11:38 AM'),
(4, 2, 'Jeff Ree', 'Artagame', 'jeff', 'ree', 'ree', 'Dispatcher', 'Aug 27 2015 11:38 AM'),
(5, 3, 'Glen', 'Pabuaya', 'glen', 'pabz', 'pabz', 'Dispatcher', 'Aug 27 2015 11:39 AM'),
(6, 1, 'Rocky', 'Basa', 'rock', 'roll', 'roll', 'Dispatcher', 'Aug 27 2015 11:40 AM');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branchid` int(11) NOT NULL AUTO_INCREMENT,
  `branch_location` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  PRIMARY KEY (`branchid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branch_location`, `date_added`) VALUES
(1, 'Bacolod City', 'Aug 27 2015 11:36 AM'),
(2, 'Victorias City', 'Aug 27 2015 11:36 AM'),
(3, 'Cadiz City', 'Aug 27 2015 11:36 AM'),
(4, 'Sagay City', 'Aug 27 2015 11:37 AM');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `busid` int(11) NOT NULL AUTO_INCREMENT,
  `bus_number` varchar(100) NOT NULL,
  `bus_type` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `bus_travel` varchar(100) NOT NULL,
  PRIMARY KEY (`busid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busid`, `bus_number`, `bus_type`, `date_added`, `bus_travel`) VALUES
(1, '111', 'Economy', 'Sep 17 2015 09:56 PM', 'No'),
(2, '112', 'Economy', 'Sep 17 2015 09:56 PM', 'Yes'),
(3, '113', 'Aircon', 'Sep 17 2015 09:56 PM', 'No'),
(4, '114', 'Aircon', 'Sep 17 2015 09:56 PM', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `driverid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `driver_travel` varchar(100) NOT NULL,
  PRIMARY KEY (`driverid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `firstname`, `lastname`, `contact_number`, `profile`, `date_added`, `driver_travel`) VALUES
(1, 'Rogelio', 'Ramirez', '09352625372', 'photo1.jpg', 'Sep 17 2015 09:55 PM', 'No'),
(2, 'Rolan', 'Ruben', '09373672547', 'photo13.jpg', 'Sep 17 2015 09:55 PM', 'Yes'),
(3, 'Ben', 'Tung', '09989781348', 'photo12.jpg', 'Sep 17 2015 09:55 PM', 'No'),
(4, 'Ruben', 'Tung', '09345234876', 'photo5.jpg', 'Sep 17 2015 09:56 PM', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `scheduleid` int(11) NOT NULL AUTO_INCREMENT,
  `busid` varchar(100) NOT NULL,
  `driverid` varchar(100) NOT NULL,
  `from_location` varchar(100) NOT NULL,
  `destination_location` varchar(100) NOT NULL,
  `departure_time` datetime NOT NULL,
  `arrival_time` datetime NOT NULL,
  `terminal_location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `arrived_at_destination` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`scheduleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `busid`, `driverid`, `from_location`, `destination_location`, `departure_time`, `arrival_time`, `terminal_location`, `status`, `arrived_at_destination`, `date_added`) VALUES
(1, '1', '1', 'Bacolod City', 'Sagay City', '2015-09-17 22:11:56', '2015-09-17 22:26:14', 'Sagay City', 'Arrived at Sagay City', 'YES', '2015-09-17 22:11:56'),
(2, '2', '2', 'Sagay City', 'Bacolod City', '2015-09-17 22:12:14', '2015-09-17 22:20:58', 'Victorias City', 'Arrived at Victorias City', 'Not Yet', '2015-09-17 22:12:14'),
(3, '3', '3', 'Sagay City', 'Bacolod City', '2015-09-17 22:12:26', '2015-09-17 22:25:13', 'Bacolod City', 'Arrived at Bacolod City', 'YES', '2015-09-17 22:12:26'),
(4, '4', '4', 'Bacolod City', 'Sagay City', '2015-09-17 22:12:34', '2015-09-17 22:21:40', 'Cadiz City', 'Arrived at Cadiz City', 'Not Yet', '2015-09-17 22:12:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
