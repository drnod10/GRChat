<?php require_once "bancousuario.php"?>
<?php require_once "conecta.php"?>
<?php require_once "Usuario.php"?>

<?php

$men = $_POST["mensagem"];

insereMensagem($conexao, $men){

$sql = "INSERT INTO mensagem (msg, quem_enviou) VALUES ('$men, $_SESSION[nick]')";

}

insereMensagem($conexao, $men);

header("Location: sala.php");
?>