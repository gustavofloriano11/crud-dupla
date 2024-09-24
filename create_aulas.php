<?php

    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $materia = $_POST['materia'];
        $sala = $_POST['sala'];
        $capacidade = $_POST['capacidade'];
        $assunto = $_POST['assunto'];
        $tempo = $_POST['hora'];

        $sql = "INSERT INTO aulas (sala, materia, capacidade, assunto) VALUES ('$materia', '$sala', '$capacidade', '$assunto')";

        if($conn -> query($sql) === TRUE){
           echo 'NOVO PROFESSOR ADICIONADO'; 
        } else {
            echo 'ERRO' . $sql . "<br>" . $conn -> error;
        }
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados - AULA</title>
</head>
<body>
    <h2>INSERIR DADOS DA AULA:</h2>
    <form method="POST">
        <label for="materia">Matéria:</label>
        <input type="text" name="materia">
        <label for="sala">Sala:</label>
        <input type="text" name="sala">
        <label for="capacidade">Capacidade de Alunos:</label>
        <input type="text" name="capacidade">
        <label for="assunto">Assunto da Aula:</label>
        <input type="text" name="assunto">
        <label for="hora">Tempo da Aula:</label>
        <input type="time" name="hora">
        <input type="submit" value="ENVIAR DADOS">
    </form>
    <a href="index.php"> <button> Menu </button></a>
</body>
</html>