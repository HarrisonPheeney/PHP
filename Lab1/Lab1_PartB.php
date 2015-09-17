

<html>
    <head>
        <title>Lab 1:Part B</title>
    </head>
    <body>

        <h1>
            <?php

            echo "Greetings from Lab 1"

            ?>
        </h1>

    <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
        Donec eu libero sit amet quam egestas semper.
        Aenean ultricies mi vitae est. Mauris placerat eleifend leo</p>

        <h3>

            <?php echo "Hello from Lab 1"?>

        </h3>

    <?php
        $MyName = "Harrison Pheeney";
        $has = "has";
        $a = "a";
        $cat = "cat";

        $Sentence = $MyName." ".$has." ".$a." ".$cat;

        echo $MyName."</p>";
        echo $Sentence."</p>";

        $Number1 = 32;
        $Number2 = 14;
        $Number3 = 83;
        $Number4 = 1024;
        $Number5 = 128;
        $Number6 = 7;
        $Number7 = 769;
        $Number8 = 6;

        $TotalA = (32 * 14) + 83;
        $TotalB = (1024/ 128) -7;
        $TotalC = 769 % 6;

        echo $TotalA."</p>";
        echo $TotalB."</p>";
        echo $TotalC."</p>";


        for ($x = 10; $x >= 0; $x--) {
            echo "$x...";

            if ($x == 0){
                echo "Blast Off";

            }

        }echo "<p>";


        $colors = array("Blue", "Red", "Yellow", "Green", "Orange", "White", "Purple");
        $arrlength = count($colors);

        for ($x = $arrlength; $x >= 0; $x--) {
         echo $colors [$x];
         echo "<br>";


        }echo "<p>";



        foreach ($colors as $value) {
        echo "$value <br>";
        }echo "<p>";

        echo $colors[0]." ".$colors[1]." ".$colors[2]." ".$colors[3]." ".
            $colors[4]." ".$colors[5]." ".$colors[6];



        ?>




</body>
</html>