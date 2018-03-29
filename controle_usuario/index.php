<?php

	require 'conexao.php';

?>

<a href="cadastrar.php">Cadastrar</a><p>
	<table border="0" width="50%">
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Ações</th>
		</tr>
		<?php

		$sql = "select * from usuarios";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			foreach($sql->fetchAll() as $usuarios){
				echo '<tr>';
				echo '<td>'.$usuarios['nome'].'</td>';
				echo '<td>'.$usuarios['email'].'</td>';
				echo '<td><a href="alterar.php?id='.$usuarios['id'].'">Alterar</a> - <a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';
				echo '</tr>';
			}
		}

		?>
	</table>
