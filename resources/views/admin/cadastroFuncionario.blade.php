<div class="cadastro-form form-usuario">
                <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> 
                                    </svg> Cadastro de Funcionário</b>
                </header>
                <div class="login">
                    <form action="{{url('cadastrofuncionario')}}" class="login__form" method="POST">
                        @csrf
                        <div>
                            <label class="titulo" for="nome">NOME</label>
                            <input type="text" id="nome" name="nome" placeholder="Marcelo" required>
                            </div>

                            <div>
                            <label class="titulo" for="nome">SOBRENOME</label>
                            <input type="text" id="nome" name="sobrenome" placeholder="Oliveira da Silva" required>
                            </div>

                            <div>
                            <label class="titulo" for="cpf">CPF</label>
                            <input type="number" id="cpf" name="cpf" placeholder="40033322211" required>
                            </div>

                            <div>
                            <label class="titulo" for="nascimento">DATA DE NASCIMENTO</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="11/02/1990" required>
                            </div>

                            <div>
                            <select class="titulo" type="text" name="cargo" class="browser-default" required pattern="[1-4]">
                                        <option selected hidden disabled="disabled" selected="selected" value="0">ESCOLHA UM CARGO</option>
                                        <option value="Gerente">GERENTE</option>
                                        <option value="Caixa">CAIXA</option>
                                        <option value="Atendente">ATENDENTE</option>
                                        <option value="Entregador">ENTREGADOR</option>
                            </select>
                            </div>

                            <div>
                            <select required class="titulo" type="text" name="selectloja" required>
                                        <option value="" class="titulo" disabled="disabled" selected="selected" >ESCOLHA A LOJA</option>
                                        <option value="1">LOJA 1 - GUARULHOS</option>
                                        <option value="2">LOJA 2 - VILA GALVÃO</option>
                                        <option value="3">LOJA 3 - JAÇANÃ</option>
                                        <option value="4">LOJA 4 - VILA MARIA</option>
                            </select>
                            </div>

                            <div>
                            <label class="titulo" for="salario">SALÁRIO DO FUNCIONÁRIO</label>
                            <input type="number" id="salario" name="salario" placeholder="1.930,00" required>
                            </div>

                            <div>
                            <input class="button" type="submit" value="Cadastrar">
                            </div>
                    </form>
                </div>  
            </div>