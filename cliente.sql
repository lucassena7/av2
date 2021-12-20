-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2021 às 01:33
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faeterj3dawav2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `endereco` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `postalCode` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `pais` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `passaporte` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` text COLLATE latin1_general_ci NOT NULL,
  `dataNascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `endereco`, `postalCode`, `pais`, `cpf`, `passaporte`, `email`, `dataNascimento`) VALUES
(3, 'jose pereira da silva', 'rua americana, 157', '12345-123', 'Brasil', '12345678903', 'CV12345', 'tonho@email.com', '2000-06-22'),
(7, 'jose pereira da silva', 'america, 157', '12345-123', 'Brasil', '12345678901', 'CV12345', 'auhs@hotmail.com', '2000-06-12'),
(8, 'teste', 'rua das flores,39', '123-12345', 'Brasil', '32165498702', 'VC12365', 'teste@email.com', '1998-10-11'),
(11, 'Amanda Lime', 'rua do chafariz,30', '11114-789', 'Brasil', '14578965478', 'VC758987', 'amanda@chafariz.com', '2000-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
