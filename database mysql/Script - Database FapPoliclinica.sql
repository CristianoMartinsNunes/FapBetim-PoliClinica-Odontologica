/* Projeto Clínica Escola
   ----------------------
   Database: fapErpPoliclinica
   Autor: Cristiano Martins Nunes.
   email: martinsnunes@gmail.com
   Data: 00/00/2019 - Início: 99:99 
   Data: 03/06/2019 - 11:00
   Data: 04/06/2019 - 07:00
   Data: 22/09/2019 - 21:38
 
*/

-- Create Database
CREATE DATABASE FAPERP_POLICLINICA;

-- Use fapErp_Policlinica
USE FAPERP_POLICLINICA;

-- Table PESSOA
CREATE TABLE PESSOA
( IDPE INT AUTO_INCREMENT,
  NOME VARCHAR(65) NOT NULL,
  SEXO ENUM('F','M') NOT NULL,
  DTNASC DATE NOT NULL,
  CPF VARCHAR(11) UNIQUE NOT NULL,
  SENHA VARCHAR(06) NOT NULL,
  TIPO INT NOT NULL,
  TELMOVEL VARCHAR(12) NOT NULL,
  TELFIXO VARCHAR(12) DEFAULT NULL,
  TELCOMERCIAL VARCHAR(12) DEFAULT NULL,
  EMAIL VARCHAR(60) NOT NULL,
  DTCAD DATETIME DEFAULT NOW(),
  PRIMARY KEY(IDPE));
  

-- Insert Pessoa
INSERT INTO PESSOA
	 VALUES (1,'CRISTIANO MARTINS NUNES','M','2019-05-21','11111111111',
			 '053080',1,'031999370123','03732128123','03721019000','martinsnunes@gmail.com', NOW());


INSERT INTO PESSOA
	 VALUES (1,'CRISTIANO MARTINS NUNES','M','2019-05-21','22222222222',
			 '053080',1,'031999370123','03732128123','03721019000','martinsnunes@gmail.com', NOW());

-- Table PACIENTE
CREATE TABLE PACIENTE
( ID INT AUTO_INCREMENT,
  NOME VARCHAR(65) NOT NULL,
  SEXO ENUM('F','M') NOT NULL,
  DTNASC DATE NOT NULL,
  CPF VARCHAR(11) UNIQUE NOT NULL,
  ENDERECO TEXT NOT NULL,
  TELMOVEL VARCHAR(12) NOT NULL,
  TELFIXO VARCHAR(12) DEFAULT NULL,
  TELCOMERCIAL VARCHAR(12) DEFAULT NULL,
  EMAIL VARCHAR(60) NOT NULL,
  DTCAD DATETIME DEFAULT NOW(),
  PRIMARY KEY(ID));

-- Tabela Procedimento
CREATE TABLE PROCEDIMENTO
( ID INT AUTO_INCREMENT,
  CODCATEGORIA VARCHAR(05) NOT NULL, 
  NOMECATEGORIA TEXT NOT NULL,
  CODSERVICO INT NOT NULL,
  NOMESERVICO TEXT,
  VALOR NUMERIC(15,2) NOT NULL,
    PRIMARY KEY(ID));
    
-- Select Procedimento
SELECT * FROM PROCEDIMENTO;

