-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 jan. 2022 à 21:55
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
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `ID_Answer` int(11) NOT NULL,
  `Content` varchar(1500) NOT NULL,
  `Date_Pub` text NOT NULL,
  `ID_Article` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, 'fr', 'sdf', '', '15/01/2022 à 00:19', 3),
(7, 'rrrrrrr', 'qsdf', '', '15/01/2022 à 20:25', 3),
(8, 'edede', 'dededed', 'dedede', '15/01/2022 à 23:14', 3),
(15, 'mlk', 'kij<br />\r\nsazs<br />\r\nsz', 'lkjk', '17/01/2022 à 22:26', 10);

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
(1, 'Nadia', '$2y$10$3wFQwNOhfYAKbx7RvK.ae.4iZliieWcqBfDyLmDnq9hRBWSvDix96', 'Nadia@n'),
(2, 'anthony01', '$2y$10$90wqZ90TkWkQ98sRffrDKeC.rLyJitv74Pl/tSsOyleGp.CVPGxOu', 'antho@michelle'),
(3, 'azerty', '$2y$10$603C/.7hQOBhqfAn0SlOF.SKQ7GgsAYN6r6D2HxgZjqJh0f/9ulGG', 'ddd@g'),
(4, 'amine', '$2y$10$PshFa/99hM/8sAWSOvPpH.t494ZXZ.c.hK44.0MeT08Bvp4aeX4q.', 'amine@a'),
(5, 'a', '$2y$10$O6jKeB8yhYmKhnOX/O9nEeINq9Lq/rzmlMdXaaTpOrQl3v2dg1I.6', 'az@f'),
(6, 'dd', '$2y$10$54Ar9MTVil4wboXeDsN7yugXUhQ33NOEwp6fJ3kruYkdCwnM.51h6', 'dd@d'),
(7, 'azerty1', '$2y$10$FP29tRw8.1Sa1IkUt/A0U.fEFO0mc3vaYow8nCaBbg1A1ms0mzbta', 'az@s'),
(8, 'azerty4', '$2y$10$wTILF1xg.Fv1WmWwiWEl0O7kWA8qJVgkn4b5jyUgXpqTggWhAnsei', 'ml@e'),
(9, 'azerty7', '$2y$10$V3QR3ZIWsLXB0UynzkK69uArCgGlIcY9pwbvVirf8igxEwv9B27Km', 'ml@a'),
(10, 'jgjg', '$2y$10$hIq3WuJZPzcegcMjZf9jWuY/Z3fnl0aucnYa7ZPsHZbQ0crZcSF/q', 'ml@s'),
(11, 'bh', '$2y$10$6cUsjVT6hyXsT9v/03/PGeYNkegSY4QqxkiXfncyZRkSaUBnh/F.q', 'az@m'),
(12, 'antho', '$2y$10$X9sT/r7a4.9MdX9JzGkJEe2Z/W.4l.OOgUlfnOiJeaQ1YQjI7osPy', 'antho@gmail'),
(13, 'ammm', '$2y$10$f43rB9HjnsXAruJNZLp/ae3lHGNMpeS1IbWTA121BGgoNVarMPfii', 'ze@f'),
(14, 'Alex49', '$2y$10$QQAJz.hDWT3pRpXHyoOxfOq/gCYYrQ/4B9qzUiRupHIc/0rxgW3c6', 'Alex@mlk'),
(15, 'Alex', '$2y$10$TVfIbSCqNSbTI1etAAoif.rVmhG1T1c9kMT5niJ50PepTpOwGC5E.', 'coach@demerde');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID_Answer`),
  ADD KEY `ID_Article` (`ID_Article`),
  ADD KEY `ID_User` (`ID_User`);

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
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `ID_Answer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID_Article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`ID_Article`) REFERENCES `articles` (`ID_Article`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
