<?php
// Parâmetros de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "good_wines";

/*$servername = "localhost"; // Endereço do servidor do banco de dados
$username = "jeffersonlegnagh"; // Nome de usuário do banco de dados
$password = ";Rzkz^n}sx}E"; // Senha do banco de dados
$database = "jefferso_good_wine"; // Nome do banco de dados*/

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>
