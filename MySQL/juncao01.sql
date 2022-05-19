desc gafanhotos;

alter table gafanhotos
add column cursopreferido int;

alter table gafanhotos
add foreign key(cursopreferido)		# Adicionando chave estrangeira
references cursos(idcurso);			# Fazendo ligação entre Cursos e Gafanhotos

select * from gafanhotos;
select * from cursos;

update gafanhotos set cursopreferido = '6'
where id = 1;
