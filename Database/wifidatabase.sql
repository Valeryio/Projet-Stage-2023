-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2023 at 08:24 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wifidatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `id_utilisateurs` int(11) DEFAULT NULL,
  `id_offre` int(11) DEFAULT NULL,
  `date_debut_abonnement` datetime DEFAULT NULL,
  `statut` varchar(8) DEFAULT NULL,
  `date_fin_abonnement` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historique`
--

INSERT INTO `historique` (`id`, `id_utilisateurs`, `id_offre`, `date_debut_abonnement`, `statut`, `date_fin_abonnement`) VALUES
(1, 1, 1, '2023-09-05 15:47:59', 'En cours', '2024-01-01 08:00:00'),
(2, 1, 2, '2023-09-04 15:48:15', 'Terminé', '2023-09-04 16:29:54'),
(3, 2, 1, '2023-09-04 15:48:22', 'Terminé', '2021-01-01 08:00:00'),
(4, 2, 4, '2023-09-04 15:49:38', 'Terminé', '2023-09-04 16:29:54'),
(5, 3, 1, '2023-09-04 17:44:14', 'Terminé', '2023-09-04 18:09:06'),
(6, 3, 2, '2023-12-02 00:00:00', 'Terminé', '2023-09-05 12:05:29'),
(7, 3, 2, '2023-12-03 00:00:00', 'En cours', '2024-09-05 12:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

CREATE TABLE `offres` (
  `id` int(11) NOT NULL,
  `quantite` varchar(8) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `duree` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`id`, `quantite`, `prix`, `duree`) VALUES
(1, '1 Go', 750, 1),
(2, '2 Go', 1500, 2),
(3, '3 Go', 2250, 3),
(4, '4 Go', 3000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) DEFAULT NULL,
  `prenom` varchar(48) DEFAULT NULL,
  `mail` varchar(48) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `mail`, `password`, `date_inscription`) VALUES
(1, 'DOUMATE', 'Linson', 'yonnival0.8@gmail.com', '$2y$10$N/4GH0bRU15s2QX87qfMXuNE1tw3kNM9Q0n3uMewsOROFyAjH93mK', '2023-08-28 10:40:47'),
(2, 'HOUNGBETODE', 'Ange', 'moberenge@gmail.com', '$2y$10$L84U0xu8Ifb15O8l4PNvnuCdOESvBWZmErXaBaGNPKsKj2tuudRSi', '2023-09-01 09:01:02'),
(3, 'NDAH', 'claudel', 'ndaclaudel@gmail.com', '$2y$10$4dSeNb0bbcqOqAkkRqFmvOTYBh/D7Hb1UqmqaMPap3lmqX1w9SJyS', '2023-09-04 16:32:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateurs` (`id_utilisateurs`),
  ADD KEY `id_offres` (`id_offre`);

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `id_offres` FOREIGN KEY (`id_offre`) REFERENCES `offres` (`id`),
  ADD CONSTRAINT `id_utilisateurs` FOREIGN KEY (`id_utilisateurs`) REFERENCES `utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
