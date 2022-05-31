<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
     <!-- Fazendo o formulario -->
        <fieldset>
            <legend>Cadastro de Produto</legend>
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" />

            <label for="preco">Preço:</label>
            <input name="preco" id="preco" type="number" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>