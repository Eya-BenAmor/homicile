-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 18 déc. 2020 à 14:57
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(200) NOT NULL,
  `mdp` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`email`, `mdp`, `id`) VALUES
('homicilesite505@gmail.com', 'admin', 2);

-- --------------------------------------------------------

--
-- Structure de la table `dossiermed`
--

DROP TABLE IF EXISTS `dossiermed`;
CREATE TABLE IF NOT EXISTS `dossiermed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `maladie_id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `fichier_pdf` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dossiermed`
--

INSERT INTO `dossiermed` (`id`, `patient_id`, `maladie_id`, `titre`, `fichier_pdf`, `description`) VALUES
(3, 5, 6, 'Dossier_mÃ©dical_1', 'dossier-mÃ©dical.jpg', '  dossier mÃ©dical numÃ©ro 1   ');

-- --------------------------------------------------------

--
-- Structure de la table `maladie`
--

DROP TABLE IF EXISTS `maladie`;
CREATE TABLE IF NOT EXISTS `maladie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maladie`
--

INSERT INTO `maladie` (`id`, `nom`, `description`) VALUES
(6, 'allergie', 'L\'allergie est une maladie globale qui provoque des symptÃ´mes variÃ©s tels que : l\'asthme, le rhume des foins (rhinite), la conjonctivite, l\'eczÃ©ma, l\'urticaire, le choc allergique. '),
(5, 'COVID-19', 'La COVID-19 affecte les individus de diffÃ©rentes maniÃ¨res. La plupart des personnes infectÃ©es dÃ©veloppent une forme lÃ©gÃ¨re Ã  modÃ©rÃ©e de la maladie et guÃ©rissent sans hospitalisation.');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `tel` text NOT NULL,
  `mdpM` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `prenom`, `email`, `specialite`, `tel`, `mdpM`) VALUES
(5, 'Ben Mosbeh', 'Wael', 'wbenmosbeh2@gmail.com', 'Cardiologie', '123-123-4567', 'wael'),
(4, 'Nsir', 'Yasmine', 'yasminemimi.nsir@gmail.com', 'Gynecologie', '111-222-5496', 'yasmine');

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

DROP TABLE IF EXISTS `ordonnance`;
CREATE TABLE IF NOT EXISTS `ordonnance` (
  `idr` int(11) NOT NULL,
  `medicament1` varchar(200) NOT NULL,
  `nfj1` int(11) NOT NULL,
  `avap1` varchar(200) NOT NULL,
  `medicament2` varchar(200) NOT NULL,
  `nfj2` int(11) NOT NULL,
  `avap2` varchar(200) NOT NULL,
  `medicament3` varchar(200) NOT NULL,
  `nfj3` int(11) NOT NULL,
  `avap3` varchar(200) NOT NULL,
  `remarque` varchar(200) NOT NULL,
  PRIMARY KEY (`idr`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` text NOT NULL,
  `genre` text NOT NULL,
  `Datenaissance` date DEFAULT NULL,
  `Tel` text NOT NULL,
  `GroupS` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `email`, `mdp`, `genre`, `Datenaissance`, `Tel`, `GroupS`) VALUES
(5, 'Ben Amor', 'Eya', 'eya@gmail.com', 'youta', 'Femme', '2000-03-13', '123-548-1236', 'A'),
(14, 'Makkari', 'Nour', 'nour@gmail.com', 'nour', 'Femme', '2000-02-17', '012-125-9635', 'B');

-- --------------------------------------------------------

--
-- Structure de la table `rendez-vous`
--

DROP TABLE IF EXISTS `rendez-vous`;
CREATE TABLE IF NOT EXISTS `rendez-vous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateti` varchar(50) NOT NULL,
  `idm` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `etat` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
