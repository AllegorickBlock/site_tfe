-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Mars 2017 à 21:20
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formulaire`
--
CREATE DATABASE IF NOT EXISTS `formulaire` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `formulaire`;

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `n_tel` varchar(21) NOT NULL,
  `question` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `nom`, `prenom`, `email`, `n_tel`, `question`) VALUES
(1, 'Bourlet', 'Jason', 'jason.bourlet@skynet.be', '0485 163 654', 'Votre site est vraiment bien				'),
(2, 'Walravens', 'Melvin', 'walravens.melvin@yahoo.be', '0478 632 156', 'C\'est sympa ici				');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
