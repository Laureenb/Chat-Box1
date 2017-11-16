-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 16 nov. 2017 à 08:05
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chatons`
--

-- --------------------------------------------------------

--
-- Structure de la table `chatMessage`
--

CREATE TABLE `chatMessage` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chatMessage`
--

INSERT INTO `chatMessage` (`id`, `userid`, `message`, `date`) VALUES
(1, '0', 'test', '0000-00-00 00:00:00'),
(2, '0', 'bonjour', '0000-00-00 00:00:00'),
(3, '0', 'bonjour', '0000-00-00 00:00:00'),
(4, '0', 'bonjour', '0000-00-00 00:00:00'),
(5, '0', 'Hello\r\n', '0000-00-00 00:00:00'),
(6, '0', 'send', '0000-00-00 00:00:00'),
(7, '1', 'sned\r\n', '0000-00-00 00:00:00'),
(8, '0', 'sndedeada\r\n', '0000-00-00 00:00:00'),
(9, '1', 'sndedeada\r\n', '0000-00-00 00:00:00'),
(10, '1', 'sndedeada\r\n', '0000-00-00 00:00:00'),
(11, '1', 'dadadaadad', '0000-00-00 00:00:00'),
(12, '1', 'dadadaadad', '0000-00-00 00:00:00'),
(13, '1', 'Schoout', '0000-00-00 00:00:00'),
(14, '1', 'scout', '0000-00-00 00:00:00'),
(15, '1', 'bleu\r\n', '0000-00-00 00:00:00'),
(16, '1', 'bleu\r\n', '0000-00-00 00:00:00'),
(17, '1', 'bleu\r\n', '0000-00-00 00:00:00'),
(18, '1', 'bleu\r\n', '0000-00-00 00:00:00'),
(19, '1', 'chadta', '0000-00-00 00:00:00'),
(20, '1', 'dadada', '0000-00-00 00:00:00'),
(21, '1', 'dadada', '0000-00-00 00:00:00'),
(22, '1', 'dadadada', '0000-00-00 00:00:00'),
(23, '1', 'dadadada', '0000-00-00 00:00:00'),
(24, '1', 'dadadada', '0000-00-00 00:00:00'),
(25, '1', 'dadadada', '0000-00-00 00:00:00'),
(26, '1', 'dadadada', '0000-00-00 00:00:00'),
(27, '1', 'dadadada', '0000-00-00 00:00:00'),
(28, '1', 'dadadada', '0000-00-00 00:00:00'),
(29, '1', 'dadadada', '0000-00-00 00:00:00'),
(30, '1', 'dadadada', '0000-00-00 00:00:00'),
(31, '1', 'dadadada', '0000-00-00 00:00:00'),
(32, '1', 'dadadada', '0000-00-00 00:00:00'),
(33, '1', 'bertrand\r\n', '0000-00-00 00:00:00'),
(34, '1', 'bonjour\r\n', '0000-00-00 00:00:00'),
(35, '1', 'bonjour\r\n', '0000-00-00 00:00:00'),
(36, '1', '<h1>bonjour</h1>\r\n', '0000-00-00 00:00:00'),
(37, '1', '<h1>bonjour</h1>\r\n', '0000-00-00 00:00:00'),
(38, '1', '<h1>manger</h1>\r\n', '0000-00-00 00:00:00'),
(39, '1', '<h1>manger</h1>\r\n', '0000-00-00 00:00:00'),
(40, '0', 'dadjadja', '0000-00-00 00:00:00'),
(41, 'koko', 'dadjadja', '0000-00-00 00:00:00'),
(42, 'koko', 'test', '0000-00-00 00:00:00'),
(43, '1', 'dadad', '0000-00-00 00:00:00'),
(44, 'koko', 'dadad', '0000-00-00 00:00:00'),
(45, '1', 'dadada', '0000-00-00 00:00:00'),
(46, '1', 'dadada', '0000-00-00 00:00:00'),
(47, '1', 'dada', '0000-00-00 00:00:00'),
(48, '1', 'dada', '0000-00-00 00:00:00'),
(49, '1', 'dada', '0000-00-00 00:00:00'),
(50, '1', 'dada', '0000-00-00 00:00:00'),
(51, '1', 'dablu', '0000-00-00 00:00:00'),
(52, 'koko', 'daad', '0000-00-00 00:00:00'),
(53, 'koko', 'jaune', '0000-00-00 00:00:00'),
(54, 'koko', 'dadadadadadad', '0000-00-00 00:00:00'),
(55, 'koko', 'j\'aime les fleurs ', '0000-00-00 00:00:00'),
(56, 'koko', 'da', '0000-00-00 00:00:00'),
(57, 'koko', 'qdsq', '0000-00-00 00:00:00'),
(58, 'koko', 'qdsq', '0000-00-00 00:00:00'),
(59, 'koko', 'dadada', '0000-00-00 00:00:00'),
(60, 'koko', 'dzd', '0000-00-00 00:00:00'),
(61, 'koko', 'fezf', '0000-00-00 00:00:00'),
(62, 'koko', 'loooooool\r\n', '0000-00-00 00:00:00'),
(63, 'koko', 'dadadadadada', '0000-00-00 00:00:00'),
(64, 'koko', 'dadadadadada', '0000-00-00 00:00:00'),
(65, 'koko', 'dadad', '0000-00-00 00:00:00'),
(66, 'koko', 'daadda', '0000-00-00 00:00:00'),
(67, 'koko', 'jhkjhk', '0000-00-00 00:00:00'),
(68, 'koko', 'dad', '0000-00-00 00:00:00'),
(69, 'koko', 'dada', '0000-00-00 00:00:00'),
(70, 'koko', 'jaune', '0000-00-00 00:00:00'),
(71, 'koko', 'bleu', '0000-00-00 00:00:00'),
(72, 'koko', 'hola\r\n', '0000-00-00 00:00:00'),
(73, 'koko', 'je suis au rattrapage', '0000-00-00 00:00:00'),
(74, 'Valishere', 'hello', '0000-00-00 00:00:00'),
(75, 'Valishere', 'hello', '0000-00-00 00:00:00'),
(76, 'Valishere', 'sqpeqifjspi', '0000-00-00 00:00:00'),
(77, 'Valishere', 'ddgvsrd', '0000-00-00 00:00:00'),
(78, 'valishere2', 'val', '0000-00-00 00:00:00'),
(79, 'valishere2', 'val', '0000-00-00 00:00:00'),
(80, 'koko', 'hola', '0000-00-00 00:00:00'),
(81, 'valishere2', 'wollllaaalalalalalala', '0000-00-00 00:00:00'),
(82, 'valishere2', 'zeglmsdrglj', '0000-00-00 00:00:00'),
(83, 'koko', 'valerian parle moi !!!!!!!!', '0000-00-00 00:00:00'),
(84, 'valishere2', 'Valerian est indisponible pour le moment. Vous pouvez le contacter plus tard dans la journée\r\n', '0000-00-00 00:00:00'),
(85, 'valishere2', 'Ou laisser un message', '0000-00-00 00:00:00'),
(86, 'koko', 'hello i\'m Karly Class and i just create the most wonderfull website with wix\r\n', '0000-00-00 00:00:00'),
(87, 'valishere2', 'Go to wix dot com and create your most beautiful website, today!!!', '0000-00-00 00:00:00'),
(88, 'valishere2', 'sdfsr', '0000-00-00 00:00:00'),
(89, 'valishere2', 'swfsdvc', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `nom`, `motDePasse`) VALUES
(1, 'koko', 'root'),
(2, 'korian', 'dada'),
(3, 'thom', 'daad'),
(4, 'vinc', 'daad'),
(5, 'syl', 'root'),
(6, 'Lau', 'lolo'),
(7, 'delphine', 'rot'),
(8, 'valerie', 'root'),
(9, 'root', 'root'),
(10, 'Valishere', 'root'),
(11, 'valishere2', 'root');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chatMessage`
--
ALTER TABLE `chatMessage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chatMessage`
--
ALTER TABLE `chatMessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
