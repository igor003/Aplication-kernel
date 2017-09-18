-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 14 2017 г., 16:43
-- Версия сервера: 5.5.50
-- Версия PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `documentation`
--

CREATE TABLE IF NOT EXISTS `documentation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `documentation`
--

INSERT INTO `documentation` (`id`, `name`, `type`, `parent_id`, `created_at`) VALUES
(1, 'Root folder 1', 'folder', 0, '2017-09-11'),
(2, 'Root folder 2', 'folder', 0, '2017-09-12'),
(4, 'igor folder', 'folder', 0, '2017-09-13'),
(5, 'укпаввап', 'folder', 0, '2017-09-13'),
(6, 'trololo', 'folder', 0, '2017-09-14'),
(7, 'IMG_20170912_142912.jpg', 'file', 0, '2017-09-14'),
(8, 'IMG_20170912_142734.jpg', 'file', 0, '2017-09-14'),
(9, 'IMG_20170912_143008.jpg', 'file', 0, '2017-09-14'),
(10, 'IMG_20170912_142734.jpg', 'file', 0, '2017-09-14'),
(11, 'IMG_20170912_142756.jpg', 'file', 0, '2017-09-14'),
(12, 'IMG_20170912_142734.jpg', 'file', 0, '2017-09-14'),
(13, 'IMG_20170912_142734.jpg', 'file', 4, '2017-09-14'),
(14, 'IMG_20170912_143008.jpg', 'file', 5, '2017-09-14'),
(17, 'Pareto_Scarti_GP12 AL.xlsx', 'file', 4, '2017-09-14'),
(18, 'BANDA.xlsx', 'file', 4, '2017-09-14'),
(19, 'BANDA.xlsx', 'file', 4, '2017-09-14'),
(20, 'Pareto_Scarti_GP12_AL.xlsx', 'file', 4, '2017-09-14'),
(21, 'PPMMMMMMMMM.xlsx', 'file', 4, '2017-09-14');

-- --------------------------------------------------------

--
-- Структура таблицы `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL,
  `data` varchar(1000) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `log`
--

