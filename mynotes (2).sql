-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 12:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mynotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`count`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `note_name` varchar(50) DEFAULT NULL,
  `note_txt` text DEFAULT NULL,
  `note_date` date DEFAULT NULL,
  `note_time` time DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `note_name`, `note_txt`, `note_date`, `note_time`, `status`, `user_id`) VALUES
(7, 'ملاحظة ', NULL, '2019-08-15', '08:23:26', 'غير عاجلة', 7),
(9, 'mm', ' this is section about api', '0000-00-00', '10:52:22', 'عاجله', 10),
(10, 'newlife', ' \r\nكداب ي خلف\r\n', '2019-08-02', '12:54:00', 'عاجله', 9),
(13, 'الموقع يعمل جيدا', NULL, '2019-08-08', '07:11:20', 'عاجله ', 5),
(14, 'اخيرا الموقع اشتغل صح', 'عايزين ننزل الفايل باسم النوت', '2019-08-07', '07:13:19', 'عاجله', 10),
(15, 'ملاحظتي السريعه', NULL, '2019-08-02', '16:01:00', 'غير عاجله', 10),
(16, 'file', 'the new life with new people and new fields ', '2019-08-04', '01:00:00', 'عاجله', 9),
(17, 'end test ', NULL, '2019-08-03', '14:45:00', 'غير عاجله', 19),
(21, 'قرار', 'النهارده اخدت قرار اني اذاكر باجتهاد', '2019-08-03', '18:33:00', 'غير عاجله', 19),
(23, 'ملاحظتي', 'واالله موقع حلو يعني الموقع دا', '2019-08-03', '01:00:00', 'غير عاجله', 9),
(24, 'ملاحظتي', 'هذه اول ملاحظة', '2019-08-04', '01:00:00', 'غير عاجله', 21),
(25, 'note1', 'i respect hossam mohammed and i wif=sh we will  do the best', '2019-06-08', '18:06:00', 'فوريه', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `city` varchar(100) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `user_name`, `password`, `email`, `gender`, `city`, `role`) VALUES
(5, 'bos', 'bos', 'bos', 'boss', 'Male', 'alex', 2),
(6, 'مستخدم', 'me', 'me', 'hossamshawky95@gmail.com', 'Male', 'mina2', 1),
(7, 'عضو جديد', 'احمد', '12', 'hossamshawky95@gmail.com', 'Male', 'mina33', 0),
(8, 'حسام محمد', 'حسام', '**', 'hossamshawky95@gmail.com', 'Male', 'سوهاج', 1),
(9, '1', '1', '1', 'hossamshawky95@gmail.com', 'Male', 'giza', 0),
(10, 'حسن حمدي', 'حسن', '44', 'hossamshP9BSVfWdrmawky288@gmail.com', 'Male', 'سوهاج', 0),
(12, 'hossam', 'hoss', '00', 'hossamshawky288@gmail.com', 'Male', 'سوهاج', 1),
(13, '11', '11', '11', 'any@gmail.com', 'Male', 'mina', 0),
(14, 'kahild', 'k', 'k', 'hossamshP9BSVfWdrmawky288@gmail.com', 'Male', 'سوهاج', 1),
(15, 'ادمن جديد', 'ادمن', '``', 'hossamshP9BSVfWdrmawky288@gmail.com', 'Male', 'المنيا', 1),
(17, 'qq', 'qq', 'qq', 'hossamshP9BSVfWdrmawky288@gmail.com', 'Female', 'mina2', 0),
(18, 'hossam mohammed Shawky', 'Hossam', '```', 'hossamshawky95@gmail.com', 'Male', 'giza', 0),
(19, 'end test', 'end', 'end', 'end@gmail.com', 'Male', 'mansoura', 0),
(21, 'new member', 'new', 'new', 'new@gmail.com', 'Male', 'giza', 0),
(22, 'shimaa', 'shimaa', '**', 'shimo@gmail.com', 'Male', 'Giza', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dir`
--
ALTER TABLE `dir`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
