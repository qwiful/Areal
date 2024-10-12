-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 12 2024 г., 23:56
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
  `Statusr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `sotr`
--

INSERT INTO `sotr` (`ID`, `FIO`, `DataRozhdenia`, `Pasport`, `KontaktnayaInfa`, `Adres`, `Otdel`, `Dolzhnost`, `Zarplata`, `DataPrinatia`, `Statusr`) VALUES
(1, 'Круглова Валерия Павловна', '1994-07-07', '7656 456789', '+7(900)654-32-32', 'ул.Пушкина д.67', 'Кадров', 'Рекрутер', 95000, '2020-07-09', 'Уволен'),
(2, 'Щербаков Алексей Ильич', '2001-03-08', '7656 453453', '+7(900)654-32-67', 'ул.Павлова д.78', 'Маркетинг', 'Начальник отдела', 100000, '2017-10-11', 'Работает'),
(3, 'Черных Арсений Валерьевич', '1999-06-05', '9845 452041', '+7(921)652-32-65', 'ул.Блюхера д.23', 'Бухгалтерия', 'Главный бухгалтер', 98000, '2021-06-12', 'Уволен'),
(4, 'Алехина Евгения Ивановна', '1992-01-30', '8565 858585', '+7(921)548-34-32', 'ул.Урицкого д.14', 'Бухгалтерия', 'Бухгалтер-стажер', 24000, '2024-08-02', 'Работает');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
