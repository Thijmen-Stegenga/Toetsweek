-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 07 mei 2020 om 17:26
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalogus`
--

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Banken'),
(2, 'Tafels'),
(3, 'Bedden');

--
-- Gegevens worden geëxporteerd voor tabel `furniture`
--

INSERT INTO `furniture` (`id`, `name`, `img`, `price`, `description`, `category_id`) VALUES
(1, 'ANGERSBY', 'img/angersby.png', 149, '<p>De zitbank is op efficiënte wijze verpakt, waardoor je hem makkelijk mee naar huis kan nemen en naar binnen kan dragen.</p><p>\r\nIn de praktische vakken aan de buitenkant van de armleuning is plaats voor afstandsbedieningen en andere kleine dingen.</p>', 1),
(2, 'Hammarn', 'img/hammarn.png', 100, '<p>De gespannen stof waar de dekmatras op ligt, zorgt er ook voor dat de slaapbank comfortabel is om op te zitten en om op te slapen.</p>\r\n<p>Makkelijk om te toveren tot ruim tweepersoonsbed.</p>\r\n<p>\r\nLaag gewicht; eenvoudig op te tillen en te verplaatsen.</p>\r\n<p>De bekleding is afneembaar en machinewasbaar, en dus eenvoudig schoon te houden.</p>', 1),
(3, 'Mariedamm', 'img/mariedamm.png', 179, '<p>Niet al te grote afmetingen, dus ook geschikt voor kleinere ruimtes.</p>\r\n<p>Een ronde tafel met afgeronde randen geeft de kamer een ontspannen indruk.</p>\r\n<p>Het matte oppervlak beschermt tegen vingerafdrukken en is waterafstotend.</p>\r\n<p>Het met poederlak afgewerkte stalen frame is stabiel en duurzaam.</p>\r\n<p>We hebben het voor je uitgetest! De tafel is bestand tegen vloeistoffen, knoeien, olie, warmte, krassen en stoten.</p>\r\n<p>Plaats voor 2-4 personen.</p>\r\n<p>Voor extra stabiliteit, draai de schroeven ca. twee weken na de montage en indien nodig opnieuw aan.</p>', 2),
(4, 'Toresund', 'img/toresund.png', 139, '<p><b>Designer</b><br>\r\nIKEA of Sweden</p>', 2),
(5, 'Malm', 'img/malm.png', 269, '         <p>Houtfineer heeft dezelfde uitstraling en schoonheid, en geeft hetzelfde gevoel als </p>massief hout met unieke variaties in adering, kleur en patroon.</p><p>Dit veelzijdige frame zal er fantatisch uitzien met het textiel en de slaapkamermeubels die je kiest.</p><p>Door het hoge hoofdeinde kan je goed zitten in bed - met een paar kussens achter je rug heb je een comfortabele plek om te lezen of tv te kijken.</p><p>Je kan gemakkelijk onder het bed stofzuigen, zodat de ruimte daar schoon en stofvrij blijft.</p><p>De zijkanten van dit bed zijn verstelbaar en dat maakt het mogelijk om matrassen van verschillende diktes te gebruiken.</p><p>42 gelaagde latten, ingedeeld in 5 comfortzones, passen zich aan aan het lichaamsgewicht en verhogen de volgzaamheid van de matras.</p><p>Bij dit product heb je de SKORVA middenbalk nodig. Deze zit bij de prijs in, maar moet apart worden gepakt. Láát je je producten verzamelen, dan hoef je niets te doen. De middenbalk is nodig voor de stabiliteit en om de matrassen op hun plaats te houden.</p><p>De lattenbodem zit bij de prijs inbegrepen, maar is apart verpakt.</p><p>Met 2 of 4 MALM bedlades krijg je veel extra opbergruimte.</p><p>Exclusief matras en bedtextiel</p>', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
