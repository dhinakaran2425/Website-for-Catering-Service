-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2022 at 08:10 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `balajicatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE IF NOT EXISTS `addcart` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(25) NOT NULL,
  `edate` varchar(10) NOT NULL,
  `price` bigint(12) NOT NULL,
  `qty` bigint(12) NOT NULL,
  `total` bigint(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `p_id`, `u_id`, `edate`, `price`, `qty`, `total`) VALUES
(11, 5, 'dhina', '2022-04-21', 40, 55, 2200),
(12, 1, 'dhina', '2022-04-24', 40, 55, 2200),
(15, 18, 'dhina', '2022-05-02', 30, 120, 3600),
(16, 14, 'dhina', '2022-05-06', 50, 67, 3350),
(18, 19, 'dhina', '2022-05-08', 30, 60, 1800),
(19, 15, 'dhina', '2022-05-10', 15, 1, 15),
(26, 11, 'gowtham', '2022-05-27', 6, 55, 330),
(27, 14, 'aish', '2022-05-12', 50, 77, 3850),
(28, 1, 'naren', '2022-05-28', 40, 66, 2640);

-- --------------------------------------------------------

--
-- Table structure for table `addcart_1`
--

CREATE TABLE IF NOT EXISTS `addcart_1` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `p_id` int(25) NOT NULL,
  `u_id` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `addcart_1`
--

INSERT INTO `addcart_1` (`id`, `p_id`, `u_id`, `price`, `qty`, `total`) VALUES
(1, 0, 'aish', 135, 22, 2970),
(2, 0, 'aish', 135, 33, 4455),
(3, 0, 'aish', 135, 55, 7425),
(9, 0, 'gowtham', 135, 25, 3375),
(12, 0, 'dhina', 130, 44, 5720),
(13, 1, 'aish', 135, 55, 7425);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`) VALUES
('admin', 'admin'),
('dhina', 'dhina');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE IF NOT EXISTS `catering` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(25) NOT NULL,
  `price` varchar(10) NOT NULL,
  `items` varchar(100) NOT NULL,
  `path` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `p_id`, `price`, `items`, `path`) VALUES
(1, 'Morning', '135', 'Idly,Dosa,Pongal,Poori,Vada,Sambar,Coconut Chutney,Tomato Chutney,Kesari', 'images/morning.jpg'),
(2, 'Afternoon', '130', 'Rice,Sambar,Rasam,Pulikulambu,Curd,Poriyal,Appalam,Vadai,Paayasam,  Veg Biriyani', 'images/afternoon.webp'),
(3, 'Night', '135', 'Idly,Dosa,Sambar,Coconut Chutney,Tomato Chutney,Chappathi,Parotta,Veg Kuruma', 'images/night.jpg'),
(4, 'valakkapu', '180', 'Lemon rice,Coconut rice,Tomato rice,Curd rice,Kalkandu rice,Rice,Sambar,Rasam,Pulikulambu,Curd,Poriy', 'images/valakkappu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `edate` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` text NOT NULL,
  `transactionid` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `p_id`, `u_id`, `edate`, `name`, `mobile`, `email`, `location`, `transactionid`) VALUES
