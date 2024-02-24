<?php
$hostname = 'localhost';
$username = 'jeffersonlegnagh';
$password = ';Rzkz^n}sx}E';
$database = 'jefferso_login_system';

/*$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'login_system';*/

// Cria conexão com o banco de dados
$conn = mysqli_connect($hostname, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Seleciona os dados da tabela funcionarios
$sql = "SELECT nome, cargo, foto FROM funcionarios";
$result = mysqli_query($conn, $sql);

// Verifica se a consulta foi executada com sucesso
if (!$result) {
    die("Erro na consulta: " . mysqli_error($conn));
}

// Cria tabela HTML para exibir os dados
echo "<table class='tabela'>";
echo "<tr><th>Nome</th><th>Cargo</th><th>Foto</th><th>Ações</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr data-nome='" . $row["nome"] . "' data-cargo='" . $row["cargo"] . "' data-foto='" . $row["foto"] . "'>";
    echo "<td>" . $row["nome"] . "</td>";
    echo "<td>" . $row["cargo"] . "</td>";
    echo "<td><img src='" . $row["foto"] . "' height='120' width='90'></td>";
    echo "<td><button class='imprimir'>Imprimir</button></td>";
    echo "</tr>";
}
echo "</table>";

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>

<script>
// Event listener para imprimir o crachá
document.querySelectorAll(".imprimir").forEach(function(element) {
    element.addEventListener("click", function() {
        var nome = this.parentNode.parentNode.dataset.nome;
        var cargo = this.parentNode.parentNode.dataset.cargo;
        var foto = this.parentNode.parentNode.dataset.foto;
        var conteudo = "<div><img src='" + foto + "' height='300' width='240'></div>";
        conteudo += "<div><h1>" + nome + "</h1><p>" + cargo + "</p></div>";
        var form = document.createElement("form");
        form.action = "impressao.php";
        form.method = "POST";
        var input = document.createElement("input");
        input.type = "hidden";
        input.name = "conteudo";
        input.value = conteudo;
        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
    });
});
</script>

<a href="cracha.php"><button>Voltar</button></a>

<style>
.tabela {
    border-collapse: collapse;
    width: 100%;
}

.tabela th, .tabela td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.tabela th {
    background-color: #f2f2f2;
}
</style>