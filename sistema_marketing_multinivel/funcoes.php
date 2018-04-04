<?php

	function listar($id, $limite){
		$lista = array();
		global $pdo;

		$sql = $pdo->prepare("select * from usuarios where id_pai = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$lista = $sql->fetchAll(PDO::FETCH_ASSOC);

			foreach ($lista as $chave => $usuarios) {
				$lista[$chave]['filho'] = array();

				if($limite > 0){
					$lista[$chave]['filho'] = listar($usuarios['id'], $limite - 1);
				}
			}
		}

		return $lista;
	}

	function exibir($array){
		echo '<ul>';
		foreach($array as $usuarios){
			echo '<li>';
			echo $usuarios['nome'].' ('.count($usuarios['filho']).' cadastros diretos)';

			if(count($usuarios['filho']) > 0){
				exibir($usuarios['filho']);
			}
			echo '</li>';
		}
		echo '</ul>';
	}

?>