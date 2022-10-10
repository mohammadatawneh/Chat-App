-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 أكتوبر 2022 الساعة 05:48
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messenger`
--
CREATE DATABASE IF NOT EXISTS `messenger` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `messenger`;

-- --------------------------------------------------------

--
-- بنية الجدول `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(150) NOT NULL,
  `receiver_id` int(150) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `messages`
--

TRUNCATE TABLE `messages`;
--
-- إرجاع أو استيراد بيانات الجدول `messages`
--

INSERT INTO `messages` (`msg_id`, `sender_id`, `receiver_id`, `message`, `time`) VALUES
(1, 746624577, 760471143, 'Hello ', '2022-09-17 05:26:22'),
(2, 760471143, 746624577, 'Hi', '2022-09-17 05:26:22'),
(3, 760471143, 942853965, 'Mohammad', '2022-09-17 06:01:10'),
(4, 760471143, 942853965, 'كيفك', '2022-09-17 06:50:18'),
(5, 760471143, 942853965, 'كيفك', '2022-09-17 06:50:21'),
(6, 942853965, 808162334, 'Mohammad', '2022-09-17 06:55:21'),
(7, 942853965, 808162334, 'Mohammad', '2022-09-17 06:55:23'),
(8, 808162334, 942853965, 'What\\\'s your Mohammad', '2022-09-17 06:56:20'),
(9, 942853965, 808162334, 'raed', '2022-09-17 06:57:00'),
(10, 760471143, 942853965, 'Kefek', '2022-09-17 07:01:06'),
(11, 760471143, 942853965, 'Rami', '2022-09-17 07:01:11'),
(12, 942853965, 808162334, 'MOhammm', '2022-09-17 07:07:02'),
(13, 808162334, 942853965, 'Raed', '2022-09-17 07:07:07'),
(14, 942853965, 808162334, 'Hala', '2022-09-17 07:13:13'),
(15, 942853965, 808162334, 'Test TEEST', '2022-09-17 07:18:11'),
(16, 808162334, 942853965, 'شو اخبارك', '2022-09-17 07:20:48'),
(17, 942853965, 808162334, 'Hala Mohammad Atawneh id= 808162334', '2022-09-17 07:22:08'),
(18, 942853965, 808162334, 'what are you doing', '2022-09-17 08:15:00'),
(19, 942853965, 808162334, 'مرحبا', '2022-09-17 08:15:50'),
(20, 942853965, 808162334, 'ششش', '2022-09-17 08:16:36'),
(21, 808162334, 942853965, '', '2022-09-17 08:17:21'),
(22, 942853965, 808162334, 'Mar', '2022-09-17 08:25:20'),
(23, 808162334, 942853965, 'adsas', '2022-09-17 08:26:01'),
(24, 808162334, 942853965, '', '2022-09-17 08:26:04'),
(25, 808162334, 942853965, '', '2022-09-17 08:27:44'),
(26, 808162334, 942853965, 'Aa', '2022-09-17 08:28:18'),
(27, 1443696022, 942853965, 'Mohammad', '2022-09-17 08:43:42'),
(28, 1443696022, 942853965, 'Talq', '2022-09-17 08:45:05'),
(29, 1443696022, 942853965, 'شو اخبارك', '2022-09-17 08:45:11'),
(30, 942853965, 1443696022, 'Rov', '2022-09-17 08:45:18'),
(31, 808162334, 1406167256, 'hi', '2022-09-17 16:28:59'),
(32, 1406167256, 808162334, 'Hello Ahmad', '2022-09-17 16:29:12'),
(33, 808162334, 1406167256, 'who are you ?', '2022-09-17 16:29:30'),
(34, 1406167256, 808162334, 'I\\\'m fine thank you', '2022-09-17 16:29:40'),
(35, 808162334, 1406167256, 'what are you doing ?', '2022-09-17 16:30:12'),
(36, 808162334, 228467666, 'Marhab', '2022-09-27 09:30:00'),
(37, 228467666, 808162334, 'Hello sara', '2022-09-27 09:30:18'),
(38, 228467666, 808162334, 'sorry Hello Mohammad', '2022-09-27 09:30:35'),
(39, 808162334, 228467666, 'Hala Ahmad', '2022-09-27 09:30:50'),
(40, 942853965, 990542166, 'hello noor', '2022-09-27 10:25:32'),
(41, 990542166, 942853965, 'Heloo Te3', '2022-09-27 10:26:57'),
(42, 990542166, 942853965, 'Hello', '2022-09-27 10:27:17'),
(43, 808162334, 492691797, 'Hello Tamer', '2022-09-27 10:36:04'),
(44, 492691797, 808162334, 'Helloo Mohammad', '2022-09-27 10:36:17'),
(45, 1414789451, 746624577, 'mOHAMMAD', '2022-10-05 11:26:12'),
(46, 808162334, 1414789451, 'Mohammad Khaled hello', '2022-10-05 11:27:40'),
(47, 1414789451, 808162334, 'Mohammad raedf', '2022-10-05 11:28:02');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` int(150) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`unique_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `time`) VALUES
(7, 746624577, 'sami', '123', 'sami123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1663290471food1.jpg', 'Offline Now', '2022-09-17 04:31:44'),
(9, 760471143, 'Mohammad', 'Raed', 'raedmoh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1663294617africanwildlife9.jpg', 'Offline Now', '2022-09-27 09:26:48'),
(10, 1443696022, 'rasni', 'rasni', 'rasni_12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1663297381gettyimages-1292746976-612x612.jpg', 'Offline Now', '2022-09-27 09:26:48'),
(11, 808162334, 'Mohammad', 'Atawneh', 'mr3tawneh19@gmail.com', 'c6aca1447a33bd342c3747700b103ad5', '1663306200aa_n.jpg', 'Offline Now', '2022-10-05 11:28:37'),
(12, 831418544, 'Ahmad ', 'Yaser', 'yaserahmad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1663306370images.jpg', 'Offline Now', '2022-09-17 04:54:39'),
(13, 942853965, 'Test', 'Test', 'test123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1663377255boy_1.jpg', 'Offline Now', '2022-09-27 10:27:38'),
(14, 1406167256, 'Ahmad', 'Rami', 'ahmadrami@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1663431877download.jpg', 'Offline Now', '2022-09-17 16:34:04'),
(15, 228467666, 'sara', 'ahmad', 'sara_ahmad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1664270971English-prepositions-meanings-and-uses-in-detail.jpg', 'Offline Now', '2022-09-27 09:31:20'),
(16, 990542166, 'noor', 'sami', 'noor_sami@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '16642741921662149951239.jpg', 'Offline Now', '2022-09-27 10:27:31'),
(17, 492691797, 'tamer', 'housni', 'tamer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1664274888africanwildlife14.jpg', 'Offline Now', '2022-09-27 10:39:41'),
(18, 1414789451, 'moHAMMAD ', 'KHALED', 'KHALED@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e', '1664969151africanwildlife9.jpg', 'Offline Now', '2022-10-05 11:28:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
