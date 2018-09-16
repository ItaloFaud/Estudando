<?php

include "conexao.inc";
$nome = $_POST['nome'];
$email = $_POST['email'];
$sen1 = $_POST['sen1'];
$sen2 = $_POST['sen2'];
$cpf = $_POST['cpf'];
$nasc = $_POST['nasc'];
$end = $_POST['end'];
$cep = $_POST['cep'];

if (empty($_POST['nome'])) {
	echo "<script type='text/javascript'>
	alert('Preencha todos os campos!');
	location.href = 'index.php?pag=Cadastro';
</script>";

}else{
	if (isset($_POST['nome'])) {
		$sql = "INSERT INTO clientes VALUES (DEFAULT,'$nome','$sen1','$cpf','$nasc','$end','$cep',1)";	
		if ($sen1 == $sen2) {
			$senha_hash = md5($sen1);
			
			$query = mysqli_query($conexao,$sql);
				
					# code...
					echo "
			<script type='text/javascript'>
				alert('Usuário cadastrado');
				location.href = 'index.php?pag=Lista';
			</script>";
				
				
			
		}else{
			echo "
			<script type='text/javascript'>
				alert('Senhas diferentes');
				location.href = 'index.php?pag=Cadastro';
			</script>";
		}
		
	}
}


?>




