<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
    <style>
        body{
            background: rgb(34,193,195);;
        }
    </style>
</head>
<body>
<center>
    <table border="1">
        <tr>
            <th>Delete</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <center>
                    <a href="/produto/delete?id=<?= $item->id ?>">X</a>
                </center>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/produto/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->preco ?></td>

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
</center> 
</body>
</html>