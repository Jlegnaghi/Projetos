<?php
session_start();

include('conexao.php');

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Verificar as credenciais de login
$username = $_POST['username'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

// Consulta preparada
$sql = "SELECT * FROM users WHERE username = ? AND password = ? AND user_type = ? LIMIT 1";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $username, $password, $user_type);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    // Login bem-sucedido, define a sessão de login
    $_SESSION['username'] = $username;
    
    // Redireciona para a página apropriada com base no tipo de usuário
    if ($user_type == 'admin') {
        header("Location: adm.php");
        exit();
    } else if ($user_type == 'user') {
        header("Location: user.php");
        exit();
    }
}

// Credenciais inválidas, redireciona de volta para a página de login
header("Location: index.html");
exit();

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="shortcut icon" href="img/favicon.png" />
    <title>Página de Login</title>
</head>
<body>

    <div class="container">

        <div class="logo">
            <img src="img/cadeado.png" alt="Logo">
        </div>

        <h2>Página de Login</h2>

        <form action="login.php" method="POST">

            <input type="text" name="username" placeholder="Usuário" required><br>
            <input type="password" name="password" placeholder="Senha" required><br>
            <label for="user_type">Tipo de Usuário:</label>

            <select name="user_type" id="user_type">
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select><br>

            <input type="submit" value="Login">
            
        </form>

    </div>

</body>
</html>