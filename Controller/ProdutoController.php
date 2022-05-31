<?php 
//Criando a classe e as funçoes de produto

class ProdutoController
{
    //rota index
    public static function index()
    {
        include 'Model/ProdutoModel.php';

        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Produto/ProdutoListar.php';
    }

    //rota form
    public static function form()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Produto/ProdutoCadastro.php';
    }

    //rota save
    
    public static function save()
    {
        include 'Model/ProdutoModel.php';

        $produto = new ProdutoModel;
        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];

        $produto->save();
        header("Location: /produto");
    }

    //rota deletar
    public static function delete()
    {
        include 'Model/ProdutoModel.php';

        $delete = new ProdutoModel();
        
        $delete->delete( (int) $_GET['id'] );

        header("Location: /produto");
    }
}