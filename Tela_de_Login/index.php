<?php

	include "conexao.inc";

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM cadastros WHERE username = '$user' and senha = '$pass'";
	
	if (isset($_POST['user'])) {
	
	$query = mysqli_query($con,$sql);
	
		if (mysqli_num_rows($query) > 0) {
		session_start();
		$_SESSION['user'] = $user;
		header("location:home.php");	
	}else{
		echo "<script type='text/javascript'>
		alert('Usuário ou senha incorretos');
		</script>";
	}
		
	}
	mysqli_close($con);
 
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Trigger Out</title>
</head>
<body>
	<form method="POST">
		<label>UserName</label><br>
		<input type="text" name="user"><br>
		<label>Senha</label><br>
		<input type="password" name="pass"><br>
		<input type="submit" value="Login" name="">

		<a href="Registro.php">Registre-se</a>

	</form>

</body>
</html>