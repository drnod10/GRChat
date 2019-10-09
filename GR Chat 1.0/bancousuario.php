<?php require_once "conecta.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "Usuario2.php"?>
<?php require_once "Mensagem.php"?>

<?php

function insereUsuario($conexao,$usuario){	
	
	$cod = md5($_POST['senha']);
	$sql = "insert into usuario (nome, sobrenome, nick, email, senha, genero)
	values ('$usuario->nome','$usuario->sobrenome','$usuario->nick', '$usuario->email','$cod', '$usuario->genero')";
		
	$resultado = mysqli_query($conexao, $sql);
	
	return require_once "index.php";
}
function deletaUsuario($conexao, $dados){
	
$sql = "DELETE FROM usuario WHERE id = '$_SESSION[id]'";	
	$resultado = mysqli_query($conexao, $sql);
	session_destroy();
	header("location: index.php");
	return $resultado;
}

function listarMensagem($conexao){
	
	$sqr = "select * from mensagem";
	$resultado = mysqli_query($conexao, $sqr);
	
	while($array=mysqli_fetch_assoc($resultado)){
	echo $array['remetente']." : ".$array['msg']."<br>";
	}
}	

function alteraUsuario($conexao, $usuario2){
	
	$sql = ("UPDATE `usuario` SET 
	`nome` = '$usuario2->nome2', `sobrenome` = '$usuario2->sobrenome2', `nick` = '$usuario2->nick2', `email` = '$usuario2->email2', `senha` = '$usuario2->senha2' 
	WHERE `usuario`.`id` = '$_SESSION[id]'") or die(mysqli_error());
	
	$resultado = mysqli_query($conexao,$sql);
	return $resultado;

}

function insereMensagem($conexao,$mensagem){	
	
	$sqll = "insert into mensagem (msg, remetente)
	values ('$mensagem->msg', '$_SESSION[nick]')";
	
	$resultado = mysqli_query($conexao, $sqll);
	
	return $resultado;
}

function listarUsuario($conexao){
	
	$sqt = "select * from usuario where id = '$_SESSION[id]'";
	
	$resultado = mysqli_query($conexao, $sqt);
	
	while($array=mysqli_fetch_assoc($resultado)){
	echo "<h3>".$array['nome']." ".$array['sobrenome']."<br><br></h3>";
	echo "E-Mail: ".$array['email']."<br><br>"."Nome de Usuário: ".$array['nick']."<br>";
	}
}	
?>
