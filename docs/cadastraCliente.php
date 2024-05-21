<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastra Cliente</title>
</head>
<body>
    <?php
        require 'navBar.php';
        require 'conectaBanco.php';
        
        $nome = $_POST['nome'];
        $data_Nascimento = $_POST['dataNascimento'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(empty($nome)){
            echo "<p>Todos os campos devem ser preenchidos </p>";
        }else{
            $sql = "INSERT INTO paciente(Nome, Data_Nascimento, Cpf, Email, Senha) VALUES ('$nome','$data_Nascimento', '$cpf', '$email', '$senha')";
            $banco->query($sql);
            if($banco->affected_rows >= 1){
                header('Location: index.php');
            }else{
                echo "Erro ao cadastrar o paciente $nome!";
            }
        }

        $banco->close();
    ?>
</body>