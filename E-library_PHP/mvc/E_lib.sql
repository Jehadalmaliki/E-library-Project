-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 06 أبريل 2022 الساعة 06:54
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E_lib`
--

-- --------------------------------------------------------

--
-- بنية الجدول `authors`
--

CREATE TABLE `authors` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(5) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `authors`
--

INSERT INTO `authors` (`id`, `name`, `phone`, `email`, `bio`, `created_at`, `updated_at`, `created_by`, `is_active`) VALUES
(1, 'Jehad Ali', '0775345083', 'deeppp901@gmail.com', 'ss', NULL, NULL, 1, 0),
(2, 'Jehad Ali', '0775345083', 'deeppp901@gmail.com', 'ss', NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  `pages_number` int(2) NOT NULL,
  `category_id` int(3) NOT NULL,
  `author_id` int(3) NOT NULL,
  `publisher_id` int(3) NOT NULL,
  `quantity` int(2) NOT NULL,
  `format` varchar(255) NOT NULL,
  `created_by` int(3) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`id`, `title`, `image`, `price`, `description`, `pages_number`, `category_id`, `author_id`, `publisher_id`, `quantity`, `format`, `created_by`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'الحب والحياه', '62475383a66b8.jpeg', 1, 'يهتم بكل جوانب الحياه', 3, 1, 1, 1, 3, 'عربي', 1, 1, '2022-04-01 19:33:23', '2022-04-01 19:33:23'),
(2, 'العادات الذريه لاكثر الناس نجاحا', '624942b1565ca.jpg', 1, '', 2, 2, 1, 1, 1, 'الالكتروني', 1, 1, '2022-04-03 06:46:09', '2022-04-03 06:46:09'),
(3, 'love ', '6249452134803.jpg', 6, '', 1, 1, 1, 1, 1, 'الالكتروني', 1, 1, '2022-04-03 06:56:33', '2022-04-03 06:56:33');

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `is_active`, `created_at`, `upated_at`, `created_by`) VALUES
(1, 'دينيه', '62474449cbf09.jpeg', 0, '2022-04-01 18:28:25', '2022-04-01 18:28:25', 1),
(2, 'تاريخيه', '62493c1d71bdf.svg', 1, '2022-04-03 06:18:05', '2022-04-03 06:18:05', 1),
(3, 'نفسيه', '62493c995d803.svg', 1, '2022-04-03 06:20:09', '2022-04-03 06:20:09', 1),
(4, 'الالعاب', '62493cbe1e5b3.svg', 1, '2022-04-03 06:20:46', '2022-04-03 06:20:46', 1),
(5, 'الابتوب', '62493cd4cd678.svg', 1, '2022-04-03 06:21:08', '2022-04-03 06:21:08', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `cities`
--

INSERT INTO `cities` (`id`, `name`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'kgggggg', 0, '2022-04-01 18:27:12', '2022-04-01 18:27:12', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `book_ids` varchar(255) DEFAULT NULL,
  `category_ids` varchar(255) DEFAULT NULL,
  `all_books` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `user_id` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `total` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_method` int(2) DEFAULT NULL,
  `address_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `order_details`
--

CREATE TABLE `order_details` (
  `id` int(2) NOT NULL,
  `order_id` int(2) NOT NULL,
  `book_id` int(2) NOT NULL,
  `quantity` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `payements`
--

CREATE TABLE `payements` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `payements`
--

INSERT INTO `payements` (`id`, `name`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'kgggggg', '62474476d31cd.jpeg', 1, '2022-04-01 18:29:10', '2022-04-01 18:29:10', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `publishers`
--

CREATE TABLE `publishers` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alt_phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `phone`, `alt_phone`, `fax`, `email`, `address`, `country`, `image`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Jehad Ali', '0775345083', '0775345083', '٢٢', 'deeppp901@gmail.com', 'Taiz-AlRodah Street', 'اليمن', '624742fc2d376.jpeg', 1, '2022-04-01 18:22:52', '2022-04-01 18:22:52', 1),
(2, 'Jehad Ali', '0775345083', '0775345083', '٢٢', 'deeppp901@gmail.com', 'Taiz-AlRodah Street', 'اليمن', '624743f159e13.jpeg', 0, '2022-04-01 18:26:57', '2022-04-01 18:26:57', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `role_id` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_active`, `role_id`, `created_at`, `updated_at`) VALUES
(9, 'kgggggg', '', '6a4aafc4071ebeb20cf48e9793bd1a08', 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `city_id` int(2) NOT NULL,
  `address` varbinary(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `lng` double NOT NULL,
  `lat` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `city_id`, `address`, `phone`, `is_active`, `created_at`, `updated_at`, `lng`, `lat`) VALUES
(1, 9, 1, 0x5461697a2d416c526f64616820537472656574, '0775345083', 1, '2022-04-02 07:01:11', '2022-04-02 07:01:11', 2, 2),
(2, 9, 1, 0x5461697a2d416c526f64616820537472656574, '+967737780703', 0, '2022-04-02 07:03:27', '2022-04-02 07:03:27', 2, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `user_payment_methods`
--

CREATE TABLE `user_payment_methods` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `payement_id` int(2) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user_payment_methods`
--

INSERT INTO `user_payment_methods` (`id`, `user_id`, `payement_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 1, '2022-04-02 09:11:22', '2022-04-02 09:11:22');

-- --------------------------------------------------------

--
-- بنية الجدول `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `country` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `books_ibfk_1` (`category_id`),
  ADD KEY `fk_pub` (`publisher_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_add` (`address_id`),
  ADD KEY `fk_meth` (`payment_method`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `order_details_ibfk_1` (`order_id`);

--
-- Indexes for table `payements`
--
ALTER TABLE `payements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_pforiles_pk_fk` (`role_id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `user_addresses_ibfk_1` (`user_id`);

--
-- Indexes for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payement_id` (`payement_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_is` (`user_id`);

--
-- Indexes for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payements`
--
ALTER TABLE `payements`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tokens`
--
ALTER TABLE `user_tokens`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_pub` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- القيود للجدول `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_meth` FOREIGN KEY (`payment_method`) REFERENCES `payements` (`id`);

--
-- القيود للجدول `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- القيود للجدول `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_pforiles_pk_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- القيود للجدول `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- القيود للجدول `user_payment_methods`
--
ALTER TABLE `user_payment_methods`
  ADD CONSTRAINT `user_payment_methods_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- القيود للجدول `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
