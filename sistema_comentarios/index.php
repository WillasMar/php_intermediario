<?php

	require 'conexao.php';

	$sql = "select * from comentarios";
	$sql = $pdo->query($sql);

?>

<fieldset>
	<form method="post" action="incluir_comentario.php">
		Nome:<br><br>
		<input type="text" name="nome" required autofocus placeholder="seu nome"><br><br>

		Comentário:<br><br>
		<textarea name="comentario" placeholder="insira seu comentário"></textarea><br><br>

		<input type="submit" value="Enviar Mensagem">

	</form>
</fieldset>

<br><br>

<?php
	
	if($sql->rowCount() > 0){
		foreach ($sql as $comentarios):
			$nome = $comentarios['nome'];
			$comentario = $comentarios['comentario'];
	?>

		<strong><?=$nome; ?></strong><br><br>
		<?=$comentario; ?>
		<hr>

	<?php
		endforeach;
	}else{
		echo "Não há comentários!";
	}

?>