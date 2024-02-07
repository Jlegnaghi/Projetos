<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Laboratório de Informática</title>
</head>
<body>
    <header>
        <h1>Reserva de Laboratório de Informática</h1>
        <?php
        // Inicie a sessão
        session_start();

            if (!isset($_SESSION['username'])) {
                // Se o usuário não fez login, redirecione para a página de login
                header("Location: index.php");
                exit;
            }

        // Verifique se o nome de usuário está definido na sessão
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<h2>Bem-vindo, Professor $username!</h2>";
        } else {
            // Se o nome de usuário não estiver definido, redirecione para a página de login
            header("Location: login.php");
        }
        ?>

        
    </header>

    <section id="reserva">
        <h2>Formulário de Reserva</h2>
        <form action="processar_reserva.php" method="post">
            <label for="dia">Dia da Reserva:</label>
            <input type="date" name="dia" id="dia" required>

            <label for="horario">Horário:</label>
            <select id="horario" name="horario">
                <option value="19:00 às 19:50">19:00 às 19:50</option>
                <option value="19:50 às 20:40">19:50 às 20:40</option>
                <option value="21:00 às 21:50">21:00 às 21:50</option>
                <option value="21:50 às 22:10">21:50 às 22:10</option>
            </select><br>

            <label for="laboratorio">Laboratório:</label>
            <select id="laboratorio" name="laboratorio">
                <option value="Lab Info 1">Laboratório de Informática 1</option>
                <option value="Lab Info 2">Laboratório de Informática 2</option>
                <option value="Lab Info 3">Laboratório de Informática 3</option>
                <option value="Lab Info 4">Laboratório de Informática 4</option>
                <option value="Lab Info 5">Laboratório de Informática 5</option>
                <option value="Lab Info 6">Laboratório de Informática 6</option>
                <option value="Lab Info 7">Laboratório de Informática 7</option>
                <option value="Lab Info 8">Laboratório de Informática 8</option>
                <option value="Lab Info 9">Laboratório de Informática 9</option>
                <option value="Lab Info 10">Laboratório de Informática 10</option>
            </select><br>

            <!-- Outros campos do formulário, se necessário -->

            <input type="submit" value="Reservar Laboratório">
        </form>
    </section><br>
    <form action="logout.php" method="post">
        <input type="submit" value="Sair">
    </form>

    <footer>
        <p>&copy; 2023 Laboratório de Informática</p>
    </footer>
</body>
</html>
