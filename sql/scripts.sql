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

ALTER TABLE `usuario` ADD `is_pro` INT NOT NULL DEFAULT '0' ;
ALTER TABLE `usuario` CHANGE `is_pro` `is_pro` BOOLEAN NOT NULL DEFAULT FALSE;

INSERT INTO `muay`.`usuario` (`id_usuario`, `email`, `senha`, `nome`, `endereco`, `telefone`, `celular`, `profissao`, `hora_profissao`, `data_nasc`, `papel`) VALUES (NULL, 'willianw94@hotmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Willian RLM', 'CEU2', '5588997766', '5596984336', 'Estagiario', '08-12, 14-18', '1994-11-18', '1');