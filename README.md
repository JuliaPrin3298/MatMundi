# MatMUndi
Projeto Integrador 1° Semestre Fatec

==========================================================

Create database MatMundi;

CREATE TABLE usuario(
	id_usuario INT PRIMARY KEY AUTO_INCREMENT, 
	nome_usuario VARCHAR(50) NOT NULL,
	email_usuario VARCHAR(60),
  senha_usuario VARCHAR(12)
);

CREATE TABLE jogo(
	id_jogo INT PRIMARY KEY AUTO_INCREMENT,
	nome_jogo VARCHAR(50),
	dificuldade VARCHAR(12)
);

CREATE TABLE atividade(
	id_atividade INT PRIMARY KEY AUTO_INCREMENT,
	titulo_atividade VARCHAR(30) NOT NULL,
	descricao VARCHAR(120) NOT NULL,
	habilidade VARCHAR(20),
	serie VARCHAR(7) 	
);

CREATE TABLE realizar(
    id_realizar INT PRIMARY KEY AUTO_INCREMENT, 
    id_usuario INT NOT NULL, 
    id_atividade INT NOT NULL, 
    estado CHAR(1) CHECK (estado IN ('T', 'F')),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_atividade) REFERENCES atividade(id_atividade)
);

CREATE TABLE jogar(
    id_jogar INT PRIMARY KEY AUTO_INCREMENT, 
    pontuacao FLOAT NOT NULL, 
    id_usuario INT, 
    id_jogo INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
    FOREIGN KEY (id_jogo) REFERENCES jogo(id_jogo)
);


============================================================================

USUÁRIO

INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Camila', 'camila@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Lola', 'Lola@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Kemi', 'kemi@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Jae', 'jae@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Jonas', 'jonas@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Gabriela', 'gabriela@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Rafael', 'rafael@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Lauro', 'lauro@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Henri', 'henri@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Dalmo', 'dalmo@gmail.com', '1234');
INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('Lavinia', 'lavinia@gmail.com', '1234');



JOGO
INSERT INTO jogo (nome_jogo, dificuldade) VALUES ('Ilha do Tesouro', 'Facil');
INSERT INTO jogo (nome_jogo, dificuldade) VALUES ('Ilha do Tesouro', 'Medio');
INSERT INTO jogo (nome_jogo, dificuldade) VALUES ('Ilha do Tesouro', 'Dificil');

ATIVIDADE
INSERT INTO atividade (titulo_atividade, descricao, habilidade, serie) VALUES ('A soma dos doces', 'Comprando doces na loja e fazendo a soma entre eles', 'Realizar adicoes simples com numeros naturais', '2° ano');
INSERT INTO atividade (titulo_atividade, descricao, habilidade, serie) VALUES ('A subtracao dos brinquedos', 'Resolvendo situacoes de identificar a diferença no número de brinquedos', 'Resolver problemas de adição e subtração com números naturais', '3° ano');


REALIZAR
INSERT INTO realizar (id_usuario, id_atividade, estado) VALUES (1, 1, 'F');
INSERT INTO realizar (id_usuario, id_atividade, estado) VALUES (2, 2, 'T');

JOGAR
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (330, 1, 1);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (240, 2, 2);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (390, 3, 3);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (340, 4, 1);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (310, 5, 1);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (250, 6, 2);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (120, 7, 3);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (360, 8, 1);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (190, 9, 2);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (360, 10, 3);
INSERT INTO jogar (pontuacao, id_usuario, id_jogo) VALUES (320, 11, 3);

===========================================================================

Select nome_usuario, estado From usuario, atividade, realizar
Where atividade.id_atividade = realizar.id_atividade and 
usuario.id_usuario = realizar.id_usuario;



Select nome_usuario, nome_jogo, pontuacao From usuario, jogar, jogo
Where jogo.id_jogo = jogar.id_jogo and usuario.id_usuario = jogar.id_usuario