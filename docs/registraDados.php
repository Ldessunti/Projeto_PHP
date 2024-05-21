<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro de Dados</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            require 'navBar.php';
        ?>
        <div class="row">
            <div class="col p-3">
                <h1>Login</h1>
            </div>
            <div class="row">
                <?php
                    require 'conectaBanco.php';

                    $usuario = $_POST['usuario'];
                    $senha = $_POST['senha'];

                    if(empty($usuario) or empty($senha)){
                        echo "Campos devem ser preenchidos";
                    }else{
                        $sql = "INSERT INTO login(usuario, senha) VALUES ('$usuario', '$senha')";
                        $banco->query($sql);
                        if($banco->affected_rows >= 1){
                            echo "<br>Login efetuado com Sucesso!";
                        }else{
                            echo "Erro ao efetuar Login";
                        }
                    }

                    $banco->close(); 
                ?>
            </div>
        </div>
    </div>
</body>
</html>