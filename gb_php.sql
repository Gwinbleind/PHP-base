-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 10 2020 г., 00:00
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb_php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `product_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(11) NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_small` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_medium` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_large` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `product_name`, `price`, `amount`, `category`, `img_small`, `img_medium`, `img_large`, `description`) VALUES
(1, 'MANGO White T-Shirt', '52', 1, 'men', 'img/product_mini/Product_1.png', 'img/Product_1.png', 'img/Product_1.png', 'MANGO White T-ShirtMANGO White T-ShirtMANGO White T-ShirtMANGO White T-Shirt'),
(2, 'MANGO Red Blouse', '52', 1, 'women', 'img/product_mini/Product_2.png', 'img/Product_2.png', 'img/Product_2.png', 'MANGO Red BlouseMANGO Red BlouseMANGO Red BlouseMANGO Red Blouse'),
(3, 'MANGO Blue Skirt', '52', 1, 'men', 'img/product_mini/Product_3.png', 'img/Product_3.png', 'img/Product_3.png', 'MANGO Blue SkirtMANGO Blue SkirtMANGO Blue SkirtMANGO Blue Skirt'),
(4, 'MANGO Flower Blouse', '52', 1, 'women', 'img/product_mini/Product_4.png', 'img/Product_4.png', 'img/Product_4.png', 'MANGO Flower BlouseMANGO Flower BlouseMANGO Flower BlouseMANGO Flower Blouse'),
(5, 'MANGO B/W Blouse', '52', 1, 'women', 'img/product_mini/Product_5.png', 'img/Product_5.png', 'img/Product_5.png', 'MANGO B/W BlouseMANGO B/W BlouseMANGO B/W BlouseMANGO B/W Blouse'),
(6, 'MANGO Grey Star', '52', 1, 'men', 'img/product_mini/Product_6.png', 'img/Product_6.png', 'img/Product_6.png', 'MANGO Grey Star'),
(7, 'MANGO Strange Pants', '52', 1, 'men', 'img/product_mini/Product_7.png', 'img/Product_7.png', 'img/Product_7.png', 'MANGO Strange Pants'),
(8, 'MANGO LOL Hat', '52', 1, 'men', 'img/product_mini/Product_8.png', 'img/Product_8.png', 'img/Product_8.png', 'MANGO LOL Hat'),
(12, 'MANGO Strange T-SHIRT', '52', 1, 'men', 'img/product_mini/Product_12.jpg', 'img/Product_12.jpg', 'img/Product_12.jpg', 'MANGO Strange T-SHIRT'),
(13, 'MANGO Black Long Smth', '52', 1, 'men', 'img/product_mini/Product_13.jpg', 'img/Product_13.jpg', 'img/Product_13.jpg', 'MANGO Black Long Smth'),
(14, 'MANGO Black Coat', '52', 1, 'men', 'img/product_mini/Product_14.jpg', 'img/Product_14.jpg', 'img/Product_14.jpg', 'MANGO Black Coat'),
(15, 'MANGO Cool Beard', '52', 1, 'men', 'img/product_mini/Product_15.jpg', 'img/Product_15.jpg', 'img/Product_15.jpg', 'MANGO Cool Beard'),
(16, 'MANGO Black Romb Coat', '52', 1, 'men', 'img/product_mini/Product_16.jpg', 'img/Product_16.jpg', 'img/Product_16.jpg', 'MANGO Black Romb Coat'),
(17, 'MANGO Cool Cardigan', '52', 1, 'men', 'img/product_mini/Product_17.jpg', 'img/Product_17.jpg', 'img/Product_17.jpg', 'MANGO Cool Cardigan');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Космос'),
(2, 'Пейзажи'),
(3, 'Техника');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `prev` text COLLATE utf8mb4_unicode_ci,
  `name` text COLLATE utf8mb4_unicode_ci,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `prev`, `name`, `views`) VALUES
(1, 'gallery/big/01.jpg', 'gallery/small/01.jpg', 'Космос-спираль', 30),
(2, 'gallery/big/02.jpg', 'gallery/small/02.jpg', 'Большая луна', 4),
(3, 'gallery/big/03.jpg', 'gallery/small/03.jpg', 'Зеленый фонарь', 0),
(4, 'gallery/big/04.jpg', 'gallery/small/04.jpg', 'Лунный сад', 2),
(5, 'gallery/big/05.jpg', 'gallery/small/05.jpg', 'Кальмар хочет в космос', 0),
(6, 'gallery/big/06.jpg', 'gallery/small/06.jpg', 'Вечная мерзлота', 2),
(7, 'gallery/big/07.jpg', 'gallery/small/07.jpg', 'Междуречье', 0),
(8, 'gallery/big/08.jpg', 'gallery/small/08.jpg', 'Замок', 0),
(9, 'gallery/big/09.jpg', 'gallery/small/09.jpg', 'Красный корабль', 3),
(10, 'gallery/big/10.jpg', 'gallery/small/10.jpg', 'Берег под солнцем', 0),
(11, 'gallery/big/11.jpg', 'gallery/small/11.jpg', 'Мерцающие звезды', 1),
(12, 'gallery/big/12.jpg', 'gallery/small/12.jpg', 'Зодиак Рак', 0),
(13, 'gallery/big/13.jpg', 'gallery/small/13.jpg', 'Мост', 0),
(14, 'gallery/big/14.jpg', 'gallery/small/14.jpg', 'Великая Китайская', 2),
(15, 'gallery/big/15.jpg', 'gallery/small/15.jpg', 'Эйфелева башня', 2),
(16, 'gallery/big/Снимок.PNG', 'gallery/small/Снимок.PNG', 'Микроволновка', 9),
(18, 'gallery/big/Xmas.jpg', 'gallery/small/Xmas.jpg', 'Xmas.jpg', 141),
(22, 'gallery/big/Водопад.jpg', 'gallery/small/Водопад.jpg', 'Водопад.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_feedback`
--

CREATE TABLE `gallery_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery_feedback`
--

INSERT INTO `gallery_feedback` (`id`, `name`, `text`, `img_id`) VALUES
(1, 'Вася', 'Всех с Рождеством!', 18),
(3, 'Вася', 'Картинка Класс!', 18),
(4, 'Boris', 'Merry XMAs!', 18),
(6, 'Boris', 'Не Люблю космос', 1),
(7, 'Gwinbleind', 'А где Алые Паруса?!', 9),
(8, 'Boris', 'Что здесь делает микроволновка?', 16),
(9, 'Петя', 'lol', 16);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `gallery_feedback`
--
ALTER TABLE `gallery_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `gallery_feedback`
--
ALTER TABLE `gallery_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
