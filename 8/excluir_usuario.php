<?php
// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

// Verifique se o ID do usuário a ser excluído foi fornecido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consulta SQL para excluir o usuário com base no ID
    $sql = "DELETE FROM usuarios WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        // Exclusão bem-sucedida, redirecione de volta para a página de gerenciamento de usuários
        header("Location: gerenciar_usuarios.php");
    } else {
        // Se houver um erro na exclusão, você pode tratá-lo aqui
        echo "Erro ao excluir o usuário: " . $conn->error;
    }
} else {
    // ID de usuário não fornecido
    echo "ID de usuário não fornecido.";
}

// Feche a conexão
$conn->close();
?>