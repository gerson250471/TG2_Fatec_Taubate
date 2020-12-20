CREATE TABLE tab_Ordem_Servico (
OSE_ID			INTEGER NOT NULL AUTO_INCREMENT,
OSE_DESCRICAO		VARCHAR(80) NOT NULL,
OSE_DATA			TIMESTAMP,
OSE_SITUACAO		VARCHAR(30)DEFAULT NULL,
SOL_CPF			VARCHAR(11)NOT NULL,
PRIMARY KEY (OSE_ID),
FOREIGN KEY (SOL_CPF) REFERENCES TAB_SOLICITANTE (SOL_CPF)
)