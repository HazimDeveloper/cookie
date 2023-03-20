-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 01:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookie_stall`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookie`
--

CREATE TABLE `cookie` (
  `id_cookie` int(11) NOT NULL,
  `name_cookie` varchar(255) NOT NULL,
  `price_cookie` varchar(255) NOT NULL,
  `detail_cookie` varchar(255) NOT NULL,
  `img_cookie` varchar(255) NOT NULL,
  `ingredient_cookie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookie`
--

INSERT INTO `cookie` (`id_cookie`, `name_cookie`, `price_cookie`, `detail_cookie`, `img_cookie`, `ingredient_cookie`) VALUES
(1, 'Chocolate Crunchy', '10', 'Have More Chocolate And Crunchy When Eat That', 'cookie.png', 'Chocolate 5g'),
(2, 'Vanilaa Nyum', '7', 'This Cookie got vanilla melting in inside of the cookie', 'cookie_1.png', 'Vanilla Ice Cream 2 Pieces'),
(3, 'Dark Chocolate', '15', 'This cookie is highly recomended', 'cookie_2.png', 'Chocolate 2 kg'),
(4, 'Cookie Buttermilk', '17', 'This Cookie was made by love', 'cookie_1.png', '1kg Butter\r\n2kg flour');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'Muhammad Hakas', 'hazim4128@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cookie`
--
ALTER TABLE `cookie`
  ADD PRIMARY KEY (`id_cookie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cookie`
--
ALTER TABLE `cookie`
  MODIFY `id_cookie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
