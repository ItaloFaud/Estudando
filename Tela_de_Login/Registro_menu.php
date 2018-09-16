<?php

include "conexao.inc";

$nome = $_POST['Nome'];
$link = $_POST['link'];
$status = $_POST['status'];

if ($status == '1') {
	$status = '1';
}else{
	$status = '2';
}

if (isset($_POST['Nome'])) {
	# code...
	$sql = "INSERT INTO menus VALUES ('$nome','$link',DEFAULT,'$status')";
	$query = mysqli_query($con,$sql);
	if ($query) {
	$pag = fopen("Menus/".$nome.".php", 'a');
	$conteudo = '<h2>'.strtoupper($nome).'</h2>';
	fwrite($pag, $conteudo);
	fclose($pag);
	echo "<script type='text/javascript'>
	alert('Menu adicionado');

</script>";
	header('location:home.php');
	}else{
		echo "<script type='text/javascript'>
	alert('Menu não adicionado');

</script>";
	}
	
}
	





?>

