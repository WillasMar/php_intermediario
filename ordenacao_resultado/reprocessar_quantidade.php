<?php
	
	require 'conexao.php';

	if(isset($_GET['id']) && empty($_GET['id']) == false){

		$id = addslashes($_GET['id']);

		$sql = "
		select products.id,coalesce(sum(entrada.quantity), 0) -
			(select coalesce(sum(saida.quantity), 0) from saida
			where entrada.produto = saida.produto) as quantity
		from products
			left join entrada on products.id = entrada.produto 
			where products.id = $id 
			group by 1";

			echo $sql;
		
		$sql = $pdo->query($sql);
		
		if($sql->rowCount() > 0){
			$quantidade = $sql->fetch();
			$quantidade = $quantidade['quantity'];

			$sql = "update products set quantity = '$quantidade' where id = '$id'";
			$pdo->query($sql);	

			header('Location: index.php');

		}else{
			header('Location: index.php');
		}
	}else{
		$sql = "select products.id, coalesce(sum(entrada.quantity), 0) -
					(select coalesce(sum(saida.quantity), 0) from saida
					where entrada.produto = saida.produto) as quantity
				from products
					left join entrada on products.id = entrada.produto 
					group by 1";

		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			$quantidades = $sql->fetchAll();
			$query = "";

			for($i=0; $i < count($quantidades); $i++){

				$id = $quantidades[$i]['id'];
				$quantidade = $quantidades[$i]['quantity'];
				$query = $query."update products set quantity = $quantidade where id = $id;";
			}

			$pdo->query($query);

			header('Location: index.php');			
		}
	}

?>