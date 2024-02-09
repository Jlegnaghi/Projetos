<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Valide os dados (certifique-se de que todos os campos foram preenchidos)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Por favor, preencha todos os campos do formulário.";
    } else {
        // Você pode adicionar mais validações, como validar o formato do e-mail, se necessário.

        // Destinatário do e-mail (seu endereço de e-mail senha cghj owpt btuz ftmr)
        $to = "jeffersonlegnaghi07@gmial.com";

        // Assunto do e-mail
        $subject = "Nova mensagem de contato de $name";

        // Cabeçalhos para o e-mail
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Mensagem do e-mail
        $email_message = "Nome: $name\n";
        $email_message .= "E-mail: $email\n";
        $email_message .= "Mensagem:\n$message";

        // Envie o e-mail
        if (mail($to, $subject, $email_message, $headers)) {
            echo "Mensagem enviada com sucesso! Obrigado por entrar em contato conosco.";
        } else {
            echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
        }
    }
}
?>
