-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2017 at 10:00 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atena`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idConteudo` int(11) DEFAULT NULL,
  `descricao` text,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conteudo`
--

CREATE TABLE `conteudo` (
  `idConteudo` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `permissao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dica`
--

CREATE TABLE `dica` (
  `idDica` int(11) NOT NULL,
  `idConteudo` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descricao` text,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `permissao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dica`
--

INSERT INTO `dica` (`idDica`, `idConteudo`, `idUsuario`, `titulo`, `descricao`, `data`, `permissao`) VALUES
(4, NULL, 33, 'aaaaaaaaaaa', 'aaaaaaaaaaaabbbbbbb', '2017-09-23 23:27:06', 0),
(5, NULL, 33, 'LALALALALLA', 'LALALALALLALAALALALLALAALLALALLA', '2017-09-23 23:37:05', 1),
(6, NULL, 47, 'teste', 'teste teste teste teste teste teste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste testeteste teste teste teste teste', '2017-09-23 23:27:12', 0),
(7, NULL, 47, 'TESTE', 'TESTE TESTE TESTE TESTE TESTE TESTE', '2017-09-23 23:27:16', 0),
(8, NULL, 47, 'BRIAN', 'BRIAN BRIAN BRIAN BRIAN BRIAN BRIAN', '2017-09-23 23:39:04', 3);

-- --------------------------------------------------------

--
-- Table structure for table `livro`
--

CREATE TABLE `livro` (
  `idLivro` int(11) NOT NULL,
  `idconteudo` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `descricao` text,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `permissao` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livro`
--

INSERT INTO `livro` (`idLivro`, `idconteudo`, `idUsuario`, `titulo`, `autor`, `descricao`, `data`, `permissao`, `foto`) VALUES
(29, NULL, 33, 'BRIAN', 'BRIAN', 'BRIAN BRIAN BRIAN BRIAN BRINA ', '2017-09-23 23:06:29', 1, 'png'),
(32, NULL, 47, 'Vitin', 'ola', 'ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola ola', '2017-09-23 23:23:10', 0, '28'),
(34, NULL, 47, 'oioi', 'oioioioioioio', 'oioioiioiooiioioioiooioioio', '2017-09-23 23:21:53', 1, '11'),
(35, NULL, 47, 'lalalallaallall', '\'llalalalalalalll', 'lallalalalalalalalalalalalalalalallalalallalalla', '2017-09-23 23:21:30', 1, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notificar`
--

CREATE TABLE `notificar` (
  `idNotificar` int(11) NOT NULL,
  `idConteudo` int(11) DEFAULT NULL,
  `descricao` text,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `texto`
--

CREATE TABLE `texto` (
  `idTexto` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `permissao` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texto`
--

INSERT INTO `texto` (`idTexto`, `titulo`, `autor`, `permissao`, `texto`) VALUES
(1, '3', '3', 0, '3\r\n'),
(2, 'aloalo', 'aloalo', 0, 'aloalo');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `nomeDeUsuario` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` char(40) NOT NULL,
  `perfil` tinyint(1) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `sobrenome`, `nomeDeUsuario`, `email`, `senha`, `perfil`, `status`) VALUES
(47, 'Brian', 'Messias', 'Distributido', 'brianmessias1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idConteudo` (`idConteudo`);

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`idConteudo`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `dica`
--
ALTER TABLE `dica`
  ADD PRIMARY KEY (`idDica`),
  ADD KEY `idConteudo` (`idConteudo`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idLivro`),
  ADD KEY `idConteudo` (`idconteudo`);

--
-- Indexes for table `notificar`
--
ALTER TABLE `notificar`
  ADD PRIMARY KEY (`idNotificar`),
  ADD KEY `idConteudo` (`idConteudo`);

--
-- Indexes for table `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`idTexto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `nomeDeUsuario` (`nomeDeUsuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `idConteudo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dica`
--
ALTER TABLE `dica`
  MODIFY `idDica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `notificar`
--
ALTER TABLE `notificar`
  MODIFY `idNotificar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `texto`
--
ALTER TABLE `texto`
  MODIFY `idTexto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`idConteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Constraints for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Constraints for table `dica`
--
ALTER TABLE `dica`
  ADD CONSTRAINT `dica_ibfk_1` FOREIGN KEY (`idConteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Constraints for table `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`idconteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Constraints for table `notificar`
--
ALTER TABLE `notificar`
  ADD CONSTRAINT `notificar_ibfk_1` FOREIGN KEY (`idConteudo`) REFERENCES `conteudo` (`idConteudo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
