<?php

require_once "conexao.php";

if ( isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM alunos WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: exibir_alunos.php");
        exit();
    } else {
        echo "Erro ao excluir o aluno: " . mysqli_error($conn);
    }
} else {
    echo "ID do aluno não informado.";
}

mysqli_close($conn);
?>