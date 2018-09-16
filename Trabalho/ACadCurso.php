<?php
$nome = $_POST['nc'];
$ch = $_POST['ch'];
$n = $_POST['n'];
$cate = $_POST['cate'];

      if ($n == 'Avançado') {
      	$nn = '3';
      }elseif ($n == 'Intermediário') {
      	$nn = '2';
      }else{
      	$nn = '1';
      }

$ext = substr($_FILES['arquivo']['name'], -4);

$nomea = $nome.$ext;

move_uploaded_file($_FILES['arquivo']['tmp_name'], "imgs/".$nomea);	


include "cone.inc";
$sql = "INSERT INTO cursos VALUES (DEFAULT,'$nome','$ch','$nn','$cate','".$nomea."')";
$query = mysqli_query($con,$sql);

mysqli_close($con);



//Como Salvar uma imagem em uma pasta

?>
podfkosadjo
