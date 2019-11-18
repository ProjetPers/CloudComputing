-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour bd_ebank
CREATE DATABASE IF NOT EXISTS `bd_ebank` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_ebank`;

-- Listage de la structure de la table bd_ebank. comptes
CREATE TABLE IF NOT EXISTS `comptes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `numero_compte` varchar(50) DEFAULT NULL,
  `solde` double DEFAULT NULL,
  `devise` varchar(50) DEFAULT NULL,
  `nomcomplet` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_compte` (`numero_compte`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Listage des données de la table bd_ebank.comptes : ~2 rows (environ)
/*!40000 ALTER TABLE `comptes` DISABLE KEYS */;
INSERT INTO `comptes` (`id`, `date_creation`, `numero_compte`, `solde`, `devise`, `nomcomplet`, `adresse`, `telephone`) VALUES
	(1, '2019-11-10 16:31:55', '1234567890781227', 7136, 'USD', 'Ruffin NTAMBA', 'Chez moi dans mon coin sombre', 976440760),
	(2, '2019-11-10 17:59:51', '1234567890781226', 808, 'USD', 'Inconito', 'Chez luidans mon coin sombre', 976440768);
/*!40000 ALTER TABLE `comptes` ENABLE KEYS */;

-- Listage de la structure de la table bd_ebank. transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datecreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `numerocompte` varchar(50) DEFAULT NULL,
  `numerodesti` varchar(50) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `typetrans` int(1) NOT NULL DEFAULT '0',
  `ref` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Listage des données de la table bd_ebank.transactions : ~0 rows (environ)
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`id`, `datecreation`, `numerocompte`, `numerodesti`, `montant`, `typetrans`, `ref`) VALUES
	(1, '2019-11-10 18:14:06', '1234567890781227', '1234567890781226', 567, 1, '5dc8374ec387b'),
	(2, '2019-11-10 18:15:51', '1234567890781227', '1234567890781226', 20, 1, '5dc837b776e01'),
	(3, '2019-11-10 18:17:19', '1234567890781227', '1234567890781226', 70, 1, '5dc8380fd9655'),
	(4, '2019-11-10 18:20:10', '1234567890781227', '1234567890781226', 45, 1, '5dc838ba46cc6'),
	(5, '2019-11-10 18:34:20', '1234567890781227', '1234567890781226', 56, 1, '5dc83c0cc8b7c');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Listage de la structure de la table bd_ebank. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) DEFAULT NULL,
  `password` text,
  `flag` datetime DEFAULT NULL,
  `compte` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table bd_ebank.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `pseudo`, `password`, `flag`, `compte`) VALUES
	(1, '1234567890781227', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '2019-11-10 15:30:23', '1234567890781227');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
