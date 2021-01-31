-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 09:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `genres` varchar(200) NOT NULL,
  `director` varchar(1000) NOT NULL,
  `writer` varchar(1000) NOT NULL,
  `productioncmp` varchar(2000) NOT NULL,
  `stars` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `genres`, `director`, `writer`, `productioncmp`, `stars`, `date`, `image`, `time`) VALUES
(1, 'Léon', 'Mathilda, a 12-year-old girl, is reluctantly taken in by Léon, a professional assassin, after her family is murdered. An unusual relationship forms as she becomes his protégée and learns the assassin\'s trade.', ' Action, Crime, Drama', 'Luc Bessonn', 'Luc Besson', 'Hollywood', ' Jean Reno, Gary Oldman, Natalie Portman', '0000-00-00', 'slike/leon.jpg', '00:00:01'),
(2, 'Intouchables', 'After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver.', 'Biography, Comedy, Drama', 'Olivier Nakache, Éric Toledano', ' Olivier Nakache, Philippe Pozzo di Borgo (adapted from his autobiographical tale Le Second Souffle) ', 'Hollywood', 'François Cluzet, Omar Sy, Anne Le Ny', '2011-05-24', 'slike/into.jpg', '01:54:52'),
(0, 'Forrest Gump ', 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate and other historical events unfold through the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.', 'drama', ' Robert Zemeckis', ' Winston Groom (novel), Eric Roth (screenplay)', 'Hollywood', 'Tom Hanks, Robin Wright, Gary Sinise', '1994-07-14', 'forrest.jpg', '02:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'prezime', 'admin', 'admin@gmail.com', 'admin', 1),
(4, 'danica', 'stefanovic', 'danica', 'danica@gmail.com', 'danica', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
