<?php
	
	if(isset($_SESSION['Logado'])){
		header("Location: sala.php");
		die();
	}
?>	
<html>
<head>
<title>Home | GR Ch@t</title>
<meta charset=utf-8>
<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
<link rel=stylesheet
type="text/css"
href="css/bootstrap.css">
</head>
<body background="background.jpg">
<form class="form-inline" action="valida.php" method="POST">
<center>
<img src="logo_index.png">
<br>
<h3>Login</h3>
<script>alert('Você deve digitar um usuario ou senha !')</script>
<input type="text" name="nick" class="form-control" id="exampleInputName2" placeholder="Nickname">
<br>
<br>
<input type="password" name="senha" class="form-control" id="exampleInputName2" placeholder="Senha">
<br>
<br>
<button type="submit" class="btn btn-primary">Entrar</button>
<br>
<br>
</form>
<h3>Ainda não tem uma Conta?</h3>
<br>
<a href="registro.php" class="btn btn-primary">Cadastrar-se!</a>
<br>
<br>
<br>
<img src="1.png">
<br>
<br>
2019 GR Technologies, Inc.
<br>
<br>
</center>
</body>
</html>