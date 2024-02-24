<?php

include('protect.php');
include('conexao.php');

// Definir o tipo de usuário
if ($_POST['user_type'] == 'admin') {
    $user_type = 'administrador';
    $where_clause = "WHERE user_type = 'admin'";
} else if ($_POST['user_type'] == 'user') {
    $user_type = 'usuário comum';
    $where_clause = "WHERE user_type = 'user'";
} else {
    $user_type = 'todos os usuários';
    $where_clause = "";
}

// Consultar o banco de dados
$sql = "SELECT * FROM users " . $where_clause;
$result = $conn->query($sql);

// Gerar o relatório
if ($result->num_rows > 0) {
    echo "<h2>Relatório de usuários (" . $user_type . ")</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Senha</th><th>Tipo</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td>" . $row["user_type"] . "</td></tr>";
    }
    echo "</table>";
    echo "<button type='button' onclick='window.print()'>Imprimir relatório</button>";
} else {
    echo "Nenhum usuário encontrado.";
}

header("refresh: 20; url=adm.php");

// Fechar a conexão com o banco de dados
$conn->close();
?>
<link rel="stylesheet" type="text/css" href="css/style_rel_usuario.css">
<br>
<a href="pagina2.php"><button>Voltar</button></a>
<br>
<a href="logout.php"><button>Logout</button></a>