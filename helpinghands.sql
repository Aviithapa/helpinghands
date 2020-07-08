-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 08:56 AM
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
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `donation_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `address`, `city`, `district`, `zip`, `phoneNumber`, `mobileNumber`, `event_id`, `created_at`, `updated_at`, `image`, `user_id`, `donation_amount`) VALUES
(28, 'Abhishek Thapa', 'abhi@gmail.com', '8', 'tripura', 'baitadi', '14400', '9867739191', '9867739191', 1, '2020-07-08 00:25:34', '2020-07-08 00:49:41', '3OPm0Xp2MVgGY9DjghcqXI79zcmMOlZRTghJdrHQ.jpeg', 41, '5000');

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
  `bank_Account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `excerpt`, `image`, `start_date`, `end_date`, `type`, `slug`, `created_at`, `updated_at`, `status`, `bank_Account`, `user_id`, `bank_branch`) VALUES
(0, 'Helping Hands', 'We are serving  the people who are very needy and helpless so try to help', 'Lets rise your hands and help us ', '', '', '', 'events', '', NULL, NULL, 'active', NULL, NULL, ''),
(1, 'Localizing Of SDG 16 In Nepal', 'This project is designed to intensify engagement of Government, CSOs on SDG 16 to achieve 2030 Agenda of Sustainable Development in the country. Overall purpose of this project is to contribute in integrating the indicators of goal 16 indicators in local government policies.\r\n\r\nOverall purpose of this project is to strengthen engagement of CSOs for implementing the 2030 Agenda of Sustainable Development. Specifically, the project aims to: strengthen policy engagement of CSOs on Goal 16 with all three tiers, and to enhance capacity of CSOs to engage on Goal 16 at national and local level.\r\n\r\nOrganize policy dialogues\\ workshops on SDG 16 in National and province level, organize a national civil society conference, organize a national review meeting on SDG 16 with NPC, updated the thematic activities of Nepal SDGs Forum at province level and publish handbooks on SDGs 16 specified the related targets and indicators in Nepali will be the major activities of this project. Ultimately, this project aims to contribute in achieving SDGs in the country and complement to Government\'s efforts.\r\n\r\nOrganize policy dialogues\\ workshops on SDG 16 in National and province level, organize a national civil society conference, organize a national review meeting on SDG 16 with NPC, updated the thematic activities of Nepal SDGs Forum at province level and publish handbooks on SDGs 16 specified the related targets and indicators in Nepali will be the major activities of this project. Ultimately, this project aims to contribute in achieving SDGs in the country and complement to Government\'s efforts.', NULL, 'zborxjoptbuGwhELF90BFxEqZg7Burn259flxyMg.jpeg', '2020-06-23', '2020-06-25', 'events', 'localizing-of-sdg-16-in-nepal', '2020-06-20 04:05:04', '2020-07-02 22:52:11', 'active', 'xxxx-xxxx-xxxx-xxxx', NULL, 'kalimati'),
(5, 'Medical Aid Reaches Hurricane Survivors', 'Forty days after Hurricane Maria hit Puerto Rico, Elia had empty prescription bottles and no way to refill them. Without power, pharmacies could not access patient records or insurance plans. “I can’t get medicine because there’s no data system,” Elia says. Elia was living without electricity or water; lack of medicine was adding to her worries. She needs medicine daily to control her blood pressure and diabetes.\r\n\r\nNo power.  No records. No medicine.  A health crisis for Elia.\r\n\r\nBeginning immediately after the hurricane, Americares delivered medicine and medical supplies to more than 60 health centers on the island and brought medical teams to communities including Moca, in western Puerto Rico, where Elia lives. On an 85-degree November day, Elia was one of 60 patients who received care and medication from Americares medical team at no cost.', 'A Person in Crisis Gets the Health Care She Needs', '0Xs1pk4xRYVA7uerdBcj3PcnoWWCekZCdJD9Q0pX.jpeg', '2020-07-05', '2020-07-18', 'events', 'medical-aid-reaches-hurricane-survivors', NULL, '2020-07-02 22:46:42', 'active', NULL, NULL, ''),
(7, 'Saving the Tiniest Babies in Kosovo', 'Sebahate was seven months along in her first pregnancy when dangerously high blood pressure led to an emergency C-section to save her unborn child.The baby girl she and her husband named Laura* weighed less than 2 pounds at birth and struggled to breathe, her tiny lungs not yet fully developed.\r\n\r\nThe preemie spent her first days of life in the neonatal intensive care unit at the University Clinical Center Kosovo’s Neonatal Intensive Care Unit, where she survived thanks to respiratory medication donated by AmeriCares and AbbVie, and the assistance of a continuous positive airway pressure machine. AmeriCares supports the NICU through a partnership with Action for Mothers and Children, a local NGO focused on improving the survival rates of mothers and babies in Kosovo, one of the poorest countries in Europe.\r\n\r\nLaura is one of more than 1,000 premature low-weight babies to survive since 2006 when AmeriCares and Abbott began delivering surfactant therapy to prevent respiratory distress in pre-term infants. AbbVie spun off from Abbott in 2013 and has sponsored the program ever since.', 'A mother with her newborn daughter treated with surfactant from AmeriCares and AbbVie at the University Clinical Center Kosovo’s Neonatal Intensive Care Unit.', 'jN0OeZv31CC111xG7Nuc3M0GgJCsRglAs0r4SOws.jpeg', '2020-07-04', '2020-08-29', 'events', 'saving-the-tiniest-babies-in-kosovo', NULL, '2020-07-02 22:35:53', 'active', NULL, 5, ''),
(8, 'Frontline health workers need our help!', 'Jeremy Abbott, Miki Ando, Shizuka Arakawa, Tai Babilonia and Randy Gardner, Brian Boitano, Michal Březina, Jason Brown, Kurt Browning, Alexei Bychenko, Ashley Cain-Gribble and Timothy Leduc, Sasha Cohen, Todd Eldredge, Amber Glenn, Gracie Gold, Ekaterina Gordeeva, Melissa Gregory and Denis Petukhov, Dorothy Hamill, Scott Hamilton, Emily Hughes, Nancy Kerrigan, Michelle Kwan, Naomi Lang, Tara Lipinski, Vakhtang Murvanidze, Viktor Petrenko, Matteo Rizzo, Yuka Sato, Alexa Scimeca and Chris Knierim, Elvis Stojko, Fumie Suguri, Bradie Tennell, Rohene Ward, Johnny Weir, Paul Wylie, Alexei Yagudin and the Ice Theatre of New York**', 'Blades for The Brave is a livestream event bringing Olympic and World Championship figure skaters together fundraising for COVID-19 relief.', 'PJAgy42GBBgavIUYrZTW1e1Zsyoh4OYH95a60JLi.jpeg', '2020-06-26', '2020-06-26', 'events', 'frontline-health-workers-need-our-help', '2020-06-24 12:17:24', '2020-07-02 22:45:45', 'active', NULL, NULL, ''),
(9, '10th Ebola outbreak in the Democratic Republic of the Congo declared over; vigilance against flare-ups and support for survivors must continue', 'Event driven systems are typically used when there is some asynchronous external activity that needs to be handled by a program; for example, a user who presses a button on their mouse. An event driven system typically runs an event loop, that keeps waiting for such activities, e.g. input from devices or internal alarms. When one of these occurs, it collects data about the event and dispatches the event to the event handler software that will deal with it.\r\n\r\nA program can choose to ignore events, and there may be libraries to dispatch an event to multiple handlers that may be programmed to listen for a particular event. The data associated with an event at a minimum specifies what type of event it is, but may include other information such as when it occurred, who or what caused it to occur, and extra data provided by the event source to the handler about how the event should be processed.\r\n\r\nEvents are typically used in user interfaces, where actions in the outside world (mouse clicks, window-resizing, keyboard presses, messages from other programs, etc.) are handled by the program as a series of events. Programs written for many windowing environments consist predominantly of event handlers.\r\n\r\nEvents can also be used at instruction set level, where they complement interrupts. Compared to interrupts, events are normally handled synchronously: the program explicitly waits for an event to be serviced (typically by calling an instruction that dispatches the next event), whereas an interrupt can demand service at any time.', '“The DRC is now better, smarter and faster at responding to Ebola and this is an enduring legacy which is supporting the response to COVID-19 and other outbreaks.”', '9k6yWcPCMoOrxga9l27oqGPgXcbobwuPtPD0mcsW.jpeg', '2020-06-30', '2020-07-04', 'events', '10th-ebola-outbreak-in-the-democratic-republic-of-the-congo-declared-over-vigilance-against-flareups-and-support-for-survivors-must-continue', '2020-06-29 01:58:23', '2020-06-29 02:07:04', 'active', NULL, NULL, ''),
(10, '2nd Medical Tourism Asia Summit- 2019', '2nd Medical Tourism Asia Summit- 2019:\r\n\r\nWe have scheduled to organize 2nd Medical Tourism Asia Summit- 2019 on 29-30 November, 2019 at Kathmandu, Nepal to meet out our objectives.\r\n\r\nWe are focused on promoting healthcare services with global B2B Network of;\r\n\r\n- Healthcare Service Provider Meet\r\n\r\n- Healthcare Facilitators Meet\r\n\r\n- Healthcare Technology Providers Meet\r\n\r\n- Healthcare Education Providers Meet\r\n\r\n- Medicine & Equipment Suppliers Meet\r\n\r\n- Healthcare Investors Meet', NULL, 'Mqc4vku3BySKrgEA4IGUhe1dRun3N6s4KpGbNLH1.jpeg', '2020-07-04', '2020-07-31', 'events', '2nd-medical-tourism-asia-summit-2019', '2020-07-02 22:55:49', '2020-07-02 22:55:49', 'active', NULL, NULL, ''),
(11, 'Donate Your Commute and Help Save Lives', 'Not commuting to work at the moment? Why not donate your bus, train, uber, or parking fees to make a massive impact for some of the most vulnerable people in our community.\r\n\r\nEven $10 a month will add up to fund hours of critical cancer research! Every monthly gift makes a powerful difference.\r\n\r\nOver 1.8 million people globally are diagnosed with cancer every day. They are the most vulnerable and need our help now more than ever.\r\n\r\nOur cancer researchers are determined to continue their lifesaving work.\r\n\r\nThe collective force of every regular donor builds to increase our momentum. By giving monthly, we can push cancer research forward and bring new ground-breaking discoveries to light.\r\n\r\nEvery dollar helps and every hour of research matters. This could be the hour that saves someone’s life.\r\n\r\nStart a monthly donation today and ensure that the most promising cancer research is always moving full steam ahead.', 'HELP FUND LIFESAVING RESEARCH EVERY MONTH', 'p4owkWDtlGY0ExfNjDDsGzYKj3GklX8F8iWPJP1B.png', '2020-07-04', '2020-07-31', 'events', 'donate-your-commute-and-help-save-lives', '2020-07-02 23:00:54', '2020-07-02 23:00:54', 'active', NULL, NULL, ''),
(12, '2020 Cancer Milestones', 'Whatever your milestone, you deserve to enjoy it!\r\n\r\nBring your loved ones together to celebrate, but in lieu of gifts, why not ask your friends to make a donation to Cure Cancer?\r\n\r\nIt’s a meaningful way to honour the occasion, while making a lasting difference to future generations. \r\n\r\nSimply let your friends and familiy know why cancer research is close to your heart and what your fundraising goal is. No doubt they’ll be delighted to support you!\r\n\r\nPledging this milestone to Cure Cancer is a hugely generous gesture – one that promises to make your moment every more meaningful and memorable', 'Cure Cancer is dedicated entirely to funding early career researchers. We identify, assess and fund the research we believe has the best possible chance of finding a cure. Most importantly,', 'P1KyJAQo4T8P1Jxs2XHjWaWz87hWbC83uo0GUcnM.jpeg', '2020-07-04', '2020-07-31', 'events', '2020-cancer-milestones', '2020-07-02 23:05:57', '2020-07-07 05:02:49', 'active', '143578945879', NULL, 'global-ime-bank kalimati');

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
(16, '2020_06_27_052528_create_help_table', 7),
(17, '2020_06_29_053847_create_donation_table', 8),
(18, '2020_06_29_144334_add_image_to_the_donation_table', 9),
(19, '2020_07_07_045339_add_event_id_to_user_table', 10),
(20, '2020_07_07_084138_add_user_id_to_donation_table', 11),
(21, '2020_07_07_103543_add_bank_branch_to_the_events_table', 12),
(22, '2020_07_08_062912_add_donation_amount_to_the_donation_table', 13);

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
(23, 'Abhishek', 'I was really impressed by the thing that i have', 'Developer', 'V1mqad0ESIe3ibXZ9k1NzlMZ2irMBKBNpp1EzY0L.jpeg', '', 'testimonial', 'abhishek', '2019-12-02 07:33:02', '2020-07-02 23:37:38', '', '', NULL, '', '', '', NULL),
(33, 'Event Management', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', 'fas fa-allergies', '', 'eI2l6BJQOFqYVllpS8QzHeElQOhAcsXZb0nyMbwp.png', 'services', 'event-management', '2019-12-07 09:28:50', '2020-06-15 22:54:00', '', '', NULL, '', '', '', NULL),
(35, 'Esteem spirit', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', NULL, '', NULL, 'services', 'esteem-spirit', '2019-12-07 09:33:03', '2020-06-15 22:54:44', '', '', NULL, '', '', '', NULL),
(36, 'Esteem', 'Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.', NULL, '', '', 'services', 'esteem', '2019-12-07 10:04:49', '2020-06-15 22:55:12', '', '', NULL, '', '', '', NULL),
(50, 'Events', '<p>Hello this is the event</p>', 'Recent Event', NULL, '', 'content', 'eventes', '2020-01-05 15:50:20', '2020-06-28 10:02:18', '', '', NULL, '', '', '', NULL),
(52, 'Index', NULL, NULL, NULL, NULL, 'pages', 'index', '2020-02-24 21:41:28', '2020-02-25 22:44:41', 'Home', 'Test', NULL, '', '', '', NULL),
(53, 'Event', NULL, NULL, NULL, NULL, 'pages', 'events', '2020-02-24 21:42:04', '2020-06-21 06:32:47', 'Event', 'Test', NULL, '', '', '', NULL),
(55, 'Single Blog', NULL, NULL, NULL, NULL, 'pages', 'single-blog', '2020-02-24 21:43:22', '2020-03-05 22:57:44', 'single-blog/vivo', 'Test', NULL, '', '', '', NULL),
(56, 'Blog', NULL, NULL, NULL, NULL, 'pages', 'blog', '2020-02-24 21:44:07', '2020-03-03 23:39:20', 'Blog', 'Test', NULL, '', '', '', NULL),
(57, 'Contact', NULL, NULL, NULL, NULL, 'pages', 'contact', '2020-02-24 21:44:29', '2020-03-03 23:39:51', 'Contact', 'Test', NULL, '', '', '', NULL),
(93, 'Gopal', 'I think this is the best It company ever i know i provide it all the 5 star company', NULL, '2jbMLI1hyU549lFN9fs8zJ9SNog1Ryy5JEufDlCJ.png', '', 'testimonial', 'gopal', '2020-03-06 11:25:09', '2020-07-02 23:39:09', '', '', NULL, NULL, NULL, NULL, NULL),
(106, 'banner', NULL, NULL, '5yOAxBFCiBvp4ln6LLhHhjdbpJlKw8FgL2Zh9fhq.jpeg', '', 'homepage_banner', 'banner', '2020-06-15 22:24:10', '2020-06-20 23:43:43', '', '', NULL, NULL, NULL, NULL, NULL),
(107, 'banner1', NULL, NULL, 'hTJy1LtsC5HXjrGRat4MUbk6VEevrk1A52zX672I.jpeg', '', 'homepage_banner', 'banner1', '2020-06-15 22:24:41', '2020-06-20 23:44:34', '', '', NULL, NULL, NULL, NULL, NULL),
(108, 'banner2', NULL, NULL, 'C3frm2QFtA07lJxbQZ8WxbbR7RkZY2SGIAj0wmGZ.jpeg', '', 'homepage_banner', 'banner2', '2020-06-15 22:25:09', '2020-06-20 23:45:27', '', '', NULL, NULL, NULL, NULL, NULL),
(109, 'Women\'s rights', 'Women’s work is often overlooked, unpaid and undervalued. They work in unsafe conditions and have precarious jobs. Greater corporate accountability for upholding human rights is needed.Across the world, women and girls are at risk of violence. We must challenge the social and cultural norms that lead to women’s vulnerability.There are structural causes of violence against women: beliefs, access to resources, and economics. Governments must do more to serve the needs of poor and excluded women, and to protect and advance their rights.', 'Women, who pay the highest price of unjust policies and patriarchal societies, must play a key role in order to bring about social change.', 'xlBGhuuyfApYqRKJIvz0VS85d5ZdDyA5RVPhsk0e.jpeg', '', 'news', 'womens-rights', '2020-06-21 06:22:47', '2020-07-02 21:24:04', '', '', NULL, NULL, NULL, NULL, NULL),
(112, 'About', NULL, NULL, NULL, NULL, 'pages', 'about', '2020-06-28 10:06:24', '2020-06-28 10:06:24', 'About', NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'Donation', NULL, NULL, NULL, NULL, 'pages', 'donation', '2020-06-29 02:30:22', '2020-06-29 02:30:22', 'Donation', 'Test', NULL, NULL, NULL, NULL, NULL),
(114, 'SingleEvents', NULL, NULL, NULL, NULL, 'pages', 'singleevents', '2020-06-29 02:31:21', '2020-06-29 02:31:21', 'Single Events', 'Test', NULL, NULL, NULL, NULL, NULL),
(115, 'Acces and quality of education', 'Whereas school enrolment rates have gone up, millions of children still find themselves at schools that for the most part fail to fulfil their mission of education suitably. Support to teachers’ training, improvement in teaching skills and the school environment, capacity-building of local communities and institutions, support to school management authorities… the association devotes a very significant share of its projects to strengthening educational systems so that they enable each child to fully develop his or her potential and become a responsible citizen.', '250 million children across the world do not know how to read or write, even after 4 years in school', 'veD3l00qxBk5JcW4xQgilK59MD2eA6prxfrCNIJj.jpeg', '', 'news', 'acces-and-quality-of-education', '2020-07-02 21:27:17', '2020-07-02 21:27:17', '', '', NULL, NULL, NULL, NULL, NULL),
(116, 'American Aid', '<div><div><div>More than 4,000 health centers around the world receive donated medicines and supplies from Americares, helping to improve the health of the communities they serve. Since our founding in 1979, Americares has deliv<i><b></b></i>ered more than $17 billion in humanitarian assistance and health-focused programs to 164 countries, including the U.S.We distribute over $900 million in quality medicine and supplies to more than 90 countries each year. Last year we shipped enough medicine to fill 12.6 million prescriptions along with 21 million medical supplies for patient care, safe surgery and more.Our global supply chain is built upon our strong relationships with an unrivaled network of&nbsp;in-country partners.&nbsp;<br><div><div></div></div>We work with our partner health providers to track medicine and supplies to ensure quality and safety, helping us deliver the right medicine at the right time to the people who desperately need it. &nbsp;<span>Every day, Americares delivers essential medicines and supplies to hundreds of hospitals and health clinics in the developing world and to&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"https://www.americares.orghttps//www.americaresfreeclinics.org/\">free clinics serving the uninsured</a>&nbsp;in the U.S.&nbsp; Since cholera began its deadly spread in Haiti in 2010, for example, the supply of nearly 500,000 treatments for patients with the disease kept a lot of people alive, while ongoing support also helped 465,000 including health workers, lower their risk of the disease.</span><br></div><div><div></div></div></div></div><div><div></div></div>', 'Providing Access Saves Lives', 'XWRRFHsaaFjnmoOyOz7oMzRD6f7KYgl62c1AlxYM.jpeg', '', 'news', 'american-aid', '2020-07-02 21:36:06', '2020-07-02 22:29:51', '', '', NULL, NULL, NULL, NULL, NULL),
(117, 'Nonprofits Have Laid Off 1.6M since March, Finds Center for Civil Society', '<span>For nearly 20 years, Dr. Lester Salamon of the&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"http://ccss.jhu.edu/\">Center for Civil Society Studies</a>&nbsp;at Johns Hopkins University has been tracking the growth of the nonprofit sector.&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"https://nonprofitquarterly.org/nonprofit-workforce-study-finds-strengths-in-growth-pay-and-resilience/\">Last year’s study</a>, for example, based on 2016 data, found that nonprofit employment had grown to tie manufacturing employment at 12.29 million. According to the 2017 figures contained in the latest report, nonprofit employment has passed manufacturing, having risen in 2017 to 12.49 million (versus 12.4 million for manufacturing). Had the report been published, as it was last year, in February, that might have been the headline.</span>The report finds a continuation of 2016’s trends in 2017. Nonprofit wages in 2017 totaled $670 billion. Nonprofit wages were 97 percent of private sector wages but generally&nbsp;exceeded&nbsp;private sector wages where nonprofits are prevalent. Intriguingly, nonprofits may soon be the nation’s second-largest employment sector. (The holder of that spot in 2017, accommodations and food services, has contracted severely under COVID-19.)<span>But of course, the report was not published in the winter—and, as the scope of the pandemic became clear, Salamon and his team decided to push the publication back, allowing the report to not just discuss 2017 data, but to look at the field in 2020—and, for the same reasons they decided to do so, that is&nbsp;NPQ’s&nbsp;focus here as well.</span>As Salamon and coauthor Chelsea Newhouse write:', 'As the pandemic reached the United States, it became clear that efforts to slow its spread would have profound impacts on all aspects of our lives, and not least of all on the nonprofit sector. But as is too often the case, these effects seemed especially likely to be ignored in the rush of attention to the other sectors impacted by the pandemic. This not only made this year’s report especially important in order to establish the most recent baseline of information possible against which to chart the virus’s impact, but also, it induced us to go beyond our normal practice of reporting only on past developments by seeking information that would allow us to make meaningful estimates of the impact of current developments, and current policy responses, on this crucial sector in something approaching real time.', 'LQkBE7cQhx3VZBka7MM9Q95AkzAGlUzLfDmY2Ui8.jpeg', '', 'news', 'nonprofits-have-laid-off-16m-since-march-finds-center-for-civil-society', '2020-07-02 23:09:33', '2020-07-02 23:09:33', '', '', NULL, NULL, NULL, NULL, NULL);

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
(2, 'eventorganizer', 'Event Organizer', 'Event Organizer\r\n', NULL, NULL),
(3, 'donor', 'Donor', NULL, '2020-07-06 22:24:53', '2020-07-06 22:24:53');

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
(2, 7, 'App\\Models\\Auth\\User'),
(2, 8, 'App\\Models\\Auth\\User\r\n'),
(2, 9, 'App\\Models\\Auth\\User'),
(2, 10, 'App\\Models\\Auth\\User'),
(3, 41, 'App\\Models\\Auth\\User');

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `bank_voucher` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `event_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `email`, `status`, `phone_number`, `mobile_number`, `address`, `state`, `postal_code`, `city`, `country`, `website`, `company_name`, `company_registration_number`, `vat_pan_no`, `contact_name`, `contact_email`, `contact_phone_number`, `contact_mobile_number`, `password`, `password_reference`, `password_change_code`, `image`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `bank_voucher`, `type`, `event_id`) VALUES
(1, 'Abhishek Thapa', 'abhishekthapa', 'abhishekthapa115@gmail.com', 'active', '9867739191', NULL, 'TripuraSundari Baitadi', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$urKVN2RFYOcMKoh.Ouk5.ufB9AMHSM61G/gBNeUDjUREQNAc3e3B2', '', '', NULL, NULL, NULL, 'N3DUHZrGRgsd0aBIKCcXE2sbtbNY6u7eBJYOIDIbv9UuEOTXM4ahLWPNu5tk', '2020-06-14 23:45:42', '2020-06-14 23:45:42', NULL, '', 'admin', NULL),
(5, 'abhi', 'abhi', 'gopal@gmail.com', 'active', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$fJzaEr/6OdYx4AXsVb0LMedPuh..Ye1pyrTF1AaZMUx.QgqXJNitm', '', '', NULL, NULL, NULL, 'Du0qXBw0G9DHs5jw1j5Uf2GErVfNWJ2z7vx5Kp60XYqsCQT1qUrZ4zXUjvN1', '2020-06-24 01:25:07', '2020-06-24 01:25:07', NULL, '', 'admin', NULL),
(6, 'Ganesh', 'ganesh', 'ganesh@gmail.com', 'in-active', '9867739191', '9867739191', 'Tripura', '', '', '', '', '', 'Companu', 'fjahfj', 'nsjdbj', 'bdjsbd', 'bhish@gmail.com', 'dnfskan', 'nsjncjdn', '$2y$10$5k9GKWw/r13mqGXOFIz9Iev2xHERZ1vWZrxiTgPNjxKFUsStfAtIu', 'ganesh123', '', '', NULL, NULL, NULL, '2020-06-28 09:10:18', '2020-06-28 09:10:18', NULL, '', 'admin', NULL),
(7, 'Birendra', 'biru', 'biru@gmail.com', 'in-active', '9867739191', NULL, 'Tripura', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$LQYK8yS3yb7HJQo73cx3AeD6lHxVPQvxjyUP5DLwabYg1Z8mEOCGW', 'birendra', '', '', NULL, NULL, 'JIb8ksrb3UIP6p14oJyhuUtRcokLcIeTZwDqT9xba9LnjgZdGIzhUOyqJGte', '2020-06-28 09:46:28', '2020-06-28 09:46:28', NULL, '', 'admin', NULL),
(8, 'prashant', 'prashant', 'prashant@gmail.com', 'in-active', '9868718874', '9867739191', 'tripura', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$ZJOf8kOAprB4Lf5s0YBVj.M7F9TQ7nKczce7ICXeUqWoA.DrKgz5a', 'abhishek', '', '', NULL, NULL, 'dYB6mq4Qdaenxf0BarJeQaf9rgHSBp7BSz8g1m18VdFwL0OFkUhS7PGkNuxk', '2020-06-29 00:15:02', '2020-06-29 00:15:02', NULL, '', 'admin', NULL),
(9, 'ravindra', 'ravi', 'ravi@gmail.com', 'in-active', '9867739191', '9867739191', 'jhulaghat', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$Otv7KsjCQDqli1MPBMM2lO8VKdSjODXvz0KsIN6aptu0Y0jvFFDhm', 'abhishek', '', '', NULL, NULL, 'RZSHZjHpwwV9ywBKkRrNOSpfRmP5pJGsHVq6lWpxYmfaIfHcSNPBEZNvZ0FH', '2020-07-03 00:27:27', '2020-07-03 00:27:27', NULL, '', 'admin', NULL),
(10, 'niman', 'niman', 'test@gmail.com', 'in-active', 'abcd', 'abcd', 'abcd', '', '', '', '', '', '', '', '', '', '', '', '', '$2y$10$VGEmRxIVb/O.HymvWlNpx.p7ozae6HpmxLlv1yzJn1ual4OxMXLuW', 'aaaaaa', '', '', NULL, NULL, 'okvnqqPt09OzHfGNVXwJysEAUaM3AMFUc1EFEkAArqflzLgpRn0nLO1xr3HK', '2020-07-03 00:52:38', '2020-07-03 00:52:38', NULL, '', 'admin', NULL),
(41, 'Abhishek Thapa', '', 'abhi@gmail.com', 'in-active', '', '', '8', '', '', 'tripura', '', '', '', '', '', '', '', '', '', '$2y$10$IvpmU2pq9CysCOdBd78rEO6ehQuDzNZ3/Ofc/njStYeL1eh6CXfmS', '', '', '', NULL, NULL, 'Bh71cWL0PL1dLkMfZJ7fpZ4HPhjV4hpFVkkeFXaMpumwbGHBkPKfBkP23TN1', '2020-07-08 00:25:34', '2020-07-08 00:25:34', NULL, '', 'donor', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donation_event_id_foreign` (`event_id`),
  ADD KEY `donation_user_id_foreign` (`user_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_event_id_foreign` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
