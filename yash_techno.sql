-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2017 г., 09:04
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yash_techno`
--

-- --------------------------------------------------------

--
-- Структура таблицы `counters`
--

CREATE TABLE `counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `counter1` int(11) NOT NULL,
  `counter2` int(11) NOT NULL,
  `counter3` int(11) NOT NULL,
  `counter4` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `counters`
--

INSERT INTO `counters` (`id`, `counter1`, `counter2`, `counter3`, `counter4`, `created_at`, `updated_at`) VALUES
(1, 121, 323, 252, 520, '2017-12-18 06:37:16', '2017-12-18 06:37:16'),
(2, 252, 252, 565, 855, '2017-12-18 06:38:12', '2017-12-18 06:38:12');

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name_uz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_uz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `full_name_uz`, `full_name_ru`, `position_uz`, `position_ru`, `image`, `created_at`, `updated_at`) VALUES
(1, 'fowefib', 'fuhebwhfb', 'efjkwnfjin', 'fnewhbn', '1513533514.png', '2017-12-17 12:58:34', '2017-12-17 12:58:34'),
(2, 'Ravshan', 'Makhmadaliev', 'Manager', 'Manager', '1513921211.jpg', '2017-12-22 00:40:12', '2017-12-22 00:40:12'),
(3, 'Ravshan', 'Makhmadaliev', 'Manager', 'Manager', '1513921212.jpg', '2017-12-22 00:40:13', '2017-12-22 00:40:13'),
(4, 'Sunnat', 'Anvarov', 'Bot', 'Bot', '1513921261.jpg', '2017-12-22 00:41:01', '2017-12-22 00:41:01'),
(5, 'Ibrokhim', 'Movlonov', 'IOS developer', 'IOS developer', '1513921317.jpg', '2017-12-22 00:41:57', '2017-12-22 00:41:57');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_08_075656_create_posts_table', 1),
(4, '2017_11_11_083906_create_products_table', 1),
(5, '2017_11_11_084450_create_residents_table', 1),
(6, '2017_12_09_064042_create_receptions_table', 1),
(7, '2017_12_09_150612_create_offers_table', 1),
(8, '2017_12_11_052623_create_employees_table', 1),
(9, '2017_12_13_062203_create_popularities_table', 1),
(10, '2017_12_18_112104_create_counters_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `offers`
--

INSERT INTO `offers` (`id`, `name`, `surname`, `position`, `organization`, `region`, `email`, `phone`, `documents`, `created_at`, `updated_at`) VALUES
(1, 'Rahimjon', 'Rustamov', 'Manager', 'INHA', '15', 'rakhimjon.rustamov@gmail.com', '973259200', '1513921662.zip', '2017-12-22 00:47:42', '2017-12-22 00:47:42'),
(2, 'fgew', 'fewf', 'few', 'efwf', '15', 'rakhimjon.rustamov@gmail.com', '973259200', '1513921682.zip', '2017-12-22 00:48:02', '2017-12-22 00:48:02'),
(3, 'hdbfgh', 'feg', 'fegwg', 'fewfwe', '18', 'rakhimjon.rustamov@gmail.com', '973259200', '1513921843.zip', '2017-12-22 00:50:43', '2017-12-22 00:50:43');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `popularities`
--

CREATE TABLE `popularities` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular_info_uz` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular_info_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `popularities`
--

INSERT INTO `popularities` (`id`, `link`, `popular_info_uz`, `popular_info_ru`, `image`, `created_at`, `updated_at`) VALUES
(1, 'fwehbfhb', 'fjkwefbhebw', 'nebnwhbghb', '1513533501.png', '2017-12-17 12:58:21', '2017-12-17 12:58:21');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_uz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_uz` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `slug`, `image`, `title_uz`, `title_ru`, `body_uz`, `body_ru`, `created_at`, `updated_at`) VALUES
(1, 'hello-new-features', '1513531325.png', 'Hello new features', 'Hello', 'fwefwe', 'fwefwef', '2017-12-17 12:22:05', '2017-12-17 12:22:05'),
(2, 'hello', '1513739711.jpg', 'Hello', 'Hello baby', 'I am gonne kick your ass', 'I am gonne kick your ass', '2017-12-19 22:15:11', '2017-12-19 22:15:11');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name_uz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_info_uz` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_info_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `product_name_uz`, `product_name_ru`, `product_info_uz`, `product_info_ru`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 'k fk', 'j fwej fj`', 'fjkwenf', 'fbwejhbgwb', '1513533591.png', '2017-12-17 12:59:51', '2017-12-17 12:59:51'),
(2, 'Comp', 'Comp', 'Comp', 'Comp', '1513737605.png', '2017-12-19 21:40:06', '2017-12-19 21:40:06'),
(3, 'Notebook', 'Notebook', 'Notebook', 'Notebook', '1513737625.png', '2017-12-19 21:40:26', '2017-12-19 21:40:26'),
(4, 'Notebook2', 'Notebook2', 'Notebook2', 'Notebook2', '1513737647.png', '2017-12-19 21:40:47', '2017-12-19 21:40:47'),
(5, 'Noteboo3', 'Noteboo3', 'Noteboo3', 'Noteboo3', '1513737661.png', '2017-12-19 21:41:02', '2017-12-19 21:41:02'),
(6, 'Noteboo4', 'Noteboo4', 'Noteboo4', 'Noteboo4', '1513737673.png', '2017-12-19 21:41:14', '2017-12-19 21:41:14'),
(7, 'Noteboo5', 'Noteboo5', 'Noteboo5', 'Noteboo5', '1513737689.png', '2017-12-19 21:41:30', '2017-12-19 21:41:30'),
(8, 'Noteboo5', 'Noteboo5', 'Noteboo5', 'Noteboo5', '1513737700.png', '2017-12-19 21:41:40', '2017-12-19 21:41:40'),
(9, 'Noteboo5', 'Noteboo5', 'Noteboo5', 'Noteboo5', '1513737816.jpg', '2017-12-19 21:43:36', '2017-12-19 21:43:36');

