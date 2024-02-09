<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Dados do MySQL</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Entrada 1</th>
            <th>Entrada 2</th>
            <th>Saída 1</th>
            <th>Saída 2</th>
            <th>Hora</th>
            <th>Data</th>
        </tr>

        <?php
        include 'conexao.php';

        // Consulta SQL para buscar os dados da tabela
        $sql = "SELECT * FROM pif";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            // Exibir os dados na tabela
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Entrada1'] . "</td>";
                echo "<td>" . $row['Entrada2'] . "</td>";
                echo "<td>" . $row['Saida1'] . "</td>";
                echo "<td>" . $row['Saida2'] . "</td>";
                echo "<td>" . $row['Hora'] . "</td>";
                echo "<td>" . $row['Data'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Nenhum resultado encontrado.";
        }

        // Não feche a conexão aqui, pois você já fechou no arquivo conexao.php
        ?>

    </table>
</body>
</html>