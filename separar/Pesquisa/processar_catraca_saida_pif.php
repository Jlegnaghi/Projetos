<?php
// Inclua o arquivo de conexão ao banco de dados
include 'conexao.php';

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupere os dados do formulário
    $catraca1_saida = $_POST['catraca_saida_1'];
    $catraca2_saida = $_POST['catraca_saida_2'];
    $hora = date('H:i:s');  // Obtém a hora atual
    $data = date('Y-m-d');  // Obtém a data atual no formato "AAAA-MM-DD"

    // Consulta SQL para inserir os dados na tabela "pia"
    $sql = "INSERT INTO pif (Saida1, Saida2, Hora, Data) VALUES ('$catraca1_saida', '$catraca2_saida', '$hora', '$data')";

    if ($mysqli->query($sql) === true) {
        echo "Dados da Catraca de Saída Brasil armazenados com sucesso!";
    } else {
        echo "Erro ao armazenar os dados: " . $mysqli->error;
    }
}

// Não é necessário fechar a conexão aqui, pois a conexão foi feita no arquivo de conexão.php
?>