-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 18 Mai 2017 à 19:38
-- Version du serveur :  5.7.18-0ubuntu0.16.10.1
-- Version de PHP :  7.0.17-2+deb.sury.org~yakkety+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phoneCell`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `nom` text NOT NULL,
  `marques` text NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `achat`
--

INSERT INTO `achat` (`id`, `email`, `nom`, `marques`, `prix`) VALUES
(1, 'sambou@gmail.com', 'sambou ', 'htc', 350);

-- --------------------------------------------------------

--
-- Structure de la table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `phone`
--

INSERT INTO `phone` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'diallo', 'sambou', 'sambou@gmail.com', 'ceciestmonmdp'),
(2, 'daniel', '', 'daniel@yahoo.fr', 'passy'),
(3, 'hezfzlo', 'fza', 'phpmyadmin@gmgre.com', 'root'),
(94, 'daniel', 'same', 'derf@deer', 'derff'),
(95, 'rff', 'fffff', 'phpmyadmin@rrr', 'rootfff'),
(96, 'deded', 'deded', 'phpmyadmin0@ferfr', 'fserferzf'),
(97, 'issoaœ', 'zdeeddze', 'daniel@yahoo.fr', 'passydede'),
(98, 'cabart', 'linda', 'linda@hdhd', 'azerty'),
(102, 'junior', 'mouasso', 'jrmouasso@gmail.com', 'azertyuiop');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
