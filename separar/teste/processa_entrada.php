<?php
include 'conexao.php'; // Inclua o arquivo de conexão

// Verifica se a solicitação é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos necessários foram fornecidos
    if (isset($_POST["entrada1"], $_POST["entrada2"])) {
        $entrada1 = $_POST["entrada1"];
        $entrada2 = $_POST["entrada2"];
        $hora = date("Y-m-d H:i:s");

        // Use declarações preparadas para evitar injeções de SQL
        $sql = "INSERT INTO catracas (entrada1, entrada2, hora) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sss", $entrada1, $entrada2, $hora);

            if ($stmt->execute()) {
                echo "Dados de entrada inseridos com sucesso.";
                // Redirecionamento automático para a página anterior após 3 segundos
                header("refresh:1;url=index.php"); // Substitua "anterior.php" pelo nome da página anterior
                exit; // Termina o script após o redirecionamento
            } else {
                echo "Erro ao inserir dados de entrada: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Erro na preparação da consulta.";
        }
    } else {
        echo "Campos de entrada ausentes ou inválidos.";
    }
} else {
    echo "Acesso não autorizado.";
}
?>