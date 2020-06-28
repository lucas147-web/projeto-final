	
	<?php

	function connection(){

	//conexão com banco
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db 	  = "games";
	try {
	  $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  return $conn;


	  //echo "Conexão realizada com sucesso!";
	} catch(PDOException $e) {
	  echo "Falha na conexão! erro: " . $e->getMessage();
	}
}
	?>