(11, 13, 'dhina', '2021-12-31', 'dhina', 6374610120, 'dhina2425@gmail.com', '507,SKC Mainroad,Surampatti,Erode', ''),
(29, 13, 'dhina', '2022-04-08', 'dhina', 9443269997, 'skc@gmail.com', 'skc', ''),
(59, 2, 'aish', '2022-04-19', 'aish', 9443269997, 'aish@gmail.com', 'perundurai', ''),
(68, 1, 'gowtham', '2022-04-20', 'gowtham', 6380976124, 'gowtham@gmail.com', 'thindal', ''),
(70, 1, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(71, 18, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(72, 14, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(74, 15, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(75, 5, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(76, 1, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(78, 14, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(83, 18, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(84, 14, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(86, 15, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(89, 18, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(90, 14, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(93, 5, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(95, 18, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(96, 14, 'dhina', '2022-04-21', 'dhina', 6374610120, 'dhina@gmail.com', 'skc road erode', ''),
(100, 1, 'dhina', '2022-04-21', 'dhina', 9443269997, 'dhina@gmail.com', 'das', ''),
(101, 12, 'gowtham', '2022-05-05', 'dhina', 6374610120, 'dhina@gmail.com', 'perundurai', '');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_1`
--

CREATE TABLE IF NOT EXISTS `checkout_1` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(25) NOT NULL,
  `edate` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` text NOT NULL,
  `transactionid` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transactionid` (`transactionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `checkout_1`
--

INSERT INTO `checkout_1` (`id`, `p_id`, `u_id`, `edate`, `name`, `mobile`, `email`, `location`, `transactionid`) VALUES
(63, 0, 'aish', '2022-04-19', 'aish', 9443269997, 'aish@gmail.com', 'perundurai', 'jgdshgd'),
(64, 0, 'aish', '2022-04-21', 'aish', 9443269997, 'aish@gmail.com', 'perundurai', '123457788'),
(66, 0, 'aish', '2022-04-19', 'aish', 9443269997, 'aish@gmail.com', 'perundurai', '283782782'),
(67, 0, 'dhina', '2022-04-25', 'dhina', 9443269997, 'dhina@gmail.com', 'perundurai', '45451212121545410202111'),
(68, 0, 'aish', '2022-05-12', 'dhinakaran', 9443269997, 'dhina@gmail.com', 'skc road erode', 'dnhwjfh232'),
(70, 0, 'aish', '2022-05-12', 'dhinakaran', 6380976124, 'dhina@gmail.com', 'skc road erode', '2343drdgsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, 'hi', 'hi', 1),
(2, 'hi', 'hello', 1),
(3, 'owner', 'new foods available now', 1),
(4, 'Owner', 'Offer', 1),
(5, 'owner', 'hi', 1),
(6, 'dhina', 'hi', 1),
(7, 'balaji', 'hi', 1),
(8, 'owner', 'u have a offer', 1),
(9, 'Owner', 'Chappathi with channa pattoora  now available', 1),
(10, 'dhina', 'shop open', 1),
(11, 'dhina', 'shop open', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `name_ship` varchar(255) NOT NULL,
  `address_1_ship` varchar(255) NOT NULL,
  `address_2_ship` varchar(255) NOT NULL,
  `town_ship` varchar(255) NOT NULL,
  `postcode_ship` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `customers`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, 'img/1.webp'),
(2, 'img/2.webp'),
(3, 'img/3.webp'),
(4, 'img/4.webp'),
(5, 'img/5.webp'),
(6, 'img/6.webp'),
(7, 'img/7.webp'),
(8, 'img/8.jpg'),
(9, 'img/9.webp'),
(10, 'img/10.webp'),
(11, 'img/11.webp'),
(12, 'img/12.webp'),
(13, 'img/13.webp'),
(14, 'img/14.jpg'),
(15, 'img/15.jpg'),
(16, 'img/16.jpg'),
(18, 'img/17.jpg'),
(19, 'img/18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(255) NOT NULL,
  `custom_email` text NOT NULL,
  `invoice_date` varchar(255) NOT NULL,
  `invoice_due_date` varchar(255) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `shipping` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `vat` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `notes` text NOT NULL,
  `invoice_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice`, `custom_email`, `invoice_date`, `invoice_due_date`, `subtotal`, `shipping`, `discount`, `vat`, `total`, `notes`, `invoice_type`, `status`) VALUES
(62, '3', '', '28/04/2022', '28/04/2022', '220', '0', '0', '0', '220', '', 'receipt', 'paid'),
(56, '1', '', '27/04/2022', '28/04/2022', '130', '0', '10', '0', '130', '', 'invoice', 'paid'),
(57, '1', '', '27/04/2022', '28/04/2022', '130', '0', '10', '0', '130', '', 'invoice', 'paid'),
(58, '1', '', '27/04/2022', '28/04/2022', '130', '0', '10', '0', '130', '', 'receipt', 'paid'),
(59, '2', '', '27/04/2022', '28/04/2022', '130', '0', '10', '0', '130', '', 'receipt', 'paid'),
(60, '2', '', '27/04/2022', '28/04/2022', '130', '0', '10', '0', '130', '', 'receipt', 'paid'),
(61, '3', '', '28/04/2022', '28/04/2022', '220', '0', '0', '0', '220', '', 'receipt', 'paid'),
(63, '4', '', '29/04/2022', '29/04/2022', '60', '0', '0', '0', '60', '', 'invoice', 'open'),
(64, '5', '', '15/04/2022', '16/04/2022', '40', '0', '0', '0', '40', '', 'receipt', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE IF NOT EXISTS `invoice_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(255) NOT NULL,
  `product` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `invoice_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `sub_cat` varchar(120) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` bigint(6) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `sub_cat`, `title`, `price`, `image`) VALUES
(1, 'lunch', '', 'Rice', 40, 'mimg/rice.jpg'),
(2, 'lunch', '', 'Sambar', 10, 'mimg/sambar.jpg'),
(3, 'lunch', '', 'Rasam', 10, 'mimg/rasam.jpg'),
(4, 'lunch', '', 'Thair', 10, 'mimg/thair.jfif'),
(5, 'lunch', '', 'Thakkali Saadam', 40, 'mimg/thakkali saadam.jpg'),
(6, 'lunch', '', 'Thair Saadam', 40, 'mimg/thair saadam.jfif'),
(7, 'lunch', '', 'Masala Vadai', 6, 'mimg/Masala vadai.JPG'),
(8, 'lunch', '', 'Pulikolambu', 10, 'mimg/Pulikolambu.jpg'),
(9, 'lunch', '', 'Paayasam', 15, 'mimg/paayasam.webp'),
(10, 'lunch', '', 'Lemon Sadam', 40, 'mimg/lemon saadam.jpg'),
(11, 'breakfast', '', 'Medhu Vadai', 6, 'mimg/Medhu vadai.jpg'),
(12, 'breakfast', '', 'Idly', 10, 'mimg/idly.jpg'),
(13, 'breakfast', '', 'Salem Uttapam', 20, 'mimg/uttapam.jpg'),
(14, 'breakfast', '', 'Venn Pongal', 50, 'mimg/pongal.jpg'),
(15, 'breakfast', '', 'Kesari', 15, 'mimg/kesari.jpg'),
(16, 'breakfast', '', 'Puri', 35, 'mimg/Puri.jpg'),
(17, 'lunch', '', 'ButterMilk', 10, 'mimg/buttermilk.jpg'),
(18, 'lunch', '', 'chapathi', 30, 'mimg/chapathi.jpg'),
(19, 'dinner', '', 'parotta', 30, 'mimg/parotta.jpg'),
(20, 'dinner', '', 'kothu parotta', 50, 'mimg/KothuParotta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `proudct_id` varchar(55) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `proudct_id`, `product_name`, `product_price`, `product_qty`) VALUES
(1, 'ml01', 'Malai Kadhaai', 250, 2),
(2, 'pn01', 'Paneer Mutter', 150, 3),
(3, 'pn02', 'Paneer Aloo', 120, 4),
(4, 'rm1', 'Tandoori Roti', 25, 2),
(5, 'rm1', 'Butter Roti', 35, 2),
(6, 'jr01', 'Jeera Rice', 110, 2),
(7, 'kf1', 'Veg Kofta', 230, 2),
(8, 'mt01', 'Mutton Curry', 425, 1),
(9, 'ck01', 'Chicken Cury', 210, 1),
(10, 'ck02', 'Chicken Masala', 110, 1),
(11, 'ck03', 'Chicken Rice', 150, 1),
(12, 'rt01', 'Onion Rayata', 45, 1),
(13, 'rt02', 'Onine Curd Rayata', 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` bigint(12) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` bigint(6) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`) VALUES
(1, 'Rice', 40),
(2, 'Sambar', 10),
(3, 'Rasam', 10),
(4, 'Thair', 10),
(5, 'Thakkali Saadam', 40),
(6, 'Thair Saadam', 40),
(7, 'Masala Vadai', 6),
(8, 'Pulikolambu', 10),
(9, 'Paayasam', 15),
(10, 'Lemon Sadam', 40),
(11, 'Medhu Vadai', 6),
(12, 'Idly', 10),
(13, 'Salem Uttapam', 20),
(14, 'Venn Pongal', 50),
(15, 'Kesari', 15),
(16, 'Puri', 35),
(17, 'ButterMilk', 10),
(18, 'chapathi', 30),
(19, 'parotta', 30),
(20, 'kothu parotta', 50);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userid`, `password`, `mobile`, `email`) VALUES
(1, 'dhina', 'dhina', 6374610120, 'dhinakaran2425@gmail.com'),
(2, 'nishanth', 'Nishanth', 9994897646, 'nishanth@gmail.com'),
(3, 'aish', '123456', 9443269997, 'aish@gmail.com'),
(4, 'gowtham', '123456', 6380976124, 'gowtham@gmail.com'),
(5, 'vishva', 'vishva', 6889849347, 'vishva@gmail.com'),
(6, 'thambiraj', 'thambiraj', 9563573683, 'thambiraj@gmail.com'),
(7, 'kavin', 'kavin', 7878687656, 'kavin@gmail.com'),
(8, 'naren', 'naren', 8748642352, 'naren@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `description`) VALUES
(1, 'aish', 'Good', 'super'),
(2, 'gowtham', 'Exellent', 'fantastic'),
(3, 'dhina', 'Exellent', 'healthy food'),
(4, 'aish', 'Average', 'vegtarians loves more'),
(5, 'kavin', 'Good', 'good preparations'),
(6, 'thambiraj', 'Average', 'delicious sambar for function');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE IF NOT EXISTS `review_table` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'dhina', 5, 'super', 1649823968),
(6, 'hh', 5, 'good', 1650254534),
(7, 'dhina', 4, 'good', 1650349520),
(8, 'dhina', 4, 'good', 1650349520),
(9, 'dhina', 4, 'good', 1650349520),
(10, 'dhina', 4, 'good', 1650349520),
(11, 'dhina', 5, 'good', 1653026035),
(12, 'dhina', 5, 'good', 1653026035),
(13, 'dhina', 5, 'good', 1653026035),
(14, 'dhina', 5, 'good', 1653026035);

-- --------------------------------------------------------

--
-- Table structure for table `store_customers`
--

CREATE TABLE IF NOT EXISTS `store_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `name_ship` varchar(255) NOT NULL,
  `address_1_ship` varchar(255) NOT NULL,
  `address_2_ship` varchar(255) NOT NULL,
  `town_ship` varchar(255) NOT NULL,
  `postcode_ship` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `store_customers`
--

INSERT INTO `store_customers` (`id`, `name`, `email`, `address_1`, `address_2`, `town`, `postcode`, `phone`, `name_ship`, `address_1_ship`, `address_2_ship`, `town_ship`, `postcode_ship`) VALUES
(1, 'dhina', 'dhinakaran@gmail.com', 'skc road', 'surampatti', 'erode', '638009', '6374610120', 'dhina', 'skc road', 'surampatti', 'erode', '638009');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`) VALUES
(1, 'Liam Moore', 'admin', 'admin@codeastro.com', '7896541250', 'd00f5d5217896fb7fd601412cb890830');
