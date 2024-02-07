<?php
// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

// Consulta SQL para buscar as reservas do dia atual
$sql = "SELECT data, horario, usuario FROM reservas WHERE data = CURDATE()";
$result = $mysqli->query($sql);

$reservas = array();

while ($row = $result->fetch_assoc()) {
    $reservas[] = $row;
}

// Retorna as reservas como JSON
header('Content-Type: application/json');
echo json_encode($reservas);
?>