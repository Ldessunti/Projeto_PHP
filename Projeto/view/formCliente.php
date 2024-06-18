<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form cadastro de Cliente</title>
</head>
<body>
    <?php
        require '../view/navBar.php';
    ?>
    <div class="col-2"></div>
    <div class="col-md-8 p-5">
        <h3 class="text-center">Cadastro de Cliente</h3>
        <div class="bg-light p-5">
            <form action="../model/listCliente.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="nome">Nome:</label>
                    <input class="form-control" name="nome" type="text" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dataNascimento">Data de Nascimento:</label>
                    <input class="form-control" name="dataNascimento" type="date" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Cpf" aria-placeholder="000.000.000-00">CPF:</label>
                    <input class="form-control" name="cpf" type="text" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email" aria-placeholder="email@email.com">E-mail:</label>
                    <input class="form-control" name="email" type="email" required>
                </div>
                <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-danger">
                        <a href="index.php">Cancelar</a>
                    </button>
                    <button class="btn btn-outline-success" type="submit">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-2"></div>
</body>
