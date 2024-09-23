<?php 
include 'db.php';

if(isset($_POST['create_professores'])){
    $nome_professor = $_POST['nome_professor'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf_professor = $_POST['cpf_professor'];
    $materia = $_POST['materia'];


    $sql = "INSERT INTO professores (nome_professor, data_nascimento, cpf_professor, materia ) values ('$nome_professor', '$data_nascimento', '$cpf_professor', '$materia');";

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
    <!-- Adicionar Professores -->
    <h2>Adicionar professores</h2>
    <form method="POST" name="adicionar_professores">
     Nome Professor: <input type="text" name="nome_professor" required> <br><br>
     Data de Nascimento: <input type="date" name="data_nascimento" required> <br><br>
     CPF Professor: <input type="number" name="cpf_professor" required> <br><br>
     Matéria: <input type="text" name="materia" required> <br><br>
     <input type="SUBMIT" name="create_professores" value="Adicionar Professores">
    </form>
</body>
</html>