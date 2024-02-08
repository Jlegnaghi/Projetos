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
  <title>Crachá</title>
  <link rel="stylesheet" type="text/css" href="css/style_cracha.css">
</head>
<body>
  <div class="container">
    <h2>Página para Criar Crachá, <?php echo $_SESSION['username']; ?> (USER)!</h2>
    <p>Esta é a página A.</p>
    <a href="user.php"><button>Voltar</button></a>
    <a href="logout.php"><button>Logout</button></a>
  </div>
</body>
</html>