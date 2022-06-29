-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jun 2022 om 13:33
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snelkookpan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accommodations`
--

CREATE TABLE `accommodations` (
  `id` int(11) NOT NULL,
  `image` varchar(48) NOT NULL,
  `price` double NOT NULL,
  `location` text NOT NULL,
  `story` text NOT NULL,
  `max_per` int(11) NOT NULL,
  `recensies` varchar(1000) NOT NULL,
  `available` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `accommodations`
--

INSERT INTO `accommodations` (`id`, `image`, `price`, `location`, `story`, `max_per`, `recensies`, `available`, `name`) VALUES
(1, 'img/image1.jpg', 2500, 'linnaeusstraat 89, Amsterdam Oost, 1093 EK Amsterdam, Nederland', 'The Manor Amsterdam combineert een monumentale buitengevel met een trendy, Italiaans geïnspireerd interieur. Het biedt gemeenschappelijke tuin met een terras, fietsverhuur en gratis WiFi. De tramhalte Wijttenbachstraat bevindt zich tegenover het hotel. Het historische centrum van Amsterdam is bereikbaar in slechts 10 minuten rijden.\r\n\r\n', 8, 'Perfecte, rustige locatie met super-ontbijt', 1, 'The Manor Amsterdam'),
(2, 'img/image2.jpg', 3250, 'Prins Hendrikkade 23, Amsterdam Centrum, 1012 TM Amsterdam, Nederland', 'A Train Hotel heeft diverse kamertypen, waaronder zakelijke en familiekamers. De kamers hebben een eenvoudige inrichting in lichte kleuren. Ze zijn voorzien van grote ramen en sommige kamers kijken uit op het centraal station.', 2, 'Goede locatie. Vriendelijk personeel. Nette kamer.\r\n\r\nHet personeel is heel erg vriendelijk en behulpzaam. De bedden waren goed. Fijn om een kamer te hebben met 3 bedden ipv 2 bedden en een slaapbank.', 1, 'A Train Hotel'),
(3, 'img/image3.jpg', 2250, 'Wilhelminakade 137, Feijenoord, 3072 AP Rotterdam, Nederland', 'Het nhow Rotterdam ligt op de Wilhelminapier in het gebouw \'De Rotterdam\', en biedt kamers met gratis WiFi en uitzicht op de Maas en de skyline van de stad. Dit moderne designhotel is ontworpen door Rem Koolhaas/OMA en beschikt over een terras op de 7e verdieping en een fitnesscentrum.', 3, 'Het was super dat er een bad op de kamer was\r\nEn het ontbijt zag er super mooi uit.\r\n\r\nWij hebben extra betaald voor uitzicht op de Maas. Dat is een aanrader.', 1, 'nhow Rotterdam'),
(4, 'img/image4.jpg', 2999, 'Witte de Withstraat 87, Centrum, 3012 BN Rotterdam, Nederland', 'CityHub Rotterdam ligt in het centrum van Rotterdam en beschikt over kamers met gratis WiFi. De accommodatie bevindt zich dicht bij diverse bekende bezienswaardigheden, op ongeveer 900 meter van de Markthal en ongeveer 14 minuten wandelen van de Kijk-Kubus.', 3, 'Locatie was top, douches waren heel proper en het personeel heel vriendelijk! Je merkt dat er goed over nagedacht is! Zeker een aanrader!\r\n\r\nTop locatie, proper en goede sanitair! Perfect voor 1-2 nachten', 0, 'CityHub Rotterdam'),
(5, 'img/image5.jpg', 1500, '2A Rading, 1231 KA Loosdrecht, Nederland', 'Suitelodges Gooilanden ligt in Loosdrecht, op 48 km van Haarlem, en beschikt over een tuin en gratis WiFi. De accommodatie beschikt over een sauna.\r\n\r\nDe units hebben airconditioning, parketvloeren, een eigen badkamer, een flatscreen-tv, een bureau, een woonkamer, een uitgeruste keuken, een patio en uitzicht op het meer. Elke unit beschikt over een zithoek en een eethoek.', 4, 'Mooie inrichting en goede bedden. Lekker rustig en grote tuin eromheen.\r\n\r\nMooi huisje, leuk ingericht. Twee parkeerplekken lief personeel', 1, 'Suitelodges Gooilanden');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@user.com', 'user');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
