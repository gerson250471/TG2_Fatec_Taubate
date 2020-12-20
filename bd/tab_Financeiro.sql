CREATE TABLE TAB_FINANCEIRO(
FIN_ID					INTEGER NOT NULL AUTO_INCREMENT,
FIN_VALOR				DOUBLE,
FIN_DATAPAGAMENTO		TIMESTAMP,
FIN_FORMAPAGAMENTO		VARCHAR(80) NOT NULL,
FIN_SITUACAO			VARCHAR(30)DEFAULT NULL,
OSE_ID					INTEGER NOT NULL,
PRIMARY KEY (FIN_ID),
FOREIGN KEY (OSE_ID) REFERENCES TAB_ORDEM_SERVICO (OSE_ID)
)