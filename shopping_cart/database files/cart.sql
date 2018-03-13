-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 02:38 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(1, 3, '', 1, 'T-shirt', 'pro_img3.jpg', 1, 399, 399),
(2, 2, '1', 2, 'REDMI NOTE3', '', 1, 12000, 12000),
(10, 4, '0', 4, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(18, 4, '0', 5, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(19, 5, '0', 5, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(20, 6, '0', 5, 'Samsung T5', 'pro_img7.jpg\r\n', 1, 16399, 16399),
(31, 3, '0', 4, 'T-shirt', 'pro_img3.jpg\r\n', 1, 399, 399),
(33, 5, '0', 4, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(39, 7, '0', 1, 'Casual Green Shirt', 'pro_img8.jpg', 1, 499, 499),
(40, 4, '0', 1, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(41, 3, '0', 8, 'T-shirt', 'pro_img3.jpg', 2, 394, 788),
(44, 4, '0', 8, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(45, 5, '0', 8, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(49, 4, '0', 6, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 4, 47500, 190000),
(56, 3, '0', 6, 'T-shirt', 'pro_img3.jpg', 1, 394, 394),
(57, 5, '0', 6, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(58, 6, '0', 6, 'Samsung T5', 'pro_img7.jpg\r\n', 1, 16399, 16399),
(59, 3, '0', 10, 'T-shirt', 'pro_img3.jpg', 1, 394, 394),
(60, 4, '0', 10, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(62, 5, '0', 10, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(63, 3, '0', 17, 'T-shirt', 'pro_img3.jpg', 1, 395, 395),
(64, 4, '0', 17, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(65, 5, '0', 17, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(66, 6, '0', 17, 'Samsung T5', 'pro_img7.jpg\r\n', 1, 16399, 16399),
(69, 3, '0', 16, 'T-shirt', 'pro_img3.jpg', 2, 395, 790),
(72, 3, '0', 0, 'T-shirt', 'pro_img3.jpg', 1, 395, 395),
(75, 4, '0', 0, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(76, 5, '0', 0, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(79, 3, '0', 23, 'T-shirt', 'pro_img3.jpg', 6, 400, 2400),
(88, 3, '0', 32, 'T-shirt', 'pro_img3.jpg', 1, 400, 400),
(91, 4, '0', 23, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 1, 47500, 47500),
(92, 5, '0', 23, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999),
(100, 4, '0', 32, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 5, 47500, 237500),
(102, 4, '0', 31, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 2, 47500, 95000),
(103, 3, '0', 31, 'T-shirt', 'pro_img3.jpg', 2, 400, 800),
(104, 3, '0', 33, 'T-shirt', 'pro_img3.jpg', 9, 400, 3600),
(106, 5, '0', 32, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 3, 38999, 116997),
(107, 6, '0', 32, 'Samsung T5', 'pro_img7.jpg\r\n', 1, 16399, 16399),
(112, 4, '0', 34, 'Dell Vostro3568', 'pro_img5.jpg\r\n', 2, 47500, 95000),
(113, 5, '0', 34, 'Lenovo Ideapad 320', 'pro_img6.jpg\r\n', 1, 38999, 38999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
