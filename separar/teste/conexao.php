<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "pesquisa";

/*$host = "localhost";
$usuario = "jeffersonlegnagh";
$senha = ";Rzkz^n}sx}E";
$banco = "jefferso_login_system";*/

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>