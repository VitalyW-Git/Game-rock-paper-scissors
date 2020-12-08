<?php
require_once __DIR__ . '/App/Player.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <hr>
    <?php

    $sp1 = new Player('Вася');
    $sp2 = new Player('Петя');
    $sp3 = new Player('Судья');

    $sp3->latsPlay($sp1, $sp2);
    ?>
    <hr>
</body>

</html>
