<?php require_once "conecta.php"?>
<?php require_once "bancousuario.php"?>
<?php require_once "usuario2.php"?>

<?php
	session_start();
	
	$Usuario2 = new Usuario2();
	
	$usuario2->nome2=$_POST["nome2"];
	$usuario2->sobrenome2=$_POST["sobrenome2"];
	$usuario2->email2=$_POST["email2"];
	$usuario2->senha2=$_POST["senha2"];
	$usuario2->nick2=$_POST["nick2"];
	
	alteraUsuario($conexao, $usuario2);
	header("Location: perfil.php");
	
?>
