-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2020 at 08:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amar-dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACCOUNTS`
--

CREATE TABLE `ACCOUNTS` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstName` tinytext NOT NULL,
  `lastName` tinytext NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `password` longtext NOT NULL,
  `passString` tinytext NOT NULL,
  `token` longtext NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='User Account Table';

--
-- Dumping data for table `ACCOUNTS`
--

INSERT INTO `ACCOUNTS` (`id`, `name`, `firstName`, `lastName`, `email`, `location`, `phone`, `password`, `passString`, `token`, `updatedAt`, `createdAt`, `isActive`) VALUES
(1, 'sudhakar2', 'Sudhakar213', 'Rangith', 'sudhakarbhra@gmail.com', 'Chennai', '8072541632', '$2y$10$x/eldPxYTqXcjyYW6bHBsORdqdt.YuUb5FKAncOmeoz4ocsNC1b0m', 'Simple@123', '$2y$10$Wagba51K6EKjzByzeWIGeuta6BWp7Zv7BAfsH6.Qupzif8BTm9NXS', '2020-07-05 13:51:11', '2020-02-26 00:10:45', 1),
(2, 'admin', 'Admin', 'Admin', 'admin@amardms.online', 'Adyar', '9178643445', '$2y$10$cUo1V5sYlb.tWQ6WiSbq8.nejZT1GOplhN.7.mPzOfrAnTwfC4UnS', '', '$2y$10$z5fvfOX1p.2Yxo5OVbMA2eoRItJZMVCK7JLQ1PtsRt3KPbGipzoqu', '2020-06-09 02:27:19', '2020-02-26 00:10:49', 1),
(3, 'kanna', 'kann', 'kanna', 'kanna@kanna.co', 'asr', 'arsgtwt', '$2y$10$/U06E51raW0paGpAxLuk5OQ07PllYU8WLhYlID2QUI9fZW88jzyxy', 'kasnna', '6766aa2750c19aad2fa1b32f36ed4aee', '2020-06-08 19:19:53', '2020-06-08 16:59:25', 1),
(4, 'asg', 'asg', 'asf', 'asg@asg.asg', 'asgf', 'asgfasfgas', '$2y$10$9KskOX1ChieEpBD196iUfeqMPZ8jDEmWztBbG5v1jRIYgAdDJjGKi', 'asfgasfg', '2838023a778dfaecdc212708f721b788', '2020-06-09 02:42:38', '2020-06-08 17:13:09', 1),
(5, 'sample User', 'sample', 'sample', 'sample', 'sampe', 'asmpas', '$2y$10$y8aPAJ38DIf/FGJx1kqC/OzbDRCtw7SGe3ubRb/tWCjlafUQlIgr2', 'asg', 'afd4836712c5e77550897e25711e1d96', '2020-06-09 02:38:34', '2020-06-08 17:21:34', 1),
(6, 'afshaeth', 'asgf', 'asg', 'sampl@ga.asg', 'asg', 'asg', '$2y$10$PCWX2FZZH0mX5lSRUEJIZuOUXX6OMhTlWUqPX8x6hZ4JP.Eset1WK', '', 'c042f4db68f23406c6cecf84a7ebb0fe', '2020-06-08 17:23:34', '2020-06-08 17:23:34', 1),
(7, 'rakahdus', 'Sudhakar', 'Behera', 'sudhakarbhra1698@gmail.com', 'Chennai', '8072541634', '$2y$10$4WCwpb4.ACmPPgGmlAfozO.pgygHrbcCNSIAqo8o2WOE.vbbfURdG', '', '$2y$10$ugjH9vvMPfLGh/OHzTlxkOVFEqsIs9Z1Zmdz9TqWbvV84fiM/aVQu', '2020-06-08 17:37:28', '2020-06-08 17:36:50', 1),
(8, 'sample', 'sample', 'sample', 'sample@sample.com', 'sample', '+54616051651', '$2y$10$42lkFXKfvtujlF53wyz.V.K/SWiz/Qa3GHC44aDCrgmxUvXcSxpQa', '', '04ecb1fa28506ccb6f72b12c0245ddbc', '2020-06-08 17:39:12', '2020-06-08 17:39:12', 1),
(9, 'ahwqh', 'asg', 'asg', 'qwy@sgfa.as', 'eqthet', 'heqtheqt', '$2y$10$aBubQZiyeyD/oAJqDGaUD.KbzCMXNVtc3C6ic.k.9PLYyHaj4uvhC', '', '6c4b761a28b734fe93831e3fb400ce87', '2020-06-08 17:57:39', '2020-06-08 17:57:39', 1),
(10, 'ahwqhasf', 'asg', 'asg', 'qwy@sgfa.asasf', 'eqthet', 'heqtheqt', '$2y$10$dStxOw7DuLY.tuLSz3uYLeUaK5HQ8x/uancmquakkP.KD.GMgSPPK', '', '7f1de29e6da19d22b51c68001e7e0e54', '2020-06-08 17:58:05', '2020-06-08 17:58:05', 1),
(11, 'ashash', 'q3ywh', 'q3th', 'sga@sfa.ha', 'haeth', 'haeth', '$2y$10$fj8QUMOn5KObUQVY1ULb0OTbnmt2/wtqPAhNrz5zrjt7/vDlNmIVy', '', '65658fde58ab3c2b6e5132a39fae7cb9', '2020-06-08 17:58:30', '2020-06-08 17:58:30', 1),
(12, 'asfg', 'asgf', 'asfg', 'asf@sga.asfg', 'asfg', 'asfg', '$2y$10$tSngxsehED11SGy8cerXa.tHyCjE5htocjCRjFc2gjuwoXL1J0.r6', 'asfg', 'a0a080f42e6f13b3a2df133f073095dd', '2020-06-08 19:14:37', '2020-06-08 19:14:37', 1),
(13, 'asfg', 'asgf', 'asfg', 'asf@sga.asfg', 'asfg', 'asfg', '$2y$10$su7B8yqFpRyl.u7CPX9aLu6xGqpPNdNo6PORoVjavPRrgi9mzmYhe', 'asfg', 'e8c0653fea13f91bf3c48159f7c24f78', '2020-06-08 19:15:43', '2020-06-08 19:15:43', 1),
(14, 'apple', 'apple', '', 'apple@co.in', '', '', '$2y$10$6YVYJ9mHVJZfPRyAN.Scbuknbgza3OX2fkcAPGGzzMvNzxxSpZLzW', 'Simple@123', 'abd815286ba1007abfbb8415b83ae2cf', '2020-06-08 19:16:27', '2020-06-08 19:16:27', 1),
(16, 'admin', 'Admin', 'Admin', 'admin@amardms.online', 'Adyar', '9178643445', '$2y$10$LVkteOOV07hILjaHf1jS3Obyx1TGckO/nxNwdymR9lN5x0GvqLBz6', 'Simple@123', '65ded5353c5ee48d0b7d48c591b8f430', '2020-06-08 19:17:18', '2020-06-08 19:17:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `BIKE_COLORS`
--

CREATE TABLE `BIKE_COLORS` (
  `id` int(11) NOT NULL,
  `colorName` tinytext NOT NULL,
  `colorCode` tinytext NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BIKE_COLORS`
--

INSERT INTO `BIKE_COLORS` (`id`, `colorName`, `colorCode`, `createdAt`) VALUES
(1, 'Sky Blue', '#52ece6', '2020-06-09 05:13:31'),
(2, '', '#103a67', '2020-06-08 13:23:13'),
(3, 'Gold', '#ffd326', '2020-06-09 05:13:14'),
(4, '', '#57d8ec', '2020-06-08 13:23:13'),
(5, '', '#ef57d5', '2020-06-08 13:23:13'),
(6, '', '#c5361b', '2020-06-08 13:23:13'),
(7, '', '#fb3625', '2020-06-08 13:23:13'),
(8, '', '#bc8027', '2020-06-08 13:23:14'),
(9, '', '#d22b52', '2020-06-08 13:23:14'),
(10, '', '#bfdce3', '2020-06-08 13:23:14'),
(11, '', '#ee9415', '2020-06-08 13:23:14'),
(12, '', '#f3ef58', '2020-06-08 13:23:14'),
(13, '', '#e5fa8a', '2020-06-08 13:23:14'),
(14, '', '#414418', '2020-06-08 13:23:14'),
(15, '', '#2742cb', '2020-06-08 13:23:14'),
(16, '', '#765ef5', '2020-06-08 13:23:14'),
(17, '', '#bd854d', '2020-06-08 13:23:14'),
(18, '', '#62ab0f', '2020-06-08 13:23:14'),
(19, '', '#cd806c', '2020-06-08 13:23:14'),
(20, '', '#46991f', '2020-06-08 13:23:14'),
(21, '', '#88bff7', '2020-06-08 13:23:14'),
(22, '', '#ef69f6', '2020-06-08 13:23:14'),
(23, '', '#ee6cb6', '2020-06-08 13:23:14'),
(24, '', '#c62a42', '2020-06-08 13:23:14'),
(25, '', '#0246a5', '2020-06-08 13:23:14'),
(26, '', '#e59088', '2020-06-08 13:23:14'),
(27, '', '#6052a1', '2020-06-08 13:23:14'),
(28, '', '#fed785', '2020-06-08 13:23:14'),
(29, '', '#f3707d', '2020-06-08 13:23:14'),
(30, '', '#496dd0', '2020-06-08 13:23:15'),
(31, '', '#e149d2', '2020-06-08 13:23:15'),
(32, '', '#8f721c', '2020-06-08 13:23:15'),
(33, '', '#2e52cd', '2020-06-08 13:23:15'),
(34, '', '#5637df', '2020-06-08 13:23:15'),
(35, '', '#69dfca', '2020-06-08 13:23:15'),
(36, '', '#cc7b56', '2020-06-08 13:23:15'),
(37, '', '#e0ebfe', '2020-06-08 13:23:15'),
(38, '', '#287ef7', '2020-06-08 13:23:15'),
(39, '', '#75d85a', '2020-06-08 13:23:15'),
(40, '', '#29539d', '2020-06-08 13:23:15'),
(41, '', '#1f3061', '2020-06-08 13:23:15'),
(42, '', '#e6386a', '2020-06-08 13:23:15'),
(43, '', '#cf8f04', '2020-06-08 13:23:15'),
(44, '', '#1081cd', '2020-06-08 13:23:15'),
(45, '', '#62be2e', '2020-06-08 13:23:15'),
(46, '', '#f90bc6', '2020-06-08 13:23:15'),
(47, '', '#f50175', '2020-06-08 13:23:15'),
(48, '', '#276b97', '2020-06-08 13:23:15'),
(49, '', '#eaabb3', '2020-06-08 13:23:15'),
(50, '', '#76dcb6', '2020-06-08 13:23:15'),
(51, '', '#298ae5', '2020-06-08 13:23:15'),
(52, '', '#8f2203', '2020-06-08 13:23:15'),
(53, '', '#4d40d4', '2020-06-08 13:23:15'),
(54, '', '#d66f70', '2020-06-08 13:23:15'),
(55, '', '#809616', '2020-06-08 13:23:16'),
(56, '', '#775fa6', '2020-06-08 13:23:16'),
(57, '', '#4cca12', '2020-06-08 13:23:16'),
(58, '', '#2b2765', '2020-06-08 13:23:16'),
(59, '', '#de84f0', '2020-06-08 13:23:16'),
(60, '', '#c47b4d', '2020-06-08 13:23:16'),
(61, '', '#c6ce88', '2020-06-08 13:23:16'),
(62, '', '#1f2a6c', '2020-06-08 13:23:16'),
(63, '', '#77f7d9', '2020-06-08 13:23:16'),
(64, '', '#075d24', '2020-06-08 13:23:16'),
(65, '', '#5b0f28', '2020-06-08 13:23:16'),
(66, '', '#181f3a', '2020-06-08 13:23:16'),
(67, '', '#2ece3e', '2020-06-08 13:23:16'),
(68, '', '#2b17ce', '2020-06-08 13:23:16'),
(69, '', '#a9332c', '2020-06-08 13:23:16'),
(70, '', '#92615b', '2020-06-08 13:23:16'),
(71, '', '#b9e640', '2020-06-08 13:23:16'),
(72, '', '#f2ae2e', '2020-06-08 13:23:16'),
(73, '', '#38db99', '2020-06-08 13:23:16'),
(74, '', '#2df0c4', '2020-06-08 13:23:16'),
(75, '', '#1cbce2', '2020-06-08 13:23:16'),
(76, '', '#489597', '2020-06-08 13:23:17'),
(77, '', '#755b03', '2020-06-08 13:23:17'),
(78, '', '#5b6aa9', '2020-06-08 13:23:17'),
(79, '', '#14a87a', '2020-06-08 13:23:17'),
(80, '', '#f4e663', '2020-06-08 13:23:17'),
(81, '', '#db1f3a', '2020-06-08 13:23:17'),
(82, '', '#0be40c', '2020-06-08 13:23:17'),
(83, '', '#96b95a', '2020-06-08 13:23:17'),
(84, '', '#1e1f87', '2020-06-08 13:23:17'),
(85, '', '#2b3453', '2020-06-08 13:23:17'),
(86, '', '#387d9d', '2020-06-08 13:23:17'),
(87, '', '#e29d15', '2020-06-08 13:23:17'),
(88, '', '#5c041d', '2020-06-08 13:23:17'),
(89, '', '#b79691', '2020-06-08 13:23:17'),
(90, '', '#d09d12', '2020-06-08 13:23:17'),
(91, '', '#e5d6e9', '2020-06-08 13:23:17'),
(92, '', '#9330e9', '2020-06-08 13:23:17'),
(93, '', '#981add', '2020-06-08 13:23:17'),
(94, '', '#3709fc', '2020-06-08 13:23:17'),
(95, '', '#e2a76a', '2020-06-08 13:23:17'),
(96, '', '#7b1b4b', '2020-06-08 13:23:17'),
(97, '', '#027b47', '2020-06-08 13:23:17'),
(98, '', '#4105db', '2020-06-08 13:23:18'),
(99, '', '#3a337e', '2020-06-08 13:23:18'),
(100, '', '#7fe657', '2020-06-08 13:23:18'),
(101, 'Gold', '#f3ef58', '2020-06-09 05:11:44'),
(102, '', '#ffd326', '2020-06-09 05:12:29'),
(103, 'Gold', '#ffd326', '2020-06-09 05:12:48'),
(105, 'Dark Metalic', '#000000', '2020-06-09 05:20:15'),
(106, 'Black', '#000000', '2020-06-09 05:20:47'),
(107, 'Primary', '#0e00ff', '2020-06-13 07:23:12'),
(108, 'Green', '#00ff03', '2020-06-13 07:51:53'),
(109, 'agsf', '#ffec00', '2020-06-13 07:54:38'),
(110, 'orange', '#ff8500', '2020-06-13 08:02:37'),
(111, 'peach', '#dfff49', '2020-06-13 08:04:03'),
(112, 'asf', '#000000', '2020-06-13 08:10:38'),
(113, '1234', '#000000', '2020-06-13 08:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `BIKE_MODELS`
--

CREATE TABLE `BIKE_MODELS` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `colors` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'contains array of ''id'' of BIKE-COLORS TABLE\r\n',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BIKE_MODELS`
--

INSERT INTO `BIKE_MODELS` (`id`, `name`, `colors`, `createdAt`) VALUES
(1, 'Savana 1500', '', '2020-06-08 13:25:02'),
(2, 'MX-5', '', '2020-06-08 13:25:02'),
(3, 'Quest', '', '2020-06-08 13:25:02'),
(4, 'Malibu', '[\"106\",\"105\"]', '2020-06-08 13:25:02'),
(6, 'Blazer', '', '2020-06-08 13:25:03'),
(7, 'Murano', '', '2020-06-08 13:25:03'),
(8, 'HED-5', '', '2020-06-08 13:25:03'),
(9, 'Mazda6 5-Door', '', '2020-06-08 13:25:03'),
(10, 'Impreza', '', '2020-06-08 13:25:03'),
(11, 'Cavalier', '', '2020-06-08 13:25:03'),
(12, 'Focus', '', '2020-06-08 13:25:03'),
(13, '57', '', '2020-06-08 13:25:03'),
(14, 'Corolla', '', '2020-06-08 13:25:03'),
(15, '3 Series', '', '2020-06-08 13:25:03'),
(16, 'Grand Voyager', '', '2020-06-08 13:25:03'),
(17, 'Outback', '', '2020-06-08 13:25:03'),
(18, 'Cavalier', '', '2020-06-08 13:25:03'),
(19, 'MKS', '', '2020-06-08 13:25:03'),
(20, 'H2', '', '2020-06-08 13:25:03'),
(21, 'Honda', '[\"106\",\"105\",\"3\"]', '2020-06-09 06:06:08'),
(22, 'Hero', '', '2020-06-13 08:01:17'),
(23, 'bikr', '', '2020-06-13 08:04:25'),
(24, 'bikr', '[\"111\"]', '2020-06-13 08:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `COLLECTION_LIST`
--

CREATE TABLE `COLLECTION_LIST` (
  `id` int(11) NOT NULL,
  `company` varchar(256) NOT NULL,
  `upi_id` varchar(256) NOT NULL,
  `agreement_date` varchar(256) NOT NULL,
  `vehicle_no` varchar(256) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `customer_mobile` varchar(256) NOT NULL,
  `vehicle_type` varchar(256) NOT NULL,
  `pending_dues` varchar(256) NOT NULL,
  `due_amount` varchar(256) NOT NULL,
  `lpi` varchar(256) NOT NULL,
  `handloon` varchar(256) NOT NULL,
  `total_pay` varchar(256) NOT NULL,
  `last_paid_date` varchar(256) NOT NULL,
  `last_paid_amount` varchar(256) NOT NULL,
  `upto` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `COLLECTION_LIST`
--

INSERT INTO `COLLECTION_LIST` (`id`, `company`, `upi_id`, `agreement_date`, `vehicle_no`, `customer_name`, `customer_mobile`, `vehicle_type`, `pending_dues`, `due_amount`, `lpi`, `handloon`, `total_pay`, `last_paid_date`, `last_paid_amount`, `upto`, `message`) VALUES
(1, 'MEHUL MOTORS', 'mehulmotors@upi', '25-10-2017', 'TN-03V-7123', 'FRANKLIN ARUN KUMAR', '9994778985', 'Two Wheeler', '14.49', '42675', '31768', '1000', '75443', '01-05-2020', '1500', '25-01-2019', 'PLZ PAY EMI AS SOON AS POSSIBLE  75443'),
(2, 'MEHUL MOTORS', 'mehulmotors@upi', '24-04-2018', 'TN-03X-1442', 'ANWAR BASHA H', '7418214120', 'Three Wheeler', '14', '94080', '18759', '8000', '120839', '15-04-2019', '6720', '24-06-2020', 'PLZ PAY EMI AS SOON AS POSSIBLE  120839'),
(3, 'MEHUL MOTORS', 'mehulmotors@upi', '27-02-2018', 'TN-03W-8025', 'ILAKKIYA S', '7299676876', 'Three Wheeler', '11', '71500', '13065', '200', '84765', '05-07-2019', '6500', '06-06-2020', 'PLZ PAY EMI AS SOON AS POSSIBLE  84765'),
(4, 'MEHUL MOTORS', 'mehulmotors@upi', '14-07-2018', 'TN-04AU-7744', 'KRISHNA KUMAR G', '9710027849', 'Three Wheeler', '10.16', '62589', '', '', '62589', '12-11-2019', '15800', '23-06-2020', 'PLZ PAY EMI AS SOON AS POSSIBLE  62589'),
(5, 'SANDIP KUMAR', '9444230537@upi', '19-07-2016', 'TN-05AD-9896', 'DURGA  .', '9841315383', 'Two Wheeler', '12', '42675', '', '', '42675', '01-05-2020', '1500', '25/06/2020', 'PLZ PAY EMI AS SOON AS POSSIBLE  42675'),
(6, 'SANDIP KUMAR', '9444230537@upi', '11-07-2016', 'TN-05AU-6639', 'MANOVA .', '8680970147', 'Two Wheeler', '11', '94080', '', '', '94080', '15-04-2019', '6720', '26/06/2020', 'PLZ PAY EMI AS SOON AS POSSIBLE  94080'),
(7, 'SANDIP KUMAR', '9444230537@upi', '14-09-2016', 'TN-03T-3730', 'CHITRA .', '9884199018', 'Two Wheeler', '8', '', '13065', '2000', '15065', '05-07-2019', '6500', '27/06/2020', 'PLZ PAY EMI AS SOON AS POSSIBLE  15065'),
(8, 'SANDIP KUMAR', '9444230537@upi', '08-09-2016', 'TN-03T-3489', 'SASI KUMAR .', '9940597229', 'Two Wheeler', '7', '', '9578', '3000', '12578', '12-11-2019', '15800', '28/06/2020', 'PLZ PAY EMI AS SOON AS POSSIBLE  12578');

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

CREATE TABLE `CUSTOMER` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `fatherName` tinytext NOT NULL,
  `address1` tinytext NOT NULL,
  `address2` tinytext NOT NULL,
  `area` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `pincode` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `phoneAlt` tinytext NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CUSTOMER`
--

INSERT INTO `CUSTOMER` (`id`, `name`, `fatherName`, `address1`, `address2`, `area`, `city`, `pincode`, `phone`, `phoneAlt`, `createdBy`, `createdAt`, `isActive`) VALUES
(1, 'Stevy Sibbit', 'Stevy', '31403 Maryland Pass', 'ssibbit0@aol.com', 'China', 'Shuitian', '5989422', '3175062887', '3049586962', 1, '2020-06-13 01:36:57', 1),
(2, 'Jessamine Capnerhurst', 'Jessamine', '28 Morrow Alley', 'jcapnerhurst1@so-net.ne.jp', 'Cuba', 'Matanzas', '1123005', '8165794711', '1867643449', 1, '2020-06-13 01:36:57', 1),
(3, 'Leia Towersey', 'Leia', '7190 Laurel Parkway', 'ltowersey2@pbs.org', 'China', 'Shuangqiao', '3602079', '9093006798', '1964035315', 1, '2020-06-13 01:36:57', 1),
(4, 'Fabiano Arnal', 'Fabiano', '01 Bashford Park', 'farnal3@nasa.gov', 'Netherlands', 'Etten-Leur', '2448318', '1507564813', '5786874765', 1, '2020-06-13 01:36:57', 1),
(5, 'Bucky Januszewicz', 'Bucky', '275 Roth Alley', 'bjanuszewicz4@rakuten.co.jp', 'Japan', 'Kamiichi', '3047642', '7826175932', '4128297955', 1, '2020-06-13 01:36:57', 1),
(6, 'Mattie Hatliffe', 'Mattie', '98 Reindahl Junction', 'mhatliffe5@nature.com', 'France', 'Cachan', '4880147', '1251462732', '9778788691', 1, '2020-06-13 01:36:57', 1),
(7, 'Cynde Frankton', 'Cynde', '794 South Center', 'cfrankton6@addthis.com', 'Indonesia', 'Lanci Satu', '2841883', '8582500169', '4658582386', 1, '2020-06-13 01:36:57', 1),
(8, 'Eba Quincey', 'Eba', '562 Rowland Crossing', 'equincey7@netlog.com', 'Canada', 'Bonnyville', '3181042', '8827791680', '8253489129', 1, '2020-06-13 01:36:57', 1),
(9, 'Guenna Santori', 'Guenna', '635 Springview Hill', 'gsantori8@unc.edu', 'Indonesia', 'Plumbon', '5721625', '5457043978', '1596859711', 1, '2020-06-13 01:36:57', 1),
(10, 'Virgie Methven', 'Virgie', '2110 Lerdahl Circle', 'vmethven9@livejournal.com', 'China', 'Taoling', '1834414', '3779313633', '1207803804', 1, '2020-06-13 01:36:58', 1),
(11, 'Efrem Kittoe', 'Efrem', '9 Lighthouse Bay Park', 'ekittoea@utexas.edu', 'Poland', 'Bełk', '3949707', '2564117892', '2643234487', 1, '2020-06-13 01:36:58', 1),
(12, 'Charmane Marder', 'Charmane', '737 Armistice Way', 'cmarderb@marriott.com', 'France', 'Montauban', '1048549', '4877306636', '2311261366', 1, '2020-06-13 01:36:58', 1),
(13, 'Alexine Tumioto', 'Alexine', '8 Redwing Circle', 'atumiotoc@slashdot.org', 'United Kingdom', 'Glasgow', '5436313', '7432846205', '7444909114', 1, '2020-06-13 01:36:58', 1),
(14, 'Truman Semaine', 'Truman', '53629 Messerschmidt Circle', 'tsemained@intel.com', 'Moldova', 'Saharna', '3317496', '9236408771', '2086790719', 1, '2020-06-13 01:36:58', 1),
(15, 'Sutherlan Greenwood', 'Sutherlan', '05 Morningstar Way', 'sgreenwoode@zdnet.com', 'Nigeria', 'Shaffa', '2881205', '2989682035', '9811573410', 1, '2020-06-13 01:36:58', 1),
(16, 'Alida Denley', 'Alida', '2200 Northview Park', 'adenleyf@elegantthemes.com', 'Philippines', 'Lubuagan', '2658485', '4984490515', '8003832243', 1, '2020-06-13 01:36:58', 1),
(17, 'Horatio Sails', 'Horatio', '76 Mccormick Junction', 'hsailsg@scribd.com', 'Mexico', '20 de Noviembre', '2488482', '5293204734', '5079853486', 1, '2020-06-13 01:36:58', 1),
(18, 'Kip Petrishchev', 'Kip', '80387 Milwaukee Lane', 'kpetrishchevh@artisteer.com', 'France', 'Compiègne', '2280720', '9951999361', '2735862430', 1, '2020-06-13 01:36:58', 1),
(19, 'Nelle Pierse', 'Nelle', '703 Barnett Terrace', 'npiersei@va.gov', 'China', 'Shuangfeng', '5623467', '2453012967', '8956407504', 1, '2020-06-13 01:36:58', 1),
(20, 'Annabel Gonsalvez', 'Annabel', '18 Main Park', 'agonsalvezj@gnu.org', 'China', 'Xiangyang', '2740168', '8524567754', '3054760068', 1, '2020-06-13 01:36:58', 1),
(21, 'Jarred Acey', 'Jarred', '89 Golf Course Park', 'jaceyk@mashable.com', 'Indonesia', 'Gading', '1498472', '9541141012', '3639182197', 1, '2020-06-13 01:36:58', 1),
(22, 'Jewelle Dulinty', 'Jewelle', '8 Iowa Road', 'jdulintyl@is.gd', 'Philippines', 'Dicamay', '2554983', '5084473165', '9568322059', 1, '2020-06-13 01:36:58', 1),
(23, 'Dory Benini', 'Dory', '8 Dixon Parkway', 'dbeninim@fc2.com', 'China', 'Gongping', '2754461', '2495821258', '7947505264', 1, '2020-06-13 01:36:58', 1),
(24, 'Calvin Henken', 'Calvin', '46 Tomscot Way', 'chenkenn@cloudflare.com', 'Poland', 'Międzybrodzie Bialskie', '5400759', '5607407956', '8001553442', 1, '2020-06-13 01:36:58', 1),
(25, 'Levon Domesday', 'Levon', '830 Marquette Court', 'ldomesdayo@cmu.edu', 'China', 'Guocun', '5878768', '3161283208', '5593302228', 1, '2020-06-13 01:36:58', 1),
(26, 'Christy Grzegorecki', 'Christy', '64035 Rockefeller Crossing', 'cgrzegoreckip@google.co.uk', 'Portugal', 'Nogueira', '5229721', '7074518829', '8695040875', 1, '2020-06-13 01:36:58', 1),
(27, 'Joline Worstall', 'Joline', '5 Tomscot Road', 'jworstallq@amazon.com', 'Russia', 'Dalmatovo', '2217881', '6068247345', '7262211758', 1, '2020-06-13 01:36:58', 1),
(28, 'Lucais Felten', 'Lucais', '7219 Crowley Avenue', 'lfeltenr@ask.com', 'Japan', 'Uchimaru', '1299990', '6154348439', '8581040590', 1, '2020-06-13 01:36:58', 1),
(29, 'Joelie Queyeiro', 'Joelie', '8 Burning Wood Avenue', 'jqueyeiros@ifeng.com', 'United States', 'Charlottesville', '2155188', '4343423129', '1011225882', 1, '2020-06-13 01:36:58', 1),
(30, 'Penelope Shilburne', 'Penelope', '87142 Hallows Terrace', 'pshilburnet@rambler.ru', 'Australia', 'Adelaide Mail Centre', '635442', '5011094784', '7406258626', 1, '2020-06-13 01:36:58', 1),
(31, 'Stephani Fist', 'Stephani', '7 Johnson Court', 'sfistu@msn.com', 'Poland', 'Rudka', '3415888', '9153465163', '7967160781', 1, '2020-06-13 01:36:58', 1),
(32, 'Charlean Grigorio', 'Charlean', '7 Swallow Road', 'cgrigoriov@guardian.co.uk', 'Indonesia', 'Batugede Kulon', '3446531', '6327542928', '7295117665', 1, '2020-06-13 01:36:58', 1),
(33, 'Lonny Danit', 'Lonny', '255 Tomscot Crossing', 'ldanitw@shinystat.com', 'Pakistan', 'Dālbandīn', '2682758', '7063645829', '4137870592', 1, '2020-06-13 01:36:58', 1),
(34, 'Winslow Giaomozzo', 'Winslow', '92250 Brentwood Terrace', 'wgiaomozzox@about.me', 'Azerbaijan', 'Ujar', '2781369', '4378827383', '5529681030', 1, '2020-06-13 01:36:58', 1),
(36, 'Nettie Noah', 'Nettie', '78 Meadow Valley Center', 'nnoahz@stanford.edu', 'Brazil', 'Louveira', '5744964', '6159817878', '3828891442', 1, '2020-06-13 01:36:59', 1),
(37, 'Thom Feldharker', 'Thom', '69 Onsgard Point', 'tfeldharker10@barnesandnoble.com', 'China', 'Liushutun', '1863122', '8945856264', '6299552236', 1, '2020-06-13 01:36:59', 1),
(38, 'Rinaldo Arnott', 'Rinaldo', '14062 Summerview Lane', 'rarnott11@npr.org', 'Indonesia', 'Basa', '1664975', '3329522060', '9375973044', 1, '2020-06-13 01:36:59', 1),
(39, 'Hermione Stroton', 'Hermione', '1 Reinke Way', 'hstroton12@nba.com', 'China', 'Bayan Ewenke Minzu', '2970329', '3226901817', '4972857668', 1, '2020-06-13 01:36:59', 1),
(40, 'Darnell Blue', 'Darnell', '2 School Center', 'dblue13@apache.org', 'Belarus', 'Drybin', '4554333', '2169368097', '8277380041', 1, '2020-06-13 01:36:59', 1),
(41, 'Yvor Brigman', 'Yvor', '24 Autumn Leaf Court', 'ybrigman14@clickbank.net', 'United States', 'Great Neck', '1449142', '5168503138', '4231250115', 1, '2020-06-13 01:36:59', 1),
(42, 'Madelaine Swainston', 'Madelaine', '5 Gulseth Point', 'mswainston15@drupal.org', 'China', 'Laohekou', '5972994', '4978882750', '4006696621', 1, '2020-06-13 01:36:59', 1),
(43, 'Sebastiano Mayne', 'Sebastiano', '533 Victoria Pass', 'smayne16@infoseek.co.jp', 'Portugal', 'Souto da Casa', '2882795', '5934174462', '7319716168', 1, '2020-06-13 01:36:59', 1),
(44, 'Creight Burrel', 'Creight', '52562 Delladonna Court', 'cburrel17@google.com', 'Thailand', 'Nakhon Luang', '2924020', '4889586879', '3619077915', 1, '2020-06-13 01:36:59', 1),
(45, 'Kevan Bury', 'Kevan', '29121 Huxley Trail', 'kbury18@oakley.com', 'Myanmar', 'Tharyarwady', '2128313', '9867094039', '4657845277', 1, '2020-06-13 01:36:59', 1),
(46, 'Amargo Bruty', 'Amargo', '7877 Blaine Park', 'abruty19@scientificamerican.com', 'Argentina', 'Aguilares', '4634436', '3843353629', '4631665924', 1, '2020-06-13 01:36:59', 1),
(47, 'Berkeley Knapton', 'Berkeley', '265 Eastwood Street', 'bknapton1a@omniture.com', 'Ethiopia', 'Felege Neway', '2949681', '8558861801', '5601229570', 1, '2020-06-13 01:36:59', 1),
(48, 'Germain Barenski', 'Germain', '64881 Carioca Place', 'gbarenski1b@php.net', 'United States', 'Fort Worth', '1850003', '6824093244', '3638409443', 1, '2020-06-13 01:36:59', 1),
(51, 'Sudhakar', 'Suresh', 'Pallikaranai', 'Chennai', 'Pallikarani', 'Chennao', '600100', '8072541634', '9551405089', 1, '2020-06-13 03:46:12', 1),
(52, 'asf', 'asg', 'asf', 'asg', 'asg', 'asg', 'asg', 'asfg', 'aasfg', 1, '2020-06-13 03:49:34', 1),
(53, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 1, '2020-06-13 07:26:02', 1),
(54, 'Customer', 'Customer', 'Customer', 'Customer', 'Customer', 'Customer', 'Customer', 'Customer', 'Customer', 1, '2020-06-13 08:06:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER_MASTER`
--

CREATE TABLE `CUSTOMER_MASTER` (
  `id` int(11) NOT NULL,
  `finance_company` mediumtext NOT NULL,
  `upi_id` mediumtext NOT NULL,
  `agreement_date` mediumtext NOT NULL,
  `mobile` mediumtext NOT NULL,
  `vehicle_no` mediumtext NOT NULL,
  `customer` mediumtext NOT NULL,
  `vehicle_type` mediumtext NOT NULL,
  `emi_amount` mediumtext NOT NULL,
  `due_date` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CUSTOMER_MASTER`
--

INSERT INTO `CUSTOMER_MASTER` (`id`, `finance_company`, `upi_id`, `agreement_date`, `mobile`, `vehicle_no`, `customer`, `vehicle_type`, `emi_amount`, `due_date`) VALUES
(1, 'MEHUL MOTORS', 'mehulmotors@upi', '24-04-2018', '7418214120', 'TN-03X-1442', 'ANWAR BASHA H', 'Three Wheeler', '2400', '10'),
(2, 'MEHUL MOTORS', 'mehulmotors@upi', '27-02-2018', '7299676876', 'TN-03W-8025', 'ILAKKIYA S', 'Three Wheeler', '2500', '11'),
(3, 'MEHUL MOTORS', 'mehulmotors@upi', '09-03-2018', '9003656061', 'TN-04AU-1865', 'KUMARAKURUNATHAN M', 'Three Wheeler', '6000', '12'),
(4, 'MEHUL MOTORS', 'mehulmotors@upi', '17-01-2018', '9003095961', 'TN-22CP-4984', 'BHARGATH ALI M', 'Four Wheeler', '7500', '13'),
(5, 'MEHUL MOTORS', 'mehulmotors@upi', '14-07-2018', '9710027849', 'TN-04AU-7744', 'KRISHNA KUMAR G', 'Three Wheeler', '2000', '14'),
(6, 'MEHUL MOTORS', 'mehulmotors@upi', '12-05-2018', '7200666786', 'TN-05BR-6953', 'SHANAVAS A', 'Three Wheeler', '3100', '15'),
(7, 'MEHUL MOTORS', 'mehulmotors@upi', '14-03-2018', '9941390649', 'TN-03W-9128', 'KRISHNAN G', 'Three Wheeler', '3511', '16'),
(8, 'SANDIP KUMAR', '9444230537@upi', '19-07-2016', '9841315383', 'TN-05AD-9896', 'DURGA  .', 'Two Wheeler', '21445', '17'),
(9, 'SANDIP KUMAR', '9444230537@upi', '11-07-2016', '8680970147', 'TN-05AU-6639', 'MANOVA .', 'Two Wheeler', '2112', '18'),
(10, 'SANDIP KUMAR', '9444230537@upi', '14-09-2016', '9884199018', 'TN-03T-3730', 'CHITRA .', 'Two Wheeler', '2251', '19'),
(11, 'SANDIP KUMAR', '9444230537@upi', '08-09-2016', '9940597229', 'TN-03T-3489', 'SASI KUMAR .', 'Two Wheeler', '251', '20'),
(12, 'SANDIP KUMAR', '9444230537@upi', '05-09-2016', '9840561865', 'TN-03T-3022', 'MUTHU  VIJAYAN', 'Two Wheeler', '2541', '21'),
(13, 'Sudhakar', 'sudhakar@exaple', '12-12-124', '8072541634', '8072541634', '8072541634', '8072541634', '8072541634', '8072541634'),
(14, 'John', 'John', 'John', 'John', 'John', 'John', 'John', 'John', 'John'),
(15, 'Doe', 'Doe', 'Doe', 'Doe', 'Doe', 'Doe', 'Doe', 'Doe', 'Doe');

-- --------------------------------------------------------

--
-- Table structure for table `INVOICES`
--

CREATE TABLE `INVOICES` (
  `id` int(11) NOT NULL,
  `receiptId` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `receiptDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amountReceived` int(11) NOT NULL DEFAULT 0,
  `paymentType` tinytext NOT NULL,
  `chequeNo` tinytext NOT NULL,
  `upiNo` tinytext NOT NULL,
  `bankName` tinytext NOT NULL,
  `comment` mediumtext NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `INVOICES`
--

INSERT INTO `INVOICES` (`id`, `receiptId`, `createdBy`, `receiptDate`, `amountReceived`, `paymentType`, `chequeNo`, `upiNo`, `bankName`, `comment`, `createdAt`) VALUES
(1, 53, 1, '2020-06-17 18:30:00', 0, 'CHEQUE', '789797989', '', '', 'asgasg', '2020-06-18 02:30:17'),
(2, 53, 1, '2020-06-16 18:30:00', 1000, 'UPI', '', 'samba@upi', '', 'paid using UPI phone +9551405089', '2020-06-18 02:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `RECEIPTS`
--

CREATE TABLE `RECEIPTS` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `vehicleModel` int(11) NOT NULL,
  `vehicleColor` int(11) NOT NULL,
  `payType` tinytext NOT NULL,
  `vehicleCost` int(11) NOT NULL,
  `regCharge` int(11) NOT NULL,
  `fittings` mediumtext NOT NULL,
  `insurance` mediumtext NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `downPayment` int(11) NOT NULL,
  `chequeNo` mediumtext NOT NULL,
  `bankName` mediumtext NOT NULL,
  `comment` mediumtext NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `RECEIPTS`
--

INSERT INTO `RECEIPTS` (`id`, `userId`, `vehicleModel`, `vehicleColor`, `payType`, `vehicleCost`, `regCharge`, `fittings`, `insurance`, `discount`, `total`, `downPayment`, `chequeNo`, `bankName`, `comment`, `createdBy`, `createdAt`, `updateAt`, `isActive`) VALUES
(1, 1, 14, 49, '0', 0, 0, 'Toxic effect of gases, fumes and vapors, undetermined, subs', 'Meijer Distribution Inc', 0, 0, 0, '674-5901-1843-902', 'Denesik-Kirlin', '', 7, '2020-06-09 06:48:13', '2020-06-13 01:21:30', 1),
(2, 2, 12, 36, '0', 0, 0, 'Burn of unspecified degree of left elbow', 'Torrent Pharmaceuticals Limited', 0, 0, 0, '304-5872-5192-179', 'Stracke-Lehner', '', 6, '2020-06-09 06:48:13', '2020-06-13 01:37:54', 1),
(3, 1, 16, 4, '0', 0, 0, 'Toxic effect of contact with venomous marine plant', 'Physicians Formula Inc', 0, 0, 0, '642-0800-0652-524', 'White Inc', '', 7, '2020-06-09 06:48:13', '2020-06-13 01:21:43', 1),
(4, 1, 20, 38, '0', 0, 0, 'Other recurrent vertebral dislocation', 'Ducere Pharma', 0, 0, 0, '427-8289-6191-780', 'Bashirian, Volkman and Bayer', '', 1, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(5, 1, 16, 33, '0', 0, 0, 'Patient\'s intentional underdosing of medication regimen', 'ARMY AND AIR FORCE EXCHANGE SERVICE', 0, 0, 0, '506-2439-8900-927', 'Terry-Mitchell', '', 7, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(6, 3, 8, 24, '0', 0, 0, 'Disp fx of proximal phalanx of unsp thumb, init for clos fx', 'Mylan Pharmaceuticals Inc.', 0, 0, 0, '179-3840-1024-204', 'Buckridge, Bode and Kilback', '', 4, '2020-06-09 06:48:14', '2020-06-13 01:38:04', 1),
(7, 1, 15, 11, '0', 0, 0, 'Pathological fracture in other disease, right radius', 'Heel Inc', 0, 0, 0, '941-9365-6676-408', 'Wisozk, Koepp and Graham', '', 3, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(8, 1, 8, 42, '0', 0, 0, 'Congenital fistula of rectum and anus', 'Carlsbad Technology, Inc.', 0, 0, 0, '127-8226-1452-770', 'Zieme LLC', '', 5, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(9, 1, 20, 45, '0', 0, 0, 'Diaphragmatic hernia with gangrene', 'Jubilant HollisterStier LLC', 0, 0, 0, '400-7028-2875-906', 'Hermiston-Weber', '', 8, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(10, 1, 19, 19, '0', 0, 0, 'Minor contusion of left kidney, initial encounter', 'Roxane Laboratories, Inc.', 0, 0, 0, '715-8747-2494-544', 'Ullrich, Doyle and Hagenes', '', 8, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(11, 1, 3, 34, '0', 0, 0, 'Cicatricial lagophthalmos right eye, unspecified eyelid', 'International Labs, Inc.', 0, 0, 0, '461-6304-0775-331', 'Johns, Roberts and Bartell', '', 6, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(12, 1, 19, 41, '0', 0, 0, 'Suprvsn of preg w history of infertility, first trimester', 'Cintas Corp.', 0, 0, 0, '639-4261-9536-241', 'Russel Group', '', 3, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(13, 1, 4, 30, '0', 0, 0, 'Ped on skateboard injured pick-up truck, pk-up/van in traf', 'Roerig', 0, 0, 0, '598-0094-6869-346', 'Quitzon and Sons', '', 10, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(14, 1, 4, 7, '0', 0, 0, 'Other feeding disorders of infancy and childhood', 'PD-Rx Pharmaceuticals, Inc.', 0, 0, 0, '398-7180-0025-718', 'Lueilwitz LLC', '', 3, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(15, 1, 10, 37, '0', 0, 0, 'Contus/lac left cerebrum w LOC of 31-59 min, subs', 'West-Ward Pharmaceutical Corp.', 0, 0, 0, '849-0144-7795-707', 'Schaefer-Heidenreich', '', 8, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(16, 1, 11, 27, '0', 0, 0, 'Crushing injury of left elbow', 'DIRECT RX', 0, 0, 0, '144-7501-8484-301', 'Deckow Inc', '', 8, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(17, 1, 2, 12, '0', 0, 0, 'Acute embolism and thrombosis of tibial vein', 'NCS HealthCare of KY, Inc dba Vangard Labs', 0, 0, 0, '792-5223-2352-032', 'Shanahan LLC', '', 4, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(18, 1, 9, 45, '0', 0, 0, 'Oth injuries of pharynx and cervical esophagus, init encntr', 'Rite Aid', 0, 0, 0, '211-0552-2190-904', 'Doyle-Jerde', '', 4, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(19, 1, 14, 26, '0', 0, 0, 'Puncture wound with foreign body, right hip, init encntr', 'Unichem Pharmaceuticals (USA), Inc.', 0, 0, 0, '047-1174-9996-703', 'Bergnaum-Runte', '', 6, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(20, 1, 3, 1, '0', 0, 0, 'Person injured wh brd/alit from amblnc/fire eng, init', 'AstraZeneca Pharmaceuticals LP', 0, 0, 0, '292-2035-3592-041', 'Jaskolski-Dickens', '', 9, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(21, 1, 10, 16, '0', 0, 0, 'Unspecified child maltreatment, confirmed, subs encntr', 'Aidarex Pharmaceuticals LLC', 0, 0, 0, '346-5628-1234-916', 'Padberg-Tremblay', '', 7, '2020-06-09 06:48:14', '2020-06-13 01:21:43', 1),
(23, 1, 1, 28, '0', 0, 0, 'Umbilical polyp of newborn', 'Apace Packaging', 0, 0, 0, '126-3316-4142-252', 'Lockman-Huels', '', 8, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(24, 1, 8, 6, '0', 0, 0, 'Lumbar spina bifida with hydrocephalus', 'Western Family Foods Inc', 0, 0, 0, '562-0364-4924-402', 'Prosacco Group', '', 2, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(25, 1, 1, 48, '0', 0, 0, 'Unspecified disorder of right middle ear and mastoid', 'Nelco Laboratories, Inc.', 0, 0, 0, '141-0112-7442-487', 'Heidenreich Inc', '', 7, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(26, 1, 9, 12, '0', 0, 0, 'Vestibular neuronitis', 'Mylan Pharmaceuticals Inc.', 0, 0, 0, '276-7431-3657-666', 'Erdman-Bruen', '', 5, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(27, 1, 3, 20, '0', 0, 0, 'Agents primarily affecting the cardiovascular system', 'REMEDYREPACK INC.', 0, 0, 0, '456-2698-1719-523', 'Tremblay Inc', '', 5, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(28, 1, 3, 40, '0', 0, 0, 'Nondisp transverse fx shaft of l femr, 7thJ', 'A-S Medication Solutions LLC', 0, 0, 0, '966-6780-4486-348', 'Renner-McKenzie', '', 8, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(29, 1, 13, 2, '0', 0, 0, 'Neoplasm of uncertain behavior of brain, infratentorial', 'Hyland\'s', 0, 0, 0, '190-0285-1093-784', 'Strosin, Becker and Schuster', '', 7, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(30, 1, 6, 7, '0', 0, 0, 'Other kyphosis, thoracic region', 'Roberts Oxygen Company, Inc.', 0, 0, 0, '584-3948-4565-204', 'Leffler, Schumm and Lebsack', '', 8, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(31, 1, 9, 27, '0', 0, 0, 'Stenosis of left lacrimal canaliculi', 'Gurwitch Products, L.L.C.', 0, 0, 0, '879-5968-6507-954', 'Boehm-Franecki', '', 10, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(32, 1, 13, 47, '0', 0, 0, 'Unsp inj unsp blood vess at ank/ft level, right leg, subs', 'Lupin Pharmaceuticals, Inc.', 0, 0, 0, '236-6028-4481-240', 'Weber, Kemmer and Jacobs', '', 5, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(33, 1, 8, 25, '0', 0, 0, 'Acute megakaryoblastic leukemia', 'Newton Laboratories, Inc.', 0, 0, 0, '293-4920-3279-148', 'Auer-Beer', '', 2, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(34, 1, 19, 3, '0', 0, 0, 'Inj extn/abdr musc/fasc/tend of r thm at forarm lv, init', 'Gurwitch Products, LLC', 0, 0, 0, '446-5193-2413-707', 'Kling Group', '', 6, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(35, 1, 4, 23, '0', 0, 0, 'Mononeuropathies of lower limb', 'REMEDYREPACK INC.', 0, 0, 0, '607-6797-6628-460', 'O\'Hara-Donnelly', '', 6, '2020-06-09 06:48:15', '2020-06-13 02:37:13', 0),
(36, 1, 1, 8, '0', 0, 0, 'Sledder colliding with stationary object, initial encounter', 'Paddock Laboratories, LLC', 0, 0, 0, '965-4185-3480-799', 'Feil Inc', '', 5, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(37, 1, 3, 48, '0', 0, 0, 'Lacerat unsp blood vessel at forarm lv, right arm, init', 'Perrigo New York Inc', 0, 0, 0, '779-4038-4329-378', 'Metz, Haley and Zieme', '', 1, '2020-06-09 06:48:15', '2020-06-13 01:21:43', 1),
(38, 10, 2, 16, '0', 0, 0, 'Maternal care for prolapse of gravid uterus', 'Proficient Rx LP', 0, 0, 0, '371-6586-6312-859', 'Mante-Graham', '', 6, '2020-06-09 06:48:15', '2020-06-13 01:39:02', 1),
(39, 9, 14, 46, '0', 0, 0, 'Toxic effect of gases, fumes and vapors, undet, sequela', 'Dr. Reddy\'s Laboratories Limited', 0, 0, 0, '201-3708-6875-647', 'Hartmann, Trantow and Pouros', '', 9, '2020-06-09 06:48:15', '2020-06-13 01:38:55', 1),
(40, 8, 19, 31, '0', 0, 0, 'Coma scale, best verbal response, none, admit', 'REMEDYREPACK INC.', 0, 0, 0, '819-1909-4058-061', 'Bogan LLC', '', 3, '2020-06-09 06:48:15', '2020-06-13 01:38:51', 1),
(41, 7, 17, 47, '0', 0, 0, 'Matern care for disproprtn d/t outlet contrctn of pelv, fts3', 'ARMY AND AIR FORCE EXCHANGE SERVICE', 0, 0, 0, '622-4372-1300-247', 'Schmidt, Kulas and Wehner', '', 7, '2020-06-09 06:48:15', '2020-06-13 01:38:48', 1),
(42, 6, 19, 8, '0', 0, 0, 'Serous choroidal detachment, left eye', 'State of Florida DOH Central Pharmacy', 0, 0, 0, '415-7522-1159-997', 'Goldner-Torp', '', 7, '2020-06-09 06:48:15', '2020-06-13 01:38:46', 1),
(43, 5, 1, 49, '0', 0, 0, 'Tox eff of unsp halgn deriv of aromat hydrocrb, undet, sqla', 'Rite Aid', 0, 0, 0, '006-6212-4187-691', 'Steuber, Luettgen and Bode', '', 8, '2020-06-09 06:48:16', '2020-06-13 01:38:44', 1),
(44, 4, 10, 50, '0', 0, 0, 'Open bite of unspecified forearm, sequela', 'TONYMOLY CO., LTD.', 0, 0, 0, '877-7388-0824-208', 'Torphy, Prosacco and Quigley', '', 10, '2020-06-09 06:48:16', '2020-06-13 01:38:41', 1),
(45, 3, 7, 49, '0', 0, 0, 'Maternal care for hydrops fetalis, first trimester, oth', 'Nelco Laboratories, Inc.', 0, 0, 0, '072-5839-8018-949', 'Bosco-Bradtke', '', 3, '2020-06-09 06:48:16', '2020-06-13 01:38:39', 1),
(46, 2, 5, 17, '0', 0, 0, 'Strike/struck by driver side automobile airbag, sequela', 'TONYMOLY CO., LTD.', 0, 0, 0, '740-9740-7205-134', 'Gorczany Group', '', 4, '2020-06-09 06:48:16', '2020-06-13 01:38:36', 1),
(47, 1, 17, 19, '0', 0, 0, 'Congenital malformations of pulmonary and tricuspid valves', 'Roxane Laboratories, Inc', 0, 0, 0, '666-4352-4005-852', 'Rau-McGlynn', '', 6, '2020-06-09 06:48:16', '2020-06-13 05:10:24', 1),
(51, 52, 9, 3, '0', 0, 0, '', '', 0, 0, 0, '', '', '', 1, '2020-06-13 05:46:10', '2020-06-13 05:46:10', 1),
(52, 51, 21, 105, '0', 123, 124, '124', '124', 0, 123, 123, '124', '124', '123', 1, '2020-06-13 05:46:52', '2020-06-13 05:46:52', 1),
(53, 51, 21, 105, 'finance', 123, 124, '124', '1', 124, 123, 123, '124', '124', '123', 1, '2020-06-13 05:48:43', '2020-06-18 03:21:47', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACCOUNTS`
--
ALTER TABLE `ACCOUNTS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `BIKE_COLORS`
--
ALTER TABLE `BIKE_COLORS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `BIKE_MODELS`
--
ALTER TABLE `BIKE_MODELS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `COLLECTION_LIST`
--
ALTER TABLE `COLLECTION_LIST`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CUSTOMER_MASTER`
--
ALTER TABLE `CUSTOMER_MASTER`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `INVOICES`
--
ALTER TABLE `INVOICES`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `RECEIPTS`
--
ALTER TABLE `RECEIPTS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ACCOUNTS`
--
ALTER TABLE `ACCOUNTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `BIKE_COLORS`
--
ALTER TABLE `BIKE_COLORS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `BIKE_MODELS`
--
ALTER TABLE `BIKE_MODELS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `COLLECTION_LIST`
--
ALTER TABLE `COLLECTION_LIST`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `CUSTOMER_MASTER`
--
ALTER TABLE `CUSTOMER_MASTER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `INVOICES`
--
ALTER TABLE `INVOICES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `RECEIPTS`
--
ALTER TABLE `RECEIPTS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
