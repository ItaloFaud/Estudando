<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
    if ($_POST['Nome'] != "") {
      echo '
        <div class="jumbotron col-md-12">
          <h3>'.$_POST['Nome'].'</h3>
          <h3>'.$_POST['ch'].'</h3>
          <h3>'.$_POST['nivel'].'</h3>
          <h3>'.$_POST['categoria'].'</h3>
        </div>
      ';
    }
  ?>
  
  <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Cursos</h1>
        <h4>Cadastro</h4>
        <form method="POST">
  <div class="form-group col-md-12">
    <label for="Nome">Nome do curso</label>
    <input required="" type="text" class="form-control" id="Nome" name="Nome" aria-describedby="emailHelp">
  </div>
  <div class="form-group col-md-12">
    <label for="ch">Carga horária</label>
    <input  required="" type="number" class="form-control" id="ch" name="ch" aria-describedby="emailHelp"> horas
  </div>
  <div class="form-group col-md-12">
    <label for="nivel">Nivel</label>
    <select name="nivel" id="nivel" class="form-group">
      <option>Básico</option>
      <option>Intermediário</option>
      <option>Avançado</option>
    </select>
  </div>
  <div class="form-group col-md-12">
    <label for="Nasc">Categoria</label>
    <select name="categoria" id="categoria" class="form-group">
      <?php
      include "conexao.inc";
        $sql = "SELECT * FROM categoria";
        $query = mysqli_query($con,$sql);

        while ($cat = mysqli_fetch_assoc($query)) {
           echo "<option>".$cat['nome']."</option>";
         } 
      ?>
      
    </select>
    
      
  </div>

  

  <button type="submit" class="btn btn-outline-success">Cadastre</button>
  
</form>

      </div>
    </main>
    </div>

</body>
</html>


