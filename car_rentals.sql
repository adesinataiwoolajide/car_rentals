-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 06:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `act_id` int(255) NOT NULL,
  `action` text NOT NULL,
  `user_details` varchar(255) NOT NULL,
  `time_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`act_id`, `action`, `user_details`, `time_added`) VALUES
(1, 'tolajide74@gmail.com', 'Added tolajide75@gmail.com Details to the User List', '2019-10-03 20:46:30'),
(2, 'tolajide74@gmail.com', 'Added samson@gmail.com Details to the User List', '2019-10-03 20:54:33'),
(3, 'tolajide74@gmail.com', 'Deleted samson@gmail.com From the User List', '2019-10-03 20:54:41'),
(4, 'Updated Email from tolajide75@gmail.com to folakemi@gmail.com', 'tolajide74@gmail.com', '2019-10-03 21:10:08'),
(5, 'Logged Out', 'tolajide74@gmail.com', '2019-10-03 21:10:16'),
(6, 'Added E73F19 Details to the User List', 'folakemi@gmail.com', '2019-10-03 21:39:05'),
(7, 'Added 422E8F Details to the User List', 'folakemi@gmail.com', '2019-10-03 21:42:38'),
(8, 'Added 766D9F Details to the User List', 'folakemi@gmail.com', '2019-10-03 21:45:35'),
(9, 'Added B742E4 Details to the User List', 'folakemi@gmail.com', '2019-10-03 21:46:16'),
(10, 'Added C7969E Details to the User List', 'folakemi@gmail.com', '2019-10-03 21:47:02'),
(11, 'Logged Out', 'folakemi@gmail.com', '2019-10-03 21:48:03'),
(12, 'Updated 422E8F Details ', 'tolajide74@gmail.com', '2019-10-03 22:06:38'),
(13, 'Updated 422E8F Details ', 'tolajide74@gmail.com', '2019-10-03 22:07:09'),
(14, 'Added C5D3F6 Details to the User List', 'tolajide74@gmail.com', '2019-10-03 22:12:22'),
(15, 'Updated C5D3F6 Details ', 'tolajide74@gmail.com', '2019-10-03 22:13:17'),
(16, 'Deleted C5D3F6 Details from the Drivers List', 'tolajide74@gmail.com', '2019-10-03 22:14:24'),
(17, 'Logged Out', 'tolajide74@gmail.com', '2019-10-03 22:14:34'),
(18, 'tolajide74@gmail.com', 'Added Lorry to the Categories List', '2019-10-03 22:15:35'),
(19, 'tolajide74@gmail.com', 'Updated Buses to the Categories List', '2019-10-03 22:16:00'),
(20, 'tolajide74@gmail.com', 'Added tolajide@gmail.com Details to the User List', '2019-10-03 22:16:50'),
(21, 'Updated Email from tolajide@gmail.com to tolajide@gmail.com', 'tolajide74@gmail.com', '2019-10-03 22:17:30'),
(22, 'tolajide74@gmail.com', 'Added Honda Accord to the Brands List', '2019-10-03 22:27:16'),
(23, 'tolajide74@gmail.com', 'Added Toyota to the Brands List', '2019-10-03 22:27:27'),
(24, 'tolajide74@gmail.com', 'Added Lexus to the Brands List', '2019-10-03 22:27:35'),
(25, 'tolajide74@gmail.com', 'Deleted Lexus from the Brands List', '2019-10-03 22:29:44'),
(26, 'tolajide74@gmail.com', 'Added Lexus to the Brands List', '2019-10-03 22:29:55'),
(27, 'tolajide74@gmail.com', 'Updated Toyota Corola Details', '2019-10-03 22:35:46'),
(28, 'Logged Out', 'tolajide74@gmail.com', '2019-10-03 22:36:00'),
(29, 'tolajide74@gmail.com', 'Added Audi to the Brands List', '2019-10-04 15:22:30'),
(30, 'tolajide74@gmail.com', 'Added Car to the Categories List', '2019-10-04 15:22:40'),
(31, 'tolajide74@gmail.com', 'Updated Bus to the Categories List', '2019-10-04 15:22:46'),
(32, 'Added end-of-discussion-4215 To The Car List', 'tolajide74@gmail.com', '2019-10-04 15:23:17'),
(33, 'Added benz-1885 To The Car List', 'tolajide74@gmail.com', '2019-10-04 15:42:27'),
(34, 'tolajide74@gmail.com', 'Added Benz to the Brands List', '2019-10-04 15:42:46'),
(35, 'Added shuffle-4507 To The Car List', 'tolajide74@gmail.com', '2019-10-04 15:43:31'),
(36, 'Deleted benz-1885 From The Car List', 'tolajide74@gmail.com', '2019-10-04 15:51:18'),
(37, 'Added benzo-3499 To The Car List', 'tolajide74@gmail.com', '2019-10-04 15:51:51'),
(38, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-04 16:17:27'),
(39, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-04 16:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(15) NOT NULL,
  `time_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`user_id`, `name`, `email`, `password`, `role`, `time_registered`) VALUES
