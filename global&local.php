<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>VARIABLE WITH GLOBAL SCOPE</h1>
    <?php
    $x = 5; // global scope
    function myTest() {
        // using x inside this function will generate an error
        echo "<p> variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p> variable x outside function is: $x</p>";
    ?>
</body>
</html>