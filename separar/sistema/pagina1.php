<?php
session_start();

include('protect.php');
include('conexao.php');

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Função para criar um novo usuário
function criarUsuario($conn, $username, $password, $usertype) {
    $sql = "INSERT INTO users (username, password, user_type) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $username, $password, $usertype);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// Função para atualizar os dados de um usuário
function atualizarUsuario($conn, $id, $username, $password, $usertype) {
    $sql = "UPDATE users SET username = ?, password = ?, user_type = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $username, $password, $usertype, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// Função para excluir um usuário
function excluirUsuario($conn, $id) {
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// Verifica se o formulário foi enviado para criar um novo usuário
if (isset($_POST['criar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['user_type'];

    criarUsuario($conn, $username, $password, $usertype);
}

// Verifica se o formulário foi enviado para atualizar um usuário existente
if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['user_type'];

    atualizarUsuario($conn, $id, $username, $password, $usertype);
}

// Verifica se o formulário foi enviado para excluir um usuário
if (isset($_POST['excluir'])) {
    $id = $_POST['id'];

    excluirUsuario($conn, $id);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página do Administrador</title>
    <link rel="stylesheet" type="text/css" href="css/1.css">
</head>
<body>
    <div class="container">
        <h2>Bem-vindo, <?php echo $_SESSION['username']; ?> (ADM)!</h2>
        <p>Esta é a página do Administrador, certifique-se das alterações a serem feitas.</p>
        <h3>Gerenciar Usuários</h3>
        <h4>Criar Novo Usuário</h4>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Usuário" required><br>
            <input type="password" name="password" placeholder="Senha" required><br>
            <label for="user_type">Tipo de Usuário:</label>
            <select name="user_type" id="user_type">
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select><br>
            <input type="submit" name="criar" value="Criar">
        </form>
        <h4>Atualizar Usuário</h4>
        <form action="" method="POST">
            <input type="text" name="id" placeholder="ID do Usuário" required><br>
            <input type="text" name="username" placeholder="Usuário" required><br>
            <input type="password" name="password" placeholder="Senha" required><br>
            <label for="user_type">Tipo de Usuário:</label>
            <select name="user_type" id="user_type">
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select><br>
            <input type="submit" name="atualizar" value="Atualizar">
        </form>
        <h4>Excluir Usuário</h4>
        <form action="" method="POST">
            <input type="text" name="id" placeholder="ID do Usuário" required><br>
            <input type="submit" name="excluir" value="Excluir">
        </form>
    </div>
    <a href="adm.php"><button>Voltar</button></a>
    <br>
    <a href="logout.php"><button class="logout">Logout</button></a> 
</body>
</html>