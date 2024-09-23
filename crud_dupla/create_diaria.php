<?php 
include 'db.php';

if(isset($_POST['create_diaria'])){
    $data_aula = $_POST['data_aula'];
    $sala = $_POST['sala'];


    $sql = "INSERT INTO diaria (data_aula, sala ) values ('$data_aula', '$sala');";

    if ($conn->query($sql) === TRUE){
        echo "Novo registro realizado com sucesso!";
    } else{
        echo "Registro não realizado!";
    }
}

$conn-> close();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Registros</title>
</head>
<body>
    <!-- Adicionar Diário -->
    <h2>Adicionar Diário</h2>
    <form method="POST" name="adicionar_diaria">
     Data aula: <input type="time" name="data_aula" required> <br><br>
     Turma: <input type="text" name="sala" required > <br><br>
     <input type="SUBMIT" name="create_diaria" value="Adicionar Diaria">
    </form>
</body>
</html>