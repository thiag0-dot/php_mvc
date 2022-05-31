<?php

class FuncionarioController{

    public static function index() 
    {
        include 'Model/FuncionarioModel.php';

        $model = new FuncionarioModel();
        $model->getAllRows();

        include 'View/modules/Funcionario/ListaFuncionario.php';
    }

    public static function form()
    {
        include 'Model/FuncionarioModel.php'; 
        $model = new FuncionarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Funcionario/FormFuncionario.php';
    }

    public static function save() {

        include 'Model/FuncionarioModel.php';

        $pessoa = new FuncionarioModel();
        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->rg = $_POST['rg'];
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->endereco = $_POST['endereco'];

        $pessoa->save();

        header("Location: /funcionario");
    }

    public static function delete()
    {
        include 'Model/FuncionarioModel.php';

        $delete = new FuncionarioModel();
        
        $delete->delete( (int) $_GET['id'] );

        header("Location: /funcionario");
    }
}