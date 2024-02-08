<?php
include 'conexao.php'; // Inclui o arquivo de conexão

// Consulta ao banco de dados para buscar os dados
$sql = "SELECT * FROM catracas";
$resultado = $conexao->query($sql);

if ($resultado) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="Catracas.csv"');

    $output = fopen('php://output', 'w');

    fputcsv($output, array('Hora', 'Entrada 1', 'Entrada 2', 'Saída 1', 'Saída 2'));

    while ($row = $resultado->fetch_assoc()) {
        fputcsv($output, $row);
    }

    fclose($output);
} else {
    echo "Erro na consulta: " . $conexao->error;
}

$conexao->close();
?>