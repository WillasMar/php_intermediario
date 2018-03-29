<?php

	require 'conexao.php';

	if(isset($_POST) && !empty($_POST)){
		if(isset($_POST['codigo']) && !empty($_POST['codigo'])){
			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				if(isset($_POST['preco']) && !empty($_POST['preco'])){
					if(isset($_POST['qtd_min']) && !empty($_POST['qtd_min'])){

						$codigo = addslashes($_POST['codigo']);
						$nome = addslashes($_POST['nome']);
						$preco = addslashes($_POST['preco']);
						$qtd_min = addslashes($_POST['qtd_min']);

						$pdo->query("insert into products set cod='$codigo', name='$nome', price='$preco', min_quantity='$qtd_min'");

						header('Location: index.php');
					}else{
						echo "Não foi informado a quantidade mínima!";
					}

				}else{
					echo "Não foi informado o preço!";
				}

			}else{
				echo "Não foi informado o nome!";
			}
		}else{
			echo "Não foi informado o código!";
		}
	}

?>

<p><a href="index.php">Home</a></p>

<form method="post">
	Referência:
	<input type="text" name="codigo" required autofocus><br><br>
	Nome:
	<input type="text" name="nome" required><br><br>
	Preço:
	<input type="float" name="preco" required><br><br>
	Quantidade Mínima:
	<input type="number" name="qtd_min" required><br><br>

	<input type="submit" value="Gravar">
</form>