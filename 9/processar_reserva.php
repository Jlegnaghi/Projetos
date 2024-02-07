<?php
// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os dados do formulário
    $dia = $_POST["dia"];
    $horario = $_POST["horario"];
    $laboratorio = $_POST["laboratorio"];
    $usuario = $_POST['usuario'];

    // Consulta SQL para inserir a reserva na tabela de reservas
    $sql = "INSERT INTO reservas (dia, horario, laboratorio) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $dia, $horario, $laboratorio);

    if ($stmt->execute()) {
        echo "Reserva efetuada com sucesso!";
    } else {
        echo "Erro ao efetuar a reserva. Tente novamente.";
    }
}
?>