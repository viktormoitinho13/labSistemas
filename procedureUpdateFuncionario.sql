/* Store procedure que permite a atualização total do cadastro de funcionário
*/

create procedure atualiza_funcionario 
(in id_tab_funcionario int,in cpf_tab_funcionario varchar(14),in nome_tab_funcionario varchar(30),in sobrenome_tab_funcionario varchar(50),in nascimento_tab_funcionario date )
begin
update funcionario 
set funcionario.cpf_funcionario = cpf_tab_funcionario, 
	funcionario.nome_funcionario = nome_tab_funcionario,
	funcionario.sobrenome_funcionario = sobrenome_tab_funcionario, 
    funcionario.nascimento_funcionario = nascimento_tab_funcionario
    where id_funcionario = id_tab_funcionario;
end;

call atualiza_funcionario(,"","","","");
