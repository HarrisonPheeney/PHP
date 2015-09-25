<!DOCTYPE html>
<html>
    <head lang="eng">
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>

    <h1>Step 1 </h1>




    <?php


    function PrintText($String, $Number)
    {



        if ($Number == 1) {
            echo "<h1> $String </h1>";
        }

        elseif ($Number == 2) {
            echo "<h2> $String </h2>";
        }

        elseif ($Number == 3) {
            echo "<h3> $String </h3>";
        }

        elseif ($Number == 4) {
            echo "<h4> $String </h4>";
        }

        elseif ($Number == 5) {
            echo "<h5> $String </h5>";
        }

        elseif ($Number == 6) {
            echo "<h6> $String </h6>";

        } else {
            echo "Not a number between 1 and 6";
        }

    }

        for ($x = 1; $x < 7; $x++) {
            echo PrintText("String Text", $x);
        }



    ?>

    <h1>Step 2 </h1>

    <?php


    function ByVal($text)
    {
    $text = "...blah";
    echo "<br \>";
    }

    function ByRef(&$text)
    {
    $text = "...blah";
        echo "<br \>";
    }

    $Stringtext = "Hello,World";

    echo $Stringtext;


   ByVal($Stringtext);

    echo $Stringtext;

   ByRef($Stringtext);

    echo $Stringtext;




?>

    <h1>Step 3</h1>

    <?php
        $age = 30;


    function PrintAge($Num){
        echo "Josh is ".$Num." years old";
    }

    echo PrintAge($age);



    ?>


    <h1>Step 4</h1>

   <?php include('footer.php')?>



    </body>
</html>




