<?php
// Inclua o arquivo de conexão com o banco de dados
include("conexao.php");

// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cargo = $_POST['cargo'];
    $setor = $_POST['setor'];
    $escola = $_POST['escola'];

    // Verifique se um arquivo de imagem foi enviado
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
        // Diretório onde a imagem será armazenada
        $diretorio_destino = "imagens/";

        // Verifique se o diretório de destino existe, caso contrário, crie-o
        if (!is_dir($diretorio_destino)) {
            mkdir($diretorio_destino, 0777, true);
        }

        // Nome do arquivo de imagem
        $nome_arquivo = $_FILES['foto']['name'];

        // Caminho completo para o arquivo de imagem
        $caminho_arquivo = $diretorio_destino . $nome_arquivo;

        // Move o arquivo de imagem para o diretório de destino
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_arquivo)) {
            // Consulta SQL para inserir os dados no banco de dados
            $sql = "INSERT INTO funcionarios (nome, sobrenome, cargo, setor, escola, foto) VALUES ('$nome', '$sobrenome', '$cargo', '$setor', '$escola', '$nome_arquivo')";

            if ($conn->query($sql) === TRUE) {
                usleep(2000000); // 1 segundo = 1000000 microssegundos
                echo "Dados inseridos com sucesso!";

                // Redirecione de volta para a página anterior
                header("Location: usuario.php");
            } else {
                echo "Erro na inserção de dados: " . $conn->error;
            }
        } else {
            echo "Erro ao fazer upload da imagem.";
        }
    } else {
        echo "O formulário não incluiu uma imagem válida.";
    }
} else {
    echo "O formulário não foi submetido corretamente.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
