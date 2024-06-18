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
                <h1>Listagem de Agendamentos</h1>
            
                <?php
                    require 'conectaBanco.php';
                    $select = "SELECT * FROM procedimentos";
                    $resultado = mysqli_query($banco, $select);
                ?>

                <table class="table table-hover">
                    <thead>
                        <th scope="row">Paciente: </th>
                        <th scope="row">Dentista: </th>
                        <th scope="row">Procedimento: </th>
                        <th scope="row">Agendamento: </th>
                    </thead>
                    <tbody>
                        <?php
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    $nomePaciente = $linha['nomePaciente'];
                                    $nomeDentista = $linha['nomeDentista'];
                                    $procedimento = $linha['procedimento'];
                                    $dataAgenda = $linha['dataAgenda'];

                                    echo "<tr>
                                        <td> $nomePaciente </td>
                                        <td> $nomeDentista </td>
                                        <td> $procedimento </td>
                                        <td? $dataAgenda </td>
                                    </tr>";
                                };
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>