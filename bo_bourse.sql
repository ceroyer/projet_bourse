-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Février 2018 à 17:31
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_bourse`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `ISIN` varchar(12) NOT NULL,
  `cours` decimal(10,0) NOT NULL,
  `variation` decimal(10,0) NOT NULL,
  `ouverture` decimal(10,0) NOT NULL,
  `fermeture` decimal(10,0) NOT NULL,
  `volume` decimal(30,0) NOT NULL,
  `haut` decimal(10,0) NOT NULL,
  `bas` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `actions`
--

INSERT INTO `actions` (`id`, `nom`, `ISIN`, `cours`, `variation`, `ouverture`, `fermeture`, `volume`, `haut`, `bas`) VALUES
(1, 'orange', 'ORG', '5624', '27', '1995', '4552', '25000', '9544', '1255'),
(2, 'orange', 'ORG', '5624', '272', '1995', '4552', '25000', '9544', '1255');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id_user` int(5) NOT NULL,
  `id_actions` int(5) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `favoris`
--

INSERT INTO `favoris` (`id_user`, `id_actions`, `id`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `porte_feuille`
--

CREATE TABLE `porte_feuille` (
  `id` int(11) NOT NULL,
  `id_action` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `prix_achat` decimal(15,0) NOT NULL,
  `quantité` int(5) NOT NULL,
  `prix_total` decimal(17,0) NOT NULL,
  `prix_actuel` decimal(17,0) NOT NULL,
  `gain` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`, `role`, `active`) VALUES
(3, 'siloe', 'ab400c8ce8c720dc082aebc4d93d8c3387f31f85', 'rabadansiloe@gmail.com', 'admin', 0),
(4, 'maxence', '5a92bb4f40363c55bf25dbd65d3601a98335b7f3', 'maxence.garn@gmail.com', 'user', 0),
(5, 'sebastien', '7b1bf2ad279647ce77860572ab2d17807899e44b', 'sebastien.glatz@gmail.com', 'user', 0),
(6, 'julie', 'c2757c0df6b080e82ce1317149841c6befc10243', 'juliiie1108@gmail.com', 'user', 0),
(7, 'vincent', '6846105c1de1b40576f2238af8b0bd10ad4527ca', 'punkymotvgame@gmail.com', 'user', 0),
(8, 'margaux', '12e26feca31b91af92d9e1eb4bc2bb56213874b9', 'margaux.gautherin@gmail.com', 'user', 1),
(9, 'camille', 'fc01271603f25b35b3f92c61dde551259dbdc3ed', 'bleuarmy24@gmail.com', 'user', 1),
(10, 'yann', '88bb8f43f9095b2c018fca064f388c7673bdabd0', 'ydubois87@gmail.com', 'user', 0),
(11, 'david', '9e4bb55b0e1cbe606849117db1b97f179405daf3', 'Darknessy@gmail.com', 'user', 0),
(12, 'william', '3edff0367d6b01ca818cdfebd2344a38cd1f7814', 'willou9979@gmail.com', 'user', 0),
(13, 'benjamin', 'f9c3660d89418c79ee50fd2b0ab834276a78bd8e', 'benjamin.jusserand@gmail.com', 'user', 0),
(14, 'timothe', 'e44c479382acc30c17ca54c4fb14c75c66668e46', 'timothe.benoit@gmail.com', 'admin', 0),
(15, 'lucas', 'd971a772e0e26637f8be9138224cad39d0da54fd', 'lucas.patenote@gmail.com', 'user', 0),
(16, 'philippe', '34adbbc81f0a9558728a91dbe7c7f9293eb6ce7e', 'philippe.chantecaille@univ-poitiers.fr', 'user', 0),
(17, 'noemie', '54028a3d989f8133d7fbb19444a38ddab0faa2ad', 'nonopinos@gmail.com', 'user', 0),
(18, 'gaetan', '5ac2c3ca8ff6493e31010a97b9601acb6976783f', 'gaetanjuste2@gmail.com', 'user', 1),
(19, 'admin', '6747f06b4b9040196f62e833656fb147d29f7be6', '', 'admin', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id_user`),
  ADD KEY `id_favoris` (`id_actions`);

--
-- Index pour la table `porte_feuille`
--
ALTER TABLE `porte_feuille`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_action` (`id_action`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `porte_feuille`
--
ALTER TABLE `porte_feuille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`id_actions`) REFERENCES `actions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `favoris_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
