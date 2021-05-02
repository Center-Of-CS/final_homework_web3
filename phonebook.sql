-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 07:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `fname`, `email`, `phone`, `address`, `date`, `note`) VALUES
(11, 'فرید ', 'کریمی  جان ', 'fridaahmad@gmail.com', '۰۸۹۹۳۸۳۸', 'هرات ', '-465-06-03', 'for test '),
(12, 'فرید احمد ', 'کریمی ', 'fridaahmad@gmail.com', '۰۸۹۹۳۸۳۸', 'هرات ', '1400-02-05', 'for test '),
(13, 'وحید ندیم ', 'وحید ', 'هرات ', '۰۳۹۹۳۹۳۹', 'هرات ', '1400-02-05', 'بخق فثسف '),
(14, 'وحید ندیم ', 'وحید ', 'هرات ', '۰۳۹۹۳۹۳۹', 'هرات ', '1400-02-05', 'بخق فثسف '),
(15, 'وحید ندیم ', 'وحید ', 'هرات ', '۰۳۹۹۳۹۳۹', 'هرات ', '1400-02-05', 'بخق فثسف '),
(16, 'وحید ندیم ', 'وحید ', 'هرات ', '۰۳۹۹۳۹۳۹', 'هرات ', '1400-02-05', 'بخق فثسف '),
(17, 'وحید ندیم ', 'وحید ', 'هرات ', '۰۳۹۹۳۹۳۹', 'هرات ', '1400-02-05', 'بخق فثسف '),
(18, 'slkdjf ', 'lkjsd ;k', 'j;lskdjf ', ';lkjsd;lfkj', ' ;lksjdf lkj', '1400-02-05', 's;lkdjf ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(2500) NOT NULL,
  `photo` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(355) NOT NULL,
  `date` varchar(50) NOT NULL,
  `note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `photo`, `phone`, `email`, `username`, `password`, `date`, `note`) VALUES
(1, 'حمید رحیمی', '../upload/user/1/1_photo.jpg', '0799334455', 'Hamid@gmail.com', 'Hamid@gmail.com', '12345', '1399-05-06', 'برای امتحان است'),
(2, ';vdl', '../upload/user/1/1_photo.jpg', '039398', 'Hamid@gmail.com', 'Hamid@gmail.com', '12345', '1399-05-06', 'lkjsdlfkj'),
(3, 'احمد', '../upload/user/2/2_photo.jpg', '0799223344', 'Ahmad@gmial.com', 'Ahmad@gmial.com', '1234', '1399-05-06', 'this is for test'),
(4, 'حمید رحیمی', '../upload/user/3/3_photo.jpg', '۰۷۹۹۹۹۹۹', 'hamid@gmail.com', 'kaly', '12345', '1399-05-23', 'این یک یوز است'),
(5, 'احمد', '../upload/user/4/4_photo.jpg', '07992828', 'ahmid@gmial.com', 'ahmid123', '', '1399-05-26', 'برای امتحان اتس'),
(6, 'sdlkfj', '../upload/user/5/5_photo.jpg', '03030303', 'hamid@gmail.com', 'karimi23', '$2y$10$tabffJLFQP7OoZRyTsnpoOtDdSrLup/V.MhZnDccY9yikuZSYkR.K', '1399-05-26', ''),
(7, 'کشمسنیتب', '../upload/user/6/6_photo.PNG', '0393939', 'laskjdf@gmil.com', 'ksdjlkdjf', '$2y$10$/Dr29hPNltCT5e0myVvEDe6cVBuKkAfm0GUHUzsV.hPA8F9WUGqaW', '1399-05-26', 'skldjflkj'),
(8, 'احمد کریمی edit', '../upload/user/8/8_photo.jpg', '08383883', 'ahmid@gmail.com', 'Hamid@gmail.com', '12345', '1399-06-21', 'برای امتحان است edit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
