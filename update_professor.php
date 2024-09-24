<?php
    include 'db.php';
    $id_professor = $_GET['id_professor'];
 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $salario = $_POST['salario'];
        $idade = $_POST['idade'];

        $sql = "UPDATE professores SET nome = '$nome', email = '$email', telefone = '$telefone', salario = '$salario', idade = '$idade' WHERE id_professor = '$id_professor'";
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
    <title>ATUALIZAR DADOS - PROFESSOR</title>
</head>
<body>
    <h2>ATUALIZAR DADOS DO PROFESSOR:</h2>
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
</body>
</html>