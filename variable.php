<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP VARIABLES</h2>
    <?php
    $txt = "hellow iam siri";
    $x = 5;
    $y = 12.5;
    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    ?>
    
    <h3>OUT PUT VARIABLES</h3>
    <?php
    $txt = "MY FAMILY";
    echo "I LOVE $txt";
    ?>

<h4>out put variable</h4>
<?php
$txt = "MY FAMILY";
echo "I LOVE " . $txt . "!";
echo "<br>";
$txt = "MY SISTERS";
echo "<br>";
echo "I LOVE " . $txt . "!";
?>
<h4>ADDITION</h4>
<?php
$ta = 6;
$tb = 4;
echo $ta + $tb;
?>
<h5>MULTIPLICATION</h5>
<?php
$ts = 6;
$tr = 4;
echo $ts * $tr;
?>
<h6>DIVISSION</h6>
<?php
$tx = 6;
$ty = 4;
echo $tx / $ty;
?>
<h6>SUBSRACTION</h6>
<?php
$tx = 6;
$ty = 4;
echo $tx - $ty;
?>
</body>
</html>