<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<?php

	include "conexao.inc";
	session_start();

	$user = $_SESSION['user'];

	$sql = "SELECT * FROM cadastros WHERE status = '2' and username = '$user' ";
	$query = mysqli_query($con,$sql);

	$sql1 = "SELECT * FROM cadastros WHERE status = '3' and username = '$user' ";
	$query1 = mysqli_query($con,$sql1);
	if (mysqli_num_rows($query1) > 0) {
		echo "<h3>Administração</h3>";
		echo "Bem-vindo administrador master ".$_SESSION['user'];
		include "Controle.php";
	}
	elseif (mysqli_num_rows($query) > 0) {
	echo "<h3>Administração</h3>";
	echo "Bem-vindo administrador ".$_SESSION['user'];
	include "Controle.php";
	}else{
	echo "<h3>HOME</h3>";
	echo "Bem-vindo visitante ".$_SESSION['user'];


}
	?>
</body>
</html>