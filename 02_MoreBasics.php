<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container{
    max-width: 80%;
    background-color:rgb(236, 192, 192);
    margin:auto;
    padding:23px;

}
    

</style>




<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status is here</p>

    <?php
    $age=34;
    if($age>18){
        echo "You can go to the party";

    }
    else if($age==7){
        echo "You are only 7 years old!";
    }
    else{
        echo "You can not go to the party";
    }

    $languages = array("Python", "C++", "PHP", "NodeJs");
    echo $languages[1];
    echo count($languages);

    //Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }
 //Iterating array in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    //Do While Loop
    $a = 100;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }                   //Here first execute then condition check
    while ($a < 10);

    //For Loop
    for ($a=0; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    //For Each Loop
    foreach ($languages as $value){
        echo "<br>The value from foreach loop is: ";
        echo $value;
    }

    //Function
    function print5(){
        echo "<br> FIVE";
    }
    print5();
    print5();
    print5();
    print5();
    print5();

    function print_number($number){
        echo "<br> Your number is ";
        echo $number;
    }
    print_number(45);


    ?>

    </div>


    
</body>
</html>