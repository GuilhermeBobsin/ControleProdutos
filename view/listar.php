<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista</h1>
    <table>
        <tr>
            <td>Descrição</td>
            <td>Preço</td>
        </tr>
        <?php foreach($listaArray as $produto): ?>
        <tr>
            <td><?php echo $produto["descricao"]; ?></td>
            <td><?php echo $produto["preco"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>