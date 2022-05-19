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

select gafanhotos.nome, cursos.nome, cursos.ano	
from gafanhotos join cursos			# Dando um join pra fazer a ligação entre as tabelas
on cursos.idcurso = gafanhotos.cursopreferido
order by gafanhotos.nome;	


select p.nome, c.nome, c.ano
from gafanhotos as p right outer join cursos as c	# Dando apelido para cada tabela
on c.idcurso= p.cursopreferido
order by p.nome;
