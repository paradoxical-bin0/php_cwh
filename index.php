<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost:3307";
    $username = "root";
    $password = "Sb@13121105";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    //echo "Success connecting to the db";

    // Collect post variables 
    $name = $_POST['name']; 
    $gender = $_POST['gender']; 
    $age = $_POST['age']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $other = $_POST['other']; 
    $sql = "INSERT INTO `php project trip form`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date/Time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    //echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        //echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <img src="bg2.jpg" class="bg" alt="GECG">
    <div class="container">
        <h1>Welcome to GECG Manali Trip Form</h1>
        <p>Enter your details</p>
        <?php
        if($insert == true)
        {
        echo "<p class='SubmitMsg'>Thanks for submitting your form.</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other info here."></textarea>
            <button type="submit" class="btn">Submit</button>
            
        </form>
    </div>
    <!--<script src="index.js"></script>-->
</body>
</html>
