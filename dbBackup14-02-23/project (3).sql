-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 06:29 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `customer_id` int(11) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `housename` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `login_id` int(11) NOT NULL,
  `locality` varchar(44) NOT NULL,
  `postoffice` varchar(44) NOT NULL,
  `state` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bills_paid`
--

CREATE TABLE `bills_paid` (
  `payment_id` int(20) NOT NULL,
  `bill_id` int(20) NOT NULL,
  `booking_id` int(20) NOT NULL,
  `service_type` varchar(30) NOT NULL,
  `transaction_id` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills_paid`
--

INSERT INTO `bills_paid` (`payment_id`, `bill_id`, `booking_id`, `service_type`, `transaction_id`, `amount`) VALUES
(3, 6, 35, 'Service Center', '8e4d48f4df478a61d5b8bde089bb0f', 2000),
(4, 9, 38, 'Service Center', '326145ce347ed080086fa48e0461ad', 300),
(5, 9, 38, 'Service Center', '75a06a2540f6f3663672ac18687d02', 300),
(6, 9, 38, 'Service Center', 'be79529e5141bb5e32249b5ae0e06a', 300),
(7, 9, 38, 'Service Center', '6318f7c9f6fe72b99f20f4aac1789c', 300);

-- --------------------------------------------------------

--
-- Table structure for table `bill_services`
--

