<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Registro - Sistema de Crachá</title>
</head>
<body>
    <div class="login-container">
        <div>
            <img src="img/cadeado.png" alt="Logo do Sistema de Crachá">
        </div>
        <h2>Registro</h2>
        <div>
            <form action="processar_registro.php" method="POST">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" placeholder="Digite um nome de usuário" required>
                <br>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite uma senha" required>
                <br>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu endereço de e-mail" required>
                <br>
                <label for="departamento">Departamento:</label>
                <select id="departamento" name="departamento">
                    <option value="RH">RH</option>
                    <option value="TI">TI</option>
                </select>
                <br>
                <input type="submit" value="Registrar">
            </form>
        </div>
    </div>
</body>
</html>