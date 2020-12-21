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

	<div id="cad-menu">
		
	</div>

	<div id="cad-conteudo">
		<h1>Cadastro</h1>
            <form methodo="POST" action="processa.php">
				<input type="text" name="NivelAcesso" placeholder="Nivel de Acesso" maxlength="20">	
				<input type="text" name="cpf"  placeholder="CPF" maxlength="11">
				<input type="text" name="nome" placeholder="Nome" maxlength="30">
				<input type="text" name="celular"  placeholder="celular" maxlength="11">
				<input type="text" name="endereco"  placeholder="endereço" maxlength="50">
				<input type="text" name="numero"  placeholder="Nº" maxlength="6">
				<input type="text" name="complemento"  placeholder="complemento" maxlength="30">
				<input type="text" name="bairro"  placeholder="bairro" maxlength="30">
				<input type="text" name="cidade"  placeholder="cidade" maxlength="30">
				<input type="text" name="cep"  placeholder="CEP" maxlength="8">
				<input type="email" name="email"  placeholder="email" maxlength="50">
				<input type="password" name="senha" placeholder="Senha" maxlength="15">
				<input type="password"placeholder="Confirmar Senha" maxlength="15">
				<input type="submit" value="Cadastrar">
            </form>
	</div>

	<div id="cad-footer">

	</div>    

</body>

</html>