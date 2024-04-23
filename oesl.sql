-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oesl`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_projects`
--

CREATE TABLE `all_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_services`
--

CREATE TABLE `all_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_services`
--

INSERT INTO `all_services` (`id`, `title`, `subtitle`, `description`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'OUR SERVICES', 'OUR SERVICES', '<p>At <strong>Ofrima Energy Services Limited</strong>, we are committed to delivering comprehensive and innovative solutions to meet the diverse needs of the oil and gas sector. With our years of experience and expertise, multi-skilled personnel, innovative technology and team work.</p>\r\n\r\n<p>We offer a wide range of services tailored to optimize operations, enhance safety, and maximize efficiency. Our dedication to excellence and customer satisfaction makes us your trusted partner in the oil and gas industry.</p>', 'oesl_injector_coil.jpg', 'our-services', 0, NULL, '2024-04-08 15:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Israel Azubuike', 'israelazubuike@test.com', 'Wellhead Servicing Enquiry', 'What is the company policy on wellhead servicing.\r\n\r\nKindly let me know, my team awaits your swift response', 0, '2024-04-15 09:10:59', '2024-04-15 09:10:59'),
(5, 'Kyra Whitaker', 'kapo@mailinator.com', 'Ut vitae animi null', 'Delectus quam nobis', 0, '2024-04-17 10:08:00', '2024-04-17 10:08:00'),
(8, 'Marsden Glover', 'fade@mailinator.com', 'Quis sunt consequatu', 'Laborum Iure ad omn', 0, '2024-04-17 10:12:01', '2024-04-17 10:12:01'),
(9, 'Zachery Shepard', 'fivulut@mailinator.com', 'Qui adipisci impedit', 'Duis nostrum dolorem', 0, '2024-04-17 10:17:28', '2024-04-17 10:17:28'),
(11, 'Gillian Stein', 'dukitygu@mailinator.com', 'Molestiae provident', 'Magni voluptatibus s', 0, '2024-04-18 20:17:40', '2024-04-18 20:17:40'),
(12, 'Ori Patrick', 'direqu@mailinator.com', 'Rerum eiusmod offici', 'Modi molestiae maior', 0, '2024-04-18 20:50:10', '2024-04-18 20:50:10'),
(13, 'Garth Austin', 'muho@mailinator.com', 'Eligendi cupidatat r', 'Perspiciatis est s', 0, '2024-04-18 20:51:56', '2024-04-18 20:51:56'),
(14, 'Tucker Mccall', 'hyxyb@mailinator.com', 'Cillum et velit volu', 'Iure dolore voluptat', 0, '2024-04-18 20:53:19', '2024-04-18 20:53:19'),
(16, 'Silas Knowles', 'qynunuq@mailinator.com', 'Sunt nesciunt iure', 'In ut enim dolores u', 0, '2024-04-18 20:58:56', '2024-04-18 20:58:56'),
(18, 'Shoshana Hill', 'jufipidaxi@mailinator.com', 'Est sunt natus ex od', 'Adipisci recusandae', 0, '2024-04-18 22:00:13', '2024-04-18 22:00:13'),
(20, 'Moses Stephenson', 'fywogyho@mailinator.com', 'Maiores repellendus', 'Quidem quis sapiente', 0, '2024-04-18 22:14:54', '2024-04-18 22:14:54'),
(21, 'Halee Mcpherson', 'tytam@mailinator.com', 'Est officia ut accus', 'Et maxime anim dolor', 0, '2024-04-18 22:46:25', '2024-04-18 22:46:25'),
(22, 'Echo Gilbert', 'gevymoxa@mailinator.com', 'Quos anim earum esse', 'Officia laborum ulla', 0, '2024-04-18 22:50:37', '2024-04-18 22:50:37');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_29_160726_create_settings_table', 2),
(6, '2024_04_01_042805_create_services_table', 3),
(7, '2024_04_01_043317_create_service_categories_table', 4),
(8, '2024_04_01_104850_create_sliders_table', 5),
(9, '2024_04_03_200617_create_project_categories_table', 6),
(10, '2024_04_03_213706_create_projects_table', 7),
(11, '2024_04_05_092038_create_team_categories_table', 8),
(12, '2024_04_05_102607_create_teams_table', 9),
(13, '2024_04_08_142740_create_all_services_table', 10),
(14, '2024_04_09_120049_create_all_projects_table', 11),
(15, '2024_04_15_060320_create_contacts_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_cat_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_cat_id`, `title`, `subtitle`, `description`, `image`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'Lillian Kemp', NULL, '<p>Description</p>', '202404032212Capture,,.PNG', 'lillian-kemp', 0, 1, NULL, '2024-04-05 02:51:17'),
(2, 3, 'Explorations', NULL, '<p><strong>Well Development:</strong> Designing and drilling production wells to extract oil or gas from reservoirs.</p>\r\n\r\n<p><br />\r\n<strong>Enhanced Oil Recovery (EOR): </strong>Implementing EOR techniques such as water injection, gas injection, or chemical flooding to increase oil recovery from mature fields.</p>\r\n\r\n<p><strong>Gas Processing:</strong> Constructing facilities to separate, treat, and process natural gas for sale or further transportation.</p>', 'IMG_20131216_082156.jpg', 'explorations', 0, 0, NULL, '2024-04-11 04:08:53'),
(3, 1, 'Production', NULL, '<p><strong>Seismic Surveys</strong>: Conducting seismic surveys to identify potential hydrocarbon reservoirs beneath the earth&#39;s surface.</p>\r\n\r\n<p><strong>Exploratory Drilling:</strong> Drilling exploration wells to confirm the presence of oil or gas reserves.</p>\r\n\r\n<p><strong>Reservoir Characterization</strong>: Using advanced technologies to analyze reservoir properties and estimate reserves</p>', 'Capture.PNG', 'production', 0, 0, NULL, '2024-04-11 04:09:14'),
(4, 6, 'Projects', NULL, '<p><strong>Ofrima Energy Services Limited,</strong> we approach every project with a commitment to excellence, innovation, and sustainability. Our team of industry experts combines cutting-edge technology with decades of experience to overcome challenges, maximize efficiency, and drive success. From conception phase to project completion, we strive to exceed expectations and deliver exceptional results.</p>', '202404101024oesl-breadcrumbs-bg.png', 'projects', 1, 0, NULL, '2024-04-10 09:45:15'),
(5, 7, 'PVT ANALYSIS', NULL, '<p><strong>Our PVT analysis</strong> empowers you to make informed decisions about well completion, artificial lift selection, and reservoir development. &nbsp;Gain a competitive edge with our in-depth PVT analysis services and unlock the full potential of your valuable resources.</p>\r\n\r\n<p>Fuel smarter reservoir management decisions with our comprehensive PVT (Pressure-Volume-Temperature) analysis services. &nbsp;</p>\r\n\r\n<p><strong>PVT analysis</strong> is a cornerstone of oil and gas exploration and production, providing crucial insights into the behavior of reservoir fluids under varying pressure and temperature conditions.</p>', '202404182359IMG_20140513_142806.jpg', 'pvt-analysis', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `description`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Production', 'Production', 'production', NULL, 0, NULL, '2024-04-10 10:28:57'),
(2, 'Infrastructure', 'Infrastructure', 'infrastructure', NULL, 0, NULL, '2024-04-10 10:29:25'),
(3, 'Explorations', 'Explorations', 'explorations', NULL, 0, NULL, '2024-04-10 10:26:14'),
(4, 'Industrial construction', 'Construction\r\nIndustrial construction projects  update change', 'industrial-construction', NULL, 1, NULL, '2024-04-10 10:28:28'),
(5, 'QHSE Commitment', 'QHSE Commitment', 'qhse-commitment', NULL, 0, NULL, '2024-04-10 10:31:24'),
(6, 'Project Overview', 'Project Overview', 'project-overview', NULL, 0, NULL, NULL),
(7, 'PVT Analysis', 'PVT Analysis', 'pvt-analysis', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_cat_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_cat_id`, `name`, `description`, `image`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'COIL TUBING', '<p>Optimize your oil and gas production with our innovative coiled tubing (CT) services. Coiled tubing is a revolutionary approach to well intervention, utilizing a continuous length of small-diameter steel pipe for a wide range of downhole operations.</p>\r\n\r\n<p>This cost-effective and versatile method offers significant advantages over traditional techniques, improving efficiency and reducing downtime. &nbsp;Our experienced team leverages cutting-edge CT technology to deliver a comprehensive suite of solutions, maximizing your well&#39;s potential.</p>', 'IMG-20200926-WA0031_edit.jpg', 'coil-tubing', 0, 0, NULL, '2024-04-14 13:28:38'),
(2, 2, 'WIRELINE/SLICKLINE', '<p>Ensure informed decision-making and optimal well performance with our industry-leading wireline and slickline services. &nbsp;These essential well intervention methods provide a safe and efficient way to access your wellbore for critical tasks.</p>\r\n\r\n<p>Wireline: Utilizing a multi-conductor cable, wireline offers real-time data acquisition and manipulation capabilities. &nbsp;Our advanced tools gather vital information about formation characteristics, pressure, temperature, and fluid flow, empowering you to optimize production strategies.</p>\r\n\r\n<p>Slickline: &nbsp;For simpler downhole operations, slickline employs a single, non-electric cable for deploying and retrieving tools. &nbsp;This versatile method is ideal for setting and removing plugs, valves, and gauges, as well as performing well cleanouts and basic diagnostics.</p>\r\n\r\n<p>By combining wireline and slickline expertise, we deliver a comprehensive well intervention package tailored to your specific needs. &nbsp;Maximize well productivity and gain valuable insights with our reliable wireline and slickline services.</p>', 'wireline_slickline.jpg', 'wirelineslickline', 0, 0, NULL, '2024-04-11 12:11:47'),
(3, 4, 'Kieran Mbappe', '<p>Hello Project Testing Update</p>', '202404032206IMG-20200926-WA0030.jpg', 'kieran-mbappe', 0, 1, NULL, '2024-04-05 08:18:23'),
(4, 4, 'PVT ANALYSIS', '<p><span style=\"color:null\">Our PVT analysis empowers you to make informed decisions about well completion, artificial lift selection, and reservoir development. &nbsp;Gain a competitive edge with our in-depth PVT analysis services and unlock the full potential of your valuable resources.</span></p>\r\n\r\n<p><span style=\"color:null\">Fuel smarter reservoir management decisions with our comprehensive PVT (Pressure-Volume-Temperature) analysis services. &nbsp;PVT analysis is a cornerstone of oil and gas exploration and production, providing crucial insights into the behavior of reservoir fluids under varying pressure and temperature conditions.</span></p>\r\n\r\n<p><span style=\"color:null\">Through our state-of-the-art laboratory and expertise, we offer a complete PVT analysis package to:</span></p>\r\n\r\n<p><span style=\"color:null\">Characterize your reservoir fluid: Understand the composition and properties of your hydrocarbons for optimal production strategies.<br />\r\nPredict reservoir performance: Accurately forecast well behavior throughout its lifecycle, maximizing recovery rates.<br />\r\nOptimize production processes: Design efficient production plans that account for fluid behavior and flow assurance challenges.</span></p>\r\n\r\n<p>&nbsp;</p>', 'IMG_20140513_143124.jpg', 'pvt-analysis', 0, 0, NULL, '2024-04-14 12:59:24'),
(5, 8, 'WELLHEAD MAINTENANCE SERVICING', '<p>We understand the critical importance of wellhead maintenance in the oil and gas industry. Wellheads serve as the primary interface between the surface and the subsurface, providing crucial control over the flow of hydrocarbons from the reservoir to the surface facilities.</p>\r\n\r\n<p>Proper maintenance of wellheads is essential to ensure safe and efficient operations, minimizing downtime, reducing environmental risks, and maximizing production.</p>\r\n\r\n<ul>\r\n	<li>Repair, Refurbishment and installation of wellhead equipment &amp; accessories.</li>\r\n	<li>Servicing of Xmas tree.</li>\r\n	<li>Pressure Testing.</li>\r\n	<li>Wellhead Integrity.</li>\r\n	<li>Procurement supply and installation of all typrs of sub-surface accessories.</li>\r\n	<li>Supply, maintenance, repairs of pneumatic and hydraulic actuators.</li>\r\n	<li>Lubrivstord and BPV serviecs</li>\r\n	<li>Wellhead completions.</li>\r\n</ul>', '202404131727OESL-Wellhead.jpg', 'wellhead-maintenance-servicing', 0, 0, NULL, '2024-04-14 12:57:33'),
(6, 7, 'PROCUREMENT', '<p>We are dedicated to deliver tailored solutions to meet the unique needs of our clients ensuring that all supplies are procured at the lowest possible cost using qualified vendors</p>\r\n\r\n<ul>\r\n	<li>Materials &amp; Condumables</li>\r\n	<li>Machinery</li>\r\n	<li>Specialty Chemicals</li>\r\n	<li>General use Chemicals</li>\r\n	<li>Safety Wares</li>\r\n	<li>Equipment</li>\r\n	<li>Instruments</li>\r\n	<li>Tools Manual</li>\r\n	<li>Spare Parts</li>\r\n</ul>', '202404141325oesl-procurement.png', 'procurement', 0, 0, NULL, NULL),
(7, 5, 'PIPELINE SURVILLANCE', '<p>OESL carries out Pipeline Surveillance services which involves, monitoring and safeguarding pipelines, often using a combination of technology, personnel and data analysis to detect and prevent leaks, vandalism other threats to the infrastruture.</p>\r\n\r\n<p>Our services help ensure the safety, security and efficiency of pipelines operations.</p>', '202404141417oesl-survillance.jpg', 'pipeline-survillance', 0, 0, NULL, NULL),
(8, 1, 'QHSE COMMITMENT', '<p><strong>OFRIMA ENERGY SERVICES LIMITED (OESL)</strong> believes that the preservation of the Health, Safety, Environment and Security of our employees and other persons we come in contact with in our work, as well as the protection of the environment in which we operate is safe for business. It is in view of this belief and the need to ensure high quality services to our clients that we consider Health, Safety, and Environment (HSE) matters of equal importance with productivity.<br />\r\nWe are therefore fully committed to HSE. The Policies, procedures, rules and regulations contained in our HSE-MS and Quality-MS are demonstrations of our commitment and applies to all our operations and activities.</p>\r\n\r\n<p><strong>HEALTH, SAFETY AND ENVIRONMENT POLICY</strong></p>\r\n\r\n<p><br />\r\n<strong>OFRIMA ENERGY SERVICES LIMITED</strong> is committed to ensuring the safety of its employees an contractors, as well as safeguarding the integrity of its assets and above all carry out its business activities within the framework of established dynamic HSE management system.</p>\r\n\r\n<p>This policy implies that:<br />\r\n:: OFRIMA ENERGY SERVICES LIMITED shall take every necessary step to establish safe and healthy procedures and practices in all operations and strive towards incident-free workplace.<br />\r\n:: The safety of all who work for OFRIMA ENERGY SERVICES LIMITED including third parties will be a top priority.<br />\r\n:: Positive attitude to safety shall be rewarded and negative ones disciplined.<br />\r\n:: Competent and safety conscious personnel are used for all technical operations so as to ensure the preservation of assets and safety of host communities.</p>\r\n\r\n<p>:: Implementation of the established work procedures and practices are responsibility of all employees with management providing leadership and are accountable for overall performance.<br />\r\nOperate safely and protect the environment.<br />\r\nSets targets and measure; appraise and report performance for improvement. Establish a cordial relationship with inhabitants of our area of operation.</p>\r\n\r\n<p>Require contractors to manage HSE in line with this policy. Ensure compliance with applicable laws and regulations.<br />\r\nAppraise employee HSE performance and reward them accordingly.<br />\r\nPromote and instill HSE consciousness in our employees and sub- contractors.</p>\r\n\r\n<p><br />\r\nIn order to ensure an enviable performance, the following strategies will be adopted<br />\r\n1.&nbsp;&nbsp; &nbsp;Continuous identification and reporting of accident causes.<br />\r\n2.&nbsp;&nbsp; &nbsp;Control of accident causes and minimization of losses.<br />\r\n3.&nbsp;&nbsp; &nbsp;Training and creating safety awareness in the workforce.<br />\r\nIn this way we aim to meet or exceed customer and members of the public expectation.<br />\r\n&nbsp;</p>', 'oesl-QHSE.jpg', 'qhse-commitment', 1, 0, NULL, '2024-04-23 10:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `description`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'COIL TUBING', 'Coil tubing is commonly used for well intervention operations', 'coil-tubing', 0, NULL, '2024-04-11 08:17:52'),
(2, 'WIRELINE/SLICKLINE', 'Wireline and slickline are both methods used in the oil and gas industry for downhole intervention and data collection', 'wirelineslickline', 0, NULL, '2024-04-11 08:17:35'),
(3, 'Brenden Coleman is my man', 'Et occaecat aut aspe', 'brenden-coleman-is-my-man', 1, NULL, '2024-04-04 14:50:24'),
(4, 'PVT ANALYSIS', 'PVT (Pressure-Volume-Temperature) analysis is a method used in the oil and gas industry to study the behavior of hydrocarbon fluids under different pressure and temperature conditions.', 'pvt-analysis', 0, NULL, '2024-04-11 08:17:10'),
(5, 'PIPELINE SURVEILLANCE', 'Protect the most critical sections of your oil and gas lines using Measurand\'s Shape Array. Make risk-informed decisions based on smart measurements and data analysis', 'pipeline-surveillance', 0, NULL, NULL),
(6, 'PROJECT & PROGRAM MGT.', 'At the heart of every project lies the need for meticulous planning, strategic execution, and agile adaptation to changing circumstances', 'project-program-mgt', 0, NULL, NULL),
(7, 'PROCUREMENT SERVICES', 'PROCUREMENT SERVICES', 'procurement-services', 0, NULL, NULL),
(8, 'WELLHEAD MAINTENANCE', 'WELLHEAD MAINTENANCE', 'wellhead-maintenance', 0, NULL, NULL),
(9, 'QHSE', 'QHSE Commitment', 'qhse', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(255) DEFAULT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `core_value` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `sitetitle`, `email`, `email2`, `phone`, `phone2`, `about`, `vision`, `mission`, `core_value`, `about_image`, `address`, `address2`, `facebook`, `instagram`, `twitter`, `linkedin`, `googleplus`, `logo`, `banner`, `deleted_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ofrima Energy Services Limited', 'Xander Rojas', 'info@ofrimagroup.com', 'i.umechuruba@ofrimagroup.com', '+234 803 707 6554', '+234 901 679 8151', '<p><strong>OFRIMA ENERGY SERVICES LIMITED</strong> is an indigenous integrated support service company incorporated in Nigeria as a limited liability company in 2024 with RC 7326443 by Nigerians who have integrity and great passion for excellence.</p>\r\n\r\n<p>As a well structured company with multi-skilled personnel, innovative technologies, teamwork which are the key factors underlying our reputation, we meet the severest quality requirement imposed by clients and regulating agencies.</p>\r\n\r\n<p>We set out specific objecives, strategies and targets to ensure safe, efficient, and cost effective operations of all our areas of core business. To ensure professionalism and keep abreast with new technologies, our employees are being trained constantly in the area of our core business and competence.</p>\r\n\r\n<p>Very importantly, we maintain good relationship with all host communities and are fully committed to the preservation of the environment in all our operational areas.</p>', 'To be a World Class Service Solution provider “With the ever expanding possibilities in the oil and gas industry.\r\nIt is our resolve to improve our focus on growth opportunities and enhance competencies that will drive accelerated growth.', 'To provide unparallel products and services to our clients in the oil and gas industry.\r\nTo create value and make a difference in our operations, people and host communities.\r\nTo provide skilled personnel, technology and workplace where people are inspired to be the best.', 'Innovation, Excellence, Integrity, Reliability, Quality and Honesty.\r\nThese are the qualities on which our company is built on.', 'IMG_20140515_154505.jpg', 'Km. 1 East West Road, Choba By Rain Oil Filling  Station.\r\nPort Harcourt, Rivers State. Nigeria', '2504 Rusk St. Unit # 108 Downtown.\r\nHouston. TX 77003 Tel: (281) 435-6225', 'facebook.com/oesl', 'instagram.com/oesl', NULL, 'linkedin.com/oesl', NULL, 'logo_new.png', 'oesl-breadcrumbs-bg.png', NULL, NULL, NULL, '2024-04-12 04:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `color`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'IMG-20200926-WA0030.jpg', 0, NULL, '2024-04-09 02:12:59'),
(2, NULL, NULL, NULL, 'IMG_20140515_154500.jpg', 0, NULL, '2024-04-08 15:59:10'),
(3, NULL, NULL, NULL, 'IMG_20131216_082156.jpg', 0, NULL, '2024-04-08 15:59:55'),
(4, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(5, NULL, NULL, NULL, 'IMG_20140514_125805.jpg', 0, NULL, '2024-04-08 16:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_category_id`, `name`, `description`, `image`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Colby Chapman Title Update', '<p>Id deleniti veniam Description Update</p>', '202404051132IMG_7549.JPG', 'colby-chapman-title-update', 0, NULL, '2024-04-05 10:52:21'),
(2, 3, 'Acton Mcmahon Twou now ok', '<p>Dolor omnis magni vo updated now okay!</p>', '202404051134IMG_7550.JPG', 'acton-mcmahon-twou-now-ok', 0, NULL, '2024-04-05 11:20:21'),
(3, 1, 'Zachary Cole', '<p>Zachary Cole</p>', '202404051225Capture.PNG', 'zachary-cole', 1, NULL, '2024-04-05 11:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `team_categories`
--

CREATE TABLE `team_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_categories`
--

INSERT INTO `team_categories` (`id`, `name`, `description`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Colby Chapman', 'Id deleniti veniam', 'colby-chapman', 0, NULL, NULL),
(2, 'Acton Mcmahon', 'Dolor omnis magni vo updated now', 'acton-mcmahon', 0, NULL, '2024-04-05 09:24:37'),
(3, 'Delilah Whitley change', 'Labore doloribus ea', 'delilah-whitley-change', 0, NULL, '2024-04-05 09:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` enum('admin','agent','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `deleted_at` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `phone`, `address`, `photo`, `role`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@oesl.com', NULL, '$2y$12$8rN6o7kgHPRiu1r3fqY5HuVMNiwVpYLKoZtXPLYj5EaUxjqdi/9tW', '09022431200', 'Nigeria', 'IMG_20140514_125819.jpg', 'admin', 'active', 0, NULL, NULL, '2024-04-18 15:48:40'),
(2, 'Agent', 'agent', 'agent@oesl.com', NULL, '$2y$12$OGyLBFGPdh2bZkM3zx/X2O9vRxsONiCe3P1AO1K9/D5XrKSNGtyvK', NULL, NULL, NULL, 'agent', 'active', 0, NULL, NULL, NULL),
(3, 'User', 'user', 'user@oesl.com', NULL, '$2y$12$mpeDmt0t6Ma8lAzXKVW88edXicGA3atHD7STwHGoJ6Fnuh9.eR6H2', NULL, NULL, NULL, 'user', 'active', 0, NULL, NULL, NULL),
(4, 'Tom', 'tombrown', 'tombrowngodwin@gmail.com', NULL, '$2y$10$6P98.cDNpZFi9IA2JWkICuYcMrRKsFIFYVOCg9WR0GjUKRx8rEwD.', '1223444566', 'Nigeria', NULL, 'admin', 'active', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_projects`
--
ALTER TABLE `all_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_services`
--
ALTER TABLE `all_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_categories`
--
ALTER TABLE `team_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_projects`
--
ALTER TABLE `all_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_services`
--
ALTER TABLE `all_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_categories`
--
ALTER TABLE `team_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
