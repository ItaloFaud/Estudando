  <?php

  include "conexao_Cads.inc";

// CONFERE OS REGISTROS FEITOS, CONTA E MOSTRA ELES

  $resultado = mysqli_query($conexao,"SELECT * FROM cadastros");
  $linhas = mysqli_num_rows($resultado);
  echo "Encontradas $linhas pessoas cadastradas";

//

//INSERE ELEMENTOS NA TABELA 
  $vnome = "Italo";
  $vuser = "Itin";
  $vsenha = "123456";
  $vemail = "italo@gmail.com";
  $vtel = "444439328";
  $vst = 1;
  $vobs = "Foda";

  $sql = "INSERT INTO cadastros VALUES (DEFAULT,'$vnome','$vuser','$vsenha','$vemail','$vtel',$vst,'$vobs')";
  $query = mysqli_query($conexao,$sql);

    mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<title>Aula 01 - Conecta ao BD</title>
</head>
<body>

</body>
</html>