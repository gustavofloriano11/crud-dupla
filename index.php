<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menu</title>
</head>
<body id="flexivel">
    <div class="centralizada">
        <div id="professores">
            <a href="create_professor.php"> <button class="botao"> ADICIONAR PROFESSORES </button> </a>        
            <a href="read_professores.php"> <button class="botao"> VISUALIZAR PROFESSORES </button> </a>     
        </div>
        <div id="aulas">
            <a href="create_aulas.php"> <button class="botao"> ADICIONAR AULAS </button> </a>
            <a href="read_aulas.php"> <button class="botao"> VISUALIZAR AULAS </button> </a>
        </div>
        <div>
            <a href="create_diario.php"> <button class="botao"> ADICIONAR DIÁRIO </button> </a>
            <a href="read_diario.php"> <button class="botao"> VISUALIZAR DIÁRIO </button> </a>
        </div>
    </div>
</body>
</html>