<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista Clientes</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include '../view/navBar.php';
        ?>
        <div class="row">
            <div class="col-text center p-3">
                <h1>Listagem de Clientes</h1>
            
                <?php
                    
                    require '../dao/conectaBanco.php';
                    $select = "SELECT * FROM clientes";
                    $resultado = mysqli_query($banco, $select);

                    if(empty($nome)){
                        echo "<p>Todos os campos devem ser preenchidos </p>";
                    }else{
                        $sql = "INSERT INTO paciente(nome, dataNascimento, cpf, email) VALUES ('$nome','$dataNascimento', '$cpf', '$email')";
                        $banco->query($sql);
                        if($banco->affected_rows >= 1){
                            header('Location: index.php');
                        }else{
                            echo "Erro ao cadastrar o paciente $nome!";
                        }
                    }
                ?>

                

                <table class="table table-hover">
                    <thead>
                        <th scope="col">Nome: </th>
                        <th scope="col">Data de Nascimento: </th>
                        <th scope="col">CPF: </th>
                        <th scope="col">E-mail: </th>
                    </thead>
                    <tbody>
                        <?php
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    $nome = $linha['nome'];
                                    $dataNascimento = $linha['dataNascimento'];
                                    $cpf = $linha['cpf'];
                                    $email = $linha['email'];

                                    echo "<tr>
                                        <td> $nome </td>
                                        <td> $dataNascimento </td>
                                        <td> $cpf </td>
                                        <td> $email </td>
                                    </tr>";
                                };
                            }
                            $banco->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>