<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-PHP</title>
</head>
<body>
    <h1>DATA TYPES in PHP</h1>
    <p>String, Integer, Float, Boolean, Array, Object, ( resourse, null -- talk later about both )</p>
    <?php
    $var = "This is a string";
    echo var_dump($var); echo "-- 16 is a length of string"; echo "<br>";
    $var = 50;
    echo var_dump($var); echo "<br>";
    $var = 50.01;
    echo var_dump($var); echo "<br>";
    $var = true;
    echo var_dump($var); echo "<br>";
    ?>

    <h3>CONSTANT in PHP</h3>
    <p>Constant is in top of php. - we use constant in all file of code</p>
    <?php
    define('Pi',3.142);        // this is a constant
    echo Pi;
    ?>
</body>
</html>