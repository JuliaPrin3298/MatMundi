# MatMUndi
Projeto Integrador 1° Semestre Fatec


==========================================================

Create database MatMundi;

Create table usuario(
	id_usuario int Primary Key, 
	nome_usuario varchar(50)  not null,
	email_usuario varchar(60),
    senha_usuario varchar(12),
	data_nascimento varchar (15)
);

Create Table jogo(
	id_jogo int primary key,
	nome_jogo varchar(50),
	dificuldade varchar(12)
);

Create table atividade(
	id_atividade int primary key,
	titulo_atividade varchar(30) not null,
	descricao varchar(120) not null,
	habilidade varchar(20),
	serie varchar(7) 	
);

create table realizar(
  id_realizar int primary key, 
  id_usuario int not null, 
  id_atividade int not null, 
  estado char(1) check(estado in('T', 'F')),
  foreign key (id_usuario) references usuario(id_usuario),
  foreign key (id_atividade) references atividade(id_atividade));

create table jogar(
  id_Jogar int primary key, 
  pontuacao float not null, 
  id_usuario int, 
  id_jogo int,
  foreign key (id_usuario) references usuario(id_usuario),
  foreign key (id_jogo) references jogo(id_jogo));

============================================================================

USUÁRIO
insert into usuario(id_usuario, nome_usuario, email_usuario, senha_usuario, data_nascimento) values(01, 'Camila Santos', 'camila123@outlook.com', '1234', '10/03/2019');
insert into usuario(id_usuario, nome_usuario, email_usuario, senha_usuario, data_nascimento) values(02, 'Carlos Santos', 'carlos123@outlook.com', '1234', '14/11/2018');


JOGO
insert into jogo(id_jogo, nome_jogo, dificuldade) values(21, 'Ilha do Tesouro', 'Medio');
insert into jogo(id_jogo, nome_jogo, dificuldade) values(22, 'Lancador de bolas', 'Facil');

ATIVIDADE
insert into atividade(id_atividade, titulo_atividade, descricao, habilidade, serie) values(31, 'A soma dos doces', 'Comprando doces na loja e fazendo a soma entre eles', 'Realizar adicoes simples com numeros naturais', '2° ano');
insert into atividade(id_atividade, titulo_atividade, descricao, habilidade, serie) values(32, 'A subtracao dos brinquedos', 'Resolvendo situacoes de identificar a diferença no número de brinquedos', 'Resolver problemas de adição e subtração com números naturais', '3° ano');


REALIZAR
insert into realizar(id_realizar, id_usuario, id_atividade, estado) values(02, 01, 31, 'F');
insert into realizar(id_realizar, id_usuario, id_atividade, estado) values(03, 02, 32, 'T');

JOGAR
insert into jogar(id_jogar, pontuacao, id_usuario, id_jogo) values(41, 550, 01, 21);
insert into jogar(id_jogar, pontuacao, id_usuario, id_jogo) values(42, 650, 02, 22);


===========================================================================

Select nome_usuario, estado From usuario, atividade, realizar
Where atividade.id_atividade = realizar.id_atividade and 
usuario.id_usuario = realizar.id_usuario;



Select nome_usuario, nome_jogo, pontuacao From usuario, jogar, jogo
Where jogo.id_jogo = jogar.id_jogo and usuario.id_usuario = jogar.id_usuario