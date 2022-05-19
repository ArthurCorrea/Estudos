select * from gafanhotos;


select * from cursos			
order by nome desc;				# Ordena pela coluna nome em ordem descendente 


select nome, totaulas, carga, ano from cursos		# Mostra somente as colunas passadas
order by ano, nome;


select * from cursos
where ano = '2016'				# Seleciona todas as linhas onde o ano é 2016
order by nome;


select nome, descricao, ano from cursos
where ano >= '2017'			# Seleciona todas as linhas onde o ano é maior ou igual a 2017
order by ano, nome;


select nome, descricao, ano from cursos
where ano between 2015 and 2019;	# Seleciona todas as linhas que estejam entre com o ano entre 2015 e 2019


select nome, ano from cursos
where ano in (2014, 2018)			# Seleciona todas as linhas que têm o ano em 2014 e 2018
order by ano, nome;


select nome, descricao, carga, totaulas from cursos
where carga > 35 or totaulas <= 30	# Seleciona todas as linhas que têm a carga maior que 35 e o totaulas menor ou igual a 30
order by ano, nome;