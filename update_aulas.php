<?php
    include 'db.php';

    $id = $_GET['id_aula'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $materia = $_POST['materia'];
        $sala = $_POST['sala'];
        $capacidade = $_POST['capacidade'];
        $assunto = $_POST['assunto'];

        $sql = "UPDATE aulas SET materia='$materia', sala='$sala', capacidade='$capacidade', assunto='$assunto' WHERE id_aula=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $sql = "SELECT * FROM aulas WHERE id_aula=$id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Dados - AULA</title>
</head>
<body>
    <h2>ATUALIZAR DADOS DA AULA:</h2>
    <form method="POST">
        <label for="materia">Matéria:</label>
        <input type="text" name="materia">
        <label for="sala">Sala:</label>
        <input type="text" name="sala">
        <label for="capacidade">Capacidade de Alunos:</label>
        <input type="text" name="capacidade">
        <label for="assunto">Assunto da Aula:</label>
        <input type="text" name="assunto">
        <input type="submit" value="ATUALIZAR DADOS">
    </form>
    <a href="index.php"> <button> Menu </button></a>
</body>
</html>