<?php

class FuncionarioDAO {

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(FuncionarioModel $model)
    {
        $sql = "INSERT INTO funcionario 
                (nome, rg, cpf, email, data_nascimento, telefone, endereco)
                VALUES
                (?, ?, ?, ?, ?, ?, ?) ";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->email);
        $stmt->bindValue(5, $model->data_nascimento);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->endereco);  
        $stmt->execute();

    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE funcionario SET nome=?, rg=?, cpf=?, email=?, data_nascimento=?, telefone=?, endereco=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->rg);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->email);
        $stmt->bindValue(5, $model->data_nascimento);
        $stmt->bindValue(6, $model->telefone);
        $stmt->bindValue(7, $model->endereco);
        $stmt->bindValue(8, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM funcionario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/FuncionarioModel.php';

        $sql = "SELECT * FROM funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");
    }


    
    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}