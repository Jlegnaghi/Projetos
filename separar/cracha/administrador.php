<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administração</title>
</head>
<body>
    <h1>Bem-vindo à Página de Administração</h1>

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
    // Aqui, você pode adicionar código JavaScript personalizado para efetuar o logout ou qualquer ação necessária
    // Após isso, redirecione para a página de login (ou qualquer outra página) onde o usuário não esteja logado.
    // Substitua 'pagina_de_login.php' pelo URL apropriado.
    window.location.href = 'index.php';
}
    </script>
</body>
</html>