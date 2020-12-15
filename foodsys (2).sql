-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 01:26 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(4, 'BREAKFAST'),
(5, 'LUNCH'),
(6, 'DINNER'),
(7, 'BEVERAGES'),
(9, 'Desert');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `categoryid`, `productname`, `price`, `photo`) VALUES
(14, 4, 'Pancake Tacos with Cheese and ', 400, 'upload/pancake_breakfast_tacos400_1539096003.jpg'),
(15, 4, 'Egg Baked In Tomatoes', 3100, 'upload/eggs_in_tomatoes_1539095833.jpeg'),
(16, 5, 'Beef & Broccoli Stir-Fry', 360, 'upload/brocollibeef_1539096616_1539097842.jpg'),
(17, 5, 'Spaghetti', 400, 'upload/spagetti_1539097965.png'),
(18, 7, 'Mojito', 200, 'upload/http _cdn.cnn.com_cnnnext_dam_assets_170224172523-mojito_1539097580.jpg'),
(19, 7, 'Sex On The Beach', 250, 'upload/http _cdn.cnn.com_cnnnext_dam_assets_170227111426-sex-on-the-beach-cocktail_1539097662.jpg'),
(20, 6, 'Slow Cooker Orange Chicken ', 450, 'upload/slow-cooker-chicken-recipes-orange-1533576720_1539097827.jpg'),
(22, 4, 'Full English Breakfast', 600, 'upload/1145_1539096763.jpg'),
(23, 7, 'Coca-Cola', 800, 'upload/cocacola_1539097796.jpg'),
(25, 4, 'Fried rice', 2000, 'upload/slow-cooker-chicken-recipes-orange-1533576720_1567094014.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `contact`, `address`, `total`, `date_purchase`) VALUES
(8, 'Neovic', '', '', 600, '2017-12-06 15:29:00'),
(9, 'demo', '', '', 450, '2018-10-09 20:19:43'),
(10, 'Thura', '', '', 1060, '2019-08-05 01:47:47'),
(11, 'Thura', '', '', 0, '2019-08-05 01:49:07'),
(12, 'Thura', '', '', 620, '2019-08-05 18:22:36'),
(13, 'Thura', '', '', 0, '2019-08-05 19:27:59'),
(14, 'Thura', '', '', 310, '2019-08-05 20:06:01'),
(15, 'Thura', '', '', 310, '2019-08-14 21:31:56'),
(16, 'Thura', '', '', 0, '2019-08-14 21:35:04'),
(17, 'sai sai', '', '', 310, '2019-08-19 19:30:33'),
(18, 'Thura', '', '', 310, '2019-08-28 19:12:48'),
(19, 'Thura', '', '', 0, '2019-08-29 19:23:42'),
(20, 'Thura', '', '', 0, '2019-08-29 19:23:42'),
(21, 'sai sai', '', '', 0, '2019-08-31 09:48:18'),
(22, 'sai sai', '', '', 0, '2019-08-31 09:50:14'),
(23, 'Thura', '', '', 310, '2019-08-31 09:54:50'),
(24, 'Thura', '', '', 400, '2019-08-31 10:01:30'),
(25, 'Thura', '', '', 4000, '2019-08-31 10:01:59'),
(26, 'sai sai', '', '', 0, '2019-08-31 10:15:05'),
(27, 'Thura', '', '', 0, '2019-08-31 10:26:39'),
(28, 'sai sai', '', '', 0, '2019-08-31 10:27:09'),
(29, 'Thura', '', '', 310, '2019-08-31 10:28:28'),
(30, 'sai sai', '', '', 0, '2019-08-31 10:40:02'),
(31, 'Thura', '', 'Mandalay', 0, '2019-08-31 10:54:06'),
(32, 'Thura', '09123456789', 'Mandalay', 0, '2019-08-31 10:57:01'),
(33, 'Thura', '09123456789', 'Mandalay', 0, '2019-08-31 11:39:45'),
(34, 'Thura', '09123456789', 'Mandalay', 0, '2019-08-31 13:05:55'),
(35, 'Thura', '09123456789', 'Mandalay', 0, '2019-08-31 13:12:50'),
(36, 'Thura', '09123456789', 'Mandalay', 400, '2019-08-31 13:29:50'),
(37, 'Thura', '09123456789', 'Mandalay', 620, '2019-08-31 13:30:21'),
(38, 'Thura', '09123456789', 'Mandalay', 30460, '2019-08-31 13:35:24'),
(39, 'Thura', '09123456789', 'Mandalay', 3600, '2019-08-31 13:37:47'),
(40, 'Thura', '09123456789', 'Mandalay', 400, '2019-08-31 20:01:41'),
(41, 'Thura', '09123456789', 'Mandalay', 800, '2019-08-31 20:05:18'),
(42, 'Thura', '09123456789', 'Mandalay', 400, '2019-08-31 20:54:57'),
(43, 'Thura', '09123456789', 'Mandalay', 400, '2019-08-31 22:32:37'),
(44, 'Thura', '09123456789', 'Mandalay', 400, '2019-08-31 22:34:31'),
(45, 'tttt', 'tt', 't', 400, '2019-08-31 22:42:19'),
(46, 'tttt', 'tt', 't', 400, '2019-08-31 22:44:02'),
(47, 'Thura', '09123456789', 'Mandalay', 1600, '2019-08-31 23:41:16'),
(48, 'Thura', '09123456789', 'Mandalay', 1600, '2019-08-31 23:42:48'),
(49, 'Thura', '09123456789', 'Mandalay', 400, '2019-08-31 23:48:10'),
(50, 'Thura', '09123456789', 'Mandalay', 1200, '2019-09-01 02:17:15'),
(51, 'Thura', '09123456789', 'Mandalay', 1020, '2019-09-01 03:30:47'),
(52, 'Thura', '09123456789', 'Mandalay', 600, '2019-09-01 03:36:46'),
(53, 'sai sai', '09123456789', 'Mandalay', 400, '2019-09-01 20:41:06'),
(54, 'Thura', '09123456789', 'Mandalay', 2000, '2019-09-02 18:17:30'),
(55, 'Thura', '09123456789', 'Mandalay', 400, '2019-09-02 19:05:56'),
(56, 'Thura', '09123456789', 'Mandalay', 0, '2019-09-02 19:06:44'),
(57, 'Thura', '09123456789', 'Mandalay', 0, '2019-09-02 19:20:14'),
(58, 'Thura', '09123456789', 'Mandalay', 400, '2019-09-02 19:22:03'),
(59, 'Thura', '09123456789', 'Mandalay', 620, '2019-09-02 19:22:23'),
(60, 'Thura', '09123456789', 'Mandalay', 400, '2019-09-02 19:25:50'),
(61, 'Thura', '09123456789', 'Mandalay', 310, '2020-06-17 15:59:21'),
(62, 'Thura', '09123456789', 'Mandalay', 3220, '2020-06-17 21:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `pdid` int(11) NOT NULL,
  `purchaseid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_detail`
--

INSERT INTO `purchase_detail` (`pdid`, `purchaseid`, `productid`, `quantity`) VALUES
(13, 8, 15, 2),
(14, 8, 17, 2),
(15, 8, 18, 2),
(16, 9, 15, 3),
(17, 10, 15, 1),
(18, 10, 21, 2),
(19, 11, 16, 0),
(20, 12, 15, 2),
(21, 13, 15, 0),
(22, 14, 15, 1),
(23, 15, 15, 1),
(24, 16, 22, 0),
(25, 17, 15, 1),
(26, 18, 15, 1),
(27, 23, 15, 1),
(28, 24, 14, 1),
(29, 25, 14, 10),
(30, 26, 16, 0),
(31, 27, 15, 0),
(32, 28, 14, 0),
(33, 29, 15, 1),
(34, 30, 14, 0),
(35, 31, 14, 0),
(36, 32, 14, 0),
(37, 33, 14, 0),
(38, 34, 14, 0),
(39, 34, 15, 0),
(40, 34, 24, 0),
(41, 35, 14, 0),
(42, 35, 16, 0),
(43, 36, 14, 1),
(44, 37, 15, 2),
(45, 38, 15, 6),
(46, 38, 22, 11),
(47, 38, 25, 11),
(48, 39, 16, 10),
(49, 40, 14, 1),
(50, 41, 14, 2),
(51, 42, 14, 1),
(52, 43, 14, 1),
(53, 44, 14, 1),
(54, 45, 14, 1),
(55, 46, 14, 1),
(56, 47, 14, 1),
(57, 47, 22, 2),
(58, 48, 14, 1),
(59, 48, 22, 2),
(60, 49, 14, 1),
(61, 50, 14, 3),
(62, 51, 14, 1),
(63, 51, 15, 2),
(64, 52, 18, 3),
(65, 53, 14, 1),
(66, 54, 24, 1),
(67, 55, 14, 1),
(68, 56, 15, 0),
(69, 57, 14, 0),
(70, 58, 14, 1),
(71, 59, 15, 2),
(72, 60, 14, 1),
(73, 61, 15, 1),
(74, 62, 14, 1),
(75, 62, 15, 2),
(76, 62, 18, 1),
(77, 62, 24, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`pdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
