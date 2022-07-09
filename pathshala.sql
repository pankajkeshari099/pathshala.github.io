-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 10:36 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(50) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bauthor` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `btype` varchar(255) NOT NULL,
  `bdetail` varchar(255) NOT NULL,
  `bimage` text NOT NULL,
  `bbook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `bname`, `bauthor`, `bdate`, `btype`, `bdetail`, `bimage`, `bbook`) VALUES
(1, 'Alphabet', ' Adrija Ghosh', '2012-06-30', ' Education', 'Kids Book', 'abcd.jpg', 'Alphabet book.pdf'),
(2, 'Bhagvat Gita', 'Ved Vyass', '1000-06-29', ' Holy book', 'Motivational', 'gita.png', 'Bhagavad-gita (hindi).pdf'),
(3, ' The Evolution of General Administrative Law ', 'Law Author Karl Heinz Ladeur', '2010-06-16', ' Education', 'Law Book', 'law.png', '2. The Evolution of General Administrative Law and the Emergence of Postmodern Administrative Law Author Karl Heinz Ladeur.pdf'),
(4, 'PunchTrant Kahani', 'Vishnu Sharma', '2022-06-29', ' Education', 'Story BooK', 'punchtranta.png', 'instapdf.in-panchtantra-ki-kahaniyan-book-615.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `bookapplied`
--

CREATE TABLE `bookapplied` (
  `id` int(11) NOT NULL,
  `bid` int(10) NOT NULL,
  `useremail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `msg`) VALUES
(1, 'pankaj', 'pankajkeshari099@gmail.com', 'check message is send properly or not'),
(2, 'priya', 'mauryapriya0018@gmail.com', 'check message is send or not'),
(3, 'shiva', 'shiva123@gmail.com', 'check message');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(80) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `usertype` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `password`, `address`, `gender`, `usertype`) VALUES
(1, 'pankaj', 'keshari', 'pankaj123@gmail.com', '123456789', 'Varanasi', 'male', 'user'),
(2, 'admin', 'kumar', 'admin123@gmail.com', '123456789', 'Varanasi', 'gender', 'admin'),
(3, 'shiva', 'maurya', 'shiva123@gmail.com', '123456789', 'Kandawa', 'male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bookapplied`
--
ALTER TABLE `bookapplied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bookapplied`
--
ALTER TABLE `bookapplied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
