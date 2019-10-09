<?php require_once "conecta.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "bancousuario.php"?>

<?php

  session_start();

	$usuario = new Usuario();

	$usuario->nome=$_POST["nome"];
	$usuario->sobrenome=$_POST["sobrenome"];
	$usuario->nick=$_POST["nick"];
	$usuario->email=$_POST["email"];
	$usuario->senha=$_POST["senha"];
	$usuario->genero=$_POST["genero"];
	
	$sq = "SELECT * FROM `usuario` WHERE `nick` = '$usuario->nick'"; 
	$verifica_nick = mysqli_query($conexao,$sq);
	if(mysqli_num_rows($verifica_nick) == 1){
		header("Location: registroerro.php");
		
	}
	else{
	insereUsuario($conexao, $usuario);
	}

?>
