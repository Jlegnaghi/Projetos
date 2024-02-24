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
  <title>Página do Usuário</title>
  <link rel="stylesheet" type="text/css" href="css/style_user.css">
</head>
<body>
<div class="container">
    <h2>Bem-vindo, <?php echo $_SESSION['username']; ?> (USER)!</h2>
    <p>Esta é a página do Usuário.</p>
    <a href="cracha/cracha.php"><button>Crachá</button></a>
    <br>
    <a href="equipamento.php"><button>Equipamento</button></a>
    <br>
    <a href="logout.php"><button>Logout</button></a>    
  </div>
</body>
</html>