-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 08:07 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway`
--
CREATE DATABASE IF NOT EXISTS `railway` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `railway`;

-- --------------------------------------------------------

--
-- Table structure for table `booking_report`
--

CREATE TABLE IF NOT EXISTS `booking_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train_no` int(11) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `p5` varchar(255) NOT NULL,
  `p6` varchar(255) NOT NULL,
  `p7` varchar(255) NOT NULL,
  `p8` varchar(255) NOT NULL,
  `p9` varchar(255) NOT NULL,
  `p10` varchar(255) NOT NULL,
  `p11` varchar(255) NOT NULL,
  `p12` varchar(255) NOT NULL,
  `p13` varchar(255) NOT NULL,
  `p14` varchar(255) NOT NULL,
  `p15` varchar(255) NOT NULL,
  `p16` varchar(255) NOT NULL,
  `p17` varchar(255) NOT NULL,
  `p18` varchar(255) NOT NULL,
  `p19` varchar(255) NOT NULL,
  `p20` varchar(255) NOT NULL,
  `p21` varchar(255) NOT NULL,
  `p22` varchar(255) NOT NULL,
  `p23` varchar(255) NOT NULL,
  `p24` varchar(255) NOT NULL,
  `p25` varchar(255) NOT NULL,
  `p26` varchar(255) NOT NULL,
  `p27` varchar(255) NOT NULL,
  `p28` varchar(255) NOT NULL,
  `p29` varchar(255) NOT NULL,
  `p30` varchar(255) NOT NULL,
  `p31` varchar(255) NOT NULL,
  `p32` varchar(255) NOT NULL,
  `p33` varchar(255) NOT NULL,
  `p34` varchar(255) NOT NULL,
  `p35` varchar(255) NOT NULL,
  `p36` varchar(255) NOT NULL,
  `p37` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `booking_report`
--

INSERT INTO `booking_report` (`id`, `train_no`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `date`) VALUES
(1, 1, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-05-26'),
(2, 0, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-05-26'),
(3, 1, '', '', '3', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(4, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '20', '21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(5, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '35', '', '', '0000-00-00'),
(6, 1, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(7, 1, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(8, 0, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-05-31'),
(9, 0, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(10, 1, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(11, 1, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(12, 1, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(13, 1, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(14, 1, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(15, 1, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-05-30'),
(16, 1, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(17, 1, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(18, 1, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(19, 0, '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(20, 2, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(21, 1, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(22, 1, '', '', '', '', '', '', '', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(23, 2, '', '', '', '', '', '', '7', '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(24, 2, '', '', '', '', '', '', '7', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(25, 2, '', '', '', '', '', '', '7', '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(26, 2, '', '', '', '', '', '', '7', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(27, 2, '', '', '', '', '', '', '7', '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(28, 2, '', '', '', '', '', '', '7', '8', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(29, 2, '', '', '', '', '', '', '7', '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(30, 2, '', '', '', '', '', '', '7', '8', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `book_ticket`
--

CREATE TABLE IF NOT EXISTS `book_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `no_of_person` int(11) NOT NULL,
  `tfare` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `book_ticket`
--

