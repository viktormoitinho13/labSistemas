/*Gatilho que irá inserir dados após o insert na tabela Funcionario*/

create trigger insercao_cargo after insert 
on funcionario
for each row
begin 
	insert into cargo (cargo_funcao, cargo_num_loja, cargo_salario)
    values ("",,);
end

