<br>

<div class="container">
	<h1 class="jumbotron">Bem-Vindo ao SuperMercado</h1>
	<div class="bg-success container-fluid">
		<h2 class="jumbotron bg-inverse">Lista de Produtos</h2>
		<?php
			include "conexao.inc";
			$sql = "SELECT * FROM produtos";
			$query = mysqli_query($conexao,$sql);

			if ($query) {
				$preco = '';
				while ($produtos = mysqli_fetch_array($query)) {
					if (strlen($produtos['preco']) == 3) {
						$preco = $produtos['preco'].'0';
					}else{
						$preco = $produtos['preco'];
					}
				echo '
			<div class="bg-primary jumbotron col-md-4">
				<h1>'.$produtos['nome'].' '.$produtos['marca'].'</h1>
				<h3>R$'.$preco.'</h3>
				<h3>'.strlen($produtos['preco']).'</h3>
				<a data-toggle="modal" data-target="#'.$produtos['id'].'" class="btn btn-success" role="button" href="">Adicionar ao carrinho</a>
			</div>
				




				
				<div class="modal fade" id="'.$produtos['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">

    	<div class="modal-content">
    		<div class="modal-header"><h3>'.$produtos['nome'].' '.$produtos['marca'].'
    		</h3></div>
     	<div class="modal-body">
			<p>Preço: R$'.$produtos['preco'].'</p>
			<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantidade de unidades</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <a class="btn btn-primary" role="button" href="">Adicionar ao carrinho</a>
  <a class="btn btn-primary" role="button" href="">Adicionar e ir ao carrinho</a>
</form>
			</div>
      	<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>';

				}
			}



		?>
		</div>
	</div>
</div>	
	





