<?php
    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $salario = $_POST['salario'];
        $idade = $_POST['idade'];

        $sql = "INSERT INTO professores (nome, email, telefone, salario, idade) VALUES ('$nome', '$email', '$telefone', '$salario', '$idade')";

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
    <title>Inserir Dados</title>
</head>
<body>
    <h2>INSERIR DADOS DO PROFESSOR:</h2>
    <form method="POST">
        <label for="nome">Professor(a):</label>
        <input type="text" name="nome">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" placeholder="47919999999">
        <label for="salario">Salário:</label>
        <input type="text" name="salario">
        <label for="idade">Idade:</label>
        <input type="text" name="idade">
        <input type="submit" value="ENVIAR DADOS">
    </form>
    <a href="read_professores.php"><button>VER REGISTROS</button></a>
</body>
</html>