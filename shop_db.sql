-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 03:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `pro_des` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `pro_name`, `img_path`, `pro_des`, `client_id`, `qty`, `unit_price`) VALUES
(22, 5, 'Cartoon Astronaut T-Shirts', 'img/products/f7.jpg', 'The T-Shirt is Made in Sri Lanka', 1, 5, 15),
(28, 5, 'Cartoon Astronaut T-Shirts', 'img/products/n7.jpg', 'The T-Shirt is Made in Sri Lanka', 1, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `lname`, `email`, `password`, `mobile`, `status`, `created_at`) VALUES
(1, 'dilan', 'sachinthadd', 'dilan@gmail.com', '12345', '07173293479', 1, '2023-09-10 12:16:12'),
(2, 'nimal ggg', 'perera', 'nimal@gmail.com', '12345', '0717329326', 1, '2023-09-10 14:14:16'),
(3, 'navindu', 'praba', 'navindu@gmail.com', '12345', '0717329326', 1, '2023-09-11 17:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_sub_name` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `pro_name`, `pro_sub_name`, `des`, `img_path`, `rating`, `price`, `created_at`, `status`) VALUES
(1, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f1.jpg', 5, 15, '2023-09-10 19:16:31', 1),
(2, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f2.jpg', 4, 15, '2023-09-10 19:16:31', 1),
(3, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f3.jpg', 4, 15, '2023-09-10 19:16:31', 1),
(4, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f4.jpg', 4, 15, '2023-09-10 19:16:31', 1),
(5, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f5.jpg', 4, 15, '2023-09-10 19:16:31', 1),
(6, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f6.jpg', 4, 15, '2023-09-10 19:16:31', 1),
(7, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f7.jpg', 4, 15, '2023-09-10 19:16:31', 1),
(8, 'featured', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/f8.jpg', 4, 15, '2023-09-10 19:16:31', 1),
(9, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n1.jpg', 5, 18, '2023-09-10 19:16:31', 1),
(10, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n2.jpg', 5, 18, '2023-09-10 19:16:31', 1),
(11, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n3.jpg', 5, 18, '2023-09-10 19:16:31', 1),
(12, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n4.jpg', 5, 18, '2023-09-10 19:16:31', 1),
(13, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n5.jpg', 5, 18, '2023-09-10 19:16:31', 1),
(14, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n6.jpg', 5, 18, '2023-09-10 19:16:31', 1),
(15, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n7.jpg', 5, 18, '2023-09-10 19:16:31', 1),
(16, 'new_arrival', 'Cartoon Astronaut T-Shirts', 'Adidas', 'The T-Shirt is Made in Sri Lanka', 'img/products/n8.jpg', 5, 18, '2023-09-10 19:16:31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
