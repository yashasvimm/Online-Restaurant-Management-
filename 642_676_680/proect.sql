-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2017 at 01:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'yashi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `date` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `people` varchar(300) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `name`, `date`, `email`, `time`, `phone`, `people`, `message`) VALUES
(1, 'hg', '21/12/2018', 'q@gmail.com', '12:39', '1234567890', 'Yashasvi', 'hggh');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `subtype` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` varchar(6) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `type`, `subtype`, `title`, `quantity`, `image`, `description`, `price`, `thumbnails`, `link`) VALUES
(15, 'dinner', 'veg', 'Aalu Paratha', '2', '', 'Indian Roti', '40', '/assests/thumbnails/aaluparatha.jpeg', '/assets/postimage/aaluparatha.jpeg'),
(16, 'lunch', 'veg', 'Bhindi Masala', '1', '', 'Indian Vegetable ', '60', '/assests/thumbnails/bhindimasala.jpeg', '/assets/postimage/bhindimasala.jpeg'),
(17, 'lunch', 'nonveg', 'Veg Biryani', '1', '', 'Veg Biryani', '200', '/assests/thumbnails/biryani.jpeg', '/assets/postimage/biryani.jpeg'),
(18, 'lunch', 'nonveg', 'Chicken Biryani', '1', '', 'Indian Food Chicken Biryani', '140', '/assests/thumbnails/chickenbiryani.jpeg', '/assets/postimage/chickenbiryani.jpeg'),
(19, 'breakfast', 'veg', 'Chicken Rice', '1', '', 'Its an indian food.', '100', '/assests/thumbnails/chicenrice.jpeg', '/assets/postimage/chicenrice.jpeg'),
(20, 'breakfast', 'veg', 'Fried Chicken', '1', '', 'it is an indian food', '100', '/assests/thumbnails/chickenfried.jpeg', '/assets/postimage/chickenfried.jpeg'),
(21, 'breakfast', 'veg', 'Dahi Bade', '50', '', 'Its an indian food.', '50', '/assests/thumbnails/dahibade.jpeg', '/assets/postimage/dahibade.jpeg'),
(22, 'breakfast', 'veg', 'Fish', '1', '', 'Its an indian food.', '50', '/assests/thumbnails/fish.jpeg', '/assets/postimage/fish.jpeg'),
(23, 'breakfast', 'nonveg', 'SHAHI THALI', '1', '', 'it is an indian food', '500', '/assests/thumbnails/images.jpeg', '/assets/postimage/images.jpeg'),
(24, 'lunch', 'nonveg', 'MASALA DOSA', '1', '', 'Its an indian food.', '60', '/assests/thumbnails/masaladosa.jpeg', '/assets/postimage/masaladosa.jpeg'),
(25, 'lunch', 'veg', 'MATAR PANEER ', '1', '', 'Its an indian food.', '150', '/assests/thumbnails/matarpaneerwithroti.jpeg', '/assets/postimage/matarpaneerwithroti.jpeg'),
(26, 'breakfast', 'veg', 'NASHTA SPECIAL', '1', '', 'Its an indian food.', '30', '/assests/thumbnails/nasta.jpeg', '/assets/postimage/nasta.jpeg'),
(27, 'breakfast', 'veg', 'NORTH THALI', '1', '', 'Its an indian food.', '150', '/assests/thumbnails/norththali.jpeg', '/assets/postimage/norththali.jpeg'),
(28, 'breakfast', 'veg', 'PANEER HANDI', '1', '', 'Its an indian food.', '150', '/assests/thumbnails/paneerhandi.jpeg', '/assets/postimage/paneerhandi.jpeg'),
(29, 'breakfast', 'veg', 'OMELLETE', '1', '', 'Its an indian food.', '25', '/assests/thumbnails/omlette.jpeg', '/assets/postimage/omlette.jpeg'),
(30, 'breakfast', 'veg', 'RICE', '1', '', 'Its an indian food.', '40', '/assests/thumbnails/rice.jpeg', '/assets/postimage/rice.jpeg'),
(31, 'breakfast', 'veg', 'SAHI RICE', '1', '', 'Its an indian food.', '50', '/assests/thumbnails/sahirice.jpeg', '/assets/postimage/sahirice.jpeg'),
(32, 'lunch', 'veg', 'SHAHI THALI', '1', '', 'Its an indian food.', '100', '/assests/thumbnails/shahithali.jpeg', '/assets/postimage/shahithali.jpeg'),
(33, 'lunch', 'veg', 'SOUTH THALI', '1', '', 'Its an indian food.', '50', '/assests/thumbnails/souththali.jpeg', '/assets/postimage/souththali.jpeg'),
(34, 'lunch', 'veg', 'TANDOORI CHICKEN', '1', '', 'Its an indian food.', '200', '/assests/thumbnails/tandoorichicken.jpeg', '/assets/postimage/tandoorichicken.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
