<?php
// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte-se ao banco de dados (certifique-se de incluir seu arquivo de configuração de conexão)
    include("conexao.php");

    // Recupere os valores do formulário
    $userId = $_POST['userId'];
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];
    $newNivelAutorizacao = $_POST['nivel_autorizacao'];

    // Consulta SQL para atualizar as informações do usuário
    $sql = "UPDATE usuarios SET username = '$newUsername', email = '$newEmail', nivel_autorizacao = $newNivelAutorizacao WHERE id = $userId";

    if ($conn->query($sql) === TRUE) {
        // Atualização bem-sucedida, redirecione para a página de gerenciamento de usuários ou faça algo adequado
        header("Location: gerenciar_usuarios.php");
    } else {
        // Erro na atualização, redirecione para uma página de erro ou faça algo adequado
        echo "Erro na atualização: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
} else {
    // Se o formulário não foi submetido, redirecione para uma página de erro ou faça algo adequado
    echo "O formulário não foi submetido corretamente.";
}
?>
