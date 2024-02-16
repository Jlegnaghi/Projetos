<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sistema_cracha';

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>