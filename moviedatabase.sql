-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-19 10:10:55
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `moviedatabase`
--

-- --------------------------------------------------------

--
-- 資料表結構 `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `actors`
--

INSERT INTO `actors` (`id`, `name`, `gender`, `nationality_id`) VALUES
(1, 'Morgan Freeman', 'M', 1),
(2, 'Tim Robbinds', 'M', 1),
(3, 'Brad Pitt', 'M', 1),
(4, 'Matt Damon', 'M', 1),
(5, 'Marlon Brando', 'M', 1),
(6, 'Al Pacino', 'M', 1),
(7, 'Christian Bale', 'M', 2),
(8, 'Michael Cainem', 'M', 1),
(9, 'Henry Fonda', 'M', 1),
(10, 'Liam Neeson', 'M', 1),
(11, 'Leonardo DiCaprio', 'M', 1),
(12, 'Elijah Wood', 'M', 1),
(13, 'Mark Hamill', 'M', 1),
(14, 'Daisy Ridley', 'F', 1),
(15, 'John Travolta', 'M', 1),
(16, 'Bruce Willis', 'M', 1),
(17, 'Ton Holland', 'M', 1),
(18, 'Zendaya', 'F', 1),
(19, 'Tobey Maguire', 'M', 1),
(20, 'Kirsten Dunst', 'F', 1),
(21, 'Andrew Garfield', 'M', 1),
(22, 'Joseph Gordon-Levitt', 'M', 1),
(23, 'Keanu Reeves', 'M', 1),
(24, 'Robert Downey Jr', 'M', 1),
(25, 'Chris Evans', 'M', 1),
(26, 'Scarlett Johansson', 'F', 1),
(27, 'Jeremy Renner', 'M', 1),
(28, 'Chris Hemsworth', 'M', 1),
(29, 'Mark Ruffalo', 'M', 1),
(30, 'Tom Hiddleston', 'M', 1),
(31, 'Vin Diesel', 'M', 1),
(32, 'Michelle Rodriguez', 'F', 1),
(33, 'Jordana Brewster', 'F', 1),
(34, 'Tyrese Gibson', 'M', 1),
(35, 'Ludacris', 'M', 1),
(36, 'Jason Statham', 'M', 1),
(37, 'Tom Hanks', 'M', 1),
(38, 'Matthew McConaughey', 'M', 1),
(39, 'Miyu Irino', 'M', 3),
(40, 'Yuriko Ishida', 'F', 3),
(41, 'Tatsuya Gashuin', 'M', 3),
(42, 'Sumi Shimamoto', 'F', 3),
(43, 'Michael Clarke Duncan', 'M', 1),
(44, 'Kang-ho Song', 'M', 4),
(45, 'Jean Reno', 'M', 1),
(46, 'Tatsuya Nakadai', 'M', 3),
(47, 'Adrien Brody', 'M', 1),
(48, 'Edward Furlong', 'M', 1),
(49, 'Lea Thompson', 'F', 1),
(50, 'Kevin Spacey', 'M', 1),
(51, 'Janet Leigh', 'F', 1),
(52, 'Jeremy Irons', 'M', 2),
(53, 'Charles Chaplin', 'M', 2),
(54, 'Edward Norton', 'M', 1),
(55, 'Tsutomu Tatsumi', 'M', 3),
(56, 'Miles Teller', 'M', 1),
(57, 'Russell Crowe', 'M', 1),
(58, 'Francois Cluzet', 'M', 1),
(59, 'Humphrey Bogart', 'M', 1),
(60, 'Henry Fonda', 'M', 1),
(61, 'Rod Taylor', 'M', 1),
(62, 'Miki Imai', 'F', 3),
(63, 'Aki Asakura', 'F', 3),
(64, 'Ryunosuke Kamiki', 'M', 3),
(65, 'Mone Kamishiraishi', 'F', 3),
(66, 'Nana Mori', 'F', 3),
(67, 'Kenji Mizuhashi', 'M', 3),
(68, 'Saori Hayami', 'F', 3),
(69, 'Aoi Yuki', 'F', 3),
(70, 'Jean-Paul Rouve', 'M', 1),
(71, 'Mark Rylance', 'M', 2),
(72, 'Vincent Cassel', 'M', 1),
(73, 'John David Washington', 'M', 1),
(74, 'Trevor Lissauer', 'M', 1),
(75, 'John Goodman', 'M', 1),
(76, 'Ryan Gosling', 'M', 2),
(77, 'Errol Flynn', 'M', 2),
(78, 'Bing Crosby', 'M', 1),
(79, 'Ian McKellen', 'M', 1),
(80, 'Viggo Mortensen', 'M', 1),
(81, 'Orlando Bloom', 'M', 1),
(82, 'Sean Astin', 'M', 1),
(83, 'Bruce Allpress', 'M', 1),
(84, 'Jacob Batalon', 'M', 1),
(85, 'Benedict Cumberbatch', 'M', 1),
(86, 'Jamie Foxx', 'F', 1),
(87, 'Willem Dafoe', 'M', 1),
(88, 'Alfred Molina', 'F', 1),
(89, 'Tony Revolori', 'M', 1),
(90, 'Benedict Wong', 'M', 1),
(91, 'Laurence Fishburne', 'M', 1),
(92, 'Carrie-Anne Moss', 'M', 1),
(93, 'Hugo Weaving', 'M', 1),
(94, 'Joe Pantoliano', 'M', 1),
(95, 'William Sadler', 'M', 1),
(96, 'Bob Gunton', 'M', 1),
(97, 'Clancy Brown', 'M', 1),
(98, 'Gil Bellows', 'M', 1),
(99, 'Mark Rolston', 'M', 1),
(100, 'James Whitmore', 'M', 1),
(105, 'ssdfqwe', 'M', 1),
(106, 'Nana Mori', 'M', 3),
(107, 'asdqwe', 'M', 3),
(108, 'test_actor_4', 'F', 3),
(110, 'alcohol', 'M', 90);

-- --------------------------------------------------------

--
-- 資料表結構 `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `awardName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `awards`
--

INSERT INTO `awards` (`id`, `movie_id`, `awardName`) VALUES
(1, 1, 'bad Screenplay'),
(4, 4, 'Silver Ensemble Performance'),
(5, 5, 'Kanye Performance'),
(7, 7, 'Cole Art Direction'),
(8, 8, 'good Art Direction'),
(9, 9, 'Kanye Art Direction'),
(10, 10, 'Silver Actress'),
(11, 11, 'unreal Cinematography'),
(12, 12, 'unreal Performance'),
(13, 13, 'Best director'),
(14, 14, 'Drake Art Direction'),
(15, 15, 'good Screenplay'),
(16, 16, 'Drake Actress'),
(17, 17, 'Kanye Actress'),
(18, 18, 'bad director'),
(19, 19, 'unreal Screenplay'),
(20, 20, 'good Actress'),
(21, 21, 'unreal Ensemble Performance'),
(22, 22, 'unreal director'),
(23, 23, 'Drake Screenplay'),
(24, 24, 'Roger Ebert Ensemble Performance'),
(25, 25, 'Gold Sound'),
(26, 26, 'bad Art Direction'),
(27, 27, 'Cole Ensemble Performance'),
(28, 28, 'bad movie'),
(33, 33, 'Silver Screenplay'),
(34, 34, 'Gold movie'),
(35, 35, 'Roger Ebert director'),
(36, 36, 'Best movie'),
(37, 37, 'unreal Art Direction'),
(38, 38, 'soso Ensemble Performance'),
(39, 39, 'Best Performance'),
(40, 40, 'Gold Art Direction'),
(41, 41, 'Best Actress'),
(42, 42, 'Cole Actor'),
(43, 43, 'good director'),
(44, 44, 'bad Actor'),
(45, 45, 'Silver Actor'),
(46, 46, 'Best Art Direction'),
(47, 47, 'Gold Actress'),
(48, 48, 'Drake movie'),
(49, 49, 'Silver movie'),
(50, 50, 'Drake Actor'),
(51, 51, 'Gold Screenplay'),
(52, 52, 'unreal movie'),
(53, 53, 'soso Art Direction'),
(54, 54, 'Best Ensemble Performance'),
(55, 55, 'Kanye Actor'),
(56, 56, 'good Performance'),
(57, 57, 'soso Performance'),
(58, 58, 'Roger Ebert Performance'),
(59, 59, 'Drake Ensemble Performance'),
(60, 60, 'Cole Cinematography'),
(62, 62, 'Gold Performance'),
(63, 63, 'Gold Actor'),
(64, 64, 'Drake Cinematography'),
(65, 65, 'Best Screenplay'),
(66, 66, 'Silver Sound'),
(67, 67, 'soso Screenplay'),
(68, 68, 'Cole Actress'),
(69, 69, 'bad Sound'),
(70, 70, 'good movie'),
(71, 71, 'Drake Performance'),
(72, 72, 'Drake director'),
(73, 73, 'good Ensemble Performance'),
(74, 74, 'Roger Ebert Sound'),
(75, 75, 'Roger Ebert movie'),
(76, 76, 'Cole Screenplay'),
(77, 77, 'unreal Sound'),
(78, 78, 'unreal Actor'),
(79, 79, 'good Actor'),
(80, 80, 'Roger Ebert Art Direction'),
(81, 81, 'bad Performance'),
(82, 82, 'Drake Sound'),
(83, 83, 'good Cinematography'),
(84, 84, 'good Sound'),
(85, 85, 'unreal Actress'),
(86, 86, 'soso director'),
(87, 87, 'Roger Ebert Actress'),
(89, 89, 'Cole movie'),
(90, 90, 'bad Cinematography'),
(91, 91, 'Cole Sound'),
(92, 92, 'Roger Ebert Actor'),
(93, 93, 'Cole Performance'),
(94, 94, 'Silver Art Direction'),
(95, 95, 'Roger Ebert Screenplay'),
(96, 96, 'Kanye Sound'),
(97, 97, 'soso Actress'),
(98, 98, 'Gold director'),
(100, 100, 'Silver director'),
(101, 1, 'happy Ensemble Performance'),
(104, 4, 'lil Performance'),
(105, 5, 'fantasic Cinematography'),
(107, 7, 'jj Art Direction'),
(108, 8, 'fantasic director'),
(109, 9, 'naughty Actress'),
(110, 10, 'qq Cinematography'),
(111, 11, 'jj Cinematography'),
(112, 12, 'beautiful director'),
(113, 13, 'qq Sound'),
(114, 14, 'big Actor'),
(115, 15, 'sad Ensemble Performance'),
(116, 16, 'big Screenplay'),
(117, 17, 'lil Screenplay'),
(118, 18, 'rock Performance'),
(119, 19, 'rock Screenplay'),
(120, 20, 'fantasic Actor'),
(121, 21, 'jj director'),
(122, 22, 'qq Actress'),
(123, 23, 'fantasic Screenplay'),
(124, 24, 'naughty Cinematography'),
(125, 25, 'naughty Art Direction'),
(126, 26, 'big Ensemble Performance'),
(127, 27, 'happy Cinematography'),
(128, 28, 'sad Art Direction'),
(132, 32, 'qq Actor'),
(133, 33, 'qq Performance'),
(134, 34, 'big Cinematography'),
(135, 35, 'beautiful Ensemble Performance'),
(136, 36, 'lil Actress'),
(137, 37, 'rock Ensemble Performance'),
(138, 38, 'sad Cinematography'),
(139, 39, 'naughty Screenplay'),
(140, 40, 'fantasic Actress'),
(141, 41, 'naughty Performance'),
(142, 42, 'ugly director'),
(143, 43, 'happy Screenplay'),
(144, 44, 'ugly Actress'),
(145, 45, 'big Actress'),
(146, 46, 'ugly Cinematography'),
(147, 47, 'qq director'),
(148, 48, 'rock Actor'),
(149, 49, 'rock Cinematography'),
(150, 50, 'fantasic Ensemble Performance'),
(151, 51, 'naughty director'),
(152, 52, 'ugly Performance'),
(153, 53, 'beautiful Screenplay'),
(154, 54, 'lil movie'),
(155, 55, 'jj movie'),
(156, 56, 'happy Actress'),
(157, 57, 'rock Actress'),
(158, 58, 'beautiful Actor'),
(159, 59, 'naughty Actor'),
(160, 60, 'rock director'),
(162, 62, 'happy Performance'),
(163, 63, 'qq Art Direction'),
(164, 64, 'jj Ensemble Performance'),
(165, 65, 'fantasic Performance'),
(166, 66, 'jj Performance'),
(167, 67, 'qq movie'),
(168, 68, 'jj Actor'),
(169, 69, 'big movie'),
(170, 70, 'sad Screenplay'),
(171, 71, 'jj Sound'),
(172, 72, 'naughty Sound'),
(173, 73, 'beautiful Performance'),
(174, 74, 'lil director'),
(175, 75, 'happy Actor'),
(176, 76, 'sad movie'),
(177, 77, 'jj Actress'),
(178, 78, 'naughty movie'),
(179, 79, 'sad Sound'),
(180, 80, 'beautiful movie'),
(181, 81, 'ugly movie'),
(182, 82, 'big director'),
(183, 83, 'sad Actress'),
(184, 84, 'big Art Direction'),
(185, 85, 'lil Ensemble Performance'),
(186, 86, 'jj Screenplay'),
(187, 87, 'big Performance'),
(189, 89, 'rock Sound'),
(190, 90, 'naughty Ensemble Performance'),
(191, 91, 'beautiful Actress'),
(192, 92, 'big Sound'),
(193, 93, 'ugly Sound'),
(194, 94, 'beautiful Sound'),
(195, 95, 'beautiful Cinematography'),
(196, 96, 'ugly Screenplay'),
(197, 97, 'rock movie'),
(198, 98, 'sad Actor'),
(201, 100, 'damn big audio'),
(205, 6, 'Silver Cinematography'),
(206, 6, 'test award 5');

-- --------------------------------------------------------

--
-- 資料表結構 `castings`
--

CREATE TABLE `castings` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `castings`
--

INSERT INTO `castings` (`id`, `movie_id`, `actor_id`) VALUES
(2, 1, 2),
(7, 4, 5),
(8, 5, 6),
(9, 6, 7),
(10, 7, 7),
(11, 8, 9),
(12, 9, 10),
(13, 10, 10),
(14, 11, 3),
(15, 11, 11),
(16, 12, 11),
(17, 13, 12),
(18, 14, 12),
(19, 15, 12),
(20, 16, 13),
(21, 17, 13),
(22, 18, 14),
(23, 19, 14),
(24, 20, 15),
(25, 20, 16),
(26, 21, 16),
(27, 22, 16),
(28, 23, 16),
(29, 24, 16),
(30, 25, 16),
(31, 26, 17),
(32, 26, 18),
(33, 27, 17),
(34, 27, 18),
(35, 28, 17),
(36, 28, 18),
(43, 32, 21),
(44, 33, 21),
(45, 34, 11),
(46, 34, 22),
(47, 35, 23),
(48, 36, 23),
(49, 37, 23),
(50, 38, 23),
(51, 51, 37),
(52, 52, 13),
(53, 53, 38),
(54, 54, 39),
(55, 55, 40),
(56, 56, 41),
(57, 57, 42),
(58, 58, 43),
(59, 59, 44),
(60, 60, 45),
(62, 62, 47),
(63, 63, 48),
(64, 64, 49),
(65, 65, 50),
(66, 66, 51),
(67, 67, 52),
(68, 68, 53),
(69, 69, 54),
(70, 70, 55),
(71, 71, 56),
(72, 72, 57),
(73, 73, 53),
(74, 74, 11),
(75, 75, 58),
(76, 76, 7),
(77, 77, 59),
(78, 78, 60),
(79, 79, 37),
(80, 80, 37),
(81, 81, 61),
(82, 82, 40),
(83, 83, 62),
(84, 84, 63),
(85, 85, 64),
(86, 85, 65),
(87, 86, 39),
(88, 87, 66),
(90, 89, 39),
(91, 89, 68),
(92, 89, 69),
(93, 85, 69),
(94, 90, 51),
(95, 91, 70),
(96, 93, 71),
(97, 92, 72),
(98, 94, 11),
(99, 95, 73),
(100, 96, 74),
(101, 39, 23),
(102, 40, 23),
(103, 41, 23),
(104, 42, 24),
(105, 42, 25),
(106, 42, 26),
(107, 42, 27),
(108, 42, 28),
(109, 42, 29),
(110, 43, 24),
(111, 43, 25),
(112, 43, 26),
(113, 43, 27),
(114, 43, 28),
(115, 43, 29),
(116, 44, 24),
(117, 44, 25),
(118, 44, 26),
(119, 45, 25),
(120, 46, 25),
(121, 47, 31),
(122, 47, 32),
(123, 47, 33),
(124, 47, 34),
(125, 47, 35),
(126, 48, 31),
(127, 48, 32),
(128, 48, 33),
(129, 48, 34),
(130, 48, 35),
(131, 49, 36),
(132, 50, 36),
(133, 7, 8),
(134, 97, 75),
(135, 98, 76),
(137, 100, 78),
(138, 14, 79),
(139, 14, 80),
(140, 14, 81),
(141, 14, 82),
(142, 14, 83),
(143, 26, 84),
(144, 26, 85),
(145, 26, 86),
(146, 26, 87),
(147, 26, 88),
(148, 26, 89),
(149, 26, 90),
(150, 35, 91),
(151, 35, 92),
(152, 35, 93),
(153, 35, 94),
(154, 1, 95),
(155, 1, 96),
(156, 1, 97),
(157, 1, 98),
(158, 1, 99),
(159, 1, 100),
(162, 8, 110),
(164, 8, 107),
(165, 1, 108);

-- --------------------------------------------------------

--
-- 資料表結構 `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'USA'),
(2, 'UK'),
(3, 'Japan'),
(4, 'South Korea'),
(5, 'Australia'),
(6, 'Bahamas'),
(7, 'Bangladesh'),
(8, 'Belgium'),
(9, 'Belize'),
(10, 'Bhutan'),
(11, 'Cabo Verde'),
(12, 'Burkina Faso'),
(13, 'Cameroon'),
(14, 'China'),
(15, 'Chad'),
(16, 'Central African Republic'),
(17, 'Cuba'),
(18, 'Cyprus'),
(19, 'Dominica'),
(20, 'Comoros'),
(21, 'Costa Rica'),
(22, 'Djibouti'),
(23, 'Egypt'),
(24, 'Dominican Republic'),
(25, 'Equatorial Guinea'),
(26, 'Denmark'),
(27, 'Eritrea'),
(28, 'France'),
(29, 'Estonia'),
(30, 'Gabon'),
(31, 'Gambia'),
(32, 'Georgia'),
(33, 'Ghana'),
(34, 'Germany'),
(35, 'Greece'),
(36, 'Guinea-Bissau'),
(37, 'Guatemala'),
(38, 'Haiti'),
(39, 'Honduras'),
(40, 'Holy See'),
(41, 'India'),
(42, 'Indonesia'),
(43, 'Iran'),
(44, 'Ireland'),
(45, 'Iraq'),
(46, 'Jamaica'),
(47, 'Kazakhstan'),
(48, 'Jordan'),
(49, 'Kiribati'),
(50, 'Kenya'),
(51, 'Kuwait'),
(52, 'Kyrgyzstan'),
(53, 'Laos'),
(54, 'Latvia'),
(55, 'Lebanon'),
(56, 'Libya'),
(57, 'Liechtenstein'),
(58, 'Liberia'),
(59, 'Malawi'),
(60, 'Lithuania'),
(61, 'Malaysia'),
(62, 'Marshall Islands'),
(63, 'Maldives'),
(64, 'Mauritius'),
(65, 'Mauritania'),
(66, 'Mexico'),
(67, 'Micronesia'),
(68, 'Mongolia'),
(69, 'Monaco'),
(70, 'Namibia'),
(71, 'Nepal'),
(72, 'New Zealand'),
(73, 'North Korea'),
(74, 'Nicaragua'),
(75, 'Norway'),
(76, 'North Macedonia'),
(77, 'Oman'),
(78, 'Pakistan'),
(79, 'Panama'),
(80, 'Palestine State'),
(81, 'Poland'),
(82, 'Paraguay'),
(83, 'Peru'),
(84, 'Philippines'),
(85, 'Venezuela'),
(86, 'Papua New Guinea'),
(87, 'Romania'),
(88, 'Qatar'),
(89, 'Portugal'),
(90, 'Russia'),
(91, 'Saint Vincent and the Grenadines'),
(92, 'Saint Kitts and Nevis'),
(93, 'Samoa'),
(94, 'Tajikistan'),
(95, 'Thailand'),
(96, 'Tanzania'),
(97, 'Trinidad and Tobago'),
(98, 'Zimbabwe'),
(99, 'Tunisia'),
(100, 'Turkey');

