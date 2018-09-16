<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>SuperMercado</title>
  <meta charset="utf-8">
<body class="bg-dark">

  <?php
  include "conexao.inc";
  include "Menu.php";
  ?>  
    
  
<?php
  
  if (isset($_GET['pag'])) {
    if ($_GET['pag'] == '') {
      include "Pages/Lista_Pro.php";
    }
    else if ($_GET['pag'] == 'login') {
      include "Login.php";
    }else if ($_GET['pag'] == 'Cadastro') {
      include "Cadastro.php";
    }else if ($_GET['pag'] == 'Lista'){
        include "Pages/Lista_Pro.php";
    }
    }else if ($_GET['pag'] == ''){
        include "Pages/Lista_Pro.php";
    }
  

?>
</body>
</html>
