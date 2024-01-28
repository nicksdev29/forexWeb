-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 08:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samfxt`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_name` varchar(248) NOT NULL,
  `banner_place` enum('HOME_SLIDER','ABOUT_HEADER','TRAVELS_HEADER','FOREX_HEADER','SERVICES_HEADER','CONTACT_HEADER') NOT NULL,
  `visibility` enum('VISIBLE','HIDDEN') NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_name`, `banner_place`, `visibility`, `content`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'testing', 'HOME_SLIDER', 'VISIBLE', '<style>* { box-sizing: border-box; } body {margin: 0;}.gjs-row{display:flex;justify-content:flex-start;align-items:stretch;flex-wrap:nowrap;padding:10px;}#iw2z{height:348px;border:0 solid black;background-repeat:repeat;background-position:center center;background-attachment:scroll;background-size:cover;background-image:url(\'http://www.samfxt.local/uploads/assets/banner-img/pexels-pixabay-60597.jpg\');}#iijf{padding:10px;}#il6q{top:20px;}@media (max-width: 768px){.gjs-row{flex-wrap:wrap;}}</style></br><div id=\"iw2z\" class=\"gjs-row\"></div><span id=\"il6q\">dklsdkjsl skjdhksdj sdj</span><div id=\"iijf\"><b></b></div>', '2024-01-23 02:08:45', NULL, 1),
(2, 'testing', 'HOME_SLIDER', 'VISIBLE', '<style>* { box-sizing: border-box; } body {margin: 0;}.gjs-row{display:flex;justify-content:flex-start;align-items:stretch;flex-wrap:nowrap;padding:10px;}#iw2z{height:348px;border:0 solid black;background-repeat:repeat;background-position:center center;background-attachment:scroll;background-size:cover;background-image:url(\'http://www.samfxt.local/uploads/assets/banner-img/pexels-pixabay-60597.jpg\');}#iijf{padding:10px;}#il6q{top:20px;}@media (max-width: 768px){.gjs-row{flex-wrap:wrap;}}</style></br><div id=\"iw2z\" class=\"gjs-row\"></div><span id=\"il6q\">dklsdkjsl skjdhksdj sdj</span><div id=\"iijf\"><b></b></div>', '2024-01-23 02:11:37', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
