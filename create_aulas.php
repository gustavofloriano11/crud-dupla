<?php

    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $salario = $_POST['salario'];

        $sql = "INSERT INTO professores (nome, email, telefone, salario) VALUES ('$nome', '$email', '$telefone', '$salario')";

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
    <h2>INSERIR DADOS DO PROFESSOR:</h2>
    <form method="POST">
        <label for="materia">Matéria:</label>
        <input type="text" name="materia">
        <label for="sala">Sala:</label>
        <input type="text" name="sala">
        <label for="capacidade">Capacidade de Alunos:</label>
        <input type="text" name="capacidade">
        <label for="assunto">Assunto da Aula:</label>
        <input type="text" name="assunto">
        <input type="submit" value="ENVIAR DADOS">
    </form>
    <a href="read.php"><button>VER REGISTROS</button></a>
</body>
</html>