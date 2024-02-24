<<<<<<< HEAD
<?php include 'header.php'; ?>
    <section class="hero">
        <h2>Bem-vindo à nossa loja de vinhos</h2>
        <p>Descubra uma seleção exclusiva de vinhos finos de todo o mundo.</p>
        <a href="produtos.php" class="btn">Explore nossos produtos</a>
    </section>
<?php include 'footer.php'; ?>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Login - Sistema de Crachá</title>
</head>
<body>
    <div class="login-container">
        <div>
            <img src="img/cadeado.png" alt="Logo do Sistema de Crachá">
        </div>
        <h2>Sistema de Crachá</h2>
        <div>
            <form action="login.php" method="POST">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" placeholder="Digite seu usuário" required>
                <br>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                <br>
                <input type="submit" value="Login">
            </form>
            
            <!-- Link para a página de registro -->
            <p>Não tem uma conta? <a href="registro.php">Registre-se</a></p>
            <!-- Link para a página de recuperação de senha -->
            <p>Esqueceu a senha? <a href="recuperar_senha.php">Recupere aqui</a></p>
        </div>
        <?php if (isset($erro)) { ?>
            <p class="erro"><?php echo $erro; ?></p>
            <?php } ?>
    </div>
</body>
</html>
>>>>>>> 034842d8c6a92b9a8ddaee81a634af83d3615fcb
