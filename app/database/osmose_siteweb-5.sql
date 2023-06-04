-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 03 juin 2023 à 21:43
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `osmose_siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

CREATE TABLE `biere` (
  `id_biere` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `aromes` varchar(50) DEFAULT NULL,
  `prix` decimal(7,2) DEFAULT NULL,
  `description` text,
  `accord_parfait` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`id_biere`, `nom`, `type`, `aromes`, `prix`, `description`, `accord_parfait`, `image`) VALUES
(1, 'La Grand-Est', 'Blonde', 'Miel/Sapin', '4.90', 'Brassée dans le respect des traditions, cette bière artisanale est le résultat d\'un savoir-faire séculaire. Ses arômes complexes, sa texture soyeuse et sa finition propre en font une véritable œuvre d\'art à savourer avec délice. Taux d\'alcool de 6,37%.', 'Munster', 'grand-est.png'),
(2, 'La Hauts-De-France', 'Brune', 'Orange/Quiquina', '4.90', 'Cette bière vous transporte dans un univers chaleureux et raffiné, avec ses arômes riches de malts torréfiés, de notes d\'agrumes sucrés et d\'une subtile amertume herbacée. Tauxd\'alcool de 7,1%', 'Mimolette', 'hauts.png'),
(3, 'La Pays de La Loire', 'Blonde', 'Menthe/Citron', '4.90', 'Dès la première gorgée, laissez-vous envelopper par un bouquet aromatique rafraîchissant, où la menthe vivifiante et le citron acidulé s\'entremêlent harmonieusement. Tauxd\'alcool de 5%', 'Emmental', 'loire.png'),
(4, 'La Corse', 'Blonde', 'Clémentine/Amande', '4.90', 'Une bière blonde à la fois rafraîchissante et légère, parfaite pour éveiller vos sens avec sa saveur fruitée et sa touche d\'amande enivrante. Taux d\'alcool de 6%', 'Brocciu', 'corse.png'),
(5, 'La Provence Alpes Côte-D\'Azur', 'Blonde', 'Thym/Pêche', '4.90', 'Une combinaison audacieuse de saveurs qui éveillera vos papilles avec ses notes herbacées et fruitées. Une bière blonde légère et parfumée, parfaite pour les moments de détente et les instants de plaisir. Taux d\'alcool de 4%', 'Banon', 'provence.png'),
(6, 'La Normande', 'Blonde', 'Abricot/Basilic', '4.90', 'Rafraîchissante et légère, cette bière blonde offre une expérience gustative équilibrée et surprenante. Parfaite pour les amateurs de bières originales à la recherche de nouvelles sensations. Taux d\'alcool de 5%', 'Camembert', 'normandie.png'),
(7, 'L\'Occitane', 'Ambrée', 'Cerise/Menthe', '4.90', 'Cette bière ambrée vous transporte dans un monde de délices, avec son équilibre parfait entre des arômes fruités et une touche herbacée. Laissez-vous charmer par sa robe ambrée et ses saveurs harmonieuses qui éveilleront vos sens à chaque gorgée. Taux d\'alcool de 4,2%', 'Tomme des Pyrénées', 'occitanie.png');

-- --------------------------------------------------------

--
-- Structure de la table `box`
--

CREATE TABLE `box` (
  `id_box` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prix` decimal(15,2) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `box`
--

INSERT INTO `box` (`id_box`, `nom`, `prix`, `description`, `image`) VALUES
(1, 'Grand-Est', '11.90', 'Cette box contient une biere La Grand-Est aromatisée au miel et au sapin ainsi qu\'un Munster pour un accord pafait.', 'box_grand_est.png'),
(2, 'Hauts-de-France', '11.90', 'Cette box contient une biere La Hauts-de-France aromatisée à l\'orange et au quinquina ainsi qu\'une Mimolette pour un accord pafait.', 'box_hauts_france.png'),
(3, 'Pays de la Loire', '11.90', 'Cette box contient une biere La Pays de la Loire aromatisée à la menthe et au citron ainsi qu\'un Emmental pour un accord pafait.', 'box_pays_loire.png'),
(4, 'Corse', '11.90', 'Cette box contient une biere La Corse aromatisée à l\'orange et au quinquina ainsi qu\'une Mimolette pour un accord pafait.', 'box_corse.png'),
(5, 'Provence Alpes Côte-d\'Azur', '11.90', 'Cette box contient une biere La Provence Alpes Côte-d\'Azur aromatisée au thym et à la pêche ainsi qu\'un Banon pour un accord pafait.', 'box_provence.png'),
(6, 'Nomandie', '11.90', 'Cette box contient une biere La Normande aromatisée à l\'abricot et au basilic ainsi qu\'un Camembert pour un accord pafait.', 'box_normandie.png'),
(7, 'Occitanie', '11.90', 'Cette box contient une biere L\'Occitane aromatisée à la cerise et à la menthe ainsi qu\'une Tomme des pyrénées pour un accord pafait.', 'box_occitanie.png');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` datetime DEFAULT NULL,
  `statut_commande` varchar(50) DEFAULT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `composer`
--

CREATE TABLE `composer` (
  `id_biere` int(11) NOT NULL,
  `id_box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenir_biere`
--

CREATE TABLE `contenir_biere` (
  `id_biere` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenir_box`
--

CREATE TABLE `contenir_box` (
  `id_commande` int(11) NOT NULL,
  `id_box` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `biere`
--
ALTER TABLE `biere`
  ADD PRIMARY KEY (`id_biere`);

--
-- Index pour la table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id_box`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `composer`
--
ALTER TABLE `composer`
  ADD PRIMARY KEY (`id_biere`,`id_box`),
  ADD KEY `id_box` (`id_box`);

--
-- Index pour la table `contenir_biere`
--
ALTER TABLE `contenir_biere`
  ADD PRIMARY KEY (`id_biere`,`id_commande`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Index pour la table `contenir_box`
--
ALTER TABLE `contenir_box`
  ADD PRIMARY KEY (`id_commande`,`id_box`),
  ADD KEY `id_box` (`id_box`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `composer`
--
ALTER TABLE `composer`
  ADD CONSTRAINT `composer_ibfk_1` FOREIGN KEY (`id_biere`) REFERENCES `biere` (`id_biere`),
  ADD CONSTRAINT `composer_ibfk_2` FOREIGN KEY (`id_box`) REFERENCES `box` (`id_box`);

--
-- Contraintes pour la table `contenir_biere`
--
ALTER TABLE `contenir_biere`
  ADD CONSTRAINT `contenir_biere_ibfk_1` FOREIGN KEY (`id_biere`) REFERENCES `biere` (`id_biere`),
  ADD CONSTRAINT `contenir_biere_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `contenir_box`
--
ALTER TABLE `contenir_box`
  ADD CONSTRAINT `contenir_box_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `contenir_box_ibfk_2` FOREIGN KEY (`id_box`) REFERENCES `box` (`id_box`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