-- Insert Procedimento
INSERT INTO PROCEDIMENTO ( ID, CODCATEGORIA, NOMECATEGORIA, CODSERVICO, NOMESERVICO, VALOR)
VALUES('1', 'C001','EXAME CLÍNICO','110','CONSULTA INICIAL',0),
('2','C001','EXAME CLÍNICO','120','URGÊNCIA E EMERGÊNCIA',0),
('3','C001','EXAME CLÍNICO','140','FALTA A CONSULTA',0),
('4','C002','RADIOLOGIA','210','RADIOGRAFIA PERIAPICAL',5),
('5','C002','RADIOLOGIA','220','RADIOGRAFIA INTERPROXIMAL',5),
('6','C002','RADIOLOGIA','230','RADIOGRAFIA OCLUSAL',5),
('7','C002','RADIOLOGIA','240','RADIOGRAFIA RX POSTERO - ANTERIOR',15),
('8','C002','RADIOLOGIA','250','RX ATM SÉRIE COMPLETA',40),
('9','C002','RADIOLOGIA','260','RX PANORÂMICA',40),
('10','C002','RADIOLOGIA','270','TELERRADIOGRAFIA DE PERFIL COM TRAÇADO CEFALOMÉTRI',40),
('11','C002','RADIOLOGIA','290','RX DE MÃO E PUNHO',5),
('12','C002','RADIOLOGIA','300','MODELOS ORTODÔNTICOS',5),
('13','C002','RADIOLOGIA','310','SLIDES',2),
('14','C002','RADIOLOGIA','320','FOTOGRAFIA',2),
('15','C003','TESTES E EXAMS DE LABORATÓRIO','410','TESTE DE RISCO DE CÁRIE,PH, CAPAC. TAMPÃO OU FLUXO',50),
('16','C004','PREVENÇÃO','510','PROFILAXIA',10),
('17','C004','PREVENÇÃO','520','ORIENTAÇÃO DE HIGIENE BUCAL',0),
('18','C004','PREVENÇÃO','530','APLICAÇÃO TÓPIC DE FLÚOR',0),
('19','C004','PREVENÇÃO','540','CONTROLE DE PLACA BACTERIANA',0),
('20','C005','ODONTOPEDIATRIA','610','APLICAÇÃO TÓPICA DE FLÚOR - VERNIZ',5),
('21','C005','ODONTOPEDIATRIA','620','APLICAÇÃO DE SELANTE (POR ELEMENTO)',5),
('22','C005','ODONTOPEDIATRIA','630','APLICAÇÃO DE SELANTE TÉCNICA INVASIVA (POR ELEMENT',5),
('23','C005','ODONTOPEDIATRIA','640','APLICAÇÃO DE CARIOSTÁTICO - 1 SEÇÃO (4 HEMIARCADAS',15),
('24','C005','ODONTOPEDIATRIA','650','ADEQUAÇÃO DO MEIO BUCAL COMCIV (POR HEMIARCADA)',30),
('25','C005','ODONTOPEDIATRIA','660','ADEQUAÇÃO DO MEIO BUCAL COM IRM (POR HEMIARCADA)',30),
('26','C005','ODONTOPEDIATRIA','670','RESTAURAÇÃO EM IONÔMERO DE VIDRO',40),
('27','C005','ODONTOPEDIATRIA','680','COROA DE AÇO',100),
('28','C005','ODONTOPEDIATRIA','690','PULPOTOMIA',50),
('29','C005','ODONTOPEDIATRIA','700','TRATAMENTO ENDODÔNTICO EM DECÍDUOS',50),
('30','C005','ODONTOPEDIATRIA','710','EXODONTIA SIMPLES DE DECÍDUOS',10),
('31','C005','ODONTOPEDIATRIA','720','MANTENEDOR DE ESPAÇO',100),
('32','C005','ODONTOPEDIATRIA','730','CONDICIONAMENTO EM ODONTOPEDIATRIA',0),
('33','C005','ODONTOPEDIATRIA','740','ULOTOMIA',10),
('34','C005','ODONTOPEDIATRIA','750','ULECTOMIA ',10),
('35','C005','ODONTOPEDIATRIA','760','RESTAURAÇÃO EM AMÁLGAMA - 1 FACE',300),
('36','C005','ODONTOPEDIATRIA','770','RESTAURAÇÃO EM AMÁLGAMA - 2 FACES',40),
('37','C005','ODONTOPEDIATRIA','780','RESTAURAÇÃO EM AMÁLGAMA - 3 FACES',50),
('38','C005','ODONTOPEDIATRIA','790','REST. RESINA FOTOPOLIMERIZÁVEL - CLASSE I OU V',30),
('39','C005','ODONTOPEDIATRIA','800','REST. RESINA FOTOPOLIMERIZÁVEL - CLASSE II',40),
('40','C005','ODONTOPEDIATRIA','810','REST. RESINA FOTOPOLIMERIZÁVEL - CLASSE III OU V',50),
('41','C006','DENTÍSTICA','900','RESTAURAÇÃO EM AMÁLGAMA - 1 FACE',30),
('42','C006','DENTÍSTICA','910','RESTAURAÇÃO EM AMÁLGAMA - 2 FACES',40),
('43','C006','DENTÍSTICA','920','RESTAURAÇÃO EM AMÁLGAMA - 3 FACES',50),
('44','C006','DENTÍSTICA','930','REST. RESINA FOTOPOLIMERIZÁVEL - CLASSE I OU V',30),
('45','C006','DENTÍSTICA','940','REST. RESINA FOTOPOLIMERIZÁVEL - CLASSE III OU IV',50),
('46','C007','ENDODONTIA','2010','TRATAMENTO ENDODÔNTICO DE INCISIVOS / CANINO',80),
('47','C007','ENDODONTIA','2020','TRATAMENTO ENDODÔNTICO DE PRÉ-MOLAR',90),
('48','C007','ENDODONTIA','2030','TRATAMENTO ENDODÔNTICO DE MOLAR',150),
('49','C007','ENDODONTIA','2040','RETRATAMENTO ENDODÔNTICO DE INCISIVO / CANINO',160),
('50','C007','ENDODONTIA','2050','RETRATAMENTO ENDODÔNTICO DE PRÉ-MOLAR',180),
('51','C007','ENDODONTIA','2060','RETRATAMENTO ENDODÔNTICO DE MOLAR',320),
('52','C007','ENDODONTIA','2070','TRATAMENTO DE PERFURAÇÃO',150),
('53','C007','ENDODONTIA','2080','REMOÇÃO DE NÚCLEO INTRARRADICULAR (POR ELEMENTO)',100),
('54','C007','ENDODONTIA','2090','CAPEAMENTO PULPAR',50),
('55','C007','ENDODONTIA','2100','PULPOTOMIA',50),
('56','C007','ENDODONTIA','2110','CLAREAMENTO ENDÓGENO',70),
('57','C007','ENDODONTIA','2120','PREPARPO PARA NÚCLEO INTRARRADICULAR',40),
('58','C007','ENDODONTIA','2130','APICIFICAÇÃO',0),
('59','C007','ENDODONTIA','2140','URGÊNCIA ENDO. PULPECT.',10),
('60','C007','ENDODONTIA','2150','APICETOMIA DE INCISIVO OU CANINO',100),
('61','C007','ENDODONTIA','2160','APICETOMIA DE INCISIVO OU CANINO COM OBTURAÇÃO RET',100),
('62','C007','ENDODONTIA','2170','APICETOMIA DE PRÉ-MOLAR',100),
('63','C007','ENDODONTIA','2180','APICETOMIA DE PRÉ-MOLAR COM OBTURAÇÃO RETRÓGEGADA',120),
('64','C007','ENDODONTIA','2190','APICETOMIA DE MOLAR',120),
('65','C007','ENDODONTIA','2200','APICETOMIA DE MOLAR COM OBTURAÇÃO RETRÓGADA',150),
('66','C007','ENDODONTIA','2210','REMOÇÃO DE CORPO ESTRANHO INTRACANAL',50),
('67','C007','ENDODONTIA','2220','CURATIVO DEMORA',0),
('68','C007','ENDODONTIA','2230','REEMBASAMENTO DE PROVISÓRIO COM PINO INTRARRADICUL',0),
('69','C007','ENDODONTIA','2240','RESTAURAÇÃO TEMPORÁRIA',20),
('70','C008','PERIODONTIA','3010','RASPAGEM SUPRAGENGIVAL',0),
('71','C008','PERIODONTIA','3020','RASPAGEM SUBGENGIVAL',25),
('72','C008','PERIODONTIA','3030','TRATAMENTO DE PROCESSO AGUDO',5),
('73','C008','PERIODONTIA','3040','DESSENSIBILIZAÇÃO DENTÁRIA ',5),
('74','C008','PERIODONTIA','3050','IMOBILIZAÇÃO DENTÁRIA RES. FOTO',40),
('75','C008','PERIODONTIA','3060','AJUSTE OCLUSAL',30),
('76','C008','PERIODONTIA','3070','REMOÇÃO DE FATORES DE RETENÇÃO',30),
('77','C008','PERIODONTIA','3080','GENGIVECTOMIA',100),
('78','C008','PERIODONTIA','3090','CIRURGIA RETALHO',50),
('79','C008','PERIODONTIA','3100','SEPULTAMENTO RADICULAR',50),
('80','C008','PERIODONTIA','3110','CUNHA DISTAL',10),
('81','C008','PERIODONTIA','3120','VESTIBULOPLASTIA',100),
('82','C008','PERIODONTIA','3130','ENXERTO PEDICULADO',0),
('83','C008','PERIODONTIA','3140','ENXERTO LIVRE',50),
('84','C008','PERIODONTIA','3150','ENXERTO CONJUTIVO SUBEPITELIAL',80),
('85','C008','PERIODONTIA','3160','FRENECTOMIA OU BRIDECTOMIA',30),
('86','C008','PERIODONTIA','3170','ODONTO-SECÇÃO',30),
('87','C008','PERIODONTIA','3180','MANUTENÇÃO DE TRATAMENTO CIRÚRGICO',30),
('88','C008','PERIODONTIA','3190','TERAP. PERIOD. DE SUPORTE PARA PERIODONTITE LEVE',30),
('89','C008','PERIODONTIA','3200','TERAP. PERIOD. DE SUPORTE PARA PERIODONTITE MODERA',30),
('90','C008','PERIODONTIA','3210','TERAP. PERIOD. DE SUPORTE PARA PERIODONTITE GRAVE',30),
('91','C008','PERIODONTIA','3220','AUMENTO DE COROA CLÍNICA ',30),
('92','C008','PERIODONTIA','3230','ENXERTO ÓSSEO',90),
('93','C008','PERIODONTIA','3240','DIAGNÓSTICO E TRATAMENTO DE HALITOSE',0),
('94','C009','PRÓTESE','4010','PLANEJAMENTO EM PRÓTESE-MODELOS DE ESTUDO+MONT',5),
('95','C009','PRÓTESE','4020','ENCERRAMENTO DIAGNÓSTICO',5),
('96','C009','PRÓTESE','4030','AJUSTE OCLUSAL',30),
('97','C009','PRÓTESE','4040','RESTAURAÇÃO METÁLICA FUNDIDA',150),
('142','C010','CIRURGIA','4041','ALVEOPLASTIA',50),
('98','C009','PRÓTESE','4050','RESTAURAÇÃO INLAY METALOCERÂMICA',130),
('100','C009','PRÓTESE','4051','RESTAURAÇÃO INLAY CERÂMICA',400),
('99','C009','PRÓTESE','4060','RESTAURAÇÃO ONLAY METALOCERÂMICA',130),
('101','C009','PRÓTESE','4061','RESTAURAÇÃO ONLAY CERÂMICA',400),
('102','C009','PRÓTESE','4090','REMOÇÃO DE RESTAURAÇÕES MMETÁLICAS OU COROAS',20),
('103','C009','PRÓTESE','4100','RECIMENTAÇÃO DE RESTAURAÇÃOES METÁLICAS OU COROAS',20),
('104','C009','PRÓTESE','4110','NÚCLEO METÁLICO FUNDIDO',30),
('105','C009','PRÓTESE','4120','COROA PROVISÓRIA',30),
('106','C009','PRÓTESE','4130','COROA PROVISÓRIA PRENSADA EM RESINA',40),
('107','C009','PRÓTESE','4140','REEMBASAMENTO PROVISÓRIO',10),
('108','C009','PRÓTESE','4150','COROA DE JAQUETA ACRÍLICA',30),
('109','C009','PRÓTESE','4160','COROA DE JAQUETA DE CERÂMICA PURA',400),
('110','C009','PRÓTESE','4170','COROA METALO-CERÂMICA',300),
('111','C009','PRÓTESE','4180','COROA VEENER',300),
('112','C009','PRÓTESE','4190','COROA TOTAL METÁLICA',250),
('113','C009','PRÓTESE','4200','COROA 3/4 OU 4/5',230),
('114','C009','PRÓTESE','4210','FACETAS LAMINADAS DE PORCELANA',600),
('115','C009','PRÓTESE','4220','PRÓTESE FIXA EM METALO CERÂMICA',280),
('116','C009','PRÓTESE','4230','PRÓTESE FIXA EM METALO PLASTICA',250),
('117','C009','PRÓTESE','4240','PRÓTESE FIXA ADESIVA INDIRETA EM METALO CERÂMICA',280),
('118','C009','PRÓTESE','4250','PRÓTESE FIXA ADESIVA INDIRETA EM METALO PLASTICA',250),
('119','C009','PRÓTESE','4260','PRÓTESE FIXA ADESIVA INDIRETA EM CERÂMICA PURA',500),
('120','C009','PRÓTESE','4270','PRÓTESE PARCIAL REMOVÍVEL PROV. EM ACRIL',150),
('121','C009','PRÓTESE','4280','PPR COM GRAMPOS BILATERAIS',250),
('122','C009','PRÓTESE','4290','PPR PARA ENCAIXE',250),
('123','C009','PRÓTESE','4291','ENCAIXE FÊMEA',50),
('124','C009','PRÓTESE','4300','ENCAIXE MACHO',50),
('125','C009','PRÓTESE','4310','PRÓTESE TOTAL CARACTERIZADA',250),
('126','C009','PRÓTESE','4320','PRÓTESE TOTAL IMEDIATA',150),
('127','C009','PRÓTESE','4330','CASQUETE DE MOLDAGEM',10),
('128','C009','PRÓTESE','4340','PONTO DE SOLDA',10),
('129','C009','PRÓTESE','4350','GUIA CIRÚRGICO PARA PRÓTESE IMEDIATA',150),
('130','C009','PRÓTESE','4360','PLACA DE MORDIDA MIORRELAXANTE',90),
('131','C009','PRÓTESE','4370','JIG OU FRONT-PLATÔ',30),
('132','C009','PRÓTESE','4380','CONSERTO EM PRÓTESE TOTAL OU PARCIAL',30),
('133','C009','PRÓTESE','4390','REPARO OU SUBSTITUIÇÃO DE DENTES EM PT OU PPR',50),
('134','C009','PRÓTESE','4400','CLAREAMENTO DENTAL CONSULTÓRIO',150),
('135','C009','PRÓTESE','4410','CLAREAMENTO DENTAL DE MODEIRAS',80),
('136','C009','PRÓTESE','4420','RESTAURAÇÃO INLAY E ONLAY',150),
('137','C009','PRÓTESE','4430','RESTAURAÇÃO LIVRE DE METAL',300),
('138','C009','PRÓTESE','4440','RESTAURAÇÃO TEMPORÁRIA',20),
('139','C010','CIRURGIA','5010','EXODONTIA ',15),
('140','C010','CIRURGIA','5020','EXODONTIA A RETALHO',15),
('141','C010','CIRURGIA','5030','EXODONTIA RAIZ RESIDUAL',15),
('143','C010','CIRURGIA','5050','BIÓPSIA',30),
('144','C010','CIRURGIA','5060','SULCOPLASTIA',30),
('145','C010','CIRURGIA','5070','CIRURGIA PARA TORUS PALATINO',40),
('146','C010','CIRURGIA','5080','CIRURGIA PARA TORUS MANDIBULAR UNILATERAL',50),
('147','C010','CIRURGIA','5090','CIRURGIA PARA TORUS MANDIBULAR BILATERAL',50),
('148','C010','CIRURGIA','5100','REMOÇÃO DE DENTES INCLUSOS OU IMPACTADOS',50),
('149','C010','CIRURGIA','5110','CIRURGIA DE TUMORES INTRA-ÓSSEOS',50),
('150','C010','CIRURGIA','5120','TRATAMENTO DE LESÃO CÍSTICA',50),
('151','C010','CIRURGIA','5130','REMOÇÃO DE CORPO ESTRANHO NO SEIO MAXILAR',50),
('152','C010','CIRURGIA','5140','TRATAMENTO DE FÍSTULA BUCO-SINUSIAL',50),
('153','C010','CIRURGIA','5150','EXCISÃO DE GLÂNDULA SALIVAR',30),
('154','C010','CIRURGIA','5160','EXCISÃO DE RÂNULA/MUCOCELE',30),
('155','C010','CIRURGIA','5170','RETIRADA DE CÁLCULO SALIVAR',30),
('156','C010','CIRURGIA','5180','DRENAGEM DE ABSCESSO',30),
('157','C010','CIRURGIA','5190','SINUSOTOMIA',30),
('158','C010','CIRURGIA','5200','PALATO-LABIOPLASTIA BILATERAL',30),
('159','C010','CIRURGIA','5210','TRATAMENTO CIRC. DO LÁBIO LEPORINO',30),
('160','C010','CIRURGIA','5220','RECOSNT. PARCIAL DE LÁBIO TRAUMATIZADO',30),
('161','C010','CIRURGIA','5230','RECONST. TOTAL DE LÁBIO TRAUMATIZADO',30),
('162','C010','CIRURGIA','5240','REDUÇÃO CIRÚRGICA DE LUXAÇÃO DE ATM',30),
('163','C010','CIRURGIA','5250','TRAT. CIRÚRGICO PARA AQUILOSE DE ATM',30),
('164','C010','CIRURGIA','5260','TRAT. CIRÚRGICO PARA OSTEOMIELITE',30),
('165','C010','CIRURGIA','5270','SUTURAS SIMPLES DA FACE',30),
('166','C010','CIRURGIA','5280','SUTURAS MÚLTIPLAS DA FACE',50),
('167','C010','CIRURGIA','5290','OSTEOTOMIA / OSTEOPLASTIA',30);

