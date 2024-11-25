<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $conn = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `icoderform`.`icoderform` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    
    // if($conn->query($sql) === true){
    //     echo "Successfully inserted";}
    if($conn->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icoder Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img class="bgpic" src="img/bg2.jpg" alt="Icoder">
    <div class="container">
        <h3>Icoder SignUp form</h3>
        <p>Enter your details and submit. </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Form successfully submitted.</p>";
        }
        ?>
    
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Full Name" required />
            <input type="text" name="age" id="age" placeholder="Age" required />
            <input type="text" name="gender" id="gender" placeholder="Gender" required />
            <input type="email" name="email" id="email" placeholder="Email" required />
            <input type="phone" name="phone" id="phone" placeholder="Phone" required />
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Any Query"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>