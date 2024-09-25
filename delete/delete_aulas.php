<?php

    include '../database/db.php';

    $id_aula = $_GET['id_aula'];

    $sql = "DELETE FROM aulas WHERE id_aula='$id_aula'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro excluído com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn -> close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <a href="../index.php"> <button class = "menu"> Menu </button></a>
</body>
</html>