-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 10 apr 2020 om 10:42
-- Serverversie: 5.7.26
-- PHP-versie: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `person`
--

INSERT INTO `person` (`id`, `name`, `email`, `role_id`) VALUES
(1, 'Annette', 'annettevanes@', 1),
(3, 'Marian', 'marian@hotmail.comw34', 2),
(4, 'Joop', 'joop@gmail.com', 2),
(151, 'test1', 'test100', 1),
(152, 'Test2', 'Test2', 1),
(153, 'test3', 'test3', 1),
(154, 'Test4', 'Test4', 1),
(155, 'Annette', 'Annette', 1),
(156, 'Annie', 'Annie', 1),
(157, 'Annie2', 'Annie2', 2),
(158, 'Annie3', 'Annie3', 2),
(162, 'Ruud', 'Ruud', 1),
(163, 'Ruud', 'Ruud', 1),
(164, 'Ruud', 'Ruud', 1),
(165, 'al;sdjkf', 'asdf', 1),
(166, 'asdf', 'asdf', 1),
(167, 'asdf', 'asf', 1),
(168, 'asdf', 'asf', 2),
(169, 'asfas', 'asdgag', 1),
(170, 'asfas', 'asdgag', 1),
(171, 'Neeltje', 'Neeltje', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `descr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `role`
--

INSERT INTO `role` (`role_id`, `descr`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `person_id`) VALUES
(1, 'Marian', 'userpassword_marian', 3),
(2, 'Joop', 'userpassword_joop', 4),
(3, 'Annette', 'userpassword_Annette', 1),
(114, 'Ruud', 'Ruud', 149),
(116, '100', 'Test', 151),
(118, 'Test4', 'test', 154),
(119, 'Test3', 'Test3', 155),
(120, 'Test2', 'Test2', 156),
(121, 'Test1', 'Test1', 157),
(125, 'Ruud', 'af5b56c5fa0560714cac7d2ecf83eea8', 162),
(128, 'asdfsadf', 'ff481b42282e3ac39b030499af8a1d52', 169),
(129, 'Neeltje', '9698be1a978b0c1812d5d4bc8bc998d3', 171);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexen voor tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `person_id` (`person_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT voor een tabel `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Beperkingen voor tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`);
