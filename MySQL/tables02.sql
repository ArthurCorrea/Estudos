desc pessoas;

alter table pessoas
add column profissao varchar(10);	# adiciona uma coluna chamada profissao com 10 caracteres

alter table pessoas
drop column profissao;				# deleta a coluna profissao

alter table pessoas
add column profissao varchar(10) after nome;	# a coluna profissao ficará depois da coluna nome

alter table pessoas
modify profissao varchar(20);		# altera a coluna profissao para o tamanho de 20 caracteres

alter table pessoas
add codigo int first;				# adiciona a coluna codigo na primeira posição

alter table pessoas
change column profissao prof varchar(20);	# altera o nome da coluna profissao para prof

alter table pessoas
rename to amigos;					# renomeia a coluna pessoas para amigos

alter table amigos
rename to pessoas;					# renomeia a coluna amigos para pessoas

select * from pessoas;				# seleciona a tabela inteira