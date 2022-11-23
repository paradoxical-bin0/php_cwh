<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website.
    <?php
    //************** Comments & print
    //echo = print 
    /*
    this
    is
    a multiple line comment
    */
    //use lorem344 for temp cotent
    //select & ctrl+/ = auto comment
    //*************selet & alt+shift = ek saath n lines me typing
        echo "Hello World!";
    ?>
    <?php
        //************Variables
        $var1 = 15;
        $var2 = 07;
        echo $var1;//15
        echo "\n";//for break between 15 and 22
        echo "<br>";//for new line
        echo $var1 + $var2; //22
    ?>
    <?php
        //****************Operators
        echo "<h3>Operators</h3>";
        //Arithmetic Op
        ///////+,-,*,/
        //Assignment Op
        //////=,+=,-=,*=
        //Comparision Op
        //////==,!=,>,<,<=,>=
        echo "The value of 1==4 is ";
        echo var_dump(1==4); //to show var type
        //Increment/Decrement Op
        //////$var++,$var--,++$var,--$var
        //Logical Op
        //////and (&&), or (||), not (!), xor ((((0,1 & 1,0 are True))))
        $var3 = (True and False);
        echo "<br>";
        echo var_dump($var3);
    ?>
    <?php
        ///////***** Data Types
    ?>
    </div>
</body>
</html>