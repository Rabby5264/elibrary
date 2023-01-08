-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 09:05 AM
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
  `text` varchar(2000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `text`, `image`) VALUES
(14, 'Open Library is an open project:  the data are open, the documentation is open, and we welcome your contribution. We have a small team of fantastic programmers who have accomplished', 'to-learn-4226965.jpg');

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
(6, 'Rabby', 'Rabby@gmail.com', '018612111983', '123456');

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
(7, 'Samudrer Daak', 'Zahir Raihan ', 'Bangla Novel', 'Ar Koto Din by Zahir Raihan  is one of popular Bengali Books which is written by Zahir Raihan. This is another popular novel of Zahir Raihan. Zahir Raihan was famous bengali author, story writer and a', 'samudrer-daak-by-ahsan-habib.pdf', 'samudrer-daak-by-ahsan-habib copy.jpg'),
(8, 'Moru Mushiker Upottoka ', 'Al Mahmud', 'Bangla Novel', 'Moru Mushiker Upottoka by Al Mahmud is Popualar Bangla Book and Autobiography of Poet Al Mahmud.  Al Mahmud is Bangladeshi poet, journalist and writer. His full name is Mir Abdus Shukur Al Mahmud and ', 'moru mshiker upottoka pdfbohi.blogspot.com.pdf', 'Moru Mushiker Upottoka by Al Mahmud - PDF Bangla Books.png'),
(9, 'Ma', 'Anisul Hoque', 'Bangla Novel', 'Ma by Anisul Haque is popular bengali novel which is written by Anisul Hoque. The book is a story of a mother who send her only son to freedom fight for the country in 1971. The book was first publish', 'MAA.pdf', 'Ma By Anisul Haque.jpg'),
(10, 'Ke Kotha Koi', 'Humayun Ahmed', 'Bangla Novel', 'Ke Kotha Koi by Humayun Ahmed  is a popular Bengali novel of Humanyun Ahmed. Humayun Ahmed is most popular Bengali writer of Bangladesh and ex lecturer of Dhaka University  even he is recently dead. H', 'Ke Kotha Koi.pdf', 'Ke Kotha Koy by Humayun Ahmed PDF Bangla Books.jpg'),
(11, 'Jadukarer Mrityu', 'Humayun Azad', 'Bangla Novel', 'Jadukarer Mrityu by Humayun Azad is Popular Bengali Book which is written by  Humayun Azad. The book is another popular writings of Humayun Azand  Humayun Azad was Bangladeshi Writer, Poet and Scholar', 'Jadukarer Mrityu - Humayun Azad [Boighar.com].pdf', 'Jadukarer Mrityu by Humayun Azad.jpg'),
(12, 'Oporbela', 'Imdadul Haque Milon', 'Bangla Novel', 'Oporbela by Imdadul Haque Milon is a popular Bengali Book which is written by Imdadul Hoque Milon. The Book is a another popular novel of Imdadul Haque Milon. Imdadul Hoque Milan is a famous Banglades', 'Oporbela - Imdadul Haque Milon [Boighar.com].pdf', 'Oporbela by Imdadul Haque Milon - Bengali Novel PDF.jpg'),
(14, 'Bela Abela Kalbela', 'Jibanananda Das', ' Novel', 'Bela Abela Kalbela by Jibanananda Das is one of most popular Bengali Book and one of popular poetry books of  Jibanananda Das. Jibanananda Das is popular Bengali poet, writer and novelist. He introduc', 'Bela obela kalbela boidownload.com.pdf', 'Bela Abela Kalbela by Jibanananda Das - Bangla Kobita PDF Books.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `name`) VALUES
(1, 'Bangla Nobel'),
(3, 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'traveler', 'Rabby@gmail.com', 'acbiisd', 'dblfyi hspf9wghpnwoa  fh npf9'),
(2, 'traveler', 'Rabby@gmail.com', 'acbiisd', 'dblfyi hspf9wghpnwoa  fh npf9');

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
(7, 'Wellcome To National Library', 'Learn Everything In Our Books', '“Libraries change lives for the better.”  – Sidney Sheldon', 'books-g998abe3dd_1920.jpg'),
(8, 'Wellcome To National Library', 'Refresh Your Mind With books', '“Paradise will be a kind of library.”  – Jorge Luis Borges', 'to-learn-977545.jpg'),
(9, 'Well To National Library', 'Get The Right Book For You', 'Book are not only to entertain us but also inspire us .', 'library-489740.jpg'),
(11, 'Wellcome To National Library', 'A Great Place To Be Standard', 'i have always imagined that paradise will be a kind of a library jorge luis borges', 'silhouette-1793934.png');

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
(18, ' Ar Koto Din ', 'Zahir Raihan', 'Bangla Novel', '\r\n\r\n\r\nAr Koto Din by Zahir Raihan  is one of popular Bengali Books which is written by Zahir Raihan. This is another popular novel of Zahir Raihan. Zahir Raihan was famous bengali author, story writer', 'Ar Koto Din by Zahir Raihan PDF Download.jpg', 'AR KOTODIN .pdf'),
(20, 'Mrittu Khuda', 'Kazi Nazrul Islam', 'Bangla Novel', 'Mrittu Khuda By Kazi Nazrul Islam is a popular Bangla book and  collection of  Short Stories which is written by Kazi Nazul Islam.  Shuli Mala  is one of the most popular books of Kazi Nazrul Islam. K', 'Mrittu Khuda By Kazi Nazrul Islam PDF Bangla Novel.jpg', '129. Mrittu Khuda By Kazi Nazrul Islam.pdf'),
(21, 'Shesher Kobita', 'Rabindranath Tagore', 'Bangla Novel', 'Shesher Kobita is a popular novel of Rabindranath Tagore. Rabindranath Tagore is Bengali Writer, poet, Song Compser and Nobel owner for literature. He was born on 7 May 1861 in Kolkata, India and Died', 'Shesher Kobita By Rabindranath Tagore - PDF Bangla Novel.jpg', 'Shesher Kobita by Rabindranath Tagore.pdf'),
(22, 'Andhare Alo', 'Saratchandra Chattopadhyay', 'Bangla Novel', 'Shesher Kobita is a popular novel of Rabindranath Tagore. Rabindranath Tagore is Bengali Writer, poet, Song Compser and Nobel owner for literature. He was born on 7 May 1861 in Kolkata, India and Died', 'Andhare Alo by Saratchandra Chattopadhyay - Bangla Popular Novel Collection PDF.jpg', 'আঁধারে আলো - শরৎচন্দ্র চট্টোপাধ্যায়.pdf'),
(23, 'Deshe Bideshe', 'Syed Mujtoba Ali', 'Bangla Novel', 'Deshe Bideshe  is collection of Travel Stories which is written by Syed Mujtoba Ali. It is most poular book of the writer.  Syed Mujtoba Ali is a popular Bengali writer of 20th century. He was born on', 'desh bideshe by sayed mostoba ali.jpg', '58. Deshe Bideshe by Syed Mustaba Ali.pdf'),
(24, 'Brommoputrer Pare', 'Taslima Nasrin', 'Bangla Novel', 'Brommoputrer Pare by Taslima Nasrin is  a short novel and popular book of exile writer, Taslima Nasrin which is first published in 2013 from Agami Prokashoni, Dhaka. Taslima Nasrin is Bangladeshi Nove', 'brommoputrer-pare-by-taslima-nasrin.jpg', 'Brommoputrer Pare - Taslima Nasrin.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`) VALUES
(3, 'Ayushi', '123456', 'ayushi@gmail.com'),
(4, 'rabby', '123456', 'Rabby@gmail.com');

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
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `founder`
--
ALTER TABLE `founder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `letest_books`
--
ALTER TABLE `letest_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
