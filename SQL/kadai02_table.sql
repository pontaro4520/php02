-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 6 月 25 日 14:41
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai02_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai02_table`
--

CREATE TABLE `kadai02_table` (
  `id` int(12) NOT NULL,
  `material` varchar(64) NOT NULL,
  `form` varchar(64) NOT NULL,
  `thickness` int(12) NOT NULL,
  `size` int(12) NOT NULL,
  `price` int(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `kadai02_table`
--

INSERT INTO `kadai02_table` (`id`, `material`, `form`, `thickness`, `size`, `price`, `date`) VALUES
(1, 'st', 'sheetMetal', 1, 1, 1, '2024-06-23'),
(2, 'st', 'sheetMetal', 1, 1, 1, '2024-06-23'),
(3, 'st', 'sheetMetal', 2, 1, 1000, '2024-06-25'),
(4, 'st', 'sheetMetal', 2, 1, 123, '2024-06-25');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai02_table`
--
ALTER TABLE `kadai02_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai02_table`
--
ALTER TABLE `kadai02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
