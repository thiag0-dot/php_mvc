<?php 
//Criando a classe e as funçoes de produto

class CategoriaProdutoController
{
    //rota index
    public static function index()
    {
        include 'Model/CategoriaProdutoModel.php';

        $model = new CategoriaProdutoModel();
        $model->getAllRows();

        include 'View/modules/CategoriaProduto/CategoriaProdutoListar.php';
    }

    //rota form
    public static function form()
    {
        include 'Model/CategoriaProdutoModel.php';
        $model = new CategoriaProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/CategoriaProduto/CategoriaProdutoCadastro.php';
    }

    //rota save
    
    public static function save()
    {
        include 'Model/CategoriaProdutoModel.php';

        $categoriaproduto = new CategoriaProdutoModel;
        $categoriaproduto->id = $_POST['id'];
        $categoriaproduto->descricao = $_POST['descricao'];
        

        $categoriaproduto->save();
        header("Location: /categoria_produto");
    }

    //rota deletar
    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php';

        $delete = new CategoriaProdutoModel();
        
        $delete->delete( (int) $_GET['id'] );

        header("Location: /categoria_produto");
    }
}