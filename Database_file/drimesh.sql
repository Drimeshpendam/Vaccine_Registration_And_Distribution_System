-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 09:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drimesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'suraj', '$2y$10$JguGuvAmNTbWUdylgweyyOWsQmPs9D2B.m80kwfheCN4vo20FKXkK', '2021-06-10 17:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `name`) VALUES
(1, 'Corona Vaccine'),
(2, 'Children Vaccine'),
(3, 'Adult Vaccine');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `bill` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `proid` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `proid`, `product_name`, `address`, `units`, `total`, `date`) VALUES
(1, '1', 'COVAXIN', 'SHEGOANKAR LAYOUT WARDHA', 20, 18000, '2021-06-07 20:45:40'),
(1, '1', 'COVAXIN', 'SHEGOANKAR LAYOUT WARDHA', 20, 18000, '2021-06-07 20:45:40'),
(2, '4', 'COVISHIELD', 'HINGA NAGPUR', 35, 34965, '2021-06-11 11:49:34'),
(3, '5', 'POLIO', 'AURANGABAD', 40, 400000, '2021-09-10 19:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `catid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `name`, `price`, `description`, `image`, `catid`, `status`) VALUES
(1, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 1, 1),
(2, 'Covishield', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 1, 1),
(3, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 2, 1),
(4, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 1, 1),
(5, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 2, 1),
(6, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 2, 1),
(7, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 3, 1),
(8, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 3, 1),
(9, 'Covaxin', 999, 'CovaxinÂ® vaccine, manufactured by the Bharat Biotech, is a Whole-virion Inactivated Coronavirus Vac', '1.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Suraj', '$2y$10$sAHLeZpMwtLFkGO5qtAJYe8STA434CvD9CF5Ria5cV9TB/71XJKJu', '2021-06-10 15:04:29'),
(2, 'Kiran', '$2y$10$OY72ouv88EGrVrn7GHYaQ.pvBvd/x.eYaJ2wo7aPi9EiJ27uMFSBG', '2021-06-15 00:15:07'),
(3, 'jhon', '$2y$10$VhwgEJ9OzmYgfgaWAAdr3OcyvcapYg20RkyFWWNTNpebjHyYE5uXS', '2021-06-18 13:15:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
