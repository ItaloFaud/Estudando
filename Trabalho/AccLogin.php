<?php

include "cone.inc";
 $user = $_POST['nome'];
 $sen = $_POST['pass'];

 $sql = "SELECT * FROM usuarios WHERE user = '$user' and senha = '$sen'";
 $query = mysqli_query($con,$sql);

 if (isset($_POST['nome'])) {
 	if (mysqli_num_rows($query) > 0) {
	echo '<script type="text/javascript">
	alert("Usuário cadastrado");

	</script>';
	session_start();
	$_SESSION['usu'] = $user;
	echo '<script type="text/javascript">
	location.href = "index.php";

	</script>';
	
		
 }else{
 	echo '<script type="text/javascript">
	alert("Usuário não cadastrado");

	</script>';
	echo '<script type="text/javascript">
	location.href = "Login.php";

	</script>';
	
 }
 }

 

?>
OII

