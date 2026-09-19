-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2026 at 05:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer_support_db`
--
--
-- Public/demo dataset for the Farmer Support Management System.
-- The admin account and farmer records below are fictional demo data.
-- Demo login: demo_admin / Demo@1234
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'demo_admin', '$2y$12$Dxiou2bHfhzC2sbMbtMWj.jVez/YvQ/Wd6jqHHbVZvK4wkhOCfgFm');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `crop_id` int(11) NOT NULL,
  `farmer_id` int(11) DEFAULT NULL,
  `crop_name` varchar(100) DEFAULT NULL,
  `season` varchar(50) DEFAULT NULL,
  `soil_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`crop_id`, `farmer_id`, `crop_name`, `season`, `soil_type`) VALUES
(1, 1, 'Groundnut', 'Kharif', 'Red Soil'),
(2, 2, 'Sunflower', 'Rabi', 'Black Soil'),
(3, 3, 'Maize', 'Kharif', 'Loamy Soil'),
(4, 4, 'Sugarcane', 'Annual', 'Alluvial Soil'),
(5, 5, 'Arecanut', 'Annual', 'Laterite Soil'),
(6, 1, 'Groundnut', 'Kharif', 'Red Soil');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `farmer_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `land_size` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`farmer_id`, `name`, `phone`, `village`, `land_size`) VALUES
(1, 'Demo Farmer 1', '9000000001', 'Demo Village 1', '6 Acres'),
(2, 'Demo Farmer 2', '9000000002', 'Demo Village 2', '3 Acres'),
(3, 'Demo Farmer 3', '9000000003', 'Demo Village 3', '7 Acres'),
(4, 'Demo Farmer 4', '9000000004', 'Demo Village 4', '4 Acres'),
(5, 'Demo Farmer 5', '9000000005', 'Demo Village 5', '6 Acres'),
(6, 'Demo Farmer 6', '9000000006', 'Demo Village 6', '5 Acres');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizers`
--

CREATE TABLE `fertilizers` (
  `fertilizer_id` int(11) NOT NULL,
  `crop_name` varchar(100) DEFAULT NULL,
  `fertilizer_name` varchar(100) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fertilizers`
--

INSERT INTO `fertilizers` (`fertilizer_id`, `crop_name`, `fertilizer_name`, `quantity`, `price`) VALUES
(1, 'Groundnut', 'Urea', '50 kg', 1200.00),
(2, 'Sunflower', 'DAP', '40 kg', 1500.00),
(3, 'Maize', 'NPK', '35 kg', 1800.00),
(4, 'Sugarcane', 'Potash', '60 kg', 2200.00),
(5, 'Arecanut', 'Organic Compost', '70 kg', 1000.00);

-- --------------------------------------------------------

--
-- Table structure for table `government_schemes`
--

CREATE TABLE `government_schemes` (
  `scheme_id` int(11) NOT NULL,
  `scheme_name` varchar(200) DEFAULT NULL,
  `eligibility` text DEFAULT NULL,
  `benefits` text DEFAULT NULL,
  `last_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `government_schemes`
--

INSERT INTO `government_schemes` (`scheme_id`, `scheme_name`, `eligibility`, `benefits`, `last_date`) VALUES
(1, 'PM-KISAN Scheme', 'Small & Marginal Farmers', '₹6000 yearly financial support', '2026-06-30'),
(2, 'Raitha Siri Scheme', 'Karnataka Farmers', 'Subsidy for seeds & fertilizers', '2026-07-15'),
(3, 'Crop Insurance Scheme', 'Registered Farmers', 'Crop loss compensation', '2026-08-10'),
(4, 'Kisan Credit Card', 'Farmers with land records', 'Low interest agricultural loans', '2026-09-01'),
(5, 'Organic Farming Promotion Scheme', 'Organic Farmers', 'Financial support for organic farming', '2026-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `market_prices`
--

CREATE TABLE `market_prices` (
  `price_id` int(11) NOT NULL,
  `crop_name` varchar(100) DEFAULT NULL,
  `market_price` decimal(10,2) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `price_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `market_prices`
--

INSERT INTO `market_prices` (`price_id`, `crop_name`, `market_price`, `district`, `price_date`) VALUES
(1, 'Groundnut', 6200.00, 'Ballari', '2026-05-28'),
(2, 'Sunflower', 5400.00, 'Ballari', '2026-05-28'),
(3, 'Maize', 2300.00, 'Hubballi', '2026-05-28'),
(4, 'Sugarcane', 3200.00, 'Mandya', '2026-05-28'),
(5, 'Arecanut', 48000.00, 'Shivmogga', '2026-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`crop_id`),
  ADD KEY `farmer_id` (`farmer_id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `fertilizers`
--
ALTER TABLE `fertilizers`
  ADD PRIMARY KEY (`fertilizer_id`);

--
-- Indexes for table `government_schemes`
--
ALTER TABLE `government_schemes`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `market_prices`
--
ALTER TABLE `market_prices`
  ADD PRIMARY KEY (`price_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `crop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fertilizers`
--
ALTER TABLE `fertilizers`
  MODIFY `fertilizer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `government_schemes`
--
ALTER TABLE `government_schemes`
  MODIFY `scheme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `market_prices`
--
ALTER TABLE `market_prices`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crops`
--
ALTER TABLE `crops`
  ADD CONSTRAINT `crops_ibfk_1` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`farmer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
