<?php

class Usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha) // método para conectar no banco de dados
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            $this->msgErro = $e->getMessage();
        }        
    }

    public function cadastrar($nome, $telefone, $email, $senha) // método para cadastrar
    {
        global $pdo; // verifica se já está cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return false; // já está cadastrado
        } else { // caso não cadastrar
            $sql = $pdo->prepare("INSERT INTO usuario (nome, telefone, email, senha) VALUES(:n, :t, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":t", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }

    public function logar($email, $senha) // métodos para logar
    {
        global $pdo; // verifica se email e senha estão cadastrados, se sim, entra no sistema (sessão)
        $sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            // entra no sistema(sessão)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; // logado com sucesso
        } else {
            return false; // não foi possível logar
        }
    }

}

?>