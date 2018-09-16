<fieldset><legend>Menus do site</legend>
<table class="a">
	<thead>
		<tr>
			<td>#</td>
			<td>Nome</td>
			<td>Link</td>
			<td>Status</td>
		</tr>
	</thead>
	<tbody>
		<?php

		include "conexao.inc";

		$sql = "SELECT * FROM menus";
		$query = mysqli_query($con,$sql);
		$state = "";
		$mudar = "";

		while ($menus = mysqli_fetch_array($query)) {
			if ($menus['status'] == '1') {
				$state = 'Ativo';
				$mudar = 'Inativo';
			}else{
				$state = 'Inativo';
				$mudar = 'Ativo';
			}
			echo "<tr>
					<td>".$menus['cod']."</td>
					<td>".$menus['nome']."</td>
					<td>".$menus['link']."</td>
					<td>".$state." <a href='?mudar=".$mudar."&id=".$menus['cod']."'>Mudar</a></td>
				</tr>";
		}



	?>



	
		
	</tbody>

</table>
</fieldset>


<fieldset><legend>Menus Ativos</legend>
<ul>
<?php
	$sql = "SELECT * FROM menus WHERE status = '1'";
	$query = mysqli_query($con,$sql);

	while ($ativos = mysqli_fetch_array($query)) {
		echo "<li><a href='menus/".$ativos['link']."".'.php'."'>".$ativos['nome']."</a></li>";
	}

?>
</ul>
</fieldset>








