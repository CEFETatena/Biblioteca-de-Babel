<html>
	<head>
		<meta charset="utf-8">
		<title>BIBLIOTECA DE BABEL</title>	
	</head>
	<body>
		<h2>Bilioteca de Babel</h2>
		<h3>Recuperação da Conta</h3>
		<p>Olá, <?php echo $nome . " " . $sobrenome ?>.<br>
			Para alterar sua senha, click no link abaixo			
		</p>
		<p><a href="<?php echo base_url("welcome/mudar_senha/".md5($idUsuario)) ?>">Alterar Senha!</a>		
		</p>
		<h4>
		<br>Biblioteca de Babel.		
		</h4>
	
	</body>
</html>