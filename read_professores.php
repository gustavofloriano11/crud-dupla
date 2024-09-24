<?php
    include 'db.php';


$sql = "SELECT * FROM professores";

$result = $conn -> query($sql);

if($result -> num_rows > 0){
    echo "<table border='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Idade </th>
            <th> Email </th>
            <th> Telefone </th>
            <th> Salário </th>
            <th> Ações </th>
        </tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>
                    <td> {$row['id_professor']} </td>
                    <td> {$row['nome']} </td>
                    <td> {$row['idade']} </td>
                    <td> {$row['email']} </td>
                    <td> {$row['telefone']} </td>
                    <td> {$row['salario']} </td>
                    <td>
                        <a href='update.php?id={$row['id_professor']}'>Editar</a> |
                        <a href='delete.php?id={$row['id_professor']}'>Excluir</a>
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