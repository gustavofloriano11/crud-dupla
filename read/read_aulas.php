<?php
    include '../database/db.php';


    $sql = "SELECT * FROM aulas";

    $result = $conn -> query($sql);

    if($result -> num_rows > 0){
        echo "<table border='1'>
            <tr>
                <th> ID </th>
                <th> Nº Sala </th>
                <th> Materia </th>
                <th> Capacidade </th>
                <th> Assunto </th>
                <th> Ações </th>
            </tr>";
        while($row = $result -> fetch_assoc()){ ?>
            <tr>
                <td> <?php echo $row['id_aula'];?> </td>
                <td> <?php echo $row['sala'];?> </td>
                <td> <?php echo $row['materia'];?> </td>
                <td> <?php echo $row['capacidade'];?> </td>
                <td> <?php echo $row['assunto'];?> </td>
                <td>
                    <a href='../update/update_aulas.php?id_aula=<?php echo $row['id_aula']?>'>Editar</a> |
                    <a href='../delete/delete_aulas.php?id_aula=<?php echo $row['id_aula']?>'>Excluir</a>
                </td>
            </tr>
       <?php } 
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado.";
    }
    $conn -> close();
?>
<br>

<a href="../index.php"> <button class = "menu"> Menu </button></a>

