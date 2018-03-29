<?php

	require 'conexao.php';

	if(isset($_GET['id']) && !empty($_GET['id'])){

		$id = addslashes($_GET['id']);

		$sql = "select id from products where id = $id";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			
			$sql = "select entrada.produto, coalesce(sum(entrada.quantity),0) as quantity_entrada,
						(select coalesce(sum(saida.quantity),0) from saida
						where saida.produto = entrada.produto) as quantity_saida
					from entrada
						where entrada.produto = $id
						group by 1";
						
			$sql = $pdo->query($sql);

			if($sql->rowCount() > 0){

				echo "Produto não pode ser excluído, existe movimentação!";
				echo "<p><a href='index.php'>Home</a></p>";
				
			}else{

				$sql = "delete from products where id = $id";
				$pdo->query($sql);

				header('Location: index.php');
			}

		}else{
			header('Location: index.php');
		}
		
	}else{
		header('Location: index.php');
	}	
?>