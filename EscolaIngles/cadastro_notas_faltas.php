<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro de notas e faltas</title>
</head>
<body>
    <h1>Cadastro de notas e faltas</h1>
    <form action="processa_matricula_notas_faltas.php" method="POST">
        <label for="matricula_aluno_id">Aluno:</label>
        <select name="matricula_aluno_id" id="matricula_aluno_id">
            <?php
                require_once "conexao.php";
                $query = "SELECT id, nome FROM alunos";
                $resultado = mysqli_query($conn, $query);
                while ($aluno = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $aluno["id"] . "'>" . $aluno["nome"] . "</option>";
                }
            ?>
        </select><br><br>

        <label for="matricula_turma_id">Turma:</label>
        <select name="matricula_turma_id" id="matricula_turma_id">
            <?php
                require_once "conexao.php";
                $query = "SELECT id, nome FROM turmas";
                $resultado = mysqli_query($conn, $query);
                while ($turma = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $turma["id"] . "'>" . $turma["nome"] . "</option>";
                }

                mysqli_close($conn);
            ?>
        </select><br><br>

        <label for="data_lancamento">Data de lançamento:</label>
        <input type="data" name="data_lancamento" id="data_lancamento"><br><br>

        <label for="nota">Nota:</label>
        <input type="number" step="0.01" name="nota" id="nota"><br><br>

        <label for="falta">Falta:</label>
        <input type="number" name="falta" id="data_falta"><br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>