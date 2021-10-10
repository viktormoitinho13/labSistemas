create view ver_produto 
as select produto.nome_produto,produto.preco_produto,produto.custo_produto,fabricante.nome_fabricante
from produto inner join fabricante

