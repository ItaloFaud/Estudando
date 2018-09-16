<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>\NOME//</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Faudumy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="Cadastro.php">Cadastro</a>
      </li><?php
      error_reporting(0);
      session_start();
      if ($_SESSION['usu'] && $_SESSION['usu'] == 'admin') {
        echo '
           <li class="nav-item">
        <a class="nav-link" href="CadMenu.php">Cadastro de cursos</a>
      </li>
        ';
      }else{
        echo '
           <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
        ';

      }

      ?>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cursos Disponíveis
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php

          include 'cone.inc';

          $sql = "SELECT * FROM categoria";
          $query = mysqli_query($con, $sql);

          while ($result = mysqli_fetch_assoc($query)) {
          	echo '<a class="dropdown-item" href="?cat='.$result['nome'].'">'.$result['nome'].'</a>';
          }

          ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">Ver todos</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <?php
    error_reporting(0);
    session_start();
      if ($_SESSION['usu']) {
      echo '<span class="nav-item dropdown">
       <a style="color:black;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bem-vindo '.$_SESSION['usu'].'
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Atualiza.php?logout=s">Logout</a>
         </div>
      </span>';
      }else{
        echo '<span class="navbar-brand">Bem-vindo visitante</span>';
      }
    ?>
    
  </div>
</nav>
<div class="container jumbotron">
  <h3>Cadastro de cursos </h3>
<form method="post" action="ACadCurso.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nc">Nome do curso</label>
    <input name="nc" type="text" class="form-control" id="nc" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos suas informações</small>
  </div>
  <div class="form-group">
    <label for="pass">Carga horária</label>
    <input name="ch" type="number" class="form-control" id="pass">
  </div>
  <div class="form-group">
    <label for="Select">Nivel</label>
    <select name="n" class="form-control" id="Select">
      <option>Avançado</option>
      <option>Intermediário</option>
      <option>Básico</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Select2">Categoria</label>
    <select name="cate" class="form-control" id="Select2">
      <?php
      include "cone.inc";
         $sql = "SELECT * FROM categoria";
        $query = mysqli_query($con,$sql);
        while ($dados = mysqli_fetch_assoc($query)) {
         echo '<option>'.$dados['nome'].'</option>';
        }

      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="file">Foto</label>
    <input name="arquivo" type="file" class="form-control-file" id="file">
  </div>
  <input type="submit" value="Cadastrar" class="btn btn-primary" name="">
</form>
</div>

</body>
</html>