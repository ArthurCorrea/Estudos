select * from cursos;

/* Funções de seleção com semelhança */
select * from cursos
where nome like 'P%'		# Seleciona o nome dos cursos que começam com P 
order by nome;

select * from cursos
where nome like '%a';		# Seleciona o nome dos cursos que terminam com a letra A

select * from cursos
where nome like '%a%';		# Seleciona o nome dos cursos que têm a letra A

select * from cursos
where nome not like '%a%';	# Seleciona o nome dos cursos que NÃO têm a letra A


select * from gafanhotos
where nome like '%Silva';	# Seleciona todas as pessoas que terminam o nome com Silva


/*Função de distinção */
select distinct nacionalidade from gafanhotos
order by nacionalidade;		# Seleciona uma listagem sem repetição de nomes


/* Funções de agregação */
select count(*) from cursos; # Conta o número de cursos cadastrados

select count(*) from cursos 
where carga > 40;	# Conta o número de cursos cadastrados que têm a carga maior que 40

select max(carga) from cursos;	# Mostra o maior valor de carga entre os cursos

select nome, min(totaulas) from cursos
where ano = 2017;	# Mostra o menor valor de totaulas entre os cursos de 2017

select sum(totaulas) from cursos
where ano = 2016;	# Soma os valores de totaulas dos cursos do ano de 2016;

select avg(totaulas) from cursos; # Faz a média dos valores de totaulas



