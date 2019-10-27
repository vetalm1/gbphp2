-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 10 2019 г., 13:34
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
-- Структура таблицы `goods3`
--

CREATE TABLE `goods3` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods3`
--

INSERT INTO `goods3` (`id`, `name`) VALUES
(1, 'АДАПТЕР \"BRAUN-5001-687\"\r\n'),
(3, 'ВЕСЫ \"SCARLETT-SC-210\"\r\n'),
(4, 'ПЛИТА ЭЛ. \"ЛЫСЬВА-ЭП411\"\r\n'),
(5, 'ЦЕНТРИФУГА \"ФЕЯ-Ц2\"\r\n'),
(6, 'МАШИНА СТИР. \"DAEWOO-DW-5014P\"\r\n'),
(7, 'МАШИНА СТИР. \"DAEWOO-DW-500MP\"\r\n'),
(8, 'БУМАГА \"SVETO COPY\"\r\n'),
(9, 'СОКОВЫЖИМАЛКА ЭЛ. \"SCARLETT-SC-012\"\r\n'),
(10, 'ЧАЙНИК ЭЛ. \"SCARLETT-SC-1021\"\r\n'),
(11, 'КОФЕМОЛКА \"VITEK-VT-1540\"\r\n'),
(12, 'ТЕЛЕФОН \"LG-GT-7121A\"\r\n'),
(13, 'ФИЛЬТР КОМП \"SVEN-OPTIMA 1.9M\"\r\n'),
(14, 'ХОЛОДИЛЬНИК \"ОКЕАН-RN-2720.\"\r\n'),
(15, 'ТЕЛЕФОН \"ALCATEL-OT F20\"\r\n'),
(16, 'ЧАЙНИК ЭЛ. \"VITEK-VT-1101\"\r\n'),
(17, 'КАРТРИДЖ \"PR-T032440 YELLOW C70/80\"\r\n'),
(18, 'БУМАГА \"EPSON-S041330 10*800\"\r\n'),
(19, 'ЧАЙНИК ЭЛ. \"SCARLETT-SC-223\"\r\n'),
(20, 'В/КАССЕТА \"SONY-DV-120 M\"\r\n'),
(21, 'БАТАРЕЙКА \"PANASONIC-CR2450\"\r\n'),
(22, 'ТЕЛЕФОН \"GE-RS2-9167GE2 ЧЕР\"\r\n'),
(23, 'БАТАРЕЙКА \"PANASONIC-CR-V3\"\r\n'),
(24, 'РАДИАТОР МАСЛЯН. \"UFESA-RA-3416\"\r\n'),
(25, 'В/КАССЕТА \"SONY-DVM-60 PREMIUM\"\r\n'),
(26, 'КОМБАЙН \"MOULINEX-DFC84E\"\r\n'),
(27, 'МАШИНА СТИР. \"BOSCH-WFL 1662\"\r\n'),
(28, 'МАШИНА СТИР. \"SIEMENS-WXS 1063\"\r\n'),
(29, 'БЛЕНДЕР \"TEFAL-6783\"\r\n'),
(30, 'ПЛИТА ЭЛ. \"ЛЫСЬВА-ЭПЧ 2/2,5 БЕЛ\"\r\n'),
(31, 'ФИЛЬТР \"CATA-УГОЛЬНЫЙ ST/F\"\r\n'),
(32, 'Н-Р ПОСУДЫ \"VITESSE-13ПР.VS-1043\"\r\n'),
(33, 'ПЕЧЬ СВЧ \"LG-MS-2652T\"\r\n'),
(34, 'ПОЛКА \'U 091 3017800225\'\r\n'),
(35, 'ТЕЛЕФОН \"GE-RU2-1850GE3 СЕРЕБР\"\r\n'),
(36, 'ПУЛЬТ \"DAEWOO СЕРВИС R-34SVC\"\r\n'),
(37, 'ТЮНЕР \"TDV-3S7\'\r\n'),
(38, 'ТВ \"HYUNDAI-H-TV1400\"\r\n'),
(39, 'УВЛАЖНИТЕЛЬ \"BONECO-7135\"\r\n'),
(40, 'КРЫШКА \"WACEPT FR590 3011475300\"\r\n'),
(41, 'ВЫТЯЖКА \"CATA-OMEGA-600 КНОП.НЕРЖ\"\r\n'),
(42, 'ФИЛЬТР \"CUCKOO-CIF-01\"\r\n'),
(43, 'ДВЕРЬ \"SPIN WS 601\"\r\n'),
(44, 'РАДИОЧАСЫ \"HYUNDAI-H-1501 СЕРЕБРО\"\r\n'),
(45, 'ЧАЙНИК ЭЛ. \"TEFAL-BF 2622\"\r\n'),
(46, 'УТЮГ \"TEFAL-FV 9240\"\r\n'),
(47, 'СОКОВЫЖИМАЛКА ЭЛ. \"VITEK-VT-1612\"\r\n'),
(48, 'ВЕСЫ \"VITEK-VT-1954\"\r\n'),
(49, 'МАШИНКА Д/СТРИЖКИ \"VITEK-VT-1353\"\r\n'),
(50, 'ЧАЙНИК ЭЛ. \"VITEK-VT-1114\"\r\n'),
(51, 'ЧАЙНИК ЭЛ. \"VITEK-VT-1126\"\r\n'),
(52, 'УТЮГ \"VITEK-VT-1232\"\r\n'),
(53, 'ВЫТЯЖКА \"CATA-V-600 НЕРЖ\"\r\n'),
(54, 'МАШИНА СТИР. \"ELECTROLUX-EWF 1090\"\r\n'),
(55, 'ЧАЙНИК ЭЛ. \"VITEK-VT-1123\"\r\n'),
(56, 'ПОЛКА \'F*T 260 3019017700\'\r\n'),
(57, 'МАШИНА СТИР. \"LG-WD-10150NUP\"\r\n'),
(58, 'ЩИПЦЫ ЭЛ. \"VITEK-VT-1331\"\r\n'),
(59, 'ПЛИТА ГАЗ. \"INDESIT-K3G21 W(R)\"\r\n'),
(60, 'СТОЙКА \"SONOROUS-PL-2100M\"\r\n'),
(61, 'ТОСТЕР \"PHILIPS-HD 2618\"\r\n'),
(62, 'ВЫТЯЖКА \"CATA-NEBLIA-600 КНОП.БЕЛ\"\r\n'),
(63, 'ЧАЙНИК ЭЛ. \"VITEK-VT-1130\"\r\n'),
(64, 'ФЕН \"VITEK-VT-1340\"\r\n'),
(65, 'ТРИММЕР \"PANASONIC-ER-407K\"\r\n'),
(66, 'ДВЕРЬ \"LG-502 3581JA8360T\"\r\n'),
(67, 'ДВЕРЬ \"LG-282 3581JA1024Q\"\r\n'),
(68, 'ДВЕРЬ \"091 PFTU00B320\"\r\n'),
(69, 'ДВЕРЬ \"061 PFTU00A320\"\r\n'),
(70, 'ДВЕРЬ \"280 МОРОЗ PFFT00J650\"\r\n'),
(71, 'ЧАЙНИК ЭЛ. \"PHILIPS-HD 4690\"\r\n'),
(72, 'ДВЕРЬ \"R 530 3011751920 SILVER\"\r\n'),
(73, 'ХОЛОДИЛЬНИК \"DAEWOO-FR-147\"\r\n'),
(74, 'ДВЕРЬ \"MERLONI-116384\"\r\n'),
(75, 'ФУТЛЯР Ф/КАМЕРЫ \"SONY-MPK-THA\"\r\n'),
(76, 'ФИЛЬТР СЕТЕВОЙ \"DF-S-401 2M\"\r\n'),
(77, 'ФИЛЬТР \"ELECTROLUX-EF110,Д/ПЫЛЕСОСА\"\r\n'),
(78, 'ДВЕРЬ \"FF115 PFTT00C015\"\r\n'),
(79, 'ДВЕРЬ \"R 280 PFRT00J750\"\r\n'),
(80, 'ДВЕРЬ \"F 360/390 3010080300 WH\"\r\n'),
(81, 'ЦЕННИК \"МАЛЕНЬКИЙ 0.1Х0.05\"\r\n'),
(82, 'МАШИНА СТИР. \"ARDO-TL 80E\"\r\n'),
(83, 'МАШИНА СТИР. \"ARDO-TL 85S\"\r\n'),
(84, 'ТРОСИК \"BRAKE WS 601\"\r\n'),
(85, 'БЛЕНДЕР \"TEFAL-BL5101\"\r\n'),
(86, 'МИКРОФОН \"THOMSON-M152\"\r\n'),
(87, 'ЧАЙНИК ЭЛ. \"SCARLETT-SC-1027WGREEN\"\r\n'),
(88, 'УТЮГ \"ROWENTA-DZ 5030\"\r\n'),
(89, 'КОФЕМОЛКА \"VITEK-VT-1541\"\r\n'),
(90, 'ФИЛЬТР \"FAGOR-AFC-12 (5CDC)\"\r\n'),
(91, 'УТЮГ \"SCARLETT-SC-331S\"\r\n'),
(92, 'УТЮГ \"TEFAL-FV 3210\"\r\n'),
(93, 'ПК \"EGO430 A3.5/1G/200G/DRW/X1600-256\"\r\n'),
(94, 'ТЕЛЕФОН \"GE-RU2-1828GE4-B\"\r\n'),
(95, 'УТЮГ \"SCARLETT-SC-338S\"\r\n'),
(96, 'УТЮГ \"TEFAL-FV 3220\"\r\n'),
(97, 'МАССАЖЕР \"VITEK-VT-1386\"\r\n'),
(98, 'DVD-ПЛЕЙЕР \"ОКЕАН-PD-10799.\"\r\n'),
(99, 'DVD-ПЛЕЙЕР \"ОКЕАН-PD-20710.\"\r\n'),
(100, 'МАГНИТОЛА \"SANYO-MCD-ZX230M\"\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods3`
--
ALTER TABLE `goods3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods3`
--
ALTER TABLE `goods3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
