-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2026 г., 11:32
-- Версия сервера: 5.7.39-log
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sport`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id_tovar` int(11) NOT NULL,
  `tovar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `img` varchar(6) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id_tovar`, `tovar`, `price`, `img`) VALUES
(1, 'велосипед', '500.00', '1.jpg'),
(2, 'лыжи', '100.00', '3.jpg'),
(3, 'сноуборд', '300.00', '6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `fio`, `login`, `pass`, `email`, `role`) VALUES
(1, 'Уламаскин Павел Александрович', '000000', '00000000', 'pavel88@gmail.com', 'Клиент'),
(2, 'Кирилов Иван Семёнович', '111111', '11111111', '123tryef@vc.com', 'Админ'),
(3, 'Кизляр Никита Романович ', '333333', '33333333', 'kizlar88@gmail.com', 'Клиент'),
(4, 'Степакова Наталья Ивановна', '333', '333', 'stepakova23@gmail.com', 'Клиент'),
(5, 'Сепанкова  Алиса Сергеевна', '555555', '55555555', '123tyruw@gmail.com', 'Клиент'),
(6, 'Ушаков Владимир Иванович', '123', '', '324@vc.com', 'Клиент'),
(7, 'Кравцов Игорь Николаевич ', '666666', '', 'kravsov@vc.com', 'Клиент');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id_zakaz` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tovar` int(11) NOT NULL,
  `kol` int(11) NOT NULL,
  `oplata` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id_zakaz`, `id_user`, `id_tovar`, `kol`, `oplata`, `status`) VALUES
(1, 1, 1, 5, 'Наличным', 'Взят на прокат'),
(3, 3, 2, 1, 'Наличным', 'Бронь'),
(4, 4, 2, 1, 'Наличным', 'Взят на прокат'),
(5, 1, 1, 2, 'Наличным', 'Взят на прокат'),
(6, 1, 3, 2, 'Наличным', 'Взят на прокат'),
(7, 1, 1, 3, 'Наличным', 'Взят на прокат');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id_tovar`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id_zakaz`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tovar` (`id_tovar`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id_tovar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id_zakaz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD CONSTRAINT `zakaz_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `zakaz_ibfk_2` FOREIGN KEY (`id_tovar`) REFERENCES `tovar` (`id_tovar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
