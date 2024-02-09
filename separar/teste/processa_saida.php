<?php
include 'conexao.php'; // Inclui o arquivo de conexão

// Verifica se a solicitação é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos necessários foram fornecidos
    if (isset($_POST["saida1"], $_POST["saida2"])) {
        $saida1 = $_POST["saida1"];
        $saida2 = $_POST["saida2"];
        $hora = date("Y-m-d H:i:s");

        // Use declarações preparadas para evitar injeções de SQL
        $sql = "INSERT INTO catracas (saida1, saida2, hora) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("sss", $saida1, $saida2, $hora);

            if ($stmt->execute()) {
                echo "Dados de saída inseridos com sucesso.";
                // Redirecionamento automático para a página anterior após 3 segundos
                header("refresh:1;url=index.php"); // Substitua "anterior.php" pelo nome da página anterior
                exit; // Termina o script após o redirecionamento
            } else {
                echo "Erro ao inserir dados de saída: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Erro na preparação da consulta.";
        }
    } else {
        echo "Campos de saída ausentes ou inválidos.";
    }
} else {
    echo "Acesso não autorizado.";
}
?>