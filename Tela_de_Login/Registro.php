 <?php

	include "conexao.inc";
//error_reporting();
$nome = $_POST['nome'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$obs = $_POST['obs'];


if (isset($_POST['user'])) {
	$sql = "SELECT username FROM cadastros WHERE username = '$user'";
$query = mysqli_query($con,$sql);

$sql1 = "INSERT INTO cadastros VALUES (DEFAULT,'$nome','$user','$pass','$email','$tel',1,'$obs')";

if (mysqli_num_rows($query) > 0 ) {
	echo "<script type='text/javascript' >
		alert('UserName ".$user." já utilizado');
	</script>";

	
}
else{
	echo "<script type='text/javascript' >
		alert('UserName '".$user."' é válido');
	</script>";
	$query1 = mysqli_query($con,$sql1); 
	
}
}
 


mysqli_close($con);
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Registre-se</title>
</head>
<body>
	<h2>Registro</h2>
	<fieldset><legend>Formulário</legend> 
	<form method="post">
		<label>Nome</label><br>
		<input type="text" name="nome"><br>
		<label>UserName</label><br>
		<input type="text" name="user"><br>
		<label>Senha</label><br>
		<input type="password" name="pass"><br>
		<label>Email</label><br>
		<input type="email" name="email"><br>
		<label>Telefone</label><br>
		<input type="text" name="tel"><br>
		<label>Obersevação</label><br>
		<input type="text" name="obs"><br>
		<input type="submit" value="Cadastrar" name="">
	</form>
	</fieldset><br>
	<a href="index.php">Login</a>
	
</body>
</html>