-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 08:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `text`, `image`) VALUES
(10, 'We believe that thought-provoking conversation can be a catalyst for change. Through our transdisciplinary Convenings and Global Digital Library, we harness the power of collective wisdom to imagine a', 'pexels-perfecto-capucine-1329571.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(4, 'Sheik Salauddin Biswas', 'sheik@gmail.com', '0153454366', '123456'),
(5, 'Rabby', 'Rabby@gmail.com', '018612111983', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `author_name` varchar(200) NOT NULL,
  `catagory` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author_name`, `catagory`, `details`, `file`, `image`) VALUES
(1, 'web developer', 'sheik salauddin', 'development', 'this is a development book ', '', ''),
(2, 'web developer', 'sheik salauddin', 'development', 'this is a development book ', '', ''),
(3, 'web developer', 'sheik salauddin', 'development', 'vltvyufyu', 'RAHUL COVER PAGE.pdf', 'WhatsApp Image 2022-11-26 at 10.13.05 PM.jpeg'),
(4, 'web developer', 'sheik salauddin', 'development', 'vltvyufyu', 'RAHUL COVER PAGE.pdf', 'WhatsApp Image 2022-11-26 at 10.13.05 PM.jpeg'),
(5, 'web developer', 'sheik salauddin', 'development', 'kkgck88r6c8rck u', 'RAHUL COVER PAGE.pdf', 'pngwing.com.png'),
(6, 'web developer', 'sheik salauddin', 'development', 'kkgck88r6c8rck u', 'RAHUL COVER PAGE.pdf', 'pngwing.com.png');

-- --------------------------------------------------------

--
-- Table structure for table `founder`
--

CREATE TABLE `founder` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `founder`
--

INSERT INTO `founder` (`id`, `name`, `position`, `details`, `image`) VALUES
(1, 'traveler', 'no', 'jo', ''),
(2, 'Ayushi', 'no', 'jo', 'pexels-marta-dzedyshko-2067569.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `head`, `title`, `text`, `image`) VALUES
(1, 'Welcome to national library', 'Something we dont know ', 'hikxjpfdkb bndioiszijbh jknbkxlnjb lkbnklfgizjb', 'WhatsApp Image 2022-12-09 at 21.15.29.jpg'),
(2, 'Welcome to national library', 'hgjkfygkk', 'gfkkfgkldfhk', 'MANDALA_301-011 [Converted].jpg'),
(3, 'Well To National Library', 'bkvj //  m,. m/', ',mjkb;no', 'slider 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `letest_books`
--

CREATE TABLE `letest_books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `author_name` varchar(200) NOT NULL,
  `catagory` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `letest_books`
--

INSERT INTO `letest_books` (`id`, `book_name`, `author_name`, `catagory`, `details`, `image`, `file`) VALUES
(3, '0', '0', '0', '0', '0', '0'),
(4, 'web developer', 'sheik salauddin', 'development', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founder`
--
ALTER TABLE `founder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letest_books`
--
ALTER TABLE `letest_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `founder`
--
ALTER TABLE `founder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `letest_books`
--
ALTER TABLE `letest_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
