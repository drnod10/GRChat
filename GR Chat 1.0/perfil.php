<?php
	session_start();
	if(!isset($_SESSION['Logado'])){
		header("Location: index.php");
	}
?>
<html>
<head>
<title>Perfil | GR Ch@t</title>
<meta charset=utf-8>
<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
<link rel=stylesheet type="text/css" href="css/bootstrap.css">
</head>
<body background="background.jpg">
<form class="form-inline">
<center>
<ol class="breadcrumb">
<li class="active"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Perfil</li>
<li><a href="sala.php"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Sala de Chat</a></li>
<li><a href="deslogar.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a></li>
</ol>
<?php require_once "bancousuario.php"?>

<?php

if ($_SESSION['genero'] == "masculino"){

echo "<img src=homem.png>";

}else{
	echo "<img src=mulher.png>";
}
echo "<br>";

listarUsuario($conexao);

?>
<br>
<a href="alterausuario.php" class="btn btn-primary">Editar Perfil</a>
<a href="deletarconta.php" class="btn btn-danger">Excluir Conta</a>
</center>
</form>
</body>
</html>