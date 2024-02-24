<?php
include 'conexao.php';
include 'header.php';

// Verifica se foi passado o parâmetro ID_produto na URL
if(isset($_GET['ID_produto'])) {
    // Obtém o ID do produto da URL
    $id_produto = $_GET['ID_produto'];

    // Consulta SQL para recuperar os detalhes do produto
    $sql = "SELECT * FROM Produtos WHERE ID_produto = $id_produto";
    $result = $conn->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Exibe os detalhes do produto
        while($row = $result->fetch_assoc()) {
            echo "<h2>Detalhes do Produto</h2>";
            echo "<p><strong>ID do Produto:</strong> " . $row["ID_produto"] . "</p>";
            echo "<p><strong>Nome:</strong> " . $row["Nome_vinho"] . "</p>";
            echo "<p><strong>Tipo:</strong> " . $row["Tipo_vinho"] . "</p>";
            echo "<p><strong>País de Origem:</strong> " . $row["Pais_origem"] . "</p>";
            echo "<p><strong>Região de Produção:</strong> " . $row["Regiao_producao"] . "</p>";
            echo "<p><strong>Safra:</strong> " . $row["Safra"] . "</p>";
            echo "<p><strong>Variedade de Uva:</strong> " . $row["Variedade_uva"] . "</p>";
            echo "<p><strong>Descrição:</strong> " . $row["Descricao_vinho"] . "</p>";
            echo "<p><strong>Preço:</strong> R$ " . number_format($row["Preco"], 2, ',', '.') . "</p>";
            echo "<p><strong>Quantidade em Estoque:</strong> " . $row["Quantidade_estoque"] . "</p>";
        }
    } else {
        // Se nenhum produto foi encontrado com o ID fornecido, exibe uma mensagem de erro
        echo "<p>Nenhum produto encontrado com o ID fornecido.</p>";
    }
} else {
    // Se nenhum ID de produto foi fornecido na URL, exibe uma mensagem de erro
    echo "<p>Nenhum ID de produto fornecido.</p>";
}

// Fecha a conexão com o banco de dados
$conn->close();
include 'footer.php';
?>
