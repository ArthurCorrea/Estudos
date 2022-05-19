create database cadastros
default character set utf8
default collate utf8_general_ci;

create table pessoas (
	id int not null auto_increment,
	nome varchar(30) not null,
    nascimento date,
    sexo enum('M', 'F'),
    peso decimal(5,2),
    altura decimal(3,2),
    nacionalidade varchar(20) DEFAULT 'Brasil',
    PRIMARY KEY (id)
) default charset = utf8;

INSERT INTO pessoas VALUES		# insere valores na tabela
(default, 'Pedro', '1973-03-11', 'M', '72.1', '1.82', default),
(default, 'Cláudia', '2007-05-24', 'F', '61.7', '1.57', 'Irlanda');

SELECT * FROM pessoas;

