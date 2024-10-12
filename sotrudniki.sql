-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 10 2024 г., 21:30
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sotrudniki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sotr`
--

CREATE TABLE `sotr` (
  `ID` int(11) NOT NULL,
  `FIO` varchar(75) NOT NULL,
  `DataRozhdenia` date NOT NULL,
  `Pasport` varchar(10) NOT NULL,
  `KontaktnayaInfa` varchar(75) NOT NULL,
  `Adres` varchar(75) NOT NULL,
  `Otdel` varchar(75) NOT NULL,
  `Dolzhnost` varchar(75) NOT NULL,
  `Zarplata` int(11) NOT NULL,
  `DataPrinatia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `sotr`
--

INSERT INTO `sotr` (`ID`, `FIO`, `DataRozhdenia`, `Pasport`, `KontaktnayaInfa`, `Adres`, `Otdel`, `Dolzhnost`, `Zarplata`, `DataPrinatia`) VALUES
(1, 'Шмелькова Анастасия Ивановна', '1985-10-09', ' 980594179', 'Nastya_Shmel@gmail.com', 'г.Ярославль, ул.Блюхера, д.76, кв.34', 'Бухгалтерия', 'Главный бухгалтер', 85000, '2018-02-02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sotr`
--
ALTER TABLE `sotr`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
