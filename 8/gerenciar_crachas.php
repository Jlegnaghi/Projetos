<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Crachá</title>
</head>
<body>
<h1>Bem-vindo à Página de Gerenciamento de Crachá</h1>
<h2>Funcionários Cadastrados</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Escola</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Inclua o arquivo de conexão com o banco de dados
        include("conexao.php");

        // Consulta SQL para obter a lista de funcionários
        $sql = "SELECT id, Nome, Sobrenome, Cargo, Setor, Escola, Foto FROM funcionarios";

        // Execute a consulta
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["Nome"] . "</td>";
                echo "<td>" . $row["Sobrenome"] . "</td>";
                echo "<td>" . $row["Cargo"] . "</td>";
                echo "<td>" . $row["Setor"] . "</td>";
                echo "<td>" . $row["Escola"] . "</td>";
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['Foto']) . "' width='50' height='50' /></td>";
                echo '<td><a href="editar_funcionario.php?id=' . $row["id"] . '">Editar</a> | <a href="excluir_funcionario.php?id=' . $row["id"] . '">Excluir</a> | <a href="#" onclick="imprimirFuncionario(' . $row["id"] . ')">Imprimir</a></td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Nenhum funcionário cadastrado.</td></tr>";
        }

        // Feche a conexão
        $conn->close();
        ?>
    </tbody>
</table>


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
</body>
</html>