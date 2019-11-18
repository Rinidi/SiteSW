-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 18-Nov-2019 às 10:51
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancosmartw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `ver` int(1) DEFAULT NULL,
  `icon` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `data`, `comentario`, `ver`, `icon`) VALUES
(7, 'Renan', 'renanpiranguinho@gmail.com', '2019-11-15', 'Que site lindo!', 1, 1),
(8, 'Lucas', 'lucas@gmail.com', '2019-11-15', 'Muito lindo mesmo!', 1, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

DROP TABLE IF EXISTS `estabelecimento`;
CREATE TABLE IF NOT EXISTS `estabelecimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Rede ilustre Supermercado Flora', 'flora123', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `idProd` int(11) NOT NULL AUTO_INCREMENT,
  `hex` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(70) NOT NULL,
  `validade` date NOT NULL,
  `fabricacao` date NOT NULL,
  `descricao` text NOT NULL,
  `preco` float NOT NULL,
  `textoCompleto` varchar(150) NOT NULL,
  PRIMARY KEY (`idProd`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProd`, `hex`, `nome`, `imagem`, `validade`, `fabricacao`, `descricao`, `preco`, `textoCompleto`) VALUES
(2, '76 8d f2 08', 'Detergente', 'http://192.168.43.179/Projetos/SmartWalletWeb/img/ypeneutro500ml.png', '2025-05-06', '2018-07-15', 'Detergente neutro Ype. Perfeito para lavar loucas', 2.55, 'O detergente Ype Neutro e um sabao liquido feito para lavagem de loucas em geral e limpeza de superficies. '),
(4, 'c9 b5 ca 63', 'Papel Higienico Neve', 'http://192.168.43.179/Projetos/SmartWalletWeb/img/pneve.png', '2021-01-20', '2019-06-20', 'Papel higienico dupla folha Neve', 12.45, 'A marca de papel higienico que melhor entende sua intimidade e evolui sua experiencia no banheiro.'),
(5, '04 27 69 22 ee 64 80', 'Bolacha', '', '0000-00-00', '0000-00-00', '1', 2.5, 'AAAAAAAAAAAAAAAAA'),
(6, '', 'Bolacha', '', '0000-00-00', '0000-00-00', '2', 2.5, 'AAAAAAAAAAAAAAAAA'),
(7, '', 'Bolacha', '', '0000-00-00', '0000-00-00', '3', 2.5, 'AAAAAAAAAAAAAAAAA'),
(8, '', 'Biscoito Negresco', '../img/prods/bolacha-negresco.png', '2020-04-24', '2019-08-21', '140g, Biscoito sabor chocolate com recheio sabor baunilha, contem aromatizante sintetico identico ao natural', 2.19, 'Contem derivados de leite, soja, trigo, centeio e aveia. Pode conter cevada. Contem lactose. Contem gluten.'),
(9, '', 'Biscoito Tortuguita', '../img/prods/cookie-tortuguita.png', '2020-07-27', '2019-04-15', '86g, Biscoito sabor baunilha com recheio sabor chocolate enriquecido com vitaminas.', 1.99, 'Contem aromatizantes sintetico identico ao natural. Mantenha em local seco e arejado.'),
(10, '', 'Sabonete Francis aromachologie', '../img/prods/sabonete-francis.png', '2020-11-25', '2019-10-10', '85g, Sabonete em barra Francis flor de acacia', 3.11, 'A linha francis aromachologie é desenvolvida com essencias florais capazes de gerar diferentes e inebriantes sensações'),
(11, '', 'Desodorante Antitranspirante Adidas', '../img/prods/desodorante-adidas.png', '2022-02-01', '2019-05-11', '150ml-95g, Desodorante antitranspirante em aerosol ', 14.59, 'adidas antitranspirante adipower 72h maxima protecao, formula exclusiva com tecnologia inteligente se ativa pelo calor'),
(12, '', 'Achocolatado Toddynho', '../img/prods/toddynho.png', '2019-12-22', '2019-06-25', '200ml, Bebida lactea uht sabor chocolate', 1.59, 'Contem soro de leite. \"mais 40% de calcio quando comparado com produtos similares o mercado.\"\r\nUma porcao de 200ml contem 167kcal = 8%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
