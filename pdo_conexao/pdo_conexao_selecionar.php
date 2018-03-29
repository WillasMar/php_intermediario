<?php
	
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);
		$sql = "select * from usuarios";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			foreach ($sql->fetchAll() as $usuario) {
					echo "ID: ".$usuario["id"]." | Nome: ".$usuario["nome"]." | E-mail: ".$usuario["email"]."<br>";
				}
		}else{
			echo "Não existe usuários";
		}

	}catch(PDOException $e){
		echo "Falha: ".$e->getMessage();
	}

	echo "<p><a href='index.html'>Home</a>";

?>