-- Table Serviço
CREATE TABLE SERVICO
( ID INT AUTO_INCREMENT,
  CPF VARCHAR(11) NOT NULL,
  CODSERVICO INT NOT NULL,
  QUANTIDADE INT NOT NULL,
  NUMEROPARCELA INT NOT NULL,
  VALORDESCONTO NUMERIC(15,2),
  DTSERVICO DATETIME NOT NULL,
  PRIMARY KEY(ID));

-- Table SERIVOPARCELA
CREATE TABLE SERVICOPARCELA
( ID INT AUTO_INCREMENT,
  IDSERVICO INT,
  CPF VARCHAR(11) NOT NULL,
  NUMEROPARCELA INT,
  HISTORICO TEXT,
  VALORPARCELA NUMERIC(15,2),
  DTVENCIMENTO DATE,
  VALORPAGO NUMERIC(15,2),
  DTPAGAMENTO DATE DEFAULT NULL,
  OBSERVACAO TEXT,
  STATUSPACIENTE ENUM('0','1'),
  DTCAD DATETIME,
  PRIMARY KEY(ID));

--  ServicoParcela
ALTER TABLE SERVICOPARCELA
AUTO_INCREMENT = 1000;

-- Select Servico  
SELECT * FROM SERVICO INNER JOIN PROCEDIMENTO
					  ON SERVICO.CODSERVICO = PROCEDIMENTO.CODSERVICO
                      INNER JOIN PACIENTE 
                      ON SERVICO.CPF = PACIENTE.CPF;

