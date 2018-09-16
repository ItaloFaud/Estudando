<?php

	include "conexao.inc";
//error_reporting();
$nome = $_POST['nome'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$obs = $_POST['obs'];

error_reporting(0);
if (isset($_POST['user'])) {
	$sql = "SELECT username FROM cadastros WHERE username = '$user'";
$query = mysqli_query($con,$sql);

$sql1 = "INSERT INTO cadastros VALUES (DEFAULT,'$nome','$user','$pass','$email','$tel',2,'$obs')";

if (mysqli_num_rows($query) > 0 ) {

	
}
else{
	$query1 = mysqli_query($con,$sql1); 
	
}
}
 


mysqli_close($con);
?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type='text/javascript'>
		alert('Admin cadastrado!');
		location.href = 'home.php';
	</script>

</body>
</html>