<div class="cadastro-form form-fabricante">
                <div class="login">
                        <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>   
                                    </svg> Cadastro de Fabricante</b>
                        </header>
                    <form class="login__form formulario_fabricante" >
                         @csrf
                            <div>
                            <label class="titulo" for="razaosocial">RAZÃO SOCIAL</label>
                            <input type="text" id="razao_social" name="razao_social" placeholder="EUROFARMA LABORATORIOS S.A." required>
                            </div>
                           
                            <div>
                            <label class="titulo" for="nomefantasia">NOME FANTASIA DO FABRICANTE</label>
                            <input type="text" id="nomefab" name="nomefab" placeholder="EUROFARMA" required>
                            </div>

                            <div>
                            <label class="titulo" for="cnpjfab">CNPJ DO FABRICANTE</label>
                            <input type="text" id="cnpjfab" name="cnpjfab" placeholder="06.626.253/0001-51" required>
                            </div>

                            <div>
                            <label class="titulo" for="numerofab">NÚMERO DO ENDEREÇO DO FABRICANTE</label>
                            <input type="text" id="numfab" name="numfab" placeholder="1020" required>
                            </div>

                            <div>
                            <label class="titulo" for="nomefab">ENDEREÇO DO FABRICANTE</label>
                            <input type="text" id="endfab" name="endfab" placeholder="rua dos reis" required>
                            </div>

                            <div>
                            <label class="titulo" for="telefonefab">TELEFONE DO FABRICANTE</label>
                            <input type="text" id="telefonefab" name="telefonefab" placeholder="0800-704-3876" required>
                            </div>

                            <div>
                            <label class="titulo" for="emailfab">EMAIL DO FABRICANTE</label>
                            <input type="text" id="emailfab" name="emailfab" placeholder="euroatende@eurofarma.com.br" required>
                            </div>

                            <div>
                            <label class="titulo" for="obsfab">OBSERVAÇÃO DO FABRICANTE</label>
                            <input type="text" id="obfab" name="obfab" placeholder="Remédios manipulados">
                            </div>

                            <div>
                            <input id="submitFabricante" class="button" color="black" type="button" value="Cadastrar Produto">
                            </div>
                    </form>
                </div>
            </div>