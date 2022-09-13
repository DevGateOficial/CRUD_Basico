<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listagem de Cursos </title>

    <link rel="stylesheet" href="/View/modules/Curso/style.css">
</head>
<body>
    
    <table>
        <tr>
            <th> </th>
            <th> ID </th>
            <th> Nome </th>
            <th> Descrição </th>
            <th> Ovjetivos </th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td> 
                <a href="/curso/delete?id=<?= $item->id ?>">X</a> 
            </td>
            <td><?= $item->id ?></td>
            <td> 
                <a href="/curso/form?id=<?= $item->id ?>"><?= $item->nome ?></a> 
            </td>
            <td><?= $item->descricao ?></td>
            <td><?= $item->objetivos ?></td>
        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5"> Nenhum registro encontrado </td>
            </tr>
        <?php endif ?>
    </table>
</body>
</html>