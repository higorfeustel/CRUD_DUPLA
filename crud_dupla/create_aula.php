<?include 'db.php'; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sala = $_POST['sala'];
    $hora = $_POST['hora'];
}

$sql = "INSERT INTO aulas (sala, hora) values ($sala, $hora);";

if ($conn->query($sql) == TRUE){
    echo "Novo registro realizado com sucesso!";
} else{
    echo "Registro não realizado!";
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

    <!-- Adicionar Aulas -->
    <h2>Adicionar Aulas</h2>
    <form method="POST" name="adicionar_aulas">
     Numero da Sala: <input type="number" name="sala" required> <br><br>
     Tipo da Sala: <input type="text" name="hora " required> <br><br>
     <input type="SUBMIT">
    </form>

</body>
</html>