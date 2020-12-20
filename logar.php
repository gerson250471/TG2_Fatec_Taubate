<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEMA MOTOFRETE</title>
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
<div id="header">
		<div class="capa">
			<img src="src/figuras/logo.jpg">
		</div>
	</div>

	<div id="menu">
		
	</div>

	<div id="conteudo">
            <form methodo="POST" action="processa.php">
                <input type="email">
                <input type="password">
                <input type="submit">
            </form>
	</div>

	<div id="footer">

	</div>    

</body>

</html>