-- Visão Paciente X Procedimento X Servico
CREATE VIEW V_PACIENTE_SERVICO_PROCEDIMENTO
AS
SELECT PACIENTE.ID AS CODIGOPACIENTE, PACIENTE.NOME, PACIENTE.CPF, SERVICO.DTSERVICO,
	   SERVICO.ID,     
       PROCEDIMENTO.CODCATEGORIA, 
       PROCEDIMENTO.NOMECATEGORIA,
       SERVICO.CODSERVICO,
       PROCEDIMENTO.NOMESERVICO,
       PROCEDIMENTO.VALOR,       
       SERVICO.QUANTIDADE,
       (PROCEDIMENTO.VALOR * SERVICO.QUANTIDADE) AS VALORTOTAL,
       SERVICO.VALORDESCONTO, 
       ((PROCEDIMENTO.VALOR * SERVICO.QUANTIDADE) - SERVICO.VALORDESCONTO) AS VALORLIQUIDO,
       SERVICO.NUMEROPARCELA,
       ROUND(((PROCEDIMENTO.VALOR * SERVICO.QUANTIDADE) - SERVICO.VALORDESCONTO) / SERVICO.NUMEROPARCELA,2) AS VALORPARCELA
FROM PACIENTE INNER JOIN SERVICO
			  ON PACIENTE.CPF = SERVICO.CPF
              INNER JOIN PROCEDIMENTO
              ON SERVICO.CODSERVICO = PROCEDIMENTO.CODSERVICO ORDER BY PACIENTE.NOME, SERVICO.ID;
              

