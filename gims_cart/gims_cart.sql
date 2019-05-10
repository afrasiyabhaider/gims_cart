-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 03:20 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gims_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(20) NOT NULL,
  `category_description` tinytext NOT NULL,
  `category_image` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL DEFAULT '0',
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `updation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`, `category_description`, `category_image`, `created_by`, `creation_date`, `updated_by`, `updation_date`) VALUES
(1, 'Category 01', 'This is category 01 description', 'cat_image_01.png', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(2, 'Category 02', 'This is category 02 description', 'cat_image_02.png', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(3, 'Category 03', 'This is category 03 description', 'cat_image_03.png', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(4, 'Category 04', 'This is category 04 description', 'cat_image_04.png', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(5, 'Category 05', 'This is category 05 description', 'cat_image_05.png', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(6, 'Category 06', 'This is category 06 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(7, 'Category 07', 'This is category 07 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(8, 'Category 08', 'This is category 08 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(9, 'Category 09', 'This is category 09 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(10, 'Category 010', 'This is category 010 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(11, 'Category 011', 'This is category 011 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(12, 'Category 012', 'This is category 012 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(13, 'Category 013', 'This is category 013 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(14, 'Category 014', 'This is category 014 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(15, 'Category 015', 'This is category 015 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(16, 'Category 016', 'This is category 016 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(17, 'Category 017', 'This is category 017 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(18, 'Category 018', 'This is category 018 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(19, 'Category 019', 'This is category 019 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(20, 'Category 020', 'This is category 020 description', '', 1, '2017-12-27 09:57:00', 0, '2017-12-27 09:57:00'),
(21, 'Category 01', 'This is category 01 description', '', 1, '2018-01-03 10:29:28', 0, '2018-01-03 10:29:28'),
(22, 'Category 02', 'This is category 02 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(23, 'Category 03', 'This is category 03 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(24, 'Category 04', 'This is category 04 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(25, 'Category 05', 'This is category 05 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(26, 'Category 06', 'This is category 06 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(27, 'Category 07', 'This is category 07 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(28, 'Category 08', 'This is category 08 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(29, 'Category 09', 'This is category 09 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(30, 'Category 010', 'This is category 010 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(31, 'Category 011', 'This is category 011 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(32, 'Category 012', 'This is category 012 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(33, 'Category 013', 'This is category 013 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(34, 'Category 014', 'This is category 014 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(35, 'Category 015', 'This is category 015 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(36, 'Category 016', 'This is category 016 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(37, 'Category 017', 'This is category 017 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(38, 'Category 018', 'This is category 018 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(39, 'Category 019', 'This is category 019 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29'),
(40, 'Category 020', 'This is category 020 description', '', 1, '2018-01-03 10:29:29', 0, '2018-01-03 10:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_price` float NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_price`, `product_id`, `user_id`, `order_date`) VALUES
(1, 5, 4, 1, '2018-01-22 11:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(20) NOT NULL,
  `product_description` tinytext NOT NULL,
  `product_image` varchar(20) NOT NULL,
  `product_quantity` int(3) NOT NULL DEFAULT '0',
  `product_price` float NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `creation_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `updation_date` datetime NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_image`, `product_quantity`, `product_price`, `created_by`, `creation_date`, `updated_by`, `updation_date`, `category_id`) VALUES
(1, 'Product 01', 'This is product 01 description', 'pro_image_01.png', 3, 20, 1, '2018-01-11 00:00:00', 1, '2018-01-11 06:00:00', 7),
(2, 'Product 02', 'This is product 02 description', 'pro_image_02.png', 3, 22.8, 1, '2018-01-11 00:00:00', 1, '2018-01-11 06:00:00', 4),
(3, 'Product 03', 'This is product 03 description', 'pro_image_03.png', 1, 10.78, 1, '2018-01-11 00:00:00', 1, '2018-01-11 06:00:00', 4),
(4, 'Product 04', 'This is product 04 description', 'pro_image_04.png', 4, 5, 1, '2018-01-11 00:00:00', 1, '2018-01-11 06:00:00', 1),
(5, 'Product 05', 'This is product 05 description', 'pro_image_05.png', 9, 4, 1, '2018-01-11 00:00:00', 1, '2018-01-11 06:00:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(11) NOT NULL,
  `product_image_name` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(20) NOT NULL,
  `user_lastname` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`) VALUES
(1, 'Imran', 'Rashid', 'imran@gmail.com', 'mani123'),
(2, 'Kamran', 'Saleem', 'kamran@gmail.com', 'kamikami');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
