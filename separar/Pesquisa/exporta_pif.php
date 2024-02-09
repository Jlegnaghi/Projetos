<?php
// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

// Nome da tabela que você deseja exportar
$tabela = "pif";

// Consulta para obter todos os dados da tabela
$sql = "SELECT * FROM $tabela";
$resultado = $mysqli->query($sql);

if ($resultado->num_rows > 0) {
    // Cabeçalho do arquivo CSV
    $csv = "ID,Entrada1,Entrada2,Saida1,Saida2,Hora,Data\n";

    // Adicione os dados da tabela ao arquivo CSV
    while ($linha = $resultado->fetch_assoc()) {
        $csv .= $linha['ID'] . "," . $linha['Entrada1'] . "," . $linha['Entrada2'] . "," . $linha['Saida1'] . "," . $linha['Saida2'] . "," . $linha['Hora'] . "," . $linha['Data'] . "\n";
    }

    // Defina o tipo de conteúdo como um arquivo CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="dados_da_pif.csv"');

    // Envie o arquivo CSV para download
    echo $csv;
} else {
    echo "Nenhum dado encontrado na tabela.";
}

// Feche a conexão com o banco de dados
$mysqli->close();
?>