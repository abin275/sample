-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 11:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `type_of_bike` varchar(50) NOT NULL,
  `bike_name` varchar(50) NOT NULL,
  `bike_number` varchar(50) NOT NULL,
  `bike_cc` int(50) NOT NULL,
  `type_of_service` varchar(50) NOT NULL,
  `check_in` varchar(50) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `rc` varchar(100) NOT NULL,
  `bike_pic` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `title`, `name`, `email`, `phone`, `type_of_bike`, `bike_name`, `bike_number`, `bike_cc`, `type_of_service`, `check_in`, `time`, `rc`, `bike_pic`, `status`) VALUES
(11, 'Mr.', 'jocky', 'jocky@gmail.com', 2147483647, 'ORDINORY BIKE', 'splinder', 'kl 04 a 456', 1000, 'ORDINORY SERVICES', '2022-10-11', '2022-11-01 07:22:06.154390', 'rc (1).jpg', 'download.jpg', '1'),
(22, 'Miss.', 'leo', 'leo@gmail.com', 2147483647, 'OFF-ROAD BIKE', 'himalayan', 'kl 11 s 312', 400, 'TOURING SET UP', '2022-10-25', '2022-11-01 07:15:35.612466', 'uploads/1666975749.jpg', 'uploads/1666975749.jpg', '1'),
(25, 'Miss.', 'abc', 'jose@gmail.com', 2147483647, 'ORDINORY BIKE', 'bmw', 'kl 03 g 77', 400, 'ENGINE SERVICE', '2022-02-02', '2022-11-02 10:43:46.157827', 'uploads/1667385826.jpg', 'uploads/1667385826.jpg', '0');

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
  `order_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'pending',
  `stat` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`cart_id`, `accessories_id`, `user_id`, `quantity`) VALUES
(7, 1145, 'admin@gmail.com', 1),
(8, 1146, 'jose@gmail.com', 1),
(9, 1147, '', 1),
(11, 1149, '', 1),
(12, 1151, '', 1);

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
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbloutlet`
--

