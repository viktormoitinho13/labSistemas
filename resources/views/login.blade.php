<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form action="user" id="login-form" class="form" action="" method="post">
                        @csrf
							<div class="img-profile"><i class="far fa-user-circle"></i></div>							
                            <div class="form-group">
                                <label for="username" class="text-info">Usuário:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group submitBtn">
                                <input type="submit" name="submit" class="btn btn-md" value="Entrar"><br><br>
								<p class="text-info">Esqueci minha senha</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
