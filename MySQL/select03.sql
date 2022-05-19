select carga, count(*) from cursos
group by carga			# Faz um agrupamento de quantos cursos têm quantas horas de carga
order by carga;


select ano, count(*) from cursos
group by ano
having ano > 2015
order by count(*) desc;


select avg(carga) from cursos;

select carga, count(*) from cursos
where ano > 2013
group by carga
having carga > (select avg(carga) from cursos);