INSERT INTO `tbloutlet` (`outlet_id`, `name`, `address`, `city_location`, `phone`, `image`) VALUES
(3, ' kottayam bikes', 'kottayam bikes kottayam', 'near private bus stand ', '5435464652', '../uploads/9.jpg'),
(4, ' erumely automobiles', 'erumely po erumely', 'near erumely temble', '6646774356', '../uploads/6.jpg'),
(5, ' pathanamthitta bike hub', 'pathanamthitta po', ' near private bus stand road', '9535794171', '../uploads/');

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
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser_registration`
--

INSERT INTO `tbluser_registration` (`registration_id`, `name`, `gender`, `phone`, `address`, `email`, `password`, `role`, `status`) VALUES
(1206, 'aby', 'male', '1234567891', 'vadassery', 'aby@mca.ajce.in', '123', 'customer', 1),
(1207, 'sherwin', 'male', '2147483647', 'puthettuputhuparambil', 'sherwin@gmail.com', '1234', 'customer', 1),
(1215, 'abinmon bousally', 'male', '1234567890', 'qwertyuiop', 'abinmonbousally@gmai', '11111', 'customer', 1),
(1225, 'abyjose', 'male', '1234567899', 'qwertyuiop', 'jose@gmail.com', 'zzz', 'customer', 0),
(1230, 'admin', 'male', '1234567891', 'admin', 'admin@gmail.com', '111', 'admin', 0),
(1235, 'Korangan', 'male', '1234567890', 'korangan', 'korangan@gmail', '123', 'customer', 1),
(1236, 'leo', 'other', '2147483647', 'kadamkannunnal', 'leo@gmail.com', 'leo', 'customer', 0),
(1238, 'jeril k joly', 'other', '9999999999', 'qwertyuiopert', 'jeril@gmail.com', 'jeril', 'customer', 0),
(1239, 'milan rj', 'male', '9847648131', 'asdfghjkllkjhgfdsa', 'milan@gmail.com', 'milan', 'customer', 0),
(1240, 'anu john', 'female', '9495822439', 'abcdefghijklmnop', 'anu@gmail.com', 'Anu@123', 'customer', 0),
(1247, 'jerin', 'male', '1234567890', 'kavungal', 'jerin@gmail.com', '1234567890', 'customer', 0),
(1248, 'shino', 'male', '9854372371', 'karnadaka', 'shino@gmail.com', 'shino', 'customer', 0);

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
(1145, 1, ' oil', '900ml', 'loose', '350', 'Full-Synthetic Engine Oil For Bikes\r\nSuitable For: 4 Stroke Engine\r\nVehicle Brand - Universal For Bike\r\nVehicle Model Name - Universal For Bike\r\nPerformance Levels - High speed\r\nOther Features - Synthetic Base Engine Oil', 'uk', 1, 'gold\r\n', '2021/01/04', '3', '2020', 'january', '../uploads/j.jpg'),
(1146, 2, ' headlight', 'L', 'short and long visible', '600', 'Light Bulb Included- LED Light\r\nVehicle Model Name - bikes with round head\r\nHigh Beam, Low Beam\r\nInstallation Position: Right, Center, Left\r\nHousing Color: Black\r\n', 'chat', 3, 'black', '2021/08/20', '11', '2020', 'march', '../uploads/2.jpg'),
(1147, 3, ' jacket', 'XL', 'good', '5000', 'Riding Protective Jacket\r\nProtective Features: Back Support Pad, Padded Elbows, Shoulder Pads\r\nFabric: MaxTec 600-D and High Tenacity Mesh Fabric\r\nForMen and Women\r\n2 Waterproof Pockets, Double Stitch for Durability, \r\nNeoprene Collar and Cuff, Girth', 'chathenthara', 7, 'black', '2022/03/15', '8', '2021', 'january', '../uploads/8.jpg'),
(1149, 3, ' gloves', 'L', 'strong & waterproof', '350', 'Bike Riding Gloves\r\nFull Fingered - Yes\r\nWith Touch Screen Sensitivity at Thumb\r\nLeft and Right Gloves\r\nFor Men & Women\r\nWeight: 150 g\r\nMaterial: 100% polyester', 'uk', 9, 'brown', '2023/02/13', '1', '2022', 'april', '7.jpg'),
(1150, 2, ' fog light', 'medium', 'bright', '500', 'fog light Shape - Square\r\nHigh Beam\r\nInstallation Position: Right, Center, Left\r\nLight Bulb Included & LED Light\r\nHousing Color: Black\r\nVehicle Brand - Universal For Bike, Universal For Car\r\nLight Color - White\r\nPower Consumption- 96 W', 'canada', 6, 'black', '2023/02/13', '10', '2022', 'april', '1.jpg'),
(1151, 2, ' fog light', 'medium', 'bright', '500', 'fog light Shape - Square\r\nHigh Beam\r\nInstallation Position: Right, Center, Left\r\nLight Bulb Included & LED Light\r\nHousing Color: Black\r\nVehicle Brand - Universal For Bike, Universal For Car\r\nLight Color - White\r\nPower Consumption- 96 W', 'canada', 6, 'black', '2023/02/13', '15', '2022', 'may', '1.jpg'),
(1152, 3, ' helmet', 'XL', 'hard fiber', '3000', 'OFF ROAD Motorsports Helmet\r\nSport Type- Off Road Motorsports\r\nWashable Interior\r\nStraps - Yes\r\nAdjustments - Rear Mounted, Traction Plates on,\r\nSides for Goggle Strap Retention\r\n', 'india limited', 8, 'black', '2023/02/13', '12', '2022', 'may', '11.jpg'),
(1153, 1, ' oil', '1 liter', 'engine oil', '320', 'High Performance Engine Oil For Bike\r\nSuitable For: 4 Stroke Engine\r\nViscosity Index - 20W-40\r\nPerformance Levels - High speed, Premium 4-Stroke Motorcycle Oil', 'kerala po', 1, 'red', '2023/02/13', '9', '2023', 'may', '13.jpg');

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
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `entry_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `size` int(20) NOT NULL,
  `price` int(10) NOT NULL,
  `cart_qty` int(20) NOT NULL,
  `net_total` int(20) NOT NULL,
  `is_checked_out` int(5) NOT NULL
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
(3, 'Wearables');

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
  `phone` int(20) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(3, 'jai', 'jai@gmail.com', 515563256, 'cant connect'),
