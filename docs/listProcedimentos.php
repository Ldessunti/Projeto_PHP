<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lançamentos</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navBar.php';
        ?>
        <div class="row">
            <div class="col-text center p-3">
                <h1>Listagem de Procedimentos</h1>

                <table class="table table-hover">
                    <thead>
                        <th scope="row">Nome: </th>
                        <th scope="row">Descrição: </th>
                        <th scope="row">Tempo médio: </th>
                    </thead>
                    <tbody>
                        <?php

                            require 'conectaBanco.php';
                            $select = "SELECT * FROM procedimentos WHERE Codigo = 1";
                            $resultado = mysqli_query($banco, $select);
                            
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    
                                    $codigo = $linha['Codigo'];
                                    $nome = $linha['Nome'];
                                    $descricao = $linha['Descricao'];
                                    $duracaoMedia = $linha['DuracaoMedia'];

                                    echo "<tr>
                                        <td> $nome </td>
                                        <td> $descricao </td>
                                        <td> $duracaoMedia Horas</td>
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