-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(112) NOT NULL,
  `name` varchar(112) NOT NULL,
  `email` varchar(113) NOT NULL,
  `password` varchar(118) NOT NULL,
  `profilepic` varchar(214) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `profilepic`) VALUES
(1, 'diwakar', 'shukladiwakar941@gmail.com', 'poonam', './images/WIN_20230703_19_56_16_Pro.jpg'),
(2, 'diwakar', 'shukladiwakar003@gmail.com', 'pooam', './images/WIN_20230703_19_56_16_Pro.jpg'),
(3, 'nasim khan', 'nasim@gmail.com', 'nasimkhan', './images/WIN_20230703_19_56_16_Pro.jpg'),
(4, 'roshan', 'dakuaroshan003@gmail.com', '123456789', './images/WIN_20231031_20_45_10_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(212) NOT NULL,
  `video_path` varchar(120) NOT NULL,
  `type` varchar(140) NOT NULL,
  `title` varchar(212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_path`, `type`, `title`) VALUES
(2, 'videos/vid-1.mp4', 'html', 'html-video-1'),
(3, 'videos/vid-2.mp4', 'html', 'html-video-2'),
(4, 'videos/vid-3.mp4', 'html', 'html-video-3'),
(5, 'videos/vid-4.mp4', 'html', 'html-video-4'),
(6, 'videos/vid-5.mp4', 'html', 'html-video-5'),
(7, 'videos/vid-6.mp4', 'html', 'html-video-6'),
(8, 'videos/vid-7.mp4', 'html', 'html-video-7'),
(9, 'videos/vid-8.mp4', 'html', 'html-video-8'),
(10, 'videos/vid-9.mp4', 'html', 'html-video-9'),
(11, 'videos/CSS01.mp4', 'css', 'css-video-1'),
(12, 'videos/CSS02.mp4', 'css', 'css-video-2'),
(13, 'videos/CSS03.mp4', 'css', 'css-video-3'),
(15, 'videos/CSS05.mp4', 'css', 'css-video-4'),
(16, 'videos/CSS04.mp4', 'css', 'css-video-5'),
(17, 'videos/CSS06.mp4', 'css', 'css-video-6'),
(18, 'videos/CSS07.mp4', 'css', 'css-video-7'),
(19, 'videos/CSS08.mp4', 'css', 'css-video-8'),
(20, 'videos/CSS09.mp4', 'css', 'css-video-9'),
(21, 'videos/CSS10.mp4', 'css', 'css-video-10'),
(22, 'videos/CSS11.mp4', 'css', 'css-video-11'),
(23, 'videos/Bootstrap01.mp4', 'bootstrap', 'bootstrap-video-1'),
(24, 'videos/Bootstrap02.mp4', 'bootstrap', 'bootstrap-video-2'),
(25, 'videos/Bootstrap03.mp4', 'bootstrap', 'bootstrap-video-3'),
(26, 'videos/Bootstrap04.mp4', 'bootstrap', 'bootstrap-video-4'),
(27, 'videos/Bootstrap05.mp4', 'bootstrap', 'bootstrap-video-5'),
(28, 'videos/Bootstrap06.mp4', 'bootstrap', 'bootstrap-video-6'),
(29, 'videos/Bootstrap07.mp4', 'bootstrap', 'bootstrap-video-7'),
(30, 'videos/Bootstrap08.mp4', 'bootstrap', 'bootstrap-video-8'),
(31, 'videos/Bootstrap09.mp4', 'bootstrap', 'bootstrap-video-9'),
(32, 'videos/Bootstrap10.mp4', 'bootstrap', 'bootstrap-video-10'),
(41, 'videos/javascript02.mp4', 'js', 'js-video-2'),
(42, 'videos/javascript03.mp4', 'js', 'js-video-3'),
(43, 'videos/javascript04.mp4', 'js', 'js-video-4'),
(44, 'videos/javascript05.mp4', 'js', 'js-video-5'),
(45, 'videos/javascript06.mp4', 'js', 'js-video-6'),
(46, 'videos/javascript07.mp4', 'js', 'js-video-7'),
(47, 'videos/JQUERY PART 1.mp4', 'jquery', 'jquery-video-1'),
(48, 'videos/JQUERY PART 2.mp4', 'jquery', 'jquery-video-2'),
(49, 'videos/JQUERY PART 3.mp4', 'jquery', 'jquery-video-3'),
(50, 'videos/JQUERY PART 4.mp4', 'jquery', 'jquery-video-4'),
(51, 'videos/JQUERY PART 5.mp4', 'jquery', 'jquery-video-5'),
(52, 'videos/SASS PART 1.mp4', 'sass', 'sass-video-1'),
(53, 'videos/SASS PART 2.mp4', 'sass', 'sass-video-2'),
(54, 'videos/SASS PART 3.mp4', 'sass', 'sass-video-3'),
(55, 'videos/SASS PART 4.mp4', 'sass', 'sass-video-4'),
(56, 'videos/PHP PART 1.mp4', 'php', 'php-video-1'),
(57, 'videos/PHP PART 2.mp4', 'php', 'php-video-2'),
(58, 'videos/PHP PART 3.mp4', 'php', 'php-video-3'),
(59, 'videos/PHP PART 4.mp4', 'php', 'php-video-4'),
(60, 'videos/PHP PART 5.mp4', 'php', 'php-video-5'),
(61, 'videos/PHP PART 6.mp4', 'php', 'php-video-6'),
(62, 'videos/MYSQL PART 1.mp4', 'mysql', 'mysql-video-1'),
(63, 'videos/MYSQL PART 2.mp4', 'mysql', 'mysql-video-2'),
(64, 'videos/MYSQL PART 3.mp4', 'mysql', 'mysql-video-3'),
(65, 'videos/MYSQL PART 4.mp4', 'mysql', 'mysql-video-4'),
(66, 'videos/MYSQL PART 5.mp4', 'mysql', 'mysql-video-5'),
(67, 'videos/REACT JS PART 1.mp4', 'react', 'react-video-1'),
(68, 'videos/REACT JS PART 2.mp4', 'react', 'react-video-2'),
(69, 'videos/REACT JS PART 3.mp4', 'react', 'react-video-3'),
(70, 'videos/REACT JS PART 4.mp4', 'react', 'react-video-4'),
(72, 'videos/REACT JS PART 5.mp4', 'react', 'react-video-5'),
(73, 'videos/javascript01.mp4', 'js', 'js-video-5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(112) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(212) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
