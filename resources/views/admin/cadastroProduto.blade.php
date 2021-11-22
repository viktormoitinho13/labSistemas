<div class="cadastro-form form-produto">
                    <div class="login">
                        <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>   
                                    </svg> Cadastro de Produto</b>
                        </header>
                    <form  class="login__form formulario_produto">
                        @csrf
                        <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                                </svg>
                            <label class="titulo" for="codigoproduto">CÓDIGO DO PRODUTO - EAN</label>
                            <input type="number" id="codigo_produto" name="codigo" placeholder="78955825468789" required>
                            </div>

                            <div>
                            <label class="titulo" for="nomeproduto">NOME</label>
                            <input type="text" id="nome_produto" name="nome_produto" placeholder="PARACETAMOL" required>
                            </div>

                            <div>
                            <label class="titulo" for="precoproduto">PREÇO</label>
                            <input type="number" id="preco_produto" name="preco" placeholder="27,80" required>
                            </div>

                            <div>
                            <label class="titulo" for="custoproduto">CUSTO</label>
                            <input type="number" id="custo_produto" name="custo" placeholder="9,47" required>
                            </div>

                            <div>
                            <label class="titulo input-fabricacao" for="datafabproduto">DATA DE FABRICAÇÃO</label>
                            <input type="date" id="fabricacao_produto" name="data_fabricacao" placeholder="11/02/1990" required>
                            </div>

                            <div>
                            <label class="titulo input-validade" for="datavencproduto">DATA DE VENCIMENTO</label>
                            <input type="date" id="vencimento_produto" name="data_vencimento" placeholder="11/02/1990" required>
                            </div>
                            <div>
                            <select required id="fabricante_id" class="form-select" type="text" name="selectfabricante" required>
                                        <option value="" disabled="disabled" selected="selected" >ESCOLHA A FABRICANTE</option>
                                        <option value="1">EUROFARMA</option>
                                        <option value="2">ULTRAFARMA</option>
                                        <option value="3">TAKEDA</option>
                                        <option value="4">ACHÉ</option>
                                        
                            </select>
                            </div>

                            <div>
                            <input class="submitProduto button" color="black" type="button" value="Cadastrar Produto">
                            </div>
                    </form>
                </div>
            </div>
           