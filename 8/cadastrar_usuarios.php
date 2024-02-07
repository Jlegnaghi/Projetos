<?php
// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao banco de dados (certifique-se de incluir seu arquivo de configuração de conexão)
    include("conexao.php");

    // Recupere os valores do formulário
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $newEmail = $_POST['email'];
    $newNivelAutorizacao = $_POST['nivel_autorizacao'];

    // Consulta SQL para inserir um novo usuário no banco de dados
    $sql = "INSERT INTO usuarios (username, password, email, nivel_autorizacao) VALUES ('$newUsername', '$newPassword', '$newEmail', $newNivelAutorizacao)";

    if ($conn->query($sql) === TRUE) {
        // Inserção bem-sucedida, redirecione para a página de gerenciamento de usuários ou faça algo adequado
        header("Location: gerenciar_usuarios.php");
    } else {
        // Erro na inserção, redirecione para uma página de erro ou faça algo adequado
        echo "Erro na inserção: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
} else {
    // Se o formulário não foi submetido, redirecione para uma página de erro ou faça algo adequado
    echo "O formulário não foi submetido corretamente.";
}
?>
