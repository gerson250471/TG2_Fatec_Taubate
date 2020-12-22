<?php

class Usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        global $msgErro;
        
        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host".$host, $usuario, $senha );
        } catch (PDOException $e)
        {
            $msgErro = $e -> getMessage();
        }

    }

    public function cadastrar($cpf, $nome, $email, $senha)
    {
        global $pdo;
        global $msgErro;
        //verificar se está cadastrado
        $sql = $pdo->prepare("select sol_cpf from tab_solicitante where email= :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false; //Cadastro Existente
        }
        else
        {
            //Caso não cadastrar
            $sql = $pdo->prepare("insert into tab_solicitante (sol_cpf, sol_nome, sol_email, sol_senha) values (:c, :n, :e, :s)");
            $sql->bindValue(":c", $cpf);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true; // Cadastro Realizado
        }
    }
    public function logar($email, $senha)
    {
        global $pdo;
        global $msgErro;

        // Verificar se email e senha estão cadastrados
        $sql = $pdo->prepare("select sol_cpf from tab_solicitante where sol_emai = :e and sol_senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if ($sql->rowcount() > 0) 
        {
            $dado = $sql->fetch();
            session_start(); 
            $_SESSION['sol_cpf'] = $dado['sol_cpf'];
            return true; // logado com sucesso    
        } 
        else
        {
            return false; // Impossivel Logar
        }
    }
}
?>