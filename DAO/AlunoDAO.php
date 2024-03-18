<?php

class AlunoDAO{

    private $conexao;
    public function __construct(){
        $dsn = "mysql:host=localhost:3306;dbname=t1";
        $this->conexao = new PDO($dsn,"root","");
    }
    public function insert(AlunoModel $model){
        $sql = "insert into alunos values(NULL,?,?,?,?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$model->cpf);
        $stmt->bindValue(2,$model->nome);
        $stmt->bindValue(3,$model->telefone);
        $stmt->bindValue(4,$model->dataNasc);
        $stmt->bindValue(5,$model->email);
        $stmt->bindValue(6,$model->sexo);

        $stmt->execute();

    }
    public function update(AlunoModel $model){
        $sql = "update alunos set nome=?, telefone =?, dataNasc=?,email=?,sexo=?,cpf=? where id=?";
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1,$model->nome);
        $stmt->bindValue(2,$model->telefone);
        $stmt->bindValue(3,$model->dataNasc);
        $stmt->bindValue(4,$model->email);
        $stmt->bindValue(5,$model->sexo);
        $stmt->bindValue(6,$model->cpf);
        $stmt->bindValue(7,$model->id);

        $stmt->execute();
    }
    public function delete(int $id){
        $sql = "delete from alunos where id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
    public function select(){
        $sql = "select * from alunos";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();   
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectById(string $id){
        
        include_once 'Model/AlunoModel.php';
        $sql = "select * from alunos where id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();  
        $aluno = $stmt->fetchObject("AlunoModel");
        return $aluno;
    }
}