(4, 'abin', 'abc@gmail.com', 1234567899, 'hiiii');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email`, `password`, `role`) VALUES
(201, 'sherwin@gmail.com', '1234', 'customer'),
(202, 'abinmon@gmail.com', '12345', 'customer'),
(205, 'abc@gmail.com', '11', 'customer'),
(206, 'ab@gmail.com', '0', 'customer'),
(209, 'abinmonbousally@gmai', '11111', 'customer'),
(210, 'admin111@gmail.com', '111', 'admin'),
(211, 'qwertyuiop@gmail.com', 'qwertyuiop', 'customer'),
(212, 'qwe@gmail.com', '111111', 'customer'),
(213, 'z@gmail.com', '222', 'customer'),
(214, 's@gmail.com', '10', 'customer'),
(220, 'jose@gmail.com', 'zzz', 'customer'),
(221, 'alan@gmail.com', 'aa', 'customer'),
(225, 'admin@gmail.com', '111', 'admin'),
(226, 'subin@gmail.com', 'qqq', 'customer'),
(227, 'alby@gmail.com', 'alby', 'customer'),
(228, 'navya@gmail.com', '123', 'customer'),
(229, 'andavan@gmail.com', '222', 'customer'),
(230, 'korangan@gmail', '123', 'customer'),
(231, 'leo@gmail.com', 'leo', 'customer'),
(232, 'jubin@gmail.com', 'jubin', 'customer'),
(233, 'jeril@gmail.com', 'jeril', 'customer'),
(234, 'milan@gmail.com', 'milan', 'customer'),
(235, 'anu@gmail.com', 'Anu@123', 'customer'),
(239, 'abyjose123@gmail.com', '123', 'customer'),
(240, 'abyjose1234@gmail.co', '123', 'customer'),
(241, 'abin@gmail.com', '123', 'customer'),
(242, 'jerin@gmail.com', '1234567890', 'customer'),
(243, 'shino@gmail.com', 'shino', 'customer'),
(244, 'jai@gmail.com', 'jai', 'customer'),
(245, 'a@gmail.com', 'a', 'customer'),
(246, 'aaaa@gmail.com', 'aaaa', 'customer');

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
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_postjobs`
--

INSERT INTO `tbl_postjobs` (`job_id`, `name`, `address`, `location`, `phone`, `salary`, `jobtype`, `image`) VALUES
(1, ' mechanic worker', 'purickhal honda kanjirappaly', 'kanjirappally', '5000000000', '20000 - 25000', 'full time', '../uploads/2.jpg'),
(2, ' consultent', 'kottyam po kottyam', ' near private bus stand', '5435563444', '12000 - 20000', 'part time', '../uploads/5.jpg'),
(4, ' mechanic worker', 'kanjirappally po kanjirappally', 'Near mosque', '9752579864', '12000 - 20000', 'part time', '../uploads/');

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
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

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
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `fkuser` (`user_id`),
  ADD KEY `fkproduct` (`product_id`),
  ADD KEY `fksize` (`size`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbloutlet`
--
ALTER TABLE `tbloutlet`
  MODIFY `outlet_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluser_registration`
--
ALTER TABLE `tbluser_registration`
  MODIFY `registration_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1252;

--
-- AUTO_INCREMENT for table `tbl_accessories`
--
ALTER TABLE `tbl_accessories`
  MODIFY `accessories_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1154;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `entry_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `color_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

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
  MODIFY `job_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `fkproduct` FOREIGN KEY (`product_id`) REFERENCES `tbl_accessories` (`accessories_id`),
  ADD CONSTRAINT `fksize` FOREIGN KEY (`size`) REFERENCES `tbl_size` (`size_id`),
  ADD CONSTRAINT `fkuser` FOREIGN KEY (`user_id`) REFERENCES `tbluser_registration` (`registration_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
