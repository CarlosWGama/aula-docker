<?php

#phpinfo();
#die();
//======= CONEXÃO ===========//
CONST DB_HOST = 'db';
CONST DB_USER = 'root';
CONST DB_PASSWORD = '123456';
CONST DB_DATABASE = 'teste';

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$datas = $db->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
        </thead>
        <tbody>
            <?php foreach($datas as $user): ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['nome']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>