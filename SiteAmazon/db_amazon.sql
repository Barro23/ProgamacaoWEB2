-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2023 às 22:32
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
-- Banco de dados: `db_amazon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemvenda`
--

CREATE TABLE `itemvenda` (
  `id` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `descricao`, `quantidade`, `valor`, `status`, `img`) VALUES
(15, 'cachaça', 3, '222', '1', 'https://m.media-amazon.com/images/I/81O1f10PlML.__AC_SY445_SX342_QL70_ML2_.jpg'),
(16, 'outro perfume', 3, '3', 'e', 'https://m.media-amazon.com/images/I/51ntsLJzpPL._AC_SX679_.jpg'),
(17, 'roupa foda', 3, '200', '1', 'https://images-americanas.b2w.io/produtos/1668563364/imagens/conjunto-roupa-social-infantil-masculino-menino-bebe-festa-09br/1668563372_1_large.jpg'),
(18, 'roupa foda 2', 4, '4', '4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdy81q4BarnX2T91ZcrUGkZJvhOIl688hjeU-wwirCioERVCUNjfN8kxN7HLrmS4uW554&usqp=CAU'),
(19, 'controle pika', 4, '200', '1', 'https://m.media-amazon.com/images/I/51g+nwQxi7L._AC_SX522_.jpg'),
(20, 'controle pika 2', 2, '222', '1', 'https://images.tcdn.com.br/img/img_prod/1066780/controle_bluetooth_volkano_vx_gaming_ps4_ps3_pc_preto_e_vermelho_vx_132_bkrd_6753_1_37493160776e854742b205c099ae81a8.jpeg'),
(21, 'controle tv pika', 56, '33', '1', 'https://padihey.com.br/wp-content/uploads/2022/05/d5853c313b6e036d52eb1eaf05beeafb.jpg'),
(22, 'alexa', 44, '2232', '1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUfOU-TNxE_c9CTjGguF0Bpa3xC4iptlgpcA&usqp=CAU'),
(23, 'carrro', 2, '2000', '1', 'data:image/jpeg;base64,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'),
(24, 'carroça', 5, '1000', '1', 'https://http2.mlstatic.com/D_NQ_NP_710376-MLB49613821786_042022-V.jpg'),
(25, 'peixe foda', 5, '999.999', '1', 'https://www.kindpng.com/picc/m/28-287689_bolsonaro-peixe-semcamisa-meme-bolsonaropresidente2018-bolsonaro-png-com.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'amazon', 'amazon@gmail', 'amazon');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produto` (`id_produto`),
  ADD KEY `fk_venda` (`id_venda`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itemvenda`
--
ALTER TABLE `itemvenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD CONSTRAINT `fk_venda` FOREIGN KEY (`id_venda`) REFERENCES `venda` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
