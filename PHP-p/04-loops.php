<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04-PHP</title>
</head>
<body>
    <h2>LOOPS IN PHP</h2>
    <h3>while loop</h3>
    <?php
    $x = 0;
    while ($x <= 5) {            // when condition false loop stop
        echo $x;
        echo "<br>";
        $x++;
    }
    ?>

    <h3>Iterating array using loop</h3>
    <?php
    $langs = array( "A-E1", "A-E2", "A-E3", "A-E4", "A-E5");
    $a = 0;
    while ($a < count($langs)) {
        echo "<br>The value of a is: ";
        echo $langs[$a];
        $a++;
    }
    ?>

    <h3>do while loop</h3>
    <?php
    $b = 200;
    do {                                       // run one time then check condition
        echo "<br>The value of a is: ";
        echo $b;
        $b++;
    } while ($b < 10);
    ?>

    <h3>for & forEach loop</h3>
    <?php
    $c = 0;
    for ( $c= 3; $c < 6; $c++ ) { 
        echo "<br>The value of a from the for loop is: ";
        echo $c;
    }
    echo "<br>";

    foreach ($langs as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
    ?>
</body>
</html>