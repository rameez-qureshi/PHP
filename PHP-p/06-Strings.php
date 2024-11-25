<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06-Strings</title>
</head>
<body>
    <h3>STRINGS</h3>
    <?php
    $hello = "This is a string";
    echo $hello;
    $length = strlen($hello);
    echo "<br>Length of string is - " . $length . " -<br>";          // concatenate ( text with variable )
    echo "Number of words in this string is - " . str_word_count($hello) . " -<br>";  // no of words in string
    echo "Reversed string i s- " . strrev($hello) . " -<br>";            // reverse the whole string
    echo "Word -is- in string - " . strpos($hello, "is") . " -<br>";     // search of words
    echo "Replaced string is - " . str_replace("is", "at", $hello);      // replace words
    // echo $length;
    ?>
</body>
</html>