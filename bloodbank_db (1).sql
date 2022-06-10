-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 juin 2022 à 17:31
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bloodbank_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `blood_inventory`
--

CREATE TABLE `blood_inventory` (
  `id` int(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `volume` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = in -stock,2=out',
  `donor_id` int(30) NOT NULL,
  `request_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blood_inventory`
--

INSERT INTO `blood_inventory` (`id`, `blood_group`, `volume`, `status`, `donor_id`, `request_id`, `date_created`) VALUES
(1, 'O+', 450, 1, 3, 0, '2020-10-23 00:00:00'),
(3, 'B-', 450, 1, 2, 0, '2020-10-01 00:00:00'),
(4, 'O-', 250, 1, 1, 0, '2022-05-12 00:00:00'),
(5, 'AB+', 450, 1, 2, 0, '2022-05-12 00:00:00'),
(6, 'A+', 0, 1, 0, 0, '0000-00-00 00:00:00'),
(7, 'A+', 123, 1, 2, 0, '2022-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `donors`
--

CREATE TABLE `donors` (
  `id` int(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donors`
--

INSERT INTO `donors` (`id`, `blood_group`, `name`, `address`, `contact`, `email`, `date_created`) VALUES
(2, 'B-', 'George Wilson', 'Sample address', '8747808787', 'gwilson@sample.com', '2020-10-23 09:27:54'),
(3, 'O+', 'Claire Blake', 'Sample Address', '+6948 8542 623', 'cblake@sample.com', '2020-10-23 09:28:14'),
(5, 'A+', 'hamid hassan', 'marrakech', '064555544545455', 'hamid@gmail.com', '2022-05-21 17:46:46'),
(7, 'O-', 'stoph', 'hay lalla meriem bloc 121', '0649126057', 'stoph@gmail.com', '2022-05-19 00:00:00'),
(8, 'O-', 'yassineyns', 'hay lalla meriem', '0606666006', 'yns@gmail.com', '2022-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `handedover_request`
--

CREATE TABLE `handedover_request` (
  `id` int(30) NOT NULL,
  `request_id` int(30) NOT NULL,
  `picked_up_by` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `handedover_request`
--

INSERT INTO `handedover_request` (`id`, `request_id`, `picked_up_by`, `date_created`) VALUES
(1, 2, 'Patient Brother', '2020-10-23 13:23:42');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `id` int(30) NOT NULL,
  `ref_code` varchar(20) NOT NULL,
  `patient` text NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `volume` float NOT NULL,
  `physician_name` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= pending,1= approved',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `requests`
--

INSERT INTO `requests` (`id`, `ref_code`, `patient`, `blood_group`, `volume`, `physician_name`, `status`, `date_created`) VALUES
(2, 'Zfpshiky', 'Mike Williams', 'O+', 450, 'Doctor John', 1, '2020-10-23 10:46:26');

-- --------------------------------------------------------

--
-- Structure de la table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Blood Bank Management System', 'info@sample.comm', '+6948 8542 623', '1603344720_1602738120_pngtree-purple-hd-business-banner-image_5493.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 3 COMMENT '1=Admin,2=Staff, 3= subscriber'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '$2y$10$9ppWfUCkeTDxcW7681TYwOYk5p27tBIBCNIfh2d3dtD3zGgsmJlLq', 1),
(2, 'administrator', 'yassine', 'cb7ceaa731763f2dd1b45584e02ce743', 1),
(3, 'hassan', 'hassan', '118c5c147f6d3136cd66005c14e5dd20', 1),
(4, 'administrator', 'yassineelboustani', 'yassine1234', 3),
(5, 'administrator', 'mumanddad', '$2y$10$q8TyMsmr3F0bZLrb8D7fv.zQmgOmD3heJXwkdBewp5XTcKdk47yHC', 3),
(7, 'yassine', 'yassine', '$2y$10$L.jfNFB52HBm41OjcRKwtO/jNyCu7GBvyQ4NrrZ44WCNh.xPVaona', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blood_inventory`
--
ALTER TABLE `blood_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `handedover_request`
--
ALTER TABLE `handedover_request`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blood_inventory`
--
ALTER TABLE `blood_inventory`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `handedover_request`
--
ALTER TABLE `handedover_request`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
