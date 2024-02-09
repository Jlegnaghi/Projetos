<?php
session_start();

// Verifica se a sessão de login está ativa
if (!isset($_SESSION['username'])) {
  header("Location: index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_equipamento.css">
    <title>Reserva de Equipamentos</title>
</head>
<body>
  <div class="container">
    <h2>Bem-vindo, <?php echo $_SESSION['username']; ?> (USER)!</h2>
    <h1>Reserve seu equipamento</h1>
    <p>Esta é a página B.</p>
    <form method="post" action="reserva.php" onsubmit="return validarForm()">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="<?php echo $_SESSION['username']; ?>"><br>

      <label for="equipamento">Equipamento:</label>
      <input type="text" id="equipamento" name="equipamento"><br>

      <label for="dia">Dia:</label>
      <input type="date" id="dia" name="dia"><br>

      <label for="hora">Hora:</label>
      <input type="time" id="hora" name="hora"><br>

      <input type="submit" value="Enviar">
      <input type="reset" value="Limpar">

    </form>    
    <br>
    <a href="user.php"><button>Voltar</button></a>
    <a href="logout.php"><button>Logout</button></a>
    <script>
      function validarForm() {
        var nome = document.getElementById("nome").value;
        var equipamento = document.getElementById("equipamento").value;
        var dia = document.getElementById("dia").value;
        var hora = document.getElementById("hora").value;

        if (nome == "" || equipamento == "" || dia == "" || hora == "") {
          alert("Por favor, preencha todos os campos.");
          return false;
        }
        return true;
      }
    </script>
  </div>
</body>
</html>