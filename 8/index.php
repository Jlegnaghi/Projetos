<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="limit">
        <div class="media">
            <div class="medio">
                <div class="span">
                    <span >Login</span>
                </div>
                <form class="form-1" action="processar_login.php" method="post">
                    <div class="user">
                        <label for="username">Usuário</label>
                        <input type="text" id="username" name="username" placeholder="Digite o nome de usuário">
                    </div>
                    <div class="pass" data-validate="Senha é obrigatória">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Digite a senha">
                    </div>
                    <div>
                        <div class="remember">
                            <input class="ckb-1" type="checkbox" id="remember-me" name="remember-me">
                            <label class="ckb-2" for="remember-me">Lembrar-me</label>
                        </div>
                        <div>
                            <a href="#">Esqueceu a senha?</a>
                        </div>
                    </div>
                    <div>
                        <button class="button" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
