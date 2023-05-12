<?php
require_once "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$data_nascimento = $_POST['data_nascimento'];

$sql = "UPDATE alunos SET nome='$nome', matricula= '$matricula', data_nascimento='$data_nascimento' WHERE id = $id";
$result = mysqli_query($conn, $sql);

if($result){

    header("Location: exibir_alunos.php");
} else{
    echo "Erro ao atualizar o aluno: " . mysqli_error($conn);
}

mysqli_close($conn);
?>