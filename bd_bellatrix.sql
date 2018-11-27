-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 26/11/2018 às 09:03
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_bellatrix`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comenta`
--

CREATE TABLE `comenta` (
  `fk_posts_Cod_post` int(11) DEFAULT NULL,
  `fk_usuario_Id` int(11) DEFAULT NULL,
  `data_com` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `texto` varchar(8000) DEFAULT NULL,
  `id_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE `imagens` (
  `titulo_imagem` varchar(100) DEFAULT NULL,
  `caminho_imagem` blob,
  `Cod_imagem` int(11) NOT NULL,
  `descimagem` varchar(300) DEFAULT NULL,
  `fk_posts_Cod_post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imagens`
--

INSERT INTO `imagens` (`titulo_imagem`, `caminho_imagem`, `Cod_imagem`, `descimagem`, `fk_posts_Cod_post`) VALUES
('Gal?xia de Andr?meda', NULL, 0, 'Imagem da gal?xia de Andr?meda', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `Cod_post` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `texto_post` varchar(8000) DEFAULT NULL,
  `fk_tema_post_id_tema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `posts`
--

INSERT INTO `posts` (`Cod_post`, `titulo`, `texto_post`, `fk_tema_post_id_tema`) VALUES
(4, 'Guilherme Cipriano esteve aqui :)', 'Gosto de ajudar as pessoas.', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tema_post`
--

CREATE TABLE `tema_post` (
  `desc_tema` varchar(300) DEFAULT NULL,
  `id_tema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `tema_post`
--

INSERT INTO `tema_post` (`desc_tema`, `id_tema`) VALUES
('Estrelas', 0),
('Cometas', 1),
('Planetas', 2),
('Sat?lites', 3),
('Gal?xias', 4),
('Nebulosas', 5),
('Hist?ria', 6),
('Sistema Solar', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `Login_usu` varchar(100) DEFAULT NULL,
  `Senha_usu` varchar(100) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`Login_usu`, `Senha_usu`, `Email`, `Nome`, `Id`) VALUES
('nhjgfh', '2345', 'hth@hbfg', 'gaby7', 1),
('nhjgfh', '2345', 'hth@hbfg', 'gaby7', 2),
('bruno', '123', 'bruno@gmail.com', 'bruno', 3),
('bruno', '123', 'bruno@gmail.com', 'bruno', 4);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `comenta`
--
ALTER TABLE `comenta`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `FK_comenta_1` (`fk_posts_Cod_post`),
  ADD KEY `FK_comenta_2` (`fk_usuario_Id`);

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`Cod_imagem`),
  ADD KEY `FK_imagens_2` (`fk_posts_Cod_post`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Cod_post`),
  ADD KEY `FK_posts_2` (`fk_tema_post_id_tema`);

--
-- Índices de tabela `tema_post`
--
ALTER TABLE `tema_post`
  ADD PRIMARY KEY (`id_tema`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `Cod_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
