<?php
session_start();
include('db_config.php'); // Inclua o arquivo de configuração do banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL usando prepared statement para verificar as credenciais
    $sql = "SELECT id, username, password, nivel_autorizacao FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $db_username, $db_password, $nivel_autorizacao);

    if ($stmt->fetch() && password_verify($password, $db_password)) {
        // Autenticação bem-sucedida
        $_SESSION['usuario_id'] = $id;
        $_SESSION['tipo_usuario'] = $nivel_autorizacao;

        // Redirecione com base no nível de autorização
        if ($nivel_autorizacao === 0) {
            header("Location: google.com.br"); // Redirecione para a página do administrador
            exit();
        } elseif ($nivel_autorizacao === 1) {
            header("Location: user_panel.php"); // Redirecione para a página do usuário comum
            exit();
        } else {
            // Adicione uma lógica de tratamento de erro caso o nível de autorização seja desconhecido
            $erro = "Nível de autorização desconhecido.";
        }
    } else {
        $erro = "Nome de usuário ou senha incorretos.";
    }

    $stmt->close();
}

// Tratamento de erro em caso de problemas com a inicialização da sessão ou redirecionamento
if (session_status() === PHP_SESSION_NONE) {
    $erro = "Erro na inicialização da sessão.";
} elseif (isset($_SESSION['usuario_id']) && isset($_SESSION['tipo_usuario'])) {
    $erro = "Erro de redirecionamento após a autenticação.";
}
?>
