-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Abr-2021 às 23:41
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chatapp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, '257260160', '1171249814', 'Salve cara, beleza?'),
(2, '1171249814', '257260160', 'Opa, tudo sim'),
(3, '257260160', '1171249814', 'Como vai a vida?'),
(4, '1171249814', '257260160', 'Tranquila'),
(5, '257260160', '1171249814', 'Que bom testador'),
(6, '1171249814', '257260160', 'Mas eu que sou o testador'),
(7, '257260160', '1171249814', 'Essa vai ser a ultima mensagem Adriel'),
(15, '1417767906', '257260160', 'Salve random'),
(16, '1171249814', '257260160', 'Obrigado tester, estarei indo.'),
(14, '257260160', '1417767906', 'salve'),
(13, '257260160', '1171249814', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fName`, `lName`, `email`, `password`, `image`, `status`) VALUES
(2, 257260160, 'Adriel', 'Cavalcante', 'a.a@a.com', '12345678', '1618675478bannerlinhas.png', 'Offline agora'),
(3, 1171249814, 'Testador', 'Teste', 'teste@gmail.com', '1234', '1618678205telafinal1.jpg', 'Online agora'),
(4, 1417767906, 'Random', 'aleatorio', 'random@gmail.com', '123456', '1618701855barco.png', 'Online agora');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
