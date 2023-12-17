-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 08:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sattar_bro`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `myphoto` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `publication` varchar(255) DEFAULT NULL,
  `english` varchar(255) DEFAULT NULL,
  `german` varchar(255) DEFAULT NULL,
  `laboratory` text DEFAULT NULL,
  `membership` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `details`, `cv`, `myphoto`, `experience`, `name`, `mobile`, `email`, `publication`, `english`, `german`, `laboratory`, `membership`, `created_at`, `updated_at`) VALUES
(1, 'SELF-MOTIVATED TEAM PLAYERPOWERED BY CAFFEINE', '<p><span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">My name is Mohammad Abdus Sattar. I love meeting new people and finding ways to support them. People find me to be an upbeat, self-motivated, self-respectful, hardworking, and dedicated team player. My friends describe me as a funny, interesting, and sociable person with a great sense of humor. I enjoy reading and learning new things. I embrace all experiences as an excellent opportunity to grow and develop my personality.</span></p><p><span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">As a part of my hobby, I have been working as a freelance web designer since 2014. My current interest is in statistical programming in SAS and R.. I love to read books. When it comes to reading, I often choose topics that have nearly nothing to do with my career. I find it interesting how different people see life differently.</span></p><p><span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">Academically, I have completed my bachelor’s in pharmacy in 2014 and a Master’s in toxicology in 2020.</span><br></p>', '1702833202cv.pdf', '1702833202myphoto.png', '4', 'MD ABDUS SATTAR', '+49 0163 4250 420', 'sattar.pharm@gmail.com', '2', 'Fluent / C1', 'Very Good / B2', '<ul>\r\n                                    <li>Primary Cell Isolation and Culture</li>\r\n                                    <li>Metabolic activity / toxicological tests</li>\r\n                                    <li>differentiation of stem cells</li>\r\n                                    <li>Molecular Cloning / Mutagenesis</li>\r\n                                    <li>PCR and gel electrophoresis</li>\r\n                                    <li>RNA isolation and RT-qPCR</li>\r\n                                    <li>BRET/FRET Assay</li>\r\n                                    <li>ELISA, Western Blot and MALDI-ToF</li>\r\n                                    <li>Light and fluorescence microscopy</li>\r\n                                    <li>Data analysis on Excel, GraphPad Prism, SPSS, R\r\n                                        and SAS.</li>\r\n                                </ul>', '<ul>\r\n                                <li>Member of the German Stem Cell Network (GSCN)</li>\r\n                                <li>Former member of the Buddy Program at the University of Potsdam</li>\r\n                                <li>President of the Bangladeshi Students Alumni Association in Potsdam.</li>\r\n                                <li>Website creation on WordPress and Typo3</li>\r\n                                <li>First aid course</li>\r\n                                <li>Living in Germany - integration course on the German legal, social and political system.</li>\r\n                                <li>Driving license class B</li>\r\n                            </ul>', NULL, '2023-12-17 13:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `add_to_carts`
--

CREATE TABLE `add_to_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_to_carts`
--

INSERT INTO `add_to_carts` (`id`, `user_id`, `product_id`, `product_qty`, `created_at`, `updated_at`) VALUES
(37, '2', '3', '3', '2023-12-02 06:40:58', '2023-12-02 06:41:23'),
(38, '2', '2', '1', '2023-12-02 07:28:50', '2023-12-02 07:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `homepage` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `cate_id`, `image`, `title`, `slug`, `details`, `status`, `homepage`, `created_at`, `updated_at`) VALUES
(2, '5', '1702665238.jpg', 'Miscovery incommode earnestly commanded if', 'miscovery-incommode-earnestly-commanded-if', '<p>Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.</p><p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.</p><p>Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.</p>', 0, 1, '2023-12-15 12:33:58', '2023-12-15 12:33:58'),
(3, '4', '1702665310.jpg', 'Expression acceptance imprudence particular', 'expression-acceptance-imprudence-particular', '<p>Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.</p><p>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.</p><p>Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.</p>', 0, 1, '2023-12-15 12:35:10', '2023-12-15 12:35:10'),
(4, '5', '1702665335.jpg', 'Bethering occurs concerns removing desirous.', 'bethering-occurs-concerns-removing-desirous', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.</p>', 0, 1, '2023-12-15 12:35:35', '2023-12-17 05:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_descrip` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `meta_title`, `meta_descrip`, `meta_keywords`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Technology', 'technology', 'Technology', 0, 0, 'Technology', 'Technology', 'Technology', '1701518621.png', '2023-12-02 06:03:41', '2023-12-15 11:13:22'),
(5, 'Web Tech', 'web-tech', 'Web Tech', 0, 0, 'Web Tech', 'Web Tech', 'Web Tech', '1701518661.png', '2023-12-02 06:04:21', '2023-12-15 11:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Tomatom', 'tom@gmail.com', 'I liked your research paper', 'I want to read your research paper. is it possible?', '0', '2023-12-15 13:43:39', '2023-12-15 13:43:39'),
(3, 'Jhon', 'Jhon@gmail.com', 'Hello I want to talk to you', 'Hello\r\nI want to talk to you ok?', '0', '2023-12-15 14:03:29', '2023-12-15 14:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `inistitute` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `inistitute`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BACHELOR OF PHARMACY', 'DHAKA INTERNATIONAL UNIVERSITY, BANGLADESH', 'JANUARY 2014', '0', '2023-12-17 11:47:37', '2023-12-17 11:50:18'),
(3, 'MASTER OF SCIENCE IN TOXICOLOGY', 'UNIVERSITY OF POTSDAM, GERMANY', 'AUG 2020', '0', '2023-12-17 11:57:26', '2023-12-17 12:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `inistitute` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `date`, `designation`, `inistitute`, `details`, `status`, `created_at`, `updated_at`) VALUES
(2, 'JUN 2014 – DEC 2014', 'IN-PLANT TRAINING', 'BIOPHARMA LIMITED, DHAKA, BANGLADESH', NULL, 0, '2023-12-17 12:39:17', '2023-12-17 12:39:17'),
(3, 'DEC 2017 – JAN 2018', 'LABORATORY ANIMAL SCIENCE/FELASA B-TRAINING', 'UNIVERSITY OF POTSDAM', '<span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">The theoretical part (2 credits, 18 hours) with the exam and the practical part (37 hours) on laboratory animal science. Certified with FELASA B&nbsp;</span>', 0, '2023-12-17 12:39:50', '2023-12-17 12:49:43'),
(4, 'NOV 2017 – DEC 2017', 'INTERNSHIP IN THE LABORATORY', 'UNIVERSITY OF POTSDAM', '<span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">Mass spectrometric determination of sulfotransferase activity in HepG2 cells • Cytosol isolation and preparation of S9 mixture from rat liver and GST induction measurement • Quantitation of glutathione by an enzymatic recycling assay • Induction of CYP3A4 in HepG2 cells by Western blotting • Genotyping of N-acetyltransferase 2</span>', 0, '2023-12-17 12:40:27', '2023-12-17 12:49:05'),
(5, 'JUL 2018 – AUG 2018', 'INTERNSHIP PROJECT', 'UNIVERSITY OF POTSDAM', '<span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\"><b>Project:</b> Toxicological Characterization Of T‑BOOH Cell culture, cytotoxicity (CASY, LDH, Resazurin), global DNA methylation (LC-MS/MS), genotoxicity (Alkaline Comet Assay). C.elegans culture, handling and synchronization (bleaching technique).</span>', 0, '2023-12-17 12:40:59', '2023-12-17 12:48:51'),
(6, 'OCT 2018 – NOV 2018', 'INTERNSHIP PROJECT', 'UNIVERSITY OF POTSDAM', '<span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\"><b>Project:</b> Phytochemical-protein adducts Cell culture, protein purification, analysis of alliin-protein interaction (MALDI-ToF MS)</span>', 0, '2023-12-17 12:41:30', '2023-12-17 12:48:40'),
(7, 'JAN 2019 – MAR 2019', 'INTERNSHIP PROJECT', 'UNIVERSITY OF POTSDAM', '<span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\"><b>Project:</b> Post-translational protein modification in human diseases. HepG2 cell culture, immunoprecipitation, western blot, MALDI-ToF MS</span>', 0, '2023-12-17 12:42:01', '2023-12-17 12:48:27'),
(8, 'JUN 2019 – JAN 2020', 'MASTER\'S THESIS', 'UNIVERSITY OF POTSDAM', '<span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\"><b>Project:</b> Association between plasma polyphenol measurements and metabolic syndrome and its components: analysis within the EPIC cohort. Epidemiological study design, statistical analysis in SAS, random forest imputation in R, multivariate logistic regression, restricted cubic splines regression.</span>', 0, '2023-12-17 12:42:39', '2023-12-17 12:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_29_112249_create_sliders_table', 2),
(6, '2023_11_29_112747_create_categories_table', 3),
(7, '2023_11_29_113659_create_products_table', 4),
(8, '2023_12_01_112705_create_addto_carts_table', 5),
(9, '2023_12_01_220923_create_orders_table', 6),
(10, '2023_12_02_124413_create_order_items_table', 7),
(11, '2023_12_15_174150_create_blogs_table', 8),
(12, '2023_12_15_192621_create_contacts_table', 9),
(13, '2023_12_17_123347_create_settings_table', 10),
(14, '2023_12_17_132517_create_socials_table', 11),
(15, '2023_12_17_151525_create_abouts_table', 12),
(16, '2023_12_17_173849_create_education_table', 13),
(17, '2023_12_17_181405_create_internships_table', 14),
(18, '2023_12_17_185750_create_workshops_table', 15),
(19, '2023_12_17_185824_create_publications_table', 15),
(20, '2023_12_17_185923_create_testimonials_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(121) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `traking_no` varchar(255) DEFAULT NULL,
  `total_price` varchar(121) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `mobile`, `address`, `city`, `state`, `country`, `zipcode`, `traking_no`, `total_price`, `status`, `message`, `created_at`, `updated_at`) VALUES
(1, '1', 'Jhon doe', '01681789989', 'mirpur1, ShaAliBagh', 'Dhaka', 'Mirpur', 'Bangladesh', '1216', 'RAS95562SHOP', '91000', 1, NULL, '2023-12-02 13:47:12', '2023-12-05 14:58:37'),
(2, '1', 'Jhon doe', '01681789989', 'mirpur1, ShaAliBagh', 'Dhaka', 'Mirpur', 'Bangladesh', '1216', 'RAS46529SHOP', '1000', 1, NULL, '2023-12-02 13:50:20', '2023-12-02 18:52:04'),
(3, '1', 'Jhon doe', '01681789989', 'mirpur1, ShaAliBagh', 'Dhaka', 'Mirpur', 'Bangladesh', '1216', 'RAS23003SHOP', '1250', 1, NULL, '2023-12-02 19:00:49', '2023-12-05 17:10:14'),
(4, '1', 'Jhon doe', '01681789989', 'mirpur1, ShaAliBagh', 'Dhaka', 'Mirpur', 'Bangladesh', '1216', 'RAS93672SHOP', '91300', 1, NULL, '2023-12-03 11:52:13', '2023-12-03 11:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '5', '2', '90000', '2023-12-02 13:47:12', '2023-12-02 13:47:12'),
(2, '1', '3', '2', '1000', '2023-12-02 13:47:12', '2023-12-02 13:47:12'),
(3, '2', '3', '2', '1000', '2023-12-02 13:50:20', '2023-12-02 13:50:20'),
(4, '3', '7', '3', '1250', '2023-12-02 19:00:49', '2023-12-02 19:00:49'),
(5, '4', '5', '2', '90000', '2023-12-03 11:52:13', '2023-12-03 11:52:13'),
(6, '4', '6', '2', '300', '2023-12-03 11:52:13', '2023-12-03 11:52:13'),
(7, '4', '2', '1', '1000', '2023-12-03 11:52:14', '2023-12-03 11:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rasel@gmail.com', '$2y$10$WRUEAo81MVUaE0uaykSRmee8iTj7KH2kDMo8eZ2AqKMCF612uXWki', '2023-12-15 14:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `small_description` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `original_price` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `delivery_in` varchar(255) DEFAULT NULL,
  `delivery_out` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `trending` tinyint(4) DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_keywords` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `discount`, `quantity`, `image`, `video`, `delivery_in`, `delivery_out`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 2, 'CUTE MINI BIRD CAGE Dhaka', 'cute-mini-bird-cagee', '<p>এখন আপনার আদরের সোনামণি সারাক্ষণ হাসিখুশি থাকবে এবং &nbsp;মজা করে খেলতেই থাকবে।</p>', '<p>Cute Mini Bird Cage<br>এখন আপনার আদরের সোনামণি সারাক্ষণ হাসিখুশি থাকবে এবং &nbsp;মজা করে খেলতেই থাকবে।<br>আপনারা যারা আপনাদের সোনামণিদের কর্ম ব্যস্ততার কারণে সময় দিতে পারছেন না। তারা এই অসাধারণ কিউট মিনি বার্ড কেজটি আপনার সোনামণির জন্য অর্ডার করুন। দেখবেন আপনার আদরের সোনামণি সারাদিন হাসি খুশি থাকবে।&nbsp;<br>আপনারা যারা আপনার আদরের ছোট ছেলে মেয়ে বা ভাগিনা, ভাগ্নি, ভাতিজা, ভাতিজি এদের মজার একটি গিফট আইটেম দিয়ে খুশি করতে চাচ্ছেন তারা অনায়াসে এই খেলনাটি গিফট করতে পারেন।<br>এই কিউট মিনি বার্ড কেজ তিনটি পেন্সিল ব্যাটারির মাধ্যমে চলে যা একবার লাগালে আপনি অনেকদিন ব্যবহার করতে পারবেন।<br>তিনটি পেন্সিল ব্যাটারি লাগাবে পণ্যটিতে। ব্যাটারি দেওয়া নেই।</p>', '1200', '1000', '16.666666666667', '12', '1701520821.webp', NULL, NULL, NULL, 0, 1, 'CUTE MINI BIRD CAGE', NULL, NULL, '2023-11-29 06:32:47', '2023-12-02 06:40:21'),
(2, 1, 'রিচার্জেবল ফ্যান এন্ড লাইট', 'rechargeable-fan', '<p>রিচার্জেবল টেবিল ফ্যান উইথ লাইট</p>', '<p>রিচার্জেবল টেবিল ফ্যান উইথ লাইট<br>এই গরমে প্রশান্তি কে না চায়। তাই সবারপন্য আপনাদের জন্য নিয়ে এসেছে রিচার্জেবল টেবিল ফ্যান উইথ লাইট।<br>পন্যের বিবারণ : * টাইপ: টেবিল ফ্যান উইথ লাইট রিচার্জ্যাবল * রিচার্জ্যাবল: ফুল চার্জে ফ্যান ৪ ঘন্টা এবং লাইট ৮ ঘন্টা জ্বলবে। * স্টাইলিশ ফোল্ডিং ডিজাইন * লো এন্ড হাই লাইট অ্যাডজাস্টেবল সুইচ * LED লাইট ভোল্টেজঃ 220 V, 50 Hz * ফ্যান স্পিডঃ 2100 RPM * ব্যাটারী ক্যাপাসিটি: 1600 mAh * ম্যাটেরিয়াল: PVC প্লাস্টিক * কালারঃ র‌্যান্ডম</p>', '1200', '1000', '16.666666666667', '19', '1701366339.webp', NULL, NULL, NULL, 0, 1, 'রিচার্জেবল টেবিল ফ্যান উইথ লাইট', 'রিচার্জেবল টেবিল ফ্যান উইথ লাইট', '<p>রিচার্জেবল টেবিল ফ্যান উইথ লাইট</p>', '2023-11-30 11:45:39', '2023-12-03 11:52:14'),
(3, 5, 'T800 Ultra Smartwatch Series 8 With Wireless Charging Waterproof', 't800-ultra-smartwatch-series-8-with-wireless-charging-waterproof', '<p>T800 Ultra price in Bangladesh is ৳ 1,300. This T800 Ultra smartwatch comes with a 1.99-inch IPS display that supports 240 x 285 pixels of resolution.&nbsp;</p>', '<p>T800 Ultra price in Bangladesh is <strong>৳ 1,300</strong>. This <strong>T800 Ultra smartwatch</strong> comes with a 1.99-inch IPS display that supports 240 x 285 pixels of resolution. Here, this watch has connectivity of V5.0 Bluetooth which offers to connect with the smartphone wirelessly. And the watch has a 350mAh Lithium-ion polymer battery that provides a long during battery performance. Additionally, it includes a time-changing button, &amp; a 49mm silicone band strap that ensures a comfortable wearing experience.</p>', '1100', '1000', '9.0909090909091', '4', '1701520583.jpg', NULL, NULL, NULL, 0, 1, 'T800 Ultra Smartwatch Series 8 With Wireless Charging Waterproof', 'Smartwatch', '<p>Smartwatch</p>', '2023-12-01 04:33:04', '2023-12-02 13:50:20'),
(4, 3, 'Multipurpose Laptop And Reading Table', 'multipurpose-laptop-and-reading-table', '<p>Multipurpose Laptop And Reading Table</p>', '<p>Multipurpose Laptop And Reading Table Multipurpose Laptop And Reading Table</p>', '900', '700', '22.222222222222', '12', '1701518722.jpg', NULL, NULL, NULL, 0, 1, 'Multipurpose Laptop And Reading Table', 'Multipurpose Laptop And Reading Table', '<p>Multipurpose Laptop And Reading Table</p>', '2023-12-02 06:05:22', '2023-12-02 06:05:29'),
(5, 4, 'Iphone 14 Plus in Bangladesh', 'iphone-14-plus', '<p>Only limited offer for iphone 14 plus.</p>', '<p>Only limited offer for iphone 14 plus. Only limited offer for iphone 14 plus. Only limited offer for iphone 14 plus.</p>', '100000', '90000', '10', '1', '1701520524.png', NULL, NULL, NULL, 0, 1, 'Only limited offer for iphone 14 plus.', 'Only limited offer for iphone 14 plus.', '<p>Only limited offer for iphone 14 plus.</p>', '2023-12-02 06:07:11', '2023-12-03 11:52:13'),
(6, 5, 'Knife For Sell', 'knife-for-sell', '<p>Knife For Sell</p>', '<p>Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell Knife For Sell&nbsp;</p>', '720', '300', '58.333333333333', '16', '1701518922.jpg', NULL, NULL, NULL, 0, 1, 'Knife For Sell Knife For Sell Knife For Sell Knife For Sell', 'Knife For Sell Knife For Sell Knife For Sell Knife For Sell', '<p>Knife For Sell Knife For Sell Knife For Sell Knife For Sell&nbsp;</p>', '2023-12-02 06:08:42', '2023-12-03 11:52:13'),
(7, 1, 'Blue Waterproof Electronic Arc Plasma Lighter With Flash Light', 'blue-waterproof-electronic-arc-plasma-lighter-with-flash-light', '<p>Blue Waterproof Electronic Arc Plasma Lighter With Flash Light</p>', '<p>Blue Waterproof Electronic Arc Plasma Lighter With Flash Light Blue Waterproof Electronic Arc Plasma Lighter With Flash Light</p>', '1500', '1250', '16.666666666667', '17', '1701519087.jpg', NULL, NULL, NULL, 0, 1, 'Blue Waterproof Electronic Arc Plasma Lighter With Flash Light', 'Blue Waterproof Electronic Arc Plasma Lighter With Flash Light', '<p>Blue Waterproof Electronic Arc Plasma Lighter With Flash Light</p>', '2023-12-02 06:11:28', '2023-12-02 19:00:50'),
(9, 2, 'T800 Ultra Smartwatch Series 8 With Wireless Charging Waterproof', 't800-ultra-smartwatch-series-8-with-wireless-charging-waterproof', '<p>T800 Ultra price in Bangladesh is ৳ 1,300. This T800 Ultra smartwatch comes with a 1.99-inch IPS display that supports 240 x 285 pixels of resolution.&nbsp;</p>', '<p>T800 Ultra price in Bangladesh is <strong>৳ 1,300</strong>. This <strong>T800 Ultra smartwatch</strong> comes with a 1.99-inch IPS display that supports 240 x 285 pixels of resolution. Here, this watch has connectivity of V5.0 Bluetooth which offers to connect with the smartphone wirelessly. And the watch has a 350mAh Lithium-ion polymer battery that provides a long during battery performance. Additionally, it includes a time-changing button, &amp; a 49mm silicone band strap that ensures a comfortable wearing experience.</p>', '1100', '1000', '9.0909090909091', '12', '1701520788.webp', NULL, NULL, NULL, 0, 1, 'T800 Ultra Smartwatch Series 8 With Wireless Charging Waterproof', 'Smartwatch', '<p>Smartwatch</p>', '2023-12-01 04:33:04', '2023-12-02 06:39:48'),
(10, 3, 'Multipurpose Laptop And Reading Table', 'multipurpose-laptop-and-reading-table', '<p>Multipurpose Laptop And Reading Table</p>', '<p>Multipurpose Laptop And Reading Table Multipurpose Laptop And Reading Table</p>', '900', '700', '22.222222222222', '12', '1701518722.jpg', NULL, NULL, NULL, 0, 1, 'Multipurpose Laptop And Reading Table', 'Multipurpose Laptop And Reading Table', '<p>Multipurpose Laptop And Reading Table</p>', '2023-12-02 06:05:22', '2023-12-02 06:05:29'),
(12, 1, 'Blue Waterproof Electronic Arc Plasma Lighter With Flash Light', 'blue-waterproof-electronic-arc-plasma-lighter-with-flash-light', '<p>Blue Waterproof Electronic Arc Plasma Lighter With Flash Light</p>', '<p>Blue Waterproof Electronic Arc Plasma Lighter With Flash Light Blue Waterproof Electronic Arc Plasma Lighter With Flash Light</p>', '1500', '1250', '16.666666666667', '20', '1701519087.jpg', NULL, NULL, NULL, 0, 1, 'Blue Waterproof Electronic Arc Plasma Lighter With Flash Light', 'Blue Waterproof Electronic Arc Plasma Lighter With Flash Light', '<p>Blue Waterproof Electronic Arc Plasma Lighter With Flash Light</p>', '2023-12-02 06:11:28', '2023-12-02 06:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `name`, `details`, `button_name`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Md Abdus Sattar', '<p><span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">Wolfgang Mende, LL, Gerrit Freund, Vincent GJ Guillaume , Tim Ruhl, Justus P. Beier and Rebekka Götzl. The osteogenic potential of adipose - derived stem cells isolated from the subcutaneous fat of female donors remains unaffected by age. J. Pers. Med. 2023</span><br></p>', NULL, NULL, 0, '2023-12-17 13:40:49', '2023-12-17 13:40:49'),
(4, 'Md Abdus Sattar', '<p><span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">LL, Gerrit Freund, Vincent GJ Guillaume , Tim Ruhl, Justus P. Beier and Rebekka Götzl. Association between donor age and osteogenic potential of adipose - derived stem cells in bone tissue engineering: an updated review . J. Pers. Med. 2023</span><br></p>', NULL, NULL, 0, '2023-12-17 13:41:20', '2023-12-17 13:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_title` varchar(255) DEFAULT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `mobile_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `hero_img` varchar(255) DEFAULT NULL,
  `hero_text` text DEFAULT NULL,
  `hero_subtext` text DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `admin_title`, `site_title`, `site_logo`, `mobile_logo`, `favicon`, `hero_img`, `hero_text`, `hero_subtext`, `mobile`, `email`, `copyright`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Home | MAS-Md Abdus Sattar | Pharmacist | Toxicologist | Web designer', 'Home | MAS-Md Abdus Sattar | Pharmacist | Toxicologist | Web designer', '1702818829site_logo.png', '1702818829mobile_logo.png', '1702818829favicon.png', '1702833020hero_img.png', 'I\'m <br> M.A Sattar', '<p><span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif; font-size: 18px;\">Pharmacy | Toxicology | Data Analysis | Web Development</span><br></p>', '+49 1525 104 9640', 'sattar.pharm@gmail.com', 'Md Abdus Sattar | All Rights Reserved', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">Kaiser-Friedrich-Str. 134,</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">14469 Potsdam</p>', NULL, '2023-12-17 11:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` text DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `inistitute` text NOT NULL,
  `details` text NOT NULL,
  `status` text NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `date`, `designation`, `inistitute`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MARCH 2019 – MARCH 2021', 'STUDENT ASSISTANT', 'CHARITÉ - UNIVERSITY MEDICINE BERLIN', 'Conception and implementation of a process for the central recording of laboratory animal numbers, data analysis, evaluation and presentation of data on animal experiments, scientific research and literature research.', '0', '2023-11-29 06:08:11', '2023-11-29 06:08:11'),
(2, 'MAY 2020 – NOVEMBER 2020 AND FEBRUARY 2022 – MAY 2022', 'RESEARCH ASSISTANT', 'HELMHOLTZ CENTER POTSDAM', '<p><span style=\"color: rgb(102, 102, 102); font-family: Kanit, sans-serif;\">Development of web content, creation of a literature database, database management.</span><br></p>', '0', '2023-12-17 11:55:08', '2023-12-17 11:55:08'),
(3, 'MARCH 2021 – SEPTEMBER 2021', 'RESEARCH ASSISTANT', 'UNIVERSITY OF LEIPZIG', '<p><strong>Project:</strong> Molecular control of G-coupled protein receptor signaling. Molecular cloning of C.elegans arrestin-1 by site-directed mutagenesis, PCR, gel electrophoresis, DNA transfection with Lipofectamine 2000, BRET assay, ligand-receptor interaction by fluorescence microscopy.</p>', '0', '2023-11-29 06:08:39', '2023-12-15 10:58:08'),
(4, 'MARCH 2022 - TODAY', 'PHD RESEARCHER', 'UNIVERSITY HOSPITAL RWTH AACHEN', '<p><strong>Project:</strong> Osteogenic potential of adipose stem cells in periodontal tissue engineering. Isolation of primary adipose stem cells from human and mouse adipose tissue, stem cell differentiation, ELISA, RT-qPCR.</p>', '0', '2023-11-29 06:08:39', '2023-12-15 10:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `Twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `researchgate` varchar(255) DEFAULT NULL,
  `googlescholar` varchar(255) DEFAULT NULL,
  `reddit` varchar(255) DEFAULT NULL,
  `Medium` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `Twitter`, `linkedin`, `instagram`, `youtube`, `researchgate`, `googlescholar`, `reddit`, `Medium`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'sdfaf', NULL, 'sdfsaf', 'sdfs', 'sdfssdfsfs', NULL, NULL, NULL, NULL, '2023-12-17 07:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `zipcode` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `photo`, `address`, `city`, `state`, `country`, `zipcode`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sattar jayed', 'sattar.pharm@gmail.com', '491251049640', NULL, 'mirpur1, ShaAliBagh', 'Dhaka', 'Mirpur', 'Germany', '1216', NULL, '$2y$10$bNOWra468X7iiTgwqPRhsOipHDFRRwZCC8PJ5GfKit8ZcVo6woeym', '1', NULL, '2023-11-29 05:02:34', '2023-12-02 08:17:09'),
(2, 'Rasel Mahmud', 'rasel@gmail.com', NULL, NULL, NULL, '', '', '', '', NULL, '$2y$10$/dTHnTyISuKrXFwT1zwRU.tB05whh8ZGo1ZumIptXtO.ALdIzfUBq', '1', NULL, '2023-11-29 05:44:43', '2023-12-17 08:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `inistitute` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `date`, `designation`, `inistitute`, `status`, `created_at`, `updated_at`) VALUES
(2, '17.12.2019', 'Scientific Event – One year Charité 3R: Results and perspectives', 'CHARITÉ - UNIVERSITY MEDICINE BERLIN', 0, '2023-12-17 13:13:02', '2023-12-17 13:13:02'),
(3, '12/03/2019 – 03/04/2019', 'Workshop – Then and Now in nutritional assessment: experiences across Europe', 'GERMAN INSTITUTE FOR HUMAN NUTRITION (DIFE), BERGHOLZ-REHBRÜCKE, POTSDAM', 0, '2023-12-17 13:13:25', '2023-12-17 13:13:25'),
(4, '07.12.2021 | On-line', 'Webinar - The principles of the 3Rs: Lessons Learned from History', NULL, 0, '2023-12-17 13:13:47', '2023-12-17 13:13:47'),
(5, '09/13/2022 – 09/16/2022', 'Scientific Event – The 10th GSCN Conference', 'MUNSTERLAND, MUNSTER', 0, '2023-12-17 13:14:08', '2023-12-17 13:14:08'),
(6, '06/05/2023 – 06/07/2023', 'Workshop - Introduction to Systematic Review and Meta-analysis', 'CAMARADES BERLIN PRECLINICAL SYSTEMATIC REVIEW & META-ANALYSIS', 0, '2023-12-17 13:14:29', '2023-12-17 13:14:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_to_carts`
--
ALTER TABLE `add_to_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_to_carts`
--
ALTER TABLE `add_to_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
