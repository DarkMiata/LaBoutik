-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 18 Janvier 2017 à 16:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `boutik`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` tinyint(3) unsigned NOT NULL,
  `nom_cat` varchar(32) NOT NULL,
  `descript_cat` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_cat`, `descript_cat`) VALUES
(1, 'Machines de musculation', 'Les premières machines de musculation remontent aux années 1950. Elles ont été décrites par Marcel Rouet.'),
(2, 'Poids libres', 'Altères, barres, disque en fonte'),
(3, 'Boissons de l''effort', 'Boisson Isotonique : Boisson de l''effort qui la même composition que le plasma sanguin, et qui permet une meilleure absorption de ses composés (vitamines, minéraux, glucose..) au travers les membranes du corps et donc une meilleure assimilation au niveau intestinal.'),
(4, 'Compléments alimentaires', 'Il s''agit d''une denrée alimentaire qui constitue une source concentrée de nutriments ou d''autres substances ayant un effet nutritionnel ou physiologique.');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `mdp`, `adresse`) VALUES
(1, 'Vermeulen', 'Samuel', '1@1.com', '1234', '10 rue Paul Valéry - Hallennes Lez Haubourdin'),
(2, '1', '2', '4', '5', '3'),
(3, '1', '2', '5', '6', '3');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `etat` varchar(2) NOT NULL,
  `client_id` int(11) unsigned NOT NULL,
  `commande` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) NOT NULL,
  `descript_rap` text NOT NULL,
  `descript` text NOT NULL,
  `prix` float unsigned NOT NULL,
  `stock` mediumint(9) NOT NULL,
  `cat_id` tinyint(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produit` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit_commande`
--

CREATE TABLE IF NOT EXISTS `produit_commande` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produit_id` smallint(11) unsigned NOT NULL,
  `prix` float unsigned NOT NULL,
  `quantite` smallint(6) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
