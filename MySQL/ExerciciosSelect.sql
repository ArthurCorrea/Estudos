# Selecionar o nome de todas as mulheres 
select * from gafanhotos
where sexo = 'F';


# Selecionar uma lista com os dados de todos que nasceram entre 1/1/2000 e 31/12/2015
select * from gafanhotos
where nascimento between '2000-01-01' and '2015-12-31'
order by nome;


# Selecionar uma lista com o nome de todos os homens que trabalham como programadores
select * from gafanhotos
where sexo = 'M' and profissao = 'Programador';


# Selecionar uma lista com os dados de todas as mulheres que nasceram no Brasil e
# que têm seu nome iniciado com a letra J
select * from gafanhotos
where nome like 'J%' and sexo = 'F' and nacionalidade = 'Brasil';


# Mostrar uma lista com o nome e nacionalidade de todos os homens que têm Silva
# no nome, não nasceram no Brasil e pesam menos de 100kg
select nome, nacionalidade from gafanhotos
where nome like '%Silva%' and nacionalidade != 'Brasil' and peso < 100;


# Mostrar uma lista que mostre a maior altura entre os homens que moram no Brasil
select max(altura) from gafanhotos
where sexo = 'M' and nacionalidade = 'Brasil';


# Mostrar a média de peso das pessoas cadastradas
select avg(peso) from gafanhotos;


# Mostrar o menor peso entre as mulheres que nasceram fora do Brasil
# entre 01/01/1990 e 31/12/2000
select min(peso) from gafanhotos
where nascimento between '1990-01-01' and '2000-12-31' and sexo = 'F' and nacionalidade != 'Brasil';


# Mostrar quantas mulheres têm mais de 1.90m de altura
select count(*) from gafanhotos
where altura > 1.9;