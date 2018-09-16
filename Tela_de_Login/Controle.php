


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<style type="text/css">
		.a{border: black 1px solid;
		}
		td{
			border: black 1px solid;
		}
	</style>
	<fieldset><legend>Admin's</legend>
	<table class="a">
		<thead>
			<tr>
				<td>#</td>
				<td>UserName</td>
				<td>Email</td>
				<td>Status</td>
				<td>Ações</td>
			</tr>
			<tbody>
				<?php
					
					include "conexao.inc";

					$sql1 = "DELETE FROM cadastros WHERE cod = '".$_GET['id']."'";

					$sql3 = "SELECT status FROM cadastros WHERE cod = '".$_GET['id']."'";

					$sqlD = "UPDATE menus SET status = '2' WHERE cod = '".$_GET['id']."'";

					$sqlA = "UPDATE menus SET status = '1' WHERE cod = '".$_GET['id']."'";


					if (isset($_GET['mudar'])) {
						if ($_GET['mudar'] == 'Ativo') {
							$queryA = mysqli_query($con,$sqlA);

						}elseif ($_GET['mudar'] == 'Inativo') {
							
							$queryD = mysqli_query($con,$sqlD);
						}
					}


					if (isset($_GET['acao'])) {
					$query3 = mysqli_query($con,$sql3);
					while ($dados = mysqli_fetch_assoc($query3)) {
						if ($dados['status'] == '3') {
							echo "<script type='text/javascript'>
							alert('Este admin não pode ser deletado!');
							</script>";
						}else{	
						if ($_GET['acao'] == "d") {
							$query1 = mysqli_query($con,$sql1);
						}else{
							$query2 = mysqli_query($con,$sql1);
							header("location:registro_admin.php");
						}					
					}
					}
					
				}

					$sql = "SELECT * FROM cadastros WHERE status = '2'";
					$query = mysqli_query($con,$sql);

					$sqll = "SELECT * FROM cadastros WHERE status = '3'";
					$queryy = mysqli_query($con,$sqll);
					$state = "b";
					while ($dados = mysqli_fetch_array($query)) {
						if ($dados['status'] == "2") {
							$state = "Admin";
						}else{
							$state = "Admin Master";
						}
						echo "	<tr>
									<td>".$dados['cod']."</td>
									<td>".$dados['username']."</td>
									<td>".$dados['email']."</td>
									<td>".$state."</td>
									<td><a href='?acao=d&id=".$dados['cod']."'>Delete</a>  |  <a href='?acao=a&id=".$dados['cod']."'>Atualizar</a></td>
								</tr>";
					}while ($d = mysqli_fetch_array($queryy)) {
						if ($dados['status'] == "2") {
							$state = "Admin";
						}else{
							$state = "Admin Master";
						}
						echo "	<tr>
									<td>".$d['cod']."</td>
									<td>".$d['username']."</td>
									<td>".$d['email']."</td>
									<td>".$state."</td>
									<td><a href='?acao=d&id=".$d['cod']."'>Delete</a>  |  <a href='?acao=a&id=".$d['cod']."'>Atualizar</a></td>
								</tr>";
					}
?>
			</tbody>
		</thead>
	</table>
	</fieldset>

	<?php
		#include "registro_admin.php";
		include "Pages.php";
		include "Re_menu.php";
	?>

</body>
</html>