create table if not exists cursos (		# cria uma tabela com este nome, caso ela não exista
	nome varchar(30) not null unique,
    descricao text,
    carga int unsigned,
    totalaulas int,
    ano year default '2016'
) default charset = utf8;

desc cursos;				# descreve a tabela 'cursos'
 
select * from cursos;
 
alter table cursos
add column id int first;	# adiciona uma coluna na primeira posição

alter table cursos
add primary key(id);		# adiciona uma primary key para id

insert into cursos values 
('4', 'Curso de Wordpress', 'Wordpress básico', '60', '30', '2022');


update cursos		# Atualiza dados dentro de um registro
set ano = '2020'
where id = 1;

update cursos		# Atualiza vários registros ao mesmo tempo
set nome = 'Curso de HTML5', descricao = 'HTML básico', totalaulas = '40'
where id = 2;

update cursos		
set nome = 'Curso de Git', descricao = 'Git básico'
where id = 3
limit 1;		# Limita o uptade para apenas um registro

delete from cursos	# Deleta a linha 4
where id = 4;		# famoso delete sem where