INSERT INTO `book_ticket` (`id`, `name`, `Age`, `email`, `mobile`, `no_of_person`, `tfare`) VALUES
(9, 'jobanpreet singh', 20, 'cu.16bcs2185@gmail.com', 7897556785, 2, 0),
(10, 'amit', 0, '', 0, 255, 0),
(11, 'amit', 0, '', 0, 255, 0),
(12, 'jobanpreet singh', 66, 'jobangill222@gmail.com', 777, 4, 0),
(13, 'amit', 19, 'cu.16bcs2185@gmail.com', 7897556785, 2, 0),
(14, 'ravi', 20, 'rskumar97@gmail.com', 7897556785, 1, 0),
(15, 'joban', 77, 'jobangill222@gmail.com', 7897556785, 5, 0),
(16, 'joban', 19, 'jobangill222@gmail.com', 7897556785, 3, 0),
(17, 'jobanpreet singh', 3, 'jobangill222@gmail.com', 7897556785, 2, 0),
(18, 'jobanpreet singh', 33, 'jobangill222@gmail.com', 7897556785, 2, 300),
(19, 'joban', 22, 'jonnygill98@gmail.com', 7897556785, 2, 300),
(20, 'joban', 23, 'jobangill222@gmail.com', 7897556785, 2, 300),
(21, 'joban', 55, 'jobangill222@gmail.com', 7897556785, 2, 300),
(22, 'jobanpreet singh', 4, 'jobangill222@gmail.com', 7897556785, 2, 300),
(23, 'ravi', 22, 'jobangill222@gmail.com', 7897556785, 1, 150),
(24, 'jobanpreet singh', 22, 'jobangill222@gmail.com', 7897556785, 2, 300);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `suggestion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `mobile_no`, `suggestion`) VALUES
('joban', 'jobangill222@gmail.com', 2147483647, 'fdsgfsd'),
('jobanpreet singh', 'jobangill222@gmail.com', 7897556785, 'jgu'),
('joban', 'jonnygill98@gmail.com', 7897556785, 'dfa'),
('joban', 'jobangill222@gmail.com', 7897556785, '');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `person` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `fname`, `date`, `time`, `person`, `email`) VALUES
(1, 'Amit', '2018-06-30', '', 2, 'jobangill222@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `card_no` int(11) NOT NULL,
  `expire` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `card_no`, `expire`, `cvv`, `email`) VALUES
(3, 'amit', 487, 1, 2, 'cu.16bcs2185@gmail.com'),
(4, 'joban', 22232, 2, 332, 'cu.16bcs2185@gmail.com'),
(5, 'ravi', 2147483647, 2232, 25430540, 'rskumar97@gmail.com'),
(6, 'jobanpreet singh', 666, 0, 1, 'jobangill222@gmail.com'),
(7, '', 0, 0, 0, ''),
(8, '', 0, 0, 0, ''),
(9, 'joban', 231356565, 23231, 33224323, 'jobangill222@gmail.com'),
(10, 'jobanpreet singh', 4556, 2019, 456, 'abc@gmail.com'),
(11, 'joban', 2147483647, 2018, 121, 'amitaakms@gmail.com'),
(12, 'amit', 2147483647, 2018, 123, 'cu.16bcs2101@gmail.com'),
(13, 'joban', 32, 32, 0, 'cu.16bcs2185@gmail.com'),
(14, 'jobanpreet singh', 32, 432, 0, 'cu.16bcs2185@gmail.com'),
(15, 'jobanpreet singh', 32, 432, 122, 'cu.16bcs2185@gmail.com'),
(16, 'jobanpreet singh', 324, 3421, 0, 'cu.16bcs2185@gmail.com'),
(17, 'jobanpreet singh', 324, 3421, 321, 'cu.16bcs2185@gmail.com'),
(18, 'joban', 45, 87, 0, 'cu.16bcs2185@gmail.com'),
(19, 'amit', 3241, 421, 0, 'cu.16bcs2185@gmail.com'),
(20, 'y', 555555, 55, 0, 'cu.16bcs2185@gmail.com'),
(21, 'joban', 78877, 747, 0, 'cu.16bcs2185@gmail.com'),
(22, 'tgbdgsbg', 46555, 555, 0, 'cu.16bcs2185@gmail.com'),
(23, 'tgbdgsbg', 46555, 555, 444, 'cu.16bcs2185@gmail.com'),
(24, 'ravi', 494846365, 4434, 111, 'rskumar97@gmail.com'),
(25, 'ravi', 494846365, 4434, 111, 'rskumar97@gmail.com'),
(26, 'joban', 23, 32, 323, 'cu.16bcs2185@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE IF NOT EXISTS `platform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `person` int(11) NOT NULL,
  `tfare` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id`, `station`, `date`, `time`, `person`, `tfare`) VALUES
(1, 'dsad', '28-06-18', '10:30:53am', 2, 0),
(2, 'ludhiana', '28-06-18', '10:45:10am', 2, 0),
(3, 'dsad', '28-06-18', '11:02:00am', 2, 0),
(4, 'ludhiana', '28-06-18', '11:13:56am', 2, 20),
(5, 'ludhiana', '28-06-18', '11:44:24am', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `check_in` varchar(255) NOT NULL,
  `check_out` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `email`, `check_in`, `check_out`, `type`) VALUES
(1, 'amitaakms@gmail.com', '', '', ''),
(2, 'jobangill222@gmail.com', '2018-06-29', '2018-06-30', 'AC'),
(3, 'cu.16bcs2185@gmail.com', '2018-06-30', '2018-06-30', 'AC'),
(4, '', '', '', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Train_no` varchar(255) NOT NULL,
  `Train_name` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `dep_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `fare` int(11) NOT NULL,
  `Train_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `Train_no`, `Train_name`, `source`, `destination`, `dep_time`, `arr_time`, `fare`, `Train_type`) VALUES
(12, '12903', 'Golden Temple Mail', 'Ludhiana', 'Amritsar', '10:10:10', '10:10:10', 195, 'Mail'),
(13, '18237', 'Chattisgarh Exp', 'Ludhiana', 'Amritsar', '04:50:23', '08:10:45', 175, 'Express'),
(14, '13005', 'Amritsar Mail', 'Ludhiana', 'Amritsar', '00:55:02', '08:55:15', 150, 'Mail'),
(15, '12014', 'Amritsar Shatabdi', 'Amritsar ', 'Ludhiana', '05:50:19', '00:25:05', 505, 'SHATABDI'),
(16, '12204', 'SHC Garib Rath', 'Amritsar', 'Gorakhpur', '02:50:15', '01:15:07', 780, 'Express'),
(20, '12204', 'SHC Garib Rath', 'ludhi', 'ldh', '11:11:11', '11:11:11', 500, 'sleeper');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `user_id`, `first_name`, `last_name`, `email_id`, `mobile`, `password`, `confirm_password`, `gender`) VALUES
(10, 'jonny', 'joban', 'gill', 'jobangill222@gmail.com', 35547772, 'joban', 'joban', 'male'),
(11, 'jonny', 'joban', 'gill', 'jobangill222@gmail.com', 35547772, 'joban', 'joban', 'male'),
(12, 'fdsafd', 'fdafs', 'fdasdf', 'dfsa@gmail.com', 0, 'fads', 'fda', 'female'),
(14, 'jonny', 'joban', 'gill', 'jobangill222@gmail.com', 2147483647, 'Joban222', 'Joban222', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
