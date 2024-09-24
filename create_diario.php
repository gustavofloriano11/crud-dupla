<?php
    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $duracao = $_POST['hora_aula'];
        $id_professor_teste = $_POST['id_professor_teste'];
        $id_aula_teste = $_POST['id_aula_teste'];

        $id_aula = "SELECT id_aula FROM aulas WHERE id_aula = $id_aula_teste";
        $id_professor = "SELECT id_professor FROM professores WHERE id_professor = $id_professor_teste";

        $sql = "INSERT INTO diario (id_professor, id_aula, hora_aula) VALUES ($id_professor_teste, $id_aula_teste, '$duracao')";

        if($conn -> query($sql) === TRUE){
            echo 'NOVO DIÁRIO ADICIONADO'; 
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
    <link rel="stylesheet" href="style.css">
    <title>Inserir Dados - Diário</title>
</head>
<body>
    <h2>INSERIR DADOS - DIÁRIO:</h2>
        <form method="POST">
            <label for="id_professor_teste">ID do Professor(a):</label>
            <input type="text" name="id_professor_teste">
            <label for="id_aula_teste">ID da Aula:</label>
            <input type="text" name="id_aula_teste">
            <label for="hora_aula">Duração da Aula:</label>
            <input type="time" name="hora_aula">
            <input type="submit" value="ENVIAR DADOS">
        </form>
</body>
</html>