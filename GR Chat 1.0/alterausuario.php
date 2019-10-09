<?php

  session_start();
  
?>
<!DOCTYPE html>
<html>
<head>
<title>Editar Perfil | GR Ch@t</title>
<meta charset=utf-8>
<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
<link rel=stylesheet
type="text/css"
href="css/bootstrap.css">
</head>
<body background="background.jpg">
<form class="form-inline" action="atualizarusuario.php" method="POST">
<center>
<img src="logo_index.png">
<br>
<br>
<h3>Edição de Perfil | GR Ch@t</h3>
<br>
<br>
Nome:
<input type="text" name="nome2" class="form-control" id="exampleInputName2" value="<?php echo "$_SESSION[nome]"?>">
<br>
<br>
Sobrenome:
<input type="text" name="sobrenome2" class="form-control" id="exampleInputName2" value="<?php echo "$_SESSION[sobrenome]"?>">
<br>
<br>
E-Mail:
<input type="email" name="email2" class="form-control" id="exampleInputName2" value="<?php echo "$_SESSION[email]"?>">
<br>
<br>
Senha:
<input type="password" name="senha2" class="form-control" id="exampleInputName2" value="<?php echo "$_SESSION[senha]"?>">
<br>
<br>
Usuário:
<input type="text" name="nick2" class="form-control" id="exampleInputName2" value="<?php echo "$_SESSION[nick]"?>">
<br>
<br>
<input type="submit" class="btn btn-primary" value="Pronto!">
<a href="perfil.php" class="btn btn-danger">Cancelar</a>
</center>
</form>
</body>
</html>