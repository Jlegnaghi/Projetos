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
        } else {
            // Retornar uma mensagem de erro, se necessário
            echo "Funcionário não encontrado.";
        }
    } else {
        // Trate o caso em que 'id_pesquisa' não está definido no array $_POST
        echo "ID de pesquisa não especificado.";
    }
}
?>