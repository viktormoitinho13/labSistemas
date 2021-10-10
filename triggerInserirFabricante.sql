/*Gatilho para a inserção de fabricante no produto*/

create trigger inserir_fabricante after insert 
on produto
for each row 
begin 
insert into fabricante 
(cnpj_fabricante, nome_fabricante, telefone_fabricante,email_fabricante)
values ("00.000.000/0000-00","Coca-cola Company","11 0000-0000","suporte@cocacola.com.br");
end 
