<?php
session_start();

if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'usuario') {
// Conteúdo para usuários
echo "Bem-vindo, Usuário!";
} else {
    // Redireciona para a página de permissão negada
    header("Location: index.php");
}
?>