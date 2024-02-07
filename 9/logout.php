<?php
// Inicie a sessão
session_start();

// Destrua a sessão
session_destroy();

// Redirecione o usuário de volta para a página de login ou outra página de sua escolha
header("Location: index.php");
?>
