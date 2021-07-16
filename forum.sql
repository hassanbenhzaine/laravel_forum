-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 08:59 AM
-- Server version: 10.5.9-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `thread_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `content`, `user_id`, `thread_id`, `created_at`, `updated_at`) VALUES
(6, 'aaa', 1, 3, '2021-07-13 09:12:16', '2021-07-13 09:12:16'),
(7, 'ar', 2, 1, '2021-07-13 20:02:19', '2021-07-13 20:02:19'),
(8, ',jk', 2, 3, '2021-07-13 20:09:48', '2021-07-13 20:09:48'),
(9, 'this is a comment', 1, 1, '2021-07-14 07:25:17', '2021-07-14 07:25:17'),
(10, 'this is a comment', 1, 2, '2021-07-14 07:30:44', '2021-07-14 07:30:44'),
(13, 'a reply', 12, 2, '2021-07-14 07:51:45', '2021-07-14 07:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `answer_reactions`
--

CREATE TABLE `answer_reactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(1, 'pets', NULL, NULL, 'Lets discuss about whats happening around the world politics.'),
(2, 'human', NULL, NULL, 'Lets discuss about whats happening around the world politics.'),
(3, 'politics', NULL, NULL, 'Lets discuss about whats happening around the world politics.'),
(4, 'video', NULL, NULL, 'Lets discuss about whats happening around the world politics.\r\n\r\n'),
(5, 'exchange', NULL, NULL, 'Lets discuss about whats happening around the world politics.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_01_100812_create_threads_table', 1),
(5, '2021_07_09_104828_categories', 1);

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
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'php', NULL, NULL),
(16, 'html', '2021-07-13 12:32:52', '2021-07-13 12:32:52'),
(17, 'css', '2021-07-13 12:32:52', '2021-07-13 12:32:52'),
(18, 'laravel', '2021-07-13 12:32:52', '2021-07-13 12:32:52'),
(19, 'ak', '2021-07-13 18:34:51', '2021-07-13 18:34:51'),
(20, 'famas', '2021-07-13 18:34:51', '2021-07-13 18:34:51'),
(21, 'LS', '2021-07-13 18:34:51', '2021-07-13 18:34:51'),
(22, 'LMG', '2021-07-13 18:48:45', '2021-07-13 18:48:45'),
(23, '', '2021-07-14 07:22:12', '2021-07-14 07:22:12'),
(24, '', '2021-07-14 07:30:16', '2021-07-14 07:30:16'),
(25, '', '2021-07-14 07:40:24', '2021-07-14 07:40:24'),
(26, '', '2021-07-14 07:50:56', '2021-07-14 07:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` bigint(20) UNSIGNED NOT NULL,
  `views` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `title`, `likes`, `views`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Halloween Costume Contest 2018', 107, 2399, '<h6 class=\"tt-title\">Get ready for Movember!</h6>\r\n                                <p>\r\n                                    It’s time to channel your inner Magnum P.I., Ron Swanson or Hercule Poroit! It’s the time that all guys (or gals) love and all our\r\n                                    partners hate It’s Movember!\r\n                                </p>\r\n                                <p>\r\n                                    Throughout November we will be inviting all community members to help raise awareness and funds for the lives of men affected\r\n                                    by cancer and mental health problems via the Movember Foundation 10.\r\n                                </p>\r\n                                <h6 class=\"tt-title\">How Does it Work?</h6>\r\n                                <p>\r\n                                    Authors and customers with facial hair unite! Simply grow, groom, and share your facial hair during November! Even females can enter if they desire (be creative, ladies!). Be inspired by checking out last year’s highlights 28.\r\na\r\n                                </p>', 1, '2021-07-21 10:24:17', '2021-07-14 07:25:51'),
(2, 'We’re removing Envato Credits from Market', 10, 2399, 'ssqdqsd', 2, NULL, NULL),
(3, 'Web Hosting Packages for ThemeForest WordPress', 22, 2399, 'ABC', 8, NULL, NULL),
(5, 'this is a title', 0, 0, 'thread body', 1, '2021-07-13 09:42:59', '2021-07-13 09:42:59'),
(6, 'thread 2', 0, 0, 'qsfqsf', 1, '2021-07-13 09:44:07', '2021-07-13 09:44:07'),
(7, 'this a a fucking title', 0, 0, 'a fucking body', 1, '2021-07-13 09:51:02', '2021-07-13 09:51:02'),
(8, 'thread 1', 0, 0, 'lets be it', 1, '2021-07-13 09:54:55', '2021-07-13 09:54:55'),
(9, 'new title', 0, 0, 'new body', 1, '2021-07-13 12:28:05', '2021-07-13 12:28:05'),
(10, 'my', 0, 0, 'kj', 1, '2021-07-13 12:29:32', '2021-07-13 12:29:32'),
(36, 'this is the best', 0, 0, 'AK', 1, '2021-07-14 07:22:12', '2021-07-14 07:22:27'),
(37, 'post 9:30', 0, 0, 'body post 9:30', 1, '2021-07-14 07:30:16', '2021-07-14 07:30:16'),
(38, 'post 9:45', 0, 0, 'this is post content', 11, '2021-07-14 07:40:24', '2021-07-14 07:40:46'),
(39, 'a new post 2021', 0, 0, 'content', 12, '2021-07-14 07:50:56', '2021-07-14 07:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `thread_categories`
--

CREATE TABLE `thread_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thread_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thread_categories`
--

INSERT INTO `thread_categories` (`id`, `thread_id`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 3, NULL, NULL),
(4, 3, 3, NULL, NULL),
(6, 1, 3, NULL, NULL),
(7, 1, 4, NULL, NULL),
(8, 7, 5, '2021-07-13 09:51:02', '2021-07-13 09:51:02'),
(9, 8, 2, '2021-07-13 09:54:55', '2021-07-13 09:54:55'),
(10, 9, 4, '2021-07-13 12:28:05', '2021-07-13 12:28:05'),
(11, 10, 4, '2021-07-13 12:29:32', '2021-07-13 12:29:32'),
(37, 36, 1, '2021-07-14 07:22:12', '2021-07-14 07:22:12'),
(38, 37, 4, '2021-07-14 07:30:16', '2021-07-14 07:30:16'),
(39, 38, 5, '2021-07-14 07:40:24', '2021-07-14 07:47:07'),
(40, 39, 3, '2021-07-14 07:50:56', '2021-07-14 07:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `thread_reactions`
--

CREATE TABLE `thread_reactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `thread_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thread_tags`
--

CREATE TABLE `thread_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thread_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thread_tags`
--

INSERT INTO `thread_tags` (`id`, `thread_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Timothy Hessel', 'cbenhzaine@gmail.com', '2021-07-09 09:57:55', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9sScl0dcsJA5kzxstkdgykyLosiEyPHN1dNkShh2PssN00jxci3kwigUyo7M', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(2, 'Vickie Flatley', 'otha.farrell@example.net', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'J5PL4wRwm09Rlw28a8sAmGP51XQYh1WLSEfXhBLwDiy2o8EuGFSyHZardKXO', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(3, 'Nikolas Goodwin', 'nader.bruce@example.com', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'y8NWPIaE9j', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(4, 'Bettye Mitchell', 'morris.morissette@example.com', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5lCr5jDvhq', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(5, 'Miss Brandy Wiegand DVM', 'joconner@example.org', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CypYSblRui', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(6, 'Richmond Volkman', 'hannah89@example.org', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hRMtLptYd2', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(7, 'Otto Schinner', 'maxie.kovacek@example.com', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LaMiU6Ijza', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(8, 'Dr. Eli Schowalter Jr.', 'herminia63@example.net', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pw5cxUjHgV', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(9, 'Lera Pacocha', 'johnson.wuckert@example.org', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RqYJRdd8Md', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(10, 'Mac Keebler', 'anna94@example.com', '2021-07-09 09:57:55', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '22Kmn8KiFv', '2021-07-09 09:57:55', '2021-07-09 09:57:55'),
(11, 'hassan', 'cbenhzaine@hotmail.com', NULL, 0, '$2y$10$lGVJfuQejyUGX1/ehRtMP.00tnupJ2YMWHO44j0mwUD.5yNRUsQ8C', NULL, '2021-07-14 07:39:03', '2021-07-14 07:39:03'),
(12, 'Hassan Benhzaine', 'abcd@gmail.com', NULL, 0, '$2y$10$DGi6Pjz5Bli6xtDZJ9RV8e/r4JyD6pnDPI5Rk0NzCfr7mpgRU/WMW', NULL, '2021-07-14 07:49:09', '2021-07-14 07:49:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_thread_id_foreign` (`thread_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

--
-- Indexes for table `answer_reactions`
--
ALTER TABLE `answer_reactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_reactions_user_id_foreign` (`user_id`),
  ADD KEY `answer_reactions_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threads_user_id_foreign` (`user_id`);

--
-- Indexes for table `thread_categories`
--
ALTER TABLE `thread_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_categories_thread_id_foreign` (`thread_id`),
  ADD KEY `thread_categories_categorie_id_foreign` (`categorie_id`);

--
-- Indexes for table `thread_reactions`
--
ALTER TABLE `thread_reactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_reactions_user_id_foreign` (`user_id`),
  ADD KEY `thread_reactions_thread_id_foreign` (`thread_id`);

--
-- Indexes for table `thread_tags`
--
ALTER TABLE `thread_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thread_tags_thread_id_foreign` (`thread_id`),
  ADD KEY `thread_tags_tag_id_foreign` (`tag_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `answer_reactions`
--
ALTER TABLE `answer_reactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `thread_categories`
--
ALTER TABLE `thread_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `thread_reactions`
--
ALTER TABLE `thread_reactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread_tags`
--
ALTER TABLE `thread_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`),
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `answer_reactions`
--
ALTER TABLE `answer_reactions`
  ADD CONSTRAINT `answer_reactions_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`),
  ADD CONSTRAINT `answer_reactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `thread_categories`
--
ALTER TABLE `thread_categories`
  ADD CONSTRAINT `thread_categories_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `thread_categories_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `thread_reactions`
--
ALTER TABLE `thread_reactions`
  ADD CONSTRAINT `thread_reactions_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`),
  ADD CONSTRAINT `thread_reactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `thread_tags`
--
ALTER TABLE `thread_tags`
  ADD CONSTRAINT `thread_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `thread_tags_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
