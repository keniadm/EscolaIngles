<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = $_POST["nome"];
	$periodo = $_POST["periodo"];
	$professor_id = $_POST["professor"];
	
	$sql = "INSERT INTO turmas (nome, periodo, professor_id) VALUES ('$nome', '$periodo', '$professor_id')";
	
	if (mysqli_query($conn, $sql)) {
		echo "Turma cadastrada com sucesso!";
	} else {
		echo "Erro ao cadastrar turma: " . mysqli_error($conn);
	}
}

$conn->close();
?>