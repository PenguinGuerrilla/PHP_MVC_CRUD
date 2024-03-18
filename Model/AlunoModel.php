<?php

class AlunoModel{

    public $id,$cpf, $nome, $telefone, $dataNasc, $email, $sexo, $rows;

    public function save(){
        include"DAO/AlunoDAO.php";
        $dao = new AlunoDAO();

        if(empty($this->id)){
            $dao->insert($this);
        }else{
            $dao->update($this);
        }

        
    }

    public function getAllRows(){
        include"DAO/AlunoDAO.php";

        $dao = new AlunoDAO();
        $this->rows = $dao->select();
    }
    public function getById(string $id){
        include "DAO/AlunoDAO.php";
        $dao = new AlunoDAO();

        $obj = $dao->selectById($id);
        if($obj){
            return $obj;
        }else{
            return new AlunoModel();
        }

    }
    public function delete(int $id){
        include"DAO/AlunoDAO.php";
        $dao = new AlunoDAO();
        $dao->delete($id);
    }

}