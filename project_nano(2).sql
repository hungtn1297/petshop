-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 05:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_nano`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Dog Food'),
(2, 'Cat Food'),
(3, 'Other Food'),
(4, 'Cage'),
(5, 'Accessories'),
(7, 'hungtn'),
(10, 'firebase'),
(11, 'firebase1'),
(12, 'tran nguyen hung');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `orderid`, `productid`, `quantity`, `productPrice`) VALUES
(3, 4, 10, 1, 30000),
(4, 5, 10, 3, 30000),
(5, 5, 6, 1, 130000),
(6, 6, 5, 1, 115000),
(7, 7, 5, 1, 115000),
(8, 8, 5, 2, 115000),
(9, 9, 5, 1, 115000),
(10, 11, 10, 1, 30000),
(11, 12, 10, 1, 30000),
(12, 13, 5, 1, 115000),
(13, 18, 10, 3, 30000),
(14, 18, 6, 2, 130000),
(15, 18, 5, 1, 115000),
(16, 18, 4, 5, 35000),
(17, 20, 5, 1, 115000),
(18, 20, 4, 1, 35000),
(19, 22, 3, 1, 40000),
(20, 24, 5, 1, 115000),
(21, 28, 6, 1, 130000),
(22, 28, 5, 2, 115000);

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `id` int(11) NOT NULL,
  `orderdate` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `customername` varchar(255) DEFAULT NULL,
  `phone` varchar(10) DEFAULT '0000000000',
  `email` text,
  `address` text,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `orderdate`, `customername`, `phone`, `email`, `address`, `status`) VALUES
(4, '2019-08-31 16:43:00', 'user', '0000000000', NULL, NULL, 1),
(5, '2019-08-31 16:43:00', 'user', '0000000000', NULL, NULL, 1),
(6, '2019-08-31 16:46:10', 'user', '0000000000', NULL, NULL, 1),
(7, '2019-08-31 16:47:18', '', '0000000000', NULL, NULL, 1),
(8, '2019-08-31 16:47:18', 'user', '0000000000', NULL, NULL, 1),
(9, '2019-08-31 16:48:30', 'user', '0000000000', NULL, NULL, 1),
(10, '2019-08-31 16:49:33', 'user', '0000000000', NULL, NULL, 1),
(11, '2019-08-31 16:49:33', 'user', '0000000000', NULL, NULL, 1),
(12, '2019-08-31 18:06:29', 'admin', '0000000000', NULL, NULL, 1),
(13, '2019-08-31 18:35:59', '', '0000000000', NULL, NULL, 1),
(18, '2000-01-01 00:00:00', NULL, '0000000000', NULL, NULL, 0),
(20, '2000-01-01 00:00:00', NULL, '0000000000', NULL, NULL, 0),
(22, '2019-10-08 00:00:00', 'hungtn', '0123456789', 'nguyenhungtran1297@gmail.com', 'nguyenvanluong', 0),
(24, '2019-10-08 00:00:00', 'binhtt', '1234567890', 'hungtnse62669@fpt.edu.vn', 'nguyenvanluong', 0),
(28, '2019-10-08 00:00:00', 'hungtn', '0123456789', 'hungtnse62669@fpt.edu.vn', 'nguyenvanluong', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `category_id`, `description`, `image`) VALUES
(3, 'Beef Sticks', 40000, 14, 1, 'Dog Food', 'image/product4.png'),
(4, 'Inaba soft bits mix', 35000, 11, 2, 'Cat Food', 'image/product3.png'),
(5, 'Minino Yum', 115000, 20, 2, 'Cat Food', 'image/product2.png'),
(6, 'Whiskas Seeds', 130000, 4, 2, 'Cat Food', 'image/product1.png'),
(10, 'Cheese Sausage5', 30000, 14, 2, 'gdfgfdg', 'image/product2.png'),
(11, 'tran nguyen binh', 50000, 50, 4, 'gdgdfg', 'image/007.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `isAvailable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`, `name`, `address`, `phoneNumber`, `isAvailable`) VALUES
('admin', 'admin', 1, 'Admin Deptrai', 'Nha cua Admin', '123456789', 1),
('user', 'user', 2, 'User Deptrai', 'Nha cua user', '21457963', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