-- --------------------------------------------------------

--
-- 資料表結構 `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `studio_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `directors`
--

INSERT INTO `directors` (`id`, `name`, `gender`, `studio_id`) VALUES
(1, 'Frank Darabont', 'M', 1),
(3, 'Francis Ford Coppola', 'M', 3),
(4, 'Clint Eastwood', 'M', 4),
(5, 'Christopher Nolan', 'M', 3),
(6, 'Sidney Lumet', 'M', 5),
(7, 'Steven Spielberg', 'M', 6),
(8, 'Jaume Collet-Serra', 'M', 7),
(9, 'Quentin Tarantino', 'M', 7),
(10, 'James Cameron', 'M', 8),
(11, 'Peter Jackson', 'M', 9),
(12, 'Irvin Kershner', 'M', 10),
(13, 'George Lucas', 'M', 10),
(14, 'Rian Johnson', 'M', 10),
(15, 'John McTiernan', 'M', 8),
(16, 'Len Wiseman', 'M', 8),
(17, 'John Moore', 'M', 8),
(18, 'Jon Watts', 'M', 11),
(20, 'Marc Webb', 'M', 11),
(21, 'Lana Wachowski', 'F', 3),
(22, 'Chad Stahelski', 'M', 12),
(23, 'Joss Whedon', 'M', 11),
(24, 'Anthony Russo', 'M', 11),
(25, 'Joe Johnson', 'M', 11),
(26, 'Justin Lin', 'M', 13),
(27, 'F. Gary Gray', 'M', 6),
(28, 'Louis Leterrier', 'M', 14),
(29, 'Bong Joon Ho', 'M', 16),
(30, 'Hayao Miyazaki', 'M', 15),
(31, 'Luc Besson', 'M', 17),
(32, 'Masaki Kobayashi', 'M', 18),
(33, 'Roman Polanski', 'M', 19),
(34, 'Robert Zemeckis', 'M', 20),
(35, 'Bryan Singer', 'M', 21),
(36, 'Alfred Hitchcock', 'M', 22),
(37, 'Roger Allers', 'M', 23),
(38, 'Charles Chaplin', 'M', 24),
(39, 'Tony Kaye', 'M', 25),
(40, 'Isao Takahata', 'M', 26),
(41, 'Damien Chazelle', 'M', 27),
(42, 'Ridley Scott', 'M', 28),
(43, 'Martin Scorsese', 'M', 3),
(44, 'Olivier Nakache', 'M', 32),
(45, 'Michael Curtiz', 'M', 3),
(46, 'Sergio Leone', 'M', 4),
(47, 'Makoto Shinkai', 'M', 32),
(48, 'Naoko Yamada', 'F', 30),
(49, 'John Frankenheimer', 'M', 31),
(50, 'Jon Favreau', 'M', 11),
(51, 'Shane Black', 'M', 11),
(52, 'Louis Leterrier', 'M', 11),
(53, 'Kenneth Branagh', 'M', 11),
(55, 'Taika Waititi', 'M', 11),
(56, 'Joe Russo', 'M', 11),
(57, 'James Gunn', 'M', 11),
(58, 'Peyton Reed', 'M', 11),
(59, 'Scott Derrickson', 'M', 11),
(60, 'Ryan Coogler', 'M', 11),
(61, 'Anna Boden', 'F', 11),
(62, 'Ryan Fleck', 'M', 11),
(63, 'Nia DaCosta', 'F', 11),
(64, 'Cate Shortland', 'F', 11),
(65, 'Destin Daniel Cretton', 'M', 11),
(66, 'Zhao', 'F', 11),
(67, 'Denis Villeneuve', 'M', 3),
(68, 'Jeremiah S. Chechik', 'M', 3),
(69, 'Jon Favreau', 'M', 3),
(70, 'Matt Reeves', 'M', 3),
(71, 'Reinaldo Marcus Green', 'M', 3),
(72, 'Chris Columbus', 'M', 3),
(73, 'Michael Dowse', 'M', 3),
(74, 'Robert Zemeckis', 'M', 3),
(75, 'David Yates', 'M', 3),
(76, 'Michael Patrick King', 'M', 3),
(77, 'James Gunn', 'M', 3),
(78, 'Matthew Vaughn', 'M', 3),
(79, 'Seth Gordon', 'M', 3),
(80, 'John McNaughton', 'M', 3),
(81, 'Mike Newell', 'M', 3),
(82, 'Todd Phillips', 'M', 3),
(83, 'F. Gary Gray', 'M', 3),
(84, 'Alan Taylor', 'M', 3),
(85, 'Harold Ramis', 'M', 3),
(86, 'Quentin Tarantino', 'M', 3),
(87, 'Zack Snyder', 'M', 3),
(88, 'Joe Dante', 'M', 3),
(89, 'Neil Jordan', 'M', 3),
(90, 'John Lee Hancock', 'M', 3),
(91, 'Denis Villeneuve', 'M', 3),
(92, 'Ridley Scott', 'M', 6),
(93, 'Paul Thomas Anderson', 'M', 6),
(94, 'Steven Strait', 'M', 6),
(95, 'Dominique Tipper', 'M', 6),
(96, 'Wes Chatham', 'M', 6),
(97, 'Shohreh Aghdashloo', 'M', 6),
(98, 'Richard Curtis', 'M', 6),
(99, 'Cary Joji Fukunaga', 'M', 6),
(100, 'Michael C. Hall', 'M', 6),
(101, 'Ron Howard', 'M', 6),
(102, 'testDirector', 'M', 19);

