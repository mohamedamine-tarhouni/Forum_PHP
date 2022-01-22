-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 15 jan. 2022 à 23:25
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_exam_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ID_Article` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Content` varchar(2000) NOT NULL,
  `Date_Pub` text NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID_Article`, `Title`, `Description`, `Content`, `Date_Pub`, `ID_User`) VALUES
(5, 'azerty', 'sdfg<br />\r\nggg', '', '15/01/2022 à 00:01', 2),
(6, 'fr', 'sdf', '', '15/01/2022 à 00:19', 3),
(7, 'rrrrrrr', 'qsdf', '', '15/01/2022 à 20:25', 3),
(8, 'edede', 'dededed', 'dedede', '15/01/2022 à 23:14', 3),
(9, 'frfr', 'frfr', 'frfr', '15/01/2022 à 23:20', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `MDP` varchar(150) NOT NULL,
  `Mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_User`, `Username`, `MDP`, `Mail`) VALUES
(1, 'ddd', '$2y$10$3wFQwNOhfYAKbx7RvK.ae.4iZliieWcqBfDyLmDnq9hRBWSvDix96', 'ddd@k'),
(2, 'midouch', '$2y$10$BkrGT6vNS8e4c.wjEy1fHuyfrrZYNfLf9gf1jNtDY0R6wfnsw0Q5i', 'qq@q'),
(3, 'azerty', '$2y$10$603C/.7hQOBhqfAn0SlOF.SKQ7GgsAYN6r6D2HxgZjqJh0f/9ulGG', 'ddd@g');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID_Article`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID_Article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
