-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 08 2022 г., 09:15
-- Версия сервера: 5.6.51
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bind_mpit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `declarations`
--

CREATE TABLE `declarations` (
  `idDec` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quick` tinyint(1) NOT NULL COMMENT 'срочное ли объяв',
  `date` date NOT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `grade` tinyint(6) NOT NULL DEFAULT '0' COMMENT 'оценка за выполненную объявку',
  `volidDone` int(11) NOT NULL DEFAULT '0' COMMENT 'Волонтёр, выполнивший объявку',
  `volidTake` int(11) NOT NULL DEFAULT '0' COMMENT 'Волонтёр, взявший объявку'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `declarations`
--

INSERT INTO `declarations` (`idDec`, `authorid`, `description`, `address`, `quick`, `date`, `done`, `grade`, `volidDone`, `volidTake`) VALUES
(1, 2, 'Неделю назад сломал руку, даже не знал что делать, как ходить за продуктами. Решил написать сюда. Добрые люди, помогите старому человеку, купите продукты. \r\nБуду очень благодарен за проявленную помощь!', 'ул. Ломоносова, д 29, пд 1, эт 1, кв 4', 0, '2022-04-03', 1, 5, 1, 1),
(2, 2, 'Помогите дойти до больницы на Кирова, д 19. Я сломал руку и теперь не могу даже нормально открыть дверь, а помочь мне не кому. Отзовитесь, пожалуйста ', 'ул. Ломоносова, д 29, пд 1, эт 1, кв 4', 1, '2022-03-28', 0, 0, 0, 0),
(3, 2, 'opis', 'adreees', 0, '2022-04-08', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `login` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL COMMENT 'для вычисления возраста',
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` tinyint(4) NOT NULL COMMENT 'дееспособность крч',
  `completed` int(11) NOT NULL DEFAULT '0',
  `gradeSum` int(11) NOT NULL DEFAULT '0',
  `bonuses` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idUser`, `login`, `name`, `email`, `password`, `telephone`, `profession`, `birthday`, `photo`, `about`, `capacity`, `completed`, `gradeSum`, `bonuses`) VALUES
(1, 'admin', 'adminov admin adminovich', 'admin@gmail.com', '$2y$10$C3WQCQGmcm6Zz3Vg.irTUOL5lYpMQ0hHk5in64ApSU5LLj4rXQybC', '+7 (914) 621-12-42', 'professional admin', '2000-01-01', '', 'Описание у админа :/', 1, 0, 0, 0),
(2, 'GushinLev1953', 'Гущин Лев Леонидович', 'gushinL@mail.com', '$2y$10$kntedB9AETp208ZJeSWvue8mr6aY41s43OmCoyykLmrVlzNS0iM3i', '+7 (914) 621-12-42', 'Учитель математики', '1953-04-01', '../img/GushinL.png', 'В своей жизни я избрал путь обучать людей новому и развивать в них тягу к знаниям. Именно поэтому я стал учителем в одной из школ Якутска. Недавно я сломал руку, ввиду чего мне необходима помощь волонтеров.', 0, 0, 0, 0),
(3, 'loh', 'some full name', 'loh@mail.com', '$2y$10$RdxQ8sEXqxij1nCRF/VlEeg0PiYcN5bo4WQBSXfHFpJCZrXt.ZalC', '', '', '0000-00-00', '', '', 0, 0, 0, 0),
(5, 'lenya228', 'Васильев Леонид Михайлович', 'lenyagood@gmail.com', '$2y$10$TZSViyKnIub1TIp0bUgo5.YHjUfFeEV2aUzvGjUSHxyv.4JdYUeE.', '', '', '0000-00-00', '', '', 1, 0, 0, 0),
(6, 'barabara', 'berebere', 'f@f.f', '$2y$10$mrKQ5mV3l6jVftmqTaBwquOx9wRRVAugYsYvHe9MK./RttwdFuUmm', '', '', '0000-00-00', '', '', 1, 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `declarations`
--
ALTER TABLE `declarations`
  ADD PRIMARY KEY (`idDec`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `declarations`
--
ALTER TABLE `declarations`
  MODIFY `idDec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
