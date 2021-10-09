/*Transaction para inserção de dados*/


start transaction;

	insert into funcionario 
    	(funcionario.cpf_funcionario, funcionario.nome_funcionario, funcionario.sobrenome_funcionario, funcionario.nascimento_funcionario)
    values
    	("","", "","");
        
  
commit;


