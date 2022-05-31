<?php

class FuncionarioModel
{
    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco, $rows;

    public function save() 
    {

        include 'DAO/FuncionarioDAO.php';
        $dao = new FuncionarioDAO();

        if(empty($this->id))
        {
            $dao->insert($this);

        } else 
        {
            $dao->update($this); 
        } 
    }

    /**
     * Método que encapsula a chamada a DAO e que abastecerá a propriedade rows;
     * Esse método é importante pois como a model é "vista" na View a propriedade
     * $rows será acessada e possibilitará listar os registros vindos do banco de dados
     */
    public function getAllRows()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new FuncionarioModel();
    }

    public function delete(int $id)
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $dao->delete($id);
    }
}