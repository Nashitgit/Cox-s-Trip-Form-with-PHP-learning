<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with MySQL project</title>
</head>

<body>

    <div class="container">

    This is my first php website
    
    <?php
        define('pi',3.14);

        echo "Hello World!!!";

        // this line is for comment only
        // this one is also

        $variable1=45;
        $variable2=55;

        Echo $variable1+$variable2;
        echo "<br>";


        //OPERATORS IN PHP

        // Arithmatic Operator 
        echo 'The value of $variable1+$variable2 is ';
        echo $variable1+$variable2;
        echo "<br>";

        echo 'The value of $variable1-$variable2 is ';
        echo $variable1-$variable2;
        echo "<br>";

        echo 'The value of $variable1*$variable2 is ';
        echo $variable1*$variable2;
        echo "<br>";

        echo 'The value of $variable1/$variable2 is ';
        echo $variable1/$variable2;

        echo "<br>";

        // Assignment Operator
        $newvariable=$variable1;
        echo $newvariable; 
        echo "<br>";
        //echo $newvariable +=1;
        echo "<br>";
        echo $newvariable -=1;
        echo "<br>";
        echo $newvariable *=1;
        echo "<br>";
        echo $newvariable /=1;

        echo "<br>";

        // Comparison Operator
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";

        // Increment Decrement Operator
       ECHO $variable1++;
       echo "<br>";
       ECHO $variable1++;
       echo "<br>";

    //    ECHO $variable1--;
    //    ECHO ++$variable1;
    //    ECHO --$variable1;


        // Logical Operator
            // and(&&)
            // or(||)
            // xor
            // not (!)

            // $myVar= (true) and (true);
            // $myVar= (true or false);
            $myVar= (true xor false);
            echo var_dump($myVar);

       

    ?>

    <?php
        //Data Types in PHP
        // 1.String
        // 2.Integer
        // 3.Float
        // 4.Boolean
        // 5.Array 
        // 6.Object

        echo "<br> Data Types <br>";
        $var = "This is a string ";     
        echo var_dump($var);
        echo "<br>";
        $var = 43;     
        echo var_dump($var);
        echo "<br>";


        echo pi;
    ?> 

    </div>
    
</body>
</html>
