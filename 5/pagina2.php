<?php
include('protect.php');
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Página 2</title>
  <link rel="stylesheet" type="text/css" href="css/2.css">
</head>
<body>
<div class="container">
    <h2>Bem-vindo, <?php echo $_SESSION['username']; ?> (ADM)!</h2>
    <p>Esta é a página do Adm</p>
    <h1>Criar relatório de usuários</h1>

	<form method="POST" action="relatorio_usuario.php">
		<label for="user_type">Tipo de usuário:</label>
		<select id="user_type" name="user_type">
			<option value="todos">Todos os usuários</option>
			<option value="admin">Apenas administradores</option>
			<option value="user">Apenas usuários comuns</option>
		</select>

		<button type="submit">Gerar relatório</button>
        <button type="reset">Limpar</button>

	</form>

    <a href="adm.php"><button class="button">Voltar</button></a>
    <br>
    <a href="logout.php"><button class="logout">Logout</button></a> 
</div>
</body>
</html>