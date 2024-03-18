<?php
     
    class AlunoController{
        public static function index(){
            include "Model/AlunoModel.php";

            $model = new AlunoModel();
            $model->getAllRows();

            include "View/modules/Aluno/ListaAluno.php";
        }

        public static function form(){
            include 'Model/AlunoModel.php';
            $model = new AlunoModel();
            
            if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);
            //var_dump($model);
            include 'View/modules/Aluno/FormAluno.php';
        }
        public static function save(){
            include "Model/AlunoModel.php";

            $model = new AlunoModel();
            $model->id = (int) $_POST["id"];
            $model->nome = $_POST["nome"];
            $model->cpf = $_POST["cpf"];
            $model->dataNasc = $_POST["data"];
            $model->telefone = $_POST["telefone"];
            $model->email = $_POST["email"];
            $model->sexo = $_POST["sexo"];
            
            $model->save();

            header("location: /aluno");
        }
        public static function delete(){
            include "Model/AlunoModel.php";
            $model = new AlunoModel();
            $model->delete((int) $_GET["id"]);
            header("location: /aluno");
        }
}