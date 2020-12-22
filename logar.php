<?php
	require_once 'CLASSES/usuarios.php';
	$u = new Usuario;
?>

<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEMA MOTOFRETE</title>
	<link rel="stylesheet" href="css/logar.css">
</head>

<body>
<div id="header">
		<div class="capa">
		<a href="index.php"> <img src="src/figuras/logo.jpg"> </a>
		</div>
	</div>

	<div id="menu">
		
	</div>

	<div id="conteudo">
		<h1>Login</h1>
            <form method="POST">
                <input type="email" placeholder="Usuário" name="email">
                <input type="password"placeholder="Senha"name="senha">
                <input type="submit" value="Acessar">
            </form>
	</div>
<?php
if (isset($_POST['email']) > 0) 
{
	$nome = addslashes($_POST['email']);
	$email = addslashes($_POST['senha']);
	// Verificar campos Vazios
	if (!Empty($nome) && !Empty($email))
	 {
		$u->conectar("sistema_motofrete","localhost", "root", "");
		if ($u->$msgErro == "")
		 {
			if ($u->logar($email,$senha))
			{
				header("location: OrdemServico.php");
			}
			else 
			{
			?><div class="msg-erro">
			Email ou Senha incorretos!
			</div>
			<?php
			}	
		}
		else 
		{
			?>
			<div class="msg-erro">
			<?php echo "Erro: ".$u->SmsgErro; ?>
			</div>
			<?php
		}
	 }
}
else
{
	?>
		<div class="msg-erro">
			Preencha todos os campos
		</div>
	<?php
}

?>

</body>

</html>