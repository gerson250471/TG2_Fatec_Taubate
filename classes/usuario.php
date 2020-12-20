<php?

class usuario
{
	private $pdo;
    public $msgErro = "";

    public function conectar($nome,$host,$usuario,$senha)
    {
        global $pdo;
        
        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.",host=".$host.",$usuario,$senha);
        } 
        catch (PDOexception $e)
        {
            $msgErro = $e -> getmessage();
        }
    }
    public function cadastrar($cpf,$nome,$celular,$endereco,$numero,$complemento,$bairro,$cidade,$cep,$email,$senha,$nivelacesso)
    {
        global $pdo;
       
        $sql = $pdo -> prepare ("select sol_cpf from tab_solicitante where sol_email = $email");
        $sql->execute();
        if($sql->rowCount() > 0)
        {
             return false;
        }
        else
        {
            $sql = $pdo->prepare("insert into (sol_cpf,sol_nome,sol_celular,sol_endereco,sol_numero,sol_complemento,sol_bairro,sol_cidade,sol_cep,sol_email,sol_senha,sol_nivel_acesso) values ($cpf,$nome,$celular,$endereco,$numero,$complemento,$bairro,$cidade,$cep,$email,$senha,$nivelacesso)");
            $sql-> execute();
            return true;
        }

    }

    public function logar($nome,$host,$usuario,$senha)
    {
        global $pdo;
        $sql = $pdo -> prepare ("select sol_cpf from tab_solicitante where sol_email = $email and sol_senha = $senha");
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['sol_cpf'] = $dado['id_usuario'];
            return true;
        }
        else
        {
            return false;
        }

    }
}

?>