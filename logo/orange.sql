-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 29 2016 г., 13:16
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `orange`
--

-- --------------------------------------------------------

--
-- Структура таблицы `country_`
--

CREATE TABLE IF NOT EXISTS `country_` (
  `id_country` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `country_name_ru` varchar(50) NOT NULL,
  `country_name_en` varchar(50) NOT NULL,
  PRIMARY KEY (`id_country`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=219 ;

--
-- Дамп данных таблицы `country_`
--

INSERT INTO `country_` (`id_country`, `country_name_ru`, `country_name_en`) VALUES
(1, 'Сайт', 'Site'),
(2, 'Дизайн', 'Dizain'),
(3, 'Лого', 'Logo'),
(4, 'Портрет', 'Portret');

-- --------------------------------------------------------

--
-- Структура таблицы `region_`
--

CREATE TABLE IF NOT EXISTS `region_` (
  `id_region` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_country` mediumint(8) unsigned NOT NULL,
  `region_name_ru` varchar(255) DEFAULT NULL,
  `region_name_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id_region`),
  KEY `id_country` (`id_country`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1612 ;

--
-- Дамп данных таблицы `region_`
--

INSERT INTO `region_` (`id_region`, `id_country`, `region_name_ru`, `region_name_en`) VALUES
(1, 1, 'Сайт визитку', 'Site vizit'),
(2, 1, 'Посадочную страницу', 'Landing page'),
(3, 1, 'Сайт портал', 'Site portal'),
(4, 1, 'Интернет магазин', 'Online stote'),
(5, 2, 'Веб дизайн', 'Web dizain'),
(6, 2, 'Адаптивную верстку', 'Adaptive layout'),
(7, 3, 'Логотип', 'Logo'),
(8, 3, 'Визитки', 'Business card'),
(9, 3, 'Фирменный стиль', 'Firm stule'),
(10, 4, 'А5 чёрно-белый', 'A5 black and white'),
(11, 4, 'А5 чёрно-белый с фоном', 'A5 black and white with background'),
(12, 4, 'А5 цветной', 'A5 color'),
(13, 4, 'А5 цветной с фоном', 'A5 color with background'),
(14, 4, 'А4 чёрно-белый', 'A4 black and white'),
(15, 4, 'А4 чёрно-белый с фоном', 'A4 black and white with background'),
(16, 4, 'А4 цветной', 'A4 color'),
(17, 4, 'А4 цветной с фоном', 'A4 color with background'),
(18, 4, 'А3 чёрно-белый', 'A3 black and white'),
(19, 4, 'А3 чёрно-белый с фоном', 'A3 black and white with background'),
(20, 4, 'А3 йветной', 'A3 color'),
(21, 4, 'А3 цветной с фоном', 'A3 color with background');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
