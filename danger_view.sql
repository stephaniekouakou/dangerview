-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 juin 2020 à 23:45
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `danger_view`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id_acteur` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `libelle`) VALUES
(1, 'homme'),
(3, 'femme'),
(4, 'groupe de jeune');

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `nom_activite` varchar(100) NOT NULL,
  `id_utilisateur` varchar(255) NOT NULL,
  `id_danger` varchar(255) DEFAULT NULL,
  `lieu_id_lieu` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom_activite`, `id_utilisateur`, `id_danger`, `lieu_id_lieu`, `date`) VALUES
(1, 'ajout de lieu', 'kouakou stephanie', NULL, 'agboville', '2020-06-11 21:18:32'),
(2, 'ajout de lieu', 'kouakou stephanie', NULL, 'agboville', '2020-06-11 21:23:47'),
(3, 'ajout de lieu', 'kouakou stephanie', NULL, 'agboville', '2020-06-11 21:40:41'),
(4, 'suppression de lieu', 'stephanie@gmail.com', NULL, 'agboville', '2020-06-11 21:41:02'),
(5, 'ajout de danger', 'stephanie@gmail.com', 'accidents', NULL, '2020-06-11 21:42:43');

-- --------------------------------------------------------

--
-- Structure de la table `dangertable`
--

CREATE TABLE `dangertable` (
  `id_danger` int(11) NOT NULL,
  `nom_danger` varchar(100) NOT NULL,
  `sexevictime` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `date_danger` varchar(20) NOT NULL,
  `dangertype` varchar(50) NOT NULL,
  `acteur` varchar(50) NOT NULL,
  `lieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dangertable`
--

INSERT INTO `dangertable` (`id_danger`, `nom_danger`, `sexevictime`, `source`, `date_danger`, `dangertype`, `acteur`, `lieu`) VALUES
(1, 'accidents de voiture', 'femme', 'journal', '2020-06-04', 'accidents', 'groupe de jeune', 'agboville quatier artisanal');

-- --------------------------------------------------------

--
-- Structure de la table `dangertype`
--

CREATE TABLE `dangertype` (
  `id_dangertype` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dangertype`
--

INSERT INTO `dangertype` (`id_dangertype`, `libelle`) VALUES
(1, 'braquage'),
(2, 'accidents'),
(3, 'meutre'),
(4, 'manifestation');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id_lieu` int(11) NOT NULL,
  `continent` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(225) NOT NULL,
  `quatier` varchar(255) NOT NULL,
  `nbre_hab` int(255) NOT NULL,
  `surperficie` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id_lieu`, `continent`, `pays`, `ville`, `quatier`, `nbre_hab`, `surperficie`, `description`) VALUES
(2, 'afrique', 'cote d ivoire', 'abidjan', 'koumassi', 1250000, '14345678', 'capitale economique'),
(5, 'afrique', 'cote divoire', 'agboville', 'artisanal', 12334444, '2559000', 'agboville est le chef lieu de la region agnébi-tiassa');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `date_msg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `lieu_id_lieu` int(11) NOT NULL,
  `visiteur_id_visiteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `password`, `role`, `photo`) VALUES
(1, 'kouakou', 'stephanie', 'stephanie@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'utilisateur', NULL),
(2, 'tape', 'ange', 'ange@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'surperviseur', NULL),
(5, 'kouakou', 'marc', 'admin@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'surperviseur', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id_visiteur` int(11) NOT NULL,
  `adress_ip` varchar(100) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `tmp_visite` int(11) DEFAULT NULL,
  `navigateur` varchar(45) DEFAULT NULL,
  `message_id_message` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD KEY `fk_activite_utilisateur1` (`id_utilisateur`),
  ADD KEY `lieu_id_lieu` (`lieu_id_lieu`),
  ADD KEY `id_danger` (`id_danger`);

--
-- Index pour la table `dangertable`
--
ALTER TABLE `dangertable`
  ADD PRIMARY KEY (`id_danger`),
  ADD KEY `id_acteur` (`acteur`),
  ADD KEY `id_lieu` (`lieu`),
  ADD KEY `id_dangertype` (`dangertype`);

--
-- Index pour la table `dangertype`
--
ALTER TABLE `dangertype`
  ADD PRIMARY KEY (`id_dangertype`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id_lieu`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`lieu_id_lieu`,`visiteur_id_visiteur`),
  ADD KEY `fk_lieu_has_visiteur_visiteur1` (`visiteur_id_visiteur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id_visiteur`),
  ADD KEY `fk_visiteur_message1` (`message_id_message`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `dangertable`
--
ALTER TABLE `dangertable`
  MODIFY `id_danger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `dangertype`
--
ALTER TABLE `dangertype`
  MODIFY `id_dangertype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id_lieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id_visiteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD CONSTRAINT `fk_lieu_has_visiteur_visiteur1` FOREIGN KEY (`visiteur_id_visiteur`) REFERENCES `visiteur` (`id_visiteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD CONSTRAINT `fk_visiteur_message1` FOREIGN KEY (`message_id_message`) REFERENCES `message` (`id_message`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
