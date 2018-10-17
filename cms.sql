-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2018 at 06:15 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_07_135014_create_posts_table', 1),
(4, '2018_03_11_113229_user_id_in_posts', 2),
(5, '2018_03_11_174617_add_post_image_inside_posts', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `subject`, `first_name`, `last_name`, `body`, `created_at`, `updated_at`, `user_id`, `post_image`) VALUES
(18, 'CSS reference', 'Saeed', 'Muhammed', 'Use this CSS reference to browse an alphabetical index of all the standard CSS properties, pseudo-classes, pseudo-elements, data types, and at-rules. You can also browse a list of all the CSS selectors organized by type and a list of key CSS concepts. Also included is a brief DOM-CSS / CSSOM reference.', '2018-03-12 11:58:30', '2018-03-12 11:58:30', 1, 'html-css-design-build-websites_1520830710.jpg'),
(17, 'Bootstrap', 'Ibraheem', 'Muhammed', 'Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.', '2018-03-12 11:55:19', '2018-03-12 11:55:19', 1, 'bootstrap-660x330_1520830518.jpg'),
(14, 'Web Design', 'Sam-E', 'Ali-E', 'HTML, CSS, JS, PHP, MySQL', '2018-03-12 01:35:34', '2018-03-12 12:30:24', 2, '26-things-to-note-before-you-develop-a-website21_1520832624.jpg'),
(19, 'HTML element \"Document metadata\"', 'Yasser', 'Ahmed', 'Metadata contains information about the page. This includes information about styles, scripts and data to help software (search engines, browsers, etc.) use and render the page. Metadata for styles and scripts may be defined in the page or link to another file that has the information.', '2018-03-12 12:09:31', '2018-03-12 12:24:53', 2, 'HTML_certificate_1520832293.jpg'),
(20, 'PHP Manual', 'Ameen', 'Muhammed', 'PHP, which stands for \"PHP: Hypertext Preprocessor\" is a widely-used Open Source general-purpose scripting language that is especially suited for web development and can be embedded into HTML. Its syntax draws upon C, Java, and Perl, and is easy to learn. The main goal of the language is to allow web developers to write dynamically generated web pages quickly, but you can do much more with PHP.', '2018-03-12 12:12:42', '2018-03-12 12:25:21', 2, 'PHP_certificate_1520832321.jpg'),
(21, 'MySQL 5.7 Reference', 'aymen', 'muhammed', 'MySQL 5.7 features.  This manual describes features that are not included in every edition of MySQL 5.7; such features may not be included in the edition of MySQL 5.7 licensed to you. If you have any questions about the features included in your edition of MySQL 5.7, refer to your MySQL 5.7 license agreement or contact your Oracle sales representative.', '2018-03-12 12:16:58', '2018-03-12 12:16:58', 1, 'ctrl-esc_1520831818.jpg'),
(22, 'jQuery', 'Majed', 'Muhammed', 'jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. If you\'re new to jQuery, we recommend that you check out the jQuery Learning Center.', '2018-03-12 12:21:01', '2018-03-12 12:21:01', 1, 'jQuery_certificate_1520832061.jpg'),
(23, 'Wordpress', 'Ammer', 'Muhammed', 'Welcome to the WordPress Codex, the online manual for WordPress and a living repository for WordPress information and documentation.', '2018-03-12 12:26:50', '2018-03-12 12:26:50', 2, 'tuts-wordpress-b47a9a8bb599898725ccc331a445cf15_1520832410.jpg'),
(24, 'Alla', 'alla', 'alla', 'alla mohammed', '2018-03-28 17:14:12', '2018-03-28 17:14:12', 1, 'noImage.jpg'),
(25, 'test', 'test', 'test', 'test', '2018-05-10 15:03:22', '2018-05-10 15:03:22', 3, 'noImage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aymen', 'aymenalhattam15@gmail.com', '$2y$10$taVAK09VmJm2T3uyaNahzeUrDso5uQ8Poh9uzBiAPkOVuvZZkZyNO', 'FZsKyATGUHQgM0vDFQaXMI2dq1CQ3laSKXuU8HS37mwQT4UtTTDYsWggnBT7', '2018-03-11 11:59:26', '2018-03-11 11:59:26'),
(2, 'muhammed', 'muhammed@gmail.com', '$2y$10$uWvCQGq.CL61epoOHg4YIOODh9vs2hokzWtH3zhgG1md49u7.bF3y', 'VGkZuluHXO1WsIULXGnB75XwoxMaYQhGypWbr3oBCRAImadaX5AH7VZEzexF', '2018-03-11 18:45:42', '2018-03-11 18:45:42'),
(3, 'as3ad', 'as3ad@g.c', '$2y$10$MlHeOaWedlSR8vuSVAy2Vepms.5ajn96hoDlKAXZ5IfMZhcC.Ar12', 'j5wBUXPhBher75Cv3MISyCdQhZRXliPJh6VJTfp90w9a5LoAculDUPGr3Ckq', '2018-05-10 15:02:42', '2018-05-10 15:02:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
