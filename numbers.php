<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>php integers</h1>
    <?php
    $x = 2846;
    var_dump(is_int($x));
    echo "<br>";
    $x = 28.46;
    var_dump(is_int($x));
    ?>

    <h2>php flots</h2>
    <?php
    $x = 36.28;
    var_dump(is_float($x));
    ?>

    <h3>flot infinity</h3>
    <?php
    $x = 2.2e4861;
    var_dump($x);
    ?>

    <h4>nan</h4>
    <?php
    $x = acos(4);
    var_dump($x);
    ?>

    <h5>numarical</h5>
    <?php
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "2658";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "hi";
    var_dump(is_numeric($x));
    ?>
</body>

</html>