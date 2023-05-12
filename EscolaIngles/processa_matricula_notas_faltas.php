<?php

require_once "conexao.php";

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $matricula_aluno_id = $_POST["matricula_aluno_id"];
    $matricula_turma_id = $_POST["matricula_turma_id"];
    $data_lançamento = $_POST["data_lancamento"];
    $nota = $_POST["nota"];
    $falta= $_POST["falta"];

    $sql = "SELECT * FROM matriculas WHERE aluno_id = '$matricula_aluno_id' AND turma_id ='$matricula_turma_id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $data_lancamento = date("Y-m-d");
        $sql = "INSERT INTO notas_faltas (matricula_aluno_id, matricula_turma_id, data_lancamento, nota, falta) VALUES ('$matricula_aluno_id','$matricula_turma_id','$data_lancamento','$nota','$falta')";

        if(mysqli_query($conn, $sql)){
            echo "Notas e faltas inseridas com sucesso";
        } else {
            echo "Erro ao inserir notas e faltas" . mysqli_error($conn);
        }
    }else{
        echo "Erro ao inserir notas e faltas: matricula e/ou turma não encontrada.";
    }
}

mysqli_close($conn)
?>