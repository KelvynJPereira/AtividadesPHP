<?php

// Criando conexão
try { 
	$conn = new PDO("mysql:host=localhost;dbname=bd_pdo", "root","root");
	} catch (PDOException $e) {
		echo "<h1>Erro na conexão... </h1>".$e;	
	}

?>