-- --------------------------------------------------------

--
-- 資料表結構 `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `director_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `age_limit` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `release_date` int(11) NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `movies`
--

INSERT INTO `movies` (`id`, `name`, `type`, `director_id`, `country_id`, `age_limit`, `budget`, `release_date`, `length`) VALUES
(1, 'The Shawshank Redemption', 'Drama', 1, 1, 13, 25000000, 1994, 142),
(4, 'The Godfather', 'Crime', 3, 1, 17, 6000000, 1972, 175),
(5, 'The Godfather: Part II', 'Crime', 3, 1, 17, 6000000, 1974, 202),
(6, 'The Dark Knight', 'Adventure', 1, 3, 13, 185000000, 2008, 152),
(7, 'Batman Begins', 'Adventure', 1, 3, 13, 150000000, 2005, 140),
(8, '12 Angry Men', 'Crime', 6, 1, 6, 350000, 1957, 96),
(9, 'Schindler\'s List', 'Biography', 7, 1, 17, 22000000, 1994, 195),
(10, 'The Commuter', 'Action', 8, 1, 13, 30000000, 2018, 104),
(11, 'Once Upon a Time in... Hollywood', 'Comedy', 9, 1, 13, 90000000, 2019, 221),
(12, 'Titanic', 'Drama', 10, 1, 13, 200000000, 1997, 194),
(13, 'The Lord of the Rings: The Return of the King', 'Action', 11, 1, 13, 94000000, 2003, 201),
(14, 'The Lord of the Rings: The Two Towers', 'Action', 11, 1, 13, 94000000, 2002, 179),
(15, 'The Lord of the Rings: The Fellowship of the Ring', 'Action', 11, 1, 13, 93000000, 2002, 178),
(16, 'Star Wars: Episode V - The Empire Strikes Back', 'Action', 12, 1, 6, 18000000, 2008, 124),
(17, 'Star Wars', 'Action', 12, 1, 6, 11000000, 1977, 121),
(18, 'Star Wars: Episode VIII - The Last Jedi', 'Action', 12, 1, 6, 317000000, 2017, 152),
(19, 'Star Wars: Episode VII - The Force Awakens', 'Action', 12, 1, 6, 245000000, 2015, 138),
(20, 'Pulp Fiction', 'Crime', 9, 1, 17, 8000000, 1994, 154),
(21, 'Die Hard', 'Action', 15, 1, 17, 28000000, 1988, 132),
(22, 'Die Hard 2', 'Action', 15, 1, 17, 70000000, 1990, 134),
(23, 'Die Hard: With a Vengeance', 'Action', 15, 1, 17, 90000000, 1995, 138),
(24, 'Live Free or Die Hard', 'Action', 16, 1, 17, 110000000, 2007, 138),
(25, 'A Good Day to Die Hard', 'Action', 17, 1, 17, 92000000, 2013, 98),
(26, 'Spider-Man: No Way Home', 'Action', 18, 1, 13, 200000000, 2021, 148),
(27, 'Spider-Man: Far from Home', 'Action', 18, 1, 13, 160000000, 2019, 129),
(28, 'Spider-Man: Homecoming', 'Action', 18, 1, 13, 175000000, 2017, 133),
(32, 'The Amazing Spider-Man', 'Action', 20, 1, 13, 230000000, 2012, 136),
(33, 'The Amazing Spider-Man 2', 'Action', 21, 1, 13, 200000000, 2014, 142),
(34, 'Inception', 'Action', 5, 1, 13, 160000000, 2010, 148),
(35, 'The Matrix', 'Action', 21, 1, 13, 63000000, 1999, 136),
(36, 'The Matrix Reloaded', 'Action', 21, 1, 13, 150000000, 2003, 138),
(37, 'The Matrix Revolutions', 'Action', 21, 1, 13, 150000000, 2003, 129),
(38, 'The Matrix Resurrections', 'Action', 21, 1, 13, 16000000, 2021, 148),
(39, 'John Wick', 'Action', 22, 1, 17, 20000000, 2014, 101),
(40, 'John Wick: Chapter 2', 'Action', 22, 1, 17, 40000000, 2017, 112),
(41, 'John Wick: Chapter 3 - Parabellum', 'Action', 22, 1, 17, 75000000, 2019, 130),
(42, 'The Avengers', 'Action', 23, 1, 13, 220000000, 2012, 143),
(43, 'Avengers: Age of Ultron', 'Action', 23, 1, 13, 250000000, 2015, 141),
(44, 'Captain America: Civil War', 'Action', 24, 1, 13, 250000000, 2016, 147),
(45, 'Captain America: The Winter Soldier', 'Action', 24, 1, 13, 170000000, 2014, 136),
(46, 'Captain America: The First Avenger', 'Action', 25, 1, 13, 140000000, 2011, 124),
(47, 'F9', 'Action', 26, 1, 6, 200000000, 2021, 143),
(48, 'The Fate of the Furious', 'Action', 27, 1, 6, 250000000, 2017, 136),
(49, 'The Transporter', 'Action', 28, 1, 13, 21000000, 2002, 92),
(50, 'Transporter 2', 'Action', 28, 1, 13, 32000000, 2005, 87),
(51, 'Saving Private Ryan', 'War', 7, 1, 0, 70000000, 1998, 169),
(52, 'Star Wars', 'Action', 13, 1, 6, 11000000, 1977, 121),
(53, 'Interstellar', 'Adventure', 5, 1, 13, 165000000, 2014, 169),
(54, 'Sen to Chihiro no kamikakushi', 'Adventure', 30, 3, 0, 19000000, 2001, 125),
(55, 'Mononoke-hime', 'Adventure', 30, 3, 13, 2147483647, 1997, 134),
(56, 'Hauru no ugoku shiro', 'Adventure', 30, 3, 0, 24000000, 2004, 119),
(57, 'Tonari no Totoro', 'Fantasy', 30, 3, 0, 3700000, 1988, 86),
(58, 'The Green Mile', 'Fantasy', 1, 1, 17, 60000000, 1999, 198),
(59, 'Gisaengchung', 'Comedy', 29, 4, 13, 114000000, 2019, 132),
(60, 'Leon', 'Action', 31, 1, 13, 115000000, 1994, 110),
(62, 'The Pianist', 'War', 33, 2, 17, 35000000, 2002, 150),
(63, 'Terminator 2: Judgment Day', 'Action', 10, 1, 13, 102000000, 1991, 137),
(64, 'Back to the Future', 'Comedy', 34, 1, 6, 19000000, 1985, 116),
(65, 'The Usual Suspects', 'Crime', 35, 1, 17, 6000000, 1995, 106),
(66, 'Psycho', 'Horror', 36, 1, 17, 806947, 1960, 109),
(67, 'The Lion King', 'Adventure', 37, 1, 0, 45000000, 1994, 88),
(68, 'Modern Times', 'Drama', 38, 1, 0, 1500000, 1936, 87),
(69, 'American History X', 'Drama', 39, 1, 17, 20000000, 1998, 119),
(70, 'Hotaru no haka', 'Drama', 40, 3, 0, 3700000, 1988, 89),
(71, 'Whiplash', 'Drama', 41, 1, 17, 3300000, 2014, 106),
(72, 'Gladiator', 'Action', 42, 1, 13, 103000000, 2000, 155),
(73, 'City Lights', 'Comedy', 38, 1, 0, 1500000, 1931, 87),
(74, 'The Departed', 'Action', 43, 1, 17, 90000000, 2006, 151),
(75, 'Intouchables', 'Comedy', 44, 1, 17, 9500000, 2011, 112),
(76, 'The Prestige', 'Drama', 5, 2, 13, 40000000, 2006, 130),
(77, 'Casablanca', 'War', 45, 1, 13, 950000, 1942, 102),
(78, 'C\'era una volta il West', 'Adventure', 46, 1, 13, 5000000, 1968, 165),
(79, 'Cast Away', 'Drama', 34, 1, 13, 90000000, 2000, 143),
(80, 'Forrest Gump', 'Drama', 34, 1, 13, 55000000, 1994, 142),
(81, 'The Birds', 'Drama', 36, 1, 13, 2500000, 1963, 119),
(82, 'Heisei tanuki gassen ponpoko', 'Drama', 40, 3, 6, 372405, 1994, 119),
(83, 'Omohide poro poro', 'Drama', 40, 3, 6, 453243, 1991, 118),
(84, 'Kaguya-hime no monogatari', 'Drama', 40, 3, 13, 2147483647, 2013, 137),
(85, 'Kimi no na wa', 'Fantasy', 47, 3, 0, 370000000, 2016, 106),
(86, 'Koto no ha no niwa', 'Drama', 47, 3, 13, 418256, 2013, 46),
(87, 'Tenki no ko', 'Fantasy', 47, 3, 0, 11100000, 2019, 112),
(89, 'Koe no katachi', 'Drama', 48, 3, 0, 644391, 2016, 130),
(90, 'The Manchurian Candidate', 'Drama', 31, 1, 13, 2200000, 1962, 126),
(91, 'Le sens de la fete', 'Drama', 44, 1, 0, 14850000, 2017, 117),
(92, 'Hors normes', 'Drama', 44, 1, 6, 19387514, 2019, 114),
(93, 'Dunkirk', 'Action', 5, 2, 13, 100000000, 2017, 106),
(94, 'Inception', 'Action', 5, 1, 13, 160000000, 2010, 148),
(95, 'Tenet', 'Sci-Fi', 5, 1, 13, 205000000, 2020, 150),
(96, 'La La Land', 'Drama', 41, 1, 0, 30000000, 2016, 128),
(97, '10 Cloverfield Lane', 'Drama', 41, 1, 13, 15000000, 2016, 103),
(98, 'First Man', 'Drama', 41, 1, 0, 59000000, 2018, 141),
(100, 'White Christmas', 'Comedy', 45, 1, 0, 928298, 1954, 120),
(104, 'testMovie', 'Horror', 66, 19, 0, 20000000, 2000, 200),
(105, 'test_movie_5', 'Action', 47, 1, 0, 20000000, 2021, 100);

