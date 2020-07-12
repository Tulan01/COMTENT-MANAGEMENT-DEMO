-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 11:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_manages`
--

CREATE TABLE `content_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_manages`
--

INSERT INTO `content_manages` (`id`, `type`, `section`, `title`, `image`, `fullurl`, `url`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'BY DAVID DAYEN', 'images/post/1672025138328231.jpg', NULL, NULL, 'It’s clear that we’re facing a Depression-level event economically and a public-health crisis with no easing in sight, even as the current administration has decided to give up on containment and safeguarding the general welfare. It’s a moment of rapid change and uncertainty. But we tried in our May-June issue to take a snapshot, to look at what we know today and what we can surmise about the future.', 1, NULL, NULL),
(2, 1, 1, 'Hong Kong protests', 'images/post/1672025303779264.png', NULL, NULL, 'Protesters trample a Chinese flag during a September protest in Hong Kong. One man convicted of desecrating the flag on Friday saw his sentence increased from 240 hours of community service to five weeks in jail. Photo: Sam TsangProtesters trample a Chinese flag during a September protest in Hong Kong. One man convicted of desecrating the flag on Friday saw his sentence increased from 240 hours of community service to five weeks in jail. Photo: Sam Tsang\r\nProtesters trample a Chinese flag during a September protest in Hong Kong. One man convicted of desecrating the flag on Friday saw his sentence increased from 240 hours of community service to five weeks in jail. Photo: Sam Tsang\r\nA second Hong Kong man sentenced to community service for desecrating the national flag during last year’s anti-government protests has been sent to jail, as prosecutors pushing for tougher sentencing pointed to an April appellate court decision to imprison a man guilty of similar offences.\r\nTuen Mun Court on Friday upped the protester’s sentence to five weeks’ jail at a review requested by government prosecutors, who argued the initial punishment had been manifestly inadequate.\r\nIn changing her sentence, acting principal magistrate Cheung Kit-yee said she underestimated the gravity of the offence when she ordered Tang Chi-lok to perform 240 hours of community service on April 15 for desecrating the Chinese flag during a September demonstration.', 1, NULL, NULL),
(3, 2, 1, 'Native American Protesters ', NULL, 'https://www.youtube.com/embed/zZ1_hAw8Ttc', 'zZ1_hAw8Ttc', 'Saying it was done to embarrass him, President Donald Trump on Sunday said a reportedly defective section of his new border wall should not have been built by a private company.\r\n\r\nProPublica and the Texas Tribune reported Thursday that a segment of the wall along the Texas-Mexico border was showing dangerous “signs of erosion“ only months after being completed. The section was constructed by Fisher Industries of North Dakota, whose owner called the design a “Lamborghini.” It cost $42 million.\r\n\r\n“I disagreed,” Trump tweeted Sunday, “with doing this very small (tiny) section of wall, in a tricky area, by a private group which raised money by ads. It was only done to make me look bad, and perhsps it now doesn’t even work. Should have been built like rest of Wall, 500 plus miles.“ (The misspelling of “perhaps” was part of the tweet.)\r\n\r\nTrump subsequently tweeted: “We have now built 240 Miles of new Border Wall on our Southern Border. We will have over 450 Miles built by the end of the year. Have established some of the best Border Numbers ever.“\r\n\r\nThe ProPublica-Texas Tribune report spotlighted a section in the Rio Grande Valley with apparently severe structural issues: “Six engineering and hydrology experts consulted by ProPublica and The Texas Tribune said it was concerning to see the level of erosion around the fence so soon after construction and added that segments of Fisher’s steel structure could topple into the river if not fixed.“\r\n\r\nCritics have argued that Trump has exaggerated the amount of wall that has been built along the border, saying much of it is merely the replacing of existing fencing.', 1, NULL, NULL),
(4, 2, 2, 'Indian And Chinese Soldiers Fighting', NULL, 'https://www.youtube.com/embed/5dwYBvHLRnI', '5dwYBvHLRnI', 'There were casualties on both sides when the militaries of China and India clashed this month, but the exchanges did not involve weapons.', 1, NULL, NULL),
(5, 2, 2, 'Bangladesh Garment Workers Protest During Lockdown', NULL, 'https://www.youtube.com/embed/HW0jwtpExcI', 'HW0jwtpExcI', 'Thousands of garment workers protest by blocking a road in Dhaka, Bangladesh, while protesting against unpaid wages, Monday, April 13.\r\n\r\nAt least 10,000 garment workers have lost their jobs as Western brands hit by coronavirus lockdowns cancel orders, union leaders said on Tuesday, urging the government to step in.\r\n\r\nMore than $3 billion-worth of orders have been cancelled or suspended, according to factory owners in Bangladesh, one of the world\'s top suppliers of clothes to Western countries.\r\n\r\nBangladesh ranks behind only China as a supplier of clothes to Western countries. The garment industry accounts for more than 80% of its exports and employs about 4 million people, mostly women.\r\n\r\nHundreds of workers took to the street this week, defying a government lockdown to protest the non-payment of wages, according to police.\r\n\r\nThe government has announced a $588 million package to help the crucial export sector pay its workers, but labor leaders say that this is not enough.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_07_11_070607_create_newurls_table', 1),
(11, '2020_07_11_154217_create_content_manages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newurls`
--

CREATE TABLE `newurls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `videoid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pritam Chowdhury', 'ppcctulan@gmail.com', NULL, '$2y$10$JmkrWlAV2SY7BgftmjnJiuBSZH47.2ZQ6d.HudwybRKmgQoa.iPSq', NULL, '2020-07-12 10:14:27', '2020-07-12 10:14:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_manages`
--
ALTER TABLE `content_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newurls`
--
ALTER TABLE `newurls`
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
-- AUTO_INCREMENT for table `content_manages`
--
ALTER TABLE `content_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newurls`
--
ALTER TABLE `newurls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
