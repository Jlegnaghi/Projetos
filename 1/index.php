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
    <title>Login</title>
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="post">
            <input type="email" name="email" id="" placeholder="Usuário">
            <input type="password" name="senha" id="" placeholder="Senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda não tem cadastro? <strong>Cadastre-se</strong></a>
        </form>
    </div>

<?php
    if (isset($_POST['email'])) {
        $email = addslashes ($_POST['email']);
        $senha = addslashes ($_POST['senha']);
        //verifica se esta vazio
        if (!empty($email) && !empty($senha)) {
            $u->conectar("projeto_web", "localhost", "root", "");
            if ($u->msgErro == "") { //sem erro
                if ($u->logar($email,$senha)) {
                    header("location: areaPrivada.php");
                } else {
?>
                    <div class="msg-erro">
                        "E-mail e/ou senha estão incorretos!"
                    </div>
<?php
                }
            } else {
?>
                <div class="msg-erro">
                    <?php echo "Erro: ".$u->msgErro;?>
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