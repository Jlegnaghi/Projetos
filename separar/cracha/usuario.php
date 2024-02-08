<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário do Usuário</title>
</head>
<body>
    <h1>Bem-vindo à Página do Usuário</h1>
    <p>Para solicitar um crachá preencha o seguinte formulario:</p>
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
            <input type="file" id="foto" name="foto" accept="image/*">
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
        // Aqui, você pode adicionar código JavaScript personalizado para efetuar o logout ou qualquer ação necessária
        // Após isso, redirecione para a página de login (ou qualquer outra página) onde o usuário não esteja logado.
        // Substitua 'pagina_de_login.php' pelo URL apropriado.
        window.location.href = 'index.php';
    }

    function imprimirFuncionario(id) {
        // Aqui você pode adicionar código JavaScript personalizado para imprimir um funcionário específico.
        // Por exemplo, você pode abrir uma nova janela de impressão com os detalhes do funcionário.
        // Certifique-se de personalizar essa função de acordo com suas necessidades.
        alert("Função de impressão personalizada para o funcionário com ID " + id);
    }
    </script>

</body>
</html>
