<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>string</h1>
    <?php
    $x = "Hello world";
    $y = 'Hello world';
    echo $x;
    echo "<br>";
    echo $y;
    ?>
    <h2>integer</h2>
    <?php
    $x = 5432;
    var_dump($x);
    ?>
    <h3>flot</h3>
    <?php
    $x = 2.345;
    var_dump($x);
    ?>
    <h4>array</h4>
    <?php
    $cars = array("volvo","bmw","toyota");
    var_dump($cars);
    ?>
    <h5>null</h5>
    <?php
    $x = "hello world";
    $x = "null";
    var_dump($x);
    ?>
</body>
</html>