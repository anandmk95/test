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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `txn_id`, `payment_gross`, `currency_code`, `payment_status`) VALUES
(1, '91591719F45684130', 160000.00, 'USD', 'Completed'),
(2, '91591719F45684130', 160000.00, 'USD', 'Completed'),
(3, '91591719F45684130', 160000.00, 'USD', 'Completed'),
(4, '91591719F45684130', 160000.00, 'USD', 'Completed'),
(5, '4MF38848PU779344B', 160000.00, 'USD', 'Completed'),
(6, '14Y047671G407445K', 160000.00, 'USD', 'Completed'),
(7, '14Y047671G407445K', 160000.00, 'USD', 'Completed'),
(8, '14Y047671G407445K', 160000.00, 'USD', 'Completed'),
(9, '4YA33113EU872682C', 1200.00, 'USD', 'Completed'),
(10, '36496770XF1963207', 2400.00, 'USD', 'Completed'),
(12, '5DY16402GF708744F', 47900.00, 'USD', 'Completed'),
(24, '8S1329488C218712X', 3600.00, 'USD', 'Completed'),
(25, '8S1329488C218712X', 3600.00, 'USD', 'Completed'),
(26, '8S1329488C218712X', 3600.00, 'USD', 'Completed'),
(27, '8S1329488C218712X', 3600.00, 'USD', 'Completed'),
(28, '8S1329488C218712X', 3600.00, 'USD', 'Completed'),
(29, '6UM80046E19656931', 371296.00, 'USD', 'Completed'),
(30, '1SX716489U722694G', 95800.00, 'USD', 'Completed'),
(31, '4P705455YU240493R', 95800.00, 'USD', 'Completed'),
(32, '342667783V400225G', 95800.00, 'USD', 'Completed'),
(33, '5CJ43960447807202', 134799.00, 'USD', 'Completed'),
(34, '62H22200RG123342B', 95800.00, 'USD', 'Completed'),
(35, '0YB33220DJ130993R', 95800.00, 'USD', 'Completed'),
(36, '0YB33220DJ130993R', 95800.00, 'USD', 'Completed'),
(37, '0YB33220DJ130993R', 95800.00, 'USD', 'Completed'),
(38, '0YB33220DJ130993R', 95800.00, 'USD', 'Completed'),
(39, '0YB33220DJ130993R', 95800.00, 'USD', 'Completed'),
(40, '0MF26765XL392060B', 95800.00, 'USD', 'Completed'),
(41, '0MF26765XL392060B', 95800.00, 'USD', 'Completed'),
(42, '5LU57074PU418242C', 95800.00, 'USD', 'Completed'),
(43, '5LU57074PU418242C', 95800.00, 'USD', 'Completed'),
(44, '5LU57074PU418242C', 95800.00, 'USD', 'Completed'),
(45, '6UA58462UC5560835', 95800.00, 'USD', 'Completed'),
(46, '04H06963YG259310V', 95800.00, 'USD', 'Completed'),
(47, '93K19768SV364152N', 95800.00, 'USD', 'Completed'),
(48, '46P94493PB065102K', 95800.00, 'USD', 'Completed'),
(49, '8HB46956H50653629', 95800.00, 'USD', 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
