<?php
    $aluno_id = $_POST["aluno_id"];
    $turma_id = $_POST["turma_id"];
    $data_matricula = $_POST["data_matricula"];

    require_once "conexao.php";

    $sql = "INSERT INTO matriculas (aluno_id, turma_id, data_matricula) VALUES ('$aluno_id', '$turma_id', '$data_matricula')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Matrícula cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar matrícula: " . $conn->error;
    }

    $conn->close();
?>