<?php
// Incluir código para se conectar ao banco de dados
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_pesquisa'])) { // Verifique se 'id_pesquisa' está definido no array $_POST
        $id = $_POST['id_pesquisa'];

        // Aqui você pode escrever o código para buscar as informações do funcionário no banco de dados
        $query = "SELECT nome, foto, cargo, escola FROM funcionarios WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            $nome = $row['nome'];
            $foto = $row['foto'];
            $cargo = $row['cargo'];
            $escola = $row['escola'];

            // Retornar os dados do funcionário em um formato JSON (ou outro formato de sua escolha)
            $dados_funcionario = array(
                'nome' => $nome,
                'foto' => $foto,
                'cargo' => $cargo,
                'escola' => $escola
            );

            echo json_encode($dados_funcionario);
            exit; // Importante: sair do script após a saída JSON
        } else {
            // Retornar uma mensagem de erro, se necessário
            echo "Funcionário não encontrado.";
            exit;
        }
    } else {
        // Trate o caso em que 'id_pesquisa' não está definido no array $_POST
        echo "ID de pesquisa não especificado.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Professor</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Página do Professor</h1>
    
    <!-- Formulário de pesquisa -->
    <form id="form-pesquisa">
        <label for="id_pesquisa">ID do Funcionário:</label>
        <input type="text" id="id_pesquisa" name="id_pesquisa" required>
        <input type="submit" value="Pesquisar">
    </form>

    <!-- Exibição dos dados do funcionário -->
    <div id="dados-funcionario">
        <h2>Nome: <span id="nome-funcionario"></span></h2>
        <img src="" alt="Foto do funcionário" id="foto-funcionario">
        <p>Cargo: <span id="cargo-funcionario"></span></p>
        <p>Escola: <span id="escola-funcionario"></span></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Manipulador de envio do formulário de pesquisa
            $('#form-pesquisa').submit(function(e) {
                e.preventDefault();
                var idPesquisa = $('#id_pesquisa').val();
                $.ajax({
                    type: 'POST',
                    url: 'professor.php', // Substitua pelo nome do arquivo atual
                    data: { id_pesquisa: idPesquisa },
                    dataType: 'json',
                    success: function(data) {
                        if (data.nome) {
                            $('#nome-funcionario').text(data.nome);
                            $('#foto-funcionario').attr('src', data.foto);
                            $('#cargo-funcionario').text(data.cargo);
                            $('#escola-funcionario').text(data.escola);
                        } else {
                            $('#dados-funcionario').html("Funcionário não encontrado.");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>