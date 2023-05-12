<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$nome = $_POST["nome"];
	$matricula = $_POST["matricula"];
	$data_nascimento = $_POST["data_nascimento"];
	
	$sql = "INSERT INTO alunos (nome, matricula, data_nascimento) VALUES ('$nome', '$matricula', '$data_nascimento')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Aluno cadastrado com sucesso!";
	} else {
		echo "Erro ao cadastrar aluno: " . $conn->error;
	}
	
	$conn->close();
}
?>