INSERT INTO `log` (`id`, `data`, `login`, `action`) VALUES
(67, '2017-09-11 16:50:31', 'igor', 'login'),
(68, '2017-09-11 16:50:53', 'igor', 'login'),
(69, '2017-09-11 16:50:57', 'igor', 'login'),
(70, '2017-09-11 16:51:26', 'igor', 'login'),
(71, '2017-09-12 07:56:36', 'igor', 'login'),
(72, '2017-09-12 12:07:46', 'igor', 'login'),
(73, '2017-09-12 19:41:22', 'igor', 'login'),
(74, '2017-09-12 19:42:57', 'igor', 'login'),
(75, '2017-09-12 19:57:02', 'igor', 'login'),
(76, '2017-09-12 19:59:32', 'igor', 'login'),
(77, '2017-09-12 20:00:52', 'igor', 'login'),
(78, '2017-09-12 20:02:20', 'igor', 'login'),
(79, '2017-09-12 20:03:56', 'igor', 'login'),
(80, '2017-09-12 20:20:18', 'igor', 'login'),
(81, '2017-09-12 20:25:52', 'igor', 'login'),
(82, '2017-09-12 21:38:08', 'igor', 'login'),
(83, '2017-09-12 21:38:24', 'igor', 'login'),
(84, '2017-09-12 21:51:47', 'igor', 'login'),
(85, '2017-09-12 21:55:43', 'igor', 'login'),
(86, '2017-09-12 21:55:50', 'igor', 'login'),
(87, '2017-09-12 22:15:55', 'igor', 'login'),
(88, '2017-09-12 22:18:56', 'igor', 'login'),
(89, '2017-09-12 22:20:09', 'igor', 'login'),
(90, '2017-09-12 22:20:21', 'igor', 'login'),
(91, '2017-09-13 07:54:29', 'igor', 'login'),
(92, '2017-09-13 10:02:44', 'igor', 'login'),
(93, '2017-09-13 10:04:14', 'igor', 'login'),
(94, '2017-09-13 12:19:52', '', 'login'),
(95, '2017-09-13 12:20:19', 'igor', 'login'),
(96, '2017-09-14 07:48:41', 'igor', 'login'),
(97, '2017-09-14 10:07:45', 'igor', 'login'),
(98, '2017-09-14 12:17:19', 'igor', 'login'),
(99, '2017-09-14 12:19:52', 'igor', 'create folder -trolo'),
(100, '2017-09-14 13:21:57', 'igor', 'login'),
(101, '2017-09-14 13:41:19', 'igor', 'login'),
(102, '2017-09-14 13:50:01', 'igor', 'login'),
(103, '2017-09-14 15:22:56', 'igor', 'login'),
(104, '2017-09-14 16:38:32', 'igor', 'login');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `status`) VALUES
(8, 'igor', '$2y$10$hDV8L/BC03OddZyqOJVFl.oCXadcXjaSiStBwh2OKnIh2o/GgXuoa', 'admin'),
(9, 'igor', '$2y$10$YLq/cWO6dad4sJD1u.FwnuCuWBYDodCbi7YTWqLAnWr/fe1UwKcLG', 'admin'),
(10, 'igor', '$2y$10$58Vp9PHDYhe0suFNZNuy2e8Z8QmD8aDZK7n9i4NOHClN9YvHHGn0W', 'admin'),
(11, 'igor', '$2y$10$40lgCL5Xh2inc84ONA.ofuLJ8xehhVUP0pgeANimqf8h59GbLSiWu', 'admin'),
(12, 'igor', '$2y$10$PfKZss6K/S2zIIlLeJXhvOoB8mo1yiNC.fpwRHHzGJ1hGUGlUoAp6', 'admin'),
(13, 'igor', '$2y$10$mu3RVZtWNpBS2P6ukdKJ4OM9rf2vdXGITiJon4JdfUQ6D/ahup1xu', 'admin'),
(14, 'igor', '$2y$10$UlxSfUfMQTBW7shmVylr6uKirghP/0Q2xykAZoDAlNyMuVb7L7aKG', 'admin'),
(15, 'igor', '$2y$10$MtlY.ZRL9R1X8MYqZFeYoOX29oHylzC3OrqKgomzyXFvFMwdTxnFa', 'admin'),
(16, 'igor', '$2y$10$HpGIEdn9JJVN5Bv6jP9VQ.ZKSTDWu5WgSCEelkCXu.xWotwoPSe2O', 'admin'),
(17, 'igor', '$2y$10$jMF7QCSxQ67X3WpqfNmHTugB1MXkCMR3ngKKYp9f.fXMJOd8j0MhS', 'admin'),
(18, 'igor', '$2y$10$rBIrzOcy9f0II2NHtC9/Jewl2/n71W0M8zYss8Qqvk7O4wVwCm9t2', 'admin'),
(19, 'igor', '$2y$10$NOudl0uPgpXnPb1Fm1WHJ.ZEIAEJ12jXMcV2K/DRGq09ANkIQm/2a', 'admin'),
(20, 'igor', '$2y$10$O7NbF1ZK2aNuplrMkW9I/OoGywF3fxPLyJHwWPC5GFteuQsheavnG', 'admin'),
(21, 'igor', '$2y$10$w96Smko8pSkDX5X08u94Fue9YYn0voAGeig3m.2ohiH4hMeGNmR12', 'admin'),
(22, '', '$2y$10$ibsYrU95Az0YprvqD11dFesjuaoyYUb9KoD9Pw.s6SBi2dkyih1eW', ''),
(23, '', '$2y$10$x90pvKZG/4yjyOzRRznIcu/c6VhrzsWqFyp6Ic4Z1kvdQ8jA3Xhf2', ''),
(24, '', '$2y$10$LQl6JhgRwY7Lk4ha5nc3Z.JivrC4ce2W0YKO8izTtWhcqFJjPOKnK', ''),
(25, '', '$2y$10$YGrRRJeNrBMtW7Cc5smGw.BDEzcx7cTY20lpGSveFkkbRoBHuyAMK', ''),
(26, '', '$2y$10$CcPYll/X0KxU7FueIkWM2eYOIXXDIGz28Woh2PmIXqiT7Mtojj0I6', ''),
(27, '', '$2y$10$x2cusYpVUUv4Q14t3Mxr7ubhtnzfoZGdb.Ecxb17/zI9ULTM8MD32', ''),
(28, '', '$2y$10$1B/bQpkUAUhOkFxZ.zOZXeczIHGbGjbBlS8Uuleaqgh5Wi6zo2UNy', ''),
(29, '', '$2y$10$mFl0sBDs4Wd0zds5XI8SNOJurxjOVAs5MEk3/geUnv4djnT6mUaT6', ''),
(30, '', '$2y$10$.d/CnKRc/.0hJ2PY1k7sPO9cB5zymssWGsXGEJTg3Htsp111eUjTa', ''),
(31, 'roma', '$2y$10$IjC4V/u/k1Die9vUbnnYcuLreY/yAn2LlUtfYZtU.ha6G2i/uqWNW', 'User'),
(32, 'roma', '$2y$10$H4z22/brC63bFH48d7blneCv9zOy9GpHMvgGnmgIsHsE1u8SHD/Va', 'User');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `documentation`
--
ALTER TABLE `documentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
