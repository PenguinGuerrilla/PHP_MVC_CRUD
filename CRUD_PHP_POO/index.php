<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<?php

include 'Controller/AlunoController.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        phpinfo();
        echo'pagina inicial';
        break;
    case '/aluno':
        AlunoController::index();
        break;
    case '/aluno/form':
        AlunoController::form();
        break;
    case '/aluno/form/save':
        AlunoController::save();
        break;
    case '/aluno/delete':
        AlunoController::delete();
        break;
    default:
        break;
    }