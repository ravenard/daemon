-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2016 г., 13:15
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `newslist`
--

CREATE TABLE IF NOT EXISTS `newslist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `categories` text NOT NULL,
  `filename` text NOT NULL,
  `filetype` text NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Дамп данных таблицы `newslist`
--

INSERT INTO `newslist` (`id`, `title`, `content`, `categories`, `filename`, `filetype`, `rating`) VALUES
(1, 'Rustam', 'РћР±С‹РєРЅРѕРІРµРЅРЅС‹Р№', 'РљСЌСЃРєРёР»', '', '', 0),
(33, '3 РєР°С‚РµРіРѕСЂРёРё', 'Р—Р°РїРёСЃСЊ СЃ С‚СЂРµРјСЏ РєР°С‚РµРіРѕСЂРёСЏРјРё', 'РљСЌСЃРєРёР»,РљРѕРЅРєСѓСЂСЃС‹,asd', '', '', 0),
(34, 'KAEF', 'РџС…Рґ СЂР°Р±РѕС‚Р°РµС‚', 'РљСЌСЃРєРёР»,asd', '["mountain-sound.jpg"]', '["image/jpeg"]', 0),
(37, 'fdfd', 'fdfdf', 'РљСЌСЃРєРёР»,asd', '["motto.mp3"]', '["audio/mp3"]', 0),
(38, 'Р•С‰Рµ РѕРґРёРЅ С‚СЂРµРє', 'РҐР°С…Р°С…Р°', 'asd', '["wonder.mp3"]', '["audio/mp3"]', 0),
(39, 'Р“СЂРёС„С„РёРЅС‹', 'РџСЂРµРєРѕР»', 'РљСЌСЃРєРёР»', '["Family Guy (Р“СЂРёС„С„РёРЅС‹) - РџРѕР¶Р°СЂРЅР°СЏ РјР°С€РёРЅР°.mp4"]', '["video/mp4"]', 0),
(42, 'РњРёСЃС‚РµСЂ Р”СѓРґРµС†', 'РўРµРєСЃС‚', 'РќРµС‚Сѓ', '["1446523a225d5e.mp3","maxresdefault (1).jpg"]', '["audio/mp3","image/jpeg"]', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
