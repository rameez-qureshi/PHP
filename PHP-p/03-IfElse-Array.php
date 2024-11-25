<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03-PHP</title>
</head>
<body>
    <h3>If Else in PHP</h3>
    <?php
    $age = 12;
    if($age>18){
        echo "You can go every party";
    }
    else if($age>=16){
        echo "You are above 16 years old - you go to the uni party";
    }
    else if($age>=10){
        echo "You are above 10 years old - you go to the school party";
    }
    else{
        echo "You can not go to the party";
    }
    ?>
    
    <h3>ARRAYS in PHP</h3>
    <?php
    $lang = array( "java", "c++", "python");
    // echo $lang;                       // error - is tarah print karnay ka koi mtlb ni hay
    echo count($lang);  echo "<br>";  
    echo $lang[0];
    ?>
</body>
</html>