-- --------------------------------------------------------

--
-- 資料表結構 `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `rate` float NOT NULL,
  `reviewerName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `reviews`
--

INSERT INTO `reviews` (`id`, `movie_id`, `rate`, `reviewerName`) VALUES
(1, 1, 9.2, 'Jose Caro'),
(4, 4, 8.4, 'Palmer Flores'),
(5, 5, 7.7, 'Jose Quintero'),
(6, 6, 5.7, 'Alejandro Hernandez'),
(7, 7, 3.2, 'Jose Brown'),
(8, 8, 2.4, 'Palmer Berkeley'),
(9, 9, 8.4, 'Yoyo Joeman'),
(10, 10, 7.2, 'Alejandro Toyz'),
(11, 11, 7.3, 'Kenail Hernandez'),
(12, 12, 2.8, 'Jose Jimenez'),
(13, 13, 5.8, 'Jose Hernandez'),
(14, 14, 3.5, 'Arnoldo Jimenez'),
(15, 15, 4.3, 'Alejandro Black'),
(16, 16, 5.4, 'Jason Hernandez'),
(17, 17, 4.9, 'Flores Ken'),
(18, 18, 3.2, 'Palmer Kemail'),
(19, 19, 5.3, 'Joe White'),
(20, 20, 9.7, 'James Data'),
(21, 21, 4.9, 'Chetanbhai Jojo'),
(22, 22, 4.6, 'Palmer Ubuntu'),
(23, 23, 7.4, 'Alejandro Harrad'),
(24, 24, 8.2, 'James Quintero'),
(25, 25, 8.6, 'Alejandro Coco'),
(26, 26, 3.8, 'patel Jojo'),
(27, 27, 8.2, 'Carias Jojo'),
(28, 28, 2.4, 'Jason Quintero'),
(32, 32, 9.8, 'Kenail Curry'),
(33, 33, 3.8, 'James Berkeley'),
(34, 34, 1.5, 'Castillo Caro'),
(35, 35, 9.4, 'Alejandro Brown'),
(36, 36, 2.7, 'Castillo Palm'),
(37, 37, 3.9, 'Juarez Quintero'),
(38, 38, 1.7, 'Palmer Jojo'),
(39, 39, 8.6, 'Arnoldo Brown'),
(40, 40, 5.8, 'Jason Brown'),
(41, 41, 6.9, 'James Mark'),
(42, 42, 1.7, 'Yoyo Rosales'),
(43, 43, 4.8, 'Palmer Johnason'),
(44, 44, 6.3, 'Jason Rosales'),
(45, 45, 2.4, 'Palmer Rosales'),
(46, 46, 9.8, 'Kenail Ken'),
(47, 47, 2.7, 'Joe Berkeley'),
(48, 48, 7.3, 'patel Yulan'),
(49, 49, 6.1, 'patel Corro'),
(50, 50, 5.3, 'Yoyo Jimenez'),
(51, 51, 4.6, 'Alejandro Yulan'),
(52, 52, 2.2, 'Yoyo Ken'),
(53, 53, 7.9, 'Palmer Brown'),
(54, 54, 8.7, 'Castillo Jojo'),
(55, 55, 3.7, 'Yoyo Berkeley'),
(56, 56, 3.1, 'Kenail Cargo'),
(57, 57, 7.7, 'James Caro'),
(58, 58, 2.5, 'Yoyo Eugene'),
(59, 59, 9.9, 'Joe Brown'),
(60, 60, 3.3, 'Kenail Caro'),
(62, 62, 9.9, 'Joe Jimenez'),
(63, 63, 5.7, 'Flores Jimenez'),
(64, 64, 7.9, 'Jason Yulan'),
(65, 65, 6.5, 'Castillo Truck'),
(66, 66, 6.2, 'Arnoldo Summon'),
(67, 67, 3.1, 'James Flores'),
(68, 68, 7.5, 'Jose Eugene'),
(69, 69, 5.7, 'James Rosales'),
(70, 70, 8.5, 'Joe Caro'),
(71, 71, 5.7, 'Yoyo Yulan'),
(72, 72, 8.1, 'Chetanbhai Brown'),
(73, 73, 3.7, 'Palmer John'),
(74, 74, 8.6, 'Castillo Quintero'),
(75, 75, 6.8, 'Castillo Corro'),
(76, 76, 3.7, 'Kenail Quintero'),
(77, 77, 4.1, 'Flores Jojo'),
(78, 78, 7.4, 'James Jojo'),
(79, 79, 3.6, 'Juarez Jojo'),
(80, 80, 3.2, 'Juarez Berkeley'),
(81, 81, 7.9, 'Yoyo Brown'),
(82, 82, 8.3, 'Alejandro Corro'),
(83, 83, 4.1, 'Palmer Bhadreshkumar'),
(84, 84, 8.6, 'Jason Flores'),
(85, 85, 3.2, 'Castillo Berkeley'),
(86, 86, 3.3, 'Jose Loser'),
(87, 87, 8.6, 'patel Berkeley'),
(89, 89, 2.1, 'Jose Ken'),
(90, 90, 2.9, 'Yoyo Caro'),
(91, 91, 6.6, 'Arnoldo Rosales'),
(92, 92, 3.9, 'Yoyo Flores'),
(93, 93, 6.8, 'Arnoldo Corro'),
(94, 94, 9.4, 'Jose Flores'),
(95, 95, 4.4, 'patel Rosales'),
(96, 96, 5.8, 'Alejandro Jimenez'),
(97, 97, 4.2, 'Jose John'),
(98, 98, 1.1, 'Juarez John'),
(100, 100, 3.9, 'patel John'),
(101, 1, 2.1, 'Lazy Alex'),
(104, 4, 3.4, 'Hurry Alex'),
(105, 5, 7.9, 'Ken Root'),
(106, 6, 3.3, 'Steven Alice'),
(107, 7, 4.5, 'Steven Geoge'),
(108, 8, 2, 'Cohile Robert'),
(109, 9, 2.9, 'Fox Banny'),
(110, 10, 1.1, 'Fox Boy'),
(111, 11, 7.5, 'Lazy Carl'),
(112, 12, 9.4, 'Passy Banny'),
(113, 13, 4.4, 'Passy Alice'),
(114, 14, 0, 'Seven Alex'),
(115, 15, 8.9, 'Lazy Amy'),
(116, 16, 6.9, 'Seven Banny'),
(117, 17, 9.1, 'Steven Hower'),
(118, 18, 1.4, 'Cohile Zoo'),
(119, 19, 6.9, 'Kemail Alice'),
(120, 20, 3.8, 'Marry Alice'),
(121, 21, 0.2, 'Ken Robert'),
(122, 22, 2.3, 'Cohile Robert'),
(123, 23, 3.1, 'Kemail Fooly'),
(124, 24, 5.3, 'Passy Geoge'),
(125, 25, 8.9, 'Fox Robert'),
(126, 26, 5.9, 'Cohile Geoge'),
(127, 27, 2, 'Hurry Amy'),
(128, 28, 6.9, 'Jeff Robert'),
(132, 32, 7.3, 'Steven Zoe'),
(133, 33, 3.6, 'Keven Alex'),
(134, 34, 7.3, 'Jeff Geoge'),
(135, 35, 1.1, 'Jeff Geoge'),
(136, 36, 4.8, 'Marry Zoo'),
(137, 37, 7.7, 'Steven Amy'),
(138, 38, 4.3, 'Lazy Carl'),
(139, 39, 1.1, 'Fox Alice'),
(140, 40, 9.9, 'Hart Alice'),
(141, 41, 4.3, 'Fox Banny'),
(142, 42, 7.3, 'Passy Carl'),
(143, 43, 5.8, 'Steven Fooly'),
(144, 44, 3.6, 'Hurry Robert'),
(145, 45, 2.1, 'Steven Geoge'),
(146, 46, 2.7, 'Passy Hower'),
(147, 47, 7.9, 'Kemail Boy'),
(148, 48, 4.4, 'Hurry Boots'),
(149, 49, 2, 'Seven Root'),
(150, 50, 5, 'Ducky Alice'),
(151, 51, 0.5, 'Kemail Alice'),
(152, 52, 4.2, 'Jeff Boots'),
(153, 53, 4.9, 'Keven Root'),
(154, 54, 4.8, 'Cohile Boy'),
(155, 55, 0.4, 'Kemail Alex'),
(156, 56, 3.7, 'Passy Alice'),
(157, 57, 2.5, 'Cohile Carl'),
(158, 58, 7.9, 'Seven Amy'),
(159, 59, 0.6, 'Passy Alex'),
(160, 60, 8.3, 'Jeff Zoe'),
(162, 62, 2.7, 'Cohile Boots'),
(163, 63, 5.3, 'Ken Alice'),
(164, 64, 6.3, 'Fox Alice'),
(165, 65, 9.1, 'Hurry Root'),
(166, 66, 5.4, 'Ducky Root'),
(167, 67, 4.3, 'Keven Boy'),
(168, 68, 5.5, 'Passy Geoge'),
(169, 69, 7.1, 'Fox Alex'),
(170, 70, 8.1, 'Steven Robert'),
(171, 71, 7.5, 'Keven Boots'),
(172, 72, 3.5, 'Ken Fooly'),
(173, 73, 5.2, 'Hurry Alex'),
(174, 74, 7.3, 'Steven Zoe'),
(175, 75, 1.5, 'Steven Geoge'),
(176, 76, 0.9, 'Cohile Root'),
(177, 77, 8.9, 'Keven Boots'),
(178, 78, 3.3, 'Cohile Root'),
(179, 79, 2.1, 'Seven Boots'),
(180, 80, 4.6, 'Lazy Banny'),
(181, 81, 8.5, 'Fox Alex'),
(182, 82, 5.1, 'Cohile Geoge'),
(183, 83, 2.4, 'Seven Geoge'),
(184, 84, 6.3, 'Lazy Amy'),
(185, 85, 1.4, 'Cohile Alex'),
(186, 86, 2.8, 'Seven Geoge'),
(187, 87, 8.8, 'Jeff Amy'),
(189, 89, 2.5, 'Ducky Amy'),
(190, 90, 2.4, 'Ducky Boots'),
(191, 91, 9.7, 'Lazy Zoo'),
(192, 92, 5.1, 'Passy Alice'),
(193, 93, 3.7, 'Seven Carl'),
(194, 94, 2.3, 'Hurry Robert'),
(195, 95, 5.1, 'Kemail Amy'),
(196, 96, 6.8, 'Kemail Geoge'),
(197, 97, 5.9, 'Ducky Zoe'),
(198, 98, 5.3, 'Hart Boots'),
(200, 100, 0.6, 'Seven Robert'),
(201, 20, 8.3, 'testMan'),
(202, 22, 2.3, 'testMan'),
(203, 17, 6.3, 'testMan'),
(204, 73, 7.3, 'testMan');

