-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 24 sep. 2018 à 19:00
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `foragedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `numero` int(11) NOT NULL,
  `description` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`numero`, `description`) VALUES
(1, 'Abonnement maison: pour une utilisation quotidienne dans leur fonctionnement interne'),
(2, 'Abonnement Entreprise: pour les  organisations privees et ONG'),
(3, 'Abonnement vendeur de quartier: pour la vente de l\'eau dans les quartier');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(254) DEFAULT NULL,
  `prenomClient` varchar(254) DEFAULT NULL,
  `telephoneClient` bigint(20) DEFAULT NULL,
  `idVillage` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `dateAb` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `telephoneClient`, `idVillage`, `numero`, `dateAb`) VALUES
(1, 'Diallo', 'Ousmane', 778024103, 1, 3, '2018-09-10 00:00:00'),
(100, 'Diouf', 'Ousmane', 777020717, 1, 1, '2018-09-24 00:00:00'),
(102, 'Fall', 'Kine', 77441122, 1, 1, '0000-00-00 00:00:00'),
(103, 'Wagne', 'Malado', 776091459, 2, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `idCompteur` int(11) NOT NULL,
  `compteur` int(11) DEFAULT NULL,
  `etatCompteur` tinyint(1) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `idConsom` int(11) NOT NULL,
  `idCompteur` int(11) NOT NULL,
  `consoChiffre` int(11) DEFAULT NULL,
  `consoLettre` varchar(254) DEFAULT NULL,
  `prixLitre` int(11) DEFAULT NULL,
  `dateConso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `idFacture` int(11) NOT NULL,
  `dateCreation` datetime DEFAULT NULL,
  `dateLimite` datetime DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `etatPaiement` tinyint(1) DEFAULT NULL,
  `datePaiement` datetime DEFAULT NULL,
  `idConsom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `village`
--

CREATE TABLE `village` (
  `idVillage` int(11) NOT NULL,
  `nomVillage` varchar(254) DEFAULT NULL,
  `nomChef` varchar(254) DEFAULT NULL,
  `prenomChef` varchar(254) DEFAULT NULL,
  `telephoneChef` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `village`
--

INSERT INTO `village` (`idVillage`, `nomVillage`, `nomChef`, `prenomChef`, `telephoneChef`) VALUES
(1, 'Dabali', 'Diouf', 'Ibou ', 775256633),
(2, 'Papaw', 'Thiam', 'Ibrahima', 778003344),
(3, 'Mbadakhoune', 'Ba', 'Abdou', 778003344);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`numero`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`),
  ADD KEY `FK_association1` (`idVillage`),
  ADD KEY `FK_association5` (`numero`);

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`idCompteur`),
  ADD KEY `FK_abonner` (`idClient`);

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`idConsom`),
  ADD KEY `FK_association3` (`idCompteur`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idFacture`),
  ADD KEY `FK_association4` (`idConsom`);

--
-- Index pour la table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`idVillage`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_association1` FOREIGN KEY (`idVillage`) REFERENCES `village` (`idVillage`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_association5` FOREIGN KEY (`numero`) REFERENCES `abonnement` (`numero`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD CONSTRAINT `FK_abonner` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `FK_association3` FOREIGN KEY (`idCompteur`) REFERENCES `compteur` (`idCompteur`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `FK_association4` FOREIGN KEY (`idConsom`) REFERENCES `consommation` (`idConsom`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
