-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.11 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para marketing_multinivel
DROP DATABASE IF EXISTS `marketing_multinivel`;
CREATE DATABASE IF NOT EXISTS `marketing_multinivel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `marketing_multinivel`;

-- Copiando estrutura para tabela marketing_multinivel.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pai` int(11) DEFAULT NULL,
  `patente` int(11) NOT NULL DEFAULT '1',
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Criado na aula de marketing multinível';

-- Copiando dados para a tabela marketing_multinivel.usuarios: 0 rows
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `id_pai`, `patente`, `nome`, `email`, `senha`) VALUES
	(1, NULL, 1, 'SISTEMA', 'sistema@email.com', '202cb962ac59075b964b07152d234b70'),
	(2, 1, 1, 'fulano', 'fulano@email.com', '202cb962ac59075b964b07152d234b70'),
	(3, 1, 1, 'cicrano', 'cicrano@email.com', '202cb962ac59075b964b07152d234b70'),
	(4, 3, 1, 'paulo', 'paulo@email.com', '202cb962ac59075b964b07152d234b70'),
	(5, 4, 1, 'joao', 'joao@email.com', '202cb962ac59075b964b07152d234b70'),
	(6, 5, 1, 'pedrinho', 'pedrinho@email.com', '202cb962ac59075b964b07152d234b70'),
	(7, 6, 1, 'roberto', 'roberto@email.com', '202cb962ac59075b964b07152d234b70'),
	(8, 3, 1, 'pedro', 'pedro@email.com', '202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
