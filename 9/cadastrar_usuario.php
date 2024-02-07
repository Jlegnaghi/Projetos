<?php
session_start();

// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Certifique-se de que todos os campos do formulário estejam nomeados corretamente
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $user_role = $_POST["user_role"];

    // Verifique se o nome de usuário já existe no banco de dados
    $check_username_sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $check_username_stmt = $mysqli->prepare($check_username_sql);
    $check_username_stmt->bind_param("s", $usuario);
    $check_username_stmt->execute();
    $check_username_result = $check_username_stmt->get_result();

    if ($check_username_result->num_rows > 0) {
        echo "Nome de usuário já existe. Escolha outro.";
    } else {
        // Insira o novo usuário no banco de dados
        $insert_sql = "INSERT INTO usuarios (nome, sobrenome, usuario, senha, user_role) VALUES (?, ?, ?, ?, ?)";
        $insert_stmt = $mysqli->prepare($insert_sql);
        $insert_stmt->bind_param("sssss", $nome, $sobrenome, $usuario, $senha, $user_role);

        if ($insert_stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário. Tente novamente.";
        }
    }
}
?>