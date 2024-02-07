<?php
 
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sistema_cracha';

/*

$hostname = 'localhost';
$username = 'jeffersonlegnagh';
$password = ';Rzkz^n}sx}E';
$database = 'jefferso_login_system';

*/

$conn = new mysqli($hostname, $username, $password, $database);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>