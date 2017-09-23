<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>BIBLIOTECA DE BABEL</title>	
	</head>
	<body>
		<h2>Bilioteca de Babel</h2>
		<h3>Confirmaçao de cadastro</h3>
		<p>Olá, <?php echo $nome . " " . $sobrenome ?>.<br>
			Muito obrigado por se cadastrar e liberar sua conta, click no link abaixo			
		</p>
		<p><a href="<?php echo base_url("welcome/confirmar/".md5($email)) ?>">Confirmar cadastro no website!</a>		
		</p>
		<h4>
			Seja bem-vindo.<br>Biblioteca de Babel.		
		</h4>
	
	</body>
</html>