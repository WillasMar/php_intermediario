<?php

	require 'conexao.php';

	if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
		$ordem = addslashes($_GET['ordem']);

		if($ordem == "menorPreco"){
			$sql = $pdo->query("select * from products order by price asc");
		}else 
			if($ordem == "maiorPreco"){
				$sql = $pdo->query("select * from products order by price desc");
			}else 
				if($ordem != ""){
					$sql = $pdo->query("select * from products order by ".$ordem);
				}
			}else{
				$ordem = "";
				$sql = $pdo->query("select * from products");
	}

?>

<p>
	<a href="cadastrar_produto.php">Cadastrar</a> |
	<a href="entrada_produtos.php">Entrada</a> |
	<a href="saida_produtos.php">Saída</a> |
	<a href="reprocessar_quantidade.php">Reprocessar Quantidade Geral</a>
</p>

<form method="get">
	<select name="ordem" onchange="this.form.submit()">
		<option></option>
		<option value="id" <?php echo ($ordem=="id")?'selected="selected"':''; ?>>ID</option>
		<option value="name" <?php echo ($ordem=="name")?'selected="selected"':''; ?>>Nome</option>
		<option value="menorPreco" <?php echo ($ordem=="menorPreco")?'selected="selected"':''; ?>>Menor Preço</option>
		<option value="maiorPreco" <?php echo ($ordem=="maiorPreco")?'selected="selected"':''; ?>>Maior Preço</option>
		<option value="quantity" <?php echo ($ordem=="quantity")?'selected="selected"':''; ?>>Quantidade</option>
	</select>
</form>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Referência</th>
		<th width="300">Nome</th>
		<th width="50">Preço</th>
		<th>Estoque</th>
		<th>Estoque Mínimo</th>
		<th>Ações</th>
	</tr>

	<?php //inicia um código php	

		if($sql->rowCount() > 0){
			foreach ($sql->fetchAll() as $usuarios):
	?>
		<tr>
			<td><?php echo $usuarios['id']; ?></td>
			<td><?php echo $usuarios['cod']; ?></td>
			<td><?php echo $usuarios['name']; ?></td>
			<td><?php echo $usuarios['price']; ?></td>
			<td><?php echo $usuarios['quantity']; ?></td>
			<td><?php echo $usuarios['min_quantity']; ?></td>
			<td>
				<a href="alterar_produto.php?id=<?=$usuarios['id']?>">Alterar</a> |
				<a href="excluir_produto.php?id=<?=$usuarios['id']?>">Excluir</a> |
				<a href="reprocessar_quantidade.php?id=<?php echo $usuarios['id']; ?>">Reprocessar Quantidade</a>		
			</td>
		</tr>
	
	<?php //inicia um código php
		
		endforeach;
		
		}
	
	?>
</table>