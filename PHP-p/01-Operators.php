<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-PHP</title>
</head>
<body>
    <h1> PHP - 01 </h1>
    <?php
        echo "THIS IS WRITTEN USING PHP";
        echo "<p>this write with php by -p- tag</p>";
        echo "<br>";                                 // add new line in PHP
        // php tag not show in view page course in browser - bcz backend is hidden
    ?>

    <?php
        ECHO "THIS IS WRITTEN 1 USING PHP ";
        // variable can made in php with $ sign
        echo "<br>";
        $a = 50;
        $b = 40;
        $c = $a + $b;
        Echo $c;
    ?>

    <h1>OPERATORS IN PHP</h1>
    <p> .Arithmetic, .Assignment, .Comparison, .Increment/Decrement, .Logical</p>
    <h4>Arithmetic Operator</h4>
    <?php
    echo $a + $b;   echo "<br>";
    echo $a - $b;    echo "<br>";
    echo $a * $b;     echo "<br>";
    echo $a / $b;      echo "<br>";
    ?>

    <h4>Assignment Operator</h4>
    <?php
    $newVar = $a;
    echo "Value of new variable is "; echo $newVar; echo "<br>";
    $newVar += 1; echo "Value of new variable with += 1 is "; echo $newVar; echo "<br>";
    $newVar -= 1; echo "Value of new variable with -= 1 is "; echo $newVar; echo "<br>";
    $newVar *= 1; echo "Value of new variable with *= 1 is "; echo $newVar; echo "<br>";
    $newVar /= 1; echo "Value of new variable with /= 1 is "; echo $newVar; echo "<br>";
    ?>

    <h4>Comparison Operator</h4>
    <?php
    echo " 50 == 40 is "; echo var_dump($a == $b); echo "<br>";
    echo " 50 != 40 is "; echo var_dump($a != $b); echo "<br>";
    echo " 50 <= 40 is "; echo var_dump($a <= $b); echo "<br>";
    echo " 50 >= 40 is "; echo var_dump($a >= $b); echo "<br>";
    ?>

    <h4>Increment/Decrement Operator</h4>
    <?php
    echo " 50 i++ is "; echo $a++; echo " first print then add"; echo "<br>";
    echo " 50 ++i is "; echo ++$a; echo " add first";            echo "<br>";
    echo " 50 i-- is "; echo $a--; echo " first print then sub"; echo "<br>";
    echo " 50 --i is "; echo --$a; echo " sub first";            echo "<br>";
    ?>

    <h4>Logical Operator</h4>
    <?php
    echo "<p>logical operator is AND(&&), OR(||), XOR, NOT(!)</p> ";
    echo var_dump( true and true );echo " --- In AND both true then print true otherwise false";   echo "<br>";  
    echo var_dump( true or false ); echo " --- In OR anyone true then print true otherwise false"; echo "<br>";  
    echo var_dump( true xor true ); echo " --- In XOR both same print false otherwise true";     echo "<br>";  
    echo var_dump( ! true ); echo " --- In NOT print opposite";                            echo "<br>";  
    ?>
    
</body>
</html>