-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2022 at 11:34 AM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngenit`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `header2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `logo`, `tags`, `header1`, `header2`, `description`, `created_at`, `updated_at`) VALUES
(4, 'The Evolution of Video Games — Esports in Education', '1664785267.jpg', 'Software,Devices,Hardware', 'H1', 'H2', 'When most people think of video games, they typically don’t associate them with education; in fact, most prefer to separate the two. The outdated, widespread belief of video games is that it’s a waste of valuable time and it creates behavioral issues.  However, the introduction of esports — a competitive form of video gaming that turns online gaming into a spectator sport — in schools and universities is helping to eliminate the stigma associated with video gaming by delivering educational and personal benefits to those who participate.  Interesting facts about esports and its role in education include:  Industry valued at more than $1 billion earlier this year Kids of all ages can compete Has become a major field of academic study In our recent webinar, education esports expert Joe McAllister discussed the benefits of establishing an esports program in K–12 and Higher Education settings.  Why esports in K–12? An esports program offers new methods for educators to challenge their students, ultimately improving social interaction and community-building skills inside the traditional classroom.  When implementing an esports program in K–12 schools, there’s an emphasis on soft skill development. Teaching those who invest in the program new communication skills, teamwork abilities and perseverance.  Educators can also create an authentic assessment, evaluating students on how to correctly set up a live stream or administer a social media account for their Esports team.  To justify the benefits of an esports program in K–12 further, Joe discussed the multi-use of having a space for extracurricular activity. Having the necessary equipment to operate an esports program allows for the implementation of additional disciplines such as graphic design, computer science and CTE–STEM courses.  Why esports in higher education? In the webinar, Joe said that having a dedicated esports program in a higher education institution comes with three advantages:  Recruitment: Having an esports team can help provide the same recruitment boost as other popular sports at the school, attracting students who are interested in the school\'s competitive ranking. Furthermore, having a specialized facility for the program that prospective students can visit, can be rather appealing to see. Retention: For those students and athletes who are interested in the world of video games, designing and constructing a specific esports program helps to foster a sense of belonging and community, keeping students interested in returning. Relevancy: The growing popularity of esports and its relevance to contemporary culture, creates opportunities for institutions to build esports–centered courses focusing on developing career options in the gaming industry. What is it like to be a member of an esports team? An efficient esports team is made up of several positions, with various personal interests that all work together to form a successful squad.  There are your social gamers, the competitive gamers, the coaches, and the media and marketing team. Each plays a role, whether it be creating content, gaining win recognition and making sure the team is in the public eye.  For those on the competitive side, just like any other sports team, there are practices, drills, scrimmages, and strategy meetings held by a coach, director or team lead. When a tournament or match is scheduled, the school\'s esports team will go out and compete against other schools or universities.  The future of Esports in education is now Thanks to the webinar, it’s easy to see that esports is dispelling the notion that video games cause more problems than they solve. Students are now encouraged to pursue their dreams of working in the gaming industry, and esports in education is where it begins.  Looking to find out more about esports in education? We at Insight Public Sector are here to help educational institutions, whether K–12 or higher education, as well as those involved in extracurricular activities, evolve, and become better and more opportunistic individuals through the world of esports.', '2022-10-03 02:21:07', '2022-10-03 02:21:07'),
(5, 'Acer and Google Chrome OS Partner for Sustainable Solutions', '1664785382.jpg', 'Featured, Devices', 'H1', 'H2', 'Climate change has taken center stage, and end-point-user expectations for corporate sustainability efforts in response to these environmental concerns have continued to increase. The vast majority of consumers (85%) say they consider sustainability in their purchases more now than they did five years ago.1 Businesses are taking note and investing in more sustainable business practices as a result.  For Acer and Chrome OS, this has meant more than pledging to become carbon-free. The two companies have put their commitments into action by adjusting the way they manufacture, dispose of, program and package their products. Acer and Chrome OS are working to build a sustainable future to preserve environmental resources and protect our health and the health of future generations.  Reduce cost and carbon emissions. End-user compute devices generate 1% of global greenhouse gas emissions. Doing their part, Acer and Chrome OS uncovered ways to reduce waste and energy consumption.  1% of global greenhouse gas emissions =  460M devices manufactured and associated energy consumed by 4.2B active users each year2  Acer and Chrome OS knew that when choosing a sustainable device, end-point-users want a complete package: reduced carbon emissions and lower energy consumption costs. As a result, creating lifecycle sustainability became a key priority.', '2022-10-03 02:23:02', '2022-10-03 02:23:02'),
(6, 'College Campus Fast Tracks Deployment for Distance Learning', '1664789399.jpg', 'Devices Hardware Featured', 'H1', 'H2', 'Facts at a glance Client industry: Higher education  Size of organization: 600+ staff, 28,000+ students  Challenge: The college needed a simplified way to standardize Apple across the board for a distance learning initiative within two departments. To add to this challenge, the organization needed more than 1,000 MacBook and iPad devices deployed within a 30-day timeframe.  Solution: 1,000+ MacBook and iPad devices Accelerated device deployment Asset tagging for easy logistic management Apple device enrollment program Touchless deployment via Jamf Mobile Device Management Results: Successful deployment on time and within budget Standardized environment for distance education initiative Accelerated time to use for students and staff Solution area: Supply Chain Optimization  U.S. higher-education institutions are increasingly turning to distance learning, an educational initiative with many moving parts — and in the midst of return-to-school planning during a chaotic pandemic, time has become a precious resource. A college campus in Tucson, Arizona was launching a distance learning initiative. With the fall semester approaching, it needed to quickly pinpoint an effective solution. The college determined that new devices were needed for internal accounting and IT, as well as an ample size of students switching to remote learning. The importance of standardization For many years, the college had used a handful of other manufacturers within its device ecosystem, and fragmentation was becoming more prevalent. With a remote learning initiative underway, standardization was key to simplifying management on the backend and the broader, frontend experience for end users.  No time to lose It was a clear and ambitious goal: to have 1,015 devices in the organization’s possession in less than 30 days. With the hardware supply chain stretched thin due to high demand, this was challenging. The college sent communication directly to each provider it was considering — and Insight Public Sector was first to respond with a number of viable options for their unique objectives.  Our teams proposed an Apple device deployment which included hardware, warranties and Mobile Device Management (MDM) powered by Jamf. Apple, which is known for its intuitive design, familiar user experience and powerful array of applications, was determined to best meet the needs of the college.  A trusted ally, then and now In addition to being the first to respond to the organization, our teams also had a strong, existing relationship with the college. Our close ties enabled us to have in-depth conversations to understand the school’s needs, and loop in field reps and other teams immediately.  The road to success Engaging a broad pool of resources, Insight Public Sector was able to accelerate deployment to meet the college’s less-than-30-day goal. The college is now on track to launch its distance education initiative successfully with 500 MacBook devices and 515 iPad devices ready for use.  In the next five years, the college plans to standardize Apple on a broader scale for a connected campus effort. With touchless provisioning from Apple, this will drive greater control from IT while simplifying management and providing a future-forward end-user experience.', '2022-10-03 03:29:59', '2022-10-03 03:29:59'),
(7, 'Steward Health Care Transforms Care Through Digital Innovation', '1664795878.jpg', 'Software', 'h2', 'h2', 'Steward Health Care wanted to reduce patient length of stay and improve the overall patient experience.  Solution Microsoft Azure role-based access control and encryption provide HIPAA-compliant security for a unified data monitoring platform that leverages real-time business data and analytics.  Results 98% accurate prediction of patient load out to a week at a time Reduced patient length of stay by 1.5 days Predictable staffing Reduced operational costs — saving millions of dollars per hospital, per year', '2022-10-03 05:17:58', '2022-10-03 05:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(3, 'hp', '1664088842.png', '2022-09-08 00:24:53', '2022-09-25 00:54:02'),
(4, 'Lenovo', '1664088953.png', '2022-09-10 21:47:19', '2022-09-25 00:55:53'),
(5, 'Microsoft', '1664088962.png', '2022-09-18 00:27:18', '2022-09-25 00:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Laptop', '1664088985.png', '2022-09-08 00:33:50', '2022-09-25 00:56:25'),
(6, 'Accessories', '1664087535.jpg', '2022-09-25 00:32:16', '2022-09-25 00:32:16'),
(7, 'Cables', '1664087551.jpg', '2022-09-25 00:32:31', '2022-09-25 00:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Client Experience 1', '1662962249.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:57:30', '2022-09-11 23:57:30'),
(8, 'Client Experience 2', '1662962318.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:58:38', '2022-09-11 23:58:38'),
(9, 'Client Experience 3', '1662962337.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:58:57', '2022-09-11 23:58:57'),
(10, 'Client Experience 4', '1662962363.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:59:23', '2022-09-11 23:59:23'),
(11, 'Client Experience 5', '1662962380.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-11 23:59:40', '2022-09-11 23:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `help_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `company`, `state`, `country`, `help_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'kawsar khan', 1875510694, 'kawsarkhanbd3@gmail.com', NULL, 'Dhaka', 'Bangladesh', 'Exploring solutions and services', 'hi', '2022-09-18 04:12:51', '2022-09-18 04:12:51'),
(2, 'kawsar khan', 1875510694, 'kawsarkhanbd3@gmail.com', 'Ngenit', 'Tamil naidu', 'India', 'Order support', 'I need Support', '2022-09-18 04:29:38', '2022-09-18 04:29:38'),
(3, 'kawsar khan', 1875510694, 'kawsarkhanbd3@gmail.com', 'Ngenit', 'Dhaka', 'Bangladesh', 'Billing support', 'hi', '2022-09-18 04:33:19', '2022-09-18 04:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'Dhaka', '2022-09-07 11:20:04', '2022-09-07 11:20:04'),
(2, 'Bangladesh', 'Chittagong', '2022-09-07 11:20:32', '2022-09-07 11:20:32'),
(3, 'India', 'Tamil naidu', '2022-09-07 11:20:54', '2022-09-07 11:20:54'),
(4, 'India', 'Delhi', '2022-09-07 11:20:54', '2022-09-07 11:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Automotive', '1662619645.jpg', '2022-09-08 00:47:25', '2022-09-08 00:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_03_043715_create_sessions_table', 1),
(7, '2022_09_04_040053_create_countries_table', 1),
(9, '2022_09_05_035414_create_stories_table', 1),
(10, '2022_09_06_053732_create_categories_table', 1),
(11, '2022_09_06_053920_create_brands_table', 1),
(13, '2022_09_08_031506_create_industries_table', 2),
(15, '2022_09_11_065057_create_clients_table', 4),
(16, '2022_09_11_093137_widget1', 5),
(17, '2022_09_13_062902_create_permission_tables', 6),
(19, '2022_09_04_050027_create_contact_us_table', 7),
(22, '2022_09_06_054032_create_products_table', 8),
(23, '2022_09_22_042405_create_orders_table', 8),
(24, '2022_09_22_042438_create_order_details_table', 8),
(25, '2022_09_06_084339_create_blogs_table', 9),
(26, '2022_09_13_083554_create_successes_table', 9),
(29, '2022_09_27_052500_create_page_builders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 28),
(4, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 31);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_slip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `user_name`, `phone`, `email`, `address`, `city`, `state`, `zip`, `country`, `work_order`, `payment_slip`, `created_at`, `updated_at`) VALUES
(1, 12, 3, 'billal', 1875510694, 'billalhossennn@gmail.com', 'jamalpur', 'dhaka', 'Dhaka', 1214, 'Bangladesh', '0', '0', '2022-09-25 05:41:43', '2022-09-25 05:41:43'),
(2, 12, 3, 'billal', 1875510694, 'kawsarkhanbd3@gmail.com', 'jamalpur', 'dhaka', 'Dhaka', 1214, 'Bangladesh', '1664106148.png', '1664106148.jpg', '2022-09-25 05:42:28', '2022-09-25 05:42:28'),
(3, 12, 2, 'billal', 1875510694, 'kawsarkhanbd3@gmail.com', 'jamalpur', 'dhaka', 'Dhaka', 1214, 'Bangladesh', '1664106148.png', '1664106148.jpg', '2022-09-25 05:42:28', '2022-09-25 05:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` int NOT NULL,
  `quantity` int NOT NULL,
  `total_amount` int NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_name`, `unit_price`, `quantity`, `total_amount`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lenovo ThinkStation P620 - tower - Ryzen ThreadRipper PRO 3955WX 3.9 GHz - AMD PRO - 32 GB - SSD 1 TB - US', 4351, 1, 4351, 'Unpaid', 'Processing', '2022-09-25 05:41:44', '2022-09-25 05:41:44'),
(2, 2, 'Lenovo ThinkStation P620 - tower - Ryzen ThreadRipper PRO 3955WX 3.9 GHz - AMD PRO - 32 GB - SSD 1 TB - US', 4351, 1, 4351, 'Checking', 'Processing', '2022-09-25 05:42:28', '2022-09-25 05:42:28'),
(3, 3, 'Microsoft Surface Pro 8 - 13\" - Core i3 1115G4 - 8 GB RAM - 128 GB SSD', 986, 1, 986, 'Checking', 'Processing', '2022-09-25 05:42:29', '2022-09-25 05:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `page_builders`
--

CREATE TABLE `page_builders` (
  `id` bigint UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctitle3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section1_id` bigint UNSIGNED DEFAULT NULL,
  `section2_id` bigint UNSIGNED DEFAULT NULL,
  `section3_id` bigint UNSIGNED DEFAULT NULL,
  `section4_id` bigint UNSIGNED DEFAULT NULL,
  `sec1_id` bigint UNSIGNED DEFAULT NULL,
  `sec2_id` bigint UNSIGNED DEFAULT NULL,
  `sec3_id` bigint UNSIGNED DEFAULT NULL,
  `sec4_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_builders`
--

INSERT INTO `page_builders` (`id`, `brand`, `banner`, `h1`, `h2`, `circle1`, `ctitle1`, `circle2`, `ctitle2`, `circle3`, `ctitle3`, `section1_id`, `section2_id`, `section3_id`, `section4_id`, `sec1_id`, `sec2_id`, `sec3_id`, `sec4_id`, `created_at`, `updated_at`) VALUES
(7, 'Microsoft', '1664785628.jpg', 'Microsoft', 'Experience powerful features and maximum mobility.', '1664785628.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664785628.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664785628.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', NULL, 2, NULL, 10, 5, NULL, 4, NULL, '2022-10-03 02:27:08', '2022-10-03 02:27:08'),
(9, 'hp', '1664788460.jpg', 'HP', 'Manageable and secure HP® PCs and printers, available from Insight, safeguard your endpoints, data and business identity.', '1664788460.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664788460.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664788460.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', 31, NULL, 4, NULL, NULL, 4, NULL, 5, '2022-10-03 03:14:20', '2022-10-03 03:14:20'),
(10, 'Lenovo', '1664789399.jpg', 'Lenovo', 'As one of Microsoft’s leading global partners, Insight offers outstanding expertise in delivering and deploying Microsoft® hardware, software and cloud solutions.', '1664789399.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664789399.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', '1664789399.jpg', 'Delivering performance on a 13-inch screen, the Surface Pro 8 combines the power of a laptop with the flexibility of a table', NULL, 5, NULL, 3, 6, NULL, 5, NULL, '2022-10-03 03:30:00', '2022-10-03 03:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(2, 'role-create', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(3, 'role-edit', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(4, 'role-delete', 'web', '2022-09-13 00:58:50', '2022-09-13 00:58:50'),
(5, 'product-list', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(6, 'product-create', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(7, 'product-edit', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(8, 'product-delete', 'web', '2022-09-13 00:58:51', '2022-09-13 00:58:51'),
(9, 'user-create', 'web', '2022-09-14 03:54:40', '2022-09-14 03:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `image`, `product_type`, `category`, `sub_category`, `brand`, `industry`, `created_at`, `updated_at`) VALUES
(1, 'Cisco Integrated Services Router 1111 - router - desktop', 1215, 'Cisco Integrated Services Router 1111 - Router - 4-port switch - GigE', '1664093376.jpg', 'Hardware', 'Accessories', 'Popular', 'hp', 'Select Industry', '2022-09-25 02:09:36', '2022-09-25 02:09:36'),
(2, 'Microsoft Surface Pro 8 - 13\" - Core i3 1115G4 - 8 GB RAM - 128 GB SSD', 986, 'Microsoft Surface Pro 8 - Tablet - Intel Core i3 1115G4 - Win 11 Pro - UHD Graphics - 8 GB RAM - 128 GB SSD - 13\" touchscreen 2880 x 1920 @ 120 Hz - Wi-Fi 6 - platinum - commercial', '1664093554.jpg', 'Hardware', 'Laptop', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:12:34', '2022-09-25 02:12:34'),
(3, 'Lenovo ThinkStation P620 - tower - Ryzen ThreadRipper PRO 3955WX 3.9 GHz - AMD PRO - 32 GB - SSD 1 TB - US', 4351, 'Lenovo ThinkStation P620 30E0 - Tower - 1 x Ryzen ThreadRipper PRO 3955WX / 3.9 GHz - AMD PRO - RAM 32 GB - SSD 1 TB - TCG Opal Encryption, NVMe - Quadro RTX 4000 - 10 GigE - Win 10 Pro 64-bit - monitor: none - keyboard: US - TopSeller - with 3 Years Leno', '1664093627.jpg', 'Hardware', 'Accessories', 'Popular', 'Lenovo', 'Select Industry', '2022-09-25 02:13:47', '2022-09-25 02:13:47'),
(4, 'HP EliteBook 840 G8 Notebook - Wolf Pro Security - 14\" - Core i7 1185G7 - Evo vPro - 16 GB RAM - 512 GB SSD - US - with HP Wolf Pro Security Edition (1 year)', 2215, 'HP EliteBook 840 G8 Notebook - Wolf Pro Security - Intel Core i7 1185G7 / 3 GHz - Evo vPro - Win 10 Pro 64-bit (includes Win 11 Pro License) - Iris Xe Graphics - 16 GB RAM - 512 GB SSD NVMe, TLC - 14\" IPS HP SureView Reflect 1920 x 1080 (Full HD) - NFC, W', '1664093739.jpg', 'Hardware', 'Laptop', 'Popular', 'hp', 'Select Industry', '2022-09-25 02:15:39', '2022-09-25 02:15:39'),
(5, 'Microsoft Surface Laptop 4 - 13.5\" - Core i7 1185G7 - 16 GB RAM - 256 GB SSD - English', 1599, 'Microsoft Surface Laptop 4 - Intel Core i7 1185G7 - Win 10 Pro - Iris Xe Graphics - 16 GB RAM - 256 GB SSD - 13.5\" touchscreen 2256 x 1504 - Wi-Fi 6 - matte black - kbd: English - commerci', '1664093989.png', 'Hardware', 'Laptop', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:19:49', '2022-09-25 02:19:49'),
(6, 'Jamf Connect - subscription license - 1 license', 26, 'Jamf Connect - Subscription license - Mac', '1664094214.jpg', 'Software', 'Laptop', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:23:34', '2022-09-25 02:23:34'),
(7, 'Windows 11 Pro - license - 1 license', 150, 'Windows 10 Pro - License - 1 license - OEM - DVD - 64-bit - English', '1664094300.png', 'Software', 'Accessories', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:25:00', '2022-09-25 02:25:00'),
(8, 'Adobe Acrobat Pro 2020 - upgrade license - 1 user', 287, 'Adobe Acrobat Pro 2020 - Upgrade license - 1 user - TLP - level 1 (1+) - Win, Mac - Universal English', '1664094726.jpg', '', 'Cables', '', 'Microsoft', 'Select Industry', '2022-09-25 02:27:14', '2022-09-25 02:32:06'),
(9, 'Absolute Resilience - subscription license (1 year) - 1 device', 44, 'Absolute Resilience - Subscription license (1 year) - 1 device - volume - level 1 (1-2499) - ESD - Win, Mac, Android', '1664094584.jpg', 'Software', 'Accessories', 'Popular', 'Lenovo', 'Select Industry', '2022-09-25 02:29:44', '2022-09-25 02:29:44'),
(10, 'Microsoft Windows Server 2022 Standard - license - 16 cores', 866, 'Microsoft Windows Server 2022 Standard - License - 16 cores - DVD - 64-bit - UK English', '1664094816.jpg', 'Software', 'Accessories', 'Popular', 'Microsoft', 'Select Industry', '2022-09-25 02:33:36', '2022-09-25 02:33:36'),
(31, 'Cisco Catalyst 9500 - Network Advantage', 346, 'Cisco Catalyst 9500 - Network Advantage - switch - L3 - managed - 16 x 10 Gigabit Ethernet + 2 x 10 Gigabit SFP+ - rack-mountable', '1664788460.jpg', 'Hardware', 'Accessories', 'Popular', 'hp', 'Automotive', '2022-10-03 03:14:20', '2022-10-03 03:14:20'),
(32, 'Demo', 345, 'Demo', '1664795878.png', 'Hardware', 'Laptop', 'Popular', 'Adobe', 'Select Industry', '2022-10-03 05:17:59', '2022-10-03 05:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-09-13 00:52:07', '2022-09-13 00:52:07'),
(2, 'Editor', 'web', '2022-09-13 03:10:59', '2022-09-13 03:10:59'),
(3, 'Super admin', 'web', '2022-09-13 03:12:18', '2022-09-13 03:12:18'),
(4, 'billal', 'web', '2022-09-13 05:01:06', '2022-09-13 05:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3),
(5, 3),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fOvEZn0zhJILefLsRFTWuiOm1KrCTGmvRoYmrKaL', 12, '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidDdoNldWZ3hMRFphdXVPaERTWExxT0t1ZThoMDFqUnFRZFdqaGw3eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTMxOiJodHRwOi8vbG9jYWxob3N0L25nZW5pdC9wdWJsaWMvcHJvZHVjdC9maWx0ZXI/ZmlsdGVyYnJhbmQlNUIwJTVEPUxlbm92byZmaWx0ZXJicmFuZCU1QjElNUQ9TWljcm9zb2Z0JmhpZ2g9JmtleXdvcmQ9Jmxvdz0mcGVyX3BhZ2U9NSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjY6IjR5VGxUREt1M29KT2Z6RF9jYXJ0X2l0ZW1zIjtPOjMyOiJEYXJyeWxkZWNvZGVcQ2FydFxDYXJ0Q29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntpOjI7TzozMjoiRGFycnlsZGVjb2RlXENhcnRcSXRlbUNvbGxlY3Rpb24iOjM6e3M6OToiACoAY29uZmlnIjthOjY6e3M6MTQ6ImZvcm1hdF9udW1iZXJzIjtiOjA7czo4OiJkZWNpbWFscyI7aTowO3M6OToiZGVjX3BvaW50IjtzOjE6Ii4iO3M6MTM6InRob3VzYW5kc19zZXAiO3M6MToiLCI7czo3OiJzdG9yYWdlIjtOO3M6NjoiZXZlbnRzIjtOO31zOjg6IgAqAGl0ZW1zIjthOjY6e3M6MjoiaWQiO3M6MToiMiI7czo0OiJuYW1lIjtzOjcwOiJNaWNyb3NvZnQgU3VyZmFjZSBQcm8gOCAtIDEzIiAtIENvcmUgaTMgMTExNUc0IC0gOCBHQiBSQU0gLSAxMjggR0IgU1NEIjtzOjU6InByaWNlIjtkOjk4NjtzOjg6InF1YW50aXR5IjtpOjI7czoxMDoiYXR0cmlidXRlcyI7Tzo0MToiRGFycnlsZGVjb2RlXENhcnRcSXRlbUF0dHJpYnV0ZUNvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7czo1OiJpbWFnZSI7czoxNDoiMTY2NDA5MzU1NC5qcGciO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6MTA6ImNvbmRpdGlvbnMiO2E6MDp7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHVxRE96UDRsWXBHc1pQM2s1NTlxdC5aUGxwaFZsTWR4MGJkeHRSWkt2TFNabDhVdmlqWThtIjt9', 1664796653);

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `successes`
--

CREATE TABLE `successes` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Hasiful', 'Hasiful@gmail.com', NULL, '$2y$10$98ZDqnV0KFPXpzeJYTo08.uFLVN8FjMPQo8FLginu7DhilwhS3GXm', NULL, NULL, NULL, 'NSxIqHErTuZiMZboQ4a18XZ3w3dF3EQo6cY71yucL09TsvZmncTICjhXjkmq', NULL, NULL, '2022-09-06 22:43:43', '2022-09-06 22:43:43'),
(7, 'Motiur', 'motiur922083@gmail.com', '2022-09-12 03:33:41', '$2y$10$k7E0XPM7a.0aBF5nFJCvhOXrmMdT.9FjhlWiQbHFIYwaz5Ayie5pO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 05:54:54', '2022-09-12 05:54:54'),
(11, 'billal', 'billalhossennn@gmail.com', '2022-09-13 09:14:38', '$2y$10$3tH3pL.UrdyfF76LXfMNMueo86ghCHxLDUOo7OV9f1wr.DcQFYb4a', NULL, NULL, NULL, 'puHfIgDxPPbPth6Fj6kIO2N5FyvvlK2ZImqr6OX0xDDDkOAm4sI0jdlhryiN', NULL, NULL, '2022-09-12 23:14:23', '2022-09-18 21:48:38'),
(12, 'Billal Hossen', 'admin@gmail.com', '2022-09-13 08:01:51', '$2y$10$uqDOzP4lYpGsZP3k559qt.ZPlphVlMdx0bdxtRZKvLSZl8UvijY8m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 00:52:07', '2022-09-13 00:52:07'),
(13, 'hasiful', 'hasifulislam32@gmail.com', NULL, '$2y$10$SWN0cD09wLLwqng6pWdBTeFp.o9ZOlZLZlMEtHpvF3Lg6fDerPHqm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 01:14:32', '2022-09-13 01:14:32'),
(24, 'Billal', 'billal.cinebaz@gmail.com', '2022-09-15 03:50:03', '$2y$10$442lsQc28LEQo8X0d14B.eDcUtobAv6fYp7EMfFxEP8OslLHD/TVK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 03:49:41', '2022-09-15 03:50:03'),
(27, 'dev', 'dev1.ngenit@gmail.com', '2022-09-19 04:22:31', '$2y$10$.jEjR98Aya7/2x8JvTg.reIlikbeAIYHGg36YVDQJ8Dc.uQtEn34.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 22:01:34', '2022-09-17 22:04:09'),
(28, 'hasiful', 'Hasiful@ggmail.com', '2022-09-18 11:37:14', '$2y$10$nhixvO/i4FfEBG/0RJuigOUKMoUDiiYvKxCOmLpvKo9kbWvGh7ZnG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-18 05:35:40', '2022-09-18 05:35:40'),
(29, 'Motiur Rahman', 'dev4.ngenit@gmail.com', '2022-09-24 22:38:10', '$2y$10$RlFQk8mkPNTYwgYtTVDOAOp9IHXy3bHxTOa.rPu/KjO8v709A0iWa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-24 22:37:47', '2022-09-24 22:38:10'),
(31, 'rubaiyat', 'rubaiyat@gmail.com', '2022-09-26 22:18:01', '$2y$10$Ezcm.v3fJDPmgZ26vvEdRu5uFBB0KpKoelFdHJ2wAR4nHHYJwdAaa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-26 22:18:18', '2022-09-26 22:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `widget1`
--

CREATE TABLE `widget1` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widget1`
--

INSERT INTO `widget1` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Client Experience 1', '1662962249.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-13 03:35:48', '2022-09-13 03:35:48'),
(2, 'Client Experience 2', '1662962318.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:00:01', '2022-09-12 00:00:01'),
(3, 'Client Experience 3', '1662962337.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:00:09', '2022-09-12 00:00:09'),
(4, 'Client Experience 4', '1662962363.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:00:17', '2022-09-12 00:00:17'),
(5, 'Client Experience 5', '1662962380.png', 'Serve your customers better with the right IT infrastructure, hardware, software and applications.', '2022-09-12 00:14:19', '2022-09-12 00:14:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `page_builders`
--
ALTER TABLE `page_builders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_builders_section1_id_foreign` (`section1_id`),
  ADD KEY `page_builders_section2_id_foreign` (`section2_id`),
  ADD KEY `page_builders_section3_id_foreign` (`section3_id`),
  ADD KEY `page_builders_section4_id_foreign` (`section4_id`),
  ADD KEY `page_builders_sec1_id_foreign` (`sec1_id`),
  ADD KEY `page_builders_sec2_id_foreign` (`sec2_id`),
  ADD KEY `page_builders_sec3_id_foreign` (`sec3_id`),
  ADD KEY `page_builders_sec4_id_foreign` (`sec4_id`);

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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `successes`
--
ALTER TABLE `successes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `widget1`
--
ALTER TABLE `widget1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_builders`
--
ALTER TABLE `page_builders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `successes`
--
ALTER TABLE `successes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `widget1`
--
ALTER TABLE `widget1`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `page_builders`
--
ALTER TABLE `page_builders`
  ADD CONSTRAINT `page_builders_sec1_id_foreign` FOREIGN KEY (`sec1_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_sec2_id_foreign` FOREIGN KEY (`sec2_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_sec3_id_foreign` FOREIGN KEY (`sec3_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_sec4_id_foreign` FOREIGN KEY (`sec4_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section1_id_foreign` FOREIGN KEY (`section1_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section2_id_foreign` FOREIGN KEY (`section2_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section3_id_foreign` FOREIGN KEY (`section3_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_builders_section4_id_foreign` FOREIGN KEY (`section4_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
