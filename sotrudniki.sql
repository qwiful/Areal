-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 12 2024 г., 19:23
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
  `Pasport` varchar(15) NOT NULL,
  `KontaktnayaInfa` varchar(75) NOT NULL,
  `Adres` varchar(75) NOT NULL,
  `Otdel` varchar(75) NOT NULL,
  `Dolzhnost` varchar(75) NOT NULL,
  `Zarplata` int(11) NOT NULL,
  `DataPrinatia` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `sotr`
--

INSERT INTO `sotr` (`ID`, `FIO`, `DataRozhdenia`, `Pasport`, `KontaktnayaInfa`, `Adres`, `Otdel`, `Dolzhnost`, `Zarplata`, `DataPrinatia`, `Status`) VALUES
(1, 'Шмелькова Анастасия Ивановна', '1985-10-09', ' 9805 941745', '+7(921)820-80-15', 'ул.Блюхера, д.76', 'Бухгалтерия', 'Главный бухгалтер', 85000, '2018-02-02', 'Работает'),
(2, 'Попов Сергей Витальевич', '1990-04-08', ' 8954 975845', '+7(921)675-88-44', 'ул.Новостройская д.17', 'Маркетинг', 'Начальник отдела', 96000, '2018-07-24', 'Работает');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sotr`
--
ALTER TABLE `sotr`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sotr`
--
ALTER TABLE `sotr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
