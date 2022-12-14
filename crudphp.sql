
DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `preco_custo` decimal(8,2) DEFAULT NULL,
  `preco_venda` decimal(8,2) DEFAULT NULL,
  `qtde_estoque` int NOT NULL DEFAULT '0'
) 

INSERT INTO `produtos` VALUES (1,'PRODUTO 1',1.00,2.00,4),(2,'PRODUTO DO DIEGO',8.00,20.00,10),(18,'LIVRO DE CABECEIRA DO MEU QUERIDO ALUNO JAIRO',399.00,790.00,5);

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(15)
);
 

