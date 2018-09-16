
<?php

//Como pegar a ultima letra de uma string substr(string, start);
//Conta o número de caracteres strlen(string)
include "index.php";

	if (isset($_GET['cat'])) {
		
			$cat = $_GET['cat'];
			$sql = "SELECT * FROM cursos WHERE categoria = '$cat'";
			$query = mysqli_query($con,$sql);
			
			echo '<div class="jumbotron col-md-12">
					<h1>'.$cat.'</h1>

					</div>';

			echo '<br> <div class="container bg-success">';
			while ($dd = mysqli_fetch_assoc($query)) {
					$nivel = '';

				if ($dd['nivel'] = 'basico' ) {
					$nivel = "Básico";
				}
					echo '
					<div class="bg-primary jumbotron col-md-4">
						<h1>'.$dd['nome'].'</h1>
						<h3>'.$dd['ch'].' horas</h3>
						<h3>'.$nivel.'</h3>
						<h3>'.$dd['categoria'].'</h3>	
					</div>';		
				}	
		
	}



?>

</div>



