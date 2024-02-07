<?php
session_start();

if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'administrador') {
    // Conteúdo para administradores
    echo "Bem-vindo, Administrador!";
} else {
    // Redireciona para a página de permissão negada
    header("Location: index.php");
}
?>
    

<form action="cadastrar_usuario.php" method="post">
    
<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" required><br>

<label for="sobrenome">Sobrenome:</label>
<input type="text" id="sobrenome" name="sobrenome" required><br>

<label for="usuario">Nome de Usuário:</label>
<input type="text" id="usuario" name="usuario" required><br>

<label for="senha">Senha:</label>
<input type="password" id="senha" name="senha" required><br>

<label for="user_role">Nível de Autorização:</label>
<select id="user_role" name="user_role">
    <option value="administrador">Administrador</option>
    <option value="usuario">Usuário</option>
    <option value="professor">Professor</option>
</select><br>

<input type="submit" value="Cadastrar Usuário">

</form> <!-- Feche a tag form aqui -->