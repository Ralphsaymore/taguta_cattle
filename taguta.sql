-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 07:18 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taguta`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `animal_id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_name` varchar(255) NOT NULL,
  `animal_image` text NOT NULL,
  `tag_id` int(11) NOT NULL,
  `breed_type` int(11) NOT NULL DEFAULT '0',
  `group_` int(11) NOT NULL,
  `source` varchar(255) NOT NULL DEFAULT '0',
  `D.O.B` date NOT NULL,
  `sex` varchar(20) NOT NULL DEFAULT '0',
  `elctronic_id` varchar(20) NOT NULL DEFAULT '',
  `tatoo` varchar(85) NOT NULL DEFAULT '',
  `eye_color` varchar(80) NOT NULL DEFAULT '',
  `ear_type` varchar(80) NOT NULL DEFAULT '',
  `horn_type` varchar(80) NOT NULL DEFAULT '',
  `pedigree` varchar(100) NOT NULL,
  `color_marking` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`animal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animal_id`, `animal_name`, `animal_image`, `tag_id`, `breed_type`, `group_`, `source`, `D.O.B`, `sex`, `elctronic_id`, `tatoo`, `eye_color`, `ear_type`, `horn_type`, `pedigree`, `color_marking`, `description`, `status`) VALUES
(1, 'Half pant', '../assests/images/stock/2847957892502c7200.jpg', 1, 2, 1, '19', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(2, 'T-Shirt', '../assests/images/stock/163965789252551575.jpg', 2, 2, 2, '9', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(3, 'Half Pant', '../assests/images/stock/13274578927924974b.jpg', 5, 3, 1, '18', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(4, 'T-Shirt', '../assests/images/stock/12299578927ace94c5.jpg', 6, 3, 3, '29', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(5, 'Half Pant', '../assests/images/stock/24937578929c13532e.jpg', 8, 5, 4, '17', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(6, 'Polo T-Shirt', '../assests/images/stock/10222578929f733dbf.jpg', 9, 5, 5, '29', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 0),
(7, 'Half Pant', '../assests/images/stock/1770257893463579bf.jpg', 11, 7, 4, '28', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(8, 'Polo T-shirt', '../assests/images/stock/136715789347d1aea6.jpg', 12, 7, 3, '9', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(9, 'Sam', '../assests/images/stock/232265aaad0218ed19.PNG', 12, 8, 5, '178', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1),
(10, 'KhaKhi', '../assests/images/stock/321075aaad1679a401.PNG', 14, 9, 4, '195', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 0),
(11, 'Salt', '../assests/images/stock/266445aab8ca467fd5.PNG', 17, 11, 5, '-50', '0000-00-00', '0', '', '', '', '', '', '1', '', '', 0),
(12, 'Soya', '../assests/images/stock/63335aab8cd53b4b9.PNG', 18, 12, 3, '250g', '0000-00-00', '0', '', '', '', '', '', '2', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE IF NOT EXISTS `breed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_id` varchar(255) NOT NULL,
  `stage` varchar(255) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`id`, `animal_id`, `stage`, `status`) VALUES
(1, 'Gap', '1', 1),
(2, 'Forever 21', '1', 1),
(3, 'Gap', '1', 2),
(4, 'Forever 21', '1', 2),
(5, 'Adidas', '1', 2),
(6, 'Gap', '1', 2),
(7, 'Forever 21', '1', 2),
(8, 'Adidas', '1', 2),
(9, 'Gap', '1', 2),
(10, 'Forever 21', '1', 2),
(11, 'Adidas', '1', 2),
(12, 'Gap', '1', 2),
(13, 'Forever 21', '1', 2),
(14, 'Tonderai', '1', 2),
(15, 'SamSam', '1', 2),
(16, 'Fine Salt', '1', 1),
(17, 'Course Salt', '1', 1),
(18, 'Soya Chunks', '1', 1),
(19, 'Pop-Corns', '1', 1),
(20, 'Tea', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `breeding`
--

CREATE TABLE IF NOT EXISTS `breeding` (
  `id` int(50) NOT NULL,
  `animal_id` varchar(255) NOT NULL,
  `mating_date` date NOT NULL,
  `history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `group_active` int(11) NOT NULL DEFAULT '0',
  `group_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_active`, `group_status`) VALUES
