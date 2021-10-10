create procedure deletar_produto 
(in deletar_produto_id int)
begin 
SET foreign_key_checks = 0;  
	delete from produto
    where id_produto = deletar_produto_id;
    delete from fabricante
    where id_fabricante = deletar_produto_id;
    alter table produto auto_increment = 1;
    alter table fabricante auto_increment = 1;
   	SET foreign_key_checks = 1;  

end;

call deletar_produto(0);

