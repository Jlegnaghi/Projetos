<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['username'])){
    die("Voçe nao tem permissão! <p><a href=\"index.html\">Entrar</p>");
}
// Verifica se a sessão de login está ativa
if (!isset($_SESSION['username'])) {
  header("Location: index.html");
  exit();
}
?>