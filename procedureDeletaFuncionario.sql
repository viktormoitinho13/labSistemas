/*Procedimento que excluí um funcionario*/

create procedure deleta_funcionario 
(in id_tab_funcionario int)
begin
	SET foreign_key_checks = 0;  
	delete from funcionario
    where id_funcionario = id_tab_funcionario;
    delete from cargo
    where id_cargo = id_tab_funcionario;
   	SET foreign_key_checks = 1;  

end;

call deleta_funcionario(1);


