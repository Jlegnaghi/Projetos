<?php
// Informações do banco de dados
$host = "localhost"; // Endereço do servidor do banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$database = "jefferso_reserva"; // Nome do banco de dados

/*$host = "localhost"; // Endereço do servidor do banco de dados
$username = "jeffersonlegnagh"; // Nome de usuário do banco de dados
$password = ";Rzkz^n}sx}E"; // Senha do banco de dados
$database = "jefferso_reserva"; // Nome do banco de dados*/

// Conexão com o banco de dados
$mysqli = new mysqli($host, $username, $password, $database);

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

// Defina a codificação para garantir que os caracteres sejam tratados corretamente
$mysqli->set_charset("utf8");
?>