(1, 'Adesina Taiwo Olajumoke', 'tolajide74@gmail.com', 'b63e58a251cbdb2678919dbcd79fdc519c927304', 'Admin', '2019-09-27 06:06:48'),
(10, 'Folakemi Adesina', 'folakemi@gmail.com', '184e351ed37a5ae5e6bd49e583e32563635627cd', 'Admin', '2019-10-03 21:10:08'),
(12, 'Rolade Adeola', 'tolajide@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Admin', '2019-10-03 22:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `time_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `time_registered`) VALUES
(1, 'Honda Accord', '2019-10-03 22:27:16'),
(2, 'Toyota Corola', '2019-10-03 22:35:46'),
(4, 'Lexus', '2019-10-03 22:29:55'),
(5, 'Audi', '2019-10-04 15:22:30'),
(6, 'Benz', '2019-10-04 15:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `capacity` text NOT NULL,
  `facilities` text NOT NULL,
  `description` text NOT NULL,
  `car_image` text NOT NULL,
  `status` int(1) NOT NULL,
  `color` text NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `slug`, `name`, `brand_id`, `category_id`, `capacity`, `facilities`, `description`, `car_image`, `status`, `color`, `time_added`) VALUES
(1, 'end-of-discussion-4215', 'End of Discussion', 5, 4, '4', 'AC, MAP, GPS', 'This car is awesome', 'audi-offer.png', 1, 'Black', '2019-10-04 15:23:17'),
(3, 'shuffle-4507', 'Shuffle', 4, 4, '4', 'AC, MAP, GPS, LOCATOR', 'This car is great', 'bmw-offer.png', 1, 'Light Gray', '2019-10-04 15:43:31'),
(4, 'benzo-3499', 'Lambo', 4, 3, '5', 'AC, MAP, GPS, LOCATOR, OTHERS', 'This car is something else', 'gallery-1.jpg', 1, 'Purple', '2019-10-04 16:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `time_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `time_registered`) VALUES
(1, 'Bus', '2019-10-04 15:22:46'),
(3, 'Lorry', '2019-10-03 22:15:35'),
(4, 'Car', '2019-10-04 15:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `staff_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`staff_id`, `staff_name`, `staff_email`, `staff_number`, `phone_number`, `passport`, `created_at`) VALUES
(1, 'Ajibade Samson', 'samson@gmail.com', '422E8F', '09072281200', 'avatar5.jpg', '2019-10-03 22:07:09'),
(2, 'Akinsola Sunday', 'sunday@gmail.com', '766D9F', '09087463433', 'avatar4.jpg', '2019-10-03 21:45:35'),
(3, 'Jerry hope', 'jerry@gmail.com', 'B742E4', '08163536377', 'avatar6.jpg', '2019-10-03 21:46:16'),
(4, 'Olamide Kole', 'kola@gmail.com', 'C7969E', '08262276622', 'avatar2.jpg', '2019-10-03 21:47:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
