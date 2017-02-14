-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 10/02/2017 às 15:00
-- Versão do servidor: 5.5.49-0+deb7u1
-- Versão do PHP: 5.4.45-0+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `EChat`
--
CREATE DATABASE IF NOT EXISTS `EChat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `EChat`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text NOT NULL,
  `data` date NOT NULL,
  `fk_sala` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_msg`),
  KEY `fk_sala` (`fk_sala`),
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_usuario_2` (`fk_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2298 ;

--
-- Fazendo dump de dados para tabela `mensagem`
--

INSERT INTO `mensagem` (`id_msg`, `msg`, `data`, `fk_sala`, `fk_usuario`) VALUES
(1930, 'AlÃ´o', '2017-02-10', 131, 383),
(1933, 'E nÃ£o Ã© q funciona mesmo', '2017-02-10', 131, 383),
(1935, 'Jordi Ã© newba', '2017-02-10', 131, 385),
(2032, 'oh loco', '2017-02-10', 131, 385),
(2035, 'Oh loco', '2017-02-10', 133, 385),
(2036, '" DROP table usuarios;', '2017-02-10', 133, 385),
(2037, 'clear nÃ£o funciona', '2017-02-10', 131, 385),
(2038, '"; DROP TABLE usuarios;', '2017-02-10', 133, 385),
(2293, 'gu', '2017-02-10', 133, 405),
(2294, 'aah nao', '2017-02-10', 133, 405),
(2295, '1', '2017-02-10', 133, 407),
(2296, 'bababa', '2017-02-10', 133, 405),
(2297, 'eai', '2017-02-10', 133, 405);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `id_sala` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_sala`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=138 ;

--
-- Fazendo dump de dados para tabela `sala`
--

INSERT INTO `sala` (`id_sala`, `nome`, `tipo`, `data`, `fk_usuario`) VALUES
(131, 'Front', 'publico', '2017-02-10', 383),
(133, 'Sala secreta', 'publico', '2017-02-10', 385);

-- --------------------------------------------------------

--
-- Estrutura para tabela `salas_usuarios`
--

CREATE TABLE IF NOT EXISTS `salas_usuarios` (
  `id_salas` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  KEY `id_usuarios` (`id_usuarios`),
  KEY `id_salas` (`id_salas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `salas_usuarios`
--

INSERT INTO `salas_usuarios` (`id_salas`, `id_usuarios`) VALUES
(131, 383),
(131, 385),
(133, 385),
(133, 405),
(133, 407);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `nome_usuario` (`nome`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=408 ;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`) VALUES
(392, '123'),
(405, '543'),
(389, 'batat'),
(383, 'Bruno'),
(396, 'Gu'),
(398, 'Gu123'),
(390, 'gustavo'),
(407, 'h1'),
(385, 'relesbao');

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `mensagem_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idsala_ibfk_1` FOREIGN KEY (`fk_sala`) REFERENCES `sala` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_2` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sala_ibfk_3` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `salas_usuarios`
--
ALTER TABLE `salas_usuarios`
  ADD CONSTRAINT `salas_usuarios_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salas_usuarios_ibfk_1` FOREIGN KEY (`id_salas`) REFERENCES `sala` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
