CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(500) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `profissao` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `hora_profissao` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `data_nasc` date NOT NULL,
  `papel` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id_usuario`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `pagamento` (
`id_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id_pagamento`),
  FOREIGN KEY (id_usuario) references usuario(id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;