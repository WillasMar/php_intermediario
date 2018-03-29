<?php
session_start();

require 'conexao_blog.php';

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
?>

<a href="adcionarUsuarioBlog.php">Adicionar Usuário</a>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>
	<?php
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql); 

		if($sql->rowCount() > 0){
			foreach($sql->fetchAll() as $usuario){
				echo '<tr>';
				echo '<td>'.$usuario['nome'].'</td>';
				echo '<td>'.$usuario['email'].'</td>';
				echo '<td><a href="editarUsuarioBlog.php?id='.$usuario['id'].'">Editar</a> - <a href="excluirUsuarioblog.php?id='.$usuario['id'].'">Excluir</a></td>';
				echo '</tr>';
			}
		}
	?>
</table>
<p>
<a href="login.php">Sair<a/>

<?php
}else{
	header("Location: login.php");
}

?>