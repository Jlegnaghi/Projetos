<?php include 'header.php'; ?>

<section class="contact">
    <div class="container">
        <h2>Entre em contato</h2>
        <p>Preencha o formulário abaixo para entrar em contato conosco.</p>
        <form action="processar_contato.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>