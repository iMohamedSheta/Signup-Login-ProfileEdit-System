-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 07:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2
CREATE DATABASE IF NOT EXISTS mydb;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profile_image` varchar(255) NOT NULL DEFAULT '_defaultUser.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `gender`, `headline`, `bio`, `profile_image`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1000, 'MohamedSheta', 'supa@hot.com', '$2y$10$jhIOk4NVdBile/NwhAU9We/f0aoohx.cG9CizmIALRz0aCKJa5s6a', 'Supahot', 'Soverysupahot', 'm', 'Headline of a supa hot user', 'This is the bio of a supa hot user. Now i will say needless stuff to make this longer so this looks like a bio and not anything other than a bio.', '_defaultUser.png', '2022-05-17 15:23:50', '2022-05-17 15:23:50', NULL),
(1008, 'afkj', 'yujgkj@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-17 17:36:53', NULL),
(1009, 'afkjj', 'yujgklkj@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-17 17:39:13', NULL),
(1012, 'MohamedShetaa', 'icrusha15@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-18 08:55:20', NULL),
(1013, 'MohamedSheta12', 'icrush155555@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-19 09:36:39', NULL),
(1014, 'MohamedSheta35', 'icrush1jbhjghv5@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-19 09:44:48', NULL),
(1016, 'ahmed', 'abdoabdo@yaabdosa', '123456789Aa', 'kodakmd', 'adasda', 'm', NULL, NULL, '', NULL, '2022-05-20 12:07:13', NULL),
(1018, 'mo', 'ndlalal@kall', '123456789Aa', 'mohamed', 'ajahs', 'm', NULL, NULL, '', NULL, '2022-05-20 12:43:47', NULL),
(1019, 'no', 'diashlk@ahklalakd', '123456789Aa', 'mohamed', 'ahmed', 'm', NULL, NULL, '', NULL, '2022-05-20 12:47:59', NULL),
(1020, 'lol', 'haha@haha', '123456789', 'Lola', 'Lela', 'f', NULL, NULL, '', NULL, '2022-05-21 11:30:06', NULL),
(1021, 'la', 'icrush15ddfsfsdfs@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-20 13:13:10', NULL),
(1022, 'kaka', 'icrush1xcxzcz5@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-20 13:48:29', NULL),
(1023, 'kakaa', 'icrush1xcsxzcz5@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-20 13:50:39', NULL),
(1024, 'kakaaa', 'icrush1xacsxzcz5@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-20 14:07:44', NULL),
(1025, 'ka', 'icrush1xacsxsaszcz5@yahoo.com', '123456789aA', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-20 14:38:32', NULL),
(1027, 'kaa', 'icrush1xacsxsasaaszcz5@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '', NULL, '2022-05-20 14:40:41', NULL),
(1028, 'kaaaaaaa', 'sada@yahoo.com', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '6287a8b5135834.41918372.jpg', NULL, '2022-05-20 14:41:57', NULL),
(1029, 'mashy', 'gfghgjh@hduf', '123456789Aa', 'ashklalsha', 'holahd', 'm', NULL, NULL, '6287b09fb60c49.33504570.jpg', NULL, '2022-05-20 15:15:43', NULL),
(1030, '655', 'd@d', '123456789Aa', 'dd', 'dd', 'm', NULL, NULL, '6287c586981439.40846521.jpg', NULL, '2022-05-21 11:12:27', NULL),
(1031, 'haha', 'asjdashas@jdaljd', '123456789Aa', 'mohamed', 'sheta', 'm', NULL, NULL, '_defaultUser.png', NULL, '2022-05-20 17:35:21', NULL),
(1032, 'mohamed', 'ljaslsa@slja', '123456789Aa', 'محمد', 'شتا', 'm', NULL, NULL, 'brochure1.jpg', NULL, '2022-05-21 12:37:22', NULL),
(1033, '', '', '', NULL, NULL, NULL, NULL, NULL, 'Menu infograph.jpg', NULL, '2022-05-21 13:09:31', NULL),
(1034, 'hahaa', 'jaosasjl@jall', '123456789Aa', 'hahaa', 'haaaaaaaaaa', 'm', NULL, NULL, '62890a6b33bd03.08996224.jpg', NULL, '2022-05-21 15:51:07', NULL),
(1035, 'hello', 'hjgfsgsf@uhasj', '123456789Aa', 'محمد', 'شتا', 'm', NULL, NULL, '62891ce76c4006.82534886.jpg', NULL, '2022-05-21 17:11:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`,`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1036;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
