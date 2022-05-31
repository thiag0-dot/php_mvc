<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de categoria de produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/categoria_produto/save" method="post">
     <!-- Fazendo o formulario -->
        <fieldset>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <legend>Cadastro de Categoria de Produto</legend>
            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>