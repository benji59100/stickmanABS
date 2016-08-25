-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Août 2016 à 19:59
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stickmanbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `champion`
--

CREATE TABLE `champion` (
  `id_champion` int(11) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Strengh` int(11) NOT NULL,
  `Life` int(11) NOT NULL,
  `Point` int(11) NOT NULL,
  `ActionPoint` int(11) NOT NULL,
  `MovePoint` int(11) NOT NULL,
  `Victories` int(11) NOT NULL,
  `Defeats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `champion`
--

INSERT INTO `champion` (`id_champion`, `id_compte`, `Name`, `Strengh`, `Life`, `Point`, `ActionPoint`, `MovePoint`, `Victories`, `Defeats`) VALUES
(1, 3, 'Patrick', 100, 100, 100, 0, 0, 100, 100),
(3, 2, 'Robert', 100, 100, 100, 0, 0, 100, 100);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `idCompte` int(11) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Pseudo` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `Username`, `Password`, `Pseudo`, `Email`) VALUES
(1, 'test', 'test', 'test1', 'test@ggrgrfgr'),
(5, 'test2', 'zrertzert', 'test2', 'test2@ggrgrfgr'),
(6, 'adminc', '6f1bdb83ff15dbd1870998fa59801e0a', 'Funkeal', 'adminc@adminc'),
(8, 'test3', '1879ddcf8bdd7079a1ea10d25e270e1c', 'test3', 'rffe@gsg');

-- --------------------------------------------------------

--
-- Structure de la table `inventory`
--

CREATE TABLE `inventory` (
  `idInventory` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  `nbStorage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `idItem` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Value` int(11) NOT NULL,
  `Effect` int(11) NOT NULL,
  `Description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `items`
--

INSERT INTO `items` (`idItem`, `Name`, `Value`, `Effect`, `Description`) VALUES
(1, 'Health Potion', 100, 1, '+100 Hp'),
(2, 'Action Potion', 200, 2, '+5 Pa'),
(3, 'Movement Potion', 200, 3, '+5 Pm');

-- --------------------------------------------------------

--
-- Structure de la table `item_inventory`
--

CREATE TABLE `item_inventory` (
  `idItem` int(11) NOT NULL,
  `idInventoyCompte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `champion`
--
ALTER TABLE `champion`
  ADD PRIMARY KEY (`id_champion`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idCompte`);

--
-- Index pour la table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`idInventory`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`idItem`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `champion`
--
ALTER TABLE `champion`
  MODIFY `id_champion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `idCompte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `idInventory` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
