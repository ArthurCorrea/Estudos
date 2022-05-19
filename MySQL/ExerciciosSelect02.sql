# Mostrar uma lista com as profissões das pessoas e seus respectivos quantitativos
select * from gafanhotos;

select profissao, count(*) from gafanhotos
group by profissao
order by profissao;


# Mostrar uma lista de quantos homens e quantas mulheres nasceram após 01/01/2005
select sexo, count(*) from gafanhotos
where nascimento > '2005-01-01'
group by sexo;

select nome, sexo, nascimento from gafanhotos
where nascimento > '2005-01-01'
group by nome;


/* Uma lista com as pessoas que nasceram fora do Brasil, mostrando o país 
 de origem e o total de pessoas nascidas lá. Só nos interessam os países
 que tiverem mais de 3 pessoas com essa nacionalidade */
select nacionalidade, count(*) from gafanhotos
where nacionalidade != 'Brasil'
group by nacionalidade
having count(*) > 3;


/* Mostrar uma lista agrupada pela altura das pessoas, mostrando quantas pessoas
pesam mais de 100kg e que estão acima da média de altura de todos os cadastrados */
select avg(altura) from gafanhotos;	# média de altura = 1,66m

select peso, altura, count(*) from gafanhotos
where peso > 100
group by altura
having altura > (select avg(altura) from gafanhotos);

select nome, peso, altura from gafanhotos
where peso > 100 and altura > 1.66;


