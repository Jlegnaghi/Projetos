<?php
session_start();

// Verifica se a sessão de login está ativa
if (!isset($_SESSION['username'])) {
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Página 3</title>
  <link rel="stylesheet" type="text/css" href="css/3.css">
</head>
<body>
<div class="container">
    <h2>Bem-vindo, <?php echo $_SESSION['username']; ?> (ADM)!</h2>
    <p>Esta é a página do Adm.</p>

    <h1>Criar relatório de equipamentos</h1>

    <form method="POST" action="relatorio_equipamentos.php">
        <label for="dia">Dia:</label>
        <input type="date" id="dia" name="dia"><br><br>
    
        <button type="submit">Gerar relatório</button>
        <button type="reset">Limpar</button>

    </form>
    <a href="adm.php"><button>Voltar</button></a>
    <br>
    <a href="logout.php"><button class="logout">Logout</button></a> 
</div>
</body>
</html>