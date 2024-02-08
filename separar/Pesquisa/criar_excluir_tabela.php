<?php
// Inclua o arquivo de conexão ao banco de dados
include 'conexao.php';

// Verifique se a tabela a ser criada ou excluída foi especificada
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['acao']) && isset($_GET['tabela'])) {
    $acao = $_GET['acao'];
    $tabela = $_GET['tabela'];

    if ($acao == 'criar') {
        // Verifique se a tabela já existe
        $verificar_tabela = "SHOW TABLES LIKE '$tabela'";
        $resultado = $mysqli->query($verificar_tabela);

        if ($resultado->num_rows == 0) {
            // A tabela não existe, então podemos criá-la
            $sql = "CREATE TABLE $tabela (
                ID INT AUTO_INCREMENT PRIMARY KEY,
                Entrada1 VARCHAR(255),
                Entrada2 VARCHAR(255),
                Saida1 VARCHAR(255),
                Saida2 VARCHAR(255),
                Hora TIME,
                Data DATE
            )";

            if ($mysqli->query($sql) === true) {
                echo "Tabela $tabela criada com sucesso.";
            } else {
                echo "Erro ao criar a tabela: " . $mysqli->error;
            }
        } else {
            echo "A tabela $tabela já existe no banco de dados.";
        }
    } elseif ($acao == 'excluir') {
        // Consulta SQL para excluir a tabela
        $sql = "DROP TABLE IF EXISTS $tabela";

        if ($mysqli->query($sql) === true) {
            echo "Tabela $tabela excluída com sucesso.";
        } else {
            echo "Erro ao excluir a tabela: " . $mysqli->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar/Excluir Tabela</title>
</head>
<body>
    <h1>Criar/Excluir Tabela do Banco de Dados</h1>
    <p>Selecione a ação e a tabela que você deseja criar ou excluir:</p>

    <form action="criar_excluir_tabela.php" method="get">
        <label for="acao">Ação:</label>
        <select name="acao" id="acao">
            <option value="criar">Criar Tabela</option>
            <option value="excluir">Excluir Tabela</option>
        </select>
        <label for="tabela">Tabela:</label>
        <select name="tabela" id="tabela">
            <option value="pia">PIA</option>
            <option value="pif">PIF</option>
        </select>
        <button type="submit">Executar Ação</button>
    </form>
</body>
</html>