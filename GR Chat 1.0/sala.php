<?php
	session_start();
	if(!isset($_SESSION['Logado'])){
		header("Location: index.php");
		die();
	}
?>
<?php require_once "bancousuario.php"?>
<?php require_once "Mensagem.php"?>
<?php require_once "conecta.php"?>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(
            function() {
                setInterval(function() {
                    $('#mensagem').text("<?php listarMensagem($conexao); ?>");
                }, 1000);
            });
</script>
<title>Sala de Chat | GR Ch@t</title>
<meta charset=utf-8>
<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
<link rel=stylesheet
type="text/css"
href="css/bootstrap.css">
</head>
<center>
<body background="background.jpg">
<form class="form-inline" action="inseremensagem.php" method="POST">
<ol class="breadcrumb">
<li><a href="perfil.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Perfil</a></li>
<li class="active"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Sala de Chat</a></li>
<li><a href="deslogar.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a></li>
</ol>
<br>
<div id="mensagem">
</div>
<br>
<input type="text" name="mensagem" size="85" class="form-control" placeholder="Digite aqui...">
<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
</span>
</center>
</form>
</body>
</html>