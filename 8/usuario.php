<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário do Usuário</title>
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
    <h1>Bem-vindo à Página do Usuário</h1>

    <?php
    include("conexao.php");
    // Iniciar a sessão (certifique-se de fazer isso no início de todas as páginas que usam sessões)
    session_start();

    // Verificar se o usuário está logado (você pode ajustar essa verificação conforme sua implementação)
    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
        echo "<h3>Olá, $username!</h3>";
    } else {
        echo "<h3>Você não está logado.</h3>";
    }
    ?>

    <p>Para adicionar um novo funcionario preencha o seguinte formulario:</p>
    <form action="processar_usuarios.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required>
        </div>
        <div>
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>
        </div>
        <div>
            <label for="setor">Setor:</label>
            <input type="text" id="setor" name="setor" required>
        </div>
        <div>
            <label for="escola">Escola:</label>
            <input type="text" id="escola" name="escola" required>
        </div>
        <div>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" >
        </div>
        <div>
            <br>
            <button type="submit">Enviar</button>
        </div>
    </form>

    <br>
    <input type="button" value="Sair" onclick="sair()">

    <script>
        function sair() {
            window.location.href = 'index.php';
    }

    function imprimirFuncionario(id) {
            alert("Função de impressão personalizada para o funcionário com ID " + id);
    }
    </script>

</body>
</html>
