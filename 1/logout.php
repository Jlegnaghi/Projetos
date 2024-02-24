<?php
session_start();

// Destrua a sessão de login
session_destroy();

// Redireciona para a página de login
header("Location: index.html");
?>