/*
DELIMITER //
CREATE PROCEDURE SP_GERA_PARCELA(ID_SERVICO INT)
BEGIN
	-- Variáveis
    DECLARE VALOR NUMERIC(15,2); 
    DECLARE CPF VARCHAR(11);
    DECLARE QNT, CONTADOR, CODSERVICO INT;
    
    -- Seta Variável
    SET CONTADOR = 1;

	-- Cpf Paciente
	SET CPF = (SELECT CPF 
				 FROM V_PACIENTE_SERVICO_PROCEDIMENTO
				WHERE V_PACIENTE_SERVICO_PROCEDIMENTO.ID = ID_SERVICO);

	-- Codigo do Serviço
	SET CODSERVICO = (SELECT CODSERVICO 
				       FROM V_PACIENTE_SERVICO_PROCEDIMENTO
				      WHERE V_PACIENTE_SERVICO_PROCEDIMENTO.ID = ID_SERVICO);


	-- Número de Parcela(s)
	SET QNT = (SELECT QNT 
				 FROM V_PACIENTE_SERVICO_PROCEDIMENTO
				WHERE V_PACIENTE_SERVICO_PROCEDIMENTO.ID = ID_SERVICO);

	-- Valor Parcela
	SET VALOR = (SELECT VALORPARCELA 
				   FROM V_PACIENTE_SERVICO_PROCEDIMENTO
                  WHERE V_PACIENTE_SERVICO_PROCEDIMENTO.ID = ID_SERVICO);
	-- Insert
    WHILE (CONTADOR < QNT) DO
		INSERT INTO SERVICOPARCELA (IDSERVICO,CPF,NUMEROPARCELA,HISTORICO,
                                    VALORPARCELA,DTVENCIMENTO,VALORPAGO,
                                    DTPAGAMENTO,OBSERVACAO,STATUSPACIENTE,DTCAD)
			 VALUES (ID_SERVICO, CPF, CONTADOR, 'teste', VALOR, '2010-01-01', 0, '2010-01-01','teste',1,now());
            
    		SET CONTADOR = (CONTADOR + 1);

    END WHILE;
                  
END;

*/  

/*

mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET character_set_connection=utf8');
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_results=utf8');

*/