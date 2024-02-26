<?php
include 'header.php';
include 'array.php';

// Verificando se o parâmetro 'id' está presente na URL
if(isset($_GET['id'])) {
    $id_produto = $_GET['id'];
    
    // Buscar o produto com o ID correspondente
    $produto_detalhado = null;
    foreach($produtos as $produto) {
        if($produto['id'] == $id_produto) {
            $produto_detalhado = $produto;
            break;
        }
    }

    // Exibindo os detalhes do produto
    if($produto_detalhado) {
        echo "<div class='produto'>";
        echo "<h2>{$produto_detalhado['nome']}</h2>";
        echo "<p><strong>Cor:</strong> {$produto_detalhado['cor']}</p>";
        echo "<p><strong>Interfaçe:</strong> {$produto_detalhado['interface']}</p>";
        echo "<p><strong>Conexão:</strong> {$produto_detalhado['conexao']}</p>";
        echo "<p><strong>Botões:</strong> {$produto_detalhado['botoes']}</p>";
        echo "<p><strong>DPI:</strong> {$produto_detalhado['dpi']}</p>";
        echo "<p><strong>Modelo:</strong> {$produto_detalhado['sensor']}</p>";
        echo "<p><strong>Sensor:</strong> {$produto_detalhado['modelo']}</p>";
        echo "<p><strong>Marca:</strong> {$produto_detalhado['marca']}</p>";
        echo "<img src='{$produto['imagem']}' alt='{$produto['nome']}' />";
        echo "<p><strong>Preço:</strong> R$ " . number_format($produto_detalhado['preco'], 2, ',', '.') . "</p>";
        echo "</div>";
    } else {
        echo "<p>Produto não encontrado.</p>";
    }
} else {
    echo "<p>Nenhum produto selecionado.</p>";
}

include 'footer.php';
?>