-- --------------------------------------------------------

--
-- 資料表結構 `studios`
--

CREATE TABLE `studios` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `studios`
--

INSERT INTO `studios` (`id`, `name`) VALUES
(1, 'Castle Rock Entertainment'),
(3, 'Warner Bros'),
(4, 'Paramount Pictures'),
(5, 'Orion'),
(6, 'Universal Pictures'),
(7, 'StudioCanal'),
(8, 'Twentieth Century Fox'),
(9, 'New Line Cinema'),
(10, 'Lucasfilm'),
(11, 'Marvel'),
(12, 'Calvary Cemetery'),
(13, 'One Race Films'),
(14, 'EuropaCorp'),
(15, 'Tokuma Shoten'),
(16, 'CJ Entertainment'),
(17, 'Gaumont'),
(18, 'Shochiku'),
(19, 'R.P. Productions'),
(20, 'Universal Pictures'),
(21, 'Blue Parrot'),
(22, 'Shamley Productions'),
(23, 'Walt Disney Pictures'),
(24, 'Charles Chaplin Productions'),
(25, 'Savoy Pictures'),
(26, 'Shinchosha Company'),
(27, 'Bold Films'),
(28, 'Dreamworks Pictures'),
(29, 'Quad'),
(30, 'ABC Animation'),
(31, 'M.C. Productions'),
(32, 'Amuse'),
(33, 'GAINAX'),
(34, 'GoHands 	'),
(35, 'GONZO'),
(36, 'Graphinica'),
(37, 'Hoods Entertainment'),
(38, 'J.C.STAFF'),
(39, 'Kinema Citrus'),
(40, 'Lerche'),
(41, 'MADHOUSE'),
(42, 'Manglobe'),
(43, 'MAPPA'),
(44, 'NAS'),
(45, 'Nomad'),
(46, 'OLM'),
(47, 'Ordet'),
(48, 'Production I.G'),
(49, 'P.A.Works'),
(50, 'project No.9'),
(51, 'PINE JAM'),
(52, 'Production IMS'),
(53, 'SATELIGHT'),
(54, 'Seven Arcs'),
(55, 'SHAFT'),
(56, 'SILVER LINK'),
(57, 'STUDIO DEEN'),
(58, 'Studio Pierrot'),
(59, 'Synergy SP'),
(60, 'SUNRISE BEYOND'),
(61, 'TNK'),
(62, 'Triple A'),
(63, 'TRIGGER'),
(64, 'TROYCA'),
(65, 'ufotable'),
(66, 'WHITE FOX'),
(67, 'WIT STUDIO'),
(68, 'XEBEC'),
(69, 'ZERO-G'),
(70, 'ZEXCS'),
(71, 'AIC'),
(72, 'AIC ASTA'),
(73, 'AIC Build'),
(74, 'AIC Classic'),
(75, 'AIC Digital'),
(76, 'AIC PLUS+'),
(77, 'AIC Spirits'),
(78, 'ARTLAND'),
(79, 'Arms'),
(80, 'A.C.G.T'),
(81, 'Actas'),
(82, 'Asread'),
(83, 'A-1 Pictures'),
(84, 'AXsiZ'),
(85, 'BEE TRAIN'),
(86, 'Brain\'s Base'),
(87, 'Bridge'),
(88, 'BONES'),
(89, 'C2C'),
(90, 'CoMix Wave Films'),
(91, 'C-Station'),
(92, 'Creators in Pack'),
(93, 'CygamesPictures'),
(94, 'CloverWorks'),
(95, 'David Production'),
(96, 'EIKEN'),
(97, 'EMT Squared'),
(98, 'feel'),
(99, 'EKACHI EPILKA'),
(100, 'ENISHIYA');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignKey5` (`nationality_id`);

--
-- 資料表索引 `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignKey2` (`movie_id`);

--
-- 資料表索引 `castings`
--
ALTER TABLE `castings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignKey3` (`actor_id`),
  ADD KEY `foreignKey4` (`movie_id`);

--
-- 資料表索引 `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignKey6` (`studio_id`);

--
-- 資料表索引 `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignKey7` (`director_id`),
  ADD KEY `foreignKey8` (`country_id`);

--
-- 資料表索引 `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignKey1` (`movie_id`);

--
-- 資料表索引 `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `castings`
--
ALTER TABLE `castings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `studios`
--
ALTER TABLE `studios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `actors`
--
ALTER TABLE `actors`
  ADD CONSTRAINT `foreignKey5` FOREIGN KEY (`nationality_id`) REFERENCES `countries` (`id`);

--
-- 資料表的限制式 `awards`
--
ALTER TABLE `awards`
  ADD CONSTRAINT `foreignKey2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `castings`
--
ALTER TABLE `castings`
  ADD CONSTRAINT `foreignKey3` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreignKey4` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `directors`
--
ALTER TABLE `directors`
  ADD CONSTRAINT `foreignKey6` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `foreignKey7` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreignKey8` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `foreignKey1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
