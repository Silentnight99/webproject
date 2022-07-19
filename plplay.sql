-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 04:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plplay`
--
CREATE DATABASE IF NOT EXISTS `plplay` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `plplay`;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `ten` text NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `theloai` text NOT NULL,
  `ungdung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `ten`, `hinhanh`, `theloai`, `ungdung`) VALUES
(3, 'Pikachu', 'pikachu.png', 'Games', 'game1.rar'),
(4, 'Bida', 'bia.png', 'Games', 'game2.rar'),
(5, 'Cut the rope', 'rope.png', 'Games', 'game3.rar'),
(6, 'Temple Run', 'run.png', 'Games', 'game4.rar'),
(7, 'Dice or Die', 'gx.png', 'Games', 'game5.rar'),
(8, 'Plants And Zombies', 'zombie.png', 'Games', 'game6.rar'),
(9, 'Kids Up', 'KidsUP.png', 'Education', 'education1.rar'),
(11, 'Avenger: End Games', 'bietdoisieuanhhunghoiket.jpg', 'Movies', 'movie1.rar'),
(12, 'Darker', 'darker.png', 'Books', 'book1.rar'),
(13, 'Venom', 'quaivatvenom.jpg', 'Movies', 'movie2.rar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `tentaikhoan` text NOT NULL,
  `matkhau` text NOT NULL,
  `hoten` text NOT NULL,
  `email` text NOT NULL,
  `sdt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tentaikhoan`, `matkhau`, `hoten`, `email`, `sdt`) VALUES
(4, 'trinhduy', '123', 'Trịnh Duy', 'trinhduy@gmail.com', '0912765234'),
(5, 'longtran', '1234', 'Trần Nguyễn Hoàng Long', 'manga123451150@gmail.com', '0938574321');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`username`, `pass`) VALUES
('nguyenhongphuc', '12345678'),
('', ''),
('phamhoangphuc', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
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
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
