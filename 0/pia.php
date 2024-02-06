<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilo para o pop-up */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }
        /* Estilo para o conteúdo do pop-up */
        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        /* Estilo para os botões "Enviar" */
        button[type="submit"] {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            margin: 10px;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s;
        }
        /* Estilo para os botões "Enviar" no hover (quando o mouse passa por cima) */
        button[type="submit"]:hover {
            background-color: #007bff;
            color: #fff;
        }
        /* Estilo para as caixas de entrada de texto */
        input[type="text"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        /* Estilo para a tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: center; /* Centralize o conteúdo das células da tabela */
            border: 1px solid #ccc;
        }
        /* Estilo para os cabeçalhos da tabela */
        th {
            background-color: #009c3b;
            color: #fff;
        }
        /* Estilo para os links dentro da tabela */
        table a {
            color: #007bff;
            text-decoration: underline;
        }
    </style>
    <title>PIA (Ponte Internacional da Amizade)</title>
</head>
<body>
    <h1>
        <img src="img/paraguai.png" alt="Imagem H1" width="127" height="79">
        Pesquisa PIA
    </h1>
    <h2>(Ponte Internacional da Amizade)</h2>

    <form action="processar_catraca_saida_pia.php" method="post">
        <h3>Catraca Saída Brasil</h3>
        <label for="catraca_saida_1">Catraca 1:</label>
        <input type="text" id="catraca_saida_1" name="catraca_saida_1" placeholder="Catraca 1">
        <label for="catraca_saida_2">Catraca 2:</label>
        <input type="text" id="catraca_saida_2" name="catraca_saida_2" placeholder="Catraca 2">
        <button type="submit">Enviar</button>
    </form>

    <form action="processar_catraca_entrada_pia.php" method="post">
        <h3>Catraca Entrada Brasil</h3>
        <label for="catraca_entrada_1">Catraca 1:</label>
        <input type="text" id="catraca_entrada_1" name="catraca_entrada_1" placeholder="Catraca 1">
        <label for="catraca_entrada_2">Catraca 2:</label>
        <input type="text" id="catraca_entrada_2" name="catraca_entrada_2" placeholder="Catraca 2">
        <button type="submit">Enviar</button>
    </form>

    <button id="openPopup">Exportar</button>
    <!-- Pop-up -->
    <div class="popup" id="popup">
        <div class="popup-content">
            <p>Clique no botão para fazer o download:</p>
            <a href="exporta_pia.php" download>
                <button id="downloadButton">Fazer Download</button>
            </a>
        </div>
    </div>

    <script>
        // Função para abrir o pop-up
        document.getElementById("openPopup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        // Função para fechar o pop-up após o download
        document.getElementById("downloadButton").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });
    </script>

    <?php
    include 'tabela_pia.php'; 
    ?>

</body>
</html>