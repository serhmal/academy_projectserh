-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Жов 29 2014 р., 10:50
-- Версія сервера: 5.6.21-log
-- Версія PHP: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `eurofootball`
--

-- --------------------------------------------------------

--
-- Структура таблиці `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `countries_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cities_id` int(11) NOT NULL,
  `stadiums_id` int(11) NOT NULL,
  `leagues_id` int(11) NOT NULL,
  `countries_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `budget` int(11) NOT NULL,
  `presidents_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `clubs-trophies`
--

CREATE TABLE IF NOT EXISTS `clubs-trophies` (
`id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `trophies_id` int(11) NOT NULL,
  `clubs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `leagues`
--

CREATE TABLE IF NOT EXISTS `leagues` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `countries_id` int(11) NOT NULL,
  `uefaranking` int(11) NOT NULL,
  `presidents_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблиці `presidents`
--

CREATE TABLE IF NOT EXISTS `presidents` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `stadiums`
--

CREATE TABLE IF NOT EXISTS `stadiums` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cities_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `trophies`
--

CREATE TABLE IF NOT EXISTS `trophies` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` year(4) NOT NULL,
  `leagues_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `clubs`
--
ALTER TABLE `clubs`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `clubs-trophies`
--
ALTER TABLE `clubs-trophies`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `leagues`
--
ALTER TABLE `leagues`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `presidents`
--
ALTER TABLE `presidents`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `stadiums`
--
ALTER TABLE `stadiums`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `trophies`
--
ALTER TABLE `trophies`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `cities`
--
ALTER TABLE `cities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `clubs`
--
ALTER TABLE `clubs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `clubs-trophies`
--
ALTER TABLE `clubs-trophies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `leagues`
--
ALTER TABLE `leagues`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `presidents`
--
ALTER TABLE `presidents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `stadiums`
--
ALTER TABLE `stadiums`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `trophies`
--
ALTER TABLE `trophies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
