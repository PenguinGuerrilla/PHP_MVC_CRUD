<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <form action="/aluno/form/save" method="POST">

    <div class="divzin mt-5">

            <input type="hidden" name="id" id="id" value="<?= $model->id ?>" placeholder="Ex: João da Silva Sauro" required class="form-control">

        <div class="mb-3">
            <label for="tfNome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" placeholder="Ex: João da Silva Sauro" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="tfCPF">CPF:</label>
            <input type="text" name="cpf" autocomplete="off" maxlength="14" id="cpf" value="<?= $model->cpf ?>" placeholder="Ex: 123.456.789-10" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="tfData">Data de Nascimento:</label>
            <input type="date" name="data" id="dataNasc" placeholder="" value="<?= $model->dataNasc ?>" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="tfEmail">E-mail:</label>
            <input type="email" name="email" id="email" value="<?= $model->email ?>"  placeholder="Ex: SilvaSauro@igmail.com" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="tfTelefone">Telefone:</label>
            <input type="text" name="telefone" id="tfTelefone" value="<?= $model->telefone ?>"  placeholder="(12) 9 1234-5678" required class="form-control">
        </div>
        <div class="mb-3"><p>Sexo:</p>
            <div class="form-check form-check-inline">
                <label for="masc" class="form-control form-check form-check-inline" required>
                <input type="radio" name="sexo" value="M" checked> Masculino
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label for="fem" class="form-control form-check form-check-inline">
                <input type="radio" name="sexo" value="F"> Feminino
                </label>
            </div>
        </div>

        <hr>
        

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Cadastrar <i class="fa-solid fa-plus"></i> </button>
        </div>
    </div>
</form>

</body>
</html>