<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agendamento de Laboratório</title>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Sistema de Agendamento de Laboratório</h1>
    </header>

    <section id="login">
        <h2>Faça o Login</h2>
        <form action="login.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Entrar">
        </form>
    </section>

    <table>
        <thead>
            <tr>
                <th>Dia</th>
                <th>Horário</th>
                <th>Laboratório</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conecte-se ao banco de dados e consulte as reservas para o dia atual
            include("conexao.php");
            session_start();

            

            $hoje = date("Y-m-d");

            $sql = "SELECT dia, horario, laboratorio FROM reservas WHERE dia = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("s", $hoje);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['dia'] . "</td>";
                echo "<td>" . $row['horario'] . "</td>";
                echo "<td>" . $row['laboratorio'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    

    <footer>
        <p>&copy; 2023 Laboratório de Informática</p>
    </footer>
</body>
</html>