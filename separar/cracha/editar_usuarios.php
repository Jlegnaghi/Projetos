<?php
// Verifique se um ID de usuário foi fornecido na URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    // Conecte-se ao banco de dados (certifique-se de incluir seu arquivo de configuração de conexão)
    include("conexao.php");

    // Consulta SQL para obter os detalhes do usuário com base no ID
    $sql = "SELECT * FROM usuarios WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $email = $row['email'];
        $nivel_autorizacao = $row['nivel_autorizacao'];
    } else {
        // Usuário não encontrado, redirecione para uma página de erro ou faça algo adequado
        echo "Usuário não encontrado.";
        exit;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
} else {
    // Se nenhum ID de usuário foi fornecido na URL, redirecione para uma página de erro ou faça algo adequado
    echo "ID de usuário não fornecido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>

    <form action="atualizar_usuarios.php" method="POST">
        <input type="hidden" name="userId" value="<?php echo $userId; ?>">
        
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
        <br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
        <br>
        
        <label for="nivel_autorizacao">Nível de Autorização:</label>
        <input type="number" id="nivel_autorizacao" name="nivel_autorizacao" value="<?php echo $nivel_autorizacao; ?>" required>
        <br>

        <input type="submit" value="Salvar Alterações">
    </form>
</body>
</html>
