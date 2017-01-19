-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Janvier 2017 à 17:01
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
(1, 'Vermeulen', 'Samuel', '1@1.com', '1234', '10 rue Paul Valéry - Hallennes Lez Haubourdin');

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
-- Structure de la table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `logtxt` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
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
  `ref` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produit` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `descript_rap`, `descript`, `prix`, `stock`, `cat_id`, `ref`) VALUES
(1, 'Disque de 5 Kg', '', 'Disque en fonte de 5 Kg', 5.5, 50, 2, '5657981564541'),
(3, 'BODYSOLID PRO DUAL', 'Tour pour 4 Stations (non incluses)', 'Pas moins de 10 double postes au choix pour entrainement complet de tous les groupes musculaires, tour 4 stations Ã  quadruple charge automatique.', 4295, 6, 1, '65487981654'),
(10, 'Corde Vitesse', 'Corde de vitesse ajustable', 'Un excellent produit pour des entrainements intensifs qui permet d ameliorer l agilite et le systeme cardio vasculaire.', 9.9, 100, 2, '68718154654'),
(15, 'Caseine Micellaire Harder', 'Proteines natives', 'Elle constitue une veritable avancee dans le monde de la proteine. l accent a ete mis avant tout sur la qualite des matieres premieres et des ingredients.', 39.9, 200, 4, '651478715465');

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
