<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $departamento = ($_POST['departamento'] === 'RH') ? 1 : 0; // Atribui 1 para RH e 0 para TI

    // Valide os dados do formulário (adicione suas validações aqui)

    // Conecte-se ao banco de dados (inclua o seu arquivo de configuração de banco de dados)
    include('db_config.php');

    // Verifique se o nome de usuário já existe no banco de dados
    $sql = "SELECT id FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $erro = "Nome de usuário já existe. Escolha outro nome de usuário.";
    } else {
        // Insira o novo usuário no banco de dados
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Criptografe a senha
        $sql = "INSERT INTO usuarios (username, password, email, nivel_autorizacao) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $username, $hashed_password, $email, $departamento);

        if ($stmt->execute()) {
            // Registro bem-sucedido
            header("Location: index.php"); // Redirecione para a página de login
            exit();
        } else {
            $erro = "Erro ao registrar o usuário. Por favor, tente novamente mais tarde.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
