<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tut2</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}    
.container{
    max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
    <h1>Let's Learn PHP</h1>    
    <?php
    $age = 18;
    if($age>=18){
        echo "You can go to the party";
    }
    else{
        echo "You can not go to the party";
    }
    echo "<br>";
    ////Arrays in PHP
    $laguages = array("Python", "C", "C++", "HTML", "CSS");
    echo $laguages[0];
    echo "<br>";
    $a = 0;
    while($a <= 10){
        echo "The value of a is: ";
        echo "\n";
        echo $a;
        echo "<br>";
        $a++;
    } 
    ?>
    </div>
</body>
</html>