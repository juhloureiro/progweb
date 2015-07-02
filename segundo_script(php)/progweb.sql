-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2015 às 15:47
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `progweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
`id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` int(11) DEFAULT NULL,
  `message` varchar(140) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sexo`, `message`) VALUES
(1, 'Gabriel', 1, 'Ei'),
(2, 'Maria', 1, 'Opa'),
(3, 'Sergio', 2, 'Que'),
(10, 'Livia', 1, 'Gente, cheguei!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
