<?php
    include '../database/db.php';
 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id_diario = $_POST['id_diario'];
        $id_professor = $_POST['id_professor'];
        $id_aula = $_POST['id_aula'];
        $duracao = $_POST['duracao'];

        $sql = "UPDATE diario SET id_professor = '$id_professor', id_aula = '$id_aula', hora_aula = '$duracao' WHERE id_diario = $id_diario";
        if ($conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        
        $conn -> close();
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>ATUALIZAR DADOS - DIÁRIO</title> 
</head>
<body>
    <h2>ATUALIZAR DADOS DO DIÁRIO:</h2>
    <form method="POST">
            <label for="id_diario">ID do Diário:</label>
            <input type="text" name="id_diario">
            <label for="id_professor">ID do Professor(a):</label>
            <input type="text" name="id_professor">
            <label for="id_aula">ID da Aula:</label>
            <input type="number" name="id_aula">
            <label for="duracao">Duração da Aula:</label>
            <input type="time" name="duracao">
            <input type="submit" value="ENVIAR DADOS">
        </form>
        <a href="../index.php"> <button class = "menu"> Menu </button></a>
</body>
</html>