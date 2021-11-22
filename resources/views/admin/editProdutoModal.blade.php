<div class="modal fade editProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
            </div>
            <div class="modal-body">
                
                <form action="">
                            <div class="form-group">
                            <label for="codigoproduto">CÓDIGO DO PRODUTO - EAN</label>
                            <input type="number" id="codigo_produto" name="codigo" placeholder="78955825468789" required>
                            </div>

                            <div class="form-group">
                            <label for="nomeproduto">NOME</label>
                            <input type="text" id="nome_produto" name="nome_produto" placeholder="PARACETAMOL" required>
                            </div>

                            <div class="form-group">
                            <label for="precoproduto">PREÇO</label>
                            <input type="number" id="preco_produto" name="preco" placeholder="27,80" required>
                            </div>

                            <div class="form-group">
                            <label for="custoproduto">CUSTO</label>
                            <input type="number" id="custo_produto" name="custo" placeholder="9,47" required>
                            </div>

                            <div class="form-group">
                            <label class="input-fabricacao" for="datafabproduto">DATA DE FABRICAÇÃO</label>
                            <input type="date" id="fabricacao_produto" name="data_fabricacao" placeholder="11/02/1990" required>
                            </div>

                            <div class="form-group">
                            <label class="input-validade" for="datavencproduto">DATA DE VENCIMENTO</label>
                            <input type="date" id="vencimento_produto" name="data_vencimento" placeholder="11/02/1990" required>
                            </div>

                            <div class="form-group">
                            <select class="form-select" style="display:block;" required id="fabricante_id" type="text" name="selectfabricante" required>
                                        <option value=""  disabled="disabled" selected="selected" >ESCOLHA A FABRICANTE</option>
                                        <option value="1">EUROFARMA</option>
                                        <option value="2">ULTRAFARMA</option>
                                        <option value="3">TAKEDA</option>
                                        <option value="4">ACHÉ</option>
                            </select>
                            </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="close">Fechar</button>
                <button type="button" class="btn btn-primary">Save Alterações</button>
            </div>
        </div>
    </div>
</div>


