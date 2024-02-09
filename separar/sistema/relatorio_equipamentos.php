<?php
include('protect.php');
include('conexao.php');

// Verificar se foi enviado um dia para buscar as reservas
if (!empty($_POST['dia'])) {
    // Formatar a data para o formato do banco de dados
    $dia = date('Y-m-d', strtotime($_POST['dia']));

    // Consultar o banco de dados
    $sql = "SELECT * FROM agendamento WHERE dia = '$dia'";
    $result = $conn->query($sql);

    // Gerar o relatório
    if ($result->num_rows > 0) {
        echo "<h2>Relatório de reservas para o dia " . $_POST['dia'] . "</h2>";
        echo "<table>";
        echo "<tr><th>Nome</th><th>Equipamento</th><th>Data</th><th>Hora</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["equipamento"] . "</td><td>" . $row["dia"] . "</td><td>" . $row["hora"] . "</td></tr>";
        }
        echo "</table>";
        echo "<button type='button' onclick='window.print()'>Imprimir relatório</button>";
    } else {
        echo "Nenhuma reserva encontrada para o dia " . $_POST['dia'] . ".";
    }
} else {
    echo "Por favor, selecione um dia para gerar o relatório.";
}

header("refresh: 20; url=adm.php");

// Fechar a conexão com o banco de dados
$conn->close();
?>
<link rel="stylesheet" type="text/css" href="css/style_rel_equipamento.css">
<br>
<a href="pagina3.php"><button>Voltar</button></a>
<br>
<a href="logout.php"><button>Logout</button></a>