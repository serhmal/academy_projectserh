-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Жов 28 2014 р., 22:51
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
-- Структура таблиці `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `club`
--

CREATE TABLE IF NOT EXISTS `club` (
`id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `Year` year(4) NOT NULL,
  `trophy_id` int(11) NOT NULL,
  `Budget` int(11) NOT NULL,
  `president_id` int(11) NOT NULL,
  `stadium_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `country`
--

CREATE TABLE IF NOT EXISTS `country` (
`id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `league`
--

CREATE TABLE IF NOT EXISTS `league` (
`id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `country_id` int(50) NOT NULL,
  `UEFAranking` int(11) NOT NULL,
  `president_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблиці `president`
--

CREATE TABLE IF NOT EXISTS `president` (
`id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `club_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `league_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `stadium`
--

CREATE TABLE IF NOT EXISTS `stadium` (
`id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `Year` year(4) NOT NULL,
  `Capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `trophy`
--

CREATE TABLE IF NOT EXISTS `trophy` (
`id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Date` year(4) NOT NULL,
  `league_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `club`
--
ALTER TABLE `club`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `league`
--
ALTER TABLE `league`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `president`
--
ALTER TABLE `president`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `stadium`
--
ALTER TABLE `stadium`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `trophy`
--
ALTER TABLE `trophy`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `club`
--
ALTER TABLE `club`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `country`
--
ALTER TABLE `country`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `league`
--
ALTER TABLE `league`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `president`
--
ALTER TABLE `president`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `stadium`
--
ALTER TABLE `stadium`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `trophy`
--
ALTER TABLE `trophy`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
