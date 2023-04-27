-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2023 às 20:48
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_mycaneta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_musica`
--

CREATE TABLE `tb_musica` (
  `id` int(11) NOT NULL,
  `musica` varchar(50) NOT NULL,
  `letra` text NOT NULL,
  `duracao` varchar(25) NOT NULL,
  `link` varchar(70) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_musica`
--

INSERT INTO `tb_musica` (`id`, `musica`, `letra`, `duracao`, `link`, `img`) VALUES
(51, 'caneta Azul', 'Caneta azul, azul caneta Caneta azul tá marcada com minha letra Caneta azul, azul caneta Caneta azul tá marcada com minha letra  Todo dia eu viajo pra o colégio Com uma caneta azul e uma caneta amarela Eu perdi minha caneta e eu peço Por favor, quem encontrou, me entrega ela  Caneta azul, azul caneta Caneta azul tá marcada com minha letra  A professora, ela veio brigar comigo Porque eu perdi a última caneta que eu tinha Não brigue, professora, porque eu vou comprar outra canetinha  Caneta azul, azul caneta Caneta azul tá marcada com minha letra', '2 min', 'https://youtu.be/yISRQnew6Pg', 'https://i.pinimg.com/474x/43/35/66/4335663221a5f7c09297cae06edc9cfa.jpg'),
(52, 'ela é muito é vagabunda', 'Ela é muito vagabunda Vagabunda ela é Ela deixa o marido em casa E vai ir pro cabaré Ela deixa o marido em casa E vai ir pro cabaré Ela é muito vagabunda Vagabunda ela é Ela deixa o marido em casa E vai ir pro cabaré Ela deixa o marido em casa E vai ir pro cabaré Eu digo o que aconteceu comigo Ela passava em frente os amigo O povo começava a falar Aí eu larguei ela pra largarem de comentar Ela é muito vagabunda Vagabunda ela é Ela deixa o marido em casa E vai ir pro cabaré Ela deixa o marido em casa E vai ir pro cabaré', 'fesfef', 'efefef', 'https://i.pinimg.com/474x/43/35/66/4335663221a5f7c09297cae06edc9cfa.jpg'),
(53, 'dwdd', 'dwdwd', 'dawdawdw', 'dwdwadaw', 'https://i.pinimg.com/474x/43/35/66/4335663221a5f7c09297cae06edc9cfa.jpg'),
(54, 'fefsef', 'fefsefsefsfsef', 'fesfef', 'efefef', 'https://media.sketchfab.com/models/56fb59e4318745c0ad18afb2b173c389/thumbnails/321cc534dacf45aa81f6f9722ad703a3/3e12873ad28d4b18a7eb5f51e7b07257.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_musica`
--
ALTER TABLE `tb_musica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_musica`
--
ALTER TABLE `tb_musica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
