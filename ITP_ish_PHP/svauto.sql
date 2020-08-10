-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2019 at 06:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svauto`
--

-- --------------------------------------------------------

--
-- Table structure for table `carwashapp`
--

DROP TABLE IF EXISTS `carwashapp`;
CREATE TABLE IF NOT EXISTS `carwashapp` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `package` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carwashapp`
--

INSERT INTO `carwashapp` (`AID`, `type`, `package`, `date`, `time`) VALUES
(2, 'medium', 'golden', 'wed', 't6'),
(5, 'medium', 'normal hand wash', '30/9/2019', 'Please Choose'),
(6, 'medium', 'normal hand wash', '5/10/2019', '14.30 pm'),
(7, 'Please Choose', 'winter package', '5/10/2019', '14.00 pm'),
(8, 'large', 'winter package', '5/10/2019', '12.30 pm'),
(9, 'Please Choose', ' basic handwashl', '30/9/2019', 'Please Choose'),
(10, 'large', 'winter package', '2/10/2019', '13.30 pm'),
(11, 'Please Choose', ' basic handwashl', '30/9/2019', 'Please Choose');

-- --------------------------------------------------------

--
-- Table structure for table `carwashveh`
--

DROP TABLE IF EXISTS `carwashveh`;
CREATE TABLE IF NOT EXISTS `carwashveh` (
  `VID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `model` varchar(20) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  PRIMARY KEY (`VID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carwashveh`
--

INSERT INTO `carwashveh` (`VID`, `name`, `phone`, `model`, `colour`, `number`) VALUES
(2, 'fghju', 123456789, 'xdfcgvhbjn', 'dfghuj', 'sdfghj'),
(3, 'fghju', 123456789, 'xdfcgvhbjn', 'dfghuj', 'sdfghj'),
(4, 'cfgvhjk', 12345678, 'fghj', 'dfghj', 'sdfghj'),
(5, 'ishmauas', 98765443, 'ftyguhji', '456789', 'ghj'),
(6, 'dfg', 123456789, 'xvfghgjgh', 'fbgfhgfh', 'sdfgrdg');

-- --------------------------------------------------------

--
-- Table structure for table `pkg`
--

DROP TABLE IF EXISTS `pkg`;
CREATE TABLE IF NOT EXISTS `pkg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `packagename` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `fun1` varchar(20) NOT NULL,
  `fun2` varchar(20) NOT NULL,
  `fun3` varchar(20) NOT NULL,
  `fun4` varchar(20) NOT NULL,
  `fun5` varchar(20) NOT NULL,
  `fun6` varchar(20) NOT NULL,
  `fun7` varchar(20) NOT NULL,
  `fun8` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkg`
--

INSERT INTO `pkg` (`ID`, `packagename`, `type`, `price`, `fun1`, `fun2`, `fun3`, `fun4`, `fun5`, `fun6`, `fun7`, `fun8`) VALUES
(4, 'usual', ' basic handwashl', 2000, 'handwash', 'shampo use', 'towel dry', 'steaming', 'detergent use', 'none', 'none', 'none  '),
(5, 'usual2', 'bronze package', 3000, 'double handwash', 'double towel dry', 'steaming interior', 'window in ', 'shampoo wash', 'none', 'none', 'none  '),
(6, 'usual3', 'silver', 4000, 'triple handwash', 'steaming', 'window ceiling', 'steming interior', 'steaming exterior', 'shampoo wash', 'none', 'none '),
(7, 'seasonal', 'winter package', 7000, 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none '),
(8, 'usual4', 'golden package', 6000, 'nsds', 'fgvbhj', 'gvubhjn', 'ghbjn', 'gbhj', 'hbj', 'bh', 'hj ');

-- --------------------------------------------------------

--
-- Table structure for table `workdays`
--

DROP TABLE IF EXISTS `workdays`;
CREATE TABLE IF NOT EXISTS `workdays` (
  `WID` int(11) NOT NULL AUTO_INCREMENT,
  `day1` varchar(20) NOT NULL,
  `day2` varchar(20) NOT NULL,
  `day3` varchar(20) NOT NULL,
  `day4` varchar(20) NOT NULL,
  `day5` varchar(20) NOT NULL,
  `day6` varchar(20) NOT NULL,
  `day7` varchar(20) NOT NULL,
  PRIMARY KEY (`WID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workdays`
--

INSERT INTO `workdays` (`WID`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`) VALUES
(3, '30/9/2019', '1/10/2019', '2/10/2019', '3/10/2019', '4/10/2019', '5/10/2019', '6/10/2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
