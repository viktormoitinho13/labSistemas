<div class="cadastro-form form-loja">
                <div class="login">
                        <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>   
                                    </svg> Cadastro de Loja</b>
                        </header>
                    <form  class="login__form formulario_loja" >
                        @csrf
                        <div>
                        <label class="titulo" for="endloja">ENDEREÇO DA LOJA</label>
                        <input type="text" id="end_loja" name="end_loja" placeholder="Rua Capitão Salvador" required>
                        </div>

                        <div>
                        <label class="titulo" for="numeroloja">NÚMERO DO ENDEREÇO DA LOJA</label>
                        <input type="number" id="endereco_num_loja" name="endereco_num_loja" placeholder="1020" required>
                        </div>

                        <div>
                        <label class="titulo" for="cnpjloja">CNPJ DA LOJA</label>
                        <input type="number" id="cnpj_loja" name="cnpj_loja" placeholder="06.626.253/0001-51" required>
                        </div>

                        <div>
                        <label class="titulo" for="telefoneloja">TELEFONE DA LOJA</label>
                        <input type="number" id="telefone_loja" name="telefone_loja" placeholder="0800-704-3876" required>
                        </div>

                        <div>
                        <label class="titulo" for="emailoja">EMAIL DA LOJA</label>
                        <input type="text" id="email_loja" name="email_loja" placeholder="euroatende@eurofarma.com.br" required>
                        </div>

                        <div>
                            <input id="submitLoja" class="button" color="black" type="button" value="Cadastrar Produto">
                        </div>
                    </form>
                </div>
            </div>
            <div id="dive"></div>