-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Avril 2018 à 15:35
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `reserve`
--

CREATE TABLE `reserve` (
  `id_res` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_travel` int(11) NOT NULL,
  `date_res` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `travel`
--

CREATE TABLE `travel` (
  `id_travel` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `country` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_return` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `travel`
--

INSERT INTO `travel` (`id_travel`, `TITLE`, `country`, `description`, `price`, `date_start`, `date_return`) VALUES
(1, 'NORWAY', 'On the land of the Vikings', 'True cultural discovery, you will discover the country of the vikings in all its splendor. From Oslo to Sognefjord via the famous Troll route, you will have the opportunity to see Norway s most beautiful fjords.', 5000, '2018-03-23', '2018-03-30'),
(2, 'ITALY', 'Combined culture and nature', 'Arbatax located in the east center of the island including a wild nature reserve integrated in a resort on the coast', 5, '2018-03-23', '2018-03-30'),
(3, 'FRANCE', 'To conquer the East', 'From the city center to the European Parliament, passing through the imperial district of Neustadt, discover Strasbourg from a unique point of view, for a stroll along the water!', 5, '2018-03-23', '2018-03-30'),
(4, 'EGYPT', 'The domain of the pharaohs', 'Egypt welcomes you with its mighty Nile and magnificent monuments, the beguiling desert and lush delta, and with its long past and welcoming, story-loving people.', 5, '2018-03-23', '2018-03-30'),
(5, 'FRANCE', 'Le plaza athénée', 'The Plaza Athénée is part of the very closed circle of Parisian palaces. After 11 months of work, it reopened in September 2014, and we find everything that makes the soul of the hotel: classic and luxurious suites, a restaurant completely transformed and taken over by Alain Ducasse, the same upscale service that has made it famous, a large, refurbished interior courtyard, and still the Dior spa.', 5, '2018-03-23', '2018-03-30'),
(6, 'FRANCE', 'Le George V', 'The Four Seasons Hotel George V is one of those hotels that you probably do not need to present. Anchored since 1928 at 31 avenue George V in the 8th arrondissement just a stone s throw from the Champs Elysées, this establishment (built to the distinction of Palace in 2012) is an exceptional hotel, renowned throughout the world and with an irreproachable quality of service. ', 5, '2018-03-23', '2018-03-30'),
(7, 'Australia', 'Novotel Sydney Darling Harbour', 'A 3-minute walk from Harborside Shopping Center, Novotel Sydney Darling Harbor offers spacious rooms, some with stunning views of the Sydney skyline. It features a gym and an outdoor pool and tennis court. In addition, guests can enjoy 30 minutes of free Wi-Fi in the lobby per device and per day.', 5, '2018-03-23', '2018-03-30'),
(8, 'Australia', 'The Westin Sydney', 'Located in Sydney s central business district, near the lively Martin Place, The Westin Sydney offers an à la carte restaurant, a bar and access to a fitness center. Luxurious rooms with personalized interiors feature flat-screen TVs. Some offer stunning views of the city. Wi-Fi is free in public areas.', 5, '2018-03-23', '2018-03-30');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `lastname` text COLLATE utf8_bin NOT NULL,
  `firsname` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `login_user` text COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `lastname`, `firsname`, `email`, `login_user`, `pass`) VALUES
(1, 'DOS SANTOS', 'Julien', 'julien.dossantos@gmail.com', 'DOSSANTOS1', 'jdetu1'),
(2, 'TABARE', 'Ruben', 'ruben.tabare@gmail.com', 'TABARE1', 'rtetu2'),
(3, 'WANG', 'Antoine', 'AntoineWang@gmail.com', 'WANG1', 'waetu1'),
(4, 'BUGIELSKI', 'Alexis', 'AlexisBugielski@gmail.com', 'BUGIELSKI1', 'baetu1'),
(5, 'MONET', 'Gregoire', 'GregoireMonet@gmail.com', 'MONET1', 'gmetu1'),
(6, 'WRIGHT', 'Bill', 'BillWright@gmail.com', 'WRIGHT1', 'bwetu1'),
(7, 'ZUKERBERG', 'MARK', 'MarkZukerberg@gmail.com', 'WRIGHT1', 'mzetu1'),
(8, 'CARON', 'Fabien', 'FabienCaron@gmail.com', 'CARON1', 'caetu1'),
(9, 'CRESP', 'Vincent', 'VincentCresp@gmail.com', 'CRESP1', 'cvetu1'),
(10, 'ASIMOV', 'Isaac', 'IsaacAsimovp@gmail.com', 'CRESP1', 'cvetu1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id_res`);

--
-- Index pour la table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id_travel`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `travel`
--
ALTER TABLE `travel`
  MODIFY `id_travel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
