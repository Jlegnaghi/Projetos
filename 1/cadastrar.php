<?php
require_once 'classes/usuario.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar-se</title>
</head>
<body>
    <div id="corpo-form-cad">
        <h1>Cadastrar</h1>
        <form method="post">
            <input type="text" name="nome" id="" placeholder="Nome Completo" maxlength="30">
            <input type="text" name="telefone" id="" placeholder="Telefone" maxlength="30">
            <input type="email" name="email" id="" placeholder="Usuário" maxlength="40">
            <input type="password" name="senha" id="" placeholder="Senha" maxlength="15">
            <input type="password" name="confSenha" id="" placeholder="Confirmar Senha" maxlength="50">
            <input type="submit" value="Cadastar">
        </form>
    </div>

    <?php
    //verificar se clicou no botao
    if (isset($_POST['nome'])) {
        $nome = addslashes ($_POST['nome']);
        $telefone = addslashes ($_POST['telefone']);
        $email = addslashes ($_POST['email']);
        $senha = addslashes ($_POST['senha']);
        $confirmarSenha = addslashes ($_POST['confSenha']);
        //verifica se esta vazio
        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u->conectar("projeto_web", "localhost", "root", "");
            if ($u->msgErro == "") { //sem erro
                if ($senha == $confirmarSenha) {
                    if ($u->cadastrar($nome,$telefone,$email,$senha)) {
?>
                        <div id="msg-sucesso">
                            "Cadastrado com sucesso!"
                        </div>
<?php
                    } else {
?>
                        <div class="msg-erro">
                            "Email já cadastrado!"
                        </div>
<?php
                    }
                } else {
?>
                    <div class="msg-erro">
                        "Senha e confirmar senha estão errados!"
                    </div>
<?php
                }
            } else {
?>
                <div class="msg-erro">
                    <?php echo "Erro: " . $u->msgErro; ?>
                </div>
<?php
            }
        } else {
?>
            <div class="msg-erro">
                "Preencha todos os campos!"
            </div>
<?php
        }
    }
    ?>

</body>
</html>