(1, 'Sports ', 1, 2),
(2, 'Casual', 1, 2),
(3, 'Casual', 1, 2),
(4, 'Sport', 1, 2),
(5, 'Casual', 1, 2),
(6, 'Sport wear', 1, 2),
(7, 'Casual wear', 1, 2),
(8, 'Sports ', 1, 2),
(9, 'Network Eng', 1, 2),
(10, 'Software Dev', 1, 2),
(11, 'Salts', 1, 1),
(12, 'Soya Meat', 1, 1),
(13, 'Tea', 1, 1),
(14, 'Corns', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE IF NOT EXISTS `health` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_id` varchar(50) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `date_examined` date NOT NULL,
  `medication` varchar(255) NOT NULL,
  `date_cured` date NOT NULL,
  `body_condition` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `animal_id`, `disease_name`, `date_examined`, `medication`, `date_cured`, `body_condition`, `weight`, `username`) VALUES
(1, '2016-07-15', 'John Doe', '0000-00-00', '2700.00', '2035-01-00', '3051.00', '1000.00', '2051.00'),
(2, '2016-07-15', 'John Doe', '0000-00-00', '3400.00', '2044-02-00', '3842.00', '500.00', '3342.00'),
(3, '2016-07-16', 'John Doe', '0000-00-00', '3600.00', '2046-08-00', '4068.00', '568.00', '3500.00'),
(4, '2016-08-01', 'Indra', '0000-00-00', '1200.00', '2015-06-00', '1356.00', '1000.00', '356.00'),
(5, '2016-07-16', 'John Doe', '0000-00-00', '3600.00', '2046-08-00', '4068.00', '500.00', '3568.00'),
(6, '2017-06-01', 'Tino', '0000-00-00', '0.95', '0000-00-00', '1.07', '0', '1.07'),
(7, '2018-03-18', 'JT Ma', '0000-00-00', '88.00', '0000-00-00', '99.44', '0', '99.44');

-- --------------------------------------------------------

--
-- Table structure for table `milk`
--

CREATE TABLE IF NOT EXISTS `milk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_id` int(11) NOT NULL DEFAULT '0',
  `milking_date` date NOT NULL,
  `milking_volume` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `milk`
--

INSERT INTO `milk` (`id`, `animal_id`, `milking_date`, `milking_volume`, `username`) VALUES
(1, 1, '0000-00-00', '1', '1500'),
(2, 1, '0000-00-00', '1', '1200'),
(3, 2, '0000-00-00', '2', '1200'),
(4, 2, '0000-00-00', '1', '1000'),
(5, 3, '0000-00-00', '2', '1200'),
(6, 3, '0000-00-00', '1', '1200'),
(7, 4, '0000-00-00', '1', '1200'),
(8, 5, '0000-00-00', '2', '1200'),
(9, 5, '0000-00-00', '1', '1200'),
(10, 6, '0000-00-00', '17', '0.22'),
(11, 6, '0000-00-00', '5', '0.51'),
(12, 6, '0000-00-00', '5', '0.22'),
(13, 7, '0000-00-00', '50', '1.60'),
(14, 7, '0000-00-00', '2', '1.60'),
(15, 7, '0000-00-00', '3', '1.60');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `purchases_id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_id` int(11) NOT NULL DEFAULT '0',
  `purchase_date` date NOT NULL,
  `purchased_from_contact` varchar(255) NOT NULL,
  `purchase_price` varchar(255) NOT NULL,
  PRIMARY KEY (`purchases_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `sales_date` date NOT NULL,
  `contact` varchar(255) NOT NULL,
  `reason_for_sale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin', '123456', ''),
(2, 'tinashe', 'tinashetaguta', 'ttaguta89@gmail.com'),
(3, 'barnabus', 'muchabaya', 'muchabayab@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
