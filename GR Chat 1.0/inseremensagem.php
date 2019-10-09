<?php require_once "Mensagem.php"?>
<?php require_once "conecta.php"?>
<?php require_once "bancousuario.php"?>

<?php

session_start();

$mensagem = new Mensagem();

$mensagem->msg = $_POST["mensagem"];

insereMensagem($conexao, $mensagem);

header("Location: sala.php");

?>
