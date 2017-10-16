-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 03-Out-2017 às 14:19
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
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
-- Estrutura da tabela `comentario`
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
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `idConteudo` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `permissao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dica`
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
-- Extraindo dados da tabela `dica`
--

INSERT INTO `dica` (`idDica`, `idConteudo`, `idUsuario`, `titulo`, `descricao`, `data`, `permissao`) VALUES
(9, NULL, 47, 'Skoob', 'Skoob é uma rede social para leitores. Funciona como uma estante de livros onde voçê pode colocar os livros que já leu e aqueles que ainda deseja.\r\nhttps://www.skoob.com.br/', '2017-10-03 11:27:24', 1),
(10, NULL, 47, 'Estante Virtuall', 'O melhor lugar para comprar livros novos, seminovos e usados na internet.\r\nlink: https://www.estantevirtual.com.br/', '2017-10-03 11:33:10', 1),
(11, NULL, 47, 'Open Library', 'Projeto que pretende catalogar todos os livros publicados no mundo e disponibilizá-los para download.\r\nhttp://openlibrary.org', '2017-10-03 16:11:44', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
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
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`idLivro`, `idconteudo`, `idUsuario`, `titulo`, `autor`, `descricao`, `data`, `permissao`, `foto`) VALUES
(40, NULL, 47, 'O Cortiço', 'Aluísio Azevedo', 'O Cortiço é um livro que foi escrito no ano de 1890, por Aluísio de Azevedo. Na época do seu lançamento, chegou a ofuscar livros de autores como Machado de Assis, devido a pertencer a escola naturalista, de grande prestígio na Europa. Aluísio de Azevedo é natural de São Luís, Maranhão. Viveu entre os anos de 1857 e 1913. É um dos principais representantes da escola do naturalismo.\r\nA obra busca recriar a realidade dos agrupamentos humanos sujeitos à influência da raça, do meio e do momento histórico. O predomínio dos instintos no comportamento do indivíduo, a força da sensualidade da mulher mestiça, o meio como fator determinante do comportamento são algumas das teses naturalistas defendidas pelo autor ao lado de denúncias sociais. O protagonista do romance é o próprio cortiço, onde se acotovelam lavadeiras, trabalhadores de pedreira, malandros e viúvas pobres.\r\n\r\n\r\n', '2017-10-03 11:14:45', 1, 'jpg'),
(41, NULL, 47, 'Mayombe', 'Pepetela', ' Publicado originalmente em 1980, ´Mayombe´ foi escrito durante a participação de Pepetela na guerra de libertação de Angola, e retrata o cotidiano dos guerrilheiros do MPLA (Movimento Popular de Libertação de Angola) em luta contra as tropas portuguesas. O romance se propõe a abordar não somente as ações, mas os sentimentos e reflexões daquele grupo, as contradições e conflitos que permeavam sua organização e as relações estabelecidas entre pessoas que buscavam construir uma nova Angola livre da colonização.\r\n', '2017-10-03 11:17:27', 1, 'jpg'),
(42, NULL, 47, 'Sagarana', 'João Guimarães Rosa', 'Sagarana foi o primeiro livro de João Guimarães Rosa (1908-1967) e data de 1946. O livro é composto por nove contos que enveradam o leitor na atmosfera regionalista: O burrinho pedrês, A volta do marido pródigo, Sarapalha, Duelo, Minha gente, São Marcos, Corpo fechado, conversa de bois e A hora e a vez de Augusto Matraca. As histórias do livro se passam no interior de Minas Gerais, estado natal do autor, cenário que esteve presente na maioria das obras que escreveu. O livro trata de temas comuns ao autor como a aventura, a morte, os animais metaforizados em gente, as reflexões subjetivas e espiritualistas.', '2017-10-03 16:48:27', 1, 'jpg'),
(43, NULL, 47, 'Vidas Secas', 'Graciliano Ramos', 'Em Vidas secas, a grande obra regionalista modernista, o drama social do Nordeste é representado nas figuras humanas marcadas pela miséria e pela seca da região.', '2017-10-03 16:00:42', 1, 'jpg'),
(44, NULL, 47, 'Sagarana', 'João Guimarães Rosa', 'Com contos narrados em primeira e em terceira pessoa, esta coletânea de Guimarães Rosa representa os ideais desta fase, chamando a atenção do leitor para tudo o que pode acontecer no ambiente do sertão mineiro. Com o seu regionalismo universalizante, Rosa aborda tanto os elementos característicos de um local determinado quanto questões que transcendem o sertão, podendo atingir todo e qualquer leitor.\r\n', '2017-10-03 17:03:47', 1, 'jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificar`
--

CREATE TABLE `notificar` (
  `idNotificar` int(11) NOT NULL,
  `idConteudo` int(11) DEFAULT NULL,
  `descricao` text,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

CREATE TABLE `texto` (
  `idTexto` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `permissao` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`idTexto`, `titulo`, `autor`, `permissao`, `texto`) VALUES
(1, 'Orgulho Machadiano', 'Larissa Cristine Ferreira', 1, '\r\n\r\nBrás Cubas, o defunto-autor de Machado de Assis, diz em suas "Memórias Póstumas" que não teve filhos e não transmitiu a nenhuma criatura o legado da nossa miséria. Talvez hoje ele percebesse acertada sua decisão: a postura de muitos brasileiros frente a intolerância religiosa é uma das faces mais perversas de uma sociedade em desenvolvimento. Com isso, surge a problemática do preconceito religioso que persiste intrinsecamente ligado à realidade do país, seja pela insuficiência de leis, seja pela lenta mudança de mentalidade social.\r\n\r\nÉ indubitável que a questão constitucional e sua aplicação estejam entre as causas do problema. Conforme Aristóteles, a poética deve ser utilizada de modo que, por meio da jsutiça, o equilíbrio seja alcançado na sociedade. De maneira análoga, é possível perceber que, no Brasil, a perseguição religiosa rompe essa harmonia; haja vista que, embora esteja previsto na Constituição o princípio da isonomia, no qual todos devem ser tratados igualmente, muitos cidadãos se utilizam da inferioridade religiosa para externar ofensas e excluir socialmente pessoas de religiões diferentes.\r\n\r\nSegundo pesquisas, a religião afro-brasileira é a principal vítima de discriminação, destacando-se o preconceito religioso como o principal impulsionador do problema. De acordo com Durkheim, o fato social é a maneira coletiva de agr e de pensar. Ao seguir essa linha de pensamento, observa-se que a preparação do preconceito religioso se encaixa na teoria do sociólogo, uma vez que se uma criança vive em uma família com esse comportamento, tende a adotá-lo também por conta da vivência em grupo. Assim, a continuação do pensamento da inferioridade religiosa, transmitido de geração a geração, funciona como base forte dessa forma de preconceito, perpetuando o problema no Brasil.\r\n\r\nInfere-se, portanto, que a intolerância religiosa é um mal para a sociedade brasileira. Sendo assim, cabe ao Governo Federal construir delegacias especializadas em crimes de ódio contra religião, a fim de atenuar a prática do preconceito na sociedade, além de aumentar a pena para quem o praticar. Ainda cabe à escola criar palestras sobre as religiões e suas histórias, visando a informar crianças e jovens sobre as diferenças religiosas no país, diminuindo, assim, o preconceito religioso. Ademais, a sociedade deve se mobilizar em redes sociais, com o intuito de conscientizar a população sobre os males da intolerância religiosa. Assim, poder-se-á transformar o Brasil em um país desenvolvido socialmente, e criar um legado de que Brás Cubas pudesse se orgulhar.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `sobrenome`, `nomeDeUsuario`, `email`, `senha`, `perfil`, `status`) VALUES
(47, 'Brian', 'Messias', 'Distributido', 'brianmessias1@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 1, 1),
(54, 'teste', 'teste', 'teste', 'cefetatena2017@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 0, 1),
(55, 'Birma', 'Siveris', 'birmasiveris', 'birmasiveris@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 0, 1),
(56, 'Luiz', 'Henrique', 'luizh', 'luizhenrique@hotmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 0, 0),
(57, 'Brian Henrique', 'Nessias', 'Keilla', 'brian_messias@live.com', '7c222fb2927d828af22f592134e8932480637c0d', 0, 1);

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
  MODIFY `idDica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `notificar`
--
ALTER TABLE `notificar`
  MODIFY `idNotificar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `texto`
--
ALTER TABLE `texto`
  MODIFY `idTexto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`idConteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Limitadores para a tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `dica`
--
ALTER TABLE `dica`
  ADD CONSTRAINT `dica_ibfk_1` FOREIGN KEY (`idConteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`idconteudo`) REFERENCES `conteudo` (`idConteudo`);

--
-- Limitadores para a tabela `notificar`
--
ALTER TABLE `notificar`
  ADD CONSTRAINT `notificar_ibfk_1` FOREIGN KEY (`idConteudo`) REFERENCES `conteudo` (`idConteudo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
