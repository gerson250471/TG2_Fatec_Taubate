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
	<link rel="stylesheet" href="css/cadastrar.css">
</head>

<body>
	<div id="cad-header">
			<div class="capa">
				<a href="index.php"> <img src="src/figuras/logo.jpg"> </a>
			</div>
		</div>

		<div id="cad-conteudo">
			<h1>Cadastro</h1>
			<form method ="POST">
				<input type="text" name="cpf"  placeholder="CPF" maxlength="11">
				<input type="text" name="nome" placeholder="Nome" maxlength="30">
				<input type="email" name="email"  placeholder="email" maxlength="50">
				<input type="password" name="senha" placeholder="Senha" maxlength="15">
				<input type="password" name ="confSenha" placeholder="Confirmar Senha" maxlength="15">
				<input type="submit" value="Cadastrar">
			</form>
		</div>
	<?php
	// Verificar se foi acionado o botão
	if (isset($_POST['nome']) > 0) 
	{
		$cpf = addslashes($_POST['cpf']);
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);
		$confsenha = addslashes($_POST['confSenha']);
		// Verificar campos Vazios
		if (!Empty($cpf) && !Empty($nome) && !Empty($email) && !Empty($senha) && !Empty($confsenha))
		 {
			$u->conectar("sistema_motofrete","localhost", "root", "");
			if ($u->$msgErro == "")
			 {
				if ($senha == $confsenha) 
				{
					if ($u->cadastrar($cpf, $nome, $email, $senha))
					{
						?> 
						<div id="msg-sucesso">
						Cadastrado com Sucesso
						</div>
						<?php
					}
					else
					{
						?>
						<div class="msg-erro">
						Email já cadastrado
						</div>
						<?php
					}
					
				}
				else 
				{
					?>
					<div class="msg-erro">
					Senha e Confirmar senha não conferem
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
		else
		{
			?>
			<div>
			Preencha todos os campos
			</div>
			<?php
		}
	}
	?>
</body>

</html>