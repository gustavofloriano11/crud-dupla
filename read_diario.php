<?php
    include 'db.php';


$sql = "SELECT * FROM diario";

$result = $conn -> query($sql);

if($result -> num_rows > 0){
    echo "<table border='1'>
        <tr>
            <th> ID do Professor </th>
            <th> ID da Aula </th>
            <th> Horario da Aula </th>

        </tr>";
        while($row = $result -> fetch_assoc()){ ?>
            <tr>
                <td> <?php echo $row['id_professor'];?> </td>
                <td> <?php echo $row['id_aula'];?> </td>
                <td> <?php echo $row['hora_aula'];?> </td>
                <td>
                    <a href='update_diario.php?id_diario=<?php echo $row['id_diario']?>'>Editar</a> |
                    <a href='delete_diario.php?id_diario=<?php echo $row['id_diario']?>'>Excluir</a>
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

<a href="index.php"> <button> Menu </button></a>
