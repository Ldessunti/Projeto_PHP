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
    <div class="col-md-9 p-5">
        <!-- Formulário -->
        <h3 class="text-center">Criar um Agendamento</h3>
        <div class="bg-light p-5">
            <form action="cadastraCarteira.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="nomePaciente">Paciente:</label>
                    <input class="form-control" name="nomePaciente" type="text" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nomeDentista">Dentista:</label>
                    <input class="form-control" name="nomeDentista" type="text" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="procedimento">Procedimento:</label>
                    <input class="form-control" name="procedimento" type="text" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dataAgenda">Data:</label>
                    <input class="form-control" name="dataAgenda" type="date" required>
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
</body>
</html>