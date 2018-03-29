<?php

	require 'conexao.php';

	$id;
	$sql;
	$products;

	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$id = addslashes($_GET['id']);

		$sql = "select * from products where id = $id";
		$sql  = $pdo->query($sql);
		$products = $sql->fetch();
	}

	if(isset($_POST) && !empty($_POST)){
		if(isset($_POST['codigo']) && !empty($_POST['codigo'])){
			if(isset($_POST['nome']) && !empty($_POST['nome'])){
				if(isset($_POST['preco']) && !empty($_POST['preco'])){
					if(isset($_POST['qtd_min']) && !empty($_POST['qtd_min'])){
						if(count($products) > 0){

							$codigo = addslashes($_POST['codigo']);
							$nome = addslashes($_POST['nome']);
							$preco = addslashes($_POST['preco']);
							$qtd_min = addslashes($_POST['qtd_min']);

							$pdo->query("update products set cod='$codigo', name='$nome', price='$preco', min_quantity='$qtd_min' where id = $id");

							header('Location: index.php');

						}else{
							echo "Usuário não encontrado para atualizar os dados!";
						}
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
	<input type="text" name="codigo" value="<?=$products['cod']; ?>" required autofocus><br><br>
	Nome:
	<input type="text" name="nome" value="<?=$products['name']; ?>" required><br><br>
	Preço:
	<input type="float" name="preco" value="<?=$products['price']; ?>" required><br><br>
	Quantidade Mínima:
	<input type="number" name="qtd_min" value="<?=$products['min_quantity']; ?>" required><br><br>

	<input type="submit" value="Gravar">
</form>