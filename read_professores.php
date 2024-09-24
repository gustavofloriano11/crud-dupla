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
        while($row = $result -> fetch_assoc()){ ?>
            <tr>
                <td> <?php echo $row['id_professor'];?> </td>
                <td> <?php echo $row['nome'];?> </td>
                <td> <?php echo $row['idade'];?> </td>
                <td> <?php echo $row['email'];?> </td>
                <td> <?php echo $row['telefone'];?> </td>
                <td> <?php echo $row['salario'];?> </td>
                <td>
                    <a href='update_professor.php?id_professor=<?php echo $row['id_professor']?>'>Editar</a> |
                    <a href='deletar_professor.php?id_professor=<?php echo $row['id_professor']?>'>Excluir</a>
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