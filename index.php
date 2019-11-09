<?php include_once './config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP JSON</title>
</head>
<body>
    <h1>Lista de usuarios</h1>
    
    <table>
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td> <?= $usuario['id'] ?> </td>
                    <td> <?= $usuario['nombre'] ?> </td>
                    <td> <?= $usuario['apellido'] ?> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