CREATE TABLE `bill_services` (
  `bill_id` int(20) NOT NULL,
  `outlet` varchar(20) NOT NULL,
  `booking_id` int(50) NOT NULL,
  `bike_number` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type_of_bike` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `type_of_services` varchar(200) NOT NULL,
  `total` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_services`
--

INSERT INTO `bill_services` (`bill_id`, `outlet`, `booking_id`, `bike_number`, `phone`, `type_of_bike`, `service`, `type_of_services`, `total`, `date`) VALUES
(6, 'bikehub', 35, ' crux', ' 7890765489', ' ORDINORY BIKE', 'SERVICE CENTER OUTLET', ' ORDINORY SERVICES', '2000', '2023-04-12 06:24:41'),
(7, 'bikehub', 29, ' bmw', ' 9656784386', ' SUPER BIKE', 'DOOR STEP SERVICES', ' TOURING SET UP', '777', '2023-04-12 13:28:37'),
(8, 'bikehub', 35, ' crux', ' 7890765489', ' ORDINORY BIKE', 'SERVICE CENTER OUTLET', ' ORDINORY SERVICES', '2', '2023-04-12 05:13:01'),
(9, 'bikehub', 38, ' ninja 1000 rr', ' 9089090911', ' SUPER BIKE', 'SERVICE CENTER OUTLET', ' MODIFICATION', '300', '2023-04-12 13:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(50) NOT NULL,
  `login_id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `outlet` varchar(50) NOT NULL,
  `type_of_bike` varchar(50) NOT NULL,
  `bike_name` varchar(50) NOT NULL,
  `bike_number` varchar(50) NOT NULL,
  `bike_cc` int(50) NOT NULL,
  `type_of_service` varchar(50) NOT NULL,
  `check_in` varchar(50) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `rc` varchar(100) NOT NULL,
  `longitude` varchar(300) NOT NULL,
  `latitude` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `login_id`, `title`, `name`, `email`, `phone`, `outlet`, `type_of_bike`, `bike_name`, `bike_number`, `bike_cc`, `type_of_service`, `check_in`, `time`, `rc`, `longitude`, `latitude`, `status`) VALUES
(29, 262, 'Miss.', 'aswathi', 'aswathi@gmail.com', '9656784386', 'kanjirappally', 'SUPER BIKE', 'bmw', 'kl 05 e 331', 1000, 'TOURING SET UP', '2023-03-02', '2023-04-04 09:11:14.109734', 'uploads/1677684390.jpg', '', '', '2'),
(30, 261, 'Mr.', 'ram', 'ram@gmail.com', '8909876567', 'kottyam', 'ORDINORY BIKE', 'splinder', 'kl 04 a 456', 100, 'ENGINE SERVICE', '2023-03-03', '2023-04-01 07:22:09.500603', 'uploads/1677684654.jpg', '', '', '2'),
(31, 260, 'Prof.', 'aby', 'aby@gmail.com', '9223467080', 'pathanamthitta', 'TOURING BIKE', 'himalayan', 'kl 03 g 77', 400, 'TOURING SET UP', '2023-03-08', '2023-04-04 06:33:17.954666', 'uploads/1677684809.jpg', '', '', '2'),
(34, 261, 'Mr.', 'sagar', 'sagar@gmail.com', '898856701', 'kottyam', 'OFF-ROAD BIKE', 'african twin', 'kl 07 e 003', 1000, 'OFF-ROAD SET UP', '2023-03-11', '2023-04-01 07:34:45.714227', 'uploads/1678343838.jpg', '', '', '1'),
(35, 262, 'Mr.', 'shino', 'shino@gmail.com', '7890765489', 'kanjirappally', 'ORDINORY BIKE', 'crux', 'kl 09 g 97', 110, 'ORDINORY SERVICES', '2023-03-16', '2023-04-04 07:15:01.516484', 'uploads/1678356980.jpg', '', '', '2'),
(38, 262, 'Miss.', 'shaa', 'sha@gmail.com', '9089090911', 'kanjirappally', 'SUPER BIKE', 'ninja 1000 rr', 'kl 05 V 0077', 1000, 'MODIFICATION', '2023-03-17', '2023-04-12 06:30:03.127193', 'uploads/1678361129.jpg', '', '', '2'),
(40, 260, 'Dr.', 'sabu', 'sabu@gmail.com', '9994567899', 'pathanamthitta', 'TOURING BIKE', 'ktm adv', 'kl 03 g 999', 350, 'TOURING SET UP', '2023-03-24', '2023-03-31 09:46:45.511484', 'uploads/1678426860.jpg', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `doorstep_booking`
--

CREATE TABLE `doorstep_booking` (
  `d_id` int(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `outlet` varchar(50) NOT NULL,
  `type_of_bike` varchar(50) NOT NULL,
  `bike_name` varchar(50) NOT NULL,
  `bike_number` varchar(50) NOT NULL,
  `bike_cc` varchar(20) NOT NULL,
  `type_of_service` varchar(50) NOT NULL,
  `check_in` varchar(50) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `rc` varchar(50) NOT NULL,
  `immidate` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doorstep_booking`
--

INSERT INTO `doorstep_booking` (`d_id`, `title`, `name`, `address`, `location`, `email`, `phone`, `outlet`, `type_of_bike`, `bike_name`, `bike_number`, `bike_cc`, `type_of_service`, `check_in`, `time`, `rc`, `immidate`, `status`) VALUES
(5, 'Dr.', 'rahul', 'kottyam skyline appartment ', 'kottyam near sree temple', 'rahul@gmail.com', '9808897067', 'kottyam', 'ORDINORY BIKE', 'bullect', 'kl 05 e 331', '350', 'NOT STARTING', '2023-03-02', '2023-03-09 06:05:18.891568', 'uploads/1677685378.jpg', 'yes', '0'),
(6, 'Mrs.', 'jyothi', 'heaven po kotyam', 'near kotyam grammapanjyath', 'jy@gmail.com', '8790908121', 'kottyam', 'ORDINORY BIKE', 'himalayan', 'kl 05 w 001', '400', 'NOT STARTING', '2023-03-02', '2023-03-09 06:05:31.347747', 'uploads/1677685502.jpg', 'yes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jobers`
--

CREATE TABLE `jobers` (
  `jobers_id` int(20) NOT NULL,
  `jober_name` varchar(50) NOT NULL,
  `jober_address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jober_phone` int(20) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `cv` varchar(250) NOT NULL,
  `status` int(20) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobers`
--

INSERT INTO `jobers` (`jobers_id`, `jober_name`, `jober_address`, `email`, `jober_phone`, `birth`, `experience`, `education`, `date`, `cv`, `status`, `job_id`) VALUES
(10, 'shaa', 'address', 'admin@gmail.com', 1234567890, '15-11-2002', 'yes', 'mechanical enginnering', '2023-04-01 05:10:56.529675', 'uploads/1680064856.pdf', 1, 2),
(11, 'gfdhthtfhb', 'address', 'jose@gmail.com', 1234567891, '15-11-2002', 'yes', 'tenth', '2023-04-01 06:18:36.495799', 'uploads/1680329916.pdf', 0, 1),
(12, 'gfdhthtfhb', 'address', 'jose@gmail.com', 1234567891, '15-11-2002', 'yes', 'tenth', '2023-04-01 06:24:16.025364', 'uploads/1680330256.pdf', 0, 1),
(13, 'dffdgd', 'address', 'jose@gmail.com', 1234567890, '20-04-2000', 'no', 'tenth', '2023-04-01 06:24:48.381418', 'uploads/1680330288.pdf', 0, 1),
(14, 'dffdgd', 'address', 'jose@gmail.com', 1234567890, '20-04-2000', 'no', 'tenth', '2023-04-01 06:28:00.720319', 'uploads/1680330481.pdf', 0, 1),
(15, 'abin', 'address', 'admin@gmail.com', 2147483647, '15-11-2002', 'no', 'mechanical enginnering', '2023-04-01 06:28:25.149616', 'uploads/1680330505.pdf', 0, 1),
(16, 'abin', 'address', 'admin@gmail.com', 2147483647, '15-11-2002', 'no', 'mechanical enginnering', '2023-04-01 06:35:14.193716', 'uploads/1680330914.pdf', 0, 1),
(17, 'gggh', 'address', 'god@gmail.com', 2147483647, '20-04-2000', 'yes', 'mechanical enginnering', '2023-04-01 06:35:58.789622', 'uploads/1680330959.pdf', 0, 1),
(18, 'abin', 'address', 'admin@gmail.com', 1234567890, '15-11-2002', 'no', 'mechanical enginnering', '2023-04-03 08:53:58.563771', 'uploads/1680512039.pdf', 0, 1),
(19, 'abin', 'address', 'omkv12345@gmail.com', 2147483647, '20-04-2000', 'yes', 'mechanical enginnering', '2023-04-03 09:16:45.930497', 'uploads/1680513406.pdf', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `customer_name` varchar(250) DEFAULT NULL,
  `customer_email` varchar(250) DEFAULT NULL,
  `customer_phone` varchar(50) DEFAULT NULL,
  `customer_address` varchar(250) DEFAULT NULL,
  `payment_mode` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = Cash on Delivery',
  `total_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `order_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_date`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `payment_mode`, `total_amount`, `order_status`) VALUES
(5, 1225, '2023-03-05 07:03:44', 'abyjose', 'jose@gmail.com', '1234567899', 'qwertyuiop', 1, '3366.00', 0),
(8, 1252, '2023-03-07 08:18:28', 'god', 'god@gmail.com', '9876567577', 'god at heaven', 1, '1850.00', 0),
(9, 1248, '2023-03-13 09:54:29', 'shino', 'shino@gmail.com', '9854372371', 'karnadaka', 1, '460.00', 0),
(10, 1248, '2023-03-13 10:41:35', 'shino', 'shino@gmail.com', '9854372371', 'karnadaka', 1, '350.00', 0),
(15, 1252, '2023-03-13 17:17:24', 'god', 'god@gmail.com', '9876567577', 'god at heaven', 1, '2294.00', 0),
(16, 1248, '2023-03-16 08:32:37', 'shino', 'shino@gmail.com', '9854372371', 'karnadaka', 1, '944.00', 0),
(17, 1254, '2023-03-29 12:54:05', 'geya', 'geya@gmail.com', '9207459933', 'mavelimattam h', 1, '460.00', 0),
(18, 1248, '2023-04-01 12:40:29', 'shino', 'shino@gmail.com', '9854372371', 'karnadaka', 1, '444.00', 0),
(19, 1254, '2023-04-12 13:02:17', 'geya', 'geya@gmail.com', '9207459933', 'mavelimattam h', 1, '444.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` decimal(10,2) NOT NULL DEFAULT 0.00,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total_price`) VALUES
(14, 5, 1158, '1.00', '350.00', '350.00'),
(17, 8, 1159, '1.00', '500.00', '500.00'),
(18, 8, 1162, '1.00', '350.00', '350.00'),
(20, 9, 1161, '1.00', '460.00', '460.00'),
(21, 10, 1162, '1.00', '350.00', '350.00'),
(23, 15, 1159, '1.00', '500.00', '500.00'),
(24, 15, 1162, '1.00', '350.00', '350.00'),
(26, 15, 1155, '1.00', '444.00', '444.00'),
(27, 16, 1159, '1.00', '500.00', '500.00'),
(28, 16, 1155, '1.00', '444.00', '444.00'),
(29, 17, 1161, '1.00', '460.00', '460.00'),
(30, 18, 1155, '1.00', '444.00', '444.00'),
(31, 19, 1155, '1.00', '444.00', '444.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `p_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `cart_id` int(20) NOT NULL,
  `accessories_id` int(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `is_checked_out` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`cart_id`, `accessories_id`, `user_id`, `quantity`, `price`, `is_checked_out`) VALUES
(61, 1159, 'god@gmail.com', 1, 500, 1),
(62, 1162, 'god@gmail.com', 1, 350, 1),
(63, 1160, 'god@gmail.com', 1, 1000, 1),
(66, 1155, 'god@gmail.com', 1, 444, 1),
(81, 1155, 'shino@gmail.com', 1, 444, 1),
(82, 1156, 'shino@gmail.com', 1, 350, 0),
(88, 1155, 'geya@gmail.com', 1, 444, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbloutlet`
--

CREATE TABLE `tbloutlet` (
  `outlet_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city_location` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbloutlet`
--

INSERT INTO `tbloutlet` (`outlet_id`, `name`, `address`, `city_location`, `phone`, `image`, `email`, `password`) VALUES
(13, 'bikehub', 'kanjirappally', 'near private bus stand ', '9076898070', '../uploads/', 'bikehub@gmail.com', 'c234166ffe669c5f8d0966e1c262f1d7'),
(14, 'bikers', 'kottyam ', 'old harbor', '8987657887', '../uploads/', 'bikers@gmail.com', '2a09790efaff5dd082b9b0c0d5ed40bd'),
(15, 'bikeworld', 'pathanamthitta ', 'near muncipal-cooperation', '9876578900', '../uploads/', 'bikeworld@gmail.com', 'ade9dd3688766459f288aab82a0e5fb7'),
(16, 'riders', 'ernakulam', 'near private bus stand ', '9123009879', '../uploads/1.jpeg', 'riders@gmail.com', '9b420bdde119988cb2c2bcb3cb8b08db');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_registration`
--

CREATE TABLE `tbluser_registration` (
  `registration_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser_registration`
--

INSERT INTO `tbluser_registration` (`registration_id`, `name`, `gender`, `phone`, `address`, `email`, `password`, `role`, `status`) VALUES
(1225, 'abyjose', 'male', '9095466783', 'vadashari (H)', 'jose@gmail.com', 'db0aaca49f19e0a5856169a727c5e480', 'customer', 0),
(1230, 'admin', 'male', '9112367904', 'admin', 'admin@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin', 1),
(1248, 'shino', 'male', '9854372371', 'karnadaka', 'shino@gmail.com', '8899525b8f602633d780411d3ec97be2', 'customer', 0),
(1252, 'god', 'male', '9876567577', 'god at heaven', 'god@gmail.com', 'd6300ccbe743fcc2ee43c5c3613fd743', 'customer', 0),
(1254, 'geya', 'female', '9207459933', 'mavelimattam h', 'geya@gmail.com', '45968aca330161d0a61c9f647cc4d887', 'customer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accessories`
--

CREATE TABLE `tbl_accessories` (
  `accessories_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` varchar(50) NOT NULL,
  `specification` varchar(250) NOT NULL,
  `company` varchar(100) NOT NULL,
  `second_id` int(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_accessories`
--

INSERT INTO `tbl_accessories` (`accessories_id`, `category_id`, `name`, `size`, `description`, `price`, `specification`, `company`, `second_id`, `color`, `date`, `quantity`, `year`, `month`, `image`) VALUES
(1155, 3, ' Helmet', 'L', 'Strong', '444', 'OFF ROAD Motorsports Helmet\r\nSport Type- Off Road Motorsports\r\nWashable Interior\r\nStraps - Yes\r\nAdjustments - Rear Mounted, Traction Plates on,\r\nSides for Goggle Strap Retention\r\n', 'Chatanthara', 8, 'black', '2023/02/17', '1', '2022', 'July', '12.jpg'),
(1156, 1, ' Oil', '1 liter', 'Milage', '350', 'Full-Synthetic Engine Oil For Bikes\r\nSuitable For: 4 Stroke Engine\r\nVehicle Model Name - Universal For Bike\r\nPerformance Levels - High speed', 'Mundakayam', 1, 'gold\r\n', '2023/02/17', '7', '2023', 'April', '13.jpg'),
(1159, 1, ' Engine oil', '1 liter', 'hard', '500', 'High Performance Engine Oil For Bike\r\nSuitable For: 4 Stroke Engine\r\nViscosity Index - 20W-40\r\nPerformance Levels - High speed, Premium 4-Stroke Motorcycle Oil', 'india', 1, 'black', '2023/03/06', '0', '2023', 'January', '162.jfif'),
(1160, 2, ' headlight', 'medium', 'round', '1000', 'Light Bulb Included- LED Light\r\nVehicle Model Name - bikes with round head\r\nHigh Beam, Low Beam\r\nHousing Color: Black\r\n', 'karnadaka po', 3, 'black', '2023/03/07', '8', '2023', 'april', '107.jfif'),
(1161, 2, ' fog light', 'large', 'high beem', '460', 'fog light Shape - Square\r\nHigh Beam\r\nInstallation Position: Right, Center, Left\r\nLight Bulb Included & LED Light\r\nHousing Color: Black\r\nVehicle Brand - Universal For Bike, Universal For Car\r\nLight Color - White\r\nPower Consumption- 96 W', 'tamil nadu , kottat village', 4, 'black', '2023/03/07', '2', '2023', 'july', '101.jfif'),
(1162, 2, ' fog light for bike', 'medium', 'round', '350', 'Fog light Shape - Round\r\nLight Bulb Included & LED Light\r\nInstallation Position: Left, Right\r\nSales Package - 2 pcs fog lamps\r\nVehicle Brand - Universal For Bike, Universal For Car\r\nFinish - glass\r\nPower Consumption - 18 W', 'kozhikode ', 4, 'black', '2023/03/07', '10', '2023', 'may', '100.jfif'),
(1163, 3, ' Jacket for girls', 'XL', 'black', '5000', 'Riding Protective Jacket\r\nFor Men and Women\r\n2 Waterproof Pockets, Double Stitch for Durability \r\nAdjusters at Sleeve and Waist for a Snug Fit.', 'delhi po delhi', 7, 'black', '2023/03/14', '18', '2023', 'January', '145.jfif'),
(1164, 1, ' ii', 'medium', 'i', '-67', 'Light Bulb Included- LED Light\r\nVehicle Model Name - bikes with round head\r\nHigh Beam, Low Beam\r\nHousing Color: Black\r\n', ',kkk', 1, 'red', '2023/03/16', '9', '2023', 'January', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(20) NOT NULL,
  `usertype_id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Oil'),
(2, 'Basics'),
(3, 'Wearables'),
(4, 'engine');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `color_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `color_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`color_id`, `category_id`, `color_name`) VALUES
(1, 1, 'gold\r\n'),
(2, 1, 'red'),
(3, 2, 'black'),
(4, 2, 'silver'),
(5, 2, 'white'),
(6, 3, 'black'),
(7, 3, 'white'),
(8, 3, 'gray'),
(9, 3, 'brown'),
(10, 3, 'light blue'),
(11, 3, 'black & white'),
(12, 3, 'mixed of black, red, yellow'),
(13, 3, 'graphics red, blue, black');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(18, 'biffin', 'b@gmail.com', '9099887760', 'good'),
(19, 'abin', 'abc@gmail.com', '9759793479', 'excellent');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'customer',
  `verify_token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email`, `password`, `role`, `verify_token`) VALUES
(220, 'jose@gmail.com', 'e11170b8cbd2d74102651cb967fa28e5', 'customer', '312e56bbef3d6d244d21a8321ae68fd2'),
(225, 'admin@gmail.com', '698d51a19d8a121ce581499d7b701668', 'admin', '698d51a19d8a121ce581499d7b701668'),
(256, 'bikehub@gmail.com', 'c234166ffe669c5f8d0966e1c262f1d7', 'shop', 'c234166ffe669c5f8d0966e1c262f1d7'),
(257, 'bikers@gmail.com', '2a09790efaff5dd082b9b0c0d5ed40bd', 'shop', '2a09790efaff5dd082b9b0c0d5ed40bd'),
(258, 'bikeworld@gmail.com', 'ade9dd3688766459f288aab82a0e5fb7', 'shop', 'ade9dd3688766459f288aab82a0e5fb7'),
(259, 'riders@gmail.com', '9b420bdde119988cb2c2bcb3cb8b08db', 'shop', '9b420bdde119988cb2c2bcb3cb8b08db'),
(260, 'god@gmail.com', 'd6300ccbe743fcc2ee43c5c3613fd743', 'customer', 'd6300ccbe743fcc2ee43c5c3613fd743'),
(261, 'shino@gmail.com', '8899525b8f602633d780411d3ec97be2', 'customer', '8899525b8f602633d780411d3ec97be2'),
(262, 'geya@gmail.com', '45968aca330161d0a61c9f647cc4d887', 'customer', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month`
--

CREATE TABLE `tbl_month` (
  `month_id` int(20) NOT NULL,
  `month` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_month`
--

INSERT INTO `tbl_month` (`month_id`, `month`) VALUES
(1, 'january'),
(2, 'february'),
(3, 'march'),
(4, 'april'),
(5, 'may'),
(6, 'june'),
(7, 'july'),
(8, 'august'),
(9, 'september'),
(10, 'october'),
(11, 'november'),
(12, 'december');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `accessories_id` int(20) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `payment type` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postjobs`
--

CREATE TABLE `tbl_postjobs` (
  `job_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `jobtype` varchar(20) NOT NULL,
  `recruit_status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_postjobs`
--

INSERT INTO `tbl_postjobs` (`job_id`, `name`, `address`, `location`, `phone`, `salary`, `jobtype`, `recruit_status`) VALUES
(1, ' mechanic worker', 'purickhal honda kanjirappaly', 'kanjirappally', '9657904320', '20000 - 25000', 'full time', 0),
(2, ' consultent', 'kottyam po kottyam', ' near private bus stand', '9677789011', '12000 - 20000', 'part time', 0),
(4, ' mechanic worker', 'kanjirappally po kanjirappally', 'Near mosque', '9752579864', '12000 - 20000', 'part time', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report_type`
--

CREATE TABLE `tbl_report_type` (
  `report_types_id` int(20) NOT NULL,
  `types` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_report_type`
--

INSERT INTO `tbl_report_type` (`report_types_id`, `types`) VALUES
(1, 'Accessories'),
(2, 'Booking'),
(3, 'Door step booking'),
(4, 'Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_second`
--

CREATE TABLE `tbl_second` (
  `second_id` int(11) NOT NULL,
  `second_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_second`
--

INSERT INTO `tbl_second` (`second_id`, `second_name`, `category_id`) VALUES
(1, 'Engine Oil', 1),
(2, 'Break Fluid', 1),
(3, 'Headlight', 2),
(4, 'Fog light', 2),
(5, 'Handlebar', 2),
(6, 'Horn', 2),
(7, 'Jacket', 3),
(8, 'Helmet', 3),
(9, 'Gloves', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `size_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `category_id`, `size_name`) VALUES
(1, 1, '1 liter'),
(2, 1, '900ml'),
(3, 1, '250ml'),
(4, 1, '1.5 liter'),
(5, 2, 'large'),
(6, 2, 'medium'),
(7, 3, 'M'),
(8, 3, 'L'),
(9, 3, 'XL'),
(10, 3, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slots`
--

CREATE TABLE `tbl_slots` (
  `slot_id` int(11) NOT NULL,
  `outlet_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `slot_num` int(20) NOT NULL,
  `slot_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slots`
--

INSERT INTO `tbl_slots` (`slot_id`, `outlet_id`, `date`, `slot_num`, `slot_status`) VALUES
(1, 13, '2023-04-11', 3, 1),
(2, 13, '2023-04-12', 3, 2),
(8, 14, '2023-04-11', 3, 1),
(9, 13, '2023-04-12', 1, 1),
(10, 13, '2023-04-14', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spec`
--

CREATE TABLE `tbl_spec` (
  `spec_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `second_id` int(20) NOT NULL,
  `specifications` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_spec`
--

INSERT INTO `tbl_spec` (`spec_id`, `category_id`, `second_id`, `specifications`) VALUES
(1, 1, 1, 'Full-Synthetic Engine Oil For Bikes\r\nSuitable For: 4 Stroke Engine\r\nVehicle Model Name - Universal For Bike\r\nPerformance Levels - High speed'),
(2, 1, 1, 'High Performance Engine Oil For Bike\r\nSuitable For: 4 Stroke Engine\r\nViscosity Index - 20W-40\r\nPerformance Levels - High speed, Premium 4-Stroke Motorcycle Oil'),
(3, 1, 2, 'Brake Fluid\r\nItem Weight - 299 Grams\r\nRecommended Uses For Product - Cars, Trucks, Bike lube, Cables'),
(4, 2, 3, 'Light Bulb Included- LED Light\r\nVehicle Model Name - bikes with round head\r\nHigh Beam, Low Beam\r\nHousing Color: Black\r\n'),
(5, 2, 3, 'Light Bulb Included & LED Light\r\nVehicle Model Name - bike with box type head\r\nSplendor, Splendor Plus, Splendor Pro etc..'),
(6, 2, 4, 'Fog light Shape - Round\r\nLight Bulb Included & LED Light\r\nInstallation Position: Left, Right\r\nSales Package - 2 pcs fog lamps\r\nVehicle Brand - Universal For Bike, Universal For Car\r\nFinish - glass\r\nPower Consumption - 18 W'),
(7, 2, 4, 'fog light Shape - Square\r\nHigh Beam\r\nInstallation Position: Right, Center, Left\r\nLight Bulb Included & LED Light\r\nHousing Color: Black\r\nVehicle Brand - Universal For Bike, Universal For Car\r\nLight Color - White\r\nPower Consumption- 96 W'),
(8, 2, 5, 'Handle Bar with Top Bar Customized\r\nVehicle Brand: wide Console Handle Bar\r\nMaterial: Iron\r\nColor: Black'),
(9, 2, 5, 'Handle Bar without Top Bar Standard\r\nVehicle Brand: wide Console Handle Bar\r\nSuitable For: Bike\r\nMaterial: Cast Iron\r\nColor: Black'),
(10, 2, 6, 'Internal Horn\r\nVolume 110 dB\r\nFrequency Range 410 Hz\r\nMaterial: PLASTIC AND METAL\r\nSales Package - 2 horn, 1 relay , 1 screw set\r\nVehicle Model Name - Universal For Bike\r\nVoltage Required - 12 V'),
(11, 2, 6, 'External Horn\r\n2 Disc Horn\r\nMaterial: Metal\r\nVolume 150 dB dB\r\nFrequency Range 490 Hz Hz\r\nSound Type Trumpet, Loud\r\nSales Package - 2 Disc Horn, 1 Pc Relay, 1 Pc Wire'),
(12, 3, 7, 'Riding Protective Jacket\r\nProtective Features: Back Support Pad, Padded Elbows, Shoulder Pads\r\nFor Men and Women\r\n2 Waterproof Pockets, Double Stitch for Durability, \r\nNeoprene Collar and Cuff, Girth Adjusters at Sleeve \r\nand Waist for a Snug Fit.'),
(13, 3, 7, 'Riding Protective Jacket\r\nFor Men and Women\r\n2 Waterproof Pockets, Double Stitch for Durability \r\nAdjusters at Sleeve and Waist for a Snug Fit.'),
(14, 3, 7, 'Leather Jacket\r\nProtective Features - Chest Vest Protector\r\n2 Pockets'),
(15, 3, 7, 'HOODIE JACKET Riding Protective Jacket \r\nProtective Features: Back Support Pad, Padded Elbows, Shoulder Pads\r\nFabric: Waterproof\r\nNo of Pockets: 4\r\nFor Men and Women\r\nCovered in Warranty- INTERNAL MANUFACTURING DEFECT\r\nNot Covered in Warranty - TORN WARE, EXTERNAL DAMAGE'),
(16, 3, 7, 'Riding Protective Jacket \r\nProtective Features: Back Support Pad\r\nNo of Pockets: 3\r\nFor Men & Womens\r\nWater Proof and Mud Proof\r\nWarranty Summary - Wear and Tear not covered\r\nService Type - Need to courier to Manufacture unit'),
(17, 3, 8, 'OPEN FACE HELMET\r\nFor Boys, Men, Girls, Women, Kids\r\nVisor Present\r\nQuick Release Buckle\r\nSport Type - Motorsports\r\nStraps - Yes\r\nCertification - ISI Certified'),
(18, 3, 8, 'FULL FACE Sanchari, ISI Certified Helmet \r\nFitted Clear Visor and Extra Visor Motorbike Helmet \r\nType - Full Face\r\nSport Type - Motorbike\r\nAge Group - All\r\nStraps - Yes\r\nWater and Dust Proof\r\nAdjustments - Yes\r\n'),
(19, 3, 8, 'OFF ROAD Motorsports Helmet\r\nSport Type- Off Road Motorsports\r\nWashable Interior\r\nStraps - Yes\r\nAdjustments - Rear Mounted, Traction Plates on,\r\nSides for Goggle Strap Retention\r\n'),
(20, 3, 9, 'Bike Riding Gloves\r\nFull Fingered - Yes\r\nWith Touch Screen Sensitivity at Thumb\r\nLeft and Right Gloves\r\nFor Men & Women\r\nWeight: 150 g\r\nMaterial: 100% polyester'),
(21, 3, 9, 'Riding Sleeves Riding Gloves\r\nSunburn Protector Gloves\r\nHand Gloves For Men, Women\r\nWeight: 100 g\r\nMaterial: Cotton, Nylon\r\nSales Package - 2 Arm Sleeves');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `usertype_id` int(20) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `year_id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`year_id`, `year`) VALUES
(1, 2020),
(2, 2021),
(3, 2022),
(4, 2023);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `fk` (`login_id`);

--
-- Indexes for table `bills_paid`
--
ALTER TABLE `bills_paid`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `bill_services`
--
ALTER TABLE `bill_services`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `df` (`login_id`);

--
-- Indexes for table `doorstep_booking`
--
ALTER TABLE `doorstep_booking`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `jobers`
--
ALTER TABLE `jobers`
  ADD PRIMARY KEY (`jobers_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fg` (`order_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `accessories_id` (`accessories_id`);

--
-- Indexes for table `tbloutlet`
--
ALTER TABLE `tbloutlet`
  ADD PRIMARY KEY (`outlet_id`);

--
-- Indexes for table `tbluser_registration`
--
ALTER TABLE `tbluser_registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `tbl_accessories`
--
ALTER TABLE `tbl_accessories`
  ADD PRIMARY KEY (`accessories_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_month`
--
ALTER TABLE `tbl_month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_postjobs`
--
ALTER TABLE `tbl_postjobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_report_type`
--
ALTER TABLE `tbl_report_type`
  ADD PRIMARY KEY (`report_types_id`);

--
-- Indexes for table `tbl_second`
--
ALTER TABLE `tbl_second`
  ADD PRIMARY KEY (`second_id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `tbl_slots`
--
ALTER TABLE `tbl_slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `tbl_spec`
--
ALTER TABLE `tbl_spec`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`usertype_id`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bills_paid`
--
ALTER TABLE `bills_paid`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bill_services`
--
ALTER TABLE `bill_services`
  MODIFY `bill_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `doorstep_booking`
--
ALTER TABLE `doorstep_booking`
  MODIFY `d_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobers`
--
ALTER TABLE `jobers`
  MODIFY `jobers_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbloutlet`
--
ALTER TABLE `tbloutlet`
  MODIFY `outlet_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbluser_registration`
--
ALTER TABLE `tbluser_registration`
  MODIFY `registration_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1255;

--
-- AUTO_INCREMENT for table `tbl_accessories`
--
ALTER TABLE `tbl_accessories`
  MODIFY `accessories_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1165;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `color_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `tbl_month`
--
ALTER TABLE `tbl_month`
  MODIFY `month_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_postjobs`
--
ALTER TABLE `tbl_postjobs`
  MODIFY `job_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_report_type`
--
ALTER TABLE `tbl_report_type`
  MODIFY `report_types_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_second`
--
ALTER TABLE `tbl_second`
  MODIFY `second_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_slots`
--
ALTER TABLE `tbl_slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_spec`
--
ALTER TABLE `tbl_spec`
  MODIFY `spec_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `usertype_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `tbluser_registration` (`registration_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fg` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD CONSTRAINT `tblcart_ibfk_1` FOREIGN KEY (`accessories_id`) REFERENCES `tbl_accessories` (`accessories_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
