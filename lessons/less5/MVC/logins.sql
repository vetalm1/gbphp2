-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 14 2019 г., 14:43
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `logins`
--

CREATE TABLE `logins` (
  `id` int(7) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `logins`
--

INSERT INTO `logins` (`id`, `login`, `pass`) VALUES
(1, 'Vetal', '$2y$12$gN/InRIawQp8CLwk91vRbeYykL5WjdI5CB5j/d5N0hlM34j1NgJlK'),
(2, 'admin', '$2y$12$gN/InRIawQp8CLwk91vRbeYykL5WjdI5CB5j/d5N0hlM34j1NgJlK'),
(5, 'Alena', '$2y$10$1Z.ztZ2rt2hlwX15e6lKS.y2USww9Hnxaufwz/iFYSAFm9JYE5CDW'),
(6, 'Elena', '$2y$10$OML4eoDopKZNtSlNfvoSdeFpH1WARfyURy3Gbsmpmnc4AQ9/PyuTi'),
(7, 'mixer-03', '$2y$10$SbCqzLIs0xr9XLxN4aWmje2ubnLeRzYUDcMHdod7qVsdWuPmT2VMy'),
(9, 'Vasia', '$2y$10$Msz6gco/5ZZ/sldNerc6sOf64FRfg8zcuxKES01/s3HhQpbaPKGxG'),
(10, 'Vasia2', '$2y$10$y1D5kjD/l7M1jTUbLbD4TOG60MD7VlZBZV3wzP0EVU1SpBKsYObdK');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
