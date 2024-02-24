<?php 
include 'conexao.php';
include 'header.php'; 
?>
        <section>
            <h2>Nossos Produtos</h2>
            <p>Aqui você encontra nossa seleção exclusiva de vinhos finos.</p>
            
            <?php
            // Consulta SQL para recuperar os produtos
            $sql = "SELECT * FROM Produtos";
            $result = $conn->query($sql);

            // Verifica se há resultados
            if ($result->num_rows > 0) {
                // Exibe os produtos encontrados
                while($row = $result->fetch_assoc()) {
                    echo "<h3><a href='detalhes.php?ID_produto=" . $row["ID_produto"] . "'>" . $row["Nome_vinho"] . "</a></h3>";
                    echo "<p>" . $row["Descricao_vinho"] . "</p>";
                    echo "<p>Preço: R$ " . number_format($row["Preco"], 2, ',', '.') . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "Nenhum produto encontrado.";
            }

            // Fecha a conexão com o banco de dados
            $conn->close();
            ?>
        </section>
<?php include 'footer.php'; ?>