-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2021 at 12:50 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoomot_fastbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_confirmation`
--

CREATE TABLE `order_confirmation` (
  `id` int(10) NOT NULL,
  `s_full_name` varchar(25) NOT NULL,
  `s_email` varchar(25) NOT NULL,
  `s_phone_number` varchar(25) NOT NULL,
  `s_address` varchar(25) NOT NULL,
  `r_full_name` varchar(25) NOT NULL,
  `r_email` varchar(25) NOT NULL,
  `r_phone_number` varchar(25) NOT NULL,
  `r_address` varchar(25) NOT NULL,
  `product_weight` varchar(25) NOT NULL,
  `product_selling_price` varchar(25) NOT NULL,
  `pickup_point` varchar(25) NOT NULL,
  `delivery_point` varchar(25) NOT NULL,
  `payment_method` varchar(25) NOT NULL,
  `total_cost` varchar(25) NOT NULL,
  `oder_id` varchar(25) NOT NULL,
  `account_holder_email` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_confirmation`
--

INSERT INTO `order_confirmation` (`id`, `s_full_name`, `s_email`, `s_phone_number`, `s_address`, `r_full_name`, `r_email`, `r_phone_number`, `r_address`, `product_weight`, `product_selling_price`, `pickup_point`, `delivery_point`, `payment_method`, `total_cost`, `oder_id`, `account_holder_email`, `date`) VALUES
(1, 'Elahe', 'thoufiqelahi6@gmail.com', '+8801783492967', 'Dewanhat', 'Elahe', 'thoufiqelahi6@gmail.com', '+8801783492967', 'Dewanhat', '2', '4504252', 'Dhaka', 'Noakhali', 'Chash On Delivery', '90125.04', '9b916b', '', 'Mon 29-11-2021'),
(2, 'Elahe', 'thoufiqelahi6@gmail.com', '+8801783492967', 'Dewanhat', 'Elahe', 'thoufiqelahi6@gmail.com', '+8801783492967', 'Dewanhat', '3', '54020510', 'Faridpur', 'Shariatpur', 'Chash On Delivery', '1080460.2', 'box76febf', 'thoufiqelahi6@gmail.com', 'Mon 29-11-2021'),
(3, 'Sumaiya', 'sumaiya@gmail.com', '01700000000', 'Jilli Para', 'Wasika', 'wasika@gmail.com', '01800000000', 'Jaille Para', '9', '250', 'Dhaka', 'Faridpur', 'bKash', '115', 'box1a74e5', 'sumaiya@gmail.com', 'Wed 08-12-2021');

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `id` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `order_id` varchar(25) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tracking`
--

INSERT INTO `order_tracking` (`id`, `email`, `order_id`, `date`) VALUES
(1, 'dipjoy@gmail.com', 'box15102345', 'Mon 29-11-2021'),
(3, 'thoufiqelahi6@gmail.com', 'box542310', 'Mon 29-11-2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `phone`, `password`, `date`) VALUES
(1, 'dipjoysarker', 'dipjoy@gmail.com', '052425002', '123456', ''),
(2, 'Elahe', 'thoufiqelahi6@gmail.com', '+880178349296', '123456', 'Mon 29-11-2021'),
(3, 'Towfique Elahe', 'towfiqueelahe6@gmail.com', '', 'loveyoumaa', 'Mon 06-12-2021'),
(4, 'Engisoft Engineering', 'engisoftengineering.4d@gm', '+97143209277', '1234', 'Tue 07-12-2021'),
(6, 'Sumaiya Akter', '183002912@eastdelta.edu.b', '', '123456', 'Wed 08-12-2021'),
(7, 'Sumaiya Akter', 'sumaiya@gmail.com', '', '123456', 'Wed 08-12-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_confirmation`
--
ALTER TABLE `order_confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order id` (`order_id`),
  ADD UNIQUE KEY `order id_2` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_confirmation`
--
ALTER TABLE `order_confirmation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
