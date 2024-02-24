<?php
// Conecte-se ao banco de dados (certifique-se de incluir seu arquivo de configuração de conexão)
include("conexao.php");

// Recupere os valores do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuário e senha válidos, verifique o nível de autorização
    $row = $result->fetch_assoc();
    $nivel_autorizacao = $row['nivel_autorizacao'];
    
    if ($nivel_autorizacao == 1) {
        // Nível de autorização é 1, redirecione para a página do usuário
        header("Location: usuario.php");
    } elseif ($nivel_autorizacao == 0) {
        // Nível de autorização é 0, redirecione para a página do administrador
        header("Location: administrador.php");
    } else {
        // Nível de autorização desconhecido, redirecione de volta para a página de login com uma mensagem de erro
        header("Location: index.html?error=2");
    }
} else {
    // Nome de usuário ou senha incorretos, redirecione de volta para a página de login com uma mensagem de erro
    header("Location: index.html?error=1");
}

// Feche a conexão com o banco de dados
$conn->close();
?>
