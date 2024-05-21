<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de Gerenciamento de Consultas Médicas</title>
</head>
<body>
    <div class="container-fluid">
        <?php
        include 'navBar.php';
        ?>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1 class="text-center">Faça seu Login</h1>
                <form action="registraDados.php" method="post">

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario: </label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha: </label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>
                    <input type="submit" value="Entrar" class="col-2 m-3 btn btn-primary">              
                </form>

            </div>
            <div class="col-2"></div>
        </div>
    </div>
    
</body>
</html>