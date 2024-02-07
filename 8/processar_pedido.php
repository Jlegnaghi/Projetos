<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar os dados do formulário
    $nome_funcionario = $_POST['nome_funcionario'];
    $id_funcionario = $_POST['id_funcionario'];
    $mensagem = $_POST['mensagem'];

    // Montar a mensagem de e-mail
    $assunto = "Pedido de Novo Crachá";
    $destinatario = "seu_email@example.com"; // Substitua pelo seu endereço de e-mail
    $headers = "From: $nome_funcionario";

    $mensagem_email = "Nome do Funcionário: $nome_funcionario\n";
    $mensagem_email .= "ID do Funcionário: $id_funcionario\n";
    $mensagem_email .= "Mensagem: $mensagem";

    // Enviar o e-mail
    if (mail($destinatario, $assunto, $mensagem_email, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>