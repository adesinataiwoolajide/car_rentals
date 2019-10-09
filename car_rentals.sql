-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 04:57 PM
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
(39, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-04 16:18:22'),
(40, 'Logged Out', 'tolajide74@gmail.com', '2019-10-04 18:11:49'),
(41, 'Added mercedez-1471 To The Car List', 'tolajide74@gmail.com', '2019-10-06 17:27:43'),
(42, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-06 17:31:26'),
(43, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-06 17:32:41'),
(44, 'Updated shuffle-4507 Details', 'tolajide74@gmail.com', '2019-10-06 17:32:57'),
(45, 'Updated end-of-discussion-4215 Details', 'tolajide74@gmail.com', '2019-10-06 17:33:11'),
(46, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-06 17:36:26'),
(47, 'Updated shuffle-4507 Details', 'tolajide74@gmail.com', '2019-10-06 17:36:55'),
(48, 'tolajide74@gmail.com', 'Added BMW to the Brands List', '2019-10-06 17:37:26'),
(49, 'tolajide74@gmail.com', 'Added Nissan to the Brands List', '2019-10-06 17:37:43'),
(50, 'Updated shuffle-4507 Details', 'tolajide74@gmail.com', '2019-10-06 17:38:09'),
(51, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-06 17:38:40'),
(52, 'Updated benzo-3499 Details', 'tolajide74@gmail.com', '2019-10-06 17:38:40'),
(53, 'Updated end-of-discussion-4215 Details', 'tolajide74@gmail.com', '2019-10-06 17:39:07'),
(54, 'Added chevo-7407 To The Car List', 'tolajide74@gmail.com', '2019-10-06 17:40:33'),
(55, 'Added floopy-6740 To The Car List', 'tolajide74@gmail.com', '2019-10-06 17:42:23'),
(56, 'tolajide74@gmail.com Successfully Registered Account on the website', 'tolajide74@gmail.com', '2019-10-08 09:07:30'),
(57, 'Logged Out', 'tolajide74@gmail.com', '2019-10-08 10:18:40'),
(58, 'Logged Out', 'tolajide74@gmail.com', '2019-10-08 11:24:00'),
(59, 'Logged Out', 'tolajide74@gmail.com', '2019-10-08 22:38:34'),
(60, 'Logged Out', 'tolajide74@gmail.com', '2019-10-08 22:40:25'),
(61, 'Logged Out', 'tolajide74@gmail.com', '2019-10-08 22:40:40'),
(62, 'tolajide75@gmail.com Successfully Registered Account on the website', 'tolajide75@gmail.com', '2019-10-08 22:41:14'),
(63, 'Logged Out', 'tolajide75@gmail.com', '2019-10-08 22:44:11');

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
(6, 'Benz', '2019-10-04 15:42:46'),
(7, 'BMW', '2019-10-06 17:37:26'),
(8, 'Nissan', '2019-10-06 17:37:43');

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
  `price` int(12) NOT NULL,
  `time_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `slug`, `name`, `brand_id`, `category_id`, `capacity`, `facilities`, `description`, `car_image`, `status`, `color`, `price`, `time_added`) VALUES
(1, 'end-of-discussion-4215', 'Audi Clip', 5, 4, '4', 'AC, MAP, GPS', 'This car is awesome', 'audi-offer.png', 1, 'Black', 20000, '2019-10-06 17:39:07'),
(3, 'shuffle-4507', 'Nissan Sallon', 8, 4, '4', 'AC, MAP, GPS, LOCATOR', 'This car is great', 'nissan-offer.png', 1, 'Light Gray', 70000, '2019-10-06 17:38:09'),
(4, 'benzo-3499', 'BMW New', 7, 4, '5', 'AC, MAP, GPS, LOCATOR, OTHERS', 'This car is something else', 'bmw-offer.png', 1, 'Purple', 10000, '2019-10-06 17:38:40'),
(5, 'mercedez-1471', 'Mercedez', 6, 4, '4', 'AC, GPS', 'This is a good car to rent', 'marcedes-offer.png', 1, 'Gray', 40000, '2019-10-06 17:27:43'),
(6, 'chevo-7407', 'Chevo', 1, 1, '5', 'AC, GPS, BLUETOOTH', 'This is a good car to rent for youe weekend', 'cars.png', 1, 'Light Gray', 30000, '2019-10-06 17:40:33'),
(7, 'floopy-6740', 'Floopy', 2, 1, '4', 'AC, GPS, BLUETOOTH', 'This is a good car to rent for your weekend', 'offer-toyota.png', 1, 'Navy', 4000, '2019-10-06 17:42:23');

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
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `paystack_reference` varchar(100) DEFAULT NULL,
  `paid_status` int(1) DEFAULT NULL,
  `order_status` int(1) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `shipping` int(2) NOT NULL,
  `delivery` int(2) NOT NULL,
  `time_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `customer_id`, `order_id`, `paystack_reference`, `paid_status`, `order_status`, `amount`, `shipping`, `delivery`, `time_created`) VALUES
(5, 'ACB98230A5', '758930B21FB925C9', '56040f5331b0416dff13', 1, 1, '34000', 0, 0, '2019-10-08 22:07:29'),
(6, 'ACB98230A5', '38395D72E40A863E', 'c9b5e9a2d1e4302072f9', 1, 1, '90000', 0, 0, '2019-10-08 22:36:40'),
(7, '4184A8652E', 'B67BC79378DF8408', 'f3689d7d1788d1f56ff4', 1, 1, '34000', 0, 0, '2019-10-08 22:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_details`
--

CREATE TABLE `customer_order_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order_details`
--

INSERT INTO `customer_order_details` (`id`, `order_id`, `slug`, `quantity`, `amount`) VALUES
(1, '758930B21FB925C9', 'floopy-6740', '1', 4000),
(2, '758930B21FB925C9', 'chevo-7407', '1', 30000),
(3, '38395D72E40A863E', 'shuffle-4507', '1', 70000),
(4, '38395D72E40A863E', 'end-of-discussion-4215', '1', 20000),
(5, 'B67BC79378DF8408', 'floopy-6740', '1', 4000),
(6, 'B67BC79378DF8408', 'chevo-7407', '1', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `registration_id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `time_addes` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`registration_id`, `full_name`, `user_name`, `password`, `reg_number`, `status`, `time_addes`) VALUES
(4, 'Adesina Taiwo Olajide', 'tolajide74@gmail.com', 'b63e58a251cbdb2678919dbcd79fdc519c927304', 'ACB98230A5', 0, '2019-10-08 09:07:30'),
(5, 'Testing', 'tolajide75@gmail.com', 'b63e58a251cbdb2678919dbcd79fdc519c927304', '4184A8652E', 0, '2019-10-08 22:41:14');

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

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `landmark` varchar(255) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`id`, `customer_id`, `phone`, `address`, `landmark`, `state`, `city`) VALUES
(4, 'ACB98230A5', '09072281209', 'Iragbiji Road Osun State Nigeria', '', 'Abia', 'Abia'),
(5, '4184A8652E', '08138139333', 'Home Address', 'Foodco Bodija', 'Bayelsa', 'Bayelsa');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_location_charge`
--

CREATE TABLE `shipping_location_charge` (
  `id` int(11) NOT NULL,
  `location` varchar(30) DEFAULT NULL,
  `charge` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_location_charge`
--

INSERT INTO `shipping_location_charge` (`id`, `location`, `charge`) VALUES
(1, 'Lagos', 10000),
(2, 'Ogun', 1500),
(3, 'Osun', 1500),
(4, 'Ondo', 1500),
(5, 'Ekiti', 1500),
(6, 'Oyo', 1000),
(7, 'Edo', 2500),
(38, 'Benue', 2500),
(39, 'Kogi', 2500),
(40, 'Kwara', 2500),
(41, 'Nasarawa', 2500),
(42, 'Niger', 2500),
(43, 'Plateau', 2500),
(44, 'Abuja', 2500),
(46, 'Anambra', 2500),
(47, 'Ebonyi', 2500),
(48, 'Enugu', 2500),
(49, 'Imo', 2500),
(50, 'Adamawa', 2500),
(51, 'Bauchi', 2500),
(52, 'Borno', 2500),
(53, 'Gombe', 2500),
(54, 'Taraba', 2500),
(55, 'Yobe', 2500),
(56, 'Akwa Ibom', 2500),
(57, 'Cross River', 2500),
(58, 'Bayelsa', 2500),
(59, 'Rivers', 2500),
(60, 'Delta', 2500),
(61, 'Jigawa', 2500),
(62, 'Kaduna', 2500),
(63, 'Kano', 2500),
(64, 'Katsina', 2500),
(65, 'Kebbi', 2500),
(66, 'Sokoto', 2500),
(67, 'Zamfara', 2500),
(71, 'Abia', 2500);

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
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_location_charge`
--
ALTER TABLE `shipping_location_charge`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_order_details`
--
ALTER TABLE `customer_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `registration_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping_location_charge`
--
ALTER TABLE `shipping_location_charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
