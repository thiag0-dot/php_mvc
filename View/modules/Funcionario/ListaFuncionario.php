<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionario</title>
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
            <th>RG</th>
            <th>CPF</th>
            <TH>TELEFONE</TH>
            <th>EMAIL</th>
            <th>ENDERECO</th>
            <th>DATA NASCIMENTO</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <center>
                    <a href="/funcionario/delete?id=<?= $item->id ?>">X</a>
                </center>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/funcionario/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->rg ?></td>
            <td><?= $item->cpf ?></td>
            <td><?= $item->telefone ?></td>
            <td><?= $item->email ?></td>
            <td><?= $item->endereco ?></td>
            <td><?= $item->data_nascimento ?></td>
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