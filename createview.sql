/*View para visualizar os dados do funcionário

	ver_funcionario receberá o nome e o sobrenome do funcionario da tabela funcionario.
	ver_funcionario receberá a função e a loja da tabela cargo.
	ver_funcionario será um inner joi das duas tabelas.
*/


create view ver_funcionario
as select funcionario.nome_funcionario, funcionario.sobrenome_funcionario, cargo.cargo_funcao, cargo.cargo_num_loja
from funcionario inner join cargo;


select nome_funcionario, sobrenome_funcionario, cargo_funcao, cargo_num_loja
from ver_funcionario;


