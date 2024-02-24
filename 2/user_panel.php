<?php
session_start();
if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 2) {
    // Redireciona usuários não autorizados
    header("Location: google.com.br");
    exit();
}
?>

<!-- Conteúdo da página de usuário comum aqui -->