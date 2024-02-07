<?php
session_start();
if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 1) {
    // Redireciona usuários não autorizados
    header("Location: index.php");
    exit();
}
?>

<!-- Conteúdo da página de admin aqui -->