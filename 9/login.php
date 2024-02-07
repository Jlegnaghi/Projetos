<?php
session_start();

// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT usuario, user_role FROM usuarios WHERE usuario = ? AND senha = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login bem-sucedido
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['usuario'];
        $_SESSION['user_role'] = $row['user_role'];

        if ($_SESSION['user_role'] == 'administrador') {
            header("Location: administrador.php");
        } elseif ($_SESSION['user_role'] == 'professor') {
            header("Location: professor.php");
        } else {
            header("Location: usuario.php");
        }
        exit; // Certifique-se de encerrar o script após o redirecionamento
    } else {
        // Login falhou
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>