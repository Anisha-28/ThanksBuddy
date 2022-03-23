-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2021 at 03:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `report_id` int(4) NOT NULL,
  `password` varchar(15) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `Email`, `report_id`, `password`, `created`) VALUES
(1, 'admin', 'admin@gmail.com', 11, 'admin@123', '2021-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `box_range`
--

CREATE TABLE `box_range` (
  `box_range_id` int(4) NOT NULL,
  `box_name` varchar(15) NOT NULL,
  `description` varchar(200) NOT NULL,
  `checkout_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `f_name` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `address` varchar(4) NOT NULL,
  `adr` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `code` varchar(4) NOT NULL,
  `state` varchar(15) NOT NULL,
  `ctry` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `no` varchar(15) NOT NULL,
  `date` varchar(8) NOT NULL,
  `cvv` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`f_name`, `email`, `address`, `adr`, `city`, `code`, `state`, `ctry`, `name`, `no`, `date`, `cvv`) VALUES
('', '', '', '', '', '', '', '', '', '', '', 'cvv'),
('', '', '', '', '', '', '', '', '', '', '', 'cvv');

-- --------------------------------------------------------

--
-- Table structure for table `collection_method`
--

CREATE TABLE `collection_method` (
  `id` int(4) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `Restaurant_id` int(4) NOT NULL,
  `collection_type` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `email`, `message`) VALUES
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `address` varchar(4) NOT NULL,
  `adr` text NOT NULL,
  `city` text NOT NULL,
  `code` varchar(4) NOT NULL,
  `state` varchar(10) NOT NULL,
  `ctry` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `psw` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lastname`, `address`, `adr`, `city`, `code`, `state`, `ctry`, `email`, `psw`) VALUES
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', 'a@gmail.com', 'nhuytf'),
('', '', '', '', '', '', '', '', '', ''),
('uhu', 'jk', 'hkh', 'kjhkjh', 'jhkjhkj', 'hjk', 'jkhjkh', 'hkj', 'jgjg@gmail.com', '8868687'),
('khkj', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g@gmail.com', '78787'),
('g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'j@gmail.com', '9979798'),
('h', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y@gmail.com', '787886'),
('h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'uyt@gmail.com', '8798789'),
('hHhH', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'uhiu@gmail.com', 'uyuii'),
('h', 'h', 'h', 'h', 'hh', 'h', 'h', 'h', 'ygyg@gmail.com', 'hkhkhk');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `title` varchar(1) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(1) NOT NULL,
  `address` varchar(30) NOT NULL,
  `other_amount` varchar(5) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`title`, `fname`, `lname`, `email`, `country`, `address`, `other_amount`, `subject`) VALUES
('', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `psw`) VALUES
('j@gmail.com', '9979798'),
('a@gmail.com', 'nhuytf'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(4) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `product_id` int(4) NOT NULL,
  `restaurant_id` int(4) NOT NULL,
  `checkout_id` int(4) NOT NULL,
  `date` datetime NOT NULL,
  `order_cart_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

CREATE TABLE `order_cart` (
  `id` int(4) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `order_id` int(4) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_id` int(4) NOT NULL,
  `Total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(4) NOT NULL,
  `Name_on_Card` varchar(30) NOT NULL,
  `credit_card_no.` int(12) NOT NULL,
  `expiry_date` date NOT NULL,
  `cvv` int(3) NOT NULL,
  `checkout_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_catalogue`
--

CREATE TABLE `product_catalogue` (
  `id` int(4) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(4) NOT NULL,
  `admin_id` int(4) NOT NULL,
  `customer_id` int(4) NOT NULL,
  `restaurant_id` int(4) NOT NULL,
  `donation_id` int(4) NOT NULL,
  `payment_id` int(4) NOT NULL,
  `order_id` int(4) NOT NULL,
  `contact_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reset`
--

INSERT INTO `reset` (`email`) VALUES
('');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `b_name` varchar(15) NOT NULL,
  `b_abn` varchar(15) NOT NULL,
  `address` varchar(4) NOT NULL,
  `adr` varchar(15) NOT NULL,
  `city` text NOT NULL,
  `code` varchar(4) NOT NULL,
  `state` varchar(15) NOT NULL,
  `ctry` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `pswd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`b_name`, `b_abn`, `address`, `adr`, `city`, `code`, `state`, `ctry`, `email`, `pswd`) VALUES
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box_range`
--
ALTER TABLE `box_range`
  ADD PRIMARY KEY (`box_range_id`);

--
-- Indexes for table `collection_method`
--
ALTER TABLE `collection_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cart`
--
ALTER TABLE `order_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collection_method`
--
ALTER TABLE `collection_method`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_cart`
--
ALTER TABLE `order_cart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
