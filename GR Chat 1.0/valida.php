<?php require_once "conecta.php"?>
<?php require_once "Usuario.php"?>
<?php require_once "bancousuario.php"?>
<?php	
	session_start();
	if(isset($_SESSION['Logado'])){
		header("Location: perfil.php");
		die();
	}
	
	if (!empty($_POST) AND (empty($_POST['nick']) OR empty($_POST['senha']))) 
	{
      header("Location: loginerro.php"); exit;
	}
	else 
	{
		$nick  = ($_POST["nick" ]);	 
		$senha = ($_POST["senha"]);
		$crip = md5($senha);
		$sql = "SELECT * FROM `usuario` WHERE `nick` = '$nick' AND `senha`= '$crip'"; 
		$result_id = mysqli_query($conexao,$sql) or die ("Erro no banco de dados!"); 
		$total = mysqli_num_rows($result_id);		
	
	if($total > 0)  
	{      
		$dados = mysqli_fetch_array($result_id);
	     
        $_SESSION['Logado'] = true;
        $_SESSION["id"] = $dados["id"]; 
        $_SESSION["nick"] = stripslashes($dados["nick"]); 
        $_SESSION["nome"]= $dados["nome"];	
		$_SESSION["email"] = $dados["email"];	
		$_SESSION["sobrenome"] = $dados["sobrenome"];		
		$_SESSION["senha"] = $dados["senha"];
		$_SESSION["mensagem"] = $dados["mensagem"];
		$_SESSION["genero"] = $dados["genero"];
        header("Location: sala.php"); 
        exit; 
    
	}
	else 
	{
		header("Location: loginerro2.php");
	}
    }

?>