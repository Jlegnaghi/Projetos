<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administração</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
    <h1>Bem-vindo à Página de Administração</h1>

    <?php    
    // Iniciar a sessão (certifique-se de fazer isso no início de todas as páginas que usam sessões)   
    include("conexao.php");
    session_start();

    // Verificar se o usuário está logado (você pode ajustar essa verificação conforme sua implementação)
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<h3>Olá, $username!</h3>";
    } else {
        echo "<h3>Você não está logado.</h3>";
    }
    ?>

    <h2>Gerenciar Usuários</h2>
    <p>Para gerenciar usuários, clique no link abaixo:</p>
    <a href="gerenciar_usuarios.php">Gerenciar Usuários</a>

    <h2>Gerenciar Crachás</h2>
    <p>Para gerenciar crachás, clique no link abaixo:</p>
    <a href="gerenciar_crachas.php">Gerenciar Crachás</a>
    <br>
    <br>
    <input type="button" value="Sair" onclick="sair()">

    <script>
        function sair() {
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>