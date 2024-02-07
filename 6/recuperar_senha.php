<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Recuperar Senha - Sistema de Crachá</title>
</head>
<body>
    <div class="login-container">
        <div>
            <img src="img/cadeado.png" alt="Logo do Sistema de Crachá">
        </div>
        <h2>Recuperar Senha</h2>
        <div>
            <form action="enviar_email_recuperacao.php" method="POST">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                <br>
                <input type="submit" value="Enviar E-mail de Recuperação">
            </form>
        </div>
    </div>
</body>
</html>
