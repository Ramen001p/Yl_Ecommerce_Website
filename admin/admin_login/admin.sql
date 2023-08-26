-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 07:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_id`, `username`, `email`, `phone`, `password`) VALUES
(2, 'Bablu ', 'bablu@gmail.com', '9547708474', 'Bm1234@@'),
(3, 'Ramen', 'ramen@gmail.com', '9547708474', 'Ramen@2001'),
(13, 'moumita', 'momo@gmal.com', '9874563214', '1234**Mm'),
(14, 'tytyt', 't@gmail.com', '987456321', '1234**Bm'),
(15, 'gdgvv', '@gnmaifvsd', 'ddfgdg', '1234**Bm'),
(16, 'rty', 'w@gmail.com', 'sfwf', '1234**Xx'),
(17, 'tyuu', 'ggjhb@gmail.com', 'jhjh ', '1234**Xx'),
(18, 'ty', 'u@gmcail.com', '9547708474', '1234**Aa'),
(19, 'WW', 'w@gmail.com', '9874563210', '1234**Xx'),
(20, 'ee', 'e@gmail.com', '8745692130', '1234**Bm'),
(21, 'gsbsdv', 'A@gmail.com', '8796541230', '1234**Bm'),
(22, 'fhdiudv', 's@gmail.com', '789654230', '1234**Bm'),
(23, 'jdfdnv', 'B@gmail.com', '9874563214', 'svvv'),
(24, 'sfbfdbb', 'd@gmail.', 'sdfdff', 'dfdfdf'),
(25, 'dzzfd', 'd@gmail', '4578968574', 'ranueguwyu'),
(26, 'sgzfdf', 'sf@g', '895856f', 'ff'),
(27, 'rs', 's@gmail.com', '8521479630', 'Ramen@2001'),
(28, 'r', 'rf@gm', '54564564', 'dxzv'),
(29, 'xbg', 'xb', 'xb', 'xbg'),
(30, 'ghvh', 'ghhcgc', 'hgchfc', 'fttf'),
(31, 'fhcy', 'tryty', 'bhj', 'jhgj'),
(32, 'ytrhy', 'gjh', 'cxzc', 'cccc'),
(33, ' v vv', 'vv', 'vvvv', 'vvvv'),
(34, 'gggg', 'gggggggg', 'gggggg', 'gggg'),
(35, 'thd', 'hdd', 'fdhf', 'hfdhfd'),
(36, 'ss', 's@gg', 'gfdg', 'gdfgdg'),
(37, 'hhd', 'gfgggf', 'ggfg', 'fgfgf'),
(38, 'fff', 'ff', 'ff', 'ff'),
(39, 'dd', 'dd', 'dd', 'dd'),
(40, 'ddd', 'ddd', 'dddd', 'ddd'),
(41, 'aaa', 'aa', 'aaa', 'aa'),
(42, 'dwwwwwwwwwwwwwe', 'eeeeeeeee', 'eeeeeee', 'eeeeeeeeee'),
(43, 'dddddddq', 'ddddd', 'ddddddddd', 'dddddddddd'),
(44, 'ssssssssssss', 'ssssssssssssss', 'ssssssssss', 'qqqqqqqqqq'),
(45, 'q', 'q', 'q', 'q'),
(46, 'd', 'd', 'd', 'd'),
(47, 'i', 'u', 'u', 'u'),
(48, 'b', 'b', 'b', 'bb'),
(49, 'a', 'f', 'r', 'r'),
(50, 'm', 'm', 'm', 'm'),
(51, 'e', 'e', 'e', 'e'),
(52, 'w', 'w', 'w', 'w'),
(53, 'c', 'c', 'c', 'c'),
(54, 's', 's', 's', 's'),
(55, 't', 't', 't', 't'),
(56, 'g', 'g', 'g', 'g'),
(57, 'f', 'f', 'f', 'f'),
(58, 'j', 'j', 'j', 'j'),
(59, 'l', 'ghh@gmail.com', '9874562136', 'Bm1234**'),
(60, 'tyu', 'tyu@gmail.com', '7899999999', 'Bm1234**');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
