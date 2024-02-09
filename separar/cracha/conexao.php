<?php
/* $servername = "localhost"; // endereço do servidor MySQL (normalmente 'localhost')
$username = "root"; // nome de usuário do MySQL
$password = ""; // senha do MySQL
$dbname = "sistema_cracha"; // nome do banco de dados 

$hostname = 'localhost';
$username = 'jeffersonlegnagh';
$password = ';Rzkz^n}sx}E';
$database = 'jefferso_login_system';

$servername = "localhost"; // endereço do servidor MySQL (normalmente 'localhost')
$username = "jeffersonlegnagh"; // nome de usuário do MySQL
$password = ";Rzkz^n}sx}E"; // senha do MySQL
$dbname = "login_system"; // nome do banco de dados

*/

// Crie uma conexão
/*$conn = new mysqli($servername, $username, $password, $dbname);*/

$hostname = 'localhost';
$username = 'jeffersonlegnagh';
$password = ';Rzkz^n}sx}E';
$database = 'jefferso_login_system';

$conn = new mysqli($hostname, $username, $password, $database);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>