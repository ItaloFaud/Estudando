<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>*Pag*</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body class="bg-warning">


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Cursos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </div>
</nav>

<?php

include "conexao.inc";

		if (!isset($_GET['cat'])) {
			$sql1 = "SELECT * FROM cursos";
			$query1 = mysqli_query($con,$sql1);
			echo '<div class="jumbotron"><h1>Cursos Disponíveis</h1></div>';

				echo '<br> <div class="container bg-success">';
			while ($dados = mysqli_fetch_assoc($query1)) {
				$nivel = '';

				if ($dd['nivel'] = 'basico' ) {
					$nivel = "Básico";
				}
			echo '
			<div class="bg-primary jumbotron col-md-4">
				<h1>'.$dados['nome'].'</h1>
				<h3>'.$dados['ch'].' horas</h3>
				<h3>'.$nivel.'</h3>
				<h3>'.$dados['categoria'].'</h3>
			</div>';				}
		}

?>

</div>



</body>
</html>