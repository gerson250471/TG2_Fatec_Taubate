CREATE TABLE TAB_SOLICITANTE (
  SOL_CPF 			Varchar(11) NOT NULL,
  SOL_NOME 			varchar(30) NOT NULL,
  SOL_CELULAR 		varchar(11) DEFAULT NULL,
  SOL_ENDERECO 		VARCHAR(50) DEFAULT NULL,
  SOL_NUMERO 		varchar(6) DEFAULT NULL,
  SOL_COMPLEMENTO 	varchar(30) DEFAULT NULL,
  SOL_BAIRRO 		varchar(30) DEFAULT NULL,
  SOL_CIDADE 		varchar(30) DEFAULT NULL,
  SOL_CEP 			varchar(8) DEFAULT NULL,
  SOL_EMAIL 		varchar(50) DEFAULT NULL,
  SOL_SENHA 		varchar(90) DEFAULT NULL,
  PRIMARY KEY (SOL_CPF)
)