<?PHP

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{

	$pdo = new PDO($dsn,$dbuser,$dbpass);

	$sql = "DELETE FROM usuarios WHERE id=10";
	$pdo->query($sql);

	echo "Usuário deletado!";
	
}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>