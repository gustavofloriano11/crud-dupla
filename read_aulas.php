<?php
    include 'db.php';


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
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                    <td> {$row['id_aula']} </td>
                    <td> {$row['sala']} </td>
                    <td> {$row['materia']} </td>
                    <td> {$row['capacidade']} </td>
                    <td> {$row['assunto']} </td>
                    <td>
                        <a href='update.php?id_aula={$row['id_aula']}'>Editar</a> |
                        <a href='delete_aulas.php?id_aula={$row['id_aula']}'>Excluir</a>
                    </td>
                </tr>";
        }
    echo "</table>";
}else{
    echo "Nenhum registro encontrado.";
}
$conn -> close();

?>
<br>

<a href="index.php"> <button> Menu </button></a>

