-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18/11/2019 às 10:34
-- Versão do servidor: 10.1.40-MariaDB
-- Versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancoSmartW`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `idProd` int(11) NOT NULL,
  `hex` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `imagem` varchar(70) NOT NULL,
  `validade` date NOT NULL,
  `fabricacao` date NOT NULL,
  `descricao` text NOT NULL,
  `preco` float NOT NULL,
  `textoCompleto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`idProd`, `hex`, `nome`, `imagem`, `validade`, `fabricacao`, `descricao`, `preco`, `textoCompleto`) VALUES
(0, '04 2e 6a 22 ee 64 80', 'Detergente', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/ypeneutro500ml.png', '2025-05-06', '2018-07-15', 'Detergente neutro Ype. Perfeito para lavar loucas', 2.55, 'O detergente Ype Neutro e um sabao liquido feito para lavagem de loucas em geral e limpeza de superficies. '),
(1, '04 32 6a 22 ee 64 80', 'Biscoito Negresco', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/bolacha-negresco.png', '2020-04-24', '2019-08-21', '140g, Biscoito sabor chocolate com recheio sabor baunilha, contem aromatizante sintetico identico ao natural', 2.19, 'Contem derivados de leite, soja, trigo, centeio e aveia. Pode conter cevada. Contem lactose. Contem gluten.'),
(2, '04 36 6a 22 ee 64 80', 'Biscoito Tortuguita', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/cookie-tortuguita.png', '2020-07-27', '2019-04-15', '86g, Biscoito sabor baunilha com recheio sabor chocolate enriquecido com vitaminas.', 1.99, 'Contem aromatizantes sintetico identico ao natural. Mantenha em local seco e arejado.'),
(3, '04 27 69 22 ee 64 80', 'Gelatina Dr. Oetker', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/gelatinadroetker.png', '2021-01-31', '2019-01-31', 'Gelatina Dr. Oetker sabor uva.', 0.99, 'Porcao(5g): Valor energetico 17kcal; carboidratos 2,9g; proteinas 1,3g; sodio 94mg; vitamina C 10mg  '),
(4, '04 2b 69 22 ee 64 80', 'Fermento em po Dona Benta', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/fermentodonabenta.png', '2020-06-30', '2019-06-30', 'Fermento em po quimico tradicional Dona Benta', 1.99, 'Ingredientes: Amido de milho, bicarbonato de sodio, fosfato monocalcico e carbonato de calcio.'),
(5, '04 3a 6a 22 ee 64 80', 'Sabonete Francis aromachologie', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/sabonete-francis.png', '2020-11-25', '2019-10-10', '85g, Sabonete em barra Francis flor de acacia', 3.11, 'Linha francis aromachologie e desenvolvida com essencias florais capazes de gerar diferentes e inebriantes sensacoes'),
(6, '04 3e 6a 22 ee 64 80', 'Desodorante Antitranspirante Adidas', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/desodoranteadidas.png', '2022-02-01', '2019-05-11', '150ml-95g, Desodorante antitranspirante em aerosol ', 2.5, 'Adidas antitranspirante adipower 72h maxima protecao, formula exclusiva com tecnologia inteligente se ativa pelo calor'),
(7, '04 43 6a 22 ee 64 80', 'Achocolatado Toddynho', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/toddynho.png', '2019-12-22', '2019-06-25', '200ml, Bebida lactea uht sabor chocolate', 1.59, 'Contem soro de leite. \"mais 40% de calcio quando comparado com produtos similares o mercado.\"\r\nUma porcao de 200ml contem 167kcal = 8%'),
(8, '', 'Extrato de tomate Elefante', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/extratoelefante.png', '2021-07-21', '2019-07-21', '340g de extrato de tomate Elefante. Possui 18 tomates.', 0, 'Porcao de 30g contem:  15kcal, 2,9g de carboidratos, 0,8g de proteinas, 1,1g de fibra alimentar e 118mg de sodio.'),
(9, '', 'Creme de Leite Jussara', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/cremeleitejussara.png', '2020-01-22', '2019-06-22', '200g de creme de leite Jussara', 0, 'porcao de 15g contem: 27kcal, 2,6g de gorduras totais, 1,9g de gorduras saturadas e 18mg de sodio.'),
(111, '76 8d f2 08', 'Papel Higienico Neve', 'http://192.168.0.109/Projetos/SmartWalletWeb/img/pneve.png', '2021-01-20', '2019-06-20', 'Papel higienico dupla folha Neve', 12.45, 'A marca de papel higienico que melhor entende sua intimidade e evolui sua experiencia no banheiro.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_comentarios`
--

CREATE TABLE `tb_comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `ver` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_comentarios`
--

INSERT INTO `tb_comentarios` (`id`, `nome`, `email`, `data`, `comentario`, `ver`) VALUES
(1, 'Renan', 'a@aef.co', '2019-10-29', 'Que site lindo!', 1),
(3, 'Renan', 'lucas@gmail.com', '2019-10-29', 'Mito, Sucesso!!', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProd`);

--
-- Índices de tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
