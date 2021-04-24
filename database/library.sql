-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Apr 2021 um 16:47
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10-mario-biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `publishDate` date NOT NULL,
  `mediaType` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `authFirstName` varchar(255) DEFAULT NULL,
  `authLastName` varchar(255) NOT NULL,
  `pubName` varchar(255) NOT NULL,
  `pubAddress` varchar(255) NOT NULL,
  `pubSize` varchar(255) NOT NULL,
  `subpage` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `ISBN`, `description`, `publishDate`, `mediaType`, `status`, `authFirstName`, `authLastName`, `pubName`, `pubAddress`, `pubSize`, `subpage`) VALUES
(5, 'The Garden', '6082f93748d2b.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-19', 'CD', 'available', '', 'Red Hot Chili Peppers', 'EMI', '12 Picadilly Circus, London', 'big', 'emi.php'),
(6, 'Hammered', '6082f9a6a8215.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-02', 'CD', 'available', '', 'Motorhead', 'Sony Music', '1025 5th Avenue, New York', 'big', 'sonymusic.php'),
(7, 'L.A. Woman', '6082fa2b23021.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-06', 'CD', 'reserved', '', 'The Doors', 'EMI', '12 Picadilly Circus, London', 'big', 'emi.php'),
(8, 'The Acoustic Submarine', '6084104d268b3.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-09', 'CD', 'available', '', 'The Beatles', 'EMI', '12 Picadilly Circus, London', 'big', 'emi.php'),
(9, 'Hello Nasty', '6082fd90cbc03.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-16', 'CD', 'available', '', 'Beasty Boys', 'Sony Music', '1025 5th Avenue, New York', 'big', 'sonymusic.php'),
(10, 'Magical Mystery Tour', '6082fdf4d07d3.jpg', '0-9571-6151-4', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-17', 'CD', 'available', '', 'The Beatles', 'EMI', '12 Picadilly Circus, London', 'big', 'emi.php'),
(11, 'My Antonia', '6082fe59c716e.jpg', '0-3731-6259-6', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-14', 'Book', 'available', 'Willa', 'Cather', 'HarperCollins', '195 Broadway, New York', 'big', 'harper.php'),
(12, 'Hamlet', '60841069ca480.jpg', '0-6863-8816-X', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-13', 'Book', 'available', 'William', 'Shakespeare', 'Oxford University Press', 'Great Clarendon Street, Oxford', 'medium', 'oxford.php'),
(13, 'Mostly Harmless', '608300304c177.jpg', '0-5678-7531-8', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-09', 'Book', 'available', 'Douglas', 'Adams', 'HarperCollins', '195 Broadway, New York', 'big', 'harper.php'),
(14, 'Inland empire', '608300c7b92fa.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-04', 'DVD', 'available', 'David', 'Lynch', 'Sony Pictures', '10202 West Washington Boulevard, Culver City', 'big', 'sonypictures.php'),
(15, 'Vampires', '6083012ece2da.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-16', 'DVD', 'available', 'John', 'Carpenter', 'Universal Pictures', '100 Universal City Plaza Drive, Universal City', 'big', 'universal.php'),
(16, 'B13', '6083017996b99.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-16', 'DVD', 'available', 'Luc', 'Besson', 'Universal Pictures', '100 Universal City Plaza Drive, Universal City', 'big', 'universal.php'),
(17, 'The Passion of the Christ', '608302167e3e9.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-13', 'DVD', 'available', 'Mel', 'Gibson', 'Sony Pictures', '10202 West Washington Boulevard, Culver City', 'big', 'sonypictures.php'),
(18, 'The Mothers of Innovation', '6084257cbf697.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-13', 'CD', 'reserved', 'Frank', 'Zappa', 'Sony Music', '1025 5th Avenue, New York', 'big', 'sonymusic.php'),
(19, 'It', '608425dc68b10.jpg', '0-6430-2291-0', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-05', 'Book', 'reserved', 'Stephen', 'King', 'HarperCollins', '195 Broadway, New York', 'big', 'harper.php'),
(20, 'Modern Love', '60842638829c1.jpg', '0-9447-6299-9', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-03', 'Book', 'available', 'Daniel', 'Jones', 'Oxford University Press', 'Great Clarendon Street, Oxford', 'medium', 'oxford.php'),
(21, 'American Gothic', '608426a60fbcc.jpg', '0-9783-3055-2', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-13', 'Book', 'reserved', 'Robert', 'Bloch', 'Oxford University Press', 'Great Clarendon Street, Oxford', 'medium', 'oxford.php'),
(22, 'Mamma Mia!', '60842721dfef5.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-14', 'DVD', 'available', 'Meryl', 'Streep', 'Sony Pictures', '10202 West Washington Boulevard, Culver City', 'big', 'sonypictures.php'),
(23, 'The Grinch', '60842780ba60b.jpg', '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2021-04-21', 'DVD', 'available', 'Jim', 'Carrey', 'Universal Pictures', '100 Universal City Plaza Drive, Universal City', 'big', 'universal.php');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
