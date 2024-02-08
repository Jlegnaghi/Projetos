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
  <title>Página do Administrador</title>

  <link rel="stylesheet" type="text/css" href="css/style_adm.css">
</head>
<body>
<div class="container">
    <h2>Bem-vindo, <?php echo $_SESSION['username']; ?> (ADM)!</h2>
    <p>Esta é a página do Administrador.</p>
    <a href="pagina1.php"><button>Gerenciar Usuarios</button></a>
    <br>
    <a href="pagina2.php"><button>Relatorio de Usuarios</button></a>
    <br>
    <a href="pagina3.php"><button>Relatorio de Reserva</button></a>
    <br>
    <a href="logout.php"><button class="logout">Logout</button></a>    
  </div>
</body>
</html>