-- --------------------------------------------------------

--
-- Структура таблицы `receptions`
--

CREATE TABLE `receptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_appointment` datetime NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `receptions`
--

INSERT INTO `receptions` (`id`, `full_name`, `date_appointment`, `phone`, `email`, `project_info`, `created_at`, `updated_at`) VALUES
(1, 'fjnejqwnf', '2017-12-14 00:00:00', '981231223', 'rakhimjon.rustamov@gmail.com', 'Hello new things', '2017-12-17 13:02:56', '2017-12-17 13:02:56');

-- --------------------------------------------------------

--
-- Структура таблицы `residents`
--

CREATE TABLE `residents` (
  `id` int(10) UNSIGNED NOT NULL,
  `resident_name_uz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resident_name_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resident_info_uz` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resident_info_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resident_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `residents`
--

INSERT INTO `residents` (`id`, `resident_name_uz`, `resident_name_ru`, `resident_info_uz`, `resident_info_ru`, `resident_logo`, `created_at`, `updated_at`) VALUES
(1, 'Rahimjon', 'Rustamov', 'Hello Uzbekistan', 'Hello Uzbekistan', '1513530925.png', '2017-12-17 12:15:26', '2017-12-17 12:15:26'),
(2, 'hello baby', 'hello I am here', 'So we here', 'Koko lolo pop', '1513530950.png', '2017-12-17 12:15:50', '2017-12-17 12:15:50');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahimjon', 'rakhimjon.rustamov@gmail.com', '$2y$10$V3OBPGhPxUsL8sWeYKmkCu1wxr9KKLShJOh.hjMLi6N5aY9cenqkK', 'Q3kcrCCLzLmvE90szneJwFVFDVdpUy8TLZgWG9Ar4bFoZCOC31aflkAJ4cit', '2017-12-17 12:14:54', '2017-12-17 12:14:54');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `popularities`
--
ALTER TABLE `popularities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `receptions`
--
ALTER TABLE `receptions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `popularities`
--
ALTER TABLE `popularities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `receptions`
--
ALTER TABLE `receptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
