-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 05:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpinghands`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `type` enum('events') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('in-active','active') COLLATE utf8mb4_unicode_ci DEFAULT 'in-active',
  `Bank Account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `excerpt`, `image`, `start_date`, `end_date`, `type`, `slug`, `created_at`, `updated_at`, `status`, `Bank Account`, `user_id`) VALUES
(1, 'abcd', 'iabhs', 'abh', '1SOBbPGSp09I3BXiGpIqykwfCfjSxFI8BnZUff4g.jpeg', '2020-06-23', '2020-06-25', 'events', 'abcd', '2020-06-20 04:05:04', '2020-06-24 12:39:19', 'active', NULL, NULL),
(5, 'abc', 'abc', 'abc', '', '', '', 'events', 'abc', NULL, '2020-06-24 12:18:41', 'active', NULL, NULL),
(7, 'a', 'a', 'a', '', '', '', 'events', 'a', NULL, '2020-06-24 12:18:47', 'active', NULL, 5),
(8, 'gopal', 'gopal', 'gopal', 'jEQjo9Dzqj7Yxe6y4ZYk8bgUePEOQaviatm17WiE.jpeg', '2020-06-26', '2020-06-26', 'events', 'gopal', '2020-06-24 12:17:24', '2020-06-24 12:18:03', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `phone`, `email`, `problem`, `message`, `created_at`, `updated_at`) VALUES
(1, 'abhishek', 'bsjkdbsajkbdkjb', 'abhishke', 'EconomicalProblem', 'bjkjb', '2020-06-27 00:06:50', '2020-06-27 00:06:50'),
(2, 'abhishek', 'bsjkdbsajkbdkjb', 'abhishke', 'EconomicalProblem', 'bjkjb', '2020-06-27 01:41:53', '2020-06-27 01:41:53'),
(3, 'abhishek', 'bsjkdbsajkbdkjb', 'abhishke', 'EconomicalProblem', 'bjkjb', '2020-06-27 01:43:28', '2020-06-27 01:43:28'),
(4, 'abhishe', 'bjkbdj', 'bsjkdbj', 'MentalStress', 'jkbdjk', '2020-06-27 01:43:51', '2020-06-27 01:43:51'),
(5, 'abhishek', 'jbdj', 'bsjbd', 'MentalStress', 'sabdkjasbd', '2020-06-27 01:47:27', '2020-06-27 01:47:27'),
(6, 'abhishek', '9867739191', 'abhishekthapa115@gmail.com', 'EconomicalProblem', 'Hello', '2020-06-27 01:55:43', '2020-06-27 01:55:43'),
(7, 'abhishek', '9867739191', 'abhishekthapa115@gmail.com', 'EconomicalProblem', 'Hello', '2020-06-27 01:56:01', '2020-06-27 01:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_23_154451_laratrust_setup_tables', 1),
(4, '2018_03_10_065149_create_site_settings_table', 1),
(5, '2018_03_10_111754_create_sliders_table', 1),
(6, '2019_03_23_004509_create_posts_table', 1),
(7, '2020_01_28_174503_create_quote_requests_table', 2),
(8, '2020_02_24_154818_add_meta_link_to_posts_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 3),
(10, '2020_03_02_062837_create_posts_table', 4),
(11, '2020_03_04_054937_create_get_touch_table', 4),
(12, '2020_03_04_091748_add_social_link_to_posts_table', 4),
(13, '2020_03_05_080743_add_enum_to_posts_table', 5),
(14, '2020_03_07_070139_create_get_touch_table', 6),
(15, '2020_06_20_091936_create_events_table', 6),
(16, '2020_06_27_052528_create_help_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Users Create', 'Users Create', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(2, 'users-read', 'Users Read', 'Users Read', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(3, 'users-update', 'Users Update', 'Users Update', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(4, 'users-delete', 'Users Delete', 'Users Delete', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(5, 'permissions-create', 'Permissions Create', 'Permissions Create', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(6, 'permissions-read', 'Permissions Read', 'Permissions Read', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(7, 'permissions-update', 'Permissions Update', 'Permissions Update', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(8, 'permissions-delete', 'Permissions Delete', 'Permissions Delete', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(9, 'roles-create', 'Roles Create', 'Roles Create', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(10, 'roles-read', 'Roles Read', 'Roles Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(11, 'roles-update', 'Roles Update', 'Roles Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(12, 'roles-delete', 'Roles Delete', 'Roles Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(13, 'profile-read', 'Profile Read', 'Profile Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(14, 'profile-update', 'Profile Update', 'Profile Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(15, 'settings-create', 'Settings Create', 'Settings Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(16, 'settings-read', 'Settings Read', 'Settings Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(17, 'settings-update', 'Settings Update', 'Settings Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(18, 'settings-delete', 'Settings Delete', 'Settings Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(19, 'site-settings-create', 'Site-settings Create', 'Site-settings Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(20, 'site-settings-read', 'Site-settings Read', 'Site-settings Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(21, 'site-settings-update', 'Site-settings Update', 'Site-settings Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(22, 'site-settings-delete', 'Site-settings Delete', 'Site-settings Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(23, 'sliders-create', 'Sliders Create', 'Sliders Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(24, 'sliders-read', 'Sliders Read', 'Sliders Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(25, 'sliders-update', 'Sliders Update', 'Sliders Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(26, 'sliders-delete', 'Sliders Delete', 'Sliders Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(27, 'schools-create', 'Schools Create', 'Schools Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(28, 'schools-read', 'Schools Read', 'Schools Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(29, 'schools-update', 'Schools Update', 'Schools Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(30, 'schools-delete', 'Schools Delete', 'Schools Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(31, 'disciplines-create', 'Disciplines Create', 'Disciplines Create', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(32, 'disciplines-read', 'Disciplines Read', 'Disciplines Read', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(33, 'disciplines-update', 'Disciplines Update', 'Disciplines Update', '2019-12-02 00:26:31', '2019-12-02 00:26:31'),
(34, 'disciplines-delete', 'Disciplines Delete', 'Disciplines Delete', '2019-12-02 00:26:31', '2019-12-02 00:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `logo_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `type` enum('homepage_banner','testimonial','content','news','school_partner','recruiter_partner','client','student_partner','school_partner_service','recruiter_partner_service','student_partner_service','steps','team','work','packages','services','pages','about','products','portfolio') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkedIn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_type` enum('app','web','design','host') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `excerpt`, `image`, `logo_image`, `type`, `slug`, `created_at`, `updated_at`, `meta_link`, `meta_description`, `facebook`, `twitter`, `instagram`, `LinkedIn`, `portfolio_type`) VALUES
(2, 'About', '<p>A this is this what i am going to describe on how the approach is going on the way to the dehli of the small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country whic our country , in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>\r\n\r\n<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', 'Medical specialty concerned with the mental health and problems', 'jwTpwoxprf70ALyHmUxY2YPMlCGbilyiHLFlFAuQ.jpeg', '', 'content', 'abouts', '2019-12-02 02:56:05', '2020-06-28 10:05:50', '', '', NULL, '', '', '', NULL),
(3, 'Donate Us', '<p>Your helping hands will protects someones life and gives him a new birth.</p>', 'Want to help us', 'huLCvuyRI52QVAKwIuwlqcXz0CB5bpZwsAsVjIQT.jpeg', '', 'content', 'donate-us', '2019-12-02 02:57:57', '2020-06-21 00:05:43', '', '', NULL, '', '', '', NULL),
(4, 'TESTIMONIALS', NULL, 'Our Clients Says About Us', NULL, '', 'content', 'testimonials', '2019-12-02 02:59:03', '2020-06-21 00:07:16', '', '', NULL, '', '', '', NULL),
(5, 'Blogs', '<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>', 'Recent Blogs', 'ZljvjoZJWvTC3PCsdgofuCgGuqVWzZ4BkYuN3eMI.jpeg', '', 'content', 'blogs', NULL, '2020-06-21 00:10:19', '', '', NULL, '', '', '', NULL),
(9, 'Subscribe', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>', 'Subcribe to our Newsletter', 'yAQZUJ3Ja91YUx0NzcQT5VIpUPBTwzEkZJDdODqS.jpeg', '', 'content', 'subscribe', '2019-12-02 04:54:25', '2020-06-21 00:12:36', '', '', NULL, '', '', '', NULL),
(15, 'SEO/SEM', NULL, 'SEO/SEM', 'x0RyLcOcy7CxABKQ1Ni4VgNMds6Jdpq6qWYZf5AP.jpeg', NULL, '', 'seosem', '2019-12-02 06:20:59', '2020-03-01 23:08:52', '', '', NULL, '', '', '', NULL),
(23, 'Rijan', 'I was really impressed by the thing that i have', 'Designer', 'a0ALzjqnKm3xPkwyPbxhgjc0Nb7u1izdINkEv0ae.jpeg', '', 'testimonial', 'rijan', '2019-12-02 07:33:02', '2020-06-16 03:19:30', '', '', NULL, '', '', '', NULL),
(33, 'Event Management', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', 'fas fa-allergies', '', 'eI2l6BJQOFqYVllpS8QzHeElQOhAcsXZb0nyMbwp.png', 'services', 'event-management', '2019-12-07 09:28:50', '2020-06-15 22:54:00', '', '', NULL, '', '', '', NULL),
(35, 'Esteem spirit', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', NULL, '', NULL, 'services', 'esteem-spirit', '2019-12-07 09:33:03', '2020-06-15 22:54:44', '', '', NULL, '', '', '', NULL),
(36, 'Esteem', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', NULL, '', '', 'services', 'esteem', '2019-12-07 10:04:49', '2020-06-15 22:55:12', '', '', NULL, '', '', '', NULL),
(50, 'Events', '<p>Hello this is the event</p>', 'Recent Event', NULL, '', 'content', 'eventes', '2020-01-05 15:50:20', '2020-06-28 10:02:18', '', '', NULL, '', '', '', NULL),
(52, 'Index', NULL, NULL, NULL, NULL, 'pages', 'index', '2020-02-24 21:41:28', '2020-02-25 22:44:41', 'Home', 'Test', NULL, '', '', '', NULL),
(53, 'Event', NULL, NULL, NULL, NULL, 'pages', 'events', '2020-02-24 21:42:04', '2020-06-21 06:32:47', 'Event', 'Test', NULL, '', '', '', NULL),
(55, 'Single Blog', NULL, NULL, NULL, NULL, 'pages', 'single-blog', '2020-02-24 21:43:22', '2020-03-05 22:57:44', 'single-blog/vivo', 'Test', NULL, '', '', '', NULL),
(56, 'Blog', NULL, NULL, NULL, NULL, 'pages', 'blog', '2020-02-24 21:44:07', '2020-03-03 23:39:20', 'Blog', 'Test', NULL, '', '', '', NULL),
(57, 'Contact', NULL, NULL, NULL, NULL, 'pages', 'contact', '2020-02-24 21:44:29', '2020-03-03 23:39:51', 'Contact', 'Test', NULL, '', '', '', NULL),
(93, 'Prashant', 'I think this is the best It company ever i know i provide it all the 5 star company', NULL, 'Sy7dXQxA6xKW470WPcL2MBTXh3sbtsYe8iLZZPLB.png', '', 'testimonial', 'prashant', '2020-03-06 11:25:09', '2020-03-06 11:26:30', '', '', NULL, NULL, NULL, NULL, NULL),
(106, 'banner', NULL, NULL, '5yOAxBFCiBvp4ln6LLhHhjdbpJlKw8FgL2Zh9fhq.jpeg', '', 'homepage_banner', 'banner', '2020-06-15 22:24:10', '2020-06-20 23:43:43', '', '', NULL, NULL, NULL, NULL, NULL),
(107, 'banner1', NULL, NULL, 'hTJy1LtsC5HXjrGRat4MUbk6VEevrk1A52zX672I.jpeg', '', 'homepage_banner', 'banner1', '2020-06-15 22:24:41', '2020-06-20 23:44:34', '', '', NULL, NULL, NULL, NULL, NULL),
(108, 'banner2', NULL, NULL, 'C3frm2QFtA07lJxbQZ8WxbbR7RkZY2SGIAj0wmGZ.jpeg', '', 'homepage_banner', 'banner2', '2020-06-15 22:25:09', '2020-06-20 23:45:27', '', '', NULL, NULL, NULL, NULL, NULL),
(109, 'Hello', 'Blog Testing', 'Blog', 'ZXMviWVcY6F81LMPo74tlRpXaAtaRdNrCjMCeXvl.jpeg', '', 'news', 'hello', '2020-06-21 06:22:47', '2020-06-21 06:22:47', '', '', NULL, NULL, NULL, NULL, NULL),
(112, 'About', NULL, NULL, NULL, NULL, 'pages', 'about', '2020-06-28 10:06:24', '2020-06-28 10:06:24', 'About', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 'Administrator', '2019-12-02 00:26:30', '2019-12-02 00:26:30'),
(2, 'eventorganizer', 'Event Organizer', 'Event Organizer\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\Auth\\User'),
(1, 2, 'App\\Models\\Auth\\User'),
(1, 3, 'App\\Models\\Auth\\User'),
(2, 5, 'App\\Models\\Auth\\User'),
(2, 7, 'App\\Models\\Auth\\User');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `display_name`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Site title', 'site_title', 'Helping Hands', '2019-12-02 02:00:13', '2020-06-14 23:43:38'),
(2, 'Meta keyword', 'meta_keyword', 'Helping Hands', '2019-12-02 02:00:13', '2020-06-14 23:43:39'),
(3, 'Meta description', 'meta_description', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(4, 'Contact details', 'contact_details', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(5, 'Social fb', 'social_fb', 'https://www.facebook.com/balsansarEdu/', '2019-12-02 02:00:13', '2020-01-23 10:05:09'),
(6, 'Social twitter', 'social_twitter', 'https://twitter.com/BalsansarEdu', '2019-12-02 02:00:13', '2020-01-23 13:04:41'),
(7, 'Social youtube', 'social_youtube', 'https://www.youtube.com/channel/UCeDyVPOId_zVIWAv20BGIEQ', '2019-12-02 02:00:13', '2020-01-23 10:05:09'),
(8, 'Social google', 'social_google', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(9, 'Social instagram', 'social_instagram', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(10, 'Social mail', 'social_mail', NULL, '2019-12-02 02:00:13', '2020-03-01 12:09:32'),
(11, 'Social phone', 'social_phone', '9867739191', '2019-12-02 02:00:13', '2020-06-15 22:36:10'),
(12, 'Opening time', 'opening_time', NULL, '2019-12-02 02:00:13', '2020-06-14 23:43:39'),
(13, 'Footer', 'footer', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(14, 'Footer info', 'footer_info', NULL, '2019-12-02 02:00:13', '2019-12-02 02:00:13'),
(15, 'Copy right', 'copy_right', 'Copyright by helpinghands © 2021. All rights reserved.', '2019-12-02 02:00:13', '2020-06-27 03:45:23'),
(16, 'Location', 'location', 'Tripura Sundari Baitadi', '2019-12-02 02:00:13', '2020-06-14 23:44:05'),
(17, 'Email', 'email', 'abhishekthapa115@gmail.com', NULL, '2020-06-15 22:36:31'),
(18, 'Logo image', 'logo_image', '/storage/logo_image//storage/logo_image//storage/logo_image//storage/logo_image/e2g0SyZBniDHSyAK6gvpcRR9x1e1431azn1FXstO.png', '2019-12-29 12:47:30', '2020-06-27 03:45:23'),
(19, 'Logo image_image', 'logo_image_image', 'C:\\xampp\\tmp\\php792C.tmp', '2020-03-04 04:31:09', '2020-03-04 04:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'draft',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'image',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `link`, `title`, `status`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Gallery', 'JK2Le36KJ0YuZ5rTyyPaQn4J6wmf1TOFELvy2aTd.jpeg', NULL, NULL, 'published', 'image', '2019-12-06 22:43:10', '2019-12-06 22:42:28', '2019-12-06 22:43:10'),
(2, 'Gallery 1', 'EJ5o0rQZzsdWOIECpeHhhZKJQuDxHua62hSDuyve.png', NULL, NULL, 'published', 'image', NULL, '2019-12-06 22:43:21', '2020-03-08 01:40:38'),
(3, 'Gallery 2', 'DZbMWE8MD3EFh23QDmazlOoW56vbTW9bZlCcXlRd.jpeg', NULL, NULL, 'published', 'image', '2020-03-08 04:12:12', '2019-12-06 22:43:33', '2020-03-08 04:12:12'),
(4, 'Gallery 3', 'xDMRkDlSHWSHf2NGX7vnd3rOgRZTlx6Y68xPQ0Pg.jpeg', NULL, NULL, 'published', 'image', NULL, '2019-12-06 22:43:41', '2020-03-11 23:05:12'),
(5, 'Gallery 4', 'ryDb47WtcvvKSFwCTDrPRaTUS6XIPCWcGpYRX1BD.png', NULL, NULL, 'published', 'image', '2020-03-08 04:12:20', '2019-12-06 22:43:50', '2020-03-08 04:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` enum('active','in-active') COLLATE utf8mb4_unicode_ci DEFAULT 'in-active',
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `company_registration_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `vat_pan_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `contact_mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `password_change_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `email`, `status`, `phone_number`, `mobile_number`, `address`, `state`, `postal_code`, `city`, `country`, `website`, `company_name`, `company_registration_number`, `vat_pan_no`, `contact_name`, `contact_email`, `contact_phone_number`, `contact_mobile_number`, `password`, `password_reference`, `password_change_code`, `image`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Abhishek Thapa', 'abhishekthapa', 'abhishekthapa115@gmail.com', 'active', '9867739191', NULL, 'TripuraSundari Baitadi', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$urKVN2RFYOcMKoh.Ouk5.ufB9AMHSM61G/gBNeUDjUREQNAc3e3B2', '', '', NULL, NULL, NULL, 'mo7pvH7StVxtzi413sML8GeA6vLPWbdJiEt68tdwvLkmqfXKD1I1HZGHA1um', '2020-06-14 23:45:42', '2020-06-14 23:45:42', NULL),
(5, 'abhi', 'abhi', 'gopal@gmail.com', 'active', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$fJzaEr/6OdYx4AXsVb0LMedPuh..Ye1pyrTF1AaZMUx.QgqXJNitm', '', '', NULL, NULL, NULL, 'Du0qXBw0G9DHs5jw1j5Uf2GErVfNWJ2z7vx5Kp60XYqsCQT1qUrZ4zXUjvN1', '2020-06-24 01:25:07', '2020-06-24 01:25:07', NULL),
(6, 'Ganesh', 'ganesh', 'ganesh@gmail.com', 'in-active', '9867739191', '9867739191', 'Tripura', '', '', '', '', '', 'Companu', 'fjahfj', 'nsjdbj', 'bdjsbd', 'bhish@gmail.com', 'dnfskan', 'nsjncjdn', '$2y$10$5k9GKWw/r13mqGXOFIz9Iev2xHERZ1vWZrxiTgPNjxKFUsStfAtIu', 'ganesh123', '', '', NULL, NULL, NULL, '2020-06-28 09:10:18', '2020-06-28 09:10:18', NULL),
(7, 'Birendra', 'biru', 'biru@gmail.com', 'in-active', '9867739191', NULL, 'Tripura', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$LQYK8yS3yb7HJQo73cx3AeD6lHxVPQvxjyUP5DLwabYg1Z8mEOCGW', 'birendra', '', '', NULL, NULL, 'JIb8ksrb3UIP6p14oJyhuUtRcokLcIeTZwDqT9xba9LnjgZdGIzhUOyqJGte', '2020-06-28 09:46:28', '2020-06-28 09:46:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
