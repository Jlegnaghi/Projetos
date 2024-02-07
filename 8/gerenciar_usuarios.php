<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
    <!-- Inclua seus estilos CSS aqui, se necessário -->
</head>
<body>
    <header>
    <h1>Bem-vindo à Página de Gerenciamento de Usuários</h1>
        <!-- Inclua links de navegação ou botões de logout aqui, se necessário -->
    </header>
    <main>
        <h2>Cadastrar Novo Usuário</h2>
        <form action="cadastrar_usuarios.php" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="nivel_autorizacao">Nível de Autorização:</label>
            <input type="number" id="nivel_autorizacao" name="nivel_autorizacao" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>

        <h2>Usuários Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Email</th>
                    <th>Nível de Autorização</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inclua o arquivo de conexão com o banco de dados
                include("conexao.php");

                // Consulta SQL para obter a lista de usuários
                $sql = "SELECT id, username, email, nivel_autorizacao FROM usuarios";

                // Execute a consulta
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["nivel_autorizacao"] . "</td>";
                        echo '<td><a href="editar_usuarios.php?id=' . $row["id"] . '">Editar</a> | <a href="excluir_usuario.php?id=' . $row["id"] . '">Excluir</a></td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum usuário cadastrado.</td></tr>";
                }

                // Feche a conexão
                $conn->close();
                ?>
            </tbody>
        </table>
    </main>
    <input type="button" value="Sair" onclick="sair()">
    <input type="button" value="Voltar" onclick="voltar()">

<script>
    function sair() {
    // Aqui, você pode adicionar código JavaScript personalizado para efetuar o logout ou qualquer ação necessária
    // Após isso, redirecione para a página de login (ou qualquer outra página) onde o usuário não esteja logado.
    // Substitua 'pagina_de_login.php' pelo URL apropriado.
    window.location.href = 'index.php';
}

function voltar() {
    // Redirecione o usuário de volta para o index.php.
    window.location.href = 'administrador.php';
}
</script>
    <footer>
        <!-- Rodapé da página -->
    </footer>
    <!-- Inclua seus scripts JavaScript aqui, se necessário -->
</body>
</html>