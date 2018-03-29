<?php
	
	require 'conexao.php';

	if(isset($_GET) && !empty($_GET)){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			if(isset($_GET['quantity']) && !empty($_GET['quantity'])){

				$id = addslashes($_GET['id']);
				$quantity = addslashes($_GET['quantity']);

				$sql = "select id from products where id = $id";
				$sql = $pdo->query($sql);

				if($sql->rowCount() > 0){
					
					$sql = "insert into saida set produto = '$id', quantity = '$quantity'";
					$pdo->query($sql);
					
					header("Location: reprocessar_quantidade.php?id=$id");

				}else{
					echo "ID não encontrado: ".$id;
				}
				
			}else{
				echo "Não foi informado a quantidade!";
			}
		}else{
			echo "Não foi informado o ID!";
		}
	}
?>

<p><a href="index.php">Home</a></p>

<form method="get">
	Produto:
	<input type="number" name="id" required autofocus><br><br>
	Quantidade:
	<input type="number" name="quantity" required><br><br>

	<input type="submit" value="Gravar"><br><br>
</form>