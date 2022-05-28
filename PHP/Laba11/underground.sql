-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 28 2022 г., 19:35
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `underground`
--

-- --------------------------------------------------------

--
-- Структура таблицы `line`
--

CREATE TABLE `line` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `line`
--

INSERT INTO `line` (`id`, `name`, `color`) VALUES
(1, 'Холодногорско-Заводская ', 'red'),
(2, 'Салтовская', 'blue'),
(3, 'Алексеевская', 'green');

-- --------------------------------------------------------

--
-- Структура таблицы `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_id` int(11) NOT NULL,
  `next` int(11) NOT NULL,
  `prev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `station`
--

INSERT INTO `station` (`id`, `name`, `line_id`, `next`, `prev`) VALUES
(1, 'Холодная гора', 1, 2, 0),
(2, 'Южный вокзал', 1, 3, 1),
(3, 'Советская', 1, 4, 2),
(4, 'Майдан Конституции', 1, 5, 3),
(5, 'Проспект Гагарина', 1, 6, 4),
(6, 'Спортивная', 1, 7, 5),
(7, 'Завод ИМ.Малышего', 1, 8, 6),
(8, 'Московский проспект', 1, 9, 7),
(9, 'Маршала Жукого', 1, 10, 8),
(10, 'Им. Советской Армии', 1, 11, 9),
(11, 'Им. О.С.Масельского', 1, 12, 10),
(12, 'Тракторный завод', 1, 13, 11),
(13, 'Пролетарская', 1, 999, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `transfer`
--

CREATE TABLE `transfer` (
  `id_st_1` int(11) NOT NULL,
  `id_st_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
