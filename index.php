<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;
//echo "<hr />";

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/FuncionarioController.php';
include 'Controller/CategoriaProdutoController.php';

switch($uri_parse)
{
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;
    
## ROTAS PARA PRODUTO

    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

## ROTAS PARA FUNCIONARIO

    case '/funcionario':
        FuncionarioController::index();
    break;
    
    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

    ## ROTAS PARA CATEGORIA PRODUTO

    case '/categoria_produto':
        CategoriaProdutoController::index();
    break;

    case '/categoria_produto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoria_produto/save':
        CategoriaProdutoController::save();
    break;

    case '/categoria_produto/delete':
        CategoriaProdutoController::delete();
    break;

    default:
        echo "erro 404";
    break;
}