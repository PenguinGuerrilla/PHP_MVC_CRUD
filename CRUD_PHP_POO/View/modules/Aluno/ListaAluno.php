<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/9ccf533a61.js" crossorigin="anonymous"></script>
  </head>

<body>

    <div class="tabela">
    <table class='table table-hover table-striped table-bordered'>
    <a href="/aluno/form" class="btn btn-success mb-3">Cadastrar</a>
        <tr>
        <th>ID</th>
        <th>CPF</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Data de nascimento</th>   
        <th>Sexo</th>
        <th>Ações</th>
        </tr>

        <?php foreach($model->rows as $row): ?>
        <tr>
            <td><?= $row->id ?></td>
            <td><?= $row->cpf ?></td>
            <td><?= $row->nome ?></td>
            <td><?= $row->email ?></td>
            <td><?= $row->telefone ?></td>
            <td><?= $row->dataNasc ?></td>
            <td><?= $row->sexo ?></td>
            <td style="width: 180px;" ><a href="/aluno/form?id=<?=$row->id ?>"  class="btn btn-warning mb-1">Editar<i class='fa-solid fa-pen-to-square'></i></a>
            <a href="/aluno/delete?id=<?= $row->id ?>" class="btn btn-danger mb-1"  >Excluir<i class='fa-solid fa-trash'></i> </a></td>
        </tr>
        <?php endforeach ?>
</table>
    </div>

</body>
</html>