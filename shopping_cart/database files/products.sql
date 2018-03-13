-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 02:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `pro_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `pro_qty`) VALUES
(4, 1, 2, 'Dell Vostro3568', 47500, 'laptop', 'pro_img5.jpg\r\n', 'dell', 33),
(5, 1, 2, 'Lenovo Ideapad 320', 38999, 'lenovo', 'pro_img6.jpg\r\n', 'lenovo', 0),
(6, 7, 4, 'Samsung T5', 16399, 'Storage made new with Samsung T5 which comes with 540mbps transfer speed, sleek and solid AES 256-bit hardware encryption and shock resistance from falls up to 2m.', 'pro_img7.jpg\r\n', 'Storage made new with Samsung T5 which comes with 540mbps transfer speed, sleek and solid AES 256-bit hardware encryption and shock resistance from falls up to 2m.', 0),
(7, 2, 7, 'Casual Green Shirt', 499, '', 'pro_img8.jpg', 'Causal Full Sleeve Shirt', 0),
(8, 2, 7, 'Solid Round Neck', 350, '', 'pro_img9.jpg\r\n', 'Round Neck Shirt', 0),
(9, 2, 7, 'Cotton pant(combo 4)', 1000, 'pant', 'pro_img10.jpg', 'pant', 0),
(10, 2, 7, 'Jean pant', 450, '', 'pro_img11.jpg', '\r\npant', 0),
(11, 3, 7, 'Matrix !', 300, 'T_shirt', 'pro_img12.jpg', 'T-shirt', 0),
(13, 4, 0, 'Yonex gr303', 399, 'YOnex', 'pro_img14.jpg', 'Yonex Shuttle', 0),
(26, 0, 0, 'asdfad', 323243, 'sd', 'pro_img12.jpg', 'asdasd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
