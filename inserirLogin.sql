/*Transaction que inseri o login*/

start TRANSACTION;

	insert into login 
    	(login.loja_login, login.loja_login_senha)
    values 
    	(, md5(''));
        
       commit;



