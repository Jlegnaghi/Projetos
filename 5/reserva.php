<!DOCTYPE html>
<html>
  <head>
    <title>Formulário de Reserva de Equipamentos - Resultado</title>
  </head>
  <body>
    <h1>Reserva de equipamento</h1>

    <?php
      // Verifica se todos os campos do formulário foram preenchidos
      if (isset($_POST['nome']) && isset($_POST['equipamento']) && isset($_POST['dia']) && isset($_POST['hora'])) {
        // Recebe os dados do formulário
        $nome = $_POST['nome'];
        $equipamento = $_POST['equipamento'];
        $dia = $_POST['dia'];
        $hora = $_POST['hora'];

        // Conecta ao banco de dados
        $hostname = 'localhost';
        $username = 'jefferso_teste';
        $password = '~Yd6DYLpwQNa';
        $database = 'jefferso_login_system';

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Conexão falhou: " . $conn->connect_error);
        }

        // Insere os dados no banco de dados
        $sql = "INSERT INTO agendamento (nome, equipamento, dia, hora) VALUES ('$nome', '$equipamento', '$dia', '$hora')";

        if ($conn->query($sql) === TRUE) {
          echo "<p>Dados inseridos com sucesso!</p>";
        } else {
          echo "Erro ao inserir dados: " . $conn->error;
        }

        $conn->close();

        // Exibe os dados do formulário
        echo "<p>Nome: $nome</p>";
        echo "<p>Equipamento: $equipamento</p>";
        echo "<p>Dia: $dia</p>";
        echo "<p>Hora: $hora</p>";
      } else {
        echo "<p>Por favor, preencha todos os campos do formulário.</p>";
      }

      header("refresh: 20; url=user.php");
    ?>

    <a href="user.php"><button>Voltar</button></a>
  </body>
</html>
