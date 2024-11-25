<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05-Functions</title>
</head>
<body>
    <?php
    function printfunction(){
        echo " <br>First function without parameter ";
    }
    function print_number($number){
        echo " <br>Your number is ";
        echo $number;
    }
    printfunction();
    print_number(10);
    ?>
</body>
</html>