# Library
This is a Website for a library.

Database:
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 07:40 AM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(7) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `available` varchar(50) NOT NULL DEFAULT 'Available',
  `section` varchar(3) NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `author`, `genre`, `publisher`, `available`, `section`, `price`) VALUES
(3, 'Charlie and The Chocolate Factory', 'Roald Dahl', 'Fantasy', '	George Allen & Unwin (original) Puffin Books', 'Not Available', '2A1', 4),
(4, 'x', 'xx', 'x', 'x', 'Not Available', 'x', 10),
(5, 'x', 'xx', 'x', 'x', 'Available', 'x', 7),
(6, 'The War That Saved My Life', 'Kimberly Brubaker Bradley', 'Historic Fiction', 'Dial Books for Young Readers', 'Available', '2A1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `user_id` int(7) NOT NULL,
  `book_id` int(7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`user_id`, `book_id`, `date`) VALUES
(1, 3, '2023-01-10'),
(1, 4, '2023-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(7) NOT NULL,
  `password` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `paidormanager` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `first_name`, `last_name`, `phone`, `email`, `address`, `paidormanager`) VALUES
(1, 'arav$2011', 'Arav', 'Jain', '91+9953100018', 'arav04jain@gmail.com', 'E-59, Greater Kailash Enclave-2, Delhi', 'Management'),
(2, 'gunjanag04', 'Gunjan', 'Jain', '91+9999501310', 'gunjanjainca@gmail.com', 'E-59, Greater Kailash Enclave-2, Delhi', 'Not Paid'),
(3, 'RAJAN30580', 'Rajan', 'Jain', '91+9811556079', 'rajan@jsi.in', 'E-59, Greater Kailash Enclave-2, Delhi', 'Not Paid'),
(4, '2', ' 3i', ' erhi', '9999999999', 'random@gmail.com', 'xyz', 'Paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD UNIQUE KEY `book_id` (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD UNIQUE KEY `book_id` (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
