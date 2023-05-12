<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	
	$sql = "INSERT INTO professores (nome, email) VALUES ('$nome', '$email')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Professor cadastrado com sucesso!";
	} else {
		echo "Erro ao cadastrar professor: " . $conn->error;
	}
	
	$conn->close();
}
?>