/*Criação das tabelas */
/*Descrição da tabela funcionário
 
 id_funcionario é a chave primaria e auto incrementada da tabela, é um inteiro. 
 cpf_funcionario é uma cadeia de caracteres de 14 unidades e seu dado precisa ser único na tabela.cargo
 nome_funcionario é uma cadeira de caracteres de 30 unidades.
 sobrenome_funcionario é uma cadeira de caracteres de 50 unidades.
 nascimento_funcionario é um campo de data (formato americano)
 */
create table funcionario (
  id_funcionario int auto_increment primary key,
  cpf_funcionario VARCHAR(14) unique,
  nome_funcionario varchar (30),
  sobrenome_funcionario varchar (50),
  nascimento_funcionario date
)
/*Descrição da tabela cargo 
 
 id_cargo é a chave primaria e auto incrementada da tabela, é um inteiro. 
 cargo_funcao é uma cadeira de caracter de 30 unidades e terá os dados do cargo do funcionário.
 cargo_loja é um inteiro que receberá o número da loja que o funcionario trabalha.
 cargo_salario é um float que receberá os dados salariais do funcionario.
 */
create table cargo (
  id_cargo int auto_increment primary key,
  cargo_funcao varchar (30),
  cargo_loja int,
  cargo_salario float,
  constraint fk_cargo_funcionario foreign key (id_cargo) references funcionario (id_funcionario)
)
/*Descrição da tabela de login
 
 id_login é a chave primaria auto incrementada da tabela, é um inteiro.
 loja_login é um inteiro e unico na tabela, será o login da loja.
 loja_login_senha é um varchar de 100 caracteres, o padrão de criptografia é o MD5.
 */
create table login (
  id_login int auto_increment primary key,
  loja_login int unique,
  loja_login_senha varchar(100)
)
