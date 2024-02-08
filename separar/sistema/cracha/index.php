<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
    <title>Adiciona Funcionario</title>
</head>
<body>
	<h1>Adicionar Funcionário</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" required>

		<label for="cargo">Cargo:</label>
		<input type="text" name="cargo" required>

		<label for="foto">Foto:</label>
		<input type="file" name="foto" accept="image/*" required>
		
		<button type="submit">Adicionar</button>
		<button type="reset">Limpar</button>
	</form>
	
	<?php
		// Conectar ao banco de dados
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dbreserva";
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Verificar a conexão
		if ($conn->connect_error) {
		    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
		}

		// Verificar se o formulário foi enviado
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nome = $_POST["nome"];
			$cargo = $_POST["cargo"];
			$foto = $_FILES["foto"];

			$dir = 'uploads'; // nome da pasta a ser criada
			if (!is_dir($dir)) { // verifica se a pasta já existe
				mkdir($dir); // cria a pasta
			}
			
			// Salvar a foto no servidor
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($foto["name"]);
			move_uploaded_file($foto["tmp_name"], $target_file);

			// Inserir os dados no banco de dados
			$sql = "INSERT INTO funcionarios (nome, cargo, foto) VALUES ('$nome', '$cargo', '$target_file')";
			if ($conn->query($sql) === TRUE) {
			    echo "<div>Funcionário adicionado com sucesso!</div>";
			} else {
			    echo "<div>Erro ao adicionar funcionário: " . $conn->error . "</div>";
			}
		}
		// Fechar a conexão com o banco de dados
		$conn->close();

		
	?>

	<div class="button-container">
		<a href="exibir.php"><button>Exibir</button></a>		
	</div>
</body>
</html>