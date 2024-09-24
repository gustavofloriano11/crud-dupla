<?php
    include 'db.php';

    $id_professor = $_GET['id_professor'];

    $sql = "DELETE FROM professores WHERE id_professor = '$id_professor'";

    if($conn -> query($sql) === TRUE){
        echo 'REGISTRO EXCLUÍDO';
    } else {
        echo 'ERRO ' . $sql . "<br>" . $conn -> error;
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Professor</title>
</head>
<body>
    <br>
    <a href="read_professores.php"><button>Voltar para o MENU</button></a>
</body>
</html>