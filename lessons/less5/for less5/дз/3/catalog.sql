-- phpMyAdmin SQL Dump
-- version 
-- http://www.phpmyadmin.net
--
-- Хост: progernote.mysql
-- Время создания: Ноя 07 2018 г., 16:00
-- Версия сервера: 5.6.25-73.1
-- Версия PHP: 5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `progernote_atdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--
-- Создание: Ноя 07 2018 г., 08:28
--

DROP TABLE IF EXISTS `catalog`;
CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double unsigned NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `title`, `price`, `description`, `image`) VALUES
(1, 'Товар 1', 100, 'Описание товара 1', '/upload/catalog/image1.jpg'),
(2, 'Товар 2', 200, 'Описание товара 2', '/upload/catalog/image2.jpg'),
(3, 'Товар 3', 300, 'Описание товара 3', '/upload/catalog/image3.jpg'),
(4, 'Товар 4', 400, 'Описание товара 4', '/upload/catalog/image4.jpg'),
(5, 'Товар 5', 500, 'Описание товара 5', '/upload/catalog/image5.jpg'),
(6, 'Товар 6', 600, 'Описание товара 6', '/upload/catalog/image6.jpg'),
(7, 'Товар 7', 700, 'Описание товара 7', '/upload/catalog/image6.jpg'),
(8, 'Товар 8', 800, 'Описание товара 8', '/upload/catalog/image8.jpg'),
(9, 'Товар 9', 900, 'Описание товара 9', '/upload/catalog/image9.jpg'),
(10, 'Товар 10', 1000, 'Описание товара 10', '/upload/catalog/image10.jpg'),
(11, 'Товар 11', 1100, 'Описание товара 11', '/upload/catalog/image11.jpg'),
(12, 'Товар 12', 1200, 'Описание товара 12', '/upload/catalog/image12.jpg'),
(13, 'Товар 13', 1300, 'Описание товара 13', '/upload/catalog/image13.jpg'),
(14, 'Товар 14', 1400, 'Описание товара 14', '/upload/catalog/image14.jpg'),
(15, 'Товар 15', 1500, 'Описание товара 15', '/upload/catalog/image15.jpg'),
(16, 'Товар 16', 1600, 'Описание товара 16', '/upload/catalog/image16.jpg'),
(17, 'Товар 17', 1700, 'Описание товара 17', '/upload/catalog/image17.jpg'),
(18, 'Товар 18', 1800, 'Описание товара 18', '/upload/catalog/image18.jpg'),
(19, 'Товар 19', 1900, 'Описание товара 19', '/upload/catalog/image19.jpg'),
(20, 'Товар 20', 2000, 'Описание товара 20', '/upload/catalog/image20.jpg'),
(21, 'Товар 21', 2100, 'Описание товара 21', '/upload/catalog/image21.jpg'),
(22, 'Товар 22', 2200, 'Описание товара 22', '/upload/catalog/image22.jpg'),
(23, 'Товар 23', 2300, 'Описание товара 23', '/upload/catalog/image23.jpg'),
(24, 'Товар 24', 2400, 'Описание товара 24', '/upload/catalog/image24.jpg'),
(25, 'Товар 25', 2500, 'Описание товара 25', '/upload/catalog/image25.jpg'),
(26, 'Товар 26', 2600, 'Описание товара 26', '/upload/catalog/image26.jpg'),
(27, 'Товар 27', 2700, 'Описание товара 27', '/upload/catalog/image27.jpg'),
(28, 'Товар 28', 2800, 'Описание товара 28', '/upload/catalog/image28.jpg'),
(29, 'Товар 29', 2900, 'Описание товара 29', '/upload/catalog/image29.jpg'),
(30, 'Товар 30', 3000, 'Описание товара 30', '/upload/catalog/image30.jpg'),
(31, 'Товар 31', 3100, 'Описание товара 31', '/upload/catalog/image31.jpg'),
(32, 'Товар 32', 3200, 'Описание товара 32', '/upload/catalog/image32.jpg'),
(33, 'Товар 33', 3300, 'Описание товара 33', '/upload/catalog/image33.jpg'),
(34, 'Товар 34', 3400, 'Описание товара 34', '/upload/catalog/image34.jpg'),
(35, 'Товар 35', 3500, 'Описание товара 35', '/upload/catalog/image35.jpg'),
(36, 'Товар 36', 3600, 'Описание товара 36', '/upload/catalog/image36.jpg'),
(37, 'Товар 37', 3700, 'Описание товара 37', '/upload/catalog/image37.jpg'),
(38, 'Товар 38', 3800, 'Описание товара 38', '/upload/catalog/image38.jpg'),
(39, 'Товар 39', 3900, 'Описание товара 39', '/upload/catalog/image39.jpg'),
(40, 'Товар 40', 4000, 'Описание товара 40', '/upload/catalog/image40.jpg'),
(41, 'Товар 41', 4100, 'Описание товара 41', '/upload/catalog/image41.jpg'),
(42, 'Товар 42', 4200, 'Описание товара 42', '/upload/catalog/image42.jpg'),
(43, 'Товар 43', 4300, 'Описание товара 43', '/upload/catalog/image43.jpg'),
(44, 'Товар 44', 4400, 'Описание товара 44', '/upload/catalog/image44.jpg'),
(45, 'Товар 45', 4500, 'Описание товара 45', '/upload/catalog/image45.jpg'),
(46, 'Товар 46', 4600, 'Описание товара 46', '/upload/catalog/image46.jpg'),
(47, 'Товар 47', 4700, 'Описание товара 47', '/upload/catalog/image47.jpg'),
(48, 'Товар 48', 4800, 'Описание товара 48', '/upload/catalog/image48.jpg'),
(49, 'Товар 49', 4900, 'Описание товара 49', '/upload/catalog/image49.jpg'),
(50, 'Товар 50', 5000, 'Описание товара 50', '/upload/catalog/image50.jpg'),
(51, 'Товар 51', 5100, 'Описание товара 51', '/upload/catalog/image51.jpg'),
(52, 'Товар 52', 5200, 'Описание товара 52', '/upload/catalog/image52.jpg'),
(53, 'Товар 53', 5300, 'Описание товара 53', '/upload/catalog/image53.jpg'),
(54, 'Товар 54', 5400, 'Описание товара 54', '/upload/catalog/image54.jpg'),
(55, 'Товар 55', 5500, 'Описание товара 55', '/upload/catalog/image55.jpg'),
(56, 'Товар 56', 5600, 'Описание товара 56', '/upload/catalog/image56.jpg'),
(57, 'Товар 57', 5700, 'Описание товара 57', '/upload/catalog/image57.jpg'),
(58, 'Товар 58', 5800, 'Описание товара 58', '/upload/catalog/image58.jpg'),
(59, 'Товар 59', 5900, 'Описание товара 59', '/upload/catalog/image59.jpg'),
(60, 'Товар 60', 6000, 'Описание товара 60', '/upload/catalog/image60.jpg'),
(61, 'Товар 61', 6100, 'Описание товара 61', '/upload/catalog/image61.jpg'),
(62, 'Товар 62', 6200, 'Описание товара 62', '/upload/catalog/image62.jpg'),
(63, 'Товар 63', 6300, 'Описание товара 63', '/upload/catalog/image63.jpg'),
(64, 'Товар 64', 6400, 'Описание товара 64', '/upload/catalog/image64.jpg'),
(65, 'Товар 65', 6500, 'Описание товара 65', '/upload/catalog/image65.jpg'),
(66, 'Товар 66', 6600, 'Описание товара 66', '/upload/catalog/image66.jpg'),
(67, 'Товар 67', 6700, 'Описание товара 67', '/upload/catalog/image67.jpg'),
(68, 'Товар 68', 6800, 'Описание товара 68', '/upload/catalog/image68.jpg'),
(69, 'Товар 69', 6900, 'Описание товара 69', '/upload/catalog/image69.jpg'),
(70, 'Товар 70', 7000, 'Описание товара 70', '/upload/catalog/image70.jpg'),
(71, 'Товар 71', 7100, 'Описание товара 71', '/upload/catalog/image71.jpg'),
(72, 'Товар 72', 7200, 'Описание товара 72', '/upload/catalog/image72.jpg'),
(73, 'Товар 73', 7300, 'Описание товара 73', '/upload/catalog/image73.jpg'),
(74, 'Товар 74', 7400, 'Описание товара 74', '/upload/catalog/image74.jpg'),
(75, 'Товар 75', 7500, 'Описание товара 75', '/upload/catalog/image75.jpg'),
(76, 'Товар 76', 7600, 'Описание товара 76', '/upload/catalog/image76.jpg'),
(77, 'Товар 77', 7700, 'Описание товара 77', '/upload/catalog/image77.jpg'),
(78, 'Товар 78', 7800, 'Описание товара 78', '/upload/catalog/image78.jpg'),
(79, 'Товар 79', 7900, 'Описание товара 79', '/upload/catalog/image79.jpg'),
(80, 'Товар 80', 8000, 'Описание товара 80', '/upload/catalog/image80.jpg'),
(81, 'Товар 81', 8100, 'Описание товара 81', '/upload/catalog/image81.jpg'),
(82, 'Товар 82', 8200, 'Описание товара 82', '/upload/catalog/image82.jpg'),
(83, 'Товар 83', 8300, 'Описание товара 83', '/upload/catalog/image83.jpg'),
(84, 'Товар 84', 8400, 'Описание товара 84', '/upload/catalog/image84.jpg'),
(85, 'Товар 85', 8500, 'Описание товара 85', '/upload/catalog/image85.jpg'),
(86, 'Товар 86', 8600, 'Описание товара 86', '/upload/catalog/image86.jpg'),
(87, 'Товар 87', 8700, 'Описание товара 87', '/upload/catalog/image87.jpg'),
(88, 'Товар 88', 8800, 'Описание товара 88', '/upload/catalog/image88.jpg'),
(89, 'Товар 89', 8900, 'Описание товара 89', '/upload/catalog/image89.jpg'),
(90, 'Товар 90', 9000, 'Описание товара 90', '/upload/catalog/image90.jpg'),
(91, 'Товар 91', 9100, 'Описание товара 91', '/upload/catalog/image91.jpg'),
(92, 'Товар 92', 9200, 'Описание товара 92', '/upload/catalog/image92.jpg'),
(93, 'Товар 93', 9300, 'Описание товара 93', '/upload/catalog/image93.jpg'),
(94, 'Товар 94', 9400, 'Описание товара 94', '/upload/catalog/image94.jpg'),
(95, 'Товар 95', 9500, 'Описание товара 95', '/upload/catalog/image95.jpg'),
(96, 'Товар 96', 9600, 'Описание товара 96', '/upload/catalog/image96.jpg'),
(97, 'Товар 97', 9700, 'Описание товара 97', '/upload/catalog/image97.jpg'),
(98, 'Товар 98', 9800, 'Описание товара 98', '/upload/catalog/image98.jpg'),
(99, 'Товар 99', 9900, 'Описание товара 99', '/upload/catalog/image99.jpg'),
(100, 'Товар 100', 10000, 'Описание товара 100', '/upload/catalog/image100.jpg'),
(101, 'Товар 101', 10100, 'Описание товара 101', '/upload/catalog/image101.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
