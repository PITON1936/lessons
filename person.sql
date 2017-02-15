-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2016 г., 19:26
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `person_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `Patronymic` text NOT NULL,
  `Phone` text NOT NULL,
  `Email` text NOT NULL,
  `AvarengeMarks` float DEFAULT NULL,
  `Visits` float DEFAULT NULL,
  `Lessons` text,
  `Schedule` text,
  `ROLE` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`id`, `Name`, `Surname`, `Patronymic`, `Phone`, `Email`, `AvarengeMarks`, `Visits`, `Lessons`, `Schedule`, `ROLE`) VALUES
(1, 'John', 'Smith', 'Borisovich', '9379992', 'john911@gmail.com', NULL, NULL, NULL, 'Sunday, Monday, Tuesday', 'Admin'),
(2, 'Tom', 'Hardy', 'Vladimirovich', '911', 'tommy@gmail.com', NULL, NULL, 'English', NULL, 'Teacher'),
(3, 'Anthony', 'Joshua', 'Nikolaevich', '101', 'anthony911@gmail.com', 4.6, 4.9, NULL